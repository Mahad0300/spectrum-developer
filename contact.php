<?php 
  include 'includes/header.php'; 
?>

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
