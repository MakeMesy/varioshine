<?php
$page_title = "VarioShine";
$page_description = "";
$page_url = "https://www.varioshine.in/";
$Icon_Image = "./assets/img/main/main_icon.webp";

include("./resource/conn.php"); 

function safe_htmlspecialchars($value)
{
    return htmlspecialchars($value !== null ? $value : '-', ENT_QUOTES, 'UTF-8');
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    $product_review_name = $_POST['product_review_name'];
    $rating = $_POST['rating'];
    $comments = $_POST['comments'];

    $stmt = $conn->prepare("INSERT INTO reviews (name, product_name	, rating, comments) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $product_review_name, $rating, $comments);
    if ($stmt->execute()) {
        echo "<script>alert('Thank you for your feedback!');window.location.href='./';</script>";
    } else {
        echo "<script>alert('Failed to submit');window.location.href='./';</script>";

    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("./resource/head.php"); ?>
    <!-- css -->
    <link rel="stylesheet" href="./assets/css/resource/style.css">
    <link rel="stylesheet" href="./assets/css/home/style.css">
</head>

<body>

    <!-- navbar -->
    <?php include("./resource/navbar.php"); ?>

    <!-- hero section -->
    <section class="hero_sectio_main">
        <swiper-container class="mySwiper heroSwiper" navigation="true" loop="true" pagination="true">
    <?php include("./backend/homeslider.php"); ?>
<?php foreach($hero_sections as $hero_section):?>
            <swiper-slide class="slide_1 hero_slider" style="background: url('./assets/img/home/<?= safe_htmlspecialchars($hero_section['img']); ?>') no-repeat center/cover;">
                <div class=" hero_slider_main ">
                    <div class="hero_slider_content ">
                        <h2 class="" data-aos="fade-right">
                           <?= safe_htmlspecialchars($hero_section['heading']); ?>
                        </h2>
                        <p class="" data-aos="fade-left" >
                             <?= safe_htmlspecialchars($hero_section['slogan']); ?>
                        </p>
                        <a href="<?= safe_htmlspecialchars($hero_section['link']); ?>" class="">
                            <button data-aos="fade-up">
                                <span>
                                     <?= safe_htmlspecialchars($hero_section['btn']); ?>
                                </span>
                            </button>
                        </a>
                    </div>
                </div>
            </swiper-slide>
      <?php endforeach; ?>

        </swiper-container>
    </section>


    <!-- featured products -->
    <section id="featured_products " class="mt-20">
        <div class="section_head_text text-4xl uppercase text-center" data-aos="fade-down">
            <h2>
                featured products
            </h2>
        </div>
        <div class="featured_products">
            <?php include('./backend/featured_products.php') ?>
              <?php foreach ($featured_products as $featured_product): ?>
            <div class="featured_product">
                <div class="featured_product_img flex justify-center">
                    <img src="./assets/img/products/<?= safe_htmlspecialchars($featured_product['image']) ?>" alt="">
                </div>
                <div class="featured_product_con">
                    <h2>
                        <?= safe_htmlspecialchars($featured_product['name']) ?>
                    </h2>
                    <div class="flex justify-between items-center  px-5w-full">
                        <h2>
                            ₹ <?= safe_htmlspecialchars($featured_product['price']) ?>
                        </h2>
                      <a href="<?= safe_htmlspecialchars($featured_product['link']) ?>">
                          <button>
                            View
                        </button>
                      </a>
                    </div>
                </div>
            </div>
              <?php endforeach; ?>
        </div>
    </section>


    <!-- why section -->
    <section id="why_section">
        <div class=" mx-auto px-4 why_section_main">
            <h2 class="text-4xl font-bold text-center head_text_why" data-aos="fade-up">Why Choose Varioshine?</h2>
            <div class="flex why_section_content gap-20 items-center">
                <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-3 gap-8 text-center why_containers">

                    <div class="p-6 bg-white shadow-md rounded-lg why_point_item" data-aos="fade-down-right"> 
                        <i class="fas fa-flask text-4xl text-blue-600 mb-4"></i>
                        <h3 class="text-xl font-semibold">Premium-Grade Formulas</h3>
                    </div>

                    <div class="p-6 bg-white shadow-md rounded-lg why_point_item"  data-aos="fade-down">
                        <i class="fas fa-sun text-4xl text-yellow-500 mb-4"></i>
                        <h3 class="text-xl font-semibold">Long-Lasting Shine</h3>
                    </div>

                    <div class="p-6 bg-white shadow-md rounded-lg why_point_item"  data-aos="fade-down-left">
                        <i class="fas fa-leaf text-4xl text-green-500 mb-4"></i>
                        <h3 class="text-xl font-semibold">Chemical-Free & Safe</h3>
                    </div>

                    <div class="p-6 bg-white shadow-md rounded-lg why_point_item"  data-aos="fade-up-right">
                        <i class="fas fa-tools text-4xl text-gray-700 mb-4"></i>
                        <h3 class="text-xl font-semibold">Multipurpose Use</h3>
                    </div>

                    <div class="p-6 bg-white shadow-md rounded-lg why_point_item" data-aos="fade-up">
                        <i class="fas fa-flag text-4xl text-red-600 mb-4"></i>
                        <h3 class="text-xl font-semibold">Proudly Made in India</h3>
                    </div>

                    <div class="p-6 bg-white shadow-md rounded-lg why_point_item" data-aos="fade-up-left">
                        <i class="fas fa-user-check text-4xl text-indigo-600 mb-4"></i>
                        <h3 class="text-xl font-semibold">Trusted by Experts</h3>
                    </div>

                </div>

                <div class="why_section_img" data-aos="zoom-in">
                    <img src="./assets/img/home/about_point.webp" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- banner -->
    <?php include("./resource/offer_banner.php") ?>

    <!-- our products -->
    <?php include("./resource/products.php") ?>


    <!-- feedback -->
    <section id="feedback_section_main">
        <div class="feedback_section">
            <div class="feedback_slide">
                <h2 class="feedback_heading"  data-aos="fade-up-left">
                    Real Reviews. Real Results
                </h2>

                <swiper-container class="mySwiper feedback_swiper" space-between="20"
                    slides-per-view="3">
<?php
include('./backend/feedback.php') ;
?>
                      <?php foreach ($reviews as $review): ?>
                    <swiper-slide class="feedback_container" style="width: 70%;">
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
                    </swiper-slide>

                    <?php endforeach; ?>
                </swiper-container>

            </div>
            <div class="feedback_input"  data-aos="zoom-in-up">
                <div class="feedback_icon">
                    <i class="fa-solid fa-comments"></i>
                </div>
                <button class="feedback_open_btn">
                    Give Feedback
                </button>
            </div>
        </div>
    </section>
<?php
$product_query = "SELECT id,short_name FROM products";
$stmt = $conn->prepare($product_query);
$stmt->execute();
$stmt->bind_result($id, $short_name);
$products = [];
while ($stmt->fetch()) {
  $products[] = [
    'id' => $id,
    'short_name' => $short_name,

  ];
}

?>
   
   <div class="main_feedback_form">
<div class="feedback_form">
    <form action="./index.php" method="POST">
        <!-- Name -->
        <label for="name">Your Name:</label>
        <input type="text" name="name" id="name" required>

        <!-- Product Selection -->
        <label for="product">Select Product:</label>
        <select name="product_review_name" id="product" required>
            <option value="">-- Choose Product --</option>
            <?php foreach ($products as $product): ?>
                <option value="<?= $product['short_name']?>"><?= htmlspecialchars($product['short_name']) ?></option>
            <?php endforeach; ?>
        </select>

        <!-- Rating -->
        <label for="rating">Rating (1-5):</label>
        <select name="rating" id="rating" required>
            <option value="">-- Rate --</option>
            <?php for ($i = 1; $i <= 5; $i++): ?>
                <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>

        <!-- Comments -->
        <label for="comments">Your Feedback:</label>
        <textarea name="comments" id="comments" rows="4" required></textarea>

        <!-- Submit -->
        <button type="submit">Submit Feedback</button>
        <div class="close_btn">
                  <i class="fa fa-times" aria-hidden="true"></i>
        </div>
    </form>
</div>
</div>
<div class="instagram_feed">
    <iframe src="https://www.juicer.io/api/feeds/varioshine/iframe" 
        frameborder="0" 
        style="margin:5rem auto; width: 100%; height: 100%; max-width: 1200px; aspect-ratio: 2.4 / 1;">
    </iframe>
</div>

    <!-- footer -->
    <?php include("./resource/footer.php"); ?>


    <!-- swiper js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>


    <script>
  const swiperEl2 = document.querySelector('.feedback_swiper');
  Object.assign(swiperEl2, {
    spaceBetween: 20,
    slidesPerView: 3,
    breakpoints: {
      0: {
        slidesPerView: 1
      },
      768: {
        slidesPerView: 3
      }
    }
  });
  swiperEl.initialize();


  document.addEventListener('DOMContentLoaded',()=>{
    let close_btn=document.querySelector('.close_btn')
   let feedback_open_btn=document.querySelector('.feedback_open_btn')
   let main_feedback_form=document.querySelector('.main_feedback_form')
    
   feedback_open_btn.addEventListener('click',()=>{
main_feedback_form.classList.add('active')
   })
   close_btn.addEventListener('click',()=>{
main_feedback_form.classList.remove('active')

   })

  })
</script>
</body>

</html>