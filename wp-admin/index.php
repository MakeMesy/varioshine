<?php
include("../resource/conn.php");

session_start();

if (!isset($_SESSION['username'])) {
  header("Location: ./login.php");
  exit();
}
// fetch settings
$settings = [];
$result = mysqli_query($conn, "SELECT * FROM `settings` LIMIT 1");
if ($result && mysqli_num_rows($result) > 0) {
  $settings = mysqli_fetch_assoc($result);
}
// fetch the products
$product_query = "SELECT id,short_name, image FROM products";
$stmt = $conn->prepare($product_query);
$stmt->execute();
$stmt->bind_result($id, $short_name, $image);
$products = [];
while ($stmt->fetch()) {
  $products[] = [
    'id' => $id,
    'short_name' => $short_name,
    'image' => $image,
  ];
}
// featured products
$featured_product_query = "SELECT id,name, image,price,link FROM fea_products";
$stmt = $conn->prepare($featured_product_query);
$stmt->execute();
$stmt->bind_result($id, $name, $image, $price, $link);
$featured_products = [];
while ($stmt->fetch()) {
  $featured_products[] = [
    'id' => $id,
    'name' => $name,
    'image' => $image,
    'price' => $price,
    'link' => $link
  ];
}



$stmt->close();

// safe render
function safe_htmlspecialchars($value)
{
  return htmlspecialchars($value !== null ? $value : '-', ENT_QUOTES, 'UTF-8');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['settings'])) {
    // settings update
    include("./settings.php");

    // products add
  } else if (isset($_POST['product_add']) && $_POST['product_add'] === "product_add") {
    $short_name = $_POST['product_name'] ?? '';
    $conn->set_charset("utf8mb4");
    $stmt = $conn->prepare("INSERT INTO products (short_name,url_name) VALUES (?)");
    $stmt->bind_param("s", $short_name);
    if ($stmt->execute()) {
      echo "<script>alert('Product added successfully'); window.location.href='./';</script>";
    } else {
      echo "<script>alert('Failed to add product');</script>";
    }
    $stmt->close();

    // delete products
  } else if (isset($_POST['delete_product']) && $_POST['delete_product'] === "delete_product") {
    $product_id = $_POST['product_id'] ?? '';

    $conn->set_charset("utf8mb4");
    $stmt = $conn->prepare("DELETE FROM products WHERE id = ?");
    $stmt->bind_param("i", $product_id);

    if ($stmt->execute()) {
      echo "<script>alert('Product deleted successfully'); window.location.href='./';</script>";
    } else {
      echo "<script>alert('Failed to delete product');</script>";
    }

    $stmt->close();
    
  } 
  // review delete
  else if (isset($_POST['review_remove']) && $_POST['review_remove'] === "review_remove") {
    $review_id = $_POST['review_id'] ?? '';

    $conn->set_charset("utf8mb4");
    $stmt = $conn->prepare("DELETE FROM reviews WHERE id = ?");
    $stmt->bind_param("i", $review_id);

    if ($stmt->execute()) {
      echo "<script>alert('Product deleted successfully'); window.location.href='./';</script>";
    } else {
      echo "<script>alert('Failed to delete product');</script>";
    }

    $stmt->close();
    
  } 
  // featured Product content
  else if (isset($_POST['fea_product']) && $_POST['fea_product'] === "fea_product") {
    include("./featured_product_content.php");
   
  }
  // featured product img
  else if (isset($_POST['fea_img']) && $_POST['fea_img'] === "fea_img"){
    include("./featured_product_img.php");
    
      } 
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin | Varioshine</title>
  <!-- tailwind -->
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <!-- styles -->
  <link rel="stylesheet" href="../assets/css/admin/style.css">
</head>

<body>
  <!-- navbar -->
  <?php include("./nav.php") ?>


  <!-- settings -->
  <?php include("./settings_html.php") ?>

  <!-- products -->
  <section class="products_main" id="products_main">
    <div class="text-3xl uppercase section-title mt-20 text-center flex justify-center items-center gap-5">
      <h2>
        Products
      </h2>
      <button class="add_btn">
        Add
      </button>
    </div>
    <section class="products-container">
      <?php foreach ($products as $product): ?>
        <?php include('./home_products.php') ?>
      <?php endforeach; ?>
    </section>
  </section>
  <!-- add products -->
  <div class="add_products">
    <form action="./index.php" method="post">
      <input type="hidden" name="product_add" value="product_add">
      <input type="text" name="product_name" placeholder="Product Short Name" required>
      <div>
        <button type="submit" class="update-btn">
          <i class="fa-solid fa-rotate"></i> Add
        </button>
      </div>
      <div class="close_btn">
        <i class="fa fa-times" aria-hidden="true"></i>
      </div>
    </form>
  </div>

  <!-- featured products -->
  <section id="featured_products " class="mt-20 mb-30">
    <div class="section_head_text text-4xl uppercase text-center" data-aos="fade-down">
      <h2 class="section-title uppercase">
        featured products
      </h2>
    </div>
    <div class="featured_products">
      <?php foreach ($featured_products as $featured_product): ?>
        <?php include('./featured_product_html.php') ?>
      <?php endforeach; ?>
    </div>
  </section>

<!-- feedback -->
 <?php
include('../backend/feedback.php') ;
?>
 
  <div class="feedback_main ">
    <?php foreach ($reviews as $review): ?>
                    <div class="feedback_container">
                        <div class="feedback_person_name">
                            <h2>
                                <?= htmlspecialchars($review['name']) ?>
                            </h2>
                        </div>
                        <div class="feedback_product_name">
                            <p>
                                 <?= htmlspecialchars($review['product_name']) ?>
                            </p>
                        </div>
                        <div class="feedback_content">
                            <p>
                                 <?= htmlspecialchars($review['comments']) ?>
                            </p>
                        </div>
                        <div class="rating_feedback text-center mt-2">
                            <?php $rating=$review['rating'] ; for($i=0;$i<$rating;$i++): ?>
                           
<i class="fa-solid fa-star"></i>
                                <?php endfor; ?>
                        </div>
                       <form action="./index.php" method="post" onsubmit="return confirm('are you delete the user review ');">
                         <input type="hidden" name="review_remove" value="review_remove">
                         <input type="hidden" name="review_id" value="<?= htmlspecialchars($review['id']) ?>">
                          <button class="delete_icon" type="submit">
      <i class="fa fa-trash" aria-hidden="true"></i>
    </button>
                       </form>
                    </div>

                    <?php endforeach; ?>
</div>


<!-- contacts -->
 <?php
 $contact_sql = "SELECT * FROM contacts ORDER BY submitted_at DESC";
$contact_form = $conn->query($contact_sql);?>
<h2 class="section-title mt-20 uppercase">
  Enquiries
</h2>
<div class="overflow-x-scroll px-10">
<?php if ($contact_form->num_rows > 0): ?>
    <table class="mt-10 ">
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Submitted At</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $contact_form->fetch_assoc()): ?>
                <tr>
                    <td><?= htmlspecialchars($row["id"]) ?></td>
                    <td><?= htmlspecialchars($row["full_name"]) ?></td>
                    <td><?= htmlspecialchars($row["email"]) ?></td>
                    <td><?= htmlspecialchars($row["phone"]) ?></td>
                    <td><?= htmlspecialchars($row["subject"]) ?></td>
                    <td><?= nl2br(htmlspecialchars($row["message"])) ?></td>
                    <td><?= $row["submitted_at"] ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>No messages found.</p>
<?php endif; ?>
</div>
  <!-- js -->
  <script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>


  <script>
    let add_btn = document.querySelector('.add_btn');
    let add_products = document.querySelector('.add_products');
    let close_btn = document.querySelector('.close_btn');
    add_btn.addEventListener('click', () => {
      add_products.classList.add('active')
    })
    close_btn.addEventListener('click', () => {
      add_products.classList.remove('active')

    })
  </script>
</body>

</html>