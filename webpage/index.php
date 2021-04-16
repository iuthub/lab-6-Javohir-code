<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>validation forms</title>
</head>
<body>
<?php

$name = "";
$email = "";
$username = "";
$address = "";
$city = "";

$isNameValid = true;
$isEmailValid = true;
$isUserNameValid = true;
$isAddressValid = true;
$isCityValid = true;

if ($_SERVER["REQUEST_METHOD"] == 'POST')
{
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $username = $_REQUEST['username'];
    $address = $_REQUEST['address'];
    $city = $_REQUEST['city'];

    $isNameValid = preg_match('/^([A-Z][a-z][a-z \-]{2,})*([a-z]{2,})$/i', $name);
    $isEmailValid = preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email);
    $isUserNameValid = preg_match('/^([a-z][a-z \-]{2,})*([a-z]{5,})$/i', $username);
    $isAddressValid = preg_match('/^([a-z][a-z \-]{2,})*([a-z]{5,})$/i', $address);
    $isCityValid = preg_match('/^([a-z][a-z \-]{2,})*([a-z]{5,})$/i', $city);


}
?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>validation forms</h1>
            <form action="index.php" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">name</label>
                    <input type="text" class="form-control <?= $isNameValid?'':'is-invalid' ?>" id="name" name="name" value="<?= $name ?>" placeholder="please! enter name">
                    <div class="invalid-feedback">
                        please! enter name
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">email</label>
                    <input type="text" class="form-control <?= $isEmailValid?'':'is-invalid' ?>" id="email" name="email" value="<?= $email ?>" placeholder="please! enter email">
                    <div class="invalid-feedback">
                        please! enter email
                    </div>
                </div>

                <div class="mb-3">
                    <label for="username" class="form-label">username</label>
                    <input type="text" class="form-control <?= $isUserNameValid?'':'is-invalid' ?>" id="username" name="username" value="<?= $username ?>" placeholder="please! enter username">
                    <div class="invalid-feedback">
                        please! enter username
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">address</label>
                    <input type="text" class="form-control <?= $isAddressValid?'':'is-invalid' ?>" id="address" name="address" value="<?= $address ?>" placeholder="please! enter address">
                    <div class="invalid-feedback">
                        please! enter address
                    </div>
                </div>

                <div class="mb-3">
                    <label for="city" class="form-label">city</label>
                    <input type="text" class="form-control <?= $isCityValid?'':'is-invalid' ?>" id="city" name="city" value="<?= $city ?>" placeholder="please! enter city">
                    <div class="invalid-feedback">
                        please! enter city
                    </div>
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-primary" value="submit">
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>