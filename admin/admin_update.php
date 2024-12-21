<?php
include '../include/connect.php';
session_start();

$admin_id = isset($_SESSION['admin_id']);


$query = "SELECT * FROM admins WHERE id='$admin_id'";
$result = mysqli_query($conn, $query);
if ($result) {
  $fetch_profile = mysqli_fetch_assoc($result);
} else {
  die("Error fetching profile: " . mysqli_error($conn));
}

if (isset($_POST['update'])) {
  $email = htmlspecialchars(trim($_POST['email']));
  $old_pass_input = htmlspecialchars(trim($_POST['old_pass'] ?? ''));
  $prev_pass = $fetch_profile['pass'] ?? '';

  if ($old_pass_input !== $prev_pass) {
    echo "<script type='text/javascript'>
                alert('Old password is incorrect.');
              </script>";
  } else {
    $new_pass = htmlspecialchars(trim($_POST['new_pass'] ?? ''));
    $confirm_pass = htmlspecialchars(trim($_POST['confirm_pass'] ?? ''));

    $update_email_query = "UPDATE `admins` SET email='$email' WHERE id='$admin_id'";
    $update_email_result = mysqli_query($conn, $update_email_query);
    if (!$update_email_result) {
      die("Error updating email: " . mysqli_error($conn));
    }

    if ($new_pass !== $confirm_pass) {
      echo "<script type='text/javascript'>
                    alert('New password and confirm password do not match.');
                  </script>";
    } elseif (!empty($new_pass)) {
      $update_password_query = "UPDATE `admins` SET password='$new_pass' WHERE id='$admin_id'";
      $update_password_result = mysqli_query($conn, $update_password_query);

      if ($update_password_result) {
        echo "<script type='text/javascript'>
                        alert('Password changed successfully.');
                        window.location.href='admin_login.php';
                      </script>";
      } else {
        die("Error updating password: " . mysqli_error($conn));
      }
    }
  }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Profile</title>

  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

  <link rel="stylesheet" href="../css/admin_part.css">

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

  <!--Bootstrap Link-->
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap JS and Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .form-container {
      max-width: 500px;
      margin: 50px auto;
      padding: 30px;
      background-color: #fff;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
    }

    .form-container h2 {
      text-align: center;
      font-size: 24px;
      margin-bottom: 20px;
      color: #333;
    }

    .form-container .box {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 5px;
      outline: none;
    }

    .form-container .box:focus {
      border-color: #4CAF50;
      box-shadow: 0 0 5px rgba(76, 175, 80, 0.5);
    }

    .form-container .btn {
      width: 100%;
      padding: 12px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .form-container .btn:hover {
      background-color: #45a049;
    }
  </style>
</head>

<body>
  <section class="form-container">
    <form action="" method="POST">
      <h2>Update Profile</h2>
      <input type="hidden" name="prev_pass" value="<?= isset($fetch_profile['pass']); ?>">
      <input type="email" name="email" value="<?= isset($fetch_profile['email']); ?>" required placeholder="Enter your Username" maxlength="20" class="box">
      <input type="password" name="old_pass" placeholder="Enter Old Password" maxlength="20" class="box">
      <input type="password" name="new_pass" placeholder="Enter New Password" maxlength="20" class="box">
      <input type="password" name="confirm_pass" placeholder="Confirm New Password" maxlength="20" class="box">
      <button type="submit" name="update" class="btn">Update</button>
    </form>
  </section>
</body>

</html>