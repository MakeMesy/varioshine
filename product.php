<?php
$page_title = "VarioShine";
$page_description = "";
$page_url = "https://www.varioshine.in/";
$Icon_Image = "./assets/img/main/main_icon.webp";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("./resource/head.php"); ?>
    <!-- css -->
    <link rel="stylesheet" href="./assets/css/resource/style.css">
    <link rel="stylesheet" href="./assets/css/product/style.css">
</head>

<body>

<!-- navbar -->
<?php include("./resource/navbar.php"); ?>

<div class="main_product_section">
    <div class="product_images">
    <div>
    <img src="./assets/img/products/Air Freshener.webp" class="product_main_img" alt="">
    </div>
    <div>
    <img src="./assets/img/products/Air Freshener.webp" class="product_main_img" alt="">
    </div>
    </div>
    <div class="product_img">
        <img src="./assets/img/products/Air Freshener.webp" class="product_main_img" alt="">
    </div>
    <div class="product_content">
        <div class="product_heading">
            <h2>
            Varioshine Glass Cleaner Spray - Streak-Free & Fast-Drying Formula for Windows, Mirrors, Windshields & Screens – Removes Grease, Smudges & Dirt – Home, Office & Car Use
            </h2>
        </div>
        <div class="product_price">
            <h2>
            ₹250
            </h2>
            <h2 class="mrp_rate">
            M.R.P : <span>₹399</span>
            </h2>
        </div>
        <div class="buy_btn">
            <button>
                <span>
                Buy Now
                </span>
            </button>
        </div>
        <div class="about_item">
          
        <h2 class="text-2xl uppercase ">
          About Item
        </h2>
        <ul class="mt-5">
    <li>
      <strong>Crystal-Clear Shine, No Streaks:</strong>
      <p>
      Advanced formula removes dirt, grease, smudges, and fingerprints without leaving streaks or residue.
      </p>
    </li>
    <li>
      <strong>Quick-Drying & Smudge-Free:</strong>
      <p>
      Leaves surfaces spotless in seconds – no more waiting or wiping down excess moisture.

      </p>
    </li>
    <li>
      <strong>Multi-Surface Compatibility:</strong>
      <p>
      Cleans windows, mirrors, windshields, screens, glass tabletops, cabinets, and more.

      </p>
    </li>
    <li>
      <strong>Safe & Eco-Friendly:</strong>
      <p>
      Free from harsh chemicals like ammonia and chlorine – safe for indoor use and the planet.
      </p>
    </li>
    <li>
      <strong>Long-Lasting Clean:</strong>
      <p>
      Helps prevent dust buildup, keeping surfaces sparkling for longer with minimal effort.

      </p>
    </li>
  </ul>
        </div>
    </div>
</div>

<?php include("./resource/products.php"); ?>

<!-- footer -->
<?php include("./resource/footer.php"); ?>


    <!-- swiper js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>


</body>

</html>