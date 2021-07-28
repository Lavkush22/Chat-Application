<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper"style="background-color:#FFEBCD">
    <section class="form login">
      <header><center style="font-family:Times New Roman">Chat with Friends</center></header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
          <i class="fas fa-envelope" style="color:black"></i>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password" required>
          <i class="fas fa-eye" style="color:black"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat" style="background-color:blue; font-weight: bold;">
        </div>
      </form>
      <div class="link"><span style=" font-weight: bold;">Not yet signed up </span><a href="index.php"><br><span style="color:blue;font-weight: bold;">Signup now</span></a></div>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
