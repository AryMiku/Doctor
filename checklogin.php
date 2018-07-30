<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
</head>
<body>
    <?php
        mysql_connect("localhost","root","1234");
        mysql_select_db("doctor");
        $strSQL = "SELECT * FROM user WHERE username = '".$_POST['username']."' 
        and password = '".$_POST['password']."'";
        $objQuery = mysql_query($strSQL);
        $objResult = mysql_fetch_array($objQuery);
        if(!$objResult)
        {
            ?>
            <div class="container">
                <div class="notification" style="margin-top:250px; font-size: 50px">
                    <center>รหัสผ่านไม่ถูกต้อง กำลังกลับสู่หน้า Login</center>
                </div>
            </div>
            <?php
                echo '<meta http-equiv="refresh" content="2;URL=\'login.html\'">';
        }
        else
        {
        ?>
                <div class="container">
                    <div class="notification" style="margin-top:250px; font-size: 50px">
                        <center>รหัสผ่านถูกต้อง กำลังไปหน้าต่อไปอีก 3 วินาที</center>
                    </div>
                </div>
                <?php
                echo '<meta http-equiv="refresh" content="2;URL=\'user.html\'">';
        }
        mysql_close();
    ?>
</body>
</html>
