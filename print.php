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
                    </tbody>
                </table>
            </div>
        </div>
        <br><br><br>
        <div id="fisrt" class="float-right">
            ลงชื่อ <br><br>
            ..................................................................................................

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