<?php
include("../resource/conn.php");

$settings = [];
$result = mysqli_query($conn, "SELECT * FROM `settings` LIMIT 1");
if ($result && mysqli_num_rows($result) > 0) {
    $settings = mysqli_fetch_assoc($result);
}

 $product_query = "SELECT id,short_name, image FROM products";
$stmt = $conn->prepare($product_query);
$stmt->execute();

$stmt->bind_result($id,$short_name, $image);

$products = [];
while ($stmt->fetch()) {
  $products[] = [
    'id'=>$id,
    'short_name' => $short_name,
    'image' => $image,
  ];
}


$stmt->close();


function safe_htmlspecialchars($value)
{
    return htmlspecialchars($value !== null ? $value : '-', ENT_QUOTES, 'UTF-8');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['settings'])) {
       include("./settings.php");
    }
    else if(isset($_POST['product_add'])&&$_POST['product_add']==="product_add"){
             $short_name = $_POST['product_name'] ?? '';

$conn->set_charset("utf8mb4");
$stmt = $conn->prepare("INSERT INTO products (short_name) VALUES (?)");
$stmt->bind_param("s", $short_name);

if ($stmt->execute()) {
    echo "<script>alert('Product added successfully'); window.location.href='./';</script>";
} else {
    echo "<script>alert('Failed to add product');</script>";
}
$stmt->close();        
    }
      else if(isset($_POST['delete_product'])&&$_POST['delete_product']==="delete_product"){
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
    };

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
 <a href="./product.php?id=<?= safe_htmlspecialchars($product['id']) ?>">
   <div class="product-card" >
          <img src="../assets/img/products/<?= safe_htmlspecialchars($product['image']) ?>" alt="">

    <h3><?= safe_htmlspecialchars($product['short_name']) ?></h3>
   <form action="./index.php" method="post" onsubmit="return confirm('Are you sure you want to delete this product?')">
    <input type="hidden" name="delete_product" value="delete_product">
<input type="hidden" name='product_id' value="<?= safe_htmlspecialchars($product['id']) ?>">
     <button class="delete_icon" >
      <i class="fa fa-trash" aria-hidden="true"></i>
    </button>
   </form>
  </div>
 </a>
<?php endforeach; ?>


</section>
</section>

<div class="add_products">
  <form action="./index.php" method="post">
    <input type="hidden" name="product_add" value="product_add">
  <input type="text" name="product_name" placeholder="Product Short Name" required>
      <div>
                <button type="submit" class="update-btn">
                    <i class="fa-solid fa-rotate"></i> Update
                </button>
            </div>
            <div class="close_btn">

                <i class="fa fa-times" aria-hidden="true"></i>

            </div>
</form>
</div>


  <!-- js -->
  <script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>

  
<script>
  let add_btn=document.querySelector('.add_btn');
  let add_products=document.querySelector('.add_products');
  let close_btn=document.querySelector('.close_btn');
  add_btn.addEventListener('click',()=>{
     add_products.classList.add('active')
  })
  close_btn.addEventListener('click',()=>{
     add_products.classList.remove('active')

  })
</script>
</body>
</html>
