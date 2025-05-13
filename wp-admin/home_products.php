
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

