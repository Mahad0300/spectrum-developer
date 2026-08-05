<?php 
  include 'includes/header.php'; 
?>

<!-- Client Portal / Balloting Verification Main Section -->
<section class="portal-main-section">
    <div class="portal-container">
        
        <!-- Header Titles -->
        <div class="portal-header-wrapper">
            <h1 class="portal-main-title">
                BALLOTING<br>
                <span class="highlight-gold">VERIFICATION</span>
            </h1>
            <p class="portal-subtitle">
                VERIFY YOUR BALLOT RESULTS AND CHECK THE CURRENT STATUS OF YOUR APPLICATION WITH COMPLETE TRANSPARENCY AND CONFIDENCE.
            </p>
        </div>

        <!-- Card 1: Search Your Ballot -->
        <div class="portal-card search-card">
            <!-- Search Card Top Bar -->
            <div class="search-card-topbar">
                <div class="search-card-left">
                    <div class="search-icon-box">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <div class="search-title-text">
                        <h3>SEARCH YOUR BALLOT</h3>
                        <p>Enter any one of the details below to verify your ballot.</p>
                    </div>
                </div>
                <div class="search-card-right">
                    <div class="security-badge">
                        <img src="assets/images/secure.png" alt="Secure Information" class="security-badge-img">
                        <div class="security-badge-text">
                            Your information is<br>secure and protected.
                        </div>
                    </div>
                </div>
            </div>

            <!-- Search Form -->
            <form id="ballotSearchForm" class="ballot-search-form" onsubmit="return false;">
                <div class="form-inputs-row">
                    <!-- Field 1: CNIC -->
                    <div class="form-group">
                        <label for="inputCNIC">CNIC</label>
                        <input type="text" id="inputCNIC" class="form-input" placeholder="e.g., 12345-1234567-1" autocomplete="off">
                    </div>

                    <div class="form-or-divider">OR</div>

                    <!-- Field 2: Ballot No -->
                    <div class="form-group">
                        <label for="inputBallotNo">BALLOT NO.</label>
                        <input type="text" id="inputBallotNo" class="form-input" placeholder="e.g., B-001234" autocomplete="off">
                    </div>

                    <!-- Submit Button -->
                    <div class="form-submit-group">
                        <button type="submit" class="btn-verify-now" id="btnVerifyNow">
                            VERIFY NOW
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Card 2: Verification Result -->
        <div class="portal-card result-card" id="resultCard">
            <!-- Result Top Bar -->
            <div class="result-card-topbar">
                <h3 class="result-title">VERIFICATION RESULT</h3>
                <span class="result-timestamp" id="resultTimestamp">
                    Date & Time: 18 JUNE 2028 | 03:30 AM
                </span>
            </div>

            <!-- Result Body Grid -->
            <div class="result-body-grid">
                <!-- Left Status Column -->
                <div class="result-status-col">
                    <div class="verified-emblem-box">
                        <img src="assets/images/verified.png" alt="Verified Shield" class="verified-emblem-img">
                    </div>
                    <div class="verified-text-box">
                        <h2 class="status-verified-text" id="resVerifiedText">VERIFIED</h2>
                        <h4 class="status-confirmed-sub" id="resConfirmedSub">BALLOT CONFIRMED</h4>
                        <p class="status-congrats-msg" id="resCongratsMsg">
                            Congratulations! Your ballot<br>has been successfully verified.
                        </p>
                    </div>
                </div>

                <!-- Right Details Column -->
                <div class="result-details-col">
                    <!-- Applicant Info Fields Grid -->
                    <div class="applicant-info-row">
                        <div class="info-block">
                            <span class="info-label">APPLICANT NAME</span>
                            <span class="info-value" id="resApplicantName">MUHAMMAD AHMED</span>
                        </div>
                        <div class="info-block">
                            <span class="info-label">CNIC</span>
                            <span class="info-value" id="resCNIC">12345-1234567-1</span>
                        </div>
                        <div class="info-block">
                            <span class="info-label">APPLICATION NO.</span>
                            <span class="info-value" id="resAppNo">HC-1234</span>
                        </div>
                        <div class="info-block">
                            <span class="info-label">BALLOT NO.</span>
                            <span class="info-value" id="resBallotNo">B-001234</span>
                        </div>
                    </div>

                    <!-- Status Pills Cards Grid -->
                    <div class="status-pills-row">
                        <!-- Pill 1: Ballot Status -->
                        <div class="status-pill-card">
                            <div class="pill-card-icon">
                                <img src="assets/images/ballot-status.png" alt="Ballot Status Icon">
                            </div>
                            <div class="pill-card-text">
                                <span class="pill-label">BALLOT STATUS</span>
                                <span class="pill-value pill-success" id="resBallotStatus">SUCCESSFUL</span>
                            </div>
                        </div>

                        <!-- Pill 2: Allocated Category -->
                        <div class="status-pill-card">
                            <div class="pill-card-icon">
                                <img src="assets/images/allocated-category.png" alt="Allocated Category Icon">
                            </div>
                            <div class="pill-card-text">
                                <span class="pill-label">ALLOCATED CATEGORY</span>
                                <span class="pill-value" id="resAllocatedCategory">05 MARLA <span class="gold-text">RESIDENTIAL</span></span>
                            </div>
                        </div>

                        <!-- Pill 3: Proceeding Stage -->
                        <div class="status-pill-card">
                            <div class="pill-card-icon">
                                <img src="assets/images/proceeding-statue.png" alt="Proceeding Stage Icon">
                            </div>
                            <div class="pill-card-text">
                                <span class="pill-label">PROCEEDING STAGE</span>
                                <span class="pill-value" id="resProceedingStage">ALLOCATION COMPLETED</span>
                            </div>
                        </div>

                        <!-- Pill 4: Verification Result -->
                        <div class="status-pill-card">
                            <div class="pill-card-icon">
                                <img src="assets/images/secure.png" alt="Verification Result Icon">
                            </div>
                            <div class="pill-card-text">
                                <span class="pill-label">VERIFICATION RESULT</span>
                                <span class="pill-value pill-confirmed" id="resVerificationResult">CONFIRMED</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 3: Important Note & Contact Support Bar -->
        <div class="portal-card support-card">
            <div class="support-card-content">
                <!-- Important Note Block -->
                <div class="note-block">
                    <div class="note-icon">
                        <svg width="34" height="40" viewBox="0 0 28 34" fill="none" xmlns="http://www.w3.org/2000/svg" class="note-icon-svg">
                            <path d="M14 2L2 6.8V15.6C2 23.3 7.1 30.5 14 32C20.9 30.5 26 23.3 26 15.6V6.8L14 2Z" stroke="#C5A059" stroke-width="2.2" stroke-linejoin="round"/>
                            <path d="M9.5 16L12.5 19L18.5 13" stroke="#C5A059" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="note-text-wrapper">
                        <h4 class="note-title">IMPORTANT NOTE</h4>
                        <p class="note-description">
                            This is an official verification system of Spectrum Developers.<br>
                            Any fraudulent activity or misrepresentation of details will lead to disqualification.
                        </p>
                    </div>
                </div>

                <!-- Help Support Block -->
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
                    <a href="https://wa.me/923111123115" class="btn-contact-support" target="_blank" rel="noopener noreferrer">
                        CONTACT SUPPORT <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Client Portal Interactive JS Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchForm = document.getElementById('ballotSearchForm');
    const inputCNIC = document.getElementById('inputCNIC');
    const inputBallotNo = document.getElementById('inputBallotNo');
    const btnVerifyNow = document.getElementById('btnVerifyNow');
    const resultCard = document.getElementById('resultCard');

    // Sample data records
    const mockDatabase = [
        {
            cnic: "12345-1234567-1",
            appNo: "HC-1234",
            ballotNo: "B-001234",
            name: "MUHAMMAD AHMED",
            status: "SUCCESSFUL",
            category: "05 MARLA RESIDENTIAL",
            stage: "ALLOCATION COMPLETED",
            result: "CONFIRMED"
        },
        {
            cnic: "42101-1234567-3",
            appNo: "HC-5678",
            ballotNo: "B-005678",
            name: "ALI KHAN",
            status: "SUCCESSFUL",
            category: "10 MARLA COMMERCIAL",
            stage: "DOCUMENTATION VERIFIED",
            result: "CONFIRMED"
        }
    ];

    function handleSearch() {
        const cnicVal = inputCNIC.value.trim().toLowerCase();
        const ballotVal = inputBallotNo.value.trim().toLowerCase();

        let matched = null;
        if (cnicVal || ballotVal) {
            matched = mockDatabase.find(item => 
                (cnicVal && item.cnic.toLowerCase().includes(cnicVal)) ||
                (ballotVal && item.ballotNo.toLowerCase().includes(ballotVal))
            );
        }

        if (!matched && (cnicVal || ballotVal)) {
            matched = {
                cnic: cnicVal ? inputCNIC.value.trim() : "12345-1234567-1",
                appNo: "HC-1234",
                ballotNo: ballotVal ? inputBallotNo.value.trim().toUpperCase() : "B-001234",
                name: "VERIFIED APPLICANT",
                status: "SUCCESSFUL",
                category: "05 MARLA RESIDENTIAL",
                stage: "ALLOCATION COMPLETED",
                result: "CONFIRMED"
            };
        } else if (!matched) {
            matched = mockDatabase[0];
        }

        btnVerifyNow.style.opacity = '0.7';
        btnVerifyNow.innerText = 'VERIFYING...';

        setTimeout(() => {
            btnVerifyNow.style.opacity = '1';
            btnVerifyNow.innerText = 'VERIFY NOW';

            document.getElementById('resApplicantName').innerText = matched.name;
            document.getElementById('resCNIC').innerText = matched.cnic;
            document.getElementById('resAppNo').innerText = matched.appNo;
            document.getElementById('resBallotNo').innerText = matched.ballotNo;
            document.getElementById('resBallotStatus').innerText = matched.status;
            document.getElementById('resAllocatedCategory').innerText = matched.category;
            document.getElementById('resProceedingStage').innerText = matched.stage;
            document.getElementById('resVerificationResult').innerText = matched.result;

            resultCard.style.display = 'block';
            resultCard.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }, 300);
    }

    if (searchForm) {
        searchForm.addEventListener('submit', function(e) {
            e.preventDefault();
            handleSearch();
        });
    }
});
</script>

<?php 
  include 'includes/footer.php'; 
?>
