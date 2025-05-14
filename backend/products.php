<?php


$product_query = "SELECT id,short_name,url_name,sec_head,image,offer_price,amazon_link FROM products";
$stmt = $conn->prepare($product_query);
$stmt->execute();

$stmt->bind_result($id,$short_name,$url_name,$sec_head,$image,$offer_price,$amazon_link);

$products = [];
while ($stmt->fetch()) {
  $products[] = [
    'id'=>$id,
    'short_name' => $short_name,
    'url_name' => $url_name,
    'image' => $image,
    'sec_head'=>$sec_head,
    'offer_price'=>$offer_price,
    'amazon_link'=>$amazon_link
  ];
}


?>