<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <title>Document</title>
</head>
<body>
    <?php 
        $id = $_GET['id'];
        //echo $id;
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

    ?>

    
    <center>
        <div class="column is-half">
            <br><br><br><br><br>
        <label class="label" style="font-size: 25px;">กรุณาลงชื่อเพื่อทำการปรินข้อมูล</label>
            <form action="print.php" method="POST">
            <div class="control">
                <input class="input" type="text" name="nameprint">
            </div>
            <input type="hidden" name="id" value="<?php echo $id?>">
            <br>
            <div class="control" style="margin-left:45%">
                <button class="button is-link">Submit</button>
            </div>
            </form>
        </div>
    </center>

    
</body>
</html>