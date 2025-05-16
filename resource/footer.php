<footer data-aos="fade-down">
    <div class="main_footer flex px-5  justify-around items-center p-5">
        <div class="footer_1 flex-col gap-5 flex footer_items">
            <div class="footer_item" >
                <div class="footer_item_icon">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="footer_item_con">
                    <a href="mailto:<?= safe_htmlspecialchars($settings['email']) ?>"><?= safe_htmlspecialchars($settings['email']) ?></a>
                </div>
            </div>
            <div class="footer_item" >
                <div class="footer_item_icon">
                <i class="fa-solid fa-phone"></i>
                </div>
                <div class="footer_item_con">
                    <a href=""><?= safe_htmlspecialchars($settings['phone']) ?></a>
                </div>
            </div>
            <div class="footer_item">
                <div class="footer_item_icon">
                <i class="fa-solid fa-location-dot"></i>
                </div>
                <div class="footer_item_con">
                <?= safe_htmlspecialchars($settings['address']) ?>
                </div>
            </div>
        </div>
        <div class="footer_2 footer_items flex  flex-col justify-center items-center gap-4">
            <div class="footer_img"  >
                <img src="./assets/img/main/varioshine_long.webp" alt="">
            </div>
            <div class="footer_content text-justify" >
                <p>
                Varioshine offers high-quality vehicle and surface care products designed for superior shine, protection, and long-lasting performance you can trust.
                </p>
            </div>
            <div class="footer_social_media flex justify-center gap-5 text-2xl">
               <a href="<?= safe_htmlspecialchars($settings['instagram']) ?>" >
               <div class="social_icon">
                <i class="fa-brands fa-instagram"></i>
                </div>
               </a>
              
               <a href="<?= safe_htmlspecialchars($settings['facebook']) ?>">
               <div class="social_icon">
                <i class="fa-brands fa-facebook"></i>
                </div>
               </a>
            </div>
        </div>
        <div class="footer_3 footer_items">
            <div class="footer_head_text">
                <h2 class="text-2xl pb-2 text-center">
                    Pages
                </h2>
                </div>
                <div class="flex gap-4 text-xl">
                <ul>
                <li>
                    <a href="./">
                        Home
                    </a>
                </li>
                <li>
                    <a href="./about.php">
                        About
                    </a>
                </li>
                <li><a href="./products.php">
                    Products
                </a></li>
                </ul>
          
                <ul>
                <li><a href="./#offer_banner">
                    Offers
                </a></li>
                <li><a href="./contact.php">
                    Contact
                </a></li>
                <li><a href="./products.php">
                    Buy Now
                </a></li>
                </ul>
                </div>
        </div>
    </div>
    <div class="copy_right">
    <p >
    &copy; 2025 <a href="./">Varioshine.</a> All rights reserved. | Designed & Developed by 
    <a href="https://makemesy.com" target="_blank" >
      Makemesy
    </a>
  </p>
    </div>
</footer>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
    AOS.init({
         duration: 600,
         once:false,
         mirrar:true,
        easing: 'ease-in-out',
    });
  </script>