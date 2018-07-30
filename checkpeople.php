<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>กรอกประวัติ</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
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
                <a class="navbar-item " href="checkpeople.php">
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

  <?php 
        error_reporting(0);
        $id = $_POST['id'];
        $date = $_POST['date'];
        $name = $_POST['name'];
        $HN = $_POST['HN'];
        $sort = $_GET['sort'];
        $date2 = $_GET['date'];
        $con=mysqli_connect("localhost","root","","doctor");
            // Check connection
            if (mysqli_connect_errno())
            {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
          mysqli_query($con,"SET NAMES UTF8");
          $strSQL = "SELECT * FROM people WHERE ((namethai LIKE '%".$_POST["sserch"]."%' or HN LIKE '%".$_POST["sserch"]."%' or id LIKE '%".$_POST["sserch"]."%') AND checkcheck !='true')";
          //echo $strSQL;

        if($sort == 1){
          $strSQL = "select * from people where date = '$date2' ORDER BY HN ASC";
        }
        
        //echo $strSQL;
        $objQuery = mysqli_query($con,$strSQL);
    ?>

    <form action="checkpeople.php" method="post">
    <div class="container">
      <div class="notification has-text-centered">
        ค้นหาข้อมูล (ข้อมูลในนี้จะมีแค่คนที่ยังไม่ได้ตรวจเท่านั้น)
      </div>

    <div class="columns is-mobile">
        
        <div class="column" style="background-color:#f7f8f9">
          <div class="columns">
            
            <div class="column" style="margin-left:30%;">
            <div class="field has-addons has-text-centered" >
              <div class="control">
                  <input class="input has-text-centered" type="text" placeholder="ค้นหาจาก HN เลขบัตรประชาชน และ ชื่อ-นามสกุล" name="sserch" style="width:400px"  maxlength="13">
              </div>
              <div class="control">
                  <button class="button is-link">ค้นหา</button>
              </div>
              </div>
            </div>
          </div>
          <div class="columns">
          </div>
            </form>
            <br><br>
            <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
  <tr>
    <th width="98"> <div align="center"><a href="checkday.php?sort=1&date=<?php echo $date; ?>">HN</a></div></th>
    <th width="91"> <div align="center">เลขบัตรประชาชน </div></th>
    <th width="198"> <div align="center">ชื่อ - นามสกุล </div></th>
    <th width="97"> <div align="center">อายุ </div></th>
    <th width="59"> <div align="center">เพศ </div></th>
    <th width="71"> <div align="center">ตรวจข้อมูล </div></th>
    <th width="71"> <div align="center">ลบข้อมูล </div></th>
  </tr>
        <?php
            while($objResult = mysqli_fetch_array($objQuery))
        {
          if($objResult["sex"] == "male"){
            $name2 = "ชาย";
          }
          else{
            $name2 = "หญิง";
          }
        ?>
    <tr>
        <td><div align="center"><?php echo $objResult["HN"];?></div></td>
        <td><div align="center"><?php echo $objResult["id"];?></div></td>
        <td><div align="center"><?php echo $objResult["namethai"];?></div></td>
        <td><div align="center"><?php echo $objResult["age"];?></div></td>
        <td><div align="center"><?php echo $name2; ?></div></td>
        <td><div align="center"><a href="edit.php?id=<?php echo $objResult["id"];?>">แก้ไข</a></div></td>
        <td><div align="center"><a href="Delete1.php?id=<?php echo $objResult["id"];?>" onClick="return confirm('คุณต้องการที่จะลบข้อมูลนี้หรือไม่ ?');">ลบข้อมูล</a></div></td> 
    </tr>
    <?php
        }
    ?>
    </table>
    <?php
        mysqli_close($con);
        ?>
    </div>
    </div>
    
    
    
</div>
</body>
</html>