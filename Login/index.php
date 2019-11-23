<?php
session_start();
$aEmail = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gabriela's IS 218 Project</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">

    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <!--<link rel="stylesheet" type="text/css" href="../css/loginstylesheet.css">-->
</head>
<body>
<div class=" modal-dialog text-center ">
    <div class="col-sm-8 main-section">
        <div class="modal-content">
            <div class="col-12 logo-img">
                <img src="../img/logo.png">
            </div>
            <form class="col-12" action="login.php" method="post">
                <div class="form-group">

                    <input class="form-control" type="email" id="email" name="email" placeholder="Enter Email"></label>
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" id="password" name="password" placeholder="Enter Password"></label>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn"><i class="fas fa-sign-in-alt"></i>Submit</button>
                </div>
            </form>
            <div class="col-12 forgot">
                <a href="#">Forgot Password?</a>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></link>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>