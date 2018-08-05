<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.25.0/sweetalert2.all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.25.0/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.25.0/sweetalert2.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.25.0/sweetalert2.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.25.0/sweetalert2.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.25.0/sweetalert2.min.js"></script>
</head>
<body>
    <?php
        $id = $_GET['id'];
        echo $id;
        $con=mysqli_connect("localhost","root","","doctor");
        // Check connection
        if (mysqli_connect_errno())
        {
            //echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        // Perform queries 
        $strSQL = "delete FROM people WHERE id = '$id'";
        //echo $strSQL;
        $result = mysqli_query($con,$strSQL);
        mysqli_close($con);
    ?>

        <script>
        let timerInterval
            setTimeout("location.href = 'checkpeople.php';",1000);
        
        swal({
            title: 'ลบข้อมูลเรียบร้อย',
            html: 'กำลังไปหน้าต่อไปใน <strong></strong> วินาที.',
            timer: 1000,
            onOpen: () => {
                swal.showLoading()
                timerInterval = setInterval(() => {
                    swal.getContent().querySelector('strong')
                        .textContent = swal.getTimerLeft()
                }, 100)
            },
            onClose: () => {
                clearInterval(timerInterval)
            }
        }).then((result) => {
            if (
                // Read more about handling dismissals
                result.dismiss === swal.DismissReason.timer
            ) {
                console.log('I was closed by the timer')
                //window.location="http://stackoverflow.com";
            }
        })
    </script>
</body>
</html>