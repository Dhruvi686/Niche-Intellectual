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
<link href="css/trademark-style.css" rel="stylesheet">

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
        background: linear-gradient(135deg, var(--tm-accent-purple) 0%, var(--tm-accent-blue) 100%);
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
        border-color: rgba(185, 39, 252, 0.3);
        background: rgba(185, 39, 252, 0.03);
        transform: translateY(-3px);
    }
    .loc-icon {
        font-size: 1.5rem;
        margin-bottom: 0.75rem;
        background: linear-gradient(135deg, var(--tm-accent-purple), var(--tm-accent-blue));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        display: inline-block;
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
                    <i class="fa-solid fa-user-tie me-2"></i> Owner Profile
                </button>
                <button class="profile-tab-btn <?php echo $activeTab === 'associates' ? 'active' : ''; ?>" onclick="switchProfileTab('associates')">
                    <i class="fa-solid fa-earth-asia me-2"></i> Associates Profile
                </button>
            </div>

            <!-- Tab Content Panes -->
            <div class="profile-tabs-content">
                
                <!-- PANE 1: OWNER PROFILE -->
                <div id="pane-owner" class="profile-content-pane <?php echo $activeTab === 'owner' ? 'active' : ''; ?>">
                    <div class="owner-card">
                        <div class="row align-items-center g-5">
                            <div class="col-lg-4 text-center">
                                <div class="owner-img-wrap mx-auto" style="max-width: 280px;">
                                    <img src="images/attorney.jpg" alt="Niloy Kumar Gupta" class="owner-img">
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
                                    <span class="text-white opacity-50 small">niloygupta@rediffmail.com &nbsp;/&nbsp; niloygupta@yahoo.co.in &nbsp;/&nbsp; niloy@nicheipo.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PANE 2: ASSOCIATES PROFILE -->
                <div id="pane-associates" class="profile-content-pane <?php echo $activeTab === 'associates' ? 'active' : ''; ?>">
                    <div class="owner-card">
                        <div class="text-center mb-5">
                            <span class="text-info font-monospace small d-block mb-2" style="letter-spacing: 2px;">GLOBAL LEGAL ALLIANCES</span>
                            <h2 class="text-white mb-3" style="font-family: var(--tm-font-heading); font-weight: 800;">Our Associate Network</h2>
                            <p class="text-white opacity-75 mx-auto" style="max-width: 700px; line-height: 1.8;">
                                To protect your innovations across major trade jurisdictions, Niche IPO maintains key legal alliances with seasoned Patent Attorneys and Advocates across India and ten international domains.
                            </p>
                        </div>

                        <div class="mb-5">
                            <h5 class="text-white mb-3" style="font-family: var(--tm-font-heading); font-weight: 700;"><i class="fa-solid fa-location-dot text-info me-2"></i> Indian Associate Offices</h5>
                            <p class="text-white opacity-50 small mb-3">Our domestic partners provide full representation at regional Patent and Trademark Registries:</p>
                            <div class="associate-location-grid">
                                <div class="associate-loc-card">
                                    <span class="loc-icon"><i class="fa-solid fa-city"></i></span>
                                    <h6 class="text-white mb-0">Delhi (NCR)</h6>
                                </div>
                                <div class="associate-loc-card">
                                    <span class="loc-icon"><i class="fa-solid fa-city"></i></span>
                                    <h6 class="text-white mb-0">Mumbai</h6>
                                </div>
                                <div class="associate-loc-card">
                                    <span class="loc-icon"><i class="fa-solid fa-city"></i></span>
                                    <h6 class="text-white mb-0">Chennai</h6>
                                </div>
                                <div class="associate-loc-card">
                                    <span class="loc-icon"><i class="fa-solid fa-city"></i></span>
                                    <h6 class="text-white mb-0">Hyderabad</h6>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h5 class="text-white mb-3" style="font-family: var(--tm-font-heading); font-weight: 700;"><i class="fa-solid fa-globe text-info me-2"></i> International Associate Offices</h5>
                            <p class="text-white opacity-50 small mb-3">Seamlessly coordinate PCT National Phase entries, cross-border licensing, and enforcement:</p>
                            <div class="associate-location-grid">
                                <div class="associate-loc-card">
                                    <span class="loc-icon"><i class="fa-solid fa-earth-americas"></i></span>
                                    <h6 class="text-white mb-0">United States (USA)</h6>
                                </div>
                                <div class="associate-loc-card">
                                    <span class="loc-icon"><i class="fa-solid fa-earth-europe"></i></span>
                                    <h6 class="text-white mb-0">European Union (EU)</h6>
                                </div>
                                <div class="associate-loc-card">
                                    <span class="loc-icon"><i class="fa-solid fa-earth-europe"></i></span>
                                    <h6 class="text-white mb-0">Great Britain (UK)</h6>
                                </div>
                                <div class="associate-loc-card">
                                    <span class="loc-icon"><i class="fa-solid fa-earth-asia"></i></span>
                                    <h6 class="text-white mb-0">China</h6>
                                </div>
                                <div class="associate-loc-card">
                                    <span class="loc-icon"><i class="fa-solid fa-earth-oceania"></i></span>
                                    <h6 class="text-white mb-0">Australia</h6>
                                </div>
                                <div class="associate-loc-card">
                                    <span class="loc-icon"><i class="fa-solid fa-earth-asia"></i></span>
                                    <h6 class="text-white mb-0">Bangladesh</h6>
                                </div>
                                <div class="associate-loc-card">
                                    <span class="loc-icon"><i class="fa-solid fa-earth-asia"></i></span>
                                    <h6 class="text-white mb-0">Bhutan</h6>
                                </div>
                                <div class="associate-loc-card">
                                    <span class="loc-icon"><i class="fa-solid fa-earth-asia"></i></span>
                                    <h6 class="text-white mb-0">Nepal</h6>
                                </div>
                                <div class="associate-loc-card">
                                    <span class="loc-icon"><i class="fa-solid fa-earth-asia"></i></span>
                                    <h6 class="text-white mb-0">Pakistan</h6>
                                </div>
                                <div class="associate-loc-card">
                                    <span class="loc-icon"><i class="fa-solid fa-earth-asia"></i></span>
                                    <h6 class="text-white mb-0">Sri Lanka</h6>
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
</script>
