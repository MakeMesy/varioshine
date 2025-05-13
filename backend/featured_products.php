<?php
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


?>