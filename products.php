<?php
$page_title = "Products | Varioshine";
$page_description = "";
$page_url = "https://www.varioshine.in/";
$Icon_Image = "./assets/img/main/main_icon.webp";

include('./resource/conn.php');

$product_query = "SELECT id,short_name,sec_head,image,offer_price,amazon_link FROM products";
$stmt = $conn->prepare($product_query);
$stmt->execute();

$stmt->bind_result($id,$short_name,$sec_head,$image,$offer_price,$amazon_link);

$products = [];
while ($stmt->fetch()) {
  $products[] = [
    'id'=>$id,
    'short_name' => $short_name,
    'image' => $image,
    'sec_head'=>$sec_head,
    'offer_price'=>$offer_price,
    'amazon_link'=>$amazon_link
  ];
}


$stmt->close();
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
    <link rel="stylesheet" href="./assets/css/products/style.css">
</head>

<body>

<!-- navbar -->
<?php include("./resource/navbar.php"); ?>

<section class="hero_section_banner" style="background: url('./assets/img/hero_section/products.svg') no-repeat center/cover">
   <h2>
    Products
   </h2>
</section>



<section id="our_products_page">
<div class="our_products_page">
    <div class="our_products_page_head mb-10">
        <h2 class="text-center text-4xl uppercase" data-aos="zoom-in-up">
           our top  Products
        </h2>
    </div>
    <div class="products_lists_page">
    <div class="products_swiper_page" >
 <?php foreach ($products as $product): ?>
    <div class="product_swiper_page " data-aos="zoom-in">
        <div class="product_swiper_page_img">
            <img src="./assets/img/products/<?= safe_htmlspecialchars($product['image']) ?>" alt="">
        </div>
        <div class="product_swiper_page_con">
            <h2 class="product_main_head">
            <?= safe_htmlspecialchars($product['short_name']) ?>
            </h2>
            <h3 class="product_sec_head">
            <?= safe_htmlspecialchars($product['sec_head']) ?>

            </h3>
            <div class="price_product">
                <h2>
                ₹<?= safe_htmlspecialchars($product['offer_price']) ?>
                </h2>
                <a href="<?= safe_htmlspecialchars($product['amazon_link']) ?>">
                  <button>
                    Buy now
                </button>
                </a>
            </div>

        </div>
    </div>

    <?php endforeach; ?>
  </div>
    </div>
</div>
     </section>
<!-- offer banner -->
   <?php include("./resource/offer_banner.php") ?>

<!-- frequent asked questions -->

<div class="faq-section">
  <h2 class="faq-section-text">Frequently Asked Questions</h2>

  <div class="faq-item">
    <div class="faq-question">
      <span>Are Varioshine products safe for all vehicle surfaces?</span>
      <span class="faq-icon">+</span>
    </div>
    <div class="faq-answer">
      Yes, all Varioshine products are formulated to be safe on paint, metal, plastic, and glass surfaces of both cars and bikes.
    </div>
  </div>

  <div class="faq-item">
    <div class="faq-question">
      <span>Do your products contain harsh chemicals?</span>
      <span class="faq-icon">+</span>
    </div>
    <div class="faq-answer">
      No. Varioshine products are designed with eco-conscious, non-toxic ingredients that are safe for the user and the environment.
    </div>
  </div>

  <div class="faq-item">
    <div class="faq-question">
      <span>How often should I use the 3-in-1 Car Polish?</span>
      <span class="faq-icon">+</span>
    </div>
    <div class="faq-answer">
      For best results, use it every 2-3 weeks or after every car wash to maintain shine and protection.
    </div>
  </div>

  <div class="faq-item">
    <div class="faq-question">
      <span>Can I use Varioshine bike products on scooters?</span>
      <span class="faq-icon">+</span>
    </div>
    <div class="faq-answer">
      Absolutely. Our products are suitable for all two-wheelers including scooters, sports bikes, and cruisers.
    </div>
  </div>

  <div class="faq-item">
    <div class="faq-question">
      <span>Are your products waterless or do they require rinsing?</span>
      <span class="faq-icon">+</span>
    </div>
    <div class="faq-answer">
      Some products like the waterless wash can be used without water, but others like shampoos require rinsing for effective cleaning.
    </div>
  </div>
</div>


<!-- footer -->
<?php include("./resource/footer.php"); ?>

<script>
  const faqItems = document.querySelectorAll('.faq-item');
  faqItems.forEach(item => {
    const question = item.querySelector('.faq-question');
    question.addEventListener('click', () => {
      item.classList.toggle('active');
    });
  });
</script>

</body>

</html>