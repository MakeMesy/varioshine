<?php
include("./resource/conn.php");
$conn->set_charset("utf8mb4");
$url_name = $_GET['name'];
if (isset($_GET['name'])) {
$product_query = "SELECT id, full_name, url_name, short_name, image, sub_image_1, sub_image_2, sub_image_3, description, about_item, offer_price, mrp, amazon_link FROM products WHERE url_name = ?";
  $stmt = $conn->prepare($product_query);
  $stmt->bind_param("s", $url_name);
  $stmt->execute();
  $stmt->bind_result($id, $full_name, $url_name, $short_name, $image, $sub_image_1, $sub_image_2, $sub_image_3, $description, $about_item, $offer_price, $mrp, $amazon_link);

  if ($stmt->fetch()) {
    $product = [
      'id' => $id,
      'full_name' => $full_name,
      'url_name' => $url_name,
      'short_name' => $short_name,
      'image' => $image,
      'sub_image_1' => $sub_image_1,
      'sub_image_2' => $sub_image_2,
      'sub_image_3' => $sub_image_3,
      'description' => $description,
      'about_item' => $about_item,
      'offer_price' => $offer_price,
      'mrp' => $mrp,
      'amazon_link' => $amazon_link
    ];
  } else {
    echo "<script>alert('Product not found');window.location.href='./';</script>";
  }
  $stmt->close();
 
} else {
    echo "<script>alert('No url Provided');window.location.href='./';</script>";

}


$page_title = "VarioShine";
$page_description = "";
$page_url = "https://www.varioshine.in/";
$Icon_Image = "./assets/img/main/main_icon.webp";


function safe_htmlspecialchars($value)
{
    return htmlspecialchars($value !== null ? $value : '-', ENT_QUOTES, 'UTF-8');
}
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
    <img src="./assets/img/product_2/<?= safe_htmlspecialchars($product['sub_image_1']) ?>" class="product_main_img" alt="">
    </div>
    <div>
    <img src="./assets/img/product_2/<?= safe_htmlspecialchars($product['sub_image_2']) ?>" class="product_main_img" alt="">
    </div>
     <div>
    <img src="./assets/img/product_2/<?= safe_htmlspecialchars($product['sub_image_3']) ?>" class="product_main_img" alt="">
    </div>
    </div>
    <div class="product_img">
        <img src="./assets/img/products/<?= safe_htmlspecialchars($product['image']) ?>" class="product_main_img" alt="">
    </div>
    <div class="product_content">
        <div class="product_heading">
            <h2>
<?= safe_htmlspecialchars($product['full_name']) ?>            
</h2>
        </div>
        <div class="product_price">
            <h2>
            ₹<?= safe_htmlspecialchars($product['offer_price']) ?>        
            </h2>
            <h2 class="mrp_rate">
            M.R.P : <span>₹<?= safe_htmlspecialchars($product['mrp']) ?></span>
            </h2>
        </div>
        <div class="buy_btn">
            <a href="<?= safe_htmlspecialchars($product['amazon_link']) ?>">
              <button>
                <span>
                Buy Now
                </span>
            </button>
            </a>
        </div>
        <div class="about_item">
          
        <h2 class="text-2xl uppercase ">
          About Item
        </h2>
        <p class="mt-5 text-justify">
          <?= safe_htmlspecialchars($product['description']) ?>
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