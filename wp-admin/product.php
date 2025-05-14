<?php
include("../resource/conn.php");
$conn->set_charset("utf8mb4");
$main_id = intval($_GET['id']);
if (isset($_GET['id'])) {
  include("./product_fetch.php");
} else {
  echo json_encode(['error' => 'No ID provided']);
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['product_content']) && $_POST['product_content'] === "product_content") {
    include("./product_update.php");
    $conn->close();
  } else if (isset($_POST['product_img']) && $_POST['product_img'] === "product_img") {
    include("./product_main_img.php");
  }
  else if (isset($_POST['product_sub_image_1']) && $_POST['product_sub_image_1'] === "product_sub_image_1") {
    include("./product_sub_img_1.php");
  } 
    else if (isset($_POST['product_sub_image_2']) && $_POST['product_sub_image_2'] === "product_sub_image_2") {
    include("./product_sub_img_2.php");

  }
  else if (isset($_POST['product_sub_image_3']) && $_POST['product_sub_image_3'] === "product_sub_image_3") {
    include("./product_sub_img_3.php");

  }  else {
    echo "<script>alert('Invalid request.'); </script>";
  }
}


function safe_htmlspecialchars($value)
{
  return htmlspecialchars($value !== null ? $value : '-', ENT_QUOTES, 'UTF-8');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo safe_htmlspecialchars($product['short_name']) ?> | Varioshine</title>
  <!-- tailwind -->
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <!-- styles -->
  <link rel="stylesheet" href="../assets/css/admin/style.css">
</head>

<body>

  <?php include("./nav.php") ?>


  <?php if ($product): ?>

    <div class="product_main_container">
      <div class="product_main_img">
        <form action="./product.php?id=<?= safe_htmlspecialchars($product['id']) ?>" method="post" enctype="multipart/form-data">
          <input type="hidden" name="product_img" value="product_img">
          <img src="../assets/img/products/<?= safe_htmlspecialchars($product['image']) ?>" alt="">
          <input type="file" name="product_main_img">
          <button type="submit" class="update-btn-round">
            <i class="fa-solid fa-rotate"></i>
          </button>
        </form>
      </div>
      <div class="sub_images_main flex-col flex">
        <div class="product_sub_image_1 sub_images">
        <form action="./product.php?id=<?= safe_htmlspecialchars($product['id']) ?>" method="post" enctype="multipart/form-data">
          <input type="hidden" name="product_sub_image_1" value="product_sub_image_1">
            <img src="../assets/img/product_2/<?= safe_htmlspecialchars($product['sub_image_1']) ?>" alt="">
            <input type="file" name="product_image_1">
            <button type="submit" class="update-btn-round">
              <i class="fa-solid fa-rotate"></i>
            </button>
          </form>
        </div>
        <div class="product_sub_image_2 sub_images">
          <form action="./product.php?id=<?= safe_htmlspecialchars($product['id']) ?>" method="post" enctype="multipart/form-data">
          <input type="hidden" name="product_sub_image_2" value="product_sub_image_2">
            <img src="../assets/img/product_2/<?= safe_htmlspecialchars($product['sub_image_2']) ?>" alt="">
            <input type="file" name="product_image_2">
            <button type="submit" class="update-btn-round">
              <i class="fa-solid fa-rotate"></i>
            </button>
          </form>
        </div>
        <div class="product_sub_image_2 sub_images">
      <form action="./product.php?id=<?= safe_htmlspecialchars($product['id']) ?>" method="post" enctype="multipart/form-data">
          <input type="hidden" name="product_sub_image_3" value="product_sub_image_3">
            <img src="../assets/img/product_2/<?= safe_htmlspecialchars($product['sub_image_3']) ?>" alt="">
            <input type="file" name="product_image_3">
            <button type="submit" class="update-btn-round">
              <i class="fa-solid fa-rotate"></i>
            </button>
          </form>
        </div>
      </div>
      <div class="product_content">
        <form action="./product.php?id=<?= safe_htmlspecialchars($product['id']) ?>" method="post">
          <input type="hidden" name="product_content" value="product_content">


          <textarea name="full_name" rows="10" placeholder="long_name"><?= safe_htmlspecialchars($product['full_name']) ?></textarea>

          <input type="text" name="short_name" value="<?= safe_htmlspecialchars($product['short_name']) ?>" placeholder="short_name">
          <input type="text" name="url_name" value="<?= safe_htmlspecialchars($product['url_name']) ?>" placeholder="url_name">

          <input type="text" name="offer_price" value="<?= safe_htmlspecialchars($product['offer_price']) ?>" placeholder="offer_price">

          <input type="text" name="mrp" value="<?= safe_htmlspecialchars($product['mrp']) ?>" placeholder="mrp_price">

          <input type="text" name="amazon_link" value="<?= safe_htmlspecialchars($product['amazon_link']) ?>" placeholder="amazon_link">

          <textarea name="description" rows="10" placeholder="description"><?= safe_htmlspecialchars($product['description']) ?></textarea>

          <button type="submit" class="update-btn-round">
            <i class="fa-solid fa-rotate"></i>
          </button>
        </form>

      </div>
    </div>

  <?php else: ?>
    <p>No products found.</p>

  <?php endif ?>


  <!-- js -->
  <script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>



</body>

</html>