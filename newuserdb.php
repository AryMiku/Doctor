<meta charset="UTF-8">
<?php 

    $username = $_POST['username']; //ชื่อนามสกุลภาษาไทย
    $password = $_POST['password']; //ชื่อนามสกุลภาษาอังกฤษ
    //echo $comback;

    mysql_connect("localhost","root","1234");
        mysql_select_db("doctor");
        mysql_query("SET NAMES UTF8");
        $strSQL = "insert into user (username,password) VALUES (
            '$username','$password'
        )";
        //echo $strSQL;
        $objQuery = mysql_query($strSQL);
        echo '<meta http-equiv="refresh" content="0;URL=login.html">';


        
?>