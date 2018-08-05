<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>ลงทะเบียนคน</title>
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
</head>

<body>

<nav class="navbar ">
    <div class="navbar-brand">
      <a class="navbar-item">
        <img src="images.png" width="112" height="28">
      </a>
    </div>

            <div id="navMenubd-example" class="navbar-menu">
        <div class="navbar-start">
            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link  is-active" href="#">
                Menu
              </a>
              <div class="navbar-dropdown ">
                <a class="navbar-item " href="index2.html">
                    หน้าหลัก
                </a>
                <a class="navbar-item " href="checkpeople.html">
                  เช็คผลตรวจ
                </a>
                <a class="navbar-item " href="checkday.php">
                  เช็คดูยอดของการลงทะเบียน
                </a>
                <a class="navbar-item " href="newuser.php">
                  เพิ่ม User ในระบบ
                </a>
              </div>
            </div>
          </div>
    
          <div class="navbar-end">
            <div class="navbar-item">
              <div class="field is-grouped">
                <p class="control">
                  <a class="button is-primary" href="login.html">
                    <span class="icon">
                      <i class="fas fa-sign-out-alt"></i>
                    </span>
                    <span>ออกจากระบบ</span>
                  </a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </nav>


  <div class="container">
    <div class="notification" style="font-size: 50px">
      <center>เพิ่ม User เข้าสู่ระบบ</center>
    </div>
    <div class="columns is-mobile">
      <div class="column" style="background-color:#f7f8f9">

      </div>
      <div class="column" style="background-color:#f7f8f9">
        <form action="newuserdb.php" method="POST">
        <div class="field">
          <label class="label">UserName</label>
          <input class="input" type="text" placeholder="กรุณาสร้าง User ใหม่" name="username" required>
        </div>

        <div class="field">
          <label class="label">Password</label>
          <input class="input" type="password" placeholder="กรุณากรอกรหัส" name="password" required>
        </div>
        <br>
        <div class="field is-grouped">
          <div class="control">
            <button class="button is-link">Submit</button>
          </div>
          <div class="control">
            <button class="button is-text">Cancel</button>
          </div>
        </div>

      </form>
      </div>
      <div class="column" style="background-color:#f7f8f9">
      </div>
    </div>
  </div>



  <script src='https://use.fontawesome.com/releases/v5.0.0/js/all.js'></script>
</body>

</html>