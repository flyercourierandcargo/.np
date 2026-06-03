<?php
  include 'header.php';
?>

<!-- ═══════════════════════════════════════════════════════ -->
<!-- HERO SECTION -->
<!-- ═══════════════════════════════════════════════════════ -->
<section class="hero" id="home">
  <div class="hero-bg"></div>
  <div class="hero-grid"></div>
  <canvas id="particles-canvas"></canvas>

  <div class="hero-content">
    <!-- Left -->
    <div class="hero-text">
      <div class="section-tag" data-anim="drop-in"><i class="fa-solid fa-earth-americas"></i> Worldwide Delivery</div>
      <h1 data-anim="fade-up" data-delay="1">
        Ship Smarter,<br><span>Deliver Faster</span>
      </h1>
      <p data-anim="fade-up" data-delay="2">
        Fast, reliable, and affordable international courier solutions. We ensure your parcels, documents, and consignments reach their destination safely and on time — across 200+ countries.
      </p>
      <div class="hero-actions" data-anim="fade-up" data-delay="3">
        <a href="services.php" class="btn btn-primary"><i class="fas fa-rocket"></i> Our Services</a>
        <a href="tracking.php" class="btn btn-outline" style="color:white;border-color:rgba(255,255,255,0.5)"><i class="fas fa-search-location"></i> Track Parcel</a>
      </div>
      <div class="hero-stats" data-anim="fade-up" data-delay="4">
        <div class="hero-stat">
          <div class="hero-stat-num"><span data-count="200" data-suffix="+">0+</span></div>
          <div class="hero-stat-label">Countries</div>
        </div>
        <div class="hero-stat">
          <div class="hero-stat-num"><span data-count="5000" data-suffix="+">0+</span></div>
          <div class="hero-stat-label">Parcels Delivered</div>
        </div>
        <div class="hero-stat">
          <div class="hero-stat-num"><span data-count="99" data-suffix="%">0%</span></div>
          <div class="hero-stat-label">On-Time Rate</div>
        </div>
      </div>
    </div>

    <!-- Right 3D Cards -->
    <div class="hero-visual" data-anim="fade-left" data-delay="2">
      <div class="hero-badge"><i class="fa-solid fa-plane"></i> Live Tracking Enabled</div>
      <div class="hero-cards">
        <div class="hero-card">
          <img src="images/plane2.jpg" alt="Air freight" />
        </div>
        <div class="hero-card">
          <img src="images/plane3.jpg" alt="Cargo ship" />
        </div>
        <div class="hero-card">
          <img src="images/train.jpg" alt="Road freight" />
        </div>
      </div>
    </div>
  </div>

  <!-- Track Quick Box -->
  <!-- <div class="hero-track-box">
    <i class="fas fa-search-location" style="color:var(--teal-light);font-size:1.4rem;flex-shrink:0"></i>
    <input type="text" placeholder="Enter tracking number (e.g. FC-20260601-XYZ)…" />
    <a href="tracking.html" class="btn btn-gold" style="padding:12px 20px;font-size:0.88rem;white-space:nowrap">Track Now</a>
  </div> -->
</section>

<!-- ═══════════════════════════════════════════════════════ -->
<!-- WELCOME SECTION -->
<!-- ═══════════════════════════════════════════════════════ -->
<div class="section">
  <div class="welcome-grid">
    <div class="welcome-text">
      <div class="section-tag" data-anim="fade-up"><i class="fa-jelly-fill fa-regular fa-star"></i> About Us</div>
      <h2 data-anim="fade-up" data-delay="1">Welcome To Our<br>Courier Service</h2>
      <p data-anim="fade-up" data-delay="2">
        We specialize in providing fast, reliable, and affordable international courier solutions tailored to meet the needs of individuals, businesses, and e-commerce enterprises. With years of expertise in logistics and global shipping, we ensure that your parcels, documents, and consignments reach their destination safely and on time.
      </p>
      <h3 style="color:var(--teal-dark);margin-bottom:8px;" data-anim="fade-up" data-delay="3">Industries We Serve</h3>
      <ul class="industries-list" data-anim="fade-up" data-delay="4">
        <li><span class="arrow">→</span> Individuals sending gifts, parcels, or documents abroad</li>
        <li><span class="arrow">→</span> Exporters &amp; importers requiring reliable cargo handling</li>
        <li><span class="arrow">→</span> E-commerce sellers managing international orders</li>
        <li><span class="arrow">→</span> Students and professionals relocating overseas</li>
      </ul>
      <a href="about.php" class="btn btn-primary" data-anim="fade-up" data-delay="5"><i class="fas fa-arrow-right"></i> Explore More</a>
    </div>

    <div class="welcome-images">
      <div class="welcome-img-wrap" data-anim="flip-card" data-delay="1">
        <img src="images/plane.jpg" alt="Ship" />
      </div>
      <div class="welcome-img-wrap" data-anim="flip-card" data-delay="2">
        <img src="images/road.png" alt="Train freight" />
      </div>
      <div class="welcome-img-wrap" data-anim="flip-card" data-delay="3">
        <img src="images/ship.jpg" alt="Road freight" />
      </div>
      <div class="welcome-img-wrap" data-anim="flip-card" data-delay="4">
        <img src="images/warehouse.jpg" alt="Delivery" />
      </div>
    </div>
  </div>
</div>

<!-- ═══════════════════════════════════════════════════════ -->
<!-- OFFERS SECTION -->
<!-- ═══════════════════════════════════════════════════════ -->
<div class="section-full offers-full">
  <div class="offers-content">
    <!-- <div class="section-tag" style="color:var(--teal-light);margin-bottom:16px;" data-anim="fade-up">🌐 Destinations</div> -->
    <h2 data-anim="fade-up" data-delay="1">Our Offers</h2>
    <div class="offers-grid">
      <div class="offer-card" data-anim="slide-3d" data-delay="1">
        <span class="offer-emoji"><img src="images/japan1.jpg" alt="japan" /></span>
        <div class="offer-destination">Japan, Korea</div>
        <div class="offer-desc">20+ kg — RS 700/kg<br>Free Packing &amp; Pickup included with every shipment.</div>
      </div>
      <div class="offer-card" data-anim="slide-3d" data-delay="2">
        <span class="offer-emoji"><img src="images/uk.png" alt="UK" /></span>
        <div class="offer-destination">UK</div>
        <div class="offer-desc">20+ kg — RS 700/kg<br>Free Packing and Pickup included.</div>
      </div>
      <div class="offer-card" data-anim="slide-3d" data-delay="3">
        <span class="offer-emoji"><img src="images/europe.jpg" alt="Europe" /></span>
        <div class="offer-destination">Europe</div>
        <div class="offer-desc">20+ kg — RS 1100/kg<br>Free Packing and Pickup included.</div>
      </div>
      <div class="offer-card" data-anim="slide-3d" data-delay="4">
        <span class="offer-emoji"><img src="images/usa-canada.png" alt="USA-CANADA" /></span>
        <div class="offer-destination">USA, Canada</div>
        <div class="offer-desc">20+ kg — RS 1150/kg<br>Free Packing and Pickup included.</div>
      </div>
      <div class="offer-card" data-anim="slide-3d" data-delay="4">
        <span class="offer-emoji"><img src="images/australia.png" alt="Australia" /></span>
        <div class="offer-destination">Australia</div>
        <div class="offer-desc">20+ kg — RS 900/kg<br>Free Packing and Pickup included.</div>
      </div>
    </div>
  </div>
</div>

<!-- ═══════════════════════════════════════════════════════ -->
<!-- SERVICES PREVIEW -->
<!-- ═══════════════════════════════════════════════════════ -->
<div class="section">
  <div class="section-header">
    <div class="section-tag" data-anim="fade-up"><i class="fa-solid fa-rocket"></i> What We Offer</div>
    <h2 data-anim="fade-up" data-delay="1">Our Services</h2>
    <p data-anim="fade-up" data-delay="2">From air freight to warehouse solutions — comprehensive logistics under one roof.</p>
  </div>
  <div class="services-grid">
    <div class="service-card" data-anim="fade-up" data-delay="1">
      <img class="service-img" src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=600&q=80" alt="Air Freight" />
      <div class="service-body">
        <h3><span>Air</span> Freight</h3>
        <p>Flyer Courier is the fastest way to deliver your consignments. We assure delivery within 24 hours in metro and 48 hours in non-metro locations.</p>
        <a href="services.php" style="display:inline-flex;align-items:center;gap:6px;color:var(--teal);font-weight:600;margin-top:16px;font-size:0.9rem;">Learn More <i class="fas fa-arrow-right"></i></a>
      </div>
    </div>
    <!-- <div class="service-card" data-anim="fade-up" data-delay="2">
      <img class="service-img" src="" alt="Train Freight" />
      <div class="service-body">
        <h3><span>Ocean</span> Freight</h3>
        <p>We provide reliable and timely ocean freight services for your international shipments across major global ports.</p>
        <a href="services.html" style="display:inline-flex;align-items:center;gap:6px;color:var(--teal);font-weight:600;margin-top:16px;font-size:0.9rem;">Learn More <i class="fas fa-arrow-right"></i></a>
      </div>
    </div> -->
    <div class="service-card" data-anim="fade-up" data-delay="3">
      <img class="service-img" src="images/road.png" alt="Road Freight" />
      <div class="service-body">
        <h3><span>Road</span> Freight</h3>
        <p>We offer fast, secure and affordable road transport for domestic consignments with real-time coordination.</p>
        <a href="services.php" style="display:inline-flex;align-items:center;gap:6px;color:var(--teal);font-weight:600;margin-top:16px;font-size:0.9rem;">Learn More <i class="fas fa-arrow-right"></i></a>
      </div>
    </div>
    <div class="service-card" data-anim="fade-up" data-delay="4">
      <img class="service-img" src="images/train.jpg" alt="Train Freight" />
      <div class="service-body">
        <h3><span>Train</span> Freight</h3>
        <p>Cost-effective and environmentally friendly rail transport for bulk and heavy cargo across major networks.</p>
        <a href="services.php" style="display:inline-flex;align-items:center;gap:6px;color:var(--teal);font-weight:600;margin-top:16px;font-size:0.9rem;">Learn More <i class="fas fa-arrow-right"></i></a>
      </div>
    </div>
    <div class="service-card" data-anim="fade-up" data-delay="5">
      <img class="service-img" src="images/door-to-door.png" alt="Door To Door" />
      <div class="service-body">
        <h3><span>Door To</span> Door Service</h3>
        <p>Complete end-to-end delivery from your doorstep to the recipient's address anywhere in the world.</p>
        <a href="services.php" style="display:inline-flex;align-items:center;gap:6px;color:var(--teal);font-weight:600;margin-top:16px;font-size:0.9rem;">Learn More <i class="fas fa-arrow-right"></i></a>
      </div>
    </div>
    <div class="service-card" data-anim="fade-up" data-delay="6">
      <img class="service-img" src="images/warehouse.jpg" alt="Warehouse" />
      <div class="service-body">
        <h3><span>Warehouse</span> Solutions</h3>
        <p>Secure storage, inventory management, and seamless distribution — your supply chain partner.</p>
        <a href="services.php" style="display:inline-flex;align-items:center;gap:6px;color:var(--teal);font-weight:600;margin-top:16px;font-size:0.9rem;">Learn More <i class="fas fa-arrow-right"></i></a>
      </div>
    </div>
  </div>
</div>

<!-- ═══════════════════════════════════════════════════════ -->
<!-- CONTACT SNIPPET -->
<!-- ═══════════════════════════════════════════════════════ -->
<div class="section">
  <div class="section-header">
    <div class="section-tag" data-anim="fade-up"><i class="fa-solid fa-envelope"></i> Get In Touch</div>
    <h2 data-anim="fade-up" data-delay="1">Contact Us</h2>
  </div>
  <div class="contact-grid">
    <div class="contact-form-wrap" data-anim="fade-right">
      <h3>Send us a Message</h3>
      <form id="contactForm">
        <div class="form-group">
          <label>Full Name</label>
          <input type="text" placeholder="Your full name" required />
        </div>
        <div class="form-group">
          <label>Email Address</label>
          <input type="email" placeholder="your@email.com" required />
        </div>
        <div class="form-group">
          <label>Phone Number</label>
          <input type="tel" placeholder="+977 XXXXXXXXXX" />
        </div>
        <div class="form-group">
          <label>Message</label>
          <textarea placeholder="Tell us about your shipment requirements…" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;">
          <i class="fas fa-paper-plane"></i> Send Message
        </button>
        <div id="formAlert" class="alert"></div>
      </form>
    </div>
    <div class="contact-info" data-anim="fade-left">
      <h3>Reach Us Directly</h3>
      <div class="contact-item">
        <div class="contact-icon"><i class="fa-solid fa-location-dot" style="color: crimson;"></i></div>
        <div class="contact-detail">
          <strong>Address</strong>
          <span>Dhalanepul, kapan Nepal</span>
        </div>
      </div>
      <div class="contact-item">
        <div class="contact-icon"><i class="fa-solid fa-phone" style="color: white;"></i></div>
        <div class="contact-detail">
          <strong>Phone</strong>
          <span>9706859450 / 9744337227</span>
        </div>
      </div>
      <div class="contact-item">
        <div class="contact-icon"><i class="fa-etch fa-solid fa-envelope" style="color: yellow;"></i></div>
        <div class="contact-detail">
          <strong>Email</strong>
          <span>Krishnakhanal561@gmail.com</span>
        </div>
      </div>
      <div class="map-embed">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.628384707253!2d85.34597674280711!3d27.728757914914674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1960ae822989%3A0x41293c491a1116!2sDhalane%20bridge!5e0!3m2!1sen!2snp!4v1780487411143!5m2!1sen!2snp" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</div>

<!-- ═══════════════════════════════════════════════════════ -->
<!-- FOOTER -->
<!-- ═══════════════════════════════════════════════════════ -->
<?php
  include 'footer.php';
?>
