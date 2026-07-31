<?php 
  include 'includes/header.php'; 
?>

<!-- Client Portal Signup Main Section -->
<section class="portal-main-section auth-main-section">
    <div class="portal-container auth-container">
        
        <!-- Header Titles -->
        <div class="portal-header-wrapper auth-header-wrapper">
            <h1 class="portal-main-title">
                CREATE YOUR <span class="highlight-gold">ACCOUNT</span>
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
