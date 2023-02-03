<?php
// require = "index.html"
if($_SERVER["REQUEST_METHOD"] == "POST"){

    echo strip_tags( $_POST["name" ]  ) ."<br>";
    echo strip_tags( $_POST["number"] ) ."<br>";
    echo strip_tags( $_POST["email"]  ) ."<br>";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    
</head>
<body>
    <div >

        <div class="card" style="width: 18rem ; max-width: 200px;">
            <img src="img/banner1.jpg" class="card-img-top" alt="image">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <?php
                $tiltle = "Some quick example text to build on the card title and make up the bulk of the card's content.";
                $textvalide = substr($tiltle ,0 , 100);
                ?>
                <p class="card-text"><?php echo ($textvalide) ?>...</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        
    </div>

    <form action="" method="POST">
        <div class="bg-success text-white container p-4">
            <div class="m-2">
                <label class="w-25">Name</label>
                <input type="text" name="name">
            </div>
            <div class="m-2">
                <label class="w-25">Number</label>
                <input type="number" name="number">
            </div>
            <div class="m-2">
                <label class="w-25">Email</label>
                <input type="email" name="email">
            </div>
            <div class="m-2">
                <label class="w-25">Submit</label>
                <input type="submit" class="btn btn-danger ms-5" name="submit">
            </div>

        </div>
    </form>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>