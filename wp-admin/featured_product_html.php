 <div class="featured_product">
          <form action="./index.php" method="post" enctype="multipart/form-data">
            <div class="featured_product_img flex justify-center flex-col items-center">
              <input type="hidden" name="fea_img" value="fea_img">
              <input type="hidden" name="fea_pro_id" value="<?= safe_htmlspecialchars($featured_product['id']) ?>">
              <input type="file" name='fea_img_1' >
              <img src="../assets/img/products/<?= safe_htmlspecialchars($featured_product['image']) ?>" alt="">
              <button type="submit" class="update-btn">
                  <i class="fa-solid fa-rotate"></i>
                </button>
            </div>
          </form>
          <form action="./index.php" method="post">
            <div class="featured_product_con">
              <input type="hidden" name="fea_product" value="fea_product">
              <input type="hidden" name="fea_pro_id" value="<?= safe_htmlspecialchars($featured_product['id']) ?>">
              <input type="text" value="<?= safe_htmlspecialchars($featured_product['name']) ?>" name="fea_name">
              <input type="number" value="<?= safe_htmlspecialchars($featured_product['price']) ?>" name="fea_price">
              <input type="text" value="<?= safe_htmlspecialchars($featured_product['link']) ?>" name="fea_link">
              <div>
                <button type="submit" class="update-btn">
                  <i class="fa-solid fa-rotate"></i> Update
                </button>
              </div>
            </div>

          </form>
        </div>