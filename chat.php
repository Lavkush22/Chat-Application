<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }?>
<?php include_once "header.php"; ?>
  <div class="wrapper">
    <section class="chat-area" >
      <header>
        <?php 
          $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
          $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }else{
            header("location: users.php");
          }?>
        <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <img src="php/images/<?php echo $row['img']; ?>" alt="">
        <div class="details">
          <span style="font-weight: bold;"><?php echo $row['fname']. " " . $row['lname'] ?>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <i class="fas fa-microphone" style="color:black"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <i class="fas fa-phone" style="color:black"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <i class="fas fa-video" style="color:black"></i></span>
          <p style="color:#2E8B57; font-weight: bold;"><?php echo $row['status']; ?> </p>
        </div>
      </header>
      <div class="chat-box" style="background-color:#FFEFD5">
      </div>
      <form action="#" class="typing-area" >
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off" style="border:2px solid gray;" >
        <button style="background-color:blue"><i class="fab fa-telegram-plane" ></i></button>
      </form>
    </section>
  </div>
  <script src="javascript/chat.js"></script>
</body>
</html>
