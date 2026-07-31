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
