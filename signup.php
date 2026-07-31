<?php 
  include 'includes/header.php'; 
?>

<!-- Client Portal Signup Main Section -->
<section class="portal-main-section auth-main-section">
    <div class="portal-container auth-container">
        
        <!-- Header Titles -->
        <div class="portal-header-wrapper auth-header-wrapper">
            <h1 class="portal-main-title">
                CREATE YOUR<br>
                <span class="highlight-gold">ACCOUNT</span>
            </h1>
            <p class="portal-subtitle">
                REGISTER YOUR ACCOUNT TO TRACK APPLICATION PROGRESS, BALLOTING STATUS, AND EXCLUSIVE PROPERTY UPDATES.
            </p>
        </div>

        <!-- Signup Card -->
        <div class="portal-card auth-card">
            <!-- Top Bar -->
            <div class="search-card-topbar">
                <div class="search-card-left">
                    <div class="search-icon-box">
                        <i class="fa-solid fa-user-plus"></i>
                    </div>
                    <div class="search-title-text">
                        <h3>NEW CLIENT REGISTRATION</h3>
                        <p>Fill out the details below to register your official account.</p>
                    </div>
                </div>
                <div class="search-card-right">
                    <div class="security-badge">
                        <img src="assets/images/secure.png" alt="Secure Information" class="security-badge-img">
                        <div class="security-badge-text">
                            Verified Official<br>Registration
                        </div>
                    </div>
                </div>
            </div>

            <!-- Signup Form -->
            <form id="signupForm" class="auth-form" onsubmit="return false;">
                <div class="auth-form-grid grid-2-col">
                    <!-- Field 1: Full Name -->
                    <div class="form-group">
                        <label for="signupFullName">FULL NAME</label>
                        <div class="input-with-icon">
                            <i class="fa-solid fa-user input-icon"></i>
                            <input type="text" id="signupFullName" class="form-input" placeholder="e.g., Muhammad Ahmed" required autocomplete="name">
                        </div>
                    </div>

                    <!-- Field 2: CNIC -->
                    <div class="form-group">
                        <label for="signupCNIC">CNIC NUMBER</label>
                        <div class="input-with-icon">
                            <i class="fa-solid fa-id-card input-icon"></i>
                            <input type="text" id="signupCNIC" class="form-input" placeholder="e.g., 12345-1234567-1" required autocomplete="off">
                        </div>
                    </div>

                    <!-- Field 3: Email -->
                    <div class="form-group">
                        <label for="signupEmail">EMAIL ADDRESS</label>
                        <div class="input-with-icon">
                            <i class="fa-solid fa-envelope input-icon"></i>
                            <input type="email" id="signupEmail" class="form-input" placeholder="e.g., user@example.com" required autocomplete="email">
                        </div>
                    </div>

                    <!-- Field 4: Mobile Phone -->
                    <div class="form-group">
                        <label for="signupPhone">PHONE NUMBER</label>
                        <div class="input-with-icon">
                            <i class="fa-solid fa-phone input-icon"></i>
                            <input type="tel" id="signupPhone" class="form-input" placeholder="e.g., 0300-1234567" required autocomplete="tel">
                        </div>
                    </div>

                    <!-- Field 5: Application No (Optional) -->
                    <div class="form-group full-width">
                        <label for="signupAppNo">APPLICATION / REFERENCE NO. (OPTIONAL)</label>
                        <div class="input-with-icon">
                            <i class="fa-solid fa-file-signature input-icon"></i>
                            <input type="text" id="signupAppNo" class="form-input" placeholder="e.g., HC-1234">
                        </div>
                    </div>

                    <!-- Field 6: Password -->
                    <div class="form-group">
                        <label for="signupPassword">CREATE PASSWORD</label>
                        <div class="input-with-icon">
                            <i class="fa-solid fa-key input-icon"></i>
                            <input type="password" id="signupPassword" class="form-input" placeholder="At least 8 characters" required autocomplete="new-password">
                            <button type="button" class="toggle-password-btn" id="toggleSignupPasswordBtn" aria-label="Toggle Password Visibility">
                                <i class="fa-solid fa-eye"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Field 7: Confirm Password -->
                    <div class="form-group">
                        <label for="signupConfirmPassword">CONFIRM PASSWORD</label>
                        <div class="input-with-icon">
                            <i class="fa-solid fa-shield-halved input-icon"></i>
                            <input type="password" id="signupConfirmPassword" class="form-input" placeholder="Re-enter password" required autocomplete="new-password">
                        </div>
                    </div>

                    <!-- Terms & Conditions Checkbox -->
                    <div class="auth-options-row full-width">
                        <label class="custom-checkbox">
                            <input type="checkbox" id="termsCheck" required>
                            <span class="checkmark"></span>
                            <span class="checkbox-text">I agree to the <a href="javascript:void(0);" class="gold-link">Terms & Conditions</a> and <a href="javascript:void(0);" class="gold-link">Privacy Policy</a> of Spectrum Developers.</span>
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <div class="form-submit-group full-width">
                        <button type="submit" class="btn-verify-now btn-auth-submit" id="btnSignupSubmit">
                            <span>REGISTER ACCOUNT</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Bottom Switch Footer -->
            <div class="auth-card-footer">
                <p>Already have an account? <a href="login.php" class="gold-link">Sign In to Your Account</a></p>
            </div>
        </div>

        <!-- Important Note & Support Card -->
        <div class="portal-card support-card">
            <div class="support-card-content">
                <div class="note-block">
                    <div class="note-icon">
                        <svg width="34" height="40" viewBox="0 0 28 34" fill="none" xmlns="http://www.w3.org/2000/svg" class="note-icon-svg">
                            <path d="M14 2L2 6.8V15.6C2 23.3 7.1 30.5 14 32C20.9 30.5 26 23.3 26 15.6V6.8L14 2Z" stroke="#C5A059" stroke-width="2.2" stroke-linejoin="round"/>
                            <path d="M9.5 16L12.5 19L18.5 13" stroke="#C5A059" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="note-text-wrapper">
                        <h4 class="note-title">VERIFIED IDENTITY POLICY</h4>
                        <p class="note-description">
                            Please ensure your CNIC and Name match official government records for smooth balloting verification.
                        </p>
                    </div>
                </div>

                <div class="help-block">
                    <div class="help-info-group">
                        <div class="help-icon">
                            <svg width="36" height="36" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="help-icon-svg">
                                <path d="M3 14V12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12V14" stroke="#C5A059" stroke-width="1.8" stroke-linecap="round"/>
                                <rect x="2" y="13" width="3" height="6" rx="1.5" stroke="#C5A059" stroke-width="1.8"/>
                                <rect x="19" y="13" width="3" height="6" rx="1.5" stroke="#C5A059" stroke-width="1.8"/>
                                <path d="M20 19V20C20 21.1046 19.1046 22 18 22H15" stroke="#C5A059" stroke-width="1.8" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <div class="help-text-wrapper">
                            <h4 class="help-title">NEED HELP?</h4>
                            <p class="help-description">Our support team is here to assist you.</p>
                        </div>
                    </div>
                    <a href="contact.php" class="btn-contact-support">
                        CONTACT SUPPORT <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Interactive Signup Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const toggleSignupPasswordBtn = document.getElementById('toggleSignupPasswordBtn');
    const signupPassword = document.getElementById('signupPassword');
    const signupForm = document.getElementById('signupForm');
    const btnSignupSubmit = document.getElementById('btnSignupSubmit');

    if (toggleSignupPasswordBtn && signupPassword) {
        toggleSignupPasswordBtn.addEventListener('click', function() {
            const type = signupPassword.getAttribute('type') === 'password' ? 'text' : 'password';
            signupPassword.setAttribute('type', type);
            this.querySelector('i').classList.toggle('fa-eye');
            this.querySelector('i').classList.toggle('fa-eye-slash');
        });
    }

    if (signupForm) {
        signupForm.addEventListener('submit', function(e) {
            e.preventDefault();
            btnSignupSubmit.style.opacity = '0.7';
            btnSignupSubmit.querySelector('span').innerText = 'CREATING ACCOUNT...';

            setTimeout(() => {
                btnSignupSubmit.style.opacity = '1';
                btnSignupSubmit.querySelector('span').innerText = 'REGISTER ACCOUNT';
                window.location.href = 'client-portal.php';
            }, 600);
        });
    }
});
</script>

<?php 
  include 'includes/footer.php'; 
?>
