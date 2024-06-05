<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>ACE-CAMPUS | Student Attachment System</title>
  <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="css/index.css" />
</head>
<body>
  <div class="main-wrapper">
    <header class="header">
      <div class="logo">
        <img src="logo.png" class="img-responsive" alt="logo">
        <span class="system-name">ACE-CAMPUS</span>
      </div>
      <button class="close-button" onclick="closeTab()">Close</button>
    </header>

    <section class="description-section" style="background-image: url('img1.jpg');">
      <div class="overlay"></div>
      <div class="description-content">
        <h2>Welcome to ACE-CAMPUS</h2>
        <p>Streamlining Industrial Attachment Assessment</p>
        <p class="description">ACE-CAMPUS is a revolutionary web-based application designed to modernize and enhance the assessment process for industrial attachments within the campus setting. It acts as a comprehensive and innovative solution that bridges the gap between theory and practical application, fostering a collaborative and mentorship-oriented environment for students, industrial supervisors, lecturers, and administrators.</p>
      </div>
    </section>

    <div class="main">
      <div style="min-height: 250px">
        <h3 class="logintext">Login as:</h3>
        <div class="button-container">
          <a href="users/student/login.php" class="btn btn-success btn-lg">Student</a>
          <a href="users/supervisor/login.php" class="btn btn-primary btn-lg my-2">School Supervisor</a>
          <a href="users/companysupervisor/login.php" class="btn btn-success btn-lg">Company Supervisor</a>
          <a href="users/admin/login.php" class="btn btn-warning btn-lg">Admin</a>
        </div>
      </div>
    </div>

    <footer class="footer">
      <div class="container text-center">
        <p class="text-muted">&copy; 2024 ACE-CAMPUS. All rights reserved.</p>
      </div>
    </footer>
  </div>

  <script>
    function closeTab() {
      window.close();
    }
  </script>
</body>
</html>
