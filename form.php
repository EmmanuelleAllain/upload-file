<?php

if($_SERVER["REQUEST_METHOD"] === "POST" ){

    $uploadDir = 'uploads/';
    $uploadFile = $uploadDir . basename($_FILES['picture']['name']);

    $extension = pathinfo($_FILES['picture']['name'], PATHINFO_EXTENSION);
    $authorizedExtensions = ['jpg', 'jpeg', 'png'];
    $maxFileSize = 1000000;

    if( (!in_array($extension, $authorizedExtensions))){
        $errors[] = 'Please select a Jpg or Jpeg or Png file!';
        echo implode($errors);
    }

    if( file_exists($_FILES['picture']['tmp_name']) && 
    filesize($_FILES['picture']['tmp_name']) > $maxFileSize){
        $errors[] = "Your file cannot be up than 1M";
        echo implode($errors);
    }

    if(empty($errors)){
        $uploadFile = $uploadDir . uniqid('', true) . ".$extension";
        move_uploaded_file($_FILES['picture']['tmp_name'], $uploadFile);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <form action="driverlicense.php" method="POST" enctype="multipart/form-data" class="container">
        <p class="form-group">
            <label for="picture">Upload your profile picture</label>
            <input type="file" name="picture" id="picture" class="form-control">
            <button name="send">Upload</button>
        </p>
    </form>

</body>
</html>