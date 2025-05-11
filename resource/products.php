<section id="our_products">
<div class="our_products">
    <div class="our_products_head mb-10">
        <h2 class="text-center text-4xl uppercase">
            Our Products
        </h2>
    </div>
    <div class="products_lists">
    <swiper-container class="mySwiper products_swiper" navigation=true loop=true slides-per-view="3"
    space-between="30" >
    <swiper-slide class="product_swiper">
        <div class="product_swiper_img">
            <img src="./assets/img/products/Air Freshener.webp" alt="">
        </div>
        <div class="product_swiper_con">
            <h2 class="product_main_head">
            Car Air Freshener
            </h2>
            <h3 class="product_sec_head">
            Natural, long-lasting car freshener with soothing aroma.
            </h3>
            <div class="price_product">
                <h2>
                ₹299
                </h2>
                <button>
                    Buy now
                </button>
            </div>

        </div>
    </swiper-slide>
    <swiper-slide class="product_swiper">
        <div class="product_swiper_img">
            <img src="./assets/img/products/Air Freshener.webp" alt="">
        </div>
        <div class="product_swiper_con">
            <h2 class="product_main_head">
            Car Air Freshener
            </h2>
            <h3 class="product_sec_head">
            Natural, long-lasting car freshener with soothing aroma.
            </h3>
            <div class="price_product">
                <h2>
                ₹299
                </h2>
                <button>
                    Buy now
                </button>
            </div>

        </div>
    </swiper-slide>
    <swiper-slide class="product_swiper">
        <div class="product_swiper_img">
            <img src="./assets/img/products/Air Freshener.webp" alt="">
        </div>
        <div class="product_swiper_con">
            <h2 class="product_main_head">
            Car Air Freshener
            </h2>
            <h3 class="product_sec_head">
            Natural, long-lasting car freshener with soothing aroma.
            </h3>
            <div class="price_product">
                <h2>
                ₹299
                </h2>
                <button>
                    Buy now
                </button>
            </div>

        </div>
    </swiper-slide>
    <swiper-slide class="product_swiper">
        <div class="product_swiper_img">
            <img src="./assets/img/products/Air Freshener.webp" alt="">
        </div>
        <div class="product_swiper_con">
            <h2 class="product_main_head">
            Car Air Freshener
            </h2>
            <h3 class="product_sec_head">
            Natural, long-lasting car freshener with soothing aroma.
            </h3>
            <div class="price_product">
                <h2>
                ₹299
                </h2>
                <button>
                    Buy now
                </button>
            </div>

        </div>
    </swiper-slide>
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