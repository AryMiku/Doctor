<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.25.0/sweetalert2.all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.25.0/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.25.0/sweetalert2.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.25.0/sweetalert2.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.25.0/sweetalert2.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.25.0/sweetalert2.min.js"></script>
</head>
<body>
    <?php 
        error_reporting(0);
        $namethai = $_POST['namethai']; //ชื่อนามสกุลภาษาไทย
        $nameeng = $_POST['nameeng']; //ชื่อนามสกุลภาษาอังกฤษ
        $HN = $_POST['HN']; //ค่า HN
        $age = $_POST['age']; //อายุ
        $sex = $_POST['sex']; //เพศ
        $id = $_POST['ID']; //รหัสบัตรประชาชน
        $blood = $_POST['blood']; //เช็คการเคยได้รับเลือด
        $blood่have = $_POST['bloodhave']; //รายละเอียดการเคยได้รับเลือด
        $goblood = $_POST['goblood']; //เช็คการเคยบริจาคเลือด
        $gobloodhave = $_POST['gobloodhave']; //รายละเอียดการเคยบริจาคเลือด
        $masa = $_POST['masa']; //เช็คมังซะวีรัส
        $masahave = $_POST['masahave']; //รายละเอียดมังซะวีรัส
        $fatarus = $_POST['fatarus']; //เช็คทารัสในครอบครัว
        $fatarushave = $_POST['fatarushave']; //รายละเอียดทารัสในครอบครัว
        $comback1 = $_POST['comback1']; //เช็คทางตอบกลับ
        $comback2 = $_POST['comback2']; //เช็คทางตอบกลับ
        $comback3 = $_POST['comback3']; //เช็คทางตอบกลับ
        $comback4 = $_POST['comback4']; //เช็คทางตอบกลับ
        $inputmail = $_POST['inputmail'];
        $inputline = $_POST['inputline'];
        $inputadd = $_POST['inputadd'];
        $usercheck = $_POST['usercheck'];
        $comback = "$comback1 $comback2 $comback3 $comback4";
        //echo $id;

        $con=mysqli_connect("localhost","root","","doctor");
            // Check connection
            if (mysqli_connect_errno())
            {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
            mysqli_query($con,"SET NAMES UTF8");
            $strSQL = "UPDATE people SET ";
            $strSQL .="namethai = '".$namethai."' ";
            $strSQL .=",nameeng = '".$nameeng."' ";
            $strSQL .=",HN = '".$HN."' ";
            $strSQL .=",age = '".$age."' ";
            $strSQL .=",sex = '".$sex."' ";
            $strSQL .=",blood = '".$blood."' ";
            $strSQL .=",bloodhave = '".$blood่have."' ";
            $strSQL .=",goblood = '".$goblood."' ";
            $strSQL .=",gobloodhave = '".$gobloodhave."' ";
            $strSQL .=",masa = '".$masa."' ";
            $strSQL .=",masahave = '".$masahave."' ";
            $strSQL .=",fatarus = '".$fatarus."' ";
            $strSQL .=",fatarushave = '".$fatarushave."' ";
            $strSQL .=",comeback = '".$comeback."' ";
            $strSQL .=",inputmail = '".$inputmail."' ";
            $strSQL .=",inputline = '".$inputline."' ";
            $strSQL .=",inputadd = '".$inputadd."' ";
            $strSQL .=",usercheck = '".$usercheck."' ";
            $strSQL .="WHERE id = '".$id."' ";
            
            //echo $strSQL;
            $result = mysqli_query($con,$strSQL);
            echo '<meta http-equiv="refresh" content="3;URL=check.php?id='.$id.'&name='.$namethai.'">';
            mysqli_close($con);
    ?>

    <script>
        swal({
            position: 'center',
            type: 'info',
            title: 'กรุณารอสักครู่',
            showConfirmButton: false,
            timer: 3000
        })
    </script>
</body>
</html>
