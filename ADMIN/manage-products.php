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
        <h1>Manage Products</h1>
      </header>

<!--Button to add category -->
      <a href="add-category.php" class="btn-primary">Add Products</a><br>

      <table class="tbl-full">

        <tr>
          <th>S.N.</th>
          <th>CATEGORY NAME</th>
          <th>ACTION</th>
        </tr>

        <tr>
          <td>1.</td>
          <td>Sketch</td>
          <td>
            <a href="#" class="btn-secondary">Update</a>
            <a href="#" class="btn-danger">Delete</a>
          </td>
        </tr>

        <tr>
          <td>2.</td>
          <td>Sketch</td>
          <td>
            <a href="#" class="btn-secondary">Update</a>
            <a href="#" class="btn-danger">Delete</a>
          </td>
        </tr>

        <tr>
          <td>3.</td>
          <td>Sketch</td>
          <td>
            <a href="#" class="btn-secondary">Update</a>
            <a href="#" class="btn-danger">Delete</a>
          </td>
        </tr>

      </table>
      