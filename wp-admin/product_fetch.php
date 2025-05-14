<?php

$product_query = "SELECT id, full_name, url_name, short_name, image, sub_image_1, sub_image_2, sub_image_3, description, about_item, offer_price, mrp, amazon_link FROM products WHERE id = ?";
  $stmt = $conn->prepare($product_query);
  $stmt->bind_param("i", $main_id);
  $stmt->execute();
  $stmt->bind_result($id, $full_name, $url_name, $short_name, $image, $sub_image_1, $sub_image_2, $sub_image_3, $description, $about_item, $offer_price, $mrp, $amazon_link);

  if ($stmt->fetch()) {
    $product = [
      'id' => $id,
      'full_name' => $full_name,
      'url_name' => $url_name,
      'short_name' => $short_name,
      'image' => $image,
      'sub_image_1' => $sub_image_1,
      'sub_image_2' => $sub_image_2,
      'sub_image_3' => $sub_image_3,
      'description' => $description,
      'about_item' => $about_item,
      'offer_price' => $offer_price,
      'mrp' => $mrp,
      'amazon_link' => $amazon_link
    ];
  } else {
    echo json_encode(['error' => 'Product not found']);
  }
  $stmt->close();
  ?>















