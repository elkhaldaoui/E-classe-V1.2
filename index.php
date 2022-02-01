<!DOCTYPE html>
<html lang="en">
<?php
include 'config/db.php'
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sign-in.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>SIGN-IN</title>
</head>
<body>
    <div style="max-width: 400px; min-width: 300px;" class="container bg-white shadow-lg">
        <h1 class="titre m-5"><span class="text-info p-2">|</span>E-classe</h1>
        <h2 class="text-center mt-5">Sign In</h2>
        <p class="text-center mb-5">Enter your credentials to access your account</p>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control opacity-50" placeholder="Enter your email">
        </div>
        <div class="mb-5">
            <label>Password</label>
            <input type="password" class="form-control opacity-50" placeholder="Enter your password">
        </div>
        <a class="nav-link active" href="dashboard.php">
            <div class="d-grid">
                <button class="btn btn-info text-white" type="button">SIGN IN</button>
            </div>
        </a>
        <div class="mt-4 text-center">
            <p>Forgot your password?<a href="#"> Reset Password</a></p>
        </div>
    </div>

    <?php
include 'assets/js.php';
?>