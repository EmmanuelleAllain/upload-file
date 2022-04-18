<?php
require_once 'form.php';

 if (isset($_POST['picture'])){ ?>
        <p>Picture: <a href="/<?=$uploadFile?>"><img src="/<?= $uploadFile?>"></a></p>
        <?php
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

        
        <h1>Your driver license</h1>
        <div class="container d-flex">
            <img class="img-fluid w-25" src="/<?= $uploadFile?>">
            <div class="container-fluid flex-column">
                <p>Firstname: Homer</p>
                <p>Lastname: Simpson</p>
                <p>Age: 43 years old</p>
            </div>
    </div>