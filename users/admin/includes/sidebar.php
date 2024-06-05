<?php

session_start();
include "config.php";

if (!isset($_SESSION['adminid'])) {
    // Handle the case when adminid is not set in the session
    // Redirect the user to the login page or handle the situation appropriately
    exit("Admin ID is not set in the session.");
}

$aid = $_SESSION['adminid'];
$result = mysqli_query($conn, "SELECT * FROM admins WHERE uniqueid = '$aid'") or die(mysqli_error($conn));

$array = mysqli_fetch_assoc($result);

?>

<div class="col col-sm-12 col-md-4 col-lg-2 sidebar py-5">
    <h5 class="text-center">
        <span style="color: orange;font-style: italic;font-size: 30px;"> Welcome </span><?php echo $array['firstname'] . " " . $array['lastname'] ?>
    </h5>
    <hr>
    <div class="side-nav py-2">
        <a href="index.php" class="side-nav-item">
            <div> <i class="fa fa-home mr-3" aria-hidden="true"></i> Dashboard</div>
        </a>
        <a href="admins.php" class="side-nav-item">
            <div> <i class="fa fa-home mr-3" aria-hidden="true"></i> Admins</div>
        </a>
        <a href="schoolsupervisors.php" class="side-nav-item">
            <div> <i class="fa fa-home mr-3" aria-hidden="true"></i> School Supervisors</div>
        </a>
        <a href="companysupervisors.php" class="side-nav-item">
            <div> <i class="fa fa-home mr-3" aria-hidden="true"></i> Company Supervisors</div>
        </a>
        <a href="attachments.php" class="side-nav-item">
            <div><i class="fa fa-map-marker mr-3" aria-hidden="true"></i>All Attachment</div>
        </a>
        <a href="addattachment.php" class="side-nav-item">
            <div> <i class="fa fa-home mr-3" aria-hidden="true"></i>Add Attachment</div>
        </a>
        <a href="students.php" class="side-nav-item">
            <div><i class="fa fa-map-marker mr-3" aria-hidden="true"></i>Students</div>
        </a>
        <a href="attachedstudents.php" class="side-nav-item">
            <div><i class="fa fa-map-marker mr-3" aria-hidden="true"></i>Attached Students</div>
        </a>
        <a href="assignsupervisor.php" class="side-nav-item">
            <div><i class="fa fa-list mr-3" aria-hidden="true"></i>Assign Supervisor</div>
        </a>
    </div>
</div>