<?php
// Start the session
session_start();
?>
<?php 
  if($_SESSION["super"] == "1" || $_SESSION["super"] == "0")
  {
?>
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
                <a class="navbar-item " href="index2.php">
                    หน้าหลัก
                </a>
                <a class="navbar-item " href="checkpeople.html">
                  เช็คผลตรวจ
                </a>
                <a class="navbar-item " href="checkday.php">
                  เช็คดูยอดของการลงทะเบียน
                </a>
                <?php if($_SESSION["super"] == "1"){ ?><a class="navbar-item " href="newuser.php">
                  เพิ่ม User ในระบบ
                </a><?php } ?>
              </div>
            </div>
          </div>
    
          <div class="navbar-end">
            <div class="navbar-item">
              <div class="field is-grouped">
                <p class="control">
                  <a class="button is-primary" href="index.html">
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

          $strSQL3 = "select * from people where ((date = '$date') AND (checkcheck = 'true')) order by abs(HN) ASC";
          //echo $strSQL;
       

        if($sort == 1){
          $strSQL = "select * from people where date = '$date2' ORDER BY HN ASC";
        }
        
        //echo $strSQL;
        $objQuery = mysqli_query($con,$strSQL);
    ?>

    <form action="checkday.php" method="post">
    <div class="container">
      <div class="notification has-text-centered">
        ค้นหาข้อมูล (สีเขียวคือตรวจสอบแล้ว || สีแดงคือยังไม่ตรวจสอบ)
      </div>

      <div class="columns is-mobile">
        <div class="column" style="margin-left:30%;">
            <div class="field has-addons has-text-centered" >
              <div class="control">
                  <input class="input has-text-centered" type="date" name="date" style="width:400px">
              </div>
              <div class="control">
                  <button class="button is-link">ค้นหา</button>
              </div>
              </div>
        </div class="column">
        <?php 
          $conunt = "select COUNT(id) AS eiei from people where date = '$date'";
          //echo $conunt;
          $objQuery = mysqli_query($con,$conunt);
          $objResult = mysqli_fetch_array($objQuery);
          
        ?>
          ข้อมูลทั้งหมดในวันที่เลือก <?php echo $objResult['eiei']; ?> จำนวน
        <div>
        
        </div>
      </div>
      <br><br>

    <div class="columns is-mobile">
        
        <div class="column" style="background-color:#51ff65">
            </form>
            
            <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
  <tr>
    <th width="98"> <div align="center"><a href="checkday.php?sort=1&date=<?php echo $date; ?>">HN</a></div></th>
    <th width="91"> <div align="center">เลขบัตรประชาชน </div></th>
    <th width="198"> <div align="center">ชื่อ - นามสกุล </div></th>
    <th width="59"> <div align="center">อายุ </div></th>
    <th width="59"> <div align="center">เพศ </div></th>
    <th width="71"> <div align="center">ดูข้อมูลเพิ่มเติม </div></th>
    <?php if($_SESSION["super"] == "1"){ ?><th width="71"> <div align="center">แก้ไขข้อมูล </div></th> <?php }; ?>
    <?php if($_SESSION["super"] == "1"){ ?><th width="71"> <div align="center">ลบข้อมูล </div></th> <?php }; ?>
  </tr>
        <?php
            $objQuery = mysqli_query($con,$strSQL3);
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
        <td><div align="center"><a href="queryall.php?id=<?php echo $objResult["id"];?>">ดูข้อมูลเพิ่มเติม</a></div></td>
        <?php if($_SESSION["super"] == "1"){ ?><td><div align="center"><a href="edit.php?id=<?php echo $objResult["id"];?>">แก้ไข</a></div></td><?php }; ?>
        <?php if($_SESSION["super"] == "1"){ ?><td><div align="center"><a href="Delete1.php?id=<?php echo $objResult["id"];?>" onClick="return confirm('คุณต้องการที่จะลบข้อมูลนี้หรือไม่ ?');">ลบข้อมูล</a></div></td><?php }; ?> 
    </tr>
    <?php
        }
    ?>
    </table>
   
    </div>
    </div>
        <br><br><br>
    <div class="columns is-mobile">
        <div class="column" style="background-color:#ff1928">
        <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
          <tr>
            <th width="98"> <div align="center"><a href="checkday.php?sort=1&date=<?php echo $date; ?>">HN</a></div></th>
            <th width="91"> <div align="center">เลขบัตรประชาชน </div></th>
            <th width="198"> <div align="center">ชื่อ - นามสกุล </div></th>
            <th width="97"> <div align="center">อายุ </div></th>
            <th width="59"> <div align="center">เพศ </div></th>
            <th width="71"> <div align="center">ดูข้อมูลเพิ่มเติม </div></th>
            <?php if($_SESSION["super"] == "1"){ ?><th width="71"> <div align="center">แก้ไขข้อมูล </div></th><?php }; ?>
            <?php if($_SESSION["super"] == "1"){ ?><th width="71"> <div align="center">ลบข้อมูล </div></th><?php }; ?>
          </tr>
        <?php
            $strSQL2 = "select * from people where ((date = '$date') AND (checkcheck != 'true')) order by abs(HN) ASC";
            //echo $strSQL2;
            $objQuery = mysqli_query($con,$strSQL2);
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
              <td><div align="center"><a href="queryall.php?id=<?php echo $objResult["id"];?>">ดูข้อมูลเพิ่มเติม</a></div></td>
              <?php if($_SESSION["super"] == "1"){ ?><td><div align="center"><a href="edit.php?id=<?php echo $objResult["id"];?>">แก้ไข</a></div></td><?php }; ?>
              <?php if($_SESSION["super"] == "1"){ ?><td><div align="center"><a href="Delete1.php?id=<?php echo $objResult["id"];?>" onClick="return confirm('คุณต้องการที่จะลบข้อมูลนี้หรือไม่ ?');">ลบข้อมูล</a></div></td> <?php }; ?>
          </tr>
      <?php
          }
      ?>
      </table>
        </div>
    </div>
    
    
    
</div>

 <?php
        mysqli_close($con);
        ?>
</body>
</html>
<?php 
  }
  else{
    header( "location: index.html" );
  };
?>