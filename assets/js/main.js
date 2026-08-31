/**
 * Orbit Dial Crest - Haute Horlogerie & Astronomical Timepieces
 * Interactive Scripts & Micro-interactions
 */

document.addEventListener('DOMContentLoaded', () => {
  // 1. Navigation Scroll Effect
  const header = document.querySelector('.site-header');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 40) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  });

  // 2. Mobile Menu Toggle
  const mobileToggle = document.querySelector('.mobile-toggle');
  const mainNav = document.querySelector('.main-nav');
  if (mobileToggle && mainNav) {
    mobileToggle.addEventListener('click', () => {
      mainNav.classList.toggle('active');
      mobileToggle.classList.toggle('open');
    });
  }

  // 3. Timepiece Collection Filter Tabs
  const filterBtns = document.querySelectorAll('.filter-btn');
  const watchCards = document.querySelectorAll('.collection-item');
  if (filterBtns.length > 0) {
    filterBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        filterBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        const filter = btn.getAttribute('data-filter');
        
        watchCards.forEach(card => {
          if (filter === 'all' || card.getAttribute('data-category') === filter) {
            card.style.display = 'flex';
            setTimeout(() => {
              card.style.opacity = '1';
              card.style.transform = 'translateY(0)';
            }, 50);
          } else {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            setTimeout(() => {
              card.style.display = 'none';
            }, 300);
          }
        });
      });
    });
  }

  // 4. Interactive Caliber & Complication Match Advisor
  const advisorForm = document.getElementById('watchAdvisorForm');
  const advisorResult = document.getElementById('advisorResult');
  if (advisorForm && advisorResult) {
    advisorForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const complication = document.getElementById('complicationSelect').value;
      const material = document.getElementById('materialSelect').value;
      const dial = document.getElementById('dialSelect').value;

      let watchTitle = "The Orbit Grand Celestial Tourbillon";
      let watchDesc = "Tri-axial orbital tourbillon carriage housed in grade 5 titanium with Muonionalusta meteorite dial and astronomical starlight map.";

      if (complication === 'perpetual') {
        watchTitle = "The Orbit Equinox Perpetual Calendar";
        watchDesc = "Astronomical moonphase accurate to 122 years with secular leap-year mechanism and 18k solar gold architecture.";
      } else if (complication === 'chronograph') {
        watchTitle = "The Orbit Chrono-Monopoussoir Deep Ocean";
        watchDesc = "Column-wheel flyback chronograph with ceramic tachymeter bezel and 300-meter helium release valve.";
      } else if (complication === 'worldtimer') {
        watchTitle = "The Orbit Horizon 24-Timezone Celestial";
        watchDesc = "24-hour rotating astronomical disk with micro-rotor automatic caliber and aventurine crystal dial.";
      }

      advisorResult.innerHTML = `
        <h4>Recommended: ${watchTitle}</h4>
        <p>${watchDesc}</p>
        <div style="margin-top: 15px;">
          <a href="contact.html" class="btn-luxury btn-solar">Schedule Salon Allocation</a>
        </div>
      `;
      advisorResult.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    });
  }

  // 5. FAQ Accordion
  const faqItems = document.querySelectorAll('.faq-item');
  faqItems.forEach(item => {
    const header = item.querySelector('.faq-header');
    if (header) {
      header.addEventListener('click', () => {
        const isActive = item.classList.contains('active');
        faqItems.forEach(i => i.classList.remove('active'));
        if (!isActive) {
          item.classList.add('active');
        }
      });
    }
  });
});
