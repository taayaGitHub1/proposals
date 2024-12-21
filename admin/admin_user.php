<?php
include '../include/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'] ?? null;

if (!$admin_id) {
  header('location:admin_login.php');
  exit();
}

if (isset($_GET['delete'])) {
  $delete_id = $_GET['delete'];

  $delete_user_query = "DELETE FROM `users` WHERE id='$delete_id'";
  if (mysqli_query($conn, $delete_user_query)) {
    mysqli_query($conn, "DELETE FROM `orders` WHERE user_id='$delete_id'");
    mysqli_query($conn, "DELETE FROM `messages` WHERE user_id='$delete_id'");
    mysqli_query($conn, "DELETE FROM `cart` WHERE user_id='$delete_id'");

    echo "<script>alert('User and related data deleted successfully');</script>";
  } else {
    echo "<script>alert('Failed to delete user');</script>";
  }

  header('location: admin_user.php');
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Panel</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

  <style>
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f8f9fa;
    }

    .user-panel {
      text-align: center;
      padding: 20px;
    }

    .user-panel h1 {
      font-size: 2rem;
      color: #333;
      margin-bottom: 20px;
    }

    .user-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
    }

    .user-box {
      background-color: #ffffff;
      border: 1px solid #ddd;
      border-radius: 5px;
      padding: 20px;
      width: 300px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      text-align: left;
    }

    .user-box p {
      margin: 10px 0;
      font-size: 1rem;
    }

    .user-box span {
      color: #007bff;
    }

    .delete-btn {
      display: inline-block;
      margin-top: 10px;
      padding: 10px 15px;
      background-color: #dc3545;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      font-size: 1rem;
    }

    .delete-btn:hover {
      background-color: #c82333;
    }

    .option-btn {
      display: inline-block;
      margin-top: 10px;
      padding: 10px 15px;
      background-color: rgb(1, 65, 15);
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      font-size: 1rem;
    }

    .option-btn:hover {
      background-color: rgb(9, 76, 51);
    }

    .empty {
      font-size: 1.2rem;
      color: #888;
    }
  </style>
</head>

<body>
  <section class="user-panel">
    <h1>User Panel</h1>
    <div class="user-container">
      <?php
      $select_accounts_query = "SELECT * FROM `users`";
      $select_accounts_result = mysqli_query($conn, $select_accounts_query);

      if ($select_accounts_result && mysqli_num_rows($select_accounts_result) > 0) {
        while ($fetch_accounts = mysqli_fetch_assoc($select_accounts_result)) {
      ?>
          <div class="user-box">
            <p>User ID: <span><?= $fetch_accounts['id']; ?></span></p>
            <p>Username: <span><?= $fetch_accounts['name']; ?></span></p>
            <p>Email: <span><?= $fetch_accounts['email']; ?></span></p>
            <a href="admin_user.php?delete=<?= $fetch_accounts['id']; ?>" onclick="return confirm('Are you sure you want to delete this user?')" class="delete-btn">Delete</a>
            <a href="admin_update_user.php?update=<?= $fetch_accounts['id']; ?>" class="option-btn">Update</a>
          </div>
      <?php
        }
      } else {
        echo '<p class="empty">No users found!</p>';
      }
      ?>
    </div>
  </section>
</body>

</html>