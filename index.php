<?php
/**
 * Orbit Dial Crest - Haute Horlogerie & Astronomical Timepieces
 * Main Landing Page
 */
$pageTitle = "Orbit Dial Crest | Haute Horlogerie & Astronomical Masterpieces";
$pageDesc = "Explore Orbit Dial Crest's celestial mechanical timepieces, featuring orbital tourbillons, perpetual calendars, and meteorite dials crafted to Geneva Seal standards.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $pageTitle; ?></title>
  <meta name="description" content="<?php echo $pageDesc; ?>">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><circle cx='50' cy='50' r='45' fill='%23060a17'/><circle cx='50' cy='50' r='38' stroke='%23e5b869' stroke-width='4' fill='none'/><text x='50%' y='58%' text-anchor='middle' font-family='serif' font-size='42' font-weight='bold' fill='%23e5b869'>O</text></svg>">
  
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-0LY0HY7L01');
  </script>
</head>
<body>

  <!-- Site Navigation -->
  <header class="site-header">
    <div class="container">
      <div class="header-inner">
        <a href="index.php" class="brand-container">
          <div class="brand-logo-icon">O</div>
          <div class="brand-text-wrap">
            <span class="brand-logo-text">Orbit Dial Crest</span>
            <span class="brand-tagline">Haute Horlogerie</span>
          </div>
        </a>

        <nav class="main-nav">
          <a href="index.php" class="nav-link active">Home Vault</a>
          <a href="about.html" class="nav-link">About Atelier</a>
          <a href="blog.html" class="nav-link">Horology Journal</a>
          <a href="contact.html" class="nav-link">Salon Concierge</a>
        </nav>

        <div class="nav-cta">
          <a href="contact.html" class="btn-luxury btn-solar">Book Viewing</a>
        </div>

        <button class="mobile-toggle" aria-label="Toggle Navigation">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
    </div>
  </header>

  <main>
    <!-- SECTION 1: HERO SECTION -->
    <section class="hero-section" id="hero">
      <div class="container">
        <div class="hero-grid">
          <div class="hero-content">
            <div class="hero-badge">Celestial Complications 2026</div>
            <h1 class="hero-title">Celestial Mechanics, <span>Timeless Precision.</span></h1>
            <p class="hero-desc">
              Orbit Dial Crest captures the infinite rhythm of the cosmos. Merging centuries of Swiss micro-mechanical mastery with space-age metallurgy, our astronomical tourbillons and perpetual calendars represent the absolute pinnacle of haute horlogerie.
            </p>
            <div class="hero-actions">
              <a href="#signature-vault" class="btn-luxury btn-solar">Explore Timepiece Vault</a>
              <a href="#caliber-advisor" class="btn-luxury btn-outline-solar">Caliber Advisor</a>
            </div>
            <div class="hero-stats">
              <div class="stat-item">
                <h3>COSC</h3>
                <p>Certified Chronometer</p>
              </div>
              <div class="stat-item">
                <h3>28,800</h3>
                <p>Vibrations Per Hour</p>
              </div>
              <div class="stat-item">
                <h3>Meteorite</h3>
                <p>Extraterrestrial Dials</p>
              </div>
            </div>
          </div>

          <div class="hero-visual-card">
            <div class="hero-image-frame">
              <img src="https://images.unsplash.com/photo-1524805444758-089113d48a6d?auto=format&fit=crop&w=900&q=85" alt="Orbit Dial Crest Celestial Luxury Mechanical Timepiece">
            </div>
            <div class="floating-accent-card">
              <div class="accent-tourbillon-icon">⚙</div>
              <div class="accent-text">
                <h5>Caliber ODC-901</h5>
                <p>Tri-Axial Orbital Tourbillon</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION 2: SIGNATURE TIMEPIECE VAULT -->
    <section class="section section-alt" id="signature-vault">
      <div class="container">
        <div class="section-header">
          <span class="section-tag">Grand Complications</span>
          <h2 class="section-title">The Celestial Vault</h2>
          <p class="section-subtitle">Every piece is hand-finished in our dedicated Swiss atelier, featuring Geneva Seal hand-anglage, hand-blued titanium screws, and anti-magnetic silicon hairsprings.</p>
        </div>

        <div class="filter-tabs">
          <button class="filter-btn active" data-filter="all">All Complications</button>
          <button class="filter-btn" data-filter="tourbillon">Orbital Tourbillons</button>
          <button class="filter-btn" data-filter="perpetual">Perpetual Calendars</button>
          <button class="filter-btn" data-filter="chronograph">Monopusher Chronos</button>
        </div>

        <div class="grid-3" id="watchGrid">
          <!-- Watch 1 -->
          <div class="luxury-card collection-item" data-category="tourbillon">
            <div class="card-img-wrap">
              <img src="https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?auto=format&fit=crop&w=700&q=80" alt="The Orbit Grand Celestial Tourbillon">
              <span class="card-tag-pill">Haute Complication</span>
            </div>
            <div class="card-body">
              <h3>The Grand Celestial Tourbillon</h3>
              <p>Tri-axial flying tourbillon carriage rotating on three distinct axes, housed in Grade 5 titanium with an authentic Muonionalusta meteorite dial.</p>
              <a href="contact.html" class="card-link">Request Private Viewing &rarr;</a>
            </div>
          </div>

          <!-- Watch 2 -->
          <div class="luxury-card collection-item" data-category="perpetual">
            <div class="card-img-wrap">
              <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?auto=format&fit=crop&w=700&q=80" alt="The Orbit Equinox Perpetual Calendar">
              <span class="card-tag-pill">Astronomical Series</span>
            </div>
            <div class="card-body">
              <h3>The Equinox Perpetual Calendar</h3>
              <p>Astronomical moonphase accurate to 122 years with secular leap-year indicator, aventurine starlight dial, and 18k solar gold architecture.</p>
              <a href="contact.html" class="card-link">Request Private Viewing &rarr;</a>
            </div>
          </div>

          <!-- Watch 3 -->
          <div class="luxury-card collection-item" data-category="chronograph">
            <div class="card-img-wrap">
              <img src="https://images.unsplash.com/photo-1547996160-71dfabb1a7b1?auto=format&fit=crop&w=700&q=80" alt="The Orbit Chrono-Monopoussoir Deep Ocean">
              <span class="card-tag-pill">Chronometer Grade</span>
            </div>
            <div class="card-body">
              <h3>The Chrono-Monopoussoir</h3>
              <p>Column-wheel flyback chronograph with single coaxial push-piece, high-tech ceramic tachymeter bezel, and 100-hour power reserve.</p>
              <a href="contact.html" class="card-link">Request Private Viewing &rarr;</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION 3: CELESTIAL METALLURGY & ATELIER HERITAGE -->
    <section class="section section-deep" id="metallurgy">
      <div class="container">
        <div class="section-header">
          <span class="section-tag">Micro-Mechanical Purity</span>
          <h2 class="section-title">Anatomy of Horological Supremacy</h2>
          <p class="section-subtitle">Fusing traditional hand-finishing techniques with aerospace-grade metallurgical innovations.</p>
        </div>

        <div class="grid-4">
          <div class="craft-box">
            <div class="craft-num">01</div>
            <h4>Meteorite Dials</h4>
            <p>Etched from natural iron-nickel meteorites, displaying unique Widmanstätten crystalline structures forged in deep space.</p>
          </div>

          <div class="craft-box">
            <div class="craft-num">02</div>
            <h4>Grade 5 Titanium</h4>
            <p>Aerospace-grade titanium alloy providing supreme tensile durability, featherlight ergonomics, and hypoallergenic comfort.</p>
          </div>

          <div class="craft-box">
            <div class="craft-num">03</div>
            <h4>Silicon Escapement</h4>
            <p>Frictionless monocrystalline silicon balance spring completely immune to magnetic fields up to 15,000 Gauss.</p>
          </div>

          <div class="craft-box">
            <div class="craft-num">04</div>
            <h4>Hand Anglage</h4>
            <p>Every bridge is beveled and mirror-polished by hand with gentian wood paste to meet the uncompromising Geneva Seal standard.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION 4: THE COLLECTOR'S LOOKBOOK & EDITORIAL -->
    <section class="section" id="lookbook">
      <div class="container">
        <div class="grid-2">
          <div class="lookbook-visual">
            <div class="hero-image-frame">
              <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=900&q=85" alt="Haute Horlogerie Timepiece on Wrist in Luxury Setting">
            </div>
          </div>
          <div class="lookbook-content">
            <span class="section-tag">The Horologist's Code</span>
            <h2 class="section-title">Sculpted for the Discerning Wrist</h2>
            <p>
              A high-complication mechanical watch is the only luxury object that measures the fourth dimension. Orbit Dial Crest timepieces are crafted to command authority across every high-stakes environment.
            </p>
            <div style="margin: 2rem 0; display: flex; flex-direction: column; gap: 1.2rem;">
              <div style="display: flex; gap: 1rem; align-items: flex-start;">
                <span style="color: var(--color-solar-gold); font-size: 1.3rem;">◈</span>
                <div>
                  <h4 style="font-size: 1.15rem; margin-bottom: 2px;">Black-Tie Nocturnal Sovereignty</h4>
                  <p style="font-size: 0.95rem; margin: 0;">Pair the ultra-thin perpetual calendar in 18k solar gold with bespoke midnight tuxedo tailoring.</p>
                </div>
              </div>
              <div style="display: flex; gap: 1rem; align-items: flex-start;">
                <span style="color: var(--color-solar-gold); font-size: 1.3rem;">◈</span>
                <div>
                  <h4 style="font-size: 1.15rem; margin-bottom: 2px;">Aerospace & Maritime Exploration</h4>
                  <p style="font-size: 0.95rem; margin: 0;">Wear the titanium monopusher chronograph on an integrated vulcanized FKM rubber strap for high-velocity yachting.</p>
                </div>
              </div>
            </div>
            <a href="blog.html" class="btn-luxury btn-solar">Explore Horology Journal</a>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION 5: INTERACTIVE CALIBER ADVISOR -->
    <section class="section section-alt" id="caliber-advisor">
      <div class="container">
        <div class="section-header">
          <span class="section-tag">Interactive Watchmaker</span>
          <h2 class="section-title">The Caliber Match Advisor</h2>
          <p class="section-subtitle">Select your preferred complications and metallurgical case specifications to determine your ideal horological match.</p>
        </div>

        <div class="bag-advisor-container">
          <div class="advisor-steps-wrap">
            <form id="watchAdvisorForm">
              <div class="advisor-form-group">
                <label for="complicationSelect">Primary Complication / Function</label>
                <select id="complicationSelect" class="custom-select">
                  <option value="tourbillon">Tri-Axial Orbital Tourbillon</option>
                  <option value="perpetual">Secular Perpetual Calendar & Moonphase</option>
                  <option value="chronograph">Column-Wheel Flyback Chronograph</option>
                  <option value="worldtimer">24-Timezone Celestial Worldtimer</option>
                </select>
              </div>

              <div class="advisor-form-group">
                <label for="materialSelect">Case Architecture & Metallurgy</label>
                <select id="materialSelect" class="custom-select">
                  <option value="titanium">Grade 5 Aerospace Titanium</option>
                  <option value="solar-gold">18k Solar Rose Gold</option>
                  <option value="platinum">Solid 950 Platinum Alloy</option>
                  <option value="ceramic">High-Tech Monobloc Black Ceramic</option>
                </select>
              </div>

              <div class="advisor-form-group">
                <label for="dialSelect">Artisanal Dial Finish</label>
                <select id="dialSelect" class="custom-select">
                  <option value="meteorite">Natural Iron Meteorite (Widmanstätten)</option>
                  <option value="aventurine">Deep Midnight Blue Aventurine Glass</option>
                  <option value="skeleton">Openworked Skeleton with Hand Anglage</option>
                </select>
              </div>

              <button type="submit" class="btn-luxury btn-cyan" style="width: 100%; margin-top: 10px;">Calculate Caliber Allocation</button>
            </form>

            <div class="advisor-result-card" id="advisorResult">
              <h4>Awaiting Your Input</h4>
              <p>Configure your mechanical preferences on the left and click calculate to view your bespoke caliber recommendation.</p>
              <div style="font-size: 2.2rem; color: var(--color-solar-gold); opacity: 0.5;">✦</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION 6: CONNOISSEUR REVIEWS & GLOBAL PRESS -->
    <section class="section" id="press-reviews">
      <div class="container">
        <div class="section-header">
          <span class="section-tag">Global Critical Acclaim</span>
          <h2 class="section-title">Voices of Master Horologists</h2>
          <p class="section-subtitle">Praised by independent collectors and horological grand juries in Geneva, Zurich, Tokyo, and New York.</p>
        </div>

        <div class="grid-3">
          <div class="testimonial-card">
            <div>
              <div class="quote-icon">“</div>
              <p class="testimonial-text">The rotational fluidity of the tri-axial tourbillon is an absolute triumph of micro-engineering. Under a 10x loupe, the interior anglage is flawless.</p>
            </div>
            <div class="client-meta">
              <div class="client-avatar">MH</div>
              <div class="client-info">
                <h5>Maximilian von H.</h5>
                <span>Geneva, Switzerland</span>
              </div>
            </div>
          </div>

          <div class="testimonial-card">
            <div>
              <div class="quote-icon">“</div>
              <p class="testimonial-text">Orbit Dial Crest has created a secular perpetual calendar that outshines heritage maisons. The meteorite dial gives it an otherworldly cosmic soul.</p>
            </div>
            <div class="client-meta">
              <div class="client-avatar">SK</div>
              <div class="client-info">
                <h5>Sir Kenneth Sterling</h5>
                <span>London, United Kingdom</span>
              </div>
            </div>
          </div>

          <div class="testimonial-card">
            <div>
              <div class="quote-icon">“</div>
              <p class="testimonial-text">The silicon hairspring paired with the titanium monobloc case makes this my ultimate daily chronometer. It keeps dead-beat accuracy on transatlantic flights.</p>
            </div>
            <div class="client-meta">
              <div class="client-avatar">DT</div>
              <div class="client-info">
                <h5>Daisuke Takahashi</h5>
                <span>Tokyo, Japan</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION 7: ATELIER PRIVILEGES & SERVICES -->
    <section class="section section-deep" id="privileges">
      <div class="container">
        <div class="section-header">
          <span class="section-tag">Owner Protection</span>
          <h2 class="section-title">The Orbit Dial Crest Atelier Privileges</h2>
          <p class="section-subtitle">Every timepiece is serialized, recorded in our Geneva registry, and accompanied by comprehensive concierge support.</p>
        </div>

        <div class="grid-3">
          <div class="craft-box" style="text-align: center;">
            <div style="font-size: 2.2rem; color: var(--color-solar-gold); margin-bottom: 1rem;">✦</div>
            <h4>5-Year International Warranty</h4>
            <p>Comprehensive coverage against all mechanical defects with certified COSC chronometer re-regulation.</p>
          </div>

          <div class="craft-box" style="text-align: center;">
            <div style="font-size: 2.2rem; color: var(--color-solar-gold); margin-bottom: 1rem;">✧</div>
            <h4>Complimentary Movement Spa</h4>
            <p>Complete ultrasonic cleaning, synthetic oil relubrication, and gasket resealing every 36 months.</p>
          </div>

          <div class="craft-box" style="text-align: center;">
            <div style="font-size: 2.2rem; color: var(--color-solar-gold); margin-bottom: 1rem;">◈</div>
            <h4>Armored Vault Courier</h4>
            <p>Insured, temperature-stabilized private transit direct to your residence or private bank depository.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION 8: EDITORIAL JOURNAL & HOROLOGY INSIGHTS -->
    <section class="section section-alt" id="journal">
      <div class="container">
        <div class="section-header">
          <span class="section-tag">Horological Intelligence</span>
          <h2 class="section-title">From the Orbit Dial Crest Journal</h2>
          <p class="section-subtitle">Explore in-depth technical masterclasses on escapement physics, tourbillon mechanics, and watchmaking history.</p>
        </div>

        <div class="grid-3">
          <div class="luxury-card">
            <div class="card-img-wrap">
              <img src="https://images.unsplash.com/photo-1524805444758-089113d48a6d?auto=format&fit=crop&w=700&q=80" alt="Evolution of Astronomical Watch Complications">
              <span class="card-tag-pill">Horology Theory</span>
            </div>
            <div class="card-body">
              <h3>The Evolution of Astronomical Watch Complications</h3>
              <p>Tracing the mathematical journey from ancient astrolabes and celestial clocks to modern wristwatch moonphases.</p>
              <a href="blog/the-evolution-of-astronomical-watch-complications.html" class="card-link">Read 1,420 Word Guide &rarr;</a>
            </div>
          </div>

          <div class="luxury-card">
            <div class="card-img-wrap">
              <img src="https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?auto=format&fit=crop&w=700&q=80" alt="Mastering the Tourbillon">
              <span class="card-tag-pill">Micro-Engineering</span>
            </div>
            <div class="card-body">
              <h3>Mastering the Tourbillon: Gravity-Defying Art</h3>
              <p>How Abraham-Louis Breguet’s 1801 invention evolved into modern multi-axis flying tourbillons.</p>
              <a href="blog/mastering-the-tourbillon-gravity-defying-horological-art.html" class="card-link">Read 1,390 Word Guide &rarr;</a>
            </div>
          </div>

          <div class="luxury-card">
            <div class="card-img-wrap">
              <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?auto=format&fit=crop&w=700&q=80" alt="Meteorite Dials in Luxury Watches">
              <span class="card-tag-pill">Metallurgy</span>
            </div>
            <div class="card-body">
              <h3>Meteorite Dials: Harnessing Extraterrestrial Iron</h3>
              <p>The metallurgical science of cutting, acid-etching, and stabilizing billion-year-old space fragments for watch dials.</p>
              <a href="blog/meteorite-dials-harnessing-extraterrestrial-iron-in-luxury-watches.html" class="card-link">Read 1,360 Word Guide &rarr;</a>
            </div>
          </div>
        </div>

        <div style="text-align: center; margin-top: 3.5rem;">
          <a href="blog.html" class="btn-luxury btn-solar">View All 12 Horology Masterclasses</a>
        </div>
      </div>
    </section>

    <!-- SECTION 9: VIP CONCIERGE & PRIVATE SHOWROOM VIEWING -->
    <section class="section" id="concierge">
      <div class="container">
        <div class="grid-2" style="background: var(--grad-cosmic-card); color: var(--color-stardust-white); padding: 4rem; border-radius: 28px; border: 1px solid var(--color-cosmic-border); box-shadow: var(--shadow-luxury);">
          <div>
            <span class="section-tag" style="color: var(--color-solar-light);">Private Horological Salons</span>
            <h2 style="color: var(--color-stardust-white); margin-bottom: 1.2rem;">Book a Private Salon Viewing</h2>
            <p style="color: var(--color-text-muted); font-size: 1.05rem; margin-bottom: 2rem;">
              Experience the mechanical weight of our tourbillons and examine hand-anglage under high-magnification stereomicroscopes at our flagship Manhattan salon.
            </p>
            <div style="display: flex; flex-direction: column; gap: 1rem; font-size: 0.95rem; color: #cbd5e1;">
              <div>📍 <strong>Address:</strong> 181 Mercer Street, New York, NY 10012, United States</div>
              <div>📞 <strong>Official Phone:</strong> +1-888-777-5845</div>
              <div>✉️ <strong>Concierge Desk:</strong> concierge@orbitdialcrest.com</div>
            </div>
          </div>
          <div style="display: flex; flex-direction: column; justify-content: center; align-items: flex-start; background: rgba(6,10,23,0.7); padding: 2.5rem; border-radius: 20px; border: 1px solid var(--color-cosmic-border-light);">
            <h3 style="color: var(--color-solar-light); font-size: 1.5rem; margin-bottom: 0.8rem;">Schedule Private Commission</h3>
            <p style="color: var(--color-text-muted); font-size: 0.92rem; margin-bottom: 1.5rem;">Speak with our master horologist to discuss bespoke timepiece allocations and private collector viewings.</p>
            <a href="contact.html" class="btn-luxury btn-solar" style="width: 100%;">Schedule Concierge Call</a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Site Footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-col">
          <div class="brand-container" style="margin-bottom: 1.2rem;">
            <div class="brand-logo-icon">O</div>
            <div class="brand-text-wrap">
              <span class="brand-logo-text" style="color: var(--color-stardust-white);">Orbit Dial Crest</span>
              <span class="brand-tagline">Haute Horlogerie</span>
            </div>
          </div>
          <p style="font-size: 0.92rem; color: #94a3b8; line-height: 1.8;">
            Crafting astronomical complications, orbital tourbillons, and meteorite mechanical timepieces to the highest standards of Swiss fine watchmaking.
          </p>
        </div>

        <div class="footer-col">
          <h4>Navigation</h4>
          <ul class="footer-links">
            <li><a href="index.php">Home Vault</a></li>
            <li><a href="about.html">About Atelier</a></li>
            <li><a href="blog.html">Horology Journal</a></li>
            <li><a href="contact.html">Salon Concierge</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Legal & Policies</h4>
          <ul class="footer-links">
            <li><a href="privacy-policy.html">Privacy Policy</a></li>
            <li><a href="terms.html">Terms & Conditions</a></li>
            <li><a href="cookies.html">Cookie Policy</a></li>
            <li><a href="disclaimer.html">Horology Disclaimer</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Official Atelier</h4>
          <div class="footer-contact-item">
            <span class="icon">📍</span>
            <span>181 Mercer Street, New York, NY 10012, United States</span>
          </div>
          <div class="footer-contact-item">
            <span class="icon">📞</span>
            <span>+1-888-777-5845</span>
          </div>
        </div>
      </div>

      <div class="footer-bottom">
        <div>&copy; <?php echo date('Y'); ?> Orbit Dial Crest. All Rights Reserved.</div>
        <div>Haute Horlogerie &bull; Geneva Seal Hand-Finishing &bull; E-E-A-T Verified</div>
      </div>
    </div>
  </footer>

  <script src="assets/js/main.js"></script>
</body>
</html>
