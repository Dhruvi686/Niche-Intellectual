<?php
// Prevent direct access if included out of context
if (!isset($pg)) {
    header("Location: index.php?pg=patent");
    exit;
}
?>
<!-- Custom Page-Specific Stylesheet (Reusing Trademark styles for visual consistency) -->
<link href="css/trademark-style.css?v=1.1" rel="stylesheet">

<div class="tm-page-wrapper">
    
    <!-- Background Glowing Orbs for Luxury Look -->
    <div class="tm-glow-orb tm-glow-orb-1"></div>
    <div class="tm-glow-orb tm-glow-orb-2"></div>
    <div class="tm-glow-orb tm-glow-orb-3"></div>

    <!-- SECTION 1: HERO SECTION -->
    <section class="tm-section tm-section-first">
        <div class="container">
            <div class="tm-hero-content-centered" data-aos="fade-up" data-aos-duration="1000">
                <div class="tm-tagline-wrap justify-content-center">
                    <span class="tm-tagline-line"></span>
                    <span class="tm-tagline">Innovation Protection &bull; Patent Rights</span>
                    <span class="tm-tagline-line"></span>
                </div>
                
                <h1 class="tm-heading-hero text-center">
                    Patent Registration in <span class="tm-text-gradient">India</span>
                </h1>
                
                <p class="tm-desc-hero text-center mx-auto">
                    Secure your technological advancements and creative inventions. Obtain exclusive legal ownership, prevent unauthorized commercial exploitation, and command a distinct market advantage.
                </p>
                
                <div class="tm-cta-group justify-content-center">
                    <a href="#contact" class="tm-btn-primary">
                        Secure Your Innovation <span class="arrow-icon"><i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                    <a href="#process" class="tm-btn-secondary">
                        View Process <span class="arrow-icon"><i class="fa-solid fa-bars-staggered"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 2: WHAT IS A PATENT & WHY REGISTRATION IS IMPORTANT -->
    <section class="tm-section" id="about-patent">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="tm-tagline-wrap">
                        <span class="tm-tagline-line"></span>
                        <span class="tm-tagline">What is a Patent?</span>
                    </div>
                    <h2 class="tm-heading-section text-start mb-4">Legal Monopoly Over Inventions</h2>
                    <p class="text-white opacity-75 mb-4" style="font-size: 1.1rem; line-height: 1.8;">
                        A patent is a legal right granted by the Government to an inventor for a new and useful invention. It provides the patent owner with exclusive rights to make, use, sell, license, or distribute the invention for a specified period, preventing others from using the invention without permission.
                    </p>
                    <p class="text-white opacity-75 mb-4" style="font-size: 1.1rem; line-height: 1.8;">
                        Patents are designed to encourage innovation by rewarding inventors for their creativity, research, and technological advancements. Whether you are an individual inventor, startup, researcher, or established business, obtaining a patent can be one of the most valuable steps in protecting your intellectual property.
                    </p>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="tm-glass-card p-5" style="border-left: 4px solid var(--tm-accent-blue);">
                        <div class="tm-tagline-wrap">
                            <span class="tm-tagline-line"></span>
                            <span class="tm-tagline">Why File a Patent?</span>
                        </div>
                        <h3 class="text-white mb-3">Strategic Business Security</h3>
                        <p class="text-white opacity-75 mb-3" style="line-height: 1.7;">
                            Innovative ideas often require significant investment of time, effort, and resources. Without patent protection, competitors may copy and commercially exploit your invention.
                        </p>
                        <p class="text-white opacity-75" style="line-height: 1.7;">
                            A registered patent grants exclusive rights, allowing the owner to control how the invention is used, manufactured, marketed, and licensed. This protection can significantly enhance the commercial value of an invention and create new business opportunities.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 3: BENEFITS OF PATENT REGISTRATION -->
    <section class="tm-section" id="benefits">
        <div class="container">
            <div class="tm-section-label-center">
                <div class="tm-tagline-wrap justify-content-center">
                    <span class="tm-tagline-line"></span>
                    <span class="tm-tagline">Benefits of Registration</span>
                    <span class="tm-tagline-line"></span>
                </div>
                <h2 class="tm-heading-section">Why Register Your Patent?</h2>
                <p class="tm-desc-section">Understand the key advantages, commercial protections, and legal monopolies gained by securing a patent in India.</p>
            </div>

            <div class="row g-4">
                <!-- Benefit 1: Exclusive Rights -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="tm-glass-card h-100">
                        <div class="tm-card-icon-box">
                            <i class="fa-solid fa-crown"></i>
                        </div>
                        <h4 class="tm-card-title">Exclusive Rights</h4>
                        <p class="tm-card-body">The patent owner obtains exclusive rights over the invention and can prevent unauthorized use, manufacture, sale, or distribution.</p>
                    </div>
                </div>

                <!-- Benefit 2: Legal Protection -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="tm-glass-card h-100">
                        <div class="tm-card-icon-box">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <h4 class="tm-card-title">Legal Protection</h4>
                        <p class="tm-card-body">Patents provide strong legal protection against infringement, unauthorized copying, and commercial exploitation by competitors.</p>
                    </div>
                </div>

                <!-- Benefit 3: Commercial Advantage -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="tm-glass-card h-100">
                        <div class="tm-card-icon-box">
                            <i class="fa-solid fa-chart-line"></i>
                        </div>
                        <h4 class="tm-card-title">Commercial Advantage</h4>
                        <p class="tm-card-body">A patented invention creates a competitive edge in the market by offering unique products or proprietary technologies.</p>
                    </div>
                </div>

                <!-- Benefit 4: Licensing and Royalties -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="tm-glass-card h-100">
                        <div class="tm-card-icon-box">
                            <i class="fa-solid fa-file-contract"></i>
                        </div>
                        <h4 class="tm-card-title">Licensing and Royalties</h4>
                        <p class="tm-card-body">Patent owners may license their inventions to third parties and earn royalty income without directly manufacturing the product.</p>
                    </div>
                </div>

                <!-- Benefit 5: Business Valuation -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="tm-glass-card h-100">
                        <div class="tm-card-icon-box">
                            <i class="fa-solid fa-hand-holding-dollar"></i>
                        </div>
                        <h4 class="tm-card-title">Business Valuation</h4>
                        <p class="tm-card-body">Patents are valuable intellectual assets that can substantially increase the valuation of startups, research labs, and businesses.</p>
                    </div>
                </div>

                <!-- Benefit 6: Investor Confidence -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="tm-glass-card h-100">
                        <div class="tm-card-icon-box">
                            <i class="fa-solid fa-users-gear"></i>
                        </div>
                        <h4 class="tm-card-title">Investor Confidence</h4>
                        <p class="tm-card-body">Investors and venture capitalists strongly prefer businesses with patented technologies as they demonstrate innovation and exclusivity.</p>
                    </div>
                </div>
            </div>
            
            <div class="row justify-content-center mt-4">
                <!-- Benefit 7: Market Recognition -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                    <div class="tm-glass-card h-100">
                        <div class="tm-card-icon-box">
                            <i class="fa-solid fa-award"></i>
                        </div>
                        <h4 class="tm-card-title">Market Recognition</h4>
                        <p class="tm-card-body">A patented product or technology establishes credibility and enhances the inventor's reputation within the industry.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 4: WHAT CAN BE PATENTED? -->
    <section class="tm-section" id="patentability">
        <div class="container">
            <div class="tm-section-label-center">
                <div class="tm-tagline-wrap justify-content-center">
                    <span class="tm-tagline-line"></span>
                    <span class="tm-tagline">Scope & Criteria</span>
                    <span class="tm-tagline-line"></span>
                </div>
                <h2 class="tm-heading-section">What Can Be Patented?</h2>
                <p class="tm-desc-section">An invention may be patentable if it satisfies the following three statutory requirements:</p>
            </div>

            <div class="row g-4 justify-content-center mb-5">
                <!-- Criteria 1 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="tm-gradient-border-card text-center p-4">
                        <div class="card-icon-round mx-auto mb-3"><i class="fa-solid fa-sparkles"></i></div>
                        <h5>It is Novel</h5>
                        <p class="text-white opacity-50 small mt-2">Must be brand new and not previously disclosed to the public anywhere in the world.</p>
                    </div>
                </div>
                
                <!-- Criteria 2 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="tm-gradient-border-card text-center p-4">
                        <div class="card-icon-round mx-auto mb-3"><i class="fa-solid fa-lightbulb"></i></div>
                        <h5>Involves an Inventive Step</h5>
                        <p class="text-white opacity-50 small mt-2">Cannot be obvious to a person skilled in the same technical field.</p>
                    </div>
                </div>

                <!-- Criteria 3 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="tm-gradient-border-card text-center p-4">
                        <div class="card-icon-round mx-auto mb-3"><i class="fa-solid fa-industry"></i></div>
                        <h5>Capable of Industrial Application</h5>
                        <p class="text-white opacity-50 small mt-2">Must be capable of being manufactured or used in a practical industry.</p>
                    </div>
                </div>
            </div>

            <div class="tm-glass-card p-5" data-aos="fade-up">
                <h4 class="text-white mb-4 text-center">Examples of Patentable Inventions</h4>
                <div class="row g-3">
                    <div class="col-md-6">
                        <ul class="list-unstyled text-white opacity-75">
                            <li class="mb-3"><i class="fa-solid fa-circle-check text-info me-2"></i> New products, mechanical devices, and engineering hardware</li>
                            <li class="mb-3"><i class="fa-solid fa-circle-check text-info me-2"></i> Industrial machinery, tools, and automated equipment</li>
                            <li class="mb-3"><i class="fa-solid fa-circle-check text-info me-2"></i> Pharmaceutical drugs, medical formulations, and chemical compositions</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-unstyled text-white opacity-75">
                            <li class="mb-3"><i class="fa-solid fa-circle-check text-info me-2"></i> Innovative manufacturing processes, methods, and synthesis workflows</li>
                            <li class="mb-3"><i class="fa-solid fa-circle-check text-info me-2"></i> Software-related inventions linked to a concrete technical effect</li>
                            <li class="mb-3"><i class="fa-solid fa-circle-check text-info me-2"></i> Materials science innovations and micro-electronic advancements</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 5: REGISTRATION PROCESS -->
    <section class="tm-section" id="process">
        <div class="container">
            <div class="tm-section-label-center">
                <div class="tm-tagline-wrap justify-content-center">
                    <span class="tm-tagline-line"></span>
                    <span class="tm-tagline">Procedural Roadmap</span>
                    <span class="tm-tagline-line"></span>
                </div>
                <h2 class="tm-heading-section">Patent Registration Process</h2>
                <p class="tm-desc-section">Our systematic pathway guarantees thorough specifications and smooth navigation of patent office examinations.</p>
            </div>

            <!-- Custom Horizontal Timeline -->
            <div class="row g-4 justify-content-center mt-4">
                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="50">
                    <div class="tm-glass-card p-4 text-center h-100" style="border-top: 3px solid var(--tm-accent-gold);">
                        <div class="text-info font-monospace mb-2" style="font-size: 0.9rem; letter-spacing: 2px;">STEP 01</div>
                        <h5 class="text-white mb-2">Search & Analysis</h5>
                        <p class="text-white opacity-50 small mb-0">Prior art assessment to check novelty and avoid conflict with existing registrations.</p>
                    </div>
                </div>
                
                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="tm-glass-card p-4 text-center h-100" style="border-top: 3px solid var(--tm-accent-blue);">
                        <div class="text-info font-monospace mb-2" style="font-size: 0.9rem; letter-spacing: 2px;">STEP 02</div>
                        <h5 class="text-white mb-2">Drafting Specifications</h5>
                        <p class="text-white opacity-50 small mb-0">Drafting the patent description, abstract, claims, and drawing diagrams to define scope.</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="150">
                    <div class="tm-glass-card p-4 text-center h-100" style="border-top: 3px solid var(--tm-accent-gold);">
                        <div class="text-info font-monospace mb-2" style="font-size: 0.9rem; letter-spacing: 2px;">STEP 03</div>
                        <h5 class="text-white mb-2">Filing Application</h5>
                        <p class="text-white opacity-50 small mb-0">Submitting the formal patent application to the Indian Patent Office (Form 1 & 2).</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="tm-glass-card p-4 text-center h-100" style="border-top: 3px solid var(--tm-accent-blue);">
                        <div class="text-info font-monospace mb-2" style="font-size: 0.9rem; letter-spacing: 2px;">STEP 04</div>
                        <h5 class="text-white mb-2">Publication</h5>
                        <p class="text-white opacity-50 small mb-0">The application is published in the Official Patent Journal after 18 months (or earlier if requested).</p>
                    </div>
                </div>
            </div>

            <div class="row g-4 justify-content-center mt-3">
                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
                    <div class="tm-glass-card p-4 text-center h-100" style="border-top: 3px solid var(--tm-accent-gold);">
                        <div class="text-info font-monospace mb-2" style="font-size: 0.9rem; letter-spacing: 2px;">STEP 05</div>
                        <h5 class="text-white mb-2">Examination</h5>
                        <p class="text-white opacity-50 small mb-0">Filing Request for Examination (RFE). The Patent Examiner reviews the specification for criteria compliance.</p>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="tm-glass-card p-4 text-center h-100" style="border-top: 3px solid var(--tm-accent-blue);">
                        <div class="text-info font-monospace mb-2" style="font-size: 0.9rem; letter-spacing: 2px;">STEP 06</div>
                        <h5 class="text-white mb-2">Objections Response</h5>
                        <p class="text-white opacity-50 small mb-0">Drafting responses to clarify examiner queries and address objections in the Examination Report.</p>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="350">
                    <div class="tm-glass-card p-4 text-center h-100" style="border-top: 3px solid var(--tm-accent-gold);">
                        <div class="text-info font-monospace mb-2" style="font-size: 0.9rem; letter-spacing: 2px;">STEP 07</div>
                        <h5 class="text-white mb-2">Grant & Certification</h5>
                        <p class="text-white opacity-50 small mb-0">Upon resolving all objections, the patent is officially granted, and the certificate is issued.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 6: CALL TO ACTION -->
    <section class="tm-section" id="quick-tm-form" style="padding-bottom: 120px;">
        <div class="container">
            <div class="tm-glass-card p-5 text-center" data-aos="fade-up">
                <h3 class="text-white mb-3">Protect Your Invention Today</h3>
                <p class="text-white opacity-75 mx-auto mb-4" style="max-width: 600px;">
                    Every great invention begins with an idea. Secure your competitive advantage and turn your creativity into a protected corporate asset.
                </p>
                <div class="d-inline-block">
                    <a href="#contact" class="tm-btn-primary">
                        Contact Our Patent Attorneys <span class="arrow-icon"><i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </section>

</div>
