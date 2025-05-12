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
        <p class="mt-5 text-justify">
          Keep your glass surfaces crystal clear with Varioshine Glass Cleaner Spray – your go-to solution for streak-free, fast-drying shine. Formulated to tackle tough grease, fingerprints, and smudges, this powerful yet gentle cleaner works wonders on windows, mirrors, windshields, tabletops, screens, and more. It dries quickly without leaving water spots or residue and even helps repel dust to keep your surfaces cleaner for longer. Perfect for homes, offices, and cars, Varioshine’s ammonia-free and chlorine-free formula is safe for indoor use and the environment. Say goodbye to hazy glass and hello to a sparkling, spotless finish every time.
        </p>
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