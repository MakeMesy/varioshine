<?php
$review_query = "SELECT id, name, product_name, comments, rating, created_at FROM reviews";
$stmt = $conn->prepare($review_query);
$stmt->execute();
$stmt->bind_result($id, $name, $product_name, $comments, $rating, $created_at);

$reviews = [];
while ($stmt->fetch()) {
    $reviews[] = [
        'id' => $id,
        'name' => $name,
        'product_name' => $product_name,
        'comments' => $comments,
        'rating' => $rating,
        'created_at' => $created_at,
    ];
}


?>