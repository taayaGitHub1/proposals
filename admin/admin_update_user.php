<?php

include '../include/connect.php';

session_start();


if (isset($_SESSION['user_id'])) {
  $user_id = $_SESSION['user_id'];
} else {
  $user_id = '';
}

if (isset($_POST['submit'])) {
  $name = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : '';
  $email = isset($_POST['email']) ? htmlspecialchars(trim($_POST['email'])) : '';

  $update_profile_query = "UPDATE `users` SET name='$name' , email='$email' WHERE id='$user_id'";
  $update_profile_result = mysqli_query($conn, $update_profile_query);

  if (mysqli_query($conn, $update_profile_query)) {
    echo "Profile updated successfully";
  } else {
    echo "Error updating profile: " . $update_profile_query . "<br>" . mysqli_error($conn);
  }

  $empty_pass = '';
  $prev_pass = $_POST['prev_pass'];
  $old_pass = $_POST['old_pass'];
  $old_pass = isset($_POST['old_pass']) ? htmlspecialchars(trim($_POST['old_pass'])) : '';
  $new_pass = $_POST['new_pass'];
  $new_pass = isset($_POST['new_pass']) ? htmlspecialchars(trim($_POST['new_pass'])) : '';
  $cpass = isset($_POST['cpass']);
  $cpass = isset($_POST['cpass']) ? htmlspecialchars(trim($_POST['cpass'])) : '';

  if ($old_pass == $empty_pass) {
    $message[] = 'Please enter the old password!';
  } elseif ($old_pass != $prev_pass) {
    $message[] = 'Old password does not match!';
  } elseif ($new_pass != $cpass) {
    $message[] = 'Confirm password does not match!';
  } else {
    if ($new_pass != $empty_pass) {
      $update_password_query = "UPDATE `users` SET password = '$cpass' WHERE id = '$user_id'";
      if (mysqli_query($conn, $update_password_query)) {
        $message[] = 'Password updated successfully!';
      } else {
        $message[] = 'Failed to update password!';
      }
    } else {
      $message[] = 'Please enter a new password!';
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
      <input type="hidden" name="prev_pass" value="<?= isset($fetch_profile['password']); ?>">
      <input type="text" name="name" required placeholder="Enter your username" maxlength="20" class="box" value="<?= isset($fetch_profile["name"]); ?>">
      <input type="email" name="email" required placeholder="Enter your Email" maxlength="20" class="box" value="<?= isset($fetch_profile["email"]); ?>">
      <input type="password" name="old_pass" placeholder="Enter Old Password" maxlength="20" class="box">
      <input type="password" name="new_pass" placeholder="Enter New Password" maxlength="20" class="box">
      <input type="password" name="confirm_pass" placeholder="Confirm New Password" maxlength="20" class="box">
      <button type="submit" name="submit" class="btn">Update</button>
    </form>
  </section>
</body>

</html>