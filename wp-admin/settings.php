<?php $id = 1;
        $instagram = $_POST['instagram'];
        $facebook  = $_POST['facebook'];
        $amazon    = $_POST['amazon'];
        $phone     = $_POST['phone'];
        $email     = $_POST['email'];
        $address   = $_POST['address'];

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

            echo "<script>alert('Invalid email address.');</script>";
        } else {
            $query = "
                UPDATE `settings`
                SET 
                    `instagram` = ?, 
                    `facebook` = ?, 
                    `amazon` = ?, 
                    `phone` = ?, 
                    `email` = ?, 
                    `address` = ?
                WHERE `id` = ?
            ";

            $stmt = mysqli_prepare($conn, $query);
            mysqli_stmt_bind_param($stmt, 'ssssssi', $instagram, $facebook, $amazon, $phone, $email, $address, $id);
            mysqli_stmt_execute($stmt);

            if (mysqli_stmt_affected_rows($stmt) > 0) {
                echo "<script>window.location.href='./';</script>";
                exit;
            }

            mysqli_stmt_close($stmt);
        }


        ?>