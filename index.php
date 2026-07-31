<?php 
  // Spectrum Developers Landing Page
  include 'includes/header.php'; 
?>

<!-- Hero Section (Exact Match to Design Screenshot) -->
<section class="hero-section" id="hero">
    <div class="hero-container">
        <div class="hero-content">
            <!-- Main Luxury Headline -->
            <h1 class="hero-title">
                <span class="title-line-1">BEYOND LAND.</span>
                <span class="title-line-2">WE CREATE LEGACY.</span>
            </h1>

            <!-- Subtitle -->
            <p class="hero-subtitle">
                Crafting communities designed<br>for generations.
            </p>

            <!-- Call to Action Buttons -->
            <div class="hero-actions">
                <a href="#destinations" class="btn-gold-outline">
                    <span>EXPLORE DESTINATIONS</span>
                    <i class="fa-solid fa-arrow-right arrow-icon"></i>
                </a>
                
                <a href="#legacy" class="btn-gold-link">
                    DISCOVER THE LEGACY
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Five Pillars Feature Section -->
<section class="pillars-section" id="pillars">
    <div class="pillars-container">
        
        <!-- Header Area -->
        <div class="pillars-header">
            <h2 class="pillars-title-white">DESIGNED</h2>
            <h2 class="pillars-title-gold">BEYOND INFRASTRUCTURE.</h2>
            <p class="pillars-description">
                We create future-ready communities that blend vision with values.<br>
                Every space we build is guided by purpose and designed for generations.
            </p>
        </div>

        <!-- 5 Pillars Feature Grid -->
        <div class="pillars-grid">
            
            <!-- Pillar 1: Sustainability -->
            <div class="pillar-col">
                <div class="pillar-icon-box">
                    <img src="assets/images/sustainability.png" alt="Sustainability Icon">
                </div>
                <h3 class="pillar-item-title">SUSTAINABILITY</h3>
                <p class="pillar-item-desc">
                    Building responsibly for<br>a greener tomorrow.<br>Sustainable by design,<br>for future generations.
                </p>
            </div>
            
            <div class="pillar-divider"></div>

            <!-- Pillar 2: Masterplanning -->
            <div class="pillar-col">
                <div class="pillar-icon-box">
                    <img src="assets/images/masterplanning.png" alt="Masterplanning Icon">
                </div>
                <h3 class="pillar-item-title">MASTERPLANNING</h3>
                <p class="pillar-item-desc">
                    Thoughtful planning.<br>Seamless connectivity.<br>Communities that grow<br>with time.
                </p>
            </div>

            <div class="pillar-divider"></div>

            <!-- Pillar 3: Community -->
            <div class="pillar-col">
                <div class="pillar-icon-box">
                    <img src="assets/images/community.png" alt="Community Icon">
                </div>
                <h3 class="pillar-item-title">COMMUNITY</h3>
                <p class="pillar-item-desc">
                    People at the heart<br>of everything we do.<br>Stronger communities,<br>better futures.
                </p>
            </div>

            <div class="pillar-divider"></div>

            <!-- Pillar 4: Security -->
            <div class="pillar-col">
                <div class="pillar-icon-box">
                    <img src="assets/images/security.png" alt="Security Icon">
                </div>
                <h3 class="pillar-item-title">SECURITY</h3>
                <p class="pillar-item-desc">
                    Advanced security.<br>Round-the-clock vigilance.<br>Peace of mind,<br>always
                </p>
            </div>

            <div class="pillar-divider"></div>

            <!-- Pillar 5: Architecture -->
            <div class="pillar-col">
                <div class="pillar-icon-box">
                    <img src="assets/images/architecture.png" alt="Architecture Icon">
                </div>
                <h3 class="pillar-item-title">ARCHITECTURE</h3>
                <p class="pillar-item-desc">
                    Timeless architecture.<br>Modern aesthetics.<br>Spaces that inspire<br>pride and belonging.
                </p>
            </div>

        </div>

        <!-- Bottom Area -->
        <div class="pillars-bottom">
            <h3 class="pillars-bottom-title">FIVE PILLARS. ONE PURPOSE.</h3>
            <p class="pillars-bottom-subtitle">Building Communities that enrich lives and stand the taste of time.</p>
        </div>

    </div>
</section>

<!-- Masterplan Experience Section -->
<section class="masterplan-section" id="masterplan">
    <div class="masterplan-container">
        
        <!-- Left Panel Content -->
        <div class="masterplan-left">
            <h2 class="masterplan-title">
                <span class="title-white">MASTERPLAN</span>
                <span class="title-gold">EXPERIENCE</span>
            </h2>

            <p class="masterplan-description">
                Explore a visionary community built on perfect harmony between nature, architecture, and innovation.
            </p>

            <!-- Destination Menu -->
            <ul class="destination-menu">
                <li class="menu-item active" data-district="executive-square">
                    <a href="javascript:void(0);" class="menu-link">
                        <span>EXECUTIVE SQUARE</span>
                        <i class="fa-solid fa-arrow-right menu-arrow"></i>
                    </a>
                </li>
                <li class="menu-item" data-district="santorini-shores">
                    <a href="javascript:void(0);" class="menu-link">
                        <span>SANTORINI SHORES</span>
                    </a>
                </li>
                <li class="menu-item" data-district="rainforest-enclave">
                    <a href="javascript:void(0);" class="menu-link">
                        <span>RAINFOREST ENCLAVE</span>
                    </a>
                </li>
                <li class="menu-item" data-district="downtown">
                    <a href="javascript:void(0);" class="menu-link">
                        <span>DOWNTOWN</span>
                    </a>
                </li>
                <li class="menu-item" data-district="parkland-estates">
                    <a href="javascript:void(0);" class="menu-link">
                        <span>PARKLAND ESTATES</span>
                    </a>
                </li>
                <li class="menu-item" data-district="serene-heaven">
                    <a href="javascript:void(0);" class="menu-link">
                        <span>SERENE HEAVEN</span>
                    </a>
                </li>
            </ul>

            <!-- Bottom Action Buttons -->
            <div class="masterplan-actions">
                <a href="#film" class="btn-glass-pill">
                    <i class="fa-solid fa-play play-icon"></i>
                    <span>WATCH MASTERPLAN FILM</span>
                </a>
                <a href="#brochure" class="btn-outline-pill">
                    <i class="fa-solid fa-download download-icon"></i>
                    <span>DOWNLOAD BROCHURE</span>
                </a>
            </div>
        </div>

        <!-- Right Floating Luxury Card -->
        <div class="masterplan-right">
            <div class="luxury-card" id="masterplanCard">
                <div class="card-image-box">
                    <img id="mpCardImage" src="assets/images/tabs-executive.png" alt="Executive Square District">
                </div>

                <div class="card-body">
                    <h3 id="mpCardTitle" class="card-title">EXECUTIVE SQUARE</h3>
                    <h4 id="mpCardSubtitle" class="card-subtitle">CRAFTED FOR LEADERS. BUILT FOR SUCCESS</h4>
                    <p id="mpCardDesc" class="card-desc">
                        A district designed for professionals, entrepreneurs, and those who aspire to lead.
                    </p>

                    <!-- Feature Icons Row -->
                    <div id="mpCardFeatures" class="card-features">
                        <div class="feature-item">
                            <img src="assets/images/premium.png" alt="Premium Residences">
                            <span>PREMIUM<br>RESIDENCES</span>
                        </div>
                        <div class="feature-divider"></div>
                        <div class="feature-item">
                            <img src="assets/images/business.png" alt="Business District">
                            <span>BUSINESS<br>DISTRICT</span>
                        </div>
                        <div class="feature-divider"></div>
                        <div class="feature-item">
                            <img src="assets/images/luxury.png" alt="Luxury Amenities">
                            <span>LUXURY<br>AMENITIES</span>
                        </div>
                        <div class="feature-divider"></div>
                        <div class="feature-item">
                            <img src="assets/images/central.png" alt="Central Parks">
                            <span>CENTRAL<br>PARKS</span>
                        </div>
                    </div>

                    <!-- Card Button -->
                    <a id="mpCardBtn" href="highway-city.php" class="card-btn-gold">
                        <span>EXPLORE DISTRICT</span>
                        <i class="fa-solid fa-arrow-right arrow-icon"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Experiences That Define Living Section -->
<section class="experiences-section" id="experiences">
    <div class="experiences-container">
        
        <!-- Top Heading Area -->
        <div class="experiences-header">
            <h2 class="experiences-title-white">EXPERIENCES</h2>
            <h2 class="experiences-title-gold">THAT DEFINE LIVING.</h2>
            <p class="experiences-subtitle">WORLD-CLASS AMENITIES. TIMELESS LIFESTYLE.</p>
        </div>

        <!-- Swiper Carousel Container -->
        <div class="carousel-wrapper">
            <div class="swiper experiences-swiper">
                <div class="swiper-wrapper">
                    
                    <!-- Slide 1: Santorini Shores -->
                    <div class="swiper-slide experience-card">
                        <div class="card-img-holder">
                            <img src="assets/images/santorinishores.png" alt="Santorini Shores">
                        </div>
                        <div class="card-caption">
                            <h3>SANTORINI SHORES</h3>
                        </div>
                    </div>

                    <!-- Slide 2: Chocoland -->
                    <div class="swiper-slide experience-card">
                        <div class="card-img-holder">
                            <img src="assets/images/chocoland.png" alt="Chocoland">
                        </div>
                        <div class="card-caption">
                            <h3>CHOCOLAND</h3>
                        </div>
                    </div>

                    <!-- Slide 3: Electric Vehicle Station -->
                    <div class="swiper-slide experience-card">
                        <div class="card-img-holder">
                            <img src="assets/images/electricstation.png" alt="Electric Vehicle Station">
                        </div>
                        <div class="card-caption">
                            <h3>ELECTRIC VEHICLE STATION</h3>
                        </div>
                    </div>

                    <!-- Slide 4: Fire Brigade Station -->
                    <div class="swiper-slide experience-card">
                        <div class="card-img-holder">
                            <img src="assets/images/firebrigadestation.png" alt="Fire Brigade Station">
                        </div>
                        <div class="card-caption">
                            <h3>FIRE BRIGADE STATION</h3>
                        </div>
                    </div>

                </div>

                <!-- Navigation Dots Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>

    </div>
</section>

<!-- Construction & Infrastructure Section -->
<section class="construction-section" id="construction">
    <div class="construction-container">
        
        <!-- Left Content -->
        <div class="construction-left">
            <h4 class="construction-subtitle">BUILT ON STANDARDS. DELIVERED WITH EXCELLENCE.</h4>
            
            <h2 class="construction-title">
                <span class="title-white">CONSTRUCTION &</span>
                <span class="title-gold">INFRASTRUCTURE</span>
            </h2>

            <p class="construction-description">
                Driven by Lakhani Construction Company, we combine engineering expertise, modern technology, and uncompromising quality to deliver infrastructure that lasts generations.
            </p>
        </div>

        <!-- Right Floating Glass Card -->
        <div class="construction-right">
            <div class="construction-card">
                <!-- Company Logo -->
                <div class="card-logo-box">
                    <img src="assets/images/kakhani.png" alt="Lakhani Construction Company Logo">
                </div>

                <!-- Feature List -->
                <ul class="construction-features">
                    <li class="feature-row">
                        <i class="fa-solid fa-circle-check feature-check-icon"></i>
                        <span>Engineering Precision</span>
                    </li>
                    <li class="feature-row">
                        <i class="fa-solid fa-circle-check feature-check-icon"></i>
                        <span>Quality Materials</span>
                    </li>
                    <li class="feature-row">
                        <i class="fa-solid fa-circle-check feature-check-icon"></i>
                        <span>Advanced Machinery</span>
                    </li>
                    <li class="feature-row">
                        <i class="fa-solid fa-circle-check feature-check-icon"></i>
                        <span>Skilled Workforce</span>
                    </li>
                    <li class="feature-row">
                        <i class="fa-solid fa-circle-check feature-check-icon"></i>
                        <span>Timely Execution</span>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</section>

<!-- Infrastructure Features Section -->
<section class="infra-features-section" id="infra-features">
    
    <!-- Top 5 Image Grid Gallery -->
    <div class="infra-gallery-grid">
        
        <!-- Image Card 1 -->
        <div class="gallery-card">
            <img src="assets/images/road-engineering.jpg" alt="Road Engineering">
            <div class="gallery-overlay"></div>
            <div class="gallery-content">
                <h3>ROAD ENGINEERING</h3>
                <p>High-performance roads designed for efficiency and durability.</p>
            </div>
        </div>

        <!-- Image Card 2 -->
        <div class="gallery-card">
            <img src="assets/images/water-infrastructure.jpg" alt="Water Infrastructure">
            <div class="gallery-overlay"></div>
            <div class="gallery-content">
                <h3>WATER INFRASTRUCTURE</h3>
                <p>Sustainable water systems for a better tomorrow.</p>
            </div>
        </div>

        <!-- Image Card 3 -->
        <div class="gallery-card">
            <img src="assets/images/green-infrastructure.jpg" alt="Green Infrastructure">
            <div class="gallery-overlay"></div>
            <div class="gallery-content">
                <h3>GREEN INFRASTRUCTURE</h3>
                <p>Green belts, landscaped corridors, and climate-conscious planning.</p>
            </div>
        </div>

        <!-- Image Card 4 -->
        <div class="gallery-card">
            <img src="assets/images/modern-machinery.jpg" alt="Modern Machinery">
            <div class="gallery-overlay"></div>
            <div class="gallery-content">
                <h3>MODERN MACHINERY</h3>
                <p>Advanced technology ensuring superior execution.</p>
            </div>
        </div>

        <!-- Image Card 5 -->
        <div class="gallery-card">
            <img src="assets/images/electrical-power.jpg" alt="Electrical & Power">
            <div class="gallery-overlay"></div>
            <div class="gallery-content">
                <h3>ELECTRICAL & POWER</h3>
                <p>Underground cabling, reliable power networks, uninterrupted supply.</p>
            </div>
        </div>

    </div>

    <!-- Bottom Gold Border Feature Panel -->
    <div class="infra-panel-wrapper">
        <div class="infra-feature-panel">
            
            <!-- Feature 1 -->
            <div class="infra-feature-item">
                <div class="feature-icon-box">
                    <img src="assets/images/premium-material.png" alt="Premium Materials">
                </div>
                <h4>PREMIUM MATERIALS</h4>
                <p>We use high-grade materials that ensure long-term performance.</p>
            </div>

            <div class="infra-divider"></div>

            <!-- Feature 2 -->
            <div class="infra-feature-item">
                <div class="feature-icon-box">
                    <img src="assets/images/quality-assurance.png" alt="Quality Assurance">
                </div>
                <h4>QUALITY ASSURANCE</h4>
                <p>Rigorous quality checks at every stage of construction and development.</p>
            </div>

            <div class="infra-divider"></div>

            <!-- Feature 3 -->
            <div class="infra-feature-item">
                <div class="feature-icon-box">
                    <img src="assets/images/safety-first.png" alt="Safety First">
                </div>
                <h4>SAFETY FIRST</h4>
                <p>International safety protocols to protect our people and our projects.</p>
            </div>

            <div class="infra-divider"></div>

            <!-- Feature 4 -->
            <div class="infra-feature-item">
                <div class="feature-icon-box">
                    <img src="assets/images/sustainable-practices.png" alt="Sustainable Practices">
                </div>
                <h4>SUSTAINABLE PRACTICES</h4>
                <p>Responsible construction for a greener and better future.</p>
            </div>

            <div class="infra-divider"></div>

            <!-- Feature 5 -->
            <div class="infra-feature-item">
                <div class="feature-icon-box">
                    <img src="assets/images/expert-team.png" alt="Expert Team">
                </div>
                <h4>EXPERT TEAM</h4>
                <p>Engineers, planners, and professionals with proven industry experience.</p>
            </div>

            <div class="infra-divider"></div>

            <!-- Feature 6 -->
            <div class="infra-feature-item">
                <div class="feature-icon-box">
                    <img src="assets/images/on-time-delivery.png" alt="On-Time Delivery">
                </div>
                <h4>ON-TIME DELIVERY</h4>
                <p>Commitment to timelines that builds trust and long-term relationships.</p>
            </div>

        </div>
    </div>

</section>

<!-- Invest Today. Grow Tomorrow Section -->
<section class="invest-section" id="invest">
    <div class="invest-container">
        
        <!-- Top Left Content -->
        <div class="invest-header">
            <h2 class="invest-title-white">INVEST TODAY.</h2>
            <h2 class="invest-title-gold">GROW TOMORROW.</h2>
            <p class="invest-description">
                Strategically located along the Karachi–Hyderabad Motorway, our developments are positioned in the corridor of tomorrow where infrastructure, commerce, and communities converge.
            </p>
        </div>

        <!-- Subheading -->
        <h3 class="invest-subtitle">WHY INVEST IN OUR COMMUNITIES?</h3>

        <!-- 5-Column Feature Grid -->
        <div class="invest-feature-grid">
            
            <!-- Feature 1 -->
            <div class="invest-feature-card">
                <div class="invest-icon-box">
                    <img src="assets/images/stategy-location.png" alt="Strategic Location">
                </div>
                <h4>STRATEGIC<br>LOCATION</h4>
                <p>Prime positioning on M-9 Motorway the region's fastest growing corridor.</p>
            </div>

            <div class="invest-divider"></div>

            <!-- Feature 2 -->
            <div class="invest-feature-card">
                <div class="invest-icon-box">
                    <img src="assets/images/high-growth-potential.png" alt="High Growth Potential">
                </div>
                <h4>HIGH GROWTH<br>POTENTIAL</h4>
                <p>Surrounded by industrial, residential & commercial expansion.</p>
            </div>

            <div class="invest-divider"></div>

            <!-- Feature 3 -->
            <div class="invest-feature-card">
                <div class="invest-icon-box">
                    <img src="assets/images/infrastructure-led-growth.png" alt="Infrastructure-Led Growth">
                </div>
                <h4>INFRASTRUCTURE<br>LED GROWTH</h4>
                <p>Improving connectivity, major upgrades & new infrastructure driving long-term value.</p>
            </div>

            <div class="invest-divider"></div>

            <!-- Feature 4 -->
            <div class="invest-feature-card">
                <div class="invest-icon-box">
                    <img src="assets/images/future-ready-communities.png" alt="Future-Ready Communities">
                </div>
                <h4>FUTURE READY<br>COMMUNITIES</h4>
                <p>Master-planned developments designed for sustainable growth and modern living.</p>
            </div>

            <div class="invest-divider"></div>

            <!-- Feature 5 -->
            <div class="invest-feature-card">
                <div class="invest-icon-box">
                    <img src="assets/images/secure-relaible-investment.png" alt="Secure Investment">
                </div>
                <h4>SECURE & RELIABLE<br>INVESTMENT</h4>
                <p>Backed by Lakhani Construction Company — a legacy of trust, quality and timely delivery.</p>
            </div>

        </div>

        <!-- Bottom Floating Information Card -->
        <div class="invest-bottom-card">
            <div class="card-media">
                <img src="assets/images/corridor-opportunities.png" alt="A Corridor Of Opportunities">
            </div>
            <div class="card-info">
                <h3>A CORRIDOR OF OPPORTUNITIES</h3>
                <p>From industrial hubs to urban centers, the Karachi–Hyderabad corridor
is unlocking unprecedented opportunities for investors. Our communities
are at the heart of this transformation.</p>
            </div>
        </div>

    </div>
</section>

<!-- Contact & Private Consultation Section -->
<section class="contact-section contact-page-section" id="contact">
    <div class="contact-container">
        
        <!-- Left Column: Office Interior Media & Office Info -->
        <div class="contact-left">
            <div class="contact-media-box">
                <img src="assets/images/contact-form.jpg" alt="Highway City Office Lounge">
            </div>

            <div class="contact-welcome-block">
                <h4 class="welcome-subtitle">WE'RE HERE TO</h4>
                <h2 class="welcome-title">WELCOME YOU.</h2>
                <p class="welcome-description">
                    Experience personalized guidance and dedicated support from our team of real estate and community experts.
                </p>

                <div class="office-locations-list">
                    
                    <!-- Head Office -->
                    <div class="office-location-item">
                        <div class="office-icon">
                            <img src="assets/images/head-office.png" alt="Head Office">
                        </div>
                        <div class="office-info">
                            <h5>HEAD OFFICE <span class="city-tag">(KARACHI)</span></h5>
                            <p>Suit No 201, Ronaq Trade Tower, Plot No 12-A, Block – 2, PECHS, Main Shahra-e-Quaideen, Karachi.</p>
                        </div>
                    </div>

                    <!-- Regional Office -->
                    <div class="office-location-item">
                        <div class="office-icon">
                            <img src="assets/images/regional-office.png" alt="Regional Office">
                        </div>
                        <div class="office-info">
                            <h5>REGIONAL OFFICE <span class="city-tag">(HYDERABAD)</span></h5>
                            <p>Suit No 417, 9th Floor, Dawood Center, Auto Bhan Road, Unit No 3, Latifabad, Hyderabad.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Right Column: Form -->
        <div class="contact-right">
            <h4 class="form-subtitle">LET'S BUILD TOMORROW, TOGETHER</h4>
            <h2 class="form-title">
                <span class="title-white">YOUR VISION.</span>
                <span class="title-gold">OUR COMMITMENT.</span>
            </h2>
            <p class="form-description">
                We offer private consultations to understand your goals and help you discover the right opportunities with complete confidence and clarity.
            </p>

            <form class="luxury-consultation-form" id="consultationForm" onsubmit="event.preventDefault();">
                
                <div class="form-row gap-row">
                    <div class="form-group">
                        <input type="text" id="fullName" class="gold-outlined-input" placeholder="FULL NAME" required>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" class="gold-outlined-input" placeholder="EMAIL ADDRESS" required>
                    </div>
                </div>

                <div class="form-row gap-row">
                    <div class="form-group">
                        <input type="tel" id="phone" class="gold-outlined-input" placeholder="PHONE NUMBER" required>
                    </div>
                    <div class="form-group">
                        <input type="text" id="prefTime" class="gold-outlined-input" placeholder="PREFERRED TIME">
                    </div>
                </div>

                <div class="form-group">
                    <input type="text" id="areaInterest" class="gold-outlined-input" placeholder="AREA OF INTEREST">
                </div>

                <div class="form-group">
                    <textarea id="assistMessage" class="gold-outlined-textarea" rows="4" placeholder="HOW CAN WE ASSIST YOU?"></textarea>
                </div>

                <button type="submit" class="btn-arrange-consultation">
                    <span>ARRANGE CONSULTATION</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </button>

                <div class="privacy-note">
                    <i class="fa-solid fa-lock privacy-lock"></i>
                    <span>Your information is kept private and will only be used to assist you personally.</span>
                </div>

            </form>
        </div>

    </div>
</section>

<!-- Pre-Footer Top Bar -->
    <div class="pre-footer-bar">
        <div class="pre-footer-left">
            
            <!-- Item 1 -->
            <div class="pre-footer-item">
                <div class="pre-footer-icon">
                    <img src="assets/images/prefertotalk.png" alt="Prefer to talk">
                </div>
                <div class="pre-footer-info">
                    <h5>PREFER TO TALK?</h5>
                    <p>SPEAK DIRECTLY WITH OUR TEAM.<br><a href="tel:+923111123115" class="phone-link">+92 311 1123115</a></p>
                </div>
            </div>

            <div class="pre-footer-divider"></div>

            <!-- Item 2 -->
            <div class="pre-footer-item">
                <div class="pre-footer-icon">
                    <img src="assets/images/visitoutexperiencecenter.png" alt="Experience Centre">
                </div>
                <div class="pre-footer-info">
                    <h5>VISIT OUR<br>EXPERIENCE CENTRE</h5>
                    <p>BY APPOINTMENT ONLY.<br>BOOK YOUR PRIVATE TOUR.</p>
                </div>
            </div>

            <div class="pre-footer-divider"></div>

            <!-- Item 3 -->
            <div class="pre-footer-item">
                <div class="pre-footer-icon">
                    <img src="assets/images/meetdiscussdiscover.png" alt="Meet Discuss Discover">
                </div>
                <div class="pre-footer-info">
                    <h5>MEET. DISCUSS. DISCOVER</h5>
                    <p>PERSONALIZED GUIDANCE<br>FOR INFORMED DECISIONS.</p>
                </div>
            </div>

            <div class="pre-footer-divider"></div>

            <!-- Item 4 -->
            <div class="pre-footer-item">
                <div class="pre-footer-icon">
                    <img src="assets/images/dedicated.png" alt="Dedicated Relationship Manager">
                </div>
                <div class="pre-footer-info">
                    <h5>DEDICATED</h5>
                    <p class="white-text">RELATIONSHIP<br>MANAGER</p>
                </div>
            </div>

        </div>

        <div class="pre-footer-right">
            <img src="assets/images/cta.png" alt="Spectrum Developers Entrance">
        </div>
    </div>
<?php 
  include 'includes/footer.php'; 
?>
