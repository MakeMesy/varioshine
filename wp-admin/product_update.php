<?php


    $full_name     = $_POST['full_name'] ?? '';
    $short_name    = $_POST['short_name'] ?? '';
    $url_name    = $_POST['url_name'] ?? '';
    $offer_price   = $_POST['offer_price'] ?? '';
    $mrp           = $_POST['mrp'] ?? '';
    $amazon_link   = $_POST['amazon_link'] ?? '';
    $description   = $_POST['description'] ?? '';
    $product_id    = $main_id;

    if ($product_id) {
        $conn->set_charset("utf8mb4");

        $stmt = $conn->prepare("UPDATE products SET 
            full_name = ?, 
            short_name = ?, 
            url_name = ?, 
            offer_price = ?,
            mrp = ?, 
            amazon_link = ?, 
            description = ?
            WHERE id = ?");

        $stmt->bind_param("sssssssi", 
            $full_name, 
            $short_name, 
              $url_name,
            $offer_price, 
            $mrp, 
            $amazon_link, 
            $description, 
            $product_id
        );

        if ($stmt->execute()) {

            header("Location: ./"); 
            exit;
        } else {
            echo "<script>alert('Update failed: ')</script>" . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Product ID not provided.";
    }













?>