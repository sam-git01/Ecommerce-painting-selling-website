<?php include('partials/menu.php');?>


<style>

  .btn-primary{
    background-color: #1e90ff;
    padding: 5px;
    text-decoration: none;
    color: white;
    border-radius: 5px;
    font-weight: bold;
  }

  .btn-primary:hover{
    background-color: #3742fa;
  }

  .tbl-full{
    width: 100%;
  }

  table tr th{
    border-bottom: 1px solid black;
  }

  .btn-secondary{
    background-color: #7bed9f;
    padding: 3px;
    text-decoration: none;
    color: black;
    border-radius: 5px;
  }

  .btn-secondary:hover{
    background-color: #2ed573;
  }

  .btn-danger{
    background-color: #ff6348;
    padding: 2px;
    text-decoration: none;
    color: black;
    border-radius: 5px;
  }

   .btn-danger:hover{
    background-color: #ff4757;
  }

</style>

<main class="main-content">
      <header>
        <h1>Manage Categories</h1>
      </header>

<!--Button to add category -->
      <a href="add-artist.php" class="btn-primary">Add Artist</a><br>

      <table class="tbl-full">

        <tr>
          <th>S.N.</th>
          <th>ARTIST NAME</th>
          <th>EMAIL</th>
          <th>ADDRESS</th>
          <th>ACTION</th>
        </tr>

        <?php
        //Query to get all data
          $sql = "SELECT * FROM artist";

        //Execute the Query
          $res = mysqli_query($con, $sql);

        //Check whether the Query is Executed or not
        if($res==TRUE)
        {
          $count = mysqli_num_rows($res);

          $sn=1; 

          if ($count>0)
          {
            while($rows=mysqli_fetch_assoc($res))
            {
              //get indivisual data
              $artist_id=$rows['artist_id'];
              $artist_name=$rows['artist_name'];
              $artist_email=$rows['artist_email'];
              $artist_address=$rows['artist_address'];

              //display the values in our table
              ?>

              <tr>
                <td><?php echo $sn++; ?></td>
                <td><?php echo $artist_name; ?></td>
                <td><?php echo $artist_email; ?></td>
                <td><?php echo $artist_address; ?></td>
                <td>
                  <a href="#" class="btn-secondary">Update</a>
                  <a href="#" class="btn-danger">Delete</a>
                </td>
              </tr>

              <?php

            }
          }
          else{

          }
        }
        ?>

      </table>
