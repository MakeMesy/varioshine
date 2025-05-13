<?php



 $fea_name = $_POST['fea_name'];
    $fea_price = $_POST['fea_price'];
    $fea_link = $_POST['fea_link'];
    $fea_pro_id = $_POST['fea_pro_id'];


    $sql = "UPDATE fea_products SET name = '$fea_name', price = '$fea_price', link = '$fea_link' WHERE id = '$fea_pro_id'";

    if (mysqli_query($conn, $sql)) {
      header("Location: ./");
      exit;
    } else {
      echo "<script>alert('Update failed: " . mysqli_error($conn) . "');</script>";
    }


    ?>