<?php
error_reporting(0);
?>
<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
  <div class="wrapper" style="background-color:#FFEBCD">
    <section class="form signup">
      <header><center style="font-family:Times New Roman">Chat with Friends</center></header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
          <div class="field input">
            <label>First Name</label>
            <input type="text" name="fname" placeholder="First name" required>
            <i class="fas fa-user" style="color:black"></i>
          </div>
          <div class="field input">
            <label>Last Name</label>
            <input type="text" name="lname" placeholder="Last name" required>
            <i class="far fa-user" style="color:black"></i>
          </div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
          <i class="fas fa-envelope" style="color:black"></i>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter new password" required>
          <i class="fas fa-eye" style="color:black"></i>
        </div>
        <div class="field image">
          <label>Select Image</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value=" SignUp & Continue to Chat" style="background-color:blue; font-weight: bold;">
        </div>
      </form>
      <div class="link"><span style=" font-weight: bold;">Already signed up</span> <a href="login.php"> <br><span style="color:blue;font-weight: bold;">Login now</span></a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
