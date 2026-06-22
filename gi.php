<?php
// Prevent direct access if included out of context
if (!isset($pg)) {
    header("Location: index.php?pg=gi");
    exit;
}
?>
<!-- Custom Page-Specific Stylesheet (Reusing Trademark styles for visual consistency) -->
<link href="css/trademark-style.css?v=1.1" rel="stylesheet">

<style>
    /* Custom style overrides for GI Table and Comparison Cards */
    .gi-table-wrapper {
        background: rgba(11, 15, 38, 0.4);
        border: 1px solid var(--tm-border-glass);
        border-radius: 16px;
        overflow: hidden;
        margin-top: 2rem;
    }
    .gi-table {
        width: 100%;
        margin-bottom: 0;
        color: var(--tm-text-white);
        border-collapse: collapse;
    }
    .gi-table th {
        background: rgba(255, 184, 0, 0.15);
        color: var(--tm-accent-blue);
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        padding: 1.25rem 1.5rem;
        border-bottom: 2px solid rgba(0, 242, 254, 0.2);
    }
    .gi-table td {
        padding: 1.25rem 1.5rem;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        font-size: 1rem;
    }
    .gi-table tr:hover {
        background: rgba(255, 255, 255, 0.02);
    }
    .gi-badge {
        background: linear-gradient(135deg, rgba(255, 184, 0, 0.2), rgba(0, 242, 254, 0.2));
        color: var(--tm-accent-blue);
        border: 1px solid rgba(0, 242, 254, 0.3);
        padding: 0.25rem 0.75rem;
        border-radius: 30px;
        font-size: 0.85rem;
        font-family: monospace;
    }
    .comparison-container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 2rem;
        margin-top: 2.5rem;
    }
    @media (max-width: 768px) {
        .comparison-container {
            grid-template-columns: 1fr;
        }
    }
</style>

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
                    <span class="tm-tagline">Cultural Heritage &bull; Regional Specialties</span>
                    <span class="tm-tagline-line"></span>
                </div>
                
                <h1 class="tm-heading-hero text-center">
                    Geographical Indications in <span class="tm-text-gradient">India</span>
                </h1>
                
                <p class="tm-desc-hero text-center mx-auto">
                    Safeguard the authenticity, traditional knowledge, and unique origin-linked characteristics of your regional products. Empower local communities and prevent unauthorized market exploitation.
                </p>
                
                <div class="tm-cta-group justify-content-center">
                    <a href="#about-gi" class="tm-btn-primary">
                        Learn More <span class="arrow-icon"><i class="fa-solid fa-arrow-down"></i></span>
                    </a>
                    <a href="#examples" class="tm-btn-secondary">
                        Famous GI Tags <span class="arrow-icon"><i class="fa-solid fa-table-list"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 2: WHAT IS A GI & WHY IS IT IMPORTANT -->
    <section class="tm-section" id="about-gi">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="tm-tagline-wrap">
                        <span class="tm-tagline-line"></span>
                        <span class="tm-tagline">Origin Protection</span>
                    </div>
                    <h2 class="tm-heading-section text-start mb-4">What is a Geographical Indication?</h2>
                    <p class="text-white opacity-75 mb-3" style="font-size: 1.05rem; line-height: 1.8;">
                        A Geographical Indication (GI) is a form of Intellectual Property that identifies a product as originating from a specific geographical region, where its quality, reputation, characteristics, or uniqueness are essentially attributable to its place of origin. 
                    </p>
                    <p class="text-white opacity-75 mb-3" style="font-size: 1.05rem; line-height: 1.8;">
                        GI protection helps preserve traditional knowledge, cultural heritage, and the goodwill associated with products that have developed a distinctive identity through generations of local expertise.
                    </p>
                    <p class="text-white opacity-75" style="font-size: 1.05rem; line-height: 1.8;">
                        In India, Geographical Indications are protected under the Geographical Indications of Goods (Registration and Protection) Act, 1999, which came into force in 2003. The registration and administration of GI rights are handled by the Geographical Indications Registry in Chennai.
                    </p>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="tm-glass-card p-5" style="border-left: 4px solid var(--tm-accent-blue);">
                        <div class="tm-tagline-wrap">
                            <span class="tm-tagline-line"></span>
                            <span class="tm-tagline">Historic First</span>
                        </div>
                        <h3 class="text-white mb-3">India’s First GI Tag</h3>
                        <p class="text-white opacity-75 mb-4" style="line-height: 1.7;">
                            Darjeeling Tea from West Bengal holds the distinction of being India’s first registered Geographical Indication and remains one of the most internationally recognized GI products from the country.
                        </p>
                        <div class="p-3 bg-dark bg-opacity-40 border border-secondary rounded">
                            <i class="fa-solid fa-mug-hot text-info me-2"></i>
                            <span class="text-white opacity-75 small">Darjeeling Tea represents the golden standard of GI preservation, protecting local tea estates and promoting export value.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 3: BENEFITS OF GI REGISTRATION -->
    <section class="tm-section" id="benefits">
        <div class="container">
            <div class="tm-section-label-center">
                <div class="tm-tagline-wrap justify-content-center">
                    <span class="tm-tagline-line"></span>
                    <span class="tm-tagline">Preservations & Growth</span>
                    <span class="tm-tagline-line"></span>
                </div>
                <h2 class="tm-heading-section">Why is GI Registration Important?</h2>
                <p class="tm-desc-section">Understand the key advantages, community protections, and brand identity established by regional GI markings.</p>
            </div>

            <div class="row g-4">
                <!-- Benefit 1: Exclusive Rights -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="tm-glass-card h-100">
                        <div class="tm-card-icon-box">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <h4 class="tm-card-title">Product Protection</h4>
                        <p class="tm-card-body">Protects regional products against unauthorized commercial use, counterfeit production, and deceptive imitations.</p>
                    </div>
                </div>

                <!-- Benefit 2: Cultural Preservation -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="tm-glass-card h-100">
                        <div class="tm-card-icon-box">
                            <i class="fa-solid fa-monument"></i>
                        </div>
                        <h4 class="tm-card-title">Cultural Heritage</h4>
                        <p class="tm-card-body">Preserves age-old traditional skills, artistic heritage, local agricultural lore, and historic handicraft knowledge.</p>
                    </div>
                </div>

                <!-- Benefit 3: Commercial Advantage -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="tm-glass-card h-100">
                        <div class="tm-card-icon-box">
                            <i class="fa-solid fa-award"></i>
                        </div>
                        <h4 class="tm-card-title">Reputation & Value</h4>
                        <p class="tm-card-body">Enhances the market value and credibility of regional products, establishing a premium reputation nationwide.</p>
                    </div>
                </div>

                <!-- Benefit 4: Export Support -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="tm-glass-card h-100">
                        <div class="tm-card-icon-box">
                            <i class="fa-solid fa-ship"></i>
                        </div>
                        <h4 class="tm-card-title">Export & Trade</h4>
                        <p class="tm-card-body">Promotes exports and economic growth for local producers by highlighting genuine, origin-backed product features globally.</p>
                    </div>
                </div>

                <!-- Benefit 5: Quality Assurance -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="tm-glass-card h-100">
                        <div class="tm-card-icon-box">
                            <i class="fa-solid fa-certificate"></i>
                        </div>
                        <h4 class="tm-card-title">Quality Assurance</h4>
                        <p class="tm-card-body">Assures consumers of the authenticity, true origin, and specific quality standard of the purchased item.</p>
                    </div>
                </div>

                <!-- Benefit 6: Economic Empowerment -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="tm-glass-card h-100">
                        <div class="tm-card-icon-box">
                            <i class="fa-solid fa-scale-balanced"></i>
                        </div>
                        <h4 class="tm-card-title">Local Empowerment</h4>
                        <p class="tm-card-body">Helps rural artisans, farmers, and craftsmen receive direct recognition, protection, and financial benefits.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 4: COMPARISON WITH TRADEMARK -->
    <section class="tm-section" id="difference">
        <div class="container">
            <div class="tm-section-label-center">
                <div class="tm-tagline-wrap justify-content-center">
                    <span class="tm-tagline-line"></span>
                    <span class="tm-tagline">IPR Distinctions</span>
                    <span class="tm-tagline-line"></span>
                </div>
                <h2 class="tm-heading-section">Difference Between a Trademark & a GI</h2>
                <p class="tm-desc-section">Understand the key conceptual and structural differences between these two protective rights.</p>
            </div>

            <div class="comparison-container">
                <div class="tm-glass-card p-5" data-aos="fade-right">
                    <div class="tm-card-icon-box" style="background: rgba(0, 242, 254, 0.1); border-color: var(--tm-accent-blue);">
                        <i class="fa-solid fa-stamp text-info"></i>
                    </div>
                    <h4 class="text-white mb-3">Trademark</h4>
                    <p class="text-white opacity-75 mb-3" style="line-height: 1.7;">
                        A trademark identifies goods or services originating from a <strong>particular company or business</strong>.
                    </p>
                    <p class="text-white opacity-75" style="line-height: 1.7;">
                        It belongs to a <strong>single corporate entity, individual, or firm</strong>, giving them exclusive brand rights to monetize or license their name/logo.
                    </p>
                </div>
                
                <div class="tm-glass-card p-5" data-aos="fade-left">
                    <div class="tm-card-icon-box" style="background: rgba(255, 184, 0, 0.1); border-color: var(--tm-accent-gold);">
                        <i class="fa-solid fa-map-location-dot text-gold" style="color:#ffb800;"></i>
                    </div>
                    <h4 class="text-white mb-3">Geographical Indication (GI)</h4>
                    <p class="text-white opacity-75 mb-3" style="line-height: 1.7;">
                        A Geographical Indication identifies products originating from a <strong>specific geographical region</strong> whose qualities are linked to that site.
                    </p>
                    <p class="text-white opacity-75" style="line-height: 1.7;">
                        It belongs <strong>collectively to all the producers</strong> of that region, rather than being owned by a single individual or company.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 5: WELL-KNOWN GI PRODUCTS IN INDIA -->
    <section class="tm-section" id="examples">
        <div class="container">
            <div class="tm-section-label-center">
                <div class="tm-tagline-wrap justify-content-center">
                    <span class="tm-tagline-line"></span>
                    <span class="tm-tagline">National Registry</span>
                    <span class="tm-tagline-line"></span>
                </div>
                <h2 class="tm-heading-section">Well-Known Geographical Indications</h2>
                <p class="tm-desc-section">India is home to hundreds of GI-protected products. Here are some of the most famous examples:</p>
            </div>

            <div class="gi-table-wrapper" data-aos="fade-up">
                <div class="table-responsive">
                    <table class="gi-table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>State/Region</th>
                                <th>Category Type</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Darjeeling Tea</strong></td>
                                <td>West Bengal</td>
                                <td><span class="gi-badge">Agricultural</span></td>
                            </tr>
                            <tr>
                                <td><strong>Basmati Rice</strong></td>
                                <td>Northern India</td>
                                <td><span class="gi-badge">Agricultural</span></td>
                            </tr>
                            <tr>
                                <td><strong>Kanchipuram Silk Saree</strong></td>
                                <td>Tamil Nadu</td>
                                <td><span class="gi-badge">Handicrafts</span></td>
                            </tr>
                            <tr>
                                <td><strong>Banarasi Silk Saree</strong></td>
                                <td>Uttar Pradesh</td>
                                <td><span class="gi-badge">Handicrafts</span></td>
                            </tr>
                            <tr>
                                <td><strong>Pochampally Ikat</strong></td>
                                <td>Telangana</td>
                                <td><span class="gi-badge">Handicrafts</span></td>
                            </tr>
                            <tr>
                                <td><strong>Kolhapuri Chappal</strong></td>
                                <td>Maharashtra</td>
                                <td><span class="gi-badge">Handicrafts</span></td>
                            </tr>
                            <tr>
                                <td><strong>Nagpur Orange</strong></td>
                                <td>Maharashtra</td>
                                <td><span class="gi-badge">Agricultural</span></td>
                            </tr>
                            <tr>
                                <td><strong>Bikaneri Bhujia</strong></td>
                                <td>Rajasthan</td>
                                <td><span class="gi-badge">Food Stuff</span></td>
                            </tr>
                            <tr>
                                <td><strong>Kashmir Saffron</strong></td>
                                <td>Jammu & Kashmir</td>
                                <td><span class="gi-badge">Agricultural</span></td>
                            </tr>
                            <tr>
                                <td><strong>Alphonso Mango</strong></td>
                                <td>Maharashtra</td>
                                <td><span class="gi-badge">Agricultural</span></td>
                            </tr>
                            <tr>
                                <td><strong>Mysore Silk</strong></td>
                                <td>Karnataka</td>
                                <td><span class="gi-badge">Handicrafts</span></td>
                            </tr>
                            <tr>
                                <td><strong>Madhubani Paintings</strong></td>
                                <td>Bihar</td>
                                <td><span class="gi-badge">Handicrafts</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 6: CONCLUSION & CTA -->
    <section class="tm-section" id="quick-tm-form" style="padding-bottom: 120px;">
        <div class="container">
            <div class="tm-glass-card p-5 text-center" data-aos="fade-up">
                <h3 class="text-white mb-3">Safeguarding Authentic Origins</h3>
                <p class="text-white opacity-75 mx-auto mb-4" style="max-width: 750px;">
                    Geographical Indications play a crucial role in protecting India’s rich cultural heritage, traditional craftsmanship, agricultural excellence, and regional specialties. By safeguarding authenticity and preventing misuse, GI registration empowers local communities, strengthens regional economies, and ensures that consumers receive genuine products linked to their true place of origin.
                </p>
                <div class="d-inline-block">
                    <a href="#contact" class="tm-btn-primary">
                        Discuss GI Registration <span class="arrow-icon"><i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </section>

</div>
