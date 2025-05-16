<?php include('./backend/products.php'); ?>
<section id="our_products">
    <div class="our_products">
        <div class="our_products_head mb-10">
            <h2 class="text-center text-4xl uppercase" data-aos="zoom-in-up">
                Our Products
            </h2>
        </div>
        <div class="products_lists">
            <swiper-container class="mySwiper products_swiper" navigation=true loop=true slides-per-view="3"
                space-between="30">
                <?php foreach ($products as $product): ?>
                    <swiper-slide class="product_swiper">
                        <div class="product_swiper_img">
                            <img src="./assets/img/products/<?= safe_htmlspecialchars($product['image']) ?>" alt="">
                        </div>
                        <div class="product_swiper_con">
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
                                <a href="./product.php?name=<?= safe_htmlspecialchars($product['url_name']) ?>">
                                    <button>
                                        Buy now
                                    </button>
                                </a>
                            </div>

                        </div>
                    </swiper-slide>
                <?php endforeach; ?>
            </swiper-container>
        </div>
    </div>
</section>


<script>
    const swiperEl = document.querySelector('.products_swiper');
    Object.assign(swiperEl, {
        spaceBetween: 20,
        slidesPerView: 3,
        breakpoints: {
            0: {
                slidesPerView: 1
            },
            520: {
                slidesPerView: 2
            },
            768: {
                slidesPerView: 3
            }
        }
    });
    swiperEl.initialize();
</script>