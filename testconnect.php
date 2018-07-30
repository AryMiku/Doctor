<?php 
        $con=mysqli_connect("localhost","root","","doctor");
        // Check connection
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        else{
            echo "Can Connect";
        }
        mysqli_query("SET NAMES UTF8");
        $strSQL = "update people set DCIP='$DCIP' ,MCV='$MCV' ,RBC='$RBC2' ,Anisocytasis='$Anisocy2' ,Anisocytasishave='$haveinani' ,poikilocytosis='$Poiki2' ,poikilocytosishave='$havepoiki' 
        ,inclusion='$body' ,Hbh='$HBH' ,HB='$HB' ,comment='$comment',result='$text' where id='$id'";
        //echo $strSQL;
        $result = mysqli_query($con,$strSQL);
    ?>