<?php




 $product_id    = $main_id;
    if ($product_id) {

      if (isset($_FILES['product_image_3']) && $_FILES['product_image_3']['error'] === UPLOAD_ERR_OK) {
        $file_tmp = $_FILES['product_image_3']['tmp_name'];
        $file_name = $_FILES['product_image_3']['name'];
        $file_size = $_FILES['product_image_3']['size'];
        $file_type = $_FILES['product_image_3']['type'];


        $allowed_types = ['image/jpeg', 'image/png', 'image/webp'];
        if (!in_array($file_type, $allowed_types)) {
          echo "Invalid file type. Only JPEG, PNG, and WebP files are allowed.";
          exit;
        }


        $upload_dir = '../assets/img/product_2/';


        $file_name_new = uniqid('', true) . "-" . basename($file_name);
        $file_path = $upload_dir . $file_name_new;


        if (move_uploaded_file($file_tmp, $file_path)) {

          $conn->set_charset("utf8mb4");

          $stmt = $conn->prepare("UPDATE products SET sub_image_3 = ? WHERE id = ?");
          $stmt->bind_param("si", $file_name_new, $product_id);

          if ($stmt->execute()) {
            echo "<script>alert('Product image updated successfully.'); window.location.href='./';</script>";
          } else {
            echo "<script>alert('Database update failed:');</script>";
          }

          $stmt->close();
        } else {
          echo "<script>alert('Error uploading file.'); </script>";
        }
      } else {
        echo "<script>alert('No file uploaded or there was an error with the upload.');</script>";
      }
    } else {
      echo "<script>alert('Product ID not provided.'); </script>";
    }


    ?>