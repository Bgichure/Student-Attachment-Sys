<?php
session_start();
if (!isset($_SESSION['csupid'])) {
  header("location: login.php");
}
$csupid  = $_SESSION['csupid'];
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Student Attachment System</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="css/index.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="css/login.css" />
  <style>
    header {
      background-color: #343a40;
      padding: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo {
      display: flex;
      align-items: center;
    }

    .logo img {
      width: 45px;
      margin-right: 10px;
    }

    .system-name {
      color: #ffffff;
      margin-right: 20px; /* Adjust the margin-right as needed */
    }

    .title-container {
      flex-grow: 1;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .nav .btn {
      background-color: #007bff;
      color: #ffffff;
    }

    .text-white {
      color: #ffffff;
      margin: 0;
      text-align: center;
      margin-left: 386px;
    
      /* Remove any margin */
    }
  </style>
</head>

<body>
<div class="main-wrapper">
    <header>
      <div class="logo">
        <img src="images/logo.png" class="img-responsive" alt="logo">
        <span class="system-name">ACE-CAMPUS</span>
        <div class="title-container">
          <h2 class="text-white">Student Attachment System</h2>
        </div>
        <div class="nav">
        <a href="logout.php" class="btn" style="background-color: orange;">Logout</a>
      </div>
      </div>
    </header>