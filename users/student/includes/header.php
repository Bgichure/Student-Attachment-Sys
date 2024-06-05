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
    .header {
      padding: 20px;
      background-color: #343a40;
      color: #ffffff;
    }

    .menu-icon {
      float: left;
      margin-right: 20px;
    }

    .logo img {
      float: left;
      width: 45px;
      position: relative;
      left: 20px;
    }

    .text-white {
      margin-top: 0;
    }

    .nav {
      float: right;
    }

    .nav .btn {
      background-color: orange;
      color: #ffffff;
    }
  </style>
</head>

<body>
  <div class="main-wrapper">
    <header class="header py-3">
      <div class="menu-icon"><i class="fa fa-bars"></i></div>
      <div class="logo">
        <img src="images/logo.png" class="img-responsive" alt="logo">
      </div>
      <h3 class="text-white">Student Attachment System</h3>
      <div class="nav">
        <?php if (isset($_SESSION['studentid'])) : ?>
          <a href="logout.php" class="btn">Logout</a>
        <?php endif ?>
      </div>
    </header>

    