<?php
// Prevent direct access if included out of context
if (!isset($pg)) {
    header("Location: index.php?pg=profiles");
    exit;
}

// Determine default tab from request parameter
$activeTab = isset($_REQUEST['tab']) && $_REQUEST['tab'] === 'associates' ? 'associates' : 'owner';
?>
<!-- Custom Page-Specific Stylesheet (Reusing Trademark styles for visual consistency) -->
<link href="css/trademark-style.css?v=1.1" rel="stylesheet">

<style>
    /* Profile specific luxury styling */
    .profile-tabs-nav {
        display: flex;
        justify-content: center;
        gap: 1.5rem;
        margin-bottom: 3.5rem;
    }
    .profile-tab-btn {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid var(--tm-border-glass);
        color: var(--tm-text-muted);
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-weight: 700;
        font-size: 1.05rem;
        padding: 0.85rem 2.25rem;
        border-radius: 30px;
        cursor: pointer;
        transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .profile-tab-btn:hover {
        color: var(--tm-text-white);
        border-color: rgba(0, 242, 254, 0.3);
        background: rgba(0, 242, 254, 0.03);
    }
    .profile-tab-btn.active {
        background: linear-gradient(135deg, var(--tm-accent-gold) 0%, var(--tm-accent-blue) 100%);
        color: #000000;
        border-color: transparent;
        box-shadow: 0 10px 25px rgba(0, 242, 254, 0.25);
    }
    .profile-content-pane {
        display: none;
    }
    .profile-content-pane.active {
        display: block;
        animation: paneFadeIn 0.6s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }
    @keyframes paneFadeIn {
        from {
            opacity: 0;
            transform: translateY(15px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    .owner-card {
        background: rgba(11, 15, 38, 0.4);
        border: 1px solid var(--tm-border-glass);
        border-radius: 24px;
        padding: 3.5rem;
        box-shadow: 0 30px 60px rgba(0,0,0,0.4);
    }
    .owner-img-wrap {
        position: relative;
        border-radius: 20px;
        overflow: hidden;
        border: 2px solid rgba(0, 242, 254, 0.2);
        box-shadow: 0 15px 30px rgba(0, 242, 254, 0.15);
    }
    .owner-img {
        width: 100%;
        height: auto;
        display: block;
        filter: grayscale(10%) contrast(105%);
        transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .owner-img-wrap:hover .owner-img {
        transform: scale(1.04);
    }
    .associate-location-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
        gap: 1.25rem;
        margin-top: 1.5rem;
    }
    .associate-loc-card {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid var(--tm-border-glass);
        padding: 1.25rem;
        border-radius: 16px;
        text-align: center;
        transition: all 0.3s ease;
    }
    .associate-loc-card:hover {
        border-color: rgba(255, 184, 0, 0.3);
        background: rgba(255, 184, 0, 0.03);
        transform: translateY(-3px);
    }
    .loc-icon {
        font-size: 1.5rem;
        margin-bottom: 0.75rem;
        background: linear-gradient(135deg, var(--tm-accent-gold), var(--tm-accent-blue));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        display: inline-block;
    }
    
    /* Interactive List Directory Styles */
    .assoc-list-item {
        background: rgba(255, 255, 255, 0.01);
        border: 1px solid rgba(255, 255, 255, 0.03);
        cursor: pointer;
        transition: all 0.3s ease;
    }
    .assoc-list-item:hover {
        background: rgba(255, 255, 255, 0.03);
        border-color: rgba(255, 255, 255, 0.1);
        transform: translateX(4px);
    }
    .assoc-dot-indicator {
        display: inline-block;
        width: 8px;
        height: 8px;
        border-radius: 50%;
    }
    .assoc-dot-indicator.domestic {
        background: #00f2fe;
        box-shadow: 0 0 8px rgba(0, 242, 254, 0.6);
    }
    .assoc-dot-indicator.global {
        background: #ffb800;
        box-shadow: 0 0 8px rgba(255, 184, 0, 0.6);
    }
</style>

<div class="tm-page-wrapper">
    
    <!-- Background Glowing Orbs for Luxury Look -->
    <div class="tm-glow-orb tm-glow-orb-1"></div>
    <div class="tm-glow-orb tm-glow-orb-2"></div>
    <div class="tm-glow-orb tm-glow-orb-3"></div>

    <!-- SECTION 1: HERO SECTION -->
    <section class="tm-section tm-section-first pb-5">
        <div class="container">
            <div class="tm-hero-content-centered" data-aos="fade-up" data-aos-duration="1000">
                <div class="tm-tagline-wrap justify-content-center">
                    <span class="tm-tagline-line"></span>
                    <span class="tm-tagline">Firm Leadership & Network</span>
                    <span class="tm-tagline-line"></span>
                </div>
                
                <h1 class="tm-heading-hero text-center">
                    Professional <span class="tm-text-gradient">Profiles</span>
                </h1>
                
                <p class="tm-desc-hero text-center mx-auto mb-2">
                    Meet the experienced IPR leadership behind Niche Intellectual Property Offices, and explore our robust network of national and international legal associates.
                </p>
            </div>
        </div>
    </section>

    <!-- SECTION 2: PROFILE TAB SWITCHER AND PANES -->
    <section class="tm-section pt-0">
        <div class="container">
            
            <!-- Tabs Navigation -->
            <div class="profile-tabs-nav" data-aos="fade-up" data-aos-delay="100">
                <button class="profile-tab-btn <?php echo $activeTab === 'owner' ? 'active' : ''; ?>" onclick="switchProfileTab('owner')">
                    <i class="fa-solid fa-user-tie me-2"></i> Leadership Profiles
                </button>
                <button class="profile-tab-btn <?php echo $activeTab === 'associates' ? 'active' : ''; ?>" onclick="switchProfileTab('associates')">
                    <i class="fa-solid fa-earth-asia me-2"></i> Associates Profile
                </button>
            </div>

            <!-- Tab Content Panes -->
            <div class="profile-tabs-content">
                
                <!-- PANE 1: OWNER / LEADERSHIP PROFILE -->
                <div id="pane-owner" class="profile-content-pane <?php echo $activeTab === 'owner' ? 'active' : ''; ?>">
                    
                    <!-- Niloy Kumar Gupta Card -->
                    <div class="owner-card">
                        <div class="row align-items-center g-5">
                            <div class="col-lg-4 text-center">
                                <div class="owner-img-wrap mx-auto" style="max-width: 280px;">
                                    <img src="images/niloy_kumar_gupta.jpg" alt="Niloy Kumar Gupta" class="owner-img">
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <span class="text-info font-monospace small d-block mb-2" style="letter-spacing: 2px;">FOUNDER & SENIOR PARTNER</span>
                                <h2 class="text-white mb-2" style="font-family: var(--tm-font-heading); font-weight: 800;">Niloy Kumar Gupta</h2>
                                <h6 class="text-white opacity-50 mb-4">Former Controller of Patents & Designs &bull; Registered Patent Agent (IN/PA-902)</h6>
                                
                                <p class="text-white opacity-75 mb-3" style="line-height: 1.8; font-size: 1.05rem;">
                                    Niloy Kumar Gupta brings decades of highly specialized experience handling intellectual property specifications, filings, and regulatory procedures. As a former Controller of Patents and Designs, his career provides him with unparalleled insider expertise in administrative legal frameworks and registration protocols.
                                </p>
                                <p class="text-white opacity-75 mb-3" style="line-height: 1.8; font-size: 1.05rem;">
                                    Under his guidance, Niche IPO has evolved into a premier IPR house comprising Patent Attorneys, Advocates, and Engineers, delivering thorough specs drafting, filing PCT applications, and successfully resolving complex Pre and Post-Grant oppositions before the Appellate Board.
                                </p>
                                <div class="mt-4 p-4 rounded" style="background: rgba(255, 255, 255, 0.02); border: 1px solid rgba(255, 255, 255, 0.05);">
                                    <h6 class="text-white mb-2"><i class="fa-solid fa-envelope text-info me-2"></i> Contact Details:</h6>
                                    <span class="text-white opacity-50 small">niloygupta@rediffmail.com &nbsp;/&nbsp; niloygupta@yahoo.co.in</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Adv. Shumanto Gupta Card -->
                    <div class="owner-card mt-5">
                        <div class="row align-items-center g-5">
                            <div class="col-lg-4 text-center">
                                <div class="owner-img-wrap mx-auto" style="max-width: 280px;">
                                    <img src="images/shumanto_gupta.jpg" alt="Adv. Shumanto Gupta" class="owner-img">
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <span class="text-info font-monospace small d-block mb-2" style="letter-spacing: 2px;">LEGAL PARTNER</span>
                                <h2 class="text-white mb-2" style="font-family: var(--tm-font-heading); font-weight: 800;">Adv. Shumanto Gupta</h2>
                                <h6 class="text-white opacity-50 mb-4">Senior Intellectual Property Advocate & Attorney &bull; Legal Partner of NICHE IPO</h6>
                                
                                <p class="text-white opacity-75 mb-3" style="line-height: 1.8; font-size: 1.05rem;">
                                    With nearly two decades of dedicated practice since 2006, Adv. Shumanto Gupta is a seasoned Intellectual Property professional specializing in Trade Marks, Copyrights, and complex IP litigation. He has successfully advised and represented clients across a wide spectrum of industries, helping businesses protect, enforce, and maximize the value of their intellectual assets.
                                </p>
                                <p class="text-white opacity-75 mb-3" style="line-height: 1.8; font-size: 1.05rem;">
                                    A recognized participant in the global IP community, he has attended and represented India at numerous international seminars, conferences, and intellectual property forums worldwide, gaining valuable insight into both domestic and international IP developments.
                                </p>
                                <p class="text-white opacity-75 mb-3" style="line-height: 1.8; font-size: 1.05rem;">
                                    Whether safeguarding a startup’s first brand, defending valuable intellectual property rights, or handling high-stakes litigation, Adv. Gupta combines legal expertise, strategic thinking, and practical solutions to help clients build and protect their competitive advantage in an increasingly innovation-driven world.
                                </p>
                                
                                <div class="mt-4 p-4 rounded" style="background: rgba(255, 255, 255, 0.02); border: 1px solid rgba(255, 255, 255, 0.05); border-left: 4px solid var(--tm-accent-gold);">
                                    <p class="fst-italic text-white mb-0" style="font-size: 1.1rem; line-height: 1.6;">
                                        &ldquo;Protecting Ideas. Preserving Innovation. Securing Brand Value.&rdquo;
                                    </p>
                                </div>
                                <div class="mt-4 p-4 rounded" style="background: rgba(255, 255, 255, 0.02); border: 1px solid rgba(255, 255, 255, 0.05);">
                                    <h6 class="text-white mb-2"><i class="fa-solid fa-envelope text-info me-2"></i> Contact Details:</h6>
                                    <span class="text-white opacity-50 small">shumanto@nicheipo.com</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Mrs. Shibani Das Gupta Card -->
                    <div class="owner-card mt-5">
                        <div class="row align-items-center g-5">
                            <div class="col-lg-4 text-center">
                                <div class="owner-img-wrap mx-auto" style="max-width: 280px;">
                                    <img src="images/shibani_das_gupta.jpg" alt="Mrs. Shibani Das Gupta" class="owner-img">
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <span class="text-info font-monospace small d-block mb-2" style="letter-spacing: 2px;">SENIOR PATENT AGENT & SPECIALIST</span>
                                <h2 class="text-white mb-2" style="font-family: var(--tm-font-heading); font-weight: 800;">Mrs. Shibani Das Gupta</h2>
                                <h6 class="text-white opacity-50 mb-4">Senior Patent Agent &bull; Patent & Design Specialist</h6>
                                
                                <p class="text-white opacity-75 mb-3" style="line-height: 1.8; font-size: 1.05rem;">
                                    Shibani Das Gupta is a highly experienced Senior Patent Agent with over 30 years of distinguished practice in the field of Intellectual Property Rights. Renowned for her extensive knowledge of Patent and Industrial Design law, she has assisted innovators, startups, research institutions, and businesses in securing and protecting their valuable intellectual assets.
                                </p>
                                <p class="text-white opacity-75 mb-3" style="line-height: 1.8; font-size: 1.05rem;">
                                    Her expertise encompasses patent and design drafting, specification preparation, prosecution, responding to examination reports, handling objections, and representing applicants during hearings before the relevant Intellectual Property authorities. Her meticulous approach, technical understanding, and strategic insight have contributed to the successful protection of numerous inventions and designs across diverse industries.
                                </p>
                                <p class="text-white opacity-75 mb-3" style="line-height: 1.8; font-size: 1.05rem;">
                                    With a strong commitment to excellence and innovation, Mrs. Das Gupta has built a reputation for delivering precise, commercially focused, and legally robust intellectual property solutions. Her ability to navigate complex patent and design matters makes her a trusted advisor to inventors and enterprises seeking comprehensive IP protection.
                                </p>
                                <p class="text-white opacity-75 mb-3" style="line-height: 1.8; font-size: 1.05rem;">
                                    A respected professional in the Intellectual Property community, Mrs. Das Gupta continues to play a vital role in advancing innovation by helping creators secure, enforce, and maximize the value of their intellectual property rights. Her vast experience, dedication, and technical proficiency make her an invaluable asset to both our firm and the Intellectual Property industry.
                                </p>
                                
                                <div class="mt-4 p-4 rounded" style="background: rgba(255, 255, 255, 0.02); border: 1px solid rgba(255, 255, 255, 0.05); border-left: 4px solid var(--tm-accent-gold);">
                                    <p class="fst-italic text-white mb-0" style="font-size: 1.1rem; line-height: 1.6;">
                                        &ldquo;Transforming Innovation into Protected Intellectual Assets.&rdquo;
                                    </p>
                                </div>
                                <div class="mt-4 p-4 rounded" style="background: rgba(255, 255, 255, 0.02); border: 1px solid rgba(255, 255, 255, 0.05);">
                                    <h6 class="text-white mb-2"><i class="fa-solid fa-envelope text-info me-2"></i> Contact Details:</h6>
                                    <span class="text-white opacity-50 small">shibani@nicheipo.com</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- PANE 2: ASSOCIATES PROFILE -->
                <div id="pane-associates" class="profile-content-pane <?php echo $activeTab === 'associates' ? 'active' : ''; ?>">
                    <div class="owner-card">
                        
                        <!-- Header -->
                        <div class="text-center mb-5">
                            <span class="text-info font-monospace small d-block mb-2" style="letter-spacing: 2px;">GLOBAL LEGAL ALLIANCES</span>
                            <h2 class="text-white mb-3" style="font-family: var(--tm-font-heading); font-weight: 800;">Our Associate Network</h2>
                            <p class="text-white opacity-75 mx-auto" style="max-width: 700px; line-height: 1.8;">
                                To protect your innovations across major trade jurisdictions, Niche IPO maintains key legal alliances with seasoned Patent Attorneys and Advocates across India and ten international domains.
                            </p>
                        </div>

                        <!-- Split Interactive Map Section -->
                        <div class="row g-5 align-items-center">
                            
                            <!-- Left: Interactive List Directory -->
                            <div class="col-lg-5 col-xl-4 order-2 order-lg-1">
                                
                                <!-- Domestic List -->
                                <div class="mb-4">
                                    <h5 class="text-white mb-3" style="font-family: var(--tm-font-heading); font-weight: 700;">
                                        <i class="fa-solid fa-location-dot text-info me-2"></i> Indian Associate Offices
                                    </h5>
                                    <div class="list-group list-group-flush bg-transparent">
                                        <div class="assoc-list-item d-flex align-items-center justify-content-between p-3 rounded mb-2" onmouseenter="highlightNode('delhi')" onmouseleave="resetNode('delhi')">
                                            <div class="d-flex align-items-center">
                                                <span class="assoc-dot-indicator domestic me-3"></span>
                                                <span class="text-white fw-bold">Delhi (NCR)</span>
                                            </div>
                                            <span class="badge bg-dark text-info">Registry Office</span>
                                        </div>
                                        <div class="assoc-list-item d-flex align-items-center justify-content-between p-3 rounded mb-2" onmouseenter="highlightNode('mumbai')" onmouseleave="resetNode('mumbai')">
                                            <div class="d-flex align-items-center">
                                                <span class="assoc-dot-indicator domestic me-3"></span>
                                                <span class="text-white fw-bold">Mumbai</span>
                                            </div>
                                            <span class="badge bg-dark text-info">Registry Office</span>
                                        </div>
                                        <div class="assoc-list-item d-flex align-items-center justify-content-between p-3 rounded mb-2" onmouseenter="highlightNode('chennai')" onmouseleave="resetNode('chennai')">
                                            <div class="d-flex align-items-center">
                                                <span class="assoc-dot-indicator domestic me-3"></span>
                                                <span class="text-white fw-bold">Chennai</span>
                                            </div>
                                            <span class="badge bg-dark text-info">Registry Office</span>
                                        </div>
                                        <div class="assoc-list-item d-flex align-items-center justify-content-between p-3 rounded mb-2" onmouseenter="highlightNode('hyderabad')" onmouseleave="resetNode('hyderabad')">
                                            <div class="d-flex align-items-center">
                                                <span class="assoc-dot-indicator domestic me-3"></span>
                                                <span class="text-white fw-bold">Hyderabad</span>
                                            </div>
                                            <span class="badge bg-dark text-info">Branch Office</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- International List -->
                                <div>
                                    <h5 class="text-white mb-3" style="font-family: var(--tm-font-heading); font-weight: 700;">
                                        <i class="fa-solid fa-globe text-info me-2"></i> International Associates
                                    </h5>
                                    <div style="max-height: 250px; overflow-y: auto; padding-right: 5px;">
                                        <div class="assoc-list-item d-flex align-items-center justify-content-between p-3 rounded mb-2" onmouseenter="highlightNode('usa')" onmouseleave="resetNode('usa')">
                                            <div class="d-flex align-items-center">
                                                <span class="assoc-dot-indicator global me-3"></span>
                                                <span class="text-white small">United States (USA)</span>
                                            </div>
                                            <span class="badge bg-dark text-gold">Global IP</span>
                                        </div>
                                        <div class="assoc-list-item d-flex align-items-center justify-content-between p-3 rounded mb-2" onmouseenter="highlightNode('eu')" onmouseleave="resetNode('eu')">
                                            <div class="d-flex align-items-center">
                                                <span class="assoc-dot-indicator global me-3"></span>
                                                <span class="text-white small">European Union (EU)</span>
                                            </div>
                                            <span class="badge bg-dark text-gold">EPO Filings</span>
                                        </div>
                                        <div class="assoc-list-item d-flex align-items-center justify-content-between p-3 rounded mb-2" onmouseenter="highlightNode('uk')" onmouseleave="resetNode('uk')">
                                            <div class="d-flex align-items-center">
                                                <span class="assoc-dot-indicator global me-3"></span>
                                                <span class="text-white small">Great Britain (UK)</span>
                                            </div>
                                            <span class="badge bg-dark text-gold">UKIPO Filings</span>
                                        </div>
                                        <div class="assoc-list-item d-flex align-items-center justify-content-between p-3 rounded mb-2" onmouseenter="highlightNode('china')" onmouseleave="resetNode('china')">
                                            <div class="d-flex align-items-center">
                                                <span class="assoc-dot-indicator global me-3"></span>
                                                <span class="text-white small">China</span>
                                            </div>
                                            <span class="badge bg-dark text-gold">CNIPA Filings</span>
                                        </div>
                                        <div class="assoc-list-item d-flex align-items-center justify-content-between p-3 rounded mb-2" onmouseenter="highlightNode('australia')" onmouseleave="resetNode('australia')">
                                            <div class="d-flex align-items-center">
                                                <span class="assoc-dot-indicator global me-3"></span>
                                                <span class="text-white small">Australia</span>
                                            </div>
                                            <span class="badge bg-dark text-gold">IP Australia</span>
                                        </div>
                                        <div class="assoc-list-item d-flex align-items-center justify-content-between p-3 rounded mb-2" onmouseenter="highlightNode('bangladesh')" onmouseleave="resetNode('bangladesh')">
                                            <div class="d-flex align-items-center">
                                                <span class="assoc-dot-indicator global me-3"></span>
                                                <span class="text-white small">Bangladesh</span>
                                            </div>
                                            <span class="badge bg-dark text-gold">SAARC IP</span>
                                        </div>
                                        <div class="assoc-list-item d-flex align-items-center justify-content-between p-3 rounded mb-2" onmouseenter="highlightNode('bhutan')" onmouseleave="resetNode('bhutan')">
                                            <div class="d-flex align-items-center">
                                                <span class="assoc-dot-indicator global me-3"></span>
                                                <span class="text-white small">Bhutan</span>
                                            </div>
                                            <span class="badge bg-dark text-gold">SAARC IP</span>
                                        </div>
                                        <div class="assoc-list-item d-flex align-items-center justify-content-between p-3 rounded mb-2" onmouseenter="highlightNode('nepal')" onmouseleave="resetNode('nepal')">
                                            <div class="d-flex align-items-center">
                                                <span class="assoc-dot-indicator global me-3"></span>
                                                <span class="text-white small">Nepal</span>
                                            </div>
                                            <span class="badge bg-dark text-gold">SAARC IP</span>
                                        </div>
                                        <div class="assoc-list-item d-flex align-items-center justify-content-between p-3 rounded mb-2" onmouseenter="highlightNode('pakistan')" onmouseleave="resetNode('pakistan')">
                                            <div class="d-flex align-items-center">
                                                <span class="assoc-dot-indicator global me-3"></span>
                                                <span class="text-white small">Pakistan</span>
                                            </div>
                                            <span class="badge bg-dark text-gold">SAARC IP</span>
                                        </div>
                                        <div class="assoc-list-item d-flex align-items-center justify-content-between p-3 rounded mb-2" onmouseenter="highlightNode('srilanka')" onmouseleave="resetNode('srilanka')">
                                            <div class="d-flex align-items-center">
                                                <span class="assoc-dot-indicator global me-3"></span>
                                                <span class="text-white small">Sri Lanka</span>
                                            </div>
                                            <span class="badge bg-dark text-gold">SAARC IP</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Right: Connection SVG Map -->
                            <div class="col-lg-7 col-xl-8 order-1 order-lg-2 text-center">
                                <div class="map-svg-container position-relative p-2 rounded" style="background: rgba(5, 8, 22, 0.6); border: 1px solid var(--tm-border-glass);">
                                    <svg viewBox="0 0 800 450" class="w-100 h-auto" xmlns="http://www.w3.org/2000/svg">
                                        <!-- Map Filters for glowing effect -->
                                        <defs>
                                            <filter id="glow-cyan" x="-20%" y="-20%" width="140%" height="140%">
                                                <feGaussianBlur stdDeviation="6" result="blur" />
                                                <feMerge>
                                                    <feMergeNode in="blur" />
                                                    <feMergeNode in="SourceGraphic" />
                                                </feMerge>
                                            </filter>
                                            <filter id="glow-gold" x="-20%" y="-20%" width="140%" height="140%">
                                                <feGaussianBlur stdDeviation="6" result="blur" />
                                                <feMerge>
                                                    <feMergeNode in="blur" />
                                                    <feMergeNode in="SourceGraphic" />
                                                </feMerge>
                                            </filter>
                                            <!-- SVG Path data to draw outline world map representation -->
                                            <style>
                                                .mesh-line { stroke: rgba(255,255,255,0.03); stroke-width: 0.75; fill: none; }
                                                .mesh-dot { fill: rgba(255,255,255,0.05); }
                                                .conn-line { 
                                                    fill: none; 
                                                    stroke-linecap: round; 
                                                    stroke-dasharray: 4 6; 
                                                    stroke-dashoffset: 0;
                                                    animation: line-flow 12s infinite linear;
                                                    transition: all 0.4s ease; 
                                                }
                                                @keyframes line-flow {
                                                    to { stroke-dashoffset: -100; }
                                                }
                                                .conn-line.active { 
                                                    stroke-width: 2.5; 
                                                    stroke-dasharray: none; 
                                                    stroke-dashoffset: 0;
                                                    animation: none; 
                                                }
                                                .node-circle { transition: all 0.4s ease; }
                                                .node-circle.active { r: 8px; }
                                                .hq-node { fill: #00f2fe; filter: url(#glow-cyan); }
                                                .hq-pulse { animation: ring-expand 2s infinite ease-out; transform-origin: 460px 230px; }
                                                @keyframes ring-expand {
                                                    0% { r: 6px; opacity: 1; stroke-width: 1px; }
                                                    100% { r: 24px; opacity: 0; stroke-width: 2px; }
                                                }
                                                .node-label {
                                                    fill: rgba(255, 255, 255, 0.4);
                                                    font-size: 10px;
                                                    font-family: 'Plus Jakarta Sans', sans-serif;
                                                    pointer-events: none;
                                                    transition: all 0.3s ease;
                                                }
                                                .node-label.active {
                                                    fill: #ffffff;
                                                    font-weight: 700;
                                                }
                                            </style>
                                        </defs>

                                        <!-- Real outline world map representation -->
                                        <g id="map-mesh" fill="rgba(255, 255, 255, 0.015)" stroke="rgba(255, 255, 255, 0.04)" stroke-width="1.2">
                                            <!-- North America -->
                                            <path d="M 80,90 Q 150,80 200,60 T 230,90 T 180,130 T 170,180 T 140,210 T 120,200 T 100,160 Z" />
                                            <!-- South America -->
                                            <path d="M 140,210 Q 200,220 230,260 T 200,340 T 170,390 T 160,330 T 140,270 Z" />
                                            <!-- Europe / Asia -->
                                            <path d="M 300,130 Q 320,80 370,70 T 480,60 T 600,60 T 680,80 T 670,140 T 600,180 T 540,240 T 520,270 T 480,260 T 450,270 T 430,250 T 390,230 T 330,190 Z" />
                                            <!-- Africa -->
                                            <path d="M 300,190 Q 340,190 380,220 T 400,280 T 430,340 T 390,380 T 350,340 T 330,300 T 270,250 Z" />
                                            <!-- Australia -->
                                            <path d="M 600,320 Q 640,310 680,320 T 690,360 T 640,380 T 610,360 Z" />
                                            <!-- Sri Lanka -->
                                            <path d="M 448,304 Q 452,304 452,310 T 448,310 Z" />
                                        </g>

                                        <!-- Connection Lines to Kolkata (460, 230) -->
                                        <g id="connections">
                                            <!-- Domestic Lines (Cyan stroke) -->
                                            <path id="line-delhi" d="M 460 230 Q 448 218 436 206" class="conn-line" stroke="rgba(0, 242, 254, 0.15)" stroke-width="1.2" />
                                            <path id="line-mumbai" d="M 460 230 Q 436 235 412 240" class="conn-line" stroke="rgba(0, 242, 254, 0.15)" stroke-width="1.2" />
                                            <path id="line-hyderabad" d="M 460 230 Q 444 248 428 266" class="conn-line" stroke="rgba(0, 242, 254, 0.15)" stroke-width="1.2" />
                                            <path id="line-chennai" d="M 460 230 Q 450 260 440 290" class="conn-line" stroke="rgba(0, 242, 254, 0.15)" stroke-width="1.2" />

                                            <!-- International Lines (Purple stroke) -->
                                            <path id="line-usa" d="M 460 230 Q 300 150 140 160" class="conn-line" stroke="rgba(255, 184, 0, 0.15)" stroke-width="1.2" />
                                            <path id="line-eu" d="M 460 230 Q 410 170 360 140" class="conn-line" stroke="rgba(255, 184, 0, 0.15)" stroke-width="1.2" />
                                            <path id="line-uk" d="M 460 230 Q 390 160 320 120" class="conn-line" stroke="rgba(255, 184, 0, 0.15)" stroke-width="1.2" />
                                            <path id="line-china" d="M 460 230 Q 500 210 540 190" class="conn-line" stroke="rgba(255, 184, 0, 0.15)" stroke-width="1.2" />
                                            <path id="line-australia" d="M 460 230 Q 550 300 640 340" class="conn-line" stroke="rgba(255, 184, 0, 0.15)" stroke-width="1.2" />
                                            <path id="line-bangladesh" d="M 460 230 Q 468 232 476 234" class="conn-line" stroke="rgba(255, 184, 0, 0.15)" stroke-width="1.2" />
                                            <path id="line-bhutan" d="M 460 230 Q 470 220 480 210" class="conn-line" stroke="rgba(255, 184, 0, 0.15)" stroke-width="1.2" />
                                            <path id="line-nepal" d="M 460 230 Q 452 220 444 210" class="conn-line" stroke="rgba(255, 184, 0, 0.15)" stroke-width="1.2" />
                                            <path id="line-pakistan" d="M 460 230 Q 425 210 390 190" class="conn-line" stroke="rgba(255, 184, 0, 0.15)" stroke-width="1.2" />
                                            <path id="line-srilanka" d="M 460 230 Q 455 270 450 310" class="conn-line" stroke="rgba(255, 184, 0, 0.15)" stroke-width="1.2" />
                                        </g>

                                        <!-- Target Associate Nodes -->
                                        <g id="nodes">
                                            <!-- Headquarters (Kolkata) -->
                                            <circle cx="460" cy="230" r="24" class="hq-pulse" fill="none" stroke="rgba(0, 242, 254, 0.3)" />
                                            <circle cx="460" cy="230" r="7" class="hq-node" id="node-kolkata" />
                                            <text x="460" y="255" text-anchor="middle" fill="#00f2fe" font-size="11" font-weight="bold" font-family="monospace">HQ: KOLKATA</text>

                                            <!-- Domestic Nodes (Cyan) & Labels -->
                                            <g>
                                                <circle cx="436" cy="206" r="4.5" id="node-delhi" class="node-circle" fill="#00f2fe" stroke="#050816" stroke-width="1.5" />
                                                <text x="436" y="195" text-anchor="middle" class="node-label" id="label-delhi">Delhi</text>
                                            </g>
                                            <g>
                                                <circle cx="412" cy="240" r="4.5" id="node-mumbai" class="node-circle" fill="#00f2fe" stroke="#050816" stroke-width="1.5" />
                                                <text x="398" y="244" text-anchor="end" class="node-label" id="label-mumbai">Mumbai</text>
                                            </g>
                                            <g>
                                                <circle cx="428" cy="266" r="4.5" id="node-hyderabad" class="node-circle" fill="#00f2fe" stroke="#050816" stroke-width="1.5" />
                                                <text x="416" y="270" text-anchor="end" class="node-label" id="label-hyderabad">Hyderabad</text>
                                            </g>
                                            <g>
                                                <circle cx="440" cy="290" r="4.5" id="node-chennai" class="node-circle" fill="#00f2fe" stroke="#050816" stroke-width="1.5" />
                                                <text x="440" y="305" text-anchor="middle" class="node-label" id="label-chennai">Chennai</text>
                                            </g>

                                            <!-- International Nodes (Purple) & Labels -->
                                            <g>
                                                <circle cx="140" cy="160" r="4.5" id="node-usa" class="node-circle" fill="#ffb800" stroke="#050816" stroke-width="1.5" />
                                                <text x="140" y="148" text-anchor="middle" class="node-label" id="label-usa">USA</text>
                                            </g>
                                            <g>
                                                <circle cx="360" cy="140" r="4.5" id="node-eu" class="node-circle" fill="#ffb800" stroke="#050816" stroke-width="1.5" />
                                                <text x="360" y="128" text-anchor="middle" class="node-label" id="label-eu">EU</text>
                                            </g>
                                            <g>
                                                <circle cx="320" cy="120" r="4.5" id="node-uk" class="node-circle" fill="#ffb800" stroke="#050816" stroke-width="1.5" />
                                                <text x="320" y="108" text-anchor="middle" class="node-label" id="label-uk">UK</text>
                                            </g>
                                            <g>
                                                <circle cx="540" cy="190" r="4.5" id="node-china" class="node-circle" fill="#ffb800" stroke="#050816" stroke-width="1.5" />
                                                <text x="540" y="178" text-anchor="middle" class="node-label" id="label-china">China</text>
                                            </g>
                                            <g>
                                                <circle cx="640" cy="340" r="4.5" id="node-australia" class="node-circle" fill="#ffb800" stroke="#050816" stroke-width="1.5" />
                                                <text x="640" y="355" text-anchor="middle" class="node-label" id="label-australia">Australia</text>
                                            </g>
                                            <g>
                                                <circle cx="476" cy="234" r="4.5" id="node-bangladesh" class="node-circle" fill="#ffb800" stroke="#050816" stroke-width="1.5" />
                                                <text x="495" y="238" text-anchor="start" class="node-label" id="label-bangladesh">Bangladesh</text>
                                            </g>
                                            <g>
                                                <circle cx="480" cy="210" r="4.5" id="node-bhutan" class="node-circle" fill="#ffb800" stroke="#050816" stroke-width="1.5" />
                                                <text x="498" y="214" text-anchor="start" class="node-label" id="label-bhutan">Bhutan</text>
                                            </g>
                                            <g>
                                                <circle cx="444" cy="210" r="4.5" id="node-nepal" class="node-circle" fill="#ffb800" stroke="#050816" stroke-width="1.5" />
                                                <text x="430" y="214" text-anchor="end" class="node-label" id="label-nepal">Nepal</text>
                                            </g>
                                            <g>
                                                <circle cx="390" cy="190" r="4.5" id="node-pakistan" class="node-circle" fill="#ffb800" stroke="#050816" stroke-width="1.5" />
                                                <text x="372" y="194" text-anchor="end" class="node-label" id="label-pakistan">Pakistan</text>
                                            </g>
                                            <g>
                                                <circle cx="450" cy="310" r="4.5" id="node-srilanka" class="node-circle" fill="#ffb800" stroke="#050816" stroke-width="1.5" />
                                                <text x="470" y="318" text-anchor="start" class="node-label" id="label-srilanka">Sri Lanka</text>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>

</div>

<script>
    // Tab switching logic
    function switchProfileTab(tabName) {
        // Remove active class from all buttons and panes
        document.querySelectorAll('.profile-tab-btn').forEach(btn => btn.classList.remove('active'));
        document.querySelectorAll('.profile-content-pane').forEach(pane => pane.classList.remove('active'));
        
        // Find click source button and corresponding pane
        const activeBtn = Array.from(document.querySelectorAll('.profile-tab-btn')).find(btn => btn.getAttribute('onclick').includes(tabName));
        const activePane = document.getElementById('pane-' + tabName);
        
        if (activeBtn) activeBtn.classList.add('active');
        if (activePane) activePane.classList.add('active');
    }

    // SVG Constellation Highlight logic
    function highlightNode(locationId) {
        const line = document.getElementById('line-' + locationId);
        const node = document.getElementById('node-' + locationId);
        const label = document.getElementById('label-' + locationId);
        if (line) {
            line.classList.add('active');
            const isDomestic = ['delhi', 'mumbai', 'hyderabad', 'chennai'].includes(locationId);
            line.style.stroke = isDomestic ? '#00f2fe' : '#ffb800';
            line.style.strokeOpacity = '1.0';
            line.style.filter = isDomestic ? 'url(#glow-cyan)' : 'url(#glow-gold)';
        }
        if (node) {
            node.classList.add('active');
            const isDomestic = ['delhi', 'mumbai', 'hyderabad', 'chennai'].includes(locationId);
            node.style.filter = isDomestic ? 'url(#glow-cyan)' : 'url(#glow-gold)';
        }
        if (label) {
            label.classList.add('active');
        }
    }

    function resetNode(locationId) {
        const line = document.getElementById('line-' + locationId);
        const node = document.getElementById('node-' + locationId);
        const label = document.getElementById('label-' + locationId);
        if (line) {
            line.classList.remove('active');
            const isDomestic = ['delhi', 'mumbai', 'hyderabad', 'chennai'].includes(locationId);
            line.style.stroke = isDomestic ? 'rgba(0, 242, 254, 0.15)' : 'rgba(255, 184, 0, 0.15)';
            line.style.strokeOpacity = '';
            line.style.filter = '';
        }
        if (node) {
            node.classList.remove('active');
            node.style.filter = '';
        }
        if (label) {
            label.classList.remove('active');
        }
    }
</script>
