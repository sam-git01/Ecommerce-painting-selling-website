<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArtComish</title>

    <link rel="stylesheet" href="customart.css">

    <script src="script.js"></script>

    <script src="https://kit.fontawesome.com/cb31bfb0c6.js" crossorigin="anonymous"></script>
    <link rel="icon" href="ASSETS/favicon.png" type="x-icon">
    
</head>
<body>
    <!-- Navbar Section -->
    <?php include('inc/nav.php') ?>


     <!---------- Custom Art Page Start----------->
<section class="custom-art">

    <div class="custome-img-left">
        <img src="ASSETS\3659648.jpg" alt="">
    </div>

    <div class="form-container" id="commission-form">
        <h2>Comission Your Artwork</h2>
        <form>
        <div class="form-group">
            <label for="art-type">Type of Artwork:</label>
            <select id="art-type" name="art-type" required>
                <option value="sketch">Sketch</option>
                <option value="painting">Painting</option>
                <option value="digital">Digital Art</option>
            </select>   
        </div>
    
        <div class="form-group">
            <label for="size">Size:</label>
            <select id="size" name="size" required>
                <option value="small">Small</option>
                <option value="medium">Medium</option>
                <option value="large">Large</option>
            </select>
        </div>

        <div class="form-group">
            <label for="medium">Medium:</label>
            <select id="medium" name="medium" required>
                <option value="pencil">Pencil</option>
                <option value="watercolor">Watercolor</option>
                <option value="oil">Oil</option>
            </select>
        </div>

        <div class="form-group file-upload">
            <label class="custom-file-label" for="fileInput">Choose Refrence Image</label>
            <input type="file" id="fileInput" accept="image/*" onchange="previewImage(event)">
            <img id="imagePreview" class="preview-img" />
        </div>

        <button type="submit" id="submit">Submit</button>
        </form>

    </div>

</section>    
    

        
    

  <script>
    function previewImage(event) {
      const image = document.getElementById('imagePreview');
      image.src = URL.createObjectURL(event.target.files[0]);
      image.style.display = 'block';
    }
  </script>

    <!-- Footer Section -->
   <?php include('inc/footer.php') ?>

    <script>
        document.getElementById('commission-form').addEventListener('submit', function (event) {
        event.preventDefault();
        alert('Thank you for your submission! We will contact you shortly.');
        });

    </script>


</body>
</html>   