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
    <link rel="stylesheet" href="./assets/css/home/style.css">
</head>

<body>

    <!-- navbar -->
    <?php include("./resource/navbar.php"); ?>

    <!-- hero section -->
    <section class="hero_sectio_main">
        <swiper-container class="mySwiper heroSwiper" navigation="true" loop="true" pagination="true">
            <swiper-slide class="slide_1 hero_slider" style="background: url('./assets/img/home/slider_4.webp') no-repeat center/cover;">
                <div class=" hero_slider_main ">
                    <div class="slider_content ">
                        <h2 class="">
                            Shine Beyond Limits with Varioshine
                        </h2>
                        <p class="">
                            Experience premium car and bike care with high-performance cleaning, polishing, and protection – trusted by detailers and loved by owners.
                        </p>
                        <a href="./products.php" class="">
                            <button>
                                <span>
                                    SHOP NOW
                                </span>
                            </button>
                        </a>
                    </div>
                </div>
            </swiper-slide>
            <swiper-slide class="hero_slider">Slide 2</swiper-slide>
            <swiper-slide class="hero_slider">Slide 3</swiper-slide>

        </swiper-container>
    </section>


    <!-- featured products -->
    <section id="featured_products " class="mt-20">
        <div class="section_head_text text-4xl uppercase text-center">
            <h2>
                featured products
            </h2>
        </div>
        <div class="featured_products">
            <div class="featured_product">
                <div class="featured_product_img flex justify-center">
                    <img src="./assets/img/products/3-in-1 Car Polish.webp" alt="">
                </div>
                <div class="featured_product_con">
                    <h2>
                        3-in-1 Car Polish
                    </h2>
                    <div class="flex justify-between  px-5w-full">
                        <h2>
                            ₹ 299
                        </h2>
                        <button>
                            View
                        </button>
                    </div>
                </div>
            </div>
            <div class="featured_product">
                <div class="featured_product_img flex justify-center">
                    <img src="./assets/img/products/3-in-1 Car Polish.webp" alt="">
                </div>
                <div class="featured_product_con">
                    <h2>
                        3-in-1 Car Polish
                    </h2>
                    <div class="flex justify-between  px-5">
                        <h2>
                            ₹ 299
                        </h2>
                        <button>
                            View
                        </button>
                    </div>
                </div>
            </div>
            <div class="featured_product">
                <div class="featured_product_img flex justify-center">
                    <img src="./assets/img/products/3-in-1 Car Polish.webp" alt="">
                </div>
                <div class="featured_product_con ">
                    <h2>
                        3-in-1 Car Polish
                    </h2>
                    <div class="flex justify-between  px-5">
                        <h2>
                            ₹ 299
                        </h2>
                        <button>
                            View
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- why section -->
    <section id="why_section">
        <div class=" mx-auto px-4 why_section_main">
            <h2 class="text-4xl font-bold text-center head_text_why">Why Choose Varioshine?</h2>
            <div class="flex why_section_content gap-20 items-center">
                <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-3 gap-8 text-center why_containers">

                    <div class="p-6 bg-white shadow-md rounded-lg why_point_item">
                        <i class="fas fa-flask text-4xl text-blue-600 mb-4"></i>
                        <h3 class="text-xl font-semibold">Premium-Grade Formulas</h3>
                    </div>

                    <div class="p-6 bg-white shadow-md rounded-lg why_point_item">
                        <i class="fas fa-sun text-4xl text-yellow-500 mb-4"></i>
                        <h3 class="text-xl font-semibold">Long-Lasting Shine</h3>
                    </div>

                    <div class="p-6 bg-white shadow-md rounded-lg why_point_item">
                        <i class="fas fa-leaf text-4xl text-green-500 mb-4"></i>
                        <h3 class="text-xl font-semibold">Chemical-Free & Safe</h3>
                    </div>

                    <div class="p-6 bg-white shadow-md rounded-lg why_point_item">
                        <i class="fas fa-tools text-4xl text-gray-700 mb-4"></i>
                        <h3 class="text-xl font-semibold">Multipurpose Use</h3>
                    </div>

                    <div class="p-6 bg-white shadow-md rounded-lg why_point_item">
                        <i class="fas fa-flag text-4xl text-red-600 mb-4"></i>
                        <h3 class="text-xl font-semibold">Proudly Made in India</h3>
                    </div>

                    <div class="p-6 bg-white shadow-md rounded-lg why_point_item">
                        <i class="fas fa-user-check text-4xl text-indigo-600 mb-4"></i>
                        <h3 class="text-xl font-semibold">Trusted by Experts</h3>
                    </div>

                </div>

                <div class="why_section_img">
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
                <h2 class="feedback_heading">
                    Real Reviews. Real Results
                </h2>

                <swiper-container class="mySwiper feedback_swiper" space-between="20"
                    slides-per-view="3">
                    <swiper-slide class="feedback_container" style="width: 70%;">
                        <div class="feedback_person_name">
                            <h2>
                                B.Naveen Bharathi
                            </h2>
                        </div>
                        <div class="feedback_product_name">
                            <p>
                                3 in 1 polish
                            </p>
                        </div>
                        <div class="feedback_content">
                            <p>
                                Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit amet consectetur
                            </p>
                        </div>
                    </swiper-slide>
                    <swiper-slide class="feedback_container">
                        <div class="feedback_person_name">
                            <h2>
                                B.Naveen Bharathi
                            </h2>
                        </div>
                        <div class="feedback_product_name">
                            <p>
                                3 in 1 polish
                            </p>
                        </div>
                        <div class="feedback_content">
                            <p>
                                Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit amet consectetur
                            </p>
                        </div>
                    </swiper-slide>
                    <swiper-slide class="feedback_container">
                        <div class="feedback_person_name">
                            <h2>
                                B.Naveen Bharathi
                            </h2>
                        </div>
                        <div class="feedback_product_name">
                            <p>
                                3 in 1 polish
                            </p>
                        </div>
                        <div class="feedback_content">
                            <p>
                                Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit amet consectetur
                            </p>
                        </div>
                    </swiper-slide>
                    <swiper-slide class="feedback_container">
                        <div class="feedback_person_name">
                            <h2>
                                B.Naveen Bharathi
                            </h2>
                        </div>
                        <div class="feedback_product_name">
                            <p>
                                3 in 1 polish
                            </p>
                        </div>
                        <div class="feedback_content">
                            <p>
                                Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit amet consectetur
                            </p>
                        </div>
                    </swiper-slide>


                </swiper-container>

            </div>
            <div class="feedback_input">
                <div class="feedback_icon">
                    <i class="fa-solid fa-comments"></i>
                </div>
                <button>
                    Give Feedback
                </button>
            </div>
        </div>
    </section>

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
  const swiperEl = document.querySelector('.feedback_swiper');
  Object.assign(swiperEl, {
    spaceBetween: 20,
    slidesPerView: 3,
    breakpoints: {
      0: {
        slidesPerView: 1
      },
      520:{
        slidesPerView:2
      },
      768: {
        slidesPerView: 3
      }
    }
  });
  swiperEl.initialize();
</script>
</body>

</html>