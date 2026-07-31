<?php 
  include 'includes/header.php'; 
?>

<!-- Client Portal Login Main Section -->
<section class="portal-main-section auth-main-section">
    <div class="portal-container auth-container">
        
        <!-- Header Titles -->
        <div class="portal-header-wrapper auth-header-wrapper">
            <h1 class="portal-main-title">
                CLIENT<br>
                <span class="highlight-gold">LOGIN</span>
            </h1>
            <p class="portal-subtitle">
                ACCESS YOUR APPLICANT DASHBOARD, BALLOT RESULTS, AND PROPERTY INVESTMENT RECORDS WITH SECURE ENCRYPTION.
            </p>
        </div>

        <!-- Login Card -->
        <div class="portal-card auth-card">
            <!-- Top Bar -->
            <div class="search-card-topbar">
                <div class="search-card-left">
                    <div class="search-icon-box">
                        <i class="fa-solid fa-user-lock"></i>
                    </div>
                    <div class="search-title-text">
                        <h3>SIGN IN TO YOUR PORTAL</h3>
                        <p>Enter your account credentials to access your portal.</p>
                    </div>
                </div>
                <div class="search-card-right">
                    <div class="security-badge">
                        <img src="assets/images/secure.png" alt="Secure Information" class="security-badge-img">
                        <div class="security-badge-text">
                            256-Bit Encrypted<br>Secure Login
                        </div>
                    </div>
                </div>
            </div>

            <!-- Login Form -->
            <form id="loginForm" class="auth-form" onsubmit="return false;">
                <div class="auth-form-grid">
                    <!-- Field 1: CNIC / Email / App No -->
                    <div class="form-group full-width">
                        <label for="loginIdentity">CNIC / EMAIL / APPLICATION NO.</label>
                        <div class="input-with-icon">
                            <i class="fa-solid fa-user input-icon"></i>
                            <input type="text" id="loginIdentity" class="form-input" placeholder="e.g., 12345-1234567-1 or user@example.com" required autocomplete="username">
                        </div>
                    </div>

                    <!-- Field 2: Password -->
                    <div class="form-group full-width">
                        <div class="label-row">
                            <label for="loginPassword">PASSWORD</label>
                            <a href="javascript:void(0);" class="forgot-link">Forgot Password?</a>
                        </div>
                        <div class="input-with-icon">
                            <i class="fa-solid fa-key input-icon"></i>
                            <input type="password" id="loginPassword" class="form-input" placeholder="Enter your password" required autocomplete="current-password">
                            <button type="button" class="toggle-password-btn" id="togglePasswordBtn" aria-label="Toggle Password Visibility">
                                <i class="fa-solid fa-eye"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Remember Me & Actions Row -->
                    <div class="auth-options-row">
                        <label class="custom-checkbox">
                            <input type="checkbox" id="rememberMe">
                            <span class="checkmark"></span>
                            <span class="checkbox-text">Remember me on this device</span>
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <div class="form-submit-group full-width">
                        <button type="submit" class="btn-verify-now btn-auth-submit" id="btnLoginSubmit">
                            <span>SIGN IN</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Bottom Switch Footer -->
            <div class="auth-card-footer">
                <p>Don't have an account yet? <a href="signup.php" class="gold-link">Create Account Now</a></p>
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
                        <h4 class="note-title">SECURE ACCESS GUARANTEE</h4>
                        <p class="note-description">
                            Your credentials are strictly confidential. Never share your password or OTP with anyone.
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

<!-- Interactive Login Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const togglePasswordBtn = document.getElementById('togglePasswordBtn');
    const loginPassword = document.getElementById('loginPassword');
    const loginForm = document.getElementById('loginForm');
    const btnLoginSubmit = document.getElementById('btnLoginSubmit');

    if (togglePasswordBtn && loginPassword) {
        togglePasswordBtn.addEventListener('click', function() {
            const type = loginPassword.getAttribute('type') === 'password' ? 'text' : 'password';
            loginPassword.setAttribute('type', type);
            this.querySelector('i').classList.toggle('fa-eye');
            this.querySelector('i').classList.toggle('fa-eye-slash');
        });
    }

    if (loginForm) {
        loginForm.addEventListener('submit', function(e) {
            e.preventDefault();
            btnLoginSubmit.style.opacity = '0.7';
            btnLoginSubmit.querySelector('span').innerText = 'LOGGING IN...';

            setTimeout(() => {
                btnLoginSubmit.style.opacity = '1';
                btnLoginSubmit.querySelector('span').innerText = 'SIGN IN';
                window.location.href = 'client-portal.php';
            }, 500);
        });
    }
});
</script>

<?php 
  include 'includes/footer.php'; 
?>
