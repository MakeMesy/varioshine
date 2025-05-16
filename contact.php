<?php
include('./resource/conn.php');

$page_title = "Contact Us | Varioshine";
$page_description = "Varioshine offers premium car and bike care products including glass cleaner, 3-in-1 car polish, tyre polish, wash shampoo, and air fresheners. Trusted quality, made in India.";
$page_url = "https://www.varioshine.in/contact.php";
$Icon_Image = "./assets/img/main/main_icon.webp";


if($_SERVER['REQUEST_METHOD']=='POST'){
  include('./backend/contact_form.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("./resource/head.php"); ?>
    <!-- styles -->
    <link rel="stylesheet" href="./assets/css/resource/style.css">
    <link rel="stylesheet" href="./assets/css/contact/style.css">
</head>

<body>

<!-- navbar -->
<?php include("./resource/navbar.php"); ?>


<section class="hero_section_banner" style="background: url('./assets/img/hero_section/contact_banner.svg') no-repeat center/cover">
   <h2>
    Contact us
   </h2>
</section>


<div id="contact-cards">
  <div class="contact-cards">
    <div class="contact-card-1 contact-card" data-aos="fade-right">
     <div class="contact-card-title">
     <i class="fa-solid fa-envelope"></i>
     <h2>
        Email
      </h2>
     </div>
     <div class="contact-card-con">
      <a href="mailto:<?= safe_htmlspecialchars($settings['email']) ?>">
        <?= safe_htmlspecialchars($settings['email']) ?>
      </a>
     </div>
    </div>

    <div class="contact-card-2 contact-card" data-aos="fade-up">
     <div class="contact-card-title">
     <i class="fa-solid fa-phone"></i>
     <h2>
        Phone 
      </h2>
     </div>
     <div class="contact-card-con">
      <a href="">
      <?= safe_htmlspecialchars($settings['phone']) ?>
      </a>
     </div>
    </div>

    <div class="contact-card-1 contact-card" data-aos="fade-left">
     <div class="contact-card-title">
     <i class="fa-solid fa-map-location-dot"></i>
     <h2>
        Location
      </h2>
     </div>
     <div class="contact-card-con text-center">
      <a href="" >
        <?= safe_htmlspecialchars($settings['address']) ?>
      </a>
     </div>
    </div>
  </div>
</div>




<div id="contact-form-section">
    <div class="contact-form-section">
        <div class="contact-form-main">
        <form action="./contact.php" method="post" class="contact-form">
    <div class="form-group-1">
        <div>
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your full name" required>
        </div>
        <div>
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>
    </div>
    <div class="form-group">
        <label for="phone">Phone Number (WhatsApp)</label>
        <input type="tel" id="phone" name="phone" placeholder="Enter your WhatsApp number">
    </div>

    <div class="form-group">
        <label for="subject">Subject</label>
        <select id="subject" name="subject" required>
            <option value="" disabled selected>Select an option</option>
            <option value="general">General Inquiry</option>
            <option value="service">Service Inquiry</option>
            <option value="support">Support</option>
        </select>
    </div>

    <div class="form-group">
        <label for="message">Message</label>
        <textarea id="message" name="message" rows="5" placeholder="Write your message here..." required ></textarea>
    </div>
<div class="form-group-btn">
<button type="submit" class="submit-btn">Send Message</button>
</div>
</form>

        </div>
        <div class="contact-content">
            <h2>Contact Us Today</h2>
            <p>
            Have questions or need assistance? Feel free to reach out to us using the form below. We’re here to help and will get back to you as soon as possible!"
            </p>
            <img src="./assets/img/main/contact_us_img.webp" alt="">
        </div>
    </div>
</div>

<!-- footer -->
<?php include("./resource/footer.php"); ?>


</body>

</html>