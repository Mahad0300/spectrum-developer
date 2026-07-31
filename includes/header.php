<?php
  $currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spectrum Developers | Crafting Communities, Not Just Homes</title>
    <meta name="description" content="Spectrum Developers - Crafting luxury communities designed for generations. Beyond land, we create legacy.">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700;800&family=Cormorant+Garamond:wght@400;500;600;700&family=Montserrat:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Swiper.js CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- Header / Navigation Bar -->
    <header class="site-header <?php echo ($currentPage == 'legacy.php' || $currentPage == 'client-portal.php') ? 'header-light' : ''; ?>" id="siteHeader">
        <div class="nav-container">
            <!-- Brand Logo -->
            <a href="index.php" class="brand-logo" aria-label="Spectrum Developers Home">
                <img src="assets/images/logo.png" alt="Spectrum Developers Logo">
            </a>

            <!-- Desktop Navigation Links -->
            <nav class="main-nav" aria-label="Main Navigation">
                <ul class="nav-menu">
                    <li class="nav-item">
                        <a href="legacy.php" class="nav-link <?php echo ($currentPage == 'legacy.php') ? 'active' : ''; ?>">LEGACY</a>
                    </li>
                    
                    <!-- DESTINATIONS with Dropdown (Matching Screenshot 2) -->
                    <li class="nav-item has-dropdown">
                        <a href="index.php#destinations" class="nav-link <?php echo ($currentPage == 'farm-lands.php' || $currentPage == 'highway-city-resort-living.php' || $currentPage == 'highway-city.php') ? 'active' : ''; ?>">
                            DESTINATIONS 
                            <i class="fa-solid fa-chevron-down dropdown-icon"></i>
                        </a>
                        <ul class="dropdown-menu" aria-label="Destinations Submenu">
                            <li class="dropdown-item">
                                <a href="highway-city.php" class="dropdown-link <?php echo ($currentPage == 'highway-city.php') ? 'active' : ''; ?>">Highway City</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="highway-city-resort-living.php" class="dropdown-link <?php echo ($currentPage == 'highway-city-resort-living.php') ? 'active' : ''; ?>">HIGHWAY CITY EXECUTIVE ENCLAVE</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="farm-lands.php" class="dropdown-link <?php echo ($currentPage == 'farm-lands.php') ? 'active' : ''; ?>">HIGHWAY CITY FARMLANDS (Coming Soon)</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="experiences.php" class="nav-link <?php echo ($currentPage == 'experiences.php') ? 'active' : ''; ?>">EXPERIENCES</a>
                    </li>
                    <li class="nav-item">
                        <a href="opportunities.php" class="nav-link <?php echo ($currentPage == 'opportunities.php') ? 'active' : ''; ?>">OPPORTUNITIES</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.php" class="nav-link <?php echo ($currentPage == 'contact.php') ? 'active' : ''; ?>">CONTACT</a>
                    </li>
                    <!-- <li class="nav-item nav-item-portal">
                        <a href="client-portal.php" class="btn-header-portal <?php echo ($currentPage == 'client-portal.php') ? 'active' : ''; ?>">CLIENT PORTAL</a>
                    </li> -->
                </ul>
            </nav>

            <!-- Hamburger Button for Mobile -->
            <button class="hamburger-toggle" id="hamburgerBtn" aria-label="Toggle Navigation Menu">
                <span class="hamburger-bar"></span>
                <span class="hamburger-bar"></span>
                <span class="hamburger-bar"></span>
            </button>
        </div>
    </header>

    <!-- Mobile Drawer Overlay Backdrop -->
    <div class="drawer-overlay" id="drawerOverlay" aria-hidden="true"></div>

    <!-- Mobile Slide-out Drawer Menu (Left Side) -->
    <div class="mobile-drawer" id="mobileDrawer" role="dialog" aria-modal="true" aria-label="Navigation Drawer">
        
        <!-- Drawer Header with Logo & Close Icon -->
        <div class="drawer-header">
            <a href="index.php" class="drawer-logo" aria-label="Spectrum Developers Home">
                <img src="assets/images/logo.png" alt="Spectrum Developers Logo">
            </a>
            <button class="drawer-close-btn" id="drawerCloseBtn" aria-label="Close Navigation Menu">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>

        <!-- Drawer Navigation List with Accordion -->
        <ul class="mobile-nav-list">
            <li class="mobile-nav-item">
                <a href="legacy.php" class="mobile-nav-link <?php echo ($currentPage == 'legacy.php') ? 'active' : ''; ?>">LEGACY</a>
            </li>

            <!-- Accordion Dropdown for Destinations -->
            <li class="mobile-nav-item mobile-has-accordion" id="mobileDestinationsItem">
                <button class="mobile-accordion-toggle <?php echo ($currentPage == 'farm-lands.php' || $currentPage == 'highway-city-resort-living.php' || $currentPage == 'highway-city.php') ? 'active' : ''; ?>" id="mobileDestinationsToggle" aria-expanded="false">
                    <span>DESTINATIONS</span>
                    <i class="fa-solid fa-chevron-down accordion-arrow"></i>
                </button>
                <ul class="mobile-accordion-menu" id="mobileDestinationsMenu">
                    <li><a href="highway-city.php" class="mobile-sub-link <?php echo ($currentPage == 'highway-city.php') ? 'active' : ''; ?>">Highway City</a></li>
                    <li><a href="highway-city-resort-living.php" class="mobile-sub-link <?php echo ($currentPage == 'highway-city-resort-living.php') ? 'active' : ''; ?>">HIGHWAY CITY EXECUTIVE ENCLAVE</a></li>
                    <li><a href="farm-lands.php" class="mobile-sub-link <?php echo ($currentPage == 'farm-lands.php') ? 'active' : ''; ?>">HIGHWAY CITY FARMLANDS (Coming Soon)</a></li>
                </ul>
            </li>

            <li class="mobile-nav-item">
                <a href="experiences.php" class="mobile-nav-link <?php echo ($currentPage == 'experiences.php') ? 'active' : ''; ?>">EXPERIENCES</a>
            </li>
            <li class="mobile-nav-item">
                <a href="opportunities.php" class="mobile-nav-link <?php echo ($currentPage == 'opportunities.php') ? 'active' : ''; ?>">OPPORTUNITIES</a>
            </li>
            <li class="mobile-nav-item">
                <a href="contact.php" class="mobile-nav-link <?php echo ($currentPage == 'contact.php') ? 'active' : ''; ?>">CONTACT</a>
            </li>
            <li class="mobile-nav-item">
                <a href="client-portal.php" class="mobile-nav-link <?php echo ($currentPage == 'client-portal.php') ? 'active' : ''; ?>">CLIENT PORTAL</a>
            </li>
        </ul>
    </div>
