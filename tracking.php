<?php
  include 'header.php';
?>

<!-- Page Hero -->
<div class="page-hero">
  <div class="page-hero-content">
    <div class="breadcrumb"><a href="index.html">Home</a><span>/</span> Tracking</div>
    <div class="section-tag" style="color:white;background:rgba(16, 148, 224, 0.12);border-color:rgba(33, 152, 231, 0.3);" data-anim="drop-in"><i class="fa-solid fa-location"></i> Real-Time</div>
    <h1 data-anim="fade-up" data-delay="1">Track Your Shipment</h1>
    <p data-anim="fade-up" data-delay="2">Enter your tracking number to see live updates on your parcel's journey.</p>
  </div>
</div>

<!-- ─── Tracking Hero ─── -->
<div style="background:linear-gradient(135deg,var(--sky) 0%,white 100%);">
  <div class="tracking-hero-inner">
    <!-- Form -->
    <div class="tracking-form-card" data-anim="fade-right">
      <div class="section-tag"><i class="fa-solid fa-search"></i> Find Your Package</div>
      <h2>Track Shipment</h2>
      <p>Enter your waybill or tracking number below to get real-time shipment status.</p>
      <form id="trackForm">
        <div class="form-group">
          <label>Japan/Korea Tracking</label>
          <div class="track-input-group">
            <!-- <input type="text" id="trackInput" placeholder="e.g. FC-20260601-XYZ001" required /> -->
            <!-- <button type="submit" class="btn btn-primary" style="padding:16px 24px;white-space:nowrap"> -->
            <a href="https://parcelsapp.com/en/tracking" target="_blank" class="btn btn-primary" style="padding:16px 24px; white-space:nowrap; display:inline-block;"><i class="fas fa-search" ></i>Track</a>
           
          </div>
        </div>
        <div id="trackResult" class="alert"></div>
      </form>
      <form id="trackForm">
        <div class="form-group">
          <label>Uk Tracking</label>
          <div class="track-input-group">
             <a href="https://track.dpd.co.uk/" target="_blank" class="btn btn-primary" style="padding:16px 24px; white-space:nowrap; display:inline-block;"><i class="fas fa-search" ></i>Track</a>
          </div>
        </div>
        <div id="trackResult" class="alert"></div>
      </form>
      <form id="trackForm">
        <div class="form-group">
          <label>Europe Tracking</label>
          <div class="track-input-group">
             <a href="https://www.aftership.com/track" target="_blank" class="btn btn-primary" style="padding:16px 24px; white-space:nowrap; display:inline-block;"><i class="fas fa-search" ></i>Track</a>
          </div>
        </div>
        <div id="trackResult" class="alert"></div>
      </form>
      <form id="trackForm">
        <div class="form-group">
          <label>Usa & Canada Tracking</label>
          <div class="track-input-group">
             <a href="https://www.fedex.com/fedextrack/" target="_blank" class="btn btn-primary" style="padding:16px 24px; white-space:nowrap; display:inline-block;"><i class="fas fa-search" ></i>Track</a>
          </div>
        </div>
        <div id="trackResult" class="alert"></div>
      </form>
      <form id="trackForm">
        <div class="form-group">
          <label>Australia Tracking</label>
          <div class="track-input-group">
             <a href="https://www.couriersplease.com.au/" target="_blank" class="btn btn-primary" style="padding:16px 24px; white-space:nowrap; display:inline-block;"><i class="fas fa-search" ></i>Track</a>
          </div>
        </div>
        <div id="trackResult" class="alert"></div>
      </form>


      <div style="margin-top:32px;padding:20px;background:var(--sky);border-radius:14px;">
        <p style="font-size:0.88rem;color:var(--teal-deep);font-weight:600;margin-bottom:8px;"><i class="fa-solid fa-lightbulb" style="color: #dfdb11;"></i> Sample Tracking Numbers</p>
        <p style="font-size:0.82rem;color:var(--muted);">FC-2026-UK-001 &nbsp;|&nbsp; FC-2026-USA-042 &nbsp;|&nbsp; FC-2026-JP-018</p>
      </div>
    </div>

    <!-- Illustration -->
    <div class="tracking-illustration" data-anim="fade-left">
      <div class="tracking-3d-globe"><i class="fa-solid fa-globe" style="color: var(--teal-deep); font-size: 6rem;"></i></div>
      <h3 style="color:var(--teal-dark);margin-top:24px;margin-bottom:8px;">Worldwide Coverage</h3>
      <p style="max-width:340px;margin:0 auto;font-size:0.95rem;">Track your shipments as they move across 200+ countries in real time.</p>
    </div>
  </div>
</div>

<!-- ─── How Tracking Works ─── -->
<div class="section">
  <div class="section-header">
    <div class="section-tag" data-anim="fade-up"><i class="fa-solid fa-list"></i> Process</div>
    <h2 data-anim="fade-up" data-delay="1">How Our Tracking Works</h2>
    <p data-anim="fade-up" data-delay="2">Simple, transparent, and always up-to-date.</p>
  </div>
  <div style="max-width:640px;margin:0 auto;" class="track-steps">
    <div class="track-step" data-anim="fade-right" data-delay="1">
      <div class="track-step-num">1</div>
      <div class="track-step-info">
        <strong>Book Your Shipment</strong>
        <span>Contact us or book online. We assign a unique tracking number to your parcel.</span>
      </div>
    </div>
    <div class="track-step" data-anim="fade-right" data-delay="2">
      <div class="track-step-num">2</div>
      <div class="track-step-info">
        <strong>Pickup &amp; Processing</strong>
        <span>Our team collects the package and processes it through our logistics hub.</span>
      </div>
    </div>
    <div class="track-step" data-anim="fade-right" data-delay="3">
      <div class="track-step-num">3</div>
      <div class="track-step-info">
        <strong>In Transit</strong>
        <span>Your package travels via our partner carriers — air, sea, road, or rail.</span>
      </div>
    </div>
    <div class="track-step" data-anim="fade-right" data-delay="4">
      <div class="track-step-num">4</div>
      <div class="track-step-info">
        <strong>Customs Clearance</strong>
        <span>We handle all documentation and customs procedures on your behalf.</span>
      </div>
    </div>
    <div class="track-step" data-anim="fade-right" data-delay="5">
      <div class="track-step-num">5</div>
      <div class="track-step-info">
        <strong>Delivered <i class="fa-solid fa-check"></i></strong>
        <span>Package successfully delivered to the recipient's doorstep.</span>
      </div>
    </div>
  </div>
</div>

<!-- ─── Help CTA ─── -->
<div style="background:var(--teal-deep);padding:80px 40px;text-align:center;">
  <div data-anim="zoom-in">
    <span style="font-size:3rem;display:block;margin-bottom:16px;"><i class="fa-solid fa-phone" style="color: red;"></i></span>
    <h2 style="color:white;margin-bottom:16px;">Need Tracking Help?</h2>
    <p style="color:rgba(255,255,255,0.7);max-width:480px;margin:0 auto 32px;">Our support team is available 24/7 to assist you with any tracking queries or shipment concerns.</p>
    <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
      <a href="tel:9706859450" class="btn btn-gold"><i class="fas fa-phone"></i> Call Us Now</a>
      <a href="contact.html" class="btn btn-outline" style="color:white;border-color:rgba(255,255,255,0.4)"><i class="fas fa-envelope"></i> Send Message</a>
    </div>
  </div>
</div>

<!-- Footer -->
<?php
  include 'footer.php';
?>
