<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online shop</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <center>
        <div class="main">
            <form action="insert.php" method= "post" enctype = "multipart/form-data">
              <h2 >   Green store </h2>  
              <img src = image.jpg alt="logo" width ="300px">
              <br>
              <input type ="text" name ="name" >
              <br>
              <input type ="text" name ="price">
              <br>
              <input type ="file" id="file" name="image" style ="display:none;">
              <label for ="file">  select photo </label>
              <button name ="upload"> ✅upload product</button>
              <br>
              <a href="products.php"> show all products</a>

            </form>
        </div>
        <p> developed by Eman </p>
</center>
</body>
</html>