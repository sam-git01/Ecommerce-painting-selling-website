<?php 
    include('partials/menu.php');
?>


<style>
    .wrapper{
      font-family: "Poppins", sans-serif;
      height: 100vh;
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0;
    }
    .form-container {
      background: #fff;
      padding: 2rem 2.5rem;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
      width: 350px;
      text-align: center;
      transition: transform 0.3s ease;
    }

    .form-container:hover {
      transform: translateY(-5px);
    }

    .form-container h2 {
      margin-bottom: 1.5rem;
      color: #333;
      font-size: 1.5rem;
      font-weight: bold;
    }

    .form-group {
      margin-bottom: 1.2rem;
      text-align: left;
    }

    label {
      display: block;
      margin-bottom: 0.5rem;
      color: #555;
      font-weight: 500;
    }

    input[type="text"] {
      width: 100%;
      padding: 12px 15px;
      border: 1px solid #ddd;
      border-radius: 12px;
      outline: none;
      font-size: 1rem;
      transition: border 0.3s;
    }

    input[type="text"]:focus {
      border-color: #2575fc;
      box-shadow: 0 0 5px rgba(37, 117, 252, 0.4);
    }

    button {
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 12px;
      background: linear-gradient(135deg, #2575fc, #6a11cb);
      color: white;
      font-size: 1rem;
      font-weight: 600;
      cursor: pointer;
      transition: background 0.3s, transform 0.2s;
    }

    button:hover {
      background: linear-gradient(135deg, #6a11cb, #2575fc);
      transform: scale(1.02);
    }
  </style>

<div class="wrapper">
    <div class="form-container">
    <h2>Add Artist</h2>
    <form action="#" method="post">
      <div class="form-group">
        <label for="category">Artist Name</label>
        <input type="text" id="category" name="artist_name" placeholder="Enter category name" required>

        <label for="category">Email</label>
        <input type="text" id="category" name="artist_email" placeholder="Enter category name" required>

        <label for="category">Address</label>
        <input type="text" id="category" name="artist_address" placeholder="Enter category name" required>
      </div>
      <button type="submit" name="submit" value="Add Artist">Submit</button>
    </form>
</div>

<?php

if(isset($_POST['submit']))
{
    //Get the data from form
    $artist_name = $_POST['artist_name'];
    $artist_email = $_POST['artist_email'];
    $artist_address = $_POST['artist_address'];

    //Sql query to save the data in database
    $sql = "INSERT INTO artist SET
        artist_name = '$artist_name',
        artist_email = '$artist_email',
        artist_address = '$artist_address'
    ";

    $res = mysqli_query($con, $sql) or die (mysqli_error());

    if ($res==TRUE)
    {
        echo "Data Inserted";
    }
    else
    {
        echo "Failed to inserted data";
    }
}

?>