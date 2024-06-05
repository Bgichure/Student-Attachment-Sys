<?php
include "config.php";
$sid  = $_SESSION['studentid'];

$result = $conn->query("SELECT * FROM students where uniqueid = '$sid' ");

$array = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <style>
    /* CSS styles */
    body {
      background-color: #f8f9fa; /* Light gray background */
      font-family: Arial, sans-serif; /* Default font */
      margin: 0;
      padding: 0;
    }

    .sidebar {
      position: relative;
    }

    .welcome {
      font-size: 1.5rem;
    }

    .side-nav {
      margin-top: 20px;
    }

    .side-nav-item {
      padding: 10px;
      text-decoration: none;
      color: #000;
    }

    .side-nav-item:hover {
      background-color: #ccc;
    }

    .fa {
      margin-right: 10px;
    }
  </style>
</head>

<body>
  <div class="col col-sm-12 col-md-4 col-lg-2 sidebar py-5">
    <h4 class="text-center welcome">
      <span>Welcome</span> <?php echo $array['fname']." ".$array['lname']; ?>
    </h4>
    <hr>
    <div class="side-nav py-2">
      <a href="index.php" class="side-nav-item">
        <div><i class="fa fa-home mr-3" aria-hidden="true"></i> Dashboard</div>
      </a>
      <a href="tests.php" class="side-nav-item">
        <div><i class="fa fa-list mr-3" aria-hidden="true"></i> Tests</div>
      </a>
      <a href="attachments.php" class="side-nav-item">
        <div><i class="fa fa-map-marker mr-3" aria-hidden="true"></i> Attachment Opportunities</div>
      </a>

      <a href="registerattachment.php" class="side-nav-item">
        <div><i class="fa fa-map-marker mr-3" aria-hidden="true"></i> Register for Attachment</div>
      </a>
      <a href="logbook.php" class="side-nav-item">
        <div><i class="fa fa-map-marker mr-3" aria-hidden="true"></i> Log Book</div>
      </a>
    </div>
  </div>
</body>

</html>
