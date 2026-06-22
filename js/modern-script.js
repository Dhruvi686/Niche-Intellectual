/* ==========================================================================
   NICHE IPO - Modern SaaS UI Script
   Contains dynamic SVG topographic wave generator, smooth scrolling,
   navbar scrolling behaviors, and clean validation.
   ========================================================================== */

document.addEventListener('DOMContentLoaded', function() {
    // Initialize AOS animations
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            once: true,
            offset: 50,
            easing: 'ease-out-quad'
        });
    }

    // Failsafe: If AOS fails to load/initialize, force visibility of elements
    setTimeout(function() {
        if (typeof AOS === 'undefined' || !document.querySelector('.aos-init')) {
            document.querySelectorAll('[data-aos]').forEach(function(el) {
                el.style.opacity = '1';
                el.style.transform = 'none';
                el.style.visibility = 'visible';
            });
            console.warn('AOS failed to load or initialize. Falling back to default visibility.');
        }
    }, 1000);

    // 1. Initialize dynamic topographic waves
    initializeTopographicWaves();

    // 2. Initialize scrolling behaviors
    initializeNavbarScroll();
    initializeSmoothScroll();

    // 3. Initialize search bar
    initializeSearch();

    // 4. Initialize forms and validation
    initializeForms();

    // 5. Initialize active links
    initializeActiveLinks();

    // 6. Initialize stats counter
    initializeStatsCounter();
});

/* ==========================================================================
   DYNAMIC TOPOGRAPHIC WAVE GENERATOR
   ========================================================================== */

function initializeTopographicWaves() {
    const svg = document.getElementById('topographic-svg');
    if (!svg) return;

    // Define configuration for the two shapes matching user's reference crop (further increased sizes)
    const config = {
        kidney: {
            centerX: 190,       // Moved 15% left to overlap behind heading
            centerY: 220,       // Centered vertically
            baseRadius: 310,    // Size increased by 40%
            rings: 24,          // Number of concentric rings
            shiftX: -100,       // Bundles inner loops tightly on the left
            shiftY: 15,         // Subtle vertical shift
            gradient: 'url(#grad-kidney)',
            opacity: 0.75,
            aspectX: 1.35,      // Stretched width
            aspectY: 0.85,      // Compressed height
            type: 'kidney'
        },
        flat: {
            centerX: 490,       // Moved left and upward to reduce gap
            centerY: 320,       // Moved upward
            baseRadius: 240,    // Increased size for massive overlap
            rings: 20,          // Number of rings
            shiftX: -95,        // Bundles inner loops on the top-left
            shiftY: -35,        // Shifts up
            gradient: 'url(#grad-flat)',
            opacity: 0.65,
            aspectX: 1.45,      // Stretched width
            aspectY: 0.6,       // Compressed height
            type: 'flat'
        }
    };

    let phaseKidney = 0;
    let phaseFlat = 0;

    const pathsKidney = [];
    const pathsFlat = [];

    // Helper for concentric color transitions matching user's wave crop
    function getInterpolatedColor(scale, type) {
        let c1, c2, c3;
        if (type === 'kidney') {
            // Innermost: Vibrant Pink (#f04be6) -> Middle: Gold (#ffb800) -> Outermost: Light Blue (#82aff5)
            c1 = [240, 75, 230];
            c2 = [255, 184, 0];
            c3 = [130, 175, 245];
        } else {
            // Innermost: Dark Indigo (#281e50) -> Middle: Indigo/Blue (#5a64e6) -> Outermost: Glowing Sky Blue (#73afff)
            c1 = [40, 30, 80];
            c2 = [90, 100, 230];
            c3 = [115, 175, 255];
        }
        
        let r, g, b;
        if (scale < 0.5) {
            const f = scale * 2;
            r = Math.round(c1[0] + f * (c2[0] - c1[0]));
            g = Math.round(c1[1] + f * (c2[1] - c1[1]));
            b = Math.round(c1[2] + f * (c2[2] - c1[2]));
        } else {
            const f = (scale - 0.5) * 2;
            r = Math.round(c2[0] + f * (c3[0] - c2[0]));
            g = Math.round(c2[1] + f * (c3[1] - c2[1]));
            b = Math.round(c2[2] + f * (c3[2] - c2[2]));
        }
        return `rgb(${r}, ${g}, ${b})`;
    }

    // Create paths for kidney shape (middle wave)
    for (let i = 1; i <= config.kidney.rings; i++) {
        const path = document.createElementNS('http://www.w3.org/2000/svg', 'path');
        path.setAttribute('class', 'dynamic-contour');
        
        const scale = i / config.kidney.rings;
        // Apply color based on scale (concentric transition)
        const strokeColor = getInterpolatedColor(scale, 'kidney');
        path.setAttribute('stroke', strokeColor);
        
        // Keep lines bright and distinct, with subtle fade towards the outer edges
        const op = 0.88 - (scale * 0.16);
        path.setAttribute('stroke-opacity', op.toFixed(2));
        
        svg.appendChild(path);
        pathsKidney.push({
            element: path,
            ringIndex: i,
            totalRings: config.kidney.rings,
            cfg: config.kidney
        });
    }

    // Create paths for flat shape (bottom-right wave)
    for (let i = 1; i <= config.flat.rings; i++) {
        const path = document.createElementNS('http://www.w3.org/2000/svg', 'path');
        path.setAttribute('class', 'dynamic-contour');
        
        const scale = i / config.flat.rings;
        const strokeColor = getInterpolatedColor(scale, 'flat');
        path.setAttribute('stroke', strokeColor);
        
        const op = 0.82 - (scale * 0.15);
        path.setAttribute('stroke-opacity', op.toFixed(2));
        
        svg.appendChild(path);
        pathsFlat.push({
            element: path,
            ringIndex: i,
            totalRings: config.flat.rings,
            cfg: config.flat
        });
    }

    // Mathematical organic path generator
    function getPathData(ringIndex, totalRings, cfg, phase) {
        const points = [];
        const steps = 80;
        const scale = ringIndex / totalRings;
        const r0 = cfg.baseRadius * scale;

        // Apply center shift (inner rings shift, outer rings remain centered)
        const cx = cfg.centerX + (1 - scale) * cfg.shiftX;
        const cy = cfg.centerY + (1 - scale) * cfg.shiftY;

        for (let i = 0; i <= steps; i++) {
            const angle = (i / steps) * Math.PI * 2;
            let perturbation = 1.0;

            if (cfg.type === 'kidney') {
                // Highly organic kidney shape with asymmetrical morphing
                perturbation = 1.0
                    + 0.22 * Math.cos(angle)
                    + 0.12 * Math.sin(1.5 * angle + phase * 0.3)
                    - 0.18 * Math.cos(2 * angle - 0.2 + Math.sin(phase) * 0.15)
                    + 0.08 * Math.sin(3 * angle + phase * 0.6)
                    + 0.05 * Math.cos(4 * angle - phase * 0.2);
            } else {
                // Highly distorted fluid horizontal shape
                perturbation = 1.0
                    + 0.25 * Math.cos(2 * angle + phase * 0.2)
                    + 0.15 * Math.sin(angle - Math.cos(phase) * 0.1)
                    - 0.10 * Math.cos(3 * angle - phase * 0.4)
                    + 0.06 * Math.sin(4 * angle + phase * 0.7);
            }

            const r = r0 * perturbation;
            const x = cx + Math.cos(angle) * r * cfg.aspectX;
            const y = cy + Math.sin(angle) * r * cfg.aspectY;

            points.push(`${i === 0 ? 'M' : 'L'} ${x.toFixed(1)} ${y.toFixed(1)}`);
        }
        points.push('Z');
        return points.join(' ');
    }

    // Animation Loop
    function animate() {
        // Slow phase transitions for organic floating motion
        phaseKidney += 0.0028;
        phaseFlat += 0.0035;

        // Render kidney shape
        pathsKidney.forEach(item => {
            const d = getPathData(item.ringIndex, item.totalRings, item.cfg, phaseKidney);
            item.element.setAttribute('d', d);
        });

        // Render flat shape
        pathsFlat.forEach(item => {
            const d = getPathData(item.ringIndex, item.totalRings, item.cfg, phaseFlat);
            item.element.setAttribute('d', d);
        });

        requestAnimationFrame(animate);
    }

    // Kickoff the loop
    animate();
}

/* ==========================================================================
   NAVBAR & SCROLL BEHAVIORS
   ========================================================================== */

function initializeNavbarScroll() {
    const navbar = document.querySelector('.navbar');
    if (!navbar) return;

    window.addEventListener('scroll', function() {
        if (window.scrollY > 40) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // Auto collapse mobile navbar menu on item click
    const navLinks = document.querySelectorAll('.nav-link, .btn-signin-pill');
    const navbarCollapse = document.querySelector('.navbar-collapse');
    
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            if (navbarCollapse && navbarCollapse.classList.contains('show')) {
                const toggler = document.querySelector('.navbar-toggler');
                if (toggler) toggler.click();
            }
        });
    });
}

function initializeSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href === '#') return;
            
            const target = document.querySelector(href);
            if (target) {
                e.preventDefault();
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
}

/* ==========================================================================
   SEARCH BAR BEHAVIOR
   ========================================================================== */

function initializeSearch() {
    const searchInput = document.querySelector('.search-input-pill');
    const searchBtn = document.querySelector('.search-btn-icon');
    
    if (searchInput) {
        // Trigger search on Enter keypress
        searchInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                performSearch(this.value);
            }
        });
    }

    if (searchBtn && searchInput) {
        // Trigger search on icon click
        searchBtn.addEventListener('click', function(e) {
            e.preventDefault();
            performSearch(searchInput.value);
        });
    }
}

function performSearch(query) {
    if (query && query.trim()) {
        const cleanQuery = encodeURIComponent(query.trim());
        // Custom search routing or redirection (e.g. search through database services)
        window.location.href = `?pg=lnks&q=${cleanQuery}#services`;
    }
}

/* ==========================================================================
   CONTACT FORM VALIDATION
   ========================================================================== */

function initializeForms() {
    const forms = document.querySelectorAll('form');
    
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            // Validate all form fields first
            let isFormValid = true;
            const inputs = form.querySelectorAll('.contact-form-control');
            
            inputs.forEach(input => {
                if (!validateField(input)) {
                    isFormValid = false;
                }
            });

            if (!isFormValid) {
                e.preventDefault();
                return;
            }

            // Show submit spinner feedback
            const submitBtn = form.querySelector('[type="submit"]');
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Sending...';
            }
        });

        // Add real-time blur validation
        const inputs = form.querySelectorAll('.contact-form-control');
        inputs.forEach(input => {
            input.addEventListener('blur', function() {
                validateField(this);
            });
            input.addEventListener('input', function() {
                if (this.style.borderColor === 'red') {
                    validateField(this);
                }
            });
        });
    });
}

function validateField(field) {
    const val = field.value.trim();
    let isValid = true;

    if (field.hasAttribute('required') && !val) {
        isValid = false;
    }

    if (field.type === 'email' && val) {
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        isValid = emailPattern.test(val);
    }

    if (!isValid) {
        field.style.borderColor = 'rgba(239, 68, 68, 0.5)';
        field.style.boxShadow = '0 0 10px rgba(239, 68, 68, 0.15)';
    } else {
        field.style.borderColor = 'rgba(255, 255, 255, 0.1)';
        field.style.boxShadow = 'none';
    }

    return isValid;
}

/* ==========================================================================
   ACTIVE NAVIGATION HIGHLIGHTS
   ========================================================================== */

function initializeActiveLinks() {
    const sections = document.querySelectorAll('section[id]');
    
    window.addEventListener('scroll', () => {
        let scrollY = window.pageYOffset;
        
        sections.forEach(current => {
            const sectionHeight = current.offsetHeight;
            const sectionTop = current.offsetTop - 150;
            const sectionId = current.getAttribute('id');
            const navLink = document.querySelector(`.navbar-nav a[href*=${sectionId}]`);
            
            if (navLink) {
                if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                    navLink.style.color = '#ffffff';
                } else {
                    navLink.style.color = 'var(--text-muted)';
                }
            }
        });
    });
}

/* ==========================================================================
   STATS COUNTER COUNT-UP ANIMATION
   ========================================================================== */

function initializeStatsCounter() {
    const statsSection = document.querySelector('.stats-section');
    if (!statsSection) return;

    const counters = statsSection.querySelectorAll('.stat-number');
    const animate = (counter) => {
        const text = counter.innerText.trim();
        const target = parseInt(text.replace(/[^0-9]/g, ''), 10);
        if (isNaN(target)) return;
        
        const suffix = text.replace(/[0-9]/g, '');
        const duration = 1800; // 1.8 seconds duration
        const startTime = performance.now();

        // Set initial text to 0
        counter.innerText = '0' + suffix;

        const update = (now) => {
            const elapsed = now - startTime;
            const progress = Math.min(elapsed / duration, 1);
            
            // Easing: easeOutExpo
            const easeProgress = progress === 1 ? 1 : 1 - Math.pow(2, -10 * progress);
            const current = Math.floor(easeProgress * target);
            
            counter.innerText = current + suffix;

            if (progress < 1) {
                requestAnimationFrame(update);
            } else {
                counter.innerText = text; // Ensure exact final text representation
            }
        };

        requestAnimationFrame(update);
    };

    // Use Intersection Observer to trigger when section comes into viewport
    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    counters.forEach(counter => animate(counter));
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15 });
        observer.observe(statsSection);
    } else {
        // Fallback: animate immediately
        counters.forEach(counter => animate(counter));
    }
}
