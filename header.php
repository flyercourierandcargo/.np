<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Flyer Courier And Cargo Pvt.Ltd</title>
   <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>
<body>

<!-- ── Scroll Progress ── -->
<div class="scroll-progress" id="scrollProgress"></div>

<!-- ── Top Bar ── -->
<div class="top-bar">
  <i class="fas fa-phone-alt"></i>&nbsp;
  <span>9706859450 / 9744337227</span>
  &nbsp;|&nbsp;
  <i class="fas fa-envelope"></i>&nbsp;
  <span>Krishnakhanal561@gmail.com</span>
  &nbsp;|&nbsp;
  <i class="fas fa-map-marker-alt"></i>&nbsp; Dhalanepul, Kapan, Nepal
</div>

<!-- ── Navigation ── -->
<nav class="navbar" id="navbar">
  <div class="navbar-logo">
    <div class="logo-icon">
      <img src="images/favicon1.png" alt="Flyer Courier Logo1">
    </div>
    <div class="logo-text">
      <strong>Flyer Courier</strong>
      And Cargo Pvt.Ltd
    </div>
  </div>
  <div class="nav-links">
  <a href="index.php" class="<?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">Home</a>

  <a href="about.php" class="<?php echo ($current_page == 'about.php') ? 'active' : ''; ?>">About Us</a>

  <a href="services.php" class="<?php echo ($current_page == 'services.php') ? 'active' : ''; ?>">Services</a>

  <a href="tracking.php" class="<?php echo ($current_page == 'tracking.php') ? 'active' : ''; ?>">Tracking</a>

  <a href="contact.php" class="<?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>">Contact Us</a>

  <a href="company.php" class="<?php echo ($current_page == 'company.php') ? 'active' : ''; ?>">Our Company</a>
</div>
</nav>