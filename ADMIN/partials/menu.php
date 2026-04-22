<?php
session_start();
?>

<?php include('../Connection.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Panel</title>
  <link rel="stylesheet" href="../ADMIN/adminpannel.css">
  <script src="https://kit.fontawesome.com/cb31bfb0c6.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">
    <aside class="sidebar">
      <h2>Admin</h2>
      <ul>
        <li class="active"><a href="Admin pannel.php">Dashboard</a></li>
        <li><a href="manage-orders.php">Orders</a></li>
        <li><a href="manage-products.php">Products</a></li>
        <li><a href="manage-category.php">Catogories</a></li>
        <li><a href="manage-artists.php">Artists</a></li>
        <li>Settings</li>

        <form method="POST">
          <li name="Logout" class="logout-btn">Logout</li>
        </form>
        
      </ul>
    </aside>

<?php
  
  if(isset($_POST['Logout']))
  {
    session_destroy();
    header("location: ../ADMIN/Admin Login.php");
  }
  
?>