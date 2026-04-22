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
      <a href="add-category.php" class="btn-primary">Add Category</a><br>

      <table class="tbl-full">

        <tr>
          <th>S.N.</th>
          <th>CATEGORY NAME</th>
          <th>ACTION</th>
        </tr>

        <?php
        //Query to get all data
          $sql = "SELECT * FROM category";

        //Execute the Query
          $res = mysqli_query($con, $sql);

        //Check whether the Query is Executed or not
        if($res==TRUE)
        {
          //count Rows to check whether we have data in daTabase or not
          $count = mysqli_num_rows($res); //function to get all the rows in database

          $sn=1; // Create a variable and Assign the value

          //Check the num of rows
          if ($count>0)
          {
            //We have data in database
            while($rows=mysqli_fetch_assoc($res))
            {
              //Using while loop to get all the data from database.
              //and while loop will run as long as we have data in database.

              //get indivisual data
              $cat_id=$rows['cat_id'];
              $cat_name=$rows['cat_name'];

              //display the values in our table
              ?>

              <tr>
                <td><?php echo $sn++; ?></td>
                <td><?php echo $cat_name; ?></td>
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
