<?php
 $fea_pro_id = $_POST['fea_pro_id'];
 $file_tmp = $_FILES['fea_img_1']['tmp_name'];
        $file_name = $_FILES['fea_img_1']['name'];
        $file_size = $_FILES['fea_img_1']['size'];
        $file_type = $_FILES['fea_img_1']['type'];


        $allowed_types = ['image/jpeg', 'image/png', 'image/webp'];
        if (!in_array($file_type, $allowed_types)) {
          echo "Invalid file type. Only JPEG, PNG, and WebP files are allowed.";
          exit;
        }


        $upload_dir = '../assets/img/products/';


        $file_name_new = uniqid('', true) . "-" . basename($file_name);
        $file_path = $upload_dir . $file_name_new;


        if (move_uploaded_file($file_tmp, $file_path)) {

          $conn->set_charset("utf8mb4");

          $stmt = $conn->prepare("UPDATE fea_products SET image = ? WHERE id = ?");
          $stmt->bind_param("si", $file_name_new, $fea_pro_id);

          if ($stmt->execute()) {
            echo "<script>alert('Product image updated successfully.'); window.location.href='./';</script>";
          } else {
            echo "<script>alert('Database update failed:');</script>";
          }

          $stmt->close();
        } else {
          echo "<script>alert('Error uploading file.'); </script>";
        }?>