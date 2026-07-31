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

  // 4. Masterplan Experience Destination Menu Interactive Card Content Switching
  const masterplanData = {
    'executive-square': {
      title: 'EXECUTIVE SQUARE',
      subtitle: 'CRAFTED FOR LEADERS. BUILT FOR SUCCESS',
      desc: 'A district designed for professionals, entrepreneurs, and those who aspire to lead.',
      image: 'assets/images/executive.png',
      link: 'highway-city.php#executive-square'
    },
    'santorini-shores': {
      title: 'SANTORINI SHORES',
      subtitle: 'MEDITERRANEAN CHARM. WATERFRONT LUXURY',
      desc: 'Inspired by iconic Greek coastal architecture with picturesque water views and serene walkways.',
      image: 'assets/images/santorini.png',
      link: 'highway-city.php#santorini-shores'
    },
    'rainforest-enclave': {
      title: 'RAINFOREST ENCLAVE',
      subtitle: 'NATURE IMMERSION. BIOPHILIC LIVING',
      desc: 'Surrounded by lush flora and canopy trails designed for deep relaxation and ecological harmony.',
      image: 'assets/images/rainforest.png',
      link: 'highway-city.php#rainforest-enclave'
    },
    'downtown': {
      title: 'DOWNTOWN',
      subtitle: 'THE PULSE OF EVERYDAY LIFE',
      desc: 'A vibrant hub where business, culture, and community come together seamlessly.',
      image: 'assets/images/downtown.png',
      link: 'highway-city.php#downtown'
    },
    'parkland-estates': {
      title: 'PARKLAND ESTATES',
      subtitle: 'EXPANSIVE GREENS. SERENE ELEGANCE',
      desc: 'Generous estate plots nestled amidst rolling green landscapes and private parks.',
      image: 'assets/images/parkland.png',
      link: 'highway-city.php#parkland-estates'
    },
    'serene-heaven': {
      title: 'SERENE HEAVEN',
      subtitle: 'TRANQUIL SANCTUARY. PRIVACY DEFINED',
      desc: 'A secluded haven crafted for ultimate privacy, peaceful living, and timeless comfort.',
      image: 'assets/images/serene.png',
      link: 'highway-city.php#serene-heaven'
    }
  };

  // Preload all district images immediately for zero-lag switching
  Object.values(masterplanData).forEach(item => {
    const img = new Image();
    img.src = item.image;
  });

  const menuItems = document.querySelectorAll('.destination-menu .menu-item');
  const card = document.getElementById('masterplanCard');
  const cardImg = document.getElementById('mpCardImage');
  const cardTitle = document.getElementById('mpCardTitle');
  const cardSubtitle = document.getElementById('mpCardSubtitle');
  const cardDesc = document.getElementById('mpCardDesc');
  const cardBtn = document.getElementById('mpCardBtn');

  menuItems.forEach((item) => {
    item.addEventListener('click', (e) => {
      e.preventDefault();
      if (item.classList.contains('active')) return;

      const districtKey = item.getAttribute('data-district');
      const data = masterplanData[districtKey];
      if (!data) return;

      // 1. Instant Menu Active State Update
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

      // 2. Instant & Snappy GPU-Accelerated Card Update
      if (card) {
        card.style.opacity = '0.7';
        card.style.transition = 'opacity 0.08s ease-out';

        requestAnimationFrame(() => {
          if (cardImg) {
            cardImg.src = data.image;
            cardImg.alt = data.title;
          }
          if (cardTitle) cardTitle.textContent = data.title;
          if (cardSubtitle) cardSubtitle.textContent = data.subtitle;
          if (cardDesc) cardDesc.textContent = data.desc;
          if (cardBtn) cardBtn.href = data.link;

          requestAnimationFrame(() => {
            card.style.opacity = '1';
          });
        });
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
