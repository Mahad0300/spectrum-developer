/**
 * Spectrum Developers - JavaScript Interactions
 * Header scroll state, dropdown toggles, and mobile drawer
 */

document.addEventListener('DOMContentLoaded', () => {
  const header = document.querySelector('.site-header');
  const dropdownItems = document.querySelectorAll('.has-dropdown');
  const hamburgerToggle = document.querySelector('.hamburger-toggle');
  const mobileDrawer = document.querySelector('.mobile-drawer');

  // 1. ScrollSpy for Active Section Navigation Highlight
  const sections = document.querySelectorAll('section[id]');
  const navLinks = document.querySelectorAll('.nav-menu .nav-link');

  if (sections.length > 0 && !window.location.pathname.includes('farm-lands.php')) {
    window.addEventListener('scroll', () => {
      let currentSection = '';
      const scrollPosition = window.scrollY + 250;

      sections.forEach((section) => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.offsetHeight;
        if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
          currentSection = section.getAttribute('id');
        }
      });

      navLinks.forEach((link) => {
        link.classList.remove('active');
        const href = link.getAttribute('href');
        if (href && (href === `#${currentSection}` || href.includes(`#${currentSection}`))) {
          link.classList.add('active');
        }
      });
    });
  }

  // 2. Dropdown Interactivity
  dropdownItems.forEach((item) => {
    const link = item.querySelector('.nav-link');
    
    // Touch / Click toggle support for mobile & tablet
    link.addEventListener('click', (e) => {
      if (window.innerWidth <= 1024) {
        e.preventDefault();
        item.classList.toggle('dropdown-open');
      }
    });

    item.addEventListener('mouseenter', () => {
      item.classList.add('dropdown-active');
    });

    item.addEventListener('mouseleave', () => {
      item.classList.remove('dropdown-active');
    });
  });

  // 3. Mobile Hamburger & Left Drawer Logic
  const drawerOverlay = document.getElementById('drawerOverlay');
  const drawerCloseBtn = document.getElementById('drawerCloseBtn');
  const mobileDestinationsToggle = document.getElementById('mobileDestinationsToggle');
  const mobileDestinationsItem = document.getElementById('mobileDestinationsItem');
  const mobileNavLinks = document.querySelectorAll('.mobile-nav-link, .mobile-sub-link');

  function openDrawer() {
    if (mobileDrawer) mobileDrawer.classList.add('open');
    if (drawerOverlay) drawerOverlay.classList.add('active');
    document.body.classList.add('drawer-open');
    if (hamburgerToggle) hamburgerToggle.setAttribute('aria-expanded', 'true');
  }

  function closeDrawer() {
    if (mobileDrawer) mobileDrawer.classList.remove('open');
    if (drawerOverlay) drawerOverlay.classList.remove('active');
    document.body.classList.remove('drawer-open');
    if (hamburgerToggle) hamburgerToggle.setAttribute('aria-expanded', 'false');
  }

  if (hamburgerToggle) {
    hamburgerToggle.addEventListener('click', (e) => {
      e.stopPropagation();
      if (mobileDrawer && mobileDrawer.classList.contains('open')) {
        closeDrawer();
      } else {
        openDrawer();
      }
    });
  }

  if (drawerCloseBtn) {
    drawerCloseBtn.addEventListener('click', closeDrawer);
  }

  if (drawerOverlay) {
    drawerOverlay.addEventListener('click', closeDrawer);
  }

  // ESC Key Listener to close drawer
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && mobileDrawer && mobileDrawer.classList.contains('open')) {
      closeDrawer();
    }
  });

  // Mobile Accordion Toggle for Destinations
  if (mobileDestinationsToggle && mobileDestinationsItem) {
    mobileDestinationsToggle.addEventListener('click', (e) => {
      e.preventDefault();
      const isOpen = mobileDestinationsItem.classList.toggle('open');
      mobileDestinationsToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    });
  }

  // Close drawer when clicking any mobile navigation link
  mobileNavLinks.forEach((link) => {
    link.addEventListener('click', () => {
      closeDrawer();
    });
  });

  // 4. Masterplan Experience Destination Menu Active Toggle
  const menuItems = document.querySelectorAll('.destination-menu .menu-item');
  menuItems.forEach((item) => {
    item.addEventListener('click', (e) => {
      e.preventDefault();
      menuItems.forEach((i) => {
        i.classList.remove('active');
        const arrow = i.querySelector('.menu-arrow');
        if (arrow) arrow.remove();
      });

      item.classList.add('active');
      const link = item.querySelector('.menu-link');
      if (link && !link.querySelector('.menu-arrow')) {
        const arrow = document.createElement('i');
        arrow.className = 'fa-solid fa-arrow-right menu-arrow';
        link.appendChild(arrow);
      }
    });
  });

  // 5. Experiences Section Swiper.js Carousel Initialization
  if (typeof Swiper !== 'undefined' && document.querySelector('.experiences-swiper')) {
    const experiencesSwiper = new Swiper('.experiences-swiper', {
      loop: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      spaceBetween: 32,
      speed: 700,
      grabCursor: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
      },
      pagination: {
        el: '.experiences-swiper .swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        320: {
          spaceBetween: 16,
        },
        768: {
          spaceBetween: 24,
        },
        1024: {
          spaceBetween: 32,
        },
      },
    });
  }
});
