<?php
  include 'header.php';
?>

<!-- Page Hero -->
<div class="page-hero contact-page-hero">
  <div class="page-hero-content">
    <div class="breadcrumb"><a href="index.html">Home</a><span>/</span> Contact Us</div>
    <div class="section-tag" style="color:white;background:rgba(20, 146, 204, 0.12);border-color:rgba(31, 135, 204, 0.3);" data-anim="drop-in"><i class="fa-solid fa-envelope"></i> Get In Touch</div>
    <h1 data-anim="fade-up" data-delay="1">Contact Us</h1>
    <p data-anim="fade-up" data-delay="2">We'd love to hear from you. Reach out for quotes, queries, or support.</p>
  </div>
</div>

<!-- ─── Info Cards ─── -->
<div style="background:var(--sky);padding:60px 40px;">
  <div style="max-width:1200px;margin:0 auto;display:grid;grid-template-columns:repeat(3,1fr);gap:24px;">
    <div class="courier-service-item" data-anim="zoom-in" data-delay="1" style="flex-direction:column;text-align:center;align-items:center;">
      <div class="contact-icon" style="margin-bottom:16px;animation:none;"><i class="fa-solid fa-location-dot" style="color: white;"></i></div>
      <div class="cs-text">
        <strong>Our Office</strong>
        <p>Sathdobato, Lalitpur, Nepal<br><span style="font-size:0.82rem;color:var(--muted);">(Head Office)</span></p>
        <p style="margin-top:8px;font-size:0.85rem;">Sukedhara, Kathmandu<br><span style="font-size:0.82rem;color:var(--muted);">(Branch Office)</span></p>
      </div>
    </div>
    <div class="courier-service-item" data-anim="zoom-in" data-delay="2" style="flex-direction:column;text-align:center;align-items:center;">
      <div class="contact-icon" style="margin-bottom:16px;animation:none;"><i class="fa-solid fa-phone" style="color: black;"></i></div>
      <div class="cs-text">
        <strong>Phone Numbers</strong>
        <p>9706859450<br>9744337227</p>
        <p style="margin-top:8px;font-size:0.85rem;color:var(--muted);">Available 24/7 for urgent queries</p>
      </div>
    </div>
    <div class="courier-service-item" data-anim="zoom-in" data-delay="3" style="flex-direction:column;text-align:center;align-items:center;">
      <div class="contact-icon" style="margin-bottom:16px;animation:none;"><i class="fa-solid fa-envelope" style="color: brown;"></i></div>
      <div class="cs-text">
        <strong>Email Address</strong>
        <p>Krishnakhanal561@gmail.com</p>
        <p style="margin-top:8px;font-size:0.85rem;color:var(--muted);">We reply within 2-4 business hours</p>
      </div>
    </div>
  </div>
</div>

<!-- ─── Contact Main ─── -->
<div class="section">
  <div class="section-header">
    <div class="section-tag" data-anim="fade-up"><i class="fa-solid fa-comment"></i> Write to Us</div>
    <h2 data-anim="fade-up" data-delay="1">Send a Message</h2>
  </div>
  <div class="contact-grid">
    <!-- Form -->
    <div class="contact-form-wrap" data-anim="fade-right">
      <h3>Get a Free Quote</h3>
      <form id="contactForm">
        <div class="form-group">
          <label>Full Name *</label>
          <input type="text" placeholder="Your full name" required />
        </div>
        <div class="form-group">
          <label>Email Address *</label>
          <input type="email" placeholder="your@email.com" required />
        </div>
        <div class="form-group">
          <label>Phone Number</label>
          <input type="tel" placeholder="+977 XXXXXXXXXX" />
        </div>
        <div class="form-group">
          <label>Shipment Type</label>
          <input type="text" placeholder="e.g. Air Freight, Door to Door…" />
        </div>
        <div class="form-group">
          <label>Message *</label>
          <textarea placeholder="Describe your shipment requirements, destination, weight, and any special handling needs…" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;font-size:1rem;padding:16px;">
          <i class="fas fa-paper-plane"></i> Send Message
        </button>
        <div id="formAlert" class="alert"></div>
      </form>
    </div>

    <!-- Map & Info -->
    <div class="contact-info" data-anim="fade-left">
      <h3>Find Us on the Map</h3>
      <div style="border-radius:18px;overflow:hidden;box-shadow:0 12px 40px rgba(0,0,0,0.12);height:320px;margin-bottom:32px;">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.9!2d85.3157!3d27.6776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19a8fc28aa5b%3A0x53ccc61bb4da40a7!2sSatdobato%2C%20Lalitpur%2044700!5e0!3m2!1sen!2snp!4v1717000000000"
          width="100%" height="100%" style="border:0;" allowfullscreen loading="lazy">
        </iframe>
      </div>

      <div class="contact-item">
        <div class="contact-icon"><i class="fa-solid fa-clock" style="color: white;"></i></div>
        <div class="contact-detail">
          <strong>Business Hours</strong>
          <span>Sunday–Friday: 9:00 AM – 6:00 PM<br>Saturday: 10:00 AM – 3:00 PM</span>
        </div>
      </div>
      <div class="contact-item">
        <div class="contact-icon"><i class="fa-solid fa-share-from-square" style="color: white;"></i></div>
        <div class="contact-detail">
          <strong>Social Media</strong>
          <div class="footer-social" style="margin:8px 0 0;">
            <div class="social-btn" style="width:36px;height:36px;background:rgba(15,143,168,0.1);border-color:rgba(15,143,168,0.2);color:var(--teal);font-size:0.9rem;"><i class="fab fa-facebook-f"></i></div>
            <div class="social-btn" style="width:36px;height:36px;background:rgba(15,143,168,0.1);border-color:rgba(15,143,168,0.2);color:var(--teal);font-size:0.9rem;"><i class="fab fa-instagram"></i></div>
            <div class="social-btn" style="width:36px;height:36px;background:rgba(15,143,168,0.1);border-color:rgba(15,143,168,0.2);color:var(--teal);font-size:0.9rem;"><i class="fab fa-tiktok"></i></div>
            <div class="social-btn" style="width:36px;height:36px;background:rgba(15,143,168,0.1);border-color:rgba(15,143,168,0.2);color:var(--teal);font-size:0.9rem;"><i class="fab fa-youtube"></i></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ─── FAQ Strip ─── -->
<div style="background:linear-gradient(135deg,var(--teal-deep),var(--teal-dark));padding:80px 40px;">
  <div style="max-width:1000px;margin:0 auto;text-align:center;">
    <div class="section-tag" style="color:white;background:rgba(23, 156, 197, 0.12);border-color:rgba(28, 153, 211, 0.3);margin-bottom:16px;" data-anim="fade-up"><i class="fa-solid fa-question"></i> FAQ</div>
    <h2 style="color:white;margin-bottom:48px;" data-anim="fade-up" data-delay="1">Common Questions</h2>
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;text-align:left;">
      <div class="offer-card" data-anim="fade-up" data-delay="1">
        <div class="offer-destination" style="font-size:1rem;margin-bottom:8px;">How do I get a tracking number?</div>
        <div class="offer-desc">Your tracking number is provided after booking a shipment with us. Check your confirmation email or contact our office.</div>
      </div>
      <div class="offer-card" data-anim="fade-up" data-delay="2">
        <div class="offer-destination" style="font-size:1rem;margin-bottom:8px;">How long does delivery take?</div>
        <div class="offer-desc">Air: 3–7 days. Ocean: 20–45 days. Road (domestic): 1–3 days. Times vary by destination and service type.</div>
      </div>
      <div class="offer-card" data-anim="fade-up" data-delay="3">
        <div class="offer-destination" style="font-size:1rem;margin-bottom:8px;">Do you offer free pickup?</div>
        <div class="offer-desc">Yes! Free pickup is included for shipments of 10+ kg to Japan/Korea, 15+ kg to UK, and 20+ kg to Europe, USA, Canada.</div>
      </div>
      <div class="offer-card" data-anim="fade-up" data-delay="4">
        <div class="offer-destination" style="font-size:1rem;margin-bottom:8px;">What items can I ship?</div>
        <div class="offer-desc">Documents, parcels, food (temperature-controlled), medicine, electronics, and commercial goods. Contact us for restricted items guidance.</div>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<?php
  include 'footer.php';
?>
