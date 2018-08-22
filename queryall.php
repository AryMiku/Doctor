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
  <style type="text/css">   
  
    #printable { display: block; }  
    
    @media print   
    {   
        #non-printable { display: none; }   
        #printable { display: block; }   
    }   
  
</style> 
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
                <a class="navbar-item " href="checkpeople.php">
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
        $id = $_GET['id'];
        $con=mysqli_connect("localhost","root","","doctor");
        mysqli_query($con,"SET NAMES UTF8");
        $strSQL = "select * from people where id = $id";
        //echo $strSQL;
        $objQuery = mysqli_query($con,$strSQL);
        $objResult = mysqli_fetch_array($objQuery);

        if($objResult['sex'] == "male"){
            $sex2 = "ชาย";
        }
        else{
            $sex2 = "หญิง";
        }

        if($objResult['blood'] == "nothave"){
            $blood2 = "ไม่เคย";
        }
        elseif($objResult['blood'] == "have"){
            $blood2 = "เคย";
        }

        if($objResult['goblood'] == "nohave"){
            $goblood2 = "ไม่เคย";
        }
        elseif($objResult['goblood'] == "have"){
            $goblood2 = "เคย";
        }

        if($objResult['masa'] == "noteat"){
            $masa2 = "ไม่ทาน";
        }
        elseif($objResult['masa'] == "eat"){
            $masa2 = "ทาน";
        }
        if($objResult['fatarus'] == "notknow"){
            $fatarus2 = "ไม่ทราบ";
        }
        elseif($objResult['fatarus'] == "no"){
            $fatarus2 = "ไม่ใช่";
        }
        elseif($objResult['fatarus'] == "other"){
            $fatarus2 = "อื่นๆ";
        }

        $ccomeback = $objResult['comeback'];
        
        if($objResult['comeback'] == "email line thaipost "){
            $comeback2 = "ส่งกลับทาง Email LINE และ ไปรณีย์";
        }
        elseif($objResult['comeback'] == "email line thaipost day"){
            $comeback2 = "ส่งกลับทาง Email, LINE, ไปรณีย์ และ รอรับผล ";
        }
    ?>

    <div class="container">
      <div class="notification has-text-centered">
        รายละเอียดข้อมูล
      </div>
    <div class="columns is-mobile">
        <div class="column is-2" style="background-color:#f7f8f9"></div>
        
        <div class="column " style="background-color:#f7f8f9">
        <table class="table is-fullwidth">
            <tr>
                <th class="has-text-centered">หัวข้อ</th>
                <th class="has-text-centered">รายละเอียด</th>
            </tr>
            <tr>
                <td class="has-text-centered">รหัสประชาชน</td>
                <td class="has-text-centered"><?php echo $objResult['id']?></td>
            </tr>
            <tr>
                <td class="has-text-centered">HN</td>
                <td class="has-text-centered"><?php echo $objResult['HN']?></td>
            </tr>
            <tr>
                <td class="has-text-centered">ชื่อ-สกุล ภาษาไทย</td>
                <td class="has-text-centered"><?php echo $objResult['namethai']?></td>
            </tr>
            <tr>
                <td class="has-text-centered">ชื่อ-สกุล ภาษาอังกฤษ</td>
                <td class="has-text-centered"><?php echo $objResult['nameeng']?></td>
            </tr>
            <tr>
                <td class="has-text-centered">อายุ</td>
                <td class="has-text-centered"><?php echo $objResult['age']?></td>
            </tr>
            <tr>
                <td class="has-text-centered">เพศ</td>
                <td class="has-text-centered"><?php echo $sex2 ?></td>
            </tr>
            <tr>
                <td class="has-text-centered">ประวัติการเคยได้รับเลือด</td>
                <td class="has-text-centered"><?php echo $blood2 ?></td>
            </tr>
            <tr>
                <td class="has-text-centered">รายละเอียดการได้รับเลือด</td>
                <td class="has-text-centered"><?php echo $objResult['bloodhave']?></td>
            </tr>
            <tr>
                <td class="has-text-centered">ประวัติการบริจาคเลือด</td>
                <td class="has-text-centered"><?php echo $goblood2 ?></td>
            </tr>
            <tr>
                <td class="has-text-centered">รายละเอียดการบริจาคเลือด</td>
                <td class="has-text-centered"><?php echo $objResult['gobloodhave']?></td>
            </tr>
            <tr>
                <td class="has-text-centered">ทานมังสวิรัติ</td>
                <td class="has-text-centered"><?php echo $masa2 ?></td>
            </tr>
            <tr>
                <td class="has-text-centered">อาการ</td>
                <td class="has-text-centered"><?php echo $objResult['masahave']?></td>
            </tr>
            <tr>
                <td class="has-text-centered">คนในครอบครัวเป็นธาลัสซีเมีย</td>
                <td class="has-text-centered"><?php echo $fatarus2 ?></td>
            </tr>
            <tr>
                <td class="has-text-centered">รายละเอียดของธาลัสซีเมีย</td>
                <td class="has-text-centered"><?php echo $objResult['fatarushave']?></td>
            </tr>
            <tr>
                <td class="has-text-centered">ช่องทางการติดต่อกลับ</td>
                <td class="has-text-centered"><?php echo strlen($ccomeback) ?></td>
            </tr>
            <tr>
                <td class="has-text-centered">Email</td>
                <td class="has-text-centered"><?php echo $objResult['inputmail']?></td>
            </tr>
            <tr>
                <td class="has-text-centered">LINE ID</td>
                <td class="has-text-centered"><?php echo $objResult['inputline']?></td>
            </tr>
            <tr>
                <td class="has-text-centered">ที่อยู่</td>
                <td class="has-text-centered"><?php echo $objResult['inputadd']?></td>
            </tr>
            <tr>
                <td class="has-text-centered">DCIP</td>
                <td class="has-text-centered"><?php echo $objResult['DCIP']?></td>
            </tr>
            <tr>
                <td class="has-text-centered">MCV</td>
                <td class="has-text-centered"><?php echo $objResult['MCV']?></td>
            </tr>
            <tr>
                <td class="has-text-centered">RBC</td>
                <td class="has-text-centered"><?php echo $objResult['RBC']?></td>
            </tr>
            <tr>
                <td class="has-text-centered">Anisocytasis</td>
                <td class="has-text-centered"><?php echo $objResult['Anisocytasis']?></td>
            </tr>
            <tr>
                <td class="has-text-centered">รายละเอียด Anisocytasis</td>
                <td class="has-text-centered"><?php echo $objResult['Anisocytasishave']?></td>
            </tr>
            <tr>
                <td class="has-text-centered">poikilocytosis</td>
                <td class="has-text-centered"><?php echo $objResult['poikilocytosis']?></td>
            </tr>
            <tr>
                <td class="has-text-centered">รายละเอียดอาการ poikilocytosis</td>
                <td class="has-text-centered"><?php echo $objResult['poikilocytosishave']?></td>
            </tr>
            <tr>
                <td class="has-text-centered">inclusion</td>
                <td class="has-text-centered"><?php echo $objResult['inclusion']?></td>
            </tr>
            <tr>
                <td class="has-text-centered">HbH</td>
                <td class="has-text-centered"><?php echo $objResult['Hbh']?></td>
            </tr>
            <tr>
                <td class="has-text-centered">HB</td>
                <td class="has-text-centered"><?php echo $objResult['HB']?></td>
            </tr>
            <tr>
                <td class="has-text-centered">ข้อเสนอแนะ</td>
                <td class="has-text-centered"><?php echo $objResult['comment']?></td>
            </tr>
            <tr>
                <td class="has-text-centered">ผลลัพธ์ของคุณ</td>
                <td class="has-text-centered"><?php echo $objResult['result']?></td>
            </tr>
            <tr>
                <td class="has-text-centered">ผู้ตรวจสอบ</td>
                <td class="has-text-centered"><?php echo $objResult['usercheck']?></td>
            </tr>
        </table>
        <div id="non-printable" align="center">  
            <span><button class="button is-primary is-outlined" onclick="myFunction2()">Print All</button></span>
            <span><button class="button is-primary is-outlined" onclick="myFunction()">Print User</button></span>
        </div>
    <?php mysqli_close($con); ?>
        </div>

        <div class="column is-2" style="background-color:#f7f8f9"></div>
    </div>

<script>
function myFunction() {
    window.open('checkprint.php?id=<?php echo $id ?>' , 'mypopup' , 'menubar=yes,toolbar=no,location=no,scrollbars=no, status=no,resizable=no,width=1300,height=700,top=20,left=150 ' )
        mypopup.focus();
}

function myFunction2() {
    window.open('checkprint2.php?id=<?php echo $id ?>' , 'mypopup' , 'menubar=yes,toolbar=no,location=no,scrollbars=no, status=no,resizable=no,width=1300,height=700,top=20,left=150 ' )
        mypopup.focus();
}
</script>
    
</div>
</body>
</html>
<?php 
  }
  else{
    header( "location: index.html" );
  };
?>