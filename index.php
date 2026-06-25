<?php
error_reporting(0);
session_start();
$pg = $_REQUEST['pg'] ?? '';
$cat = $_REQUEST['cat'] ?? '';
if (($pg == "") && ($cat == "")) $pg = "home";
$opg = $pg . ".php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Niche Intellectual Property Offices - Professional IP Solutions">
    <title>Niche Intellectual Property Offices</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Custom Modern Stylesheet -->
    <link href="css/modern-style.css?v=1.1" rel="stylesheet">
</head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="brand-wrapper" href="?pg=home">
                <img src="images/logo.png" alt="NICHE IPO Logo" height="52" style="max-height: 52px; width: auto;">
            </a>

            <!-- Hamburger toggle menu -->
            <button class="navbar-toggler-custom d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="?pg=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?pg=trademark">Trademark</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?pg=copyright">Copyright</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?pg=patent">Patent</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?pg=design">Design</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?pg=gi">Geographical Indications</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="profilesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profiles
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="profilesDropdown">
                            <li><a class="dropdown-item" href="?pg=profiles&tab=owner">Leadership Profiles</a></li>
                            <li><a class="dropdown-item" href="?pg=profiles&tab=associates">Associates Profile</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content Area -->
    <div id="main-content">
        <?php 
        if ($pg == "home" || $pg == "1" || ($pg == "" && $cat == "")) {
            // Display Hero Section and Homepage Contents
        ?>
        
        <!-- Hero Section -->
        <section class="hero">
            <div class="container">
                <div class="hero-layout-grid">
                    
                    <!-- Left Column: Title, tagline, description -->
                    <div class="hero-col-left" data-aos="fade-right" data-aos-duration="1000">
                        <div class="hero-tagline-wrap">
                            <span class="hero-tagline-line"></span>
                            <span class="hero-tagline">ESTABLISHED COUNSEL &middot; EST. KOLKATA</span>
                        </div>
                        
                        <h1 class="hero-title-main">
                            Protecting <span class="gold-serif">global</span> innovation, since the first idea.
                        </h1>
                        
                        <p class="hero-desc-para">
                            NICHE Intellectual Property Offices is an IPR attorney house delivering world-class legal protection across patents, trademarks, copyrights, and designs &mdash; across India and ten international jurisdictions.
                        </p>
                        
                        <div class="hero-cta-group">
                            <a href="#contact" class="btn-cta-gold">Book A Confidential Consultation <span class="arrow-icon">↗</span></a>
                            <a href="#services" class="btn-cta-explore">Explore Our Practice</a>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Scroll indicator mouse symbol -->
            <div class="scroll-indicator-wrap" onclick="document.getElementById('services').scrollIntoView({behavior: 'smooth'})">
                <div class="mouse-scroll-icon">
                    <span class="mouse-scroll-dot"></span>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="stats-section">
            <div class="container">
                <div class="stats-grid">
                    <div class="stat-item" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="stat-number">25+</h3>
                        <p class="stat-label">Years of IPR Practice</p>
                    </div>
                    <div class="stat-item" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="stat-number">5</h3>
                        <p class="stat-label">Indian Cities</p>
                    </div>
                    <div class="stat-item" data-aos="fade-up" data-aos-delay="300">
                        <h3 class="stat-number">11</h3>
                        <p class="stat-label">Global Jurisdictions</p>
                    </div>
                    <div class="stat-item" data-aos="fade-up" data-aos-delay="400">
                        <h3 class="stat-number">1000+</h3>
                        <p class="stat-label">Patents & Marks Filed</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="services-section" id="services">
            <div class="container">
                <div class="services-header-grid">
                    <div class="services-header-left" data-aos="fade-right">
                        <span class="services-label-num">01 &mdash; PRACTICE</span>
                        <h2 class="section-title-large">A complete <span class="gold-serif">IP arsenal</span>, under one roof.</h2>
                    </div>
                    <div class="services-header-right" data-aos="fade-left">
                        <p class="services-header-desc">
                            From the first ideation to enforcement before the Appellate Board, every step of your intellectual property journey is handled by senior attorneys with decades of cross-border expertise.
                        </p>
                    </div>
                </div>

                <div class="service-grid">
                    <!-- Trademarks Card -->
                    <a href="?pg=trademark" class="service-card-modern" data-aos="fade-up" data-aos-delay="100" style="text-decoration: none;">
                        <span class="service-card-arrow">↗</span>
                        <div class="service-card-icon-box">
                            <i class="fas fa-stamp"></i>
                        </div>
                        <h4 class="service-card-title">Trademarks</h4>
                        <p class="service-card-body">End-to-end protection of brand identity &mdash; search, filing, prosecution, opposition and renewal.</p>
                    </a>

                    <!-- Patents Card with Blueprint Background -->
                    <div class="service-card-modern card-blueprint" data-aos="fade-up" data-aos-delay="200">
                        <span class="service-card-arrow">↗</span>
                        <div class="service-card-icon-box">
                            <i class="fas fa-flask"></i>
                        </div>
                        <h4 class="service-card-title">Patents</h4>
                        <p class="service-card-body">Specification drafting, Indian filings, PCT and National Phase entry across major jurisdictions.</p>
                    </div>

                    <!-- Copyrights Card -->
                    <div class="service-card-modern" data-aos="fade-up" data-aos-delay="300">
                        <span class="service-card-arrow">↗</span>
                        <div class="service-card-icon-box">
                            <i class="fas fa-copyright"></i>
                        </div>
                        <h4 class="service-card-title">Copyrights</h4>
                        <p class="service-card-body">Register and secure literary, dramatic, musical, artistic works and software to protect against unauthorized usage.</p>
                    </div>

                    <!-- IP Consultation Card -->
                    <div class="service-card-modern" data-aos="fade-up" data-aos-delay="400">
                        <span class="service-card-arrow">↗</span>
                        <div class="service-card-icon-box">
                            <i class="fas fa-search"></i>
                        </div>
                        <h4 class="service-card-title">IP Consultation</h4>
                        <p class="service-card-body">Portfolio audit, technology landscapes, freedom-to-operate searches, and valuation of intellectual properties.</p>
                    </div>

                    <!-- Dispute Resolution Card -->
                    <div class="service-card-modern" data-aos="fade-up" data-aos-delay="500">
                        <span class="service-card-arrow">↗</span>
                        <div class="service-card-icon-box">
                            <i class="fas fa-gavel"></i>
                        </div>
                        <h4 class="service-card-title">Dispute Resolution</h4>
                        <p class="service-card-body">Filing and disposal of pre/post grant patent oppositions, appellate board matters, and full intellectual property litigation.</p>
                    </div>

                    <!-- License Management Card -->
                    <div class="service-card-modern" data-aos="fade-up" data-aos-delay="600">
                        <span class="service-card-arrow">↗</span>
                        <div class="service-card-icon-box">
                            <i class="fas fa-file-contract"></i>
                        </div>
                        <h4 class="service-card-title">License Management</h4>
                        <p class="service-card-body">Drafting licensing contracts, technology transfers, assignments, and joint development agreements.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features & Pricing Anchor sections to match navigation styling -->
        <div id="features"></div>
        <div id="pricing"></div>

        <!-- About Section -->
        <section class="about-section" id="about">
            <div class="container">
                <div class="about-grid-layout">
                    
                    <div class="about-content-left" data-aos="fade-up">
                        <span class="section-label">Who We Are</span>
                        <h2>About NICHE IPO</h2>
                        <p>
                            NICHE Intellectual Property Offices is a premier IPR house comprising a group of registered Patent Attorneys, Advocates, and Engineers. Founded by <strong>Niloy Kumar Gupta</strong>, a former Controller of Patents & Designs and registered Patent Agent, the firm brings decades of specialized experience handling IP specifications, filings, and regulatory procedures.
                        </p>
                        <p>
                            We manage a comprehensive portfolio of services including Patents, Trademarks, Designs, Copyrights, and Geographical Indications. Our practice bridges complex legal frameworks with deep technical expertise to file specifications, PCT applications, and handle oppositions/litigations in India and globally.
                        </p>
                        
                        <div class="about-features-list">
                            <div class="about-feature-item">
                                <i class="fas fa-check-circle about-feature-icon"></i>
                                <div class="about-feature-text-group">
                                    <h5>IPR Attorney House & Patent Agent</h5>
                                    <p>Led by a former Controller of Patents and Designs (Registered Patent Agent IN/PA-902).</p>
                                </div>
                            </div>
                            <div class="about-feature-item">
                                <i class="fas fa-check-circle about-feature-icon"></i>
                                <div class="about-feature-text-group">
                                    <h5>Pan-India & Global Network</h5>
                                    <p>Offices in Kolkata with associate networks across Delhi, Mumbai, Chennai, Hyderabad, USA, China, EU, UK, and Australia.</p>
                                </div>
                            </div>
                            <div class="about-feature-item">
                                <i class="fas fa-check-circle about-feature-icon"></i>
                                <div class="about-feature-text-group">
                                    <h5>Corporate & Regulatory Consultations</h5>
                                    <p>Additional advice on CE & CCC Certifications and Tax filings.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="about-graphic-right" data-aos="fade-up" data-aos-delay="200">
                        <svg viewBox="0 0 200 200" class="about-graphic-svg" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="grad-gold" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#ffb800; stop-opacity:1" />
                                    <stop offset="50%" style="stop-color:#00f2fe; stop-opacity:0.8" />
                                    <stop offset="100%" style="stop-color:#00f2fe; stop-opacity:0.2" />
                                </linearGradient>
                                <linearGradient id="grad-shield" x1="0%" y1="0%" x2="0%" y2="100%">
                                    <stop offset="0%" style="stop-color:rgba(255, 184, 0, 0.2);" />
                                    <stop offset="100%" style="stop-color:rgba(12, 12, 18, 0.75);" />
                                </linearGradient>
                                <radialGradient id="grad-glow" cx="50%" cy="50%" r="50%">
                                    <stop offset="0%" style="stop-color:#ffb800; stop-opacity:0.25" />
                                    <stop offset="100%" style="stop-color:#050508; stop-opacity:0" />
                                </radialGradient>
                                <radialGradient id="core-glow" cx="50%" cy="50%" r="50%">
                                    <stop offset="0%" style="stop-color:#00f2fe; stop-opacity:0.8" />
                                    <stop offset="100%" style="stop-color:#ffb800; stop-opacity:0" />
                                </radialGradient>
                                <filter id="glow" x="-20%" y="-20%" width="140%" height="140%">
                                    <feGaussianBlur stdDeviation="3" result="blur" />
                                    <feMerge>
                                        <feMergeNode in="blur" />
                                        <feMergeNode in="SourceGraphic" />
                                    </feMerge>
                                </filter>
                            </defs>
                            
                            <!-- Outer Glow Aura -->
                            <circle cx="100" cy="100" r="85" fill="url(#grad-glow)" class="aura-pulse" />
                            
                            <!-- HUD Radar Rings (Static & Slowly Rotating Outer Circles) -->
                            <g class="hud-container">
                                <circle cx="100" cy="100" r="92" fill="none" stroke="rgba(0, 242, 254, 0.15)" stroke-width="0.75" stroke-dasharray="1 8" class="hud-dots" />
                                <circle cx="100" cy="100" r="85" fill="none" stroke="rgba(255, 184, 0, 0.25)" stroke-width="1.2" stroke-dasharray="25 15 5 15" class="hud-outer-ring" />
                                <circle cx="100" cy="100" r="78" fill="none" stroke="rgba(255, 255, 255, 0.08)" stroke-width="0.75" stroke-dasharray="8 4" class="hud-inner-ring" />
                                
                                <!-- Crosshair Ticks -->
                                <line x1="100" y1="5" x2="100" y2="12" stroke="rgba(0, 242, 254, 0.4)" stroke-width="1" />
                                <line x1="100" y1="188" x2="100" y2="195" stroke="rgba(0, 242, 254, 0.4)" stroke-width="1" />
                                <line x1="5" y1="100" x2="12" y2="100" stroke="rgba(0, 242, 254, 0.4)" stroke-width="1" />
                                <line x1="188" y1="100" x2="195" y2="100" stroke="rgba(0, 242, 254, 0.4)" stroke-width="1" />
                            </g>
                            
                            <!-- 3D Gyroscopic Orbits -->
                            <g class="gyro-container">
                                <!-- Gyro Orbit 1 (Tilted Diagonal) -->
                                <g class="gyro-ring-group gyro-1">
                                    <ellipse cx="100" cy="100" rx="72" ry="24" fill="none" stroke="url(#grad-gold)" stroke-width="1.2" filter="url(#glow)" />
                                    <!-- Orbiting Node -->
                                    <circle cx="28" cy="100" r="3" fill="#ffffff" filter="url(#glow)" />
                                </g>
                                
                                <!-- Gyro Orbit 2 (Opposite Diagonal) -->
                                <g class="gyro-ring-group gyro-2">
                                    <ellipse cx="100" cy="100" rx="72" ry="24" fill="none" stroke="url(#grad-gold)" stroke-width="1.2" filter="url(#glow)" />
                                    <!-- Orbiting Node -->
                                    <circle cx="172" cy="100" r="3" fill="#00f2fe" filter="url(#glow)" />
                                </g>

                                <!-- Gyro Orbit 3 (Vertical Axis) -->
                                <g class="gyro-ring-group gyro-3">
                                    <ellipse cx="100" cy="100" rx="72" ry="24" fill="none" stroke="rgba(255, 184, 0, 0.3)" stroke-width="1" />
                                    <!-- Orbiting Node -->
                                    <circle cx="100" cy="28" r="2.5" fill="#ffffff" />
                                </g>
                            </g>
                            
                            <!-- Central Security Shield (Protected IP) -->
                            <g class="shield-container">
                                <!-- Inner Shield Glow -->
                                <path d="M 100 58 C 120 58, 137 53, 142 47 C 142 77, 131 106, 100 138 C 69 106, 58 77, 58 47 C 63 53, 80 58, 100 58 Z" fill="url(#grad-shield)" stroke="url(#grad-gold)" stroke-width="1.5" class="main-shield" filter="url(#glow)" />
                                <path d="M 100 67 C 114 67, 126 63, 130 59 C 130 80, 122 101, 100 124 C 78 101, 70 80, 70 59 C 74 63, 86 67, 100 67 Z" fill="none" stroke="rgba(255, 255, 255, 0.15)" stroke-width="1" stroke-dasharray="4 2" class="inner-shield-border" />
                                
                                <!-- Shield Circuit Lines (Intellectual Property Pathways) -->
                                <g class="shield-circuit" stroke="rgba(0, 242, 254, 0.35)" stroke-width="0.75" fill="none">
                                    <path d="M 100 95 L 85 80 L 85 70" />
                                    <path d="M 100 95 L 115 80 L 115 70" />
                                    <path d="M 100 95 L 100 115" />
                                    
                                    <!-- Traveling Data Pulses -->
                                    <path d="M 100 95 L 85 80 L 85 70" stroke="#ffffff" stroke-width="1.2" stroke-dasharray="10 30" class="data-pulse-1" filter="url(#glow)" />
                                    <path d="M 100 95 L 115 80 L 115 70" stroke="#ffb800" stroke-width="1.2" stroke-dasharray="10 30" class="data-pulse-2" filter="url(#glow)" />
                                    <path d="M 100 95 L 100 115" stroke="#ffffff" stroke-width="1.2" stroke-dasharray="5 20" class="data-pulse-3" filter="url(#glow)" />
                                </g>
                                
                                <!-- Shield Micro Nodes -->
                                <circle cx="85" cy="70" r="2" fill="#00f2fe" class="shield-node" />
                                <circle cx="115" cy="70" r="2" fill="#00f2fe" class="shield-node" />
                                <circle cx="100" cy="115" r="2" fill="#ffffff" class="shield-node" />
                                
                                <!-- Central Core (Creative Spark / Innovation) -->
                                <circle cx="100" cy="95" r="14" fill="url(#core-glow)" class="core-pulse-fast" />
                                <circle cx="100" cy="95" r="7" fill="#00f2fe" class="core-center" filter="url(#glow)" />
                            </g>

                            <!-- Constellation Nodes (Floating background particles) -->
                            <g class="network-nodes">
                                <circle cx="42" cy="45" r="2" fill="#ffb800" class="float-node-1" />
                                <circle cx="158" cy="45" r="2" fill="#ffffff" class="float-node-2" />
                                <circle cx="35" cy="145" r="2.5" fill="#ffffff" class="float-node-3" />
                                <circle cx="165" cy="145" r="2.5" fill="#ffb800" class="float-node-4" />
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="contact-section" id="contact">
            <div class="container">
                <div class="section-header-center">
                    <span class="section-label" data-aos="fade-up">Get In Touch</span>
                    <h2 class="section-title-large" data-aos="fade-up" data-aos-delay="100">Send Us A Message</h2>
                    <p class="section-subtitle-text" data-aos="fade-up" data-aos-delay="200">
                        Request a consultation on patent filings or trademark protection services.
                    </p>
                </div>

                <div class="contact-card-wrap glass-panel" data-aos="fade-up" data-aos-delay="300">
                    <form method="POST" action="cont.php">
                        <div class="contact-form-group">
                            <label class="contact-form-label">Name</label>
                            <input type="text" class="contact-form-control" name="name" placeholder="Your name" required>
                        </div>

                        <div class="contact-form-group">
                            <label class="contact-form-label">Email</label>
                            <input type="email" class="contact-form-control" name="email" placeholder="your@email.com" required>
                        </div>

                        <div class="contact-form-group">
                            <label class="contact-form-label">Subject</label>
                            <input type="text" class="contact-form-control" name="subject" placeholder="How can we help?" required>
                        </div>

                        <div class="contact-form-group">
                            <label class="contact-form-label">Message</label>
                            <textarea class="contact-form-control" name="message" placeholder="Your message..." required></textarea>
                        </div>

                        <button type="submit" class="btn-contact-submit">Send Message</button>
                    </form>
                </div>
            </div>
        </section>

        <?php
        } else {
            // Display other routing CMS / page contents dynamically
            if ($pg == "trademark" || $pg == "copyright" || $pg == "patent" || $pg == "design" || $pg == "gi" || $pg == "profiles") {
                include $opg;
            } else {
        ?>
        <!-- CMS Content Section -->
        <section class="cms-container-wrap">
            <div class="container">
                <div class="cms-card-outer" data-aos="fade-up" data-aos-duration="800">
                    <?php 
                    if ($pg != "") {
                        include $opg;
                    } else {
                        include ("conn/conn.php");
                        mysql_select_db($db_name);
                        $sql = "select * from cms where cmsid=$cat";
                        $res = mysql_query($sql, $lnk);
                        $fres = mysql_fetch_assoc($res);
                        echo base64_decode($fres['cms']);
                    }
                    ?>
                </div>
            </div>
        </section>
        <?php 
            }
        } 
        ?>
    </div>

    <!-- Footer Section -->
    <footer class="footer-modern">
        <div class="container">
            <div class="footer-grid-layout">
                
                <div class="footer-section-col">
                    <h5>About Us</h5>
                    <p>
                        NICHE Intellectual Property Offices provides comprehensive intellectual property protection, legal support, and global filing audits.
                    </p>
                    <div class="footer-social-icons">
                        <a href="https://www.linkedin.com/in/shumanto-gupta-9b80b851?utm_source=share_via&utm_content=profile&utm_medium=member_ios" target="_blank" class="footer-social-btn" title="LinkedIn" aria-label="LinkedIn logo link">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>

                <div class="footer-section-col">
                    <h5>Quick Links</h5>
                    <ul class="footer-links-list">
                        <li class="footer-link-item"><a href="?pg=home">Home</a></li>
                        <li class="footer-link-item"><a href="#about">About Us</a></li>
                        <li class="footer-link-item"><a href="#contact">Contact</a></li>
                    </ul>
                </div>

                <div class="footer-section-col">
                    <h5>Contact Info</h5>
                    <div class="footer-contact-details">
                        <div class="footer-contact-item">
                            <i class="fas fa-envelope" aria-hidden="true"></i>
                            <span>
                                shumanto@nicheipo.com<br>
                                shibani@nicheipo.com
                            </span>
                        </div>
                        <div class="footer-contact-item">
                            <i class="fas fa-phone" aria-hidden="true"></i>
                            <span>
                                Landline: 033-2529-9731
                            </span>
                        </div>
                        <div class="footer-contact-item">
                            <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                            <span>5/2/4 G1, K B Sarani, Kolkata 700080</span>
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="footer-bottom-bar">
                <p class="footer-bottom-copy">&copy; <?php echo date('Y'); ?> NICHE Intellectual Property Offices. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- AOS Animate On Scroll JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- Custom Modern Script -->
    <script src="js/modern-script.js?v=1.2"></script>

</body>
</html>
