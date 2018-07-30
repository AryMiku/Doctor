<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>กรอกประวัติ</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
</head>

<?php 
    error_reporting(0);
    $DCIP = $_POST['DCIP'];
    $MCV = $_POST['MCV'];
    $Anisocy = $_POST['Anisocyfosis'];
    $haveinani = $_POST['haveinani'];
    $Poiki = $_POST['Poikilocytosis'];
    $havepoiki = $_POST['havepoiki'];
    $HBH = $_POST['HBH'];
    $HB = $_POST['HB'];
    $RBC = $_POST['RBC'];
    $body = $_POST['body'];
    $comment = $_POST['comment'];
    $id = $_POST['id'];
    //echo $id;
    if($RBC == ""){
        $RBC2 = "normocytic";
    }
    else{
        $RBC2 = "normochormic";
    }

    if($Anisocy == "0"){
        $Anisocy2 = "0";
    }
    else if($Anisocy == "1"){
        $Anisocy2 = "1+";
    }
    else if($Anisocy == "2"){
        $Anisocy2 = "2+";
    }
    else if($Anisocy == "3"){
        $Anisocy2 = "3+";
    }
    else if($Anisocy == "4"){
        $Anisocy2 = "4+";
    }

    if($Poiki == "0"){
        $Poiki2 = "0";
    }
    else if($Poiki == "1"){
        $Poiki2 = "1+";
    }
    else if($Poiki == "2"){
        $Poiki2 = "2+";
    }
    else if($Poiki == "3"){
        $Poiki2 = "3+";
    }
    else if($Poiki == "4"){
        $Poiki2 = "4+";
    }

    //ส่วนโชว์ผลลัพท์ทั้งหมด
    //echo "DCIP : $DCIP <br>";
    //echo "MCV : $MCV <br>";
    //echo "RBC : $RBC2 <br>";
    //echo "Anisocytasis : $Anisocy2 <br>";
    //echo "ลักษณะที่พบของ Anisocytasis : $haveinani <br>";
    //echo "Poikilocytosis : $Poiki2 <br>";
    //echo "ลักษณะที่พบของ Poikilocytosis : $havepoiki <br>";
    //echo "Inclusion Body : $body <br>";
    //echo "HbH : $HBH <br>";
    //echo "Hb : $HB <br>";
    //echo "ข้อแนะนำ : $comment <br>";

    ///

    if($DCIP == "positive") //ทำฝั่งซ้าย
    {
        if($MCV >= 80){
            $text = "มีโอกาสเป็นพาหะ Hb E"; //คำตอบที่ 4
        }
        else{
            if($MCV >= 70 && $MCV <= 79){
                if($RBC == "true"){
                    $text =  "มีโอกาสเป็นพาหะ Hb E"; //คำตอบที่ 4
                }
                else{
                    if($Anisocy < 1 && $Poiki < 1){ //อันนี้เดี๋ยวเช็คคำตอบอีกที
                        $text =  "มีโอกาสเป็นพาหะ Hb E"; //คำตอบที่ 4
                    }
                    else{
                        if($body == "Done"){
                            if($HBH == "Found"){
                                $text =  "เป็นธาลัสซีเมีย ชนิด Hb H Disease"; //คำตอบที่ 5
                            }
                            else{
                                $text = "เป็นพาหะธาลัสซีเมียชนิดรุนแรง"; //คำตอบที่ 6
                                $texttext = "<h3>คำแนะนำ</h3> β + +hal(Womo)";
                                $texttext .= "หรือ β -thal / Hb E หรือ Homo E";
                            }
                        }
                        else{
                            $text = "เป็นพาหะธาลัสซีเมียชนิดรุนแรง"; //คำตอบที่ 6
                            $texttext = "<h3>คำแนะนำ</h3> β + +hal(Womo)";
                            $texttext .= "หรือ β -thal / Hb E หรือ Homo E";
                        }
                    }
                }
            }
            else{
                if($MCV <= 70){
                    if($Anisocy < 1 && $Poiki < 1){ //อันนี้เดี๋ยวเช็คคำตอบอีกที
                        $text = "มีโอกาสเป็นพาหะ Hb E"; //คำตอบที่ 4
                    }
                    else{
                        if($body == "Done"){
                            if($HBH == "Found"){
                                $text = "เป็นธาลัสซีเมีย ชนิด Hb H Disease"; //คำตอบที่ 5
                            }
                            else{
                                $text = "เป็นพาหะธาลัสซีเมียชนิดรุนแรง"; //คำตอบที่ 6
                                $texttext = "<h3>คำแนะนำ</h3> β + +hal(Womo)";
                                $texttext .= "หรือ β -thal / Hb E หรือ Homo E";
                            }
                        }
                        else{
                            $text = "เป็นพาหะธาลัสซีเมียชนิดรุนแรง"; //คำตอบที่ 6
                            $texttext = "<h3>คำแนะนำ</h3> β + +hal(Womo)";
                            $texttext .= "หรือ β -thal / Hb E หรือ Homo E";
                        }
                    }
                }
            }
        }
    }
    else //ทำฝั่งขวา
    {
        if($MCV >= 80){
            if($HB >= 12.5){
                $text = "เป็นปกติ";
                $texttext = "";
            }
            else{
                $text = "มีภาวะซีดเล็กน้อยไม่ทราบสาเหตุ";
                $texttext = "<h3>คำแนะนำ</h3> Irordef : ธาตุเหล็ก";
                $texttext .= "หรือ Delta -thal / Hb E หรือ Homo E";
            }
        }
        else{
            if($MCV >= 72 && $MCV < 80){
                $text = "มีภาวะซีดเล็กน้อย"; //คำตอบที่ 2
            }
            else{
                if($MCV < 72){
                    if($Anisocy < 1 && $Poiki < 1){ //อันนี้เดี๋ยวเช็คคำตอบอีกที
                        $text = "มีโอกาศเป็นพาหะธาลัสซีเมีย";
                    }
                    else{
                        $text = "เป็นธาลัสซีเมีย B+ -thal (Homo)"; //คำตอบที่ 6
                        $texttext = "";
                    }
                }
            }
        }
    }

?>

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

    <div class="container">
      <div class="notification">
        <center>ผลลัพธ์</center>
      </div>
      <div class="columns is-mobile">
        
        <div class="column" style="background-color:#f7f8f9">
          <div>
            <table class="table is-fullwidth">
               <tr>
                 <th class="has-text-centered">หัวข้อ</th>
                 <th class="has-text-centered">ผลลัพท์ที่ได้</th>
               </tr>
               <tr>
                 <td class="has-text-centered">DCIP</td>
                 <td class="has-text-centered"><?php echo $DCIP; ?></td>
               </tr>
               <tr>
                <td class="has-text-centered">MCV</td>
                <td class="has-text-centered"><?php echo $MCV; ?></td>
               </tr>
               <tr>
                <td class="has-text-centered">RBC</td>
                <td class="has-text-centered"><?php echo $RBC2; ?></td>
               </tr>
               <tr>
                <td class="has-text-centered">Anisocytasis </td>
                <td class="has-text-centered"><?php echo $Anisocy2; ?></td>
               </tr>
               <tr>
                <td class="has-text-centered">ลักษณะที่พบของ Anisocytasis</td>
                <td class="has-text-centered"><?php echo $haveinani; ?></td>
               </tr>
               <tr>
                <td class="has-text-centered">Poikilocytosis</td>
                <td class="has-text-centered"><?php echo $Poiki2; ?></td>
               </tr>
               <tr>
                <td class="has-text-centered">ลักษณะที่พบของ Poikilocytosis</td>
                <td class="has-text-centered"><?php echo $havepoiki; ?></td>
               </tr>
               <tr>
                <td class="has-text-centered">Inclusion Body</td>
                <td class="has-text-centered"><?php echo $body; ?></td>
               </tr>
               <tr>
                <td class="has-text-centered">HbH</td>
                <td class="has-text-centered"><?php echo $HBH; ?></td>
               </tr>
               <tr>
                <td class="has-text-centered">Hb</td>
                <td class="has-text-centered"><?php echo $HB; ?></td>
               </tr>
               <tr>
                <td class="has-text-centered">ข้อแนะนำ</td>
                <td class="has-text-centered"><?php echo $comment; ?></td>
               </tr>
            </table>
        </div>
    </div>  
      </div>
      <div class="notification" style="margin: 40px;">
        <center>ผลลัพธ์ : <?php echo $text.$texttext; ?></center>
      </div>
    </div>
    <?php 
        $con=mysqli_connect("localhost","root","","doctor");
        // Check connection
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        mysqli_query($con,"SET NAMES UTF8");
        $strSQL = "update people set DCIP='$DCIP' ,MCV='$MCV' ,RBC='$RBC2' ,Anisocytasis='$Anisocy2' ,Anisocytasishave='$haveinani' ,poikilocytosis='$Poiki2' ,poikilocytosishave='$havepoiki' 
        ,inclusion='$body' ,Hbh='$HBH' ,HB='$HB' ,comment='$comment',result='$text' where id='$id'";
        //echo $strSQL;
        $result = mysqli_query($con,$strSQL);
    ?>
</body>

</html>