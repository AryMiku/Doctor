<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<style>
    #fisrt{
        text-align: right;
    }
    #logo{
        width : 200px;
        height : 200px;
    }

    #printable { display: block; }  
    
    @media print   
    {   
        #non-printable { display: none; }   
        #printable { display: block; }   
    }   

</style>
<body>
    <?php 
        $id = $_POST['id'];
        $nameprint = $_POST['nameprint'];
        $con=mysqli_connect("localhost","root","","doctor");
        // Check connection
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        mysqli_query($con,"SET NAMES UTF8");
        $strSQL = "select * from people where id = '$id'";
        //echo $strSQL;
        $result = mysqli_query($con,$strSQL);
        $objResult = mysqli_fetch_array($result,MYSQLI_ASSOC);
        mysqli_close($con);

        if($objResult["result"] == "มีโอกาสเป็นพาหะธาลัสซีเมียชนิด Hemoglobin E"){
            $text1 = "พบได้ประมาณ 20-25% ในประเทศไทย สามารถพบภาวะซีดเล็กน้อยจนถึงซีดปานกลาง";
            $text2 = "-	หลีกเลี่ยงปัจจัยที่ทำให้มีการทำลายเม็ดเลือดแดง เช่น งดสูบบุหรี่ งดดื่มสุรา <br>
            -	ควรได้รับการตรวจยืนยันเพิ่มเติม ด้วยการทำ Hemoglobin typing <br>
            -	กรณีที่เป็นพาหะธาลัสซีเมียชนิด Hemoglobin E จะไม่เป็นอันตราย สามารถดำรงชีวิตได้ตามปกติ <br>
            -	กรณีที่เป็น Homozygous Hb E จะแสดงอาการซีดระดับปานกลาง หากเกิดภาวะแทรกซ้อนที่มีผล <br>
            ต่อการทำลายเม็ดเลือดแดง อาจมีอาการซีดที่รุนแรงขึ้น ควรรีบพบแพทย์ และแจ้งสภาวะของตนเองให้แพทย์ทราบทุกครั้ง <br>
            -	ควรได้รับการตรวจก่อนตั้งครรภ์  เพื่อลดโอกาสในการให้กำเนิดบุตรที่เป็นโรคธาลัสซีเมียชนิดรุนแรง <br>";
        }
        elseif($objResult["result"] == "เป็นโรคธาลัสซีเมียชนิด Hb H disease"){
            $text1 = "กลุ่มโรคธาลัสซีเมียชนิดรุนแรง ได้แก่ Hb H disease, Beta thalassemia ชนิด Homozygous, <br>
            Beta-thalassemia/Hb E มีภาวะซีดปานกลางถึงซีดอย่างรุนแรง";
            $text2 = "-	ควรได้รับการตรวจยืนยันเพิ่มเติม ด้วยการทำ Hemoglobin typing หรือการตรวจ DNA ที่โรงพยาบาล <br>
            -	กรณีที่เป็น Hb H disease ควรได้รับการตรวจยืนยันด้วยการตรวจ DNA ที่โรงพยาบาล พบภาวะซีด <br>
            เล็กน้อยถึงปานกลาง และควรเฝ้าระวังการเกิดภาวะเม็ดเลือดแดงแตกเฉียบพลัน ซึ่งเกิดขึ้นเมื่อ <br>
            ผู้ป่วยเป็นไข้สูง หรือเกิดการติดเชื้อ ทำให้มีอาการซีดลงอย่างรวดเร็วและรุนแรงจนต้องได้รับเลือด <br>
            -	หลีกเลี่ยงปัจจัยที่ทำให้มีการทำลายเม็ดเลือดแดง เช่น งดสูบบุหรี่ งดดื่มสุรา <br>
            -	ควรรับประทานอาหารที่ช่วยต้านอนุมูลอิสระภายในเซลล์ เช่น ผัก ผลไม้ <br>
            -	ไม่ควรรับประทานยาเพิ่มธาตุเหล็กเอง ควรปฏิบัติตามคำแนะนำของแพทย์ เพราะคนในกลุ่มนี้จะ <br>
            พบการดูดซึมเหล็กมากกว่าปกติ ทำให้เหล็กไปสะสมตามร่างกายและเกิดการทำลายอวัยวะภายในได้ <br>
            -	ควรได้รับการตรวจก่อนตั้งครรภ์ เข้ารับการปรึกษาจากแพทย์ และทำการตรวจชนิดฮีโมโกลบิน <br>
            หรือ DNA ของคู่สมรส เพื่อลดโอกาสเสี่ยงในการให้กำเนิดบุตรที่เป็นโรคธาลัสซีเมีย";
        }
        elseif($objResult["result"] == "เป็นโรคธาลัสซีเมียชนิดรุนแรง"){
            $text1 = "กลุ่มโรคธาลัสซีเมียชนิดรุนแรง ได้แก่ Hb H disease, Beta thalassemia ชนิด Homozygous, <br>
            Beta-thalassemia/Hb E มีภาวะซีดปานกลางถึงซีดอย่างรุนแรง";
            $text2 = "-	ควรได้รับการตรวจยืนยันเพิ่มเติม ด้วยการทำ Hemoglobin typing หรือการตรวจ DNA ที่โรงพยาบาล <br>
            -	กรณีที่เป็น Beta thalassemia ชนิด Homozygous หรือ Beta-thalassemia/Hb E ควรได้รับการตรวจ <br>
            ยืนยันด้วย Hemoglobin typing พบภาวะซีดมาก มีอาการอ่อนเพลีย เหนื่อยง่าย อาจมีตับโตม้ามโต <br>
            ซึ่งต้องได้รับเลือดบ่อยและเป็นประจำสม่ำเสมอ เพื่อปรับระดับของฮีโมโกลบินให้สูงเพียงพอที่ <br>
            ผู้ป่วยสามารถดำรงชีวิตได้ตามปกติ <br>
            -	หลีกเลี่ยงปัจจัยที่ทำให้มีการทำลายเม็ดเลือดแดง เช่น งดสูบบุหรี่ งดดื่มสุรา <br>
            -	ควรรับประทานอาหารที่ช่วยต้านอนุมูลอิสระภายในเซลล์ เช่น ผัก ผลไม้ <br>
            -	ไม่ควรรับประทานยาเพิ่มธาตุเหล็กเอง ควรปฏิบัติตามคำแนะนำของแพทย์ เพราะคนในกลุ่มนี้จะ <br>
            พบการดูดซึมเหล็กมากกว่าปกติ ทำให้เหล็กไปสะสมตามร่างกายและเกิดการทำลายอวัยวะภายในได้ <br>
            -	ควรได้รับการตรวจก่อนตั้งครรภ์ เข้ารับการปรึกษาจากแพทย์ และทำการตรวจชนิดฮีโมโกลบิน <br>
            หรือ DNA ของคู่สมรส เพื่อลดโอกาสเสี่ยงในการให้กำเนิดบุตรที่เป็นโรคธาลัสซีเมีย";
        }
        elseif($objResult["result"] == "ปกติ"){
            $text1 = "กลุ่มที่ไม่มีโอกาสเป็นพาหะธาลัสซีเมีย หรือเป็นพาหะธาลัสซีเมียชนิดที่ไม่มีความรุนแรง ไม่เกิดโรคที่รุนแรงในบุตร";
            $text2 = "ไม่มี";
        }
        elseif($objResult["result"] == "มีภาวะซีดเล็กน้อย"){
            $text1 = "มีภาวะซีด เนื่องจากการขาดธาตุเหล็ก (Iron deficiency) หรือสภาวะความผิดปกติอื่นๆของร่างกาย";
            $text2 = "-	อาจจะรับประทานอาหารที่มีธาตุเหล็กสูง เช่น ผักใบเขียว เนื้อสัตว์ ตับหรือโฟเลทอย่างน้อย 3 เดือน
            <br> -	ควรมาทำการตรวจซ้ำอีกครั้ง";
        }
        elseif($objResult["result"] == "มีโอกาสเป็นพาหะธาลัสซีเมียหรือมีภาวะซีดเนื่องจากการพร่องธาตุเหล็ก"){
            $text1 = "สามารถเป็นพาหะธาลัสซีเมียชนิดใดชนิดหนึ่ง ได้แก่ Alpha-thalassemia-1-trait, Beta-thalassemia-trait <br>
            หรือพบทั้งสองชนิดร่วมกัน หรือมีภาวะซีดเนื่องจากการขาดธาตุเหล็ก กลุ่มนี้ไม่แสดงอาการผิดปกติ หรือ อาจพบภาวะซีดเล็กน้อย";
            $text2 = "-	ถ้าเป็น Alpha-thalassemia-1-trait ควรได้รับการตรวจยืนยันเพิ่มเติม ด้วยการตรวจ DNA ที่โรงพยาบาล <br>
            -	ถ้าเป็น Beta-thalassemia-trait ควรได้รับการตรวจยืนยันเพิ่มเติม ด้วยการทำ Hemoglobin typing <br>
            -	หลีกเลี่ยงปัจจัยที่ทำให้มีการทำลายเม็ดเลือดแดง เช่น งดสูบบุหรี่ งดดื่มสุรา <br>
            -	สำหรับคู่สมรสที่กำลังวางแผนจะมีบุตร ควรปรึกษาแพทย์ และทำการตรวจที่โรงพยาบาลอีกครั้ง <br>
            เพื่อช่วยวางแผนครอบครัวและลดโอกาสในการกำเนิดบุตรที่จะเป็นโรคธาลัสซีเมีย";
        }
        else{
            $text1 = "ข้อมูลเก่า";
            $text2 = "ข้อมูลเก่า";
        }
        
    ?>
    <br><br>
    <div class="container">
    
        <div style="margin-left:45%;"><h3>ผลลัพธ์ของคุณ<h3></div><br><br><br>
        
        <div id="fisrt" class="float-right">
            <img id="logo" src="logo.jpg">
        </div>

        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col" class="text-center">หัวข้อ</th>
                        <th scope="col" class="text-center">ผลลัพธ์</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row" class="text-center">HN</th>
                        <td class="text-center"><?php echo $objResult["HN"]; ?></td>
                        </tr>
                        <tr>
                        <th scope="row" class="text-center">ชื่อ - นามสกุล</th>
                        <td class="text-center"><?php echo $objResult["namethai"]; ?></td>
                        </tr>
                        <tr>
                        <th scope="row" class="text-center">ผลการตรวจ</th>
                        <td class="text-center"><?php echo $objResult["result"]; ?></td>
                        </tr>
                        <tr>
                        <th scope="row" class="text-center">รายละเอียด</th>
                        <td><?php echo $text1; ?></td>
                        </tr>
                        <tr>
                        <th scope="row" class="text-center">คำแนะนำ</th>
                        <td><?php echo $text2; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br><br><br>
        <div id="fisrt" class="float-right">
            ลงชื่อ <br><br>
            <?php echo $nameprint; ?> <br><br
            <div id="non-printable"><button onclick="myFunction()">print</button></div>
        </div>
        
    </div>

    <script>
        function myFunction() {
            window.print();
        }
    </script>

</body>
</html>