<?php
session_start();
if($_SESSION['mobile']=="")
{
    header('Location: index.php');
}
include 'connect.php';
$mobile=$_SESSION['mobile'];
    $result=mysqli_query($con,"select name,marks from details join result where details.mobile=result.mobile and details.mobile='$mobile'");
    $fetch=mysqli_fetch_array($result);


      
      session_destroy();
?>



<html>
    <head>
        <script src="https://kit.fontawesome.com/ab99e84824.js" crossorigin="anonymous"></script>
        <style type='text/css'>
            body, html {
                margin: 0;
                padding: 0;
            }
            body {
                color: black;
                display: table;
                font-family: Georgia, serif;
                font-size: 24px;
                text-align: center;
            }
            .container {
                border: 20px solid tan;
                width: 750px;
                height: 563px;
                display: table-cell;
                vertical-align: middle;
            }
            .logo {
                color: tan;
            }

            .marquee {
                color: tan;
                font-size: 48px;
                margin: 20px;
            }
            .assignment {
                margin: 20px;
            }
            .person {
                border-bottom: 2px solid black;
                font-size: 32px;
                font-style: italic;
                margin: 20px auto;
                width: 400px;
            }
            .reason {
                margin: 20px;
            }
        </style>
    </head>
    <body>
        <div class="container">

            <div class="logo">
                PM College of Education, Aligarh
            </div>

            <div class="marquee">
                Certificate of Completion
            </div>

            <div class="assignment">
                This certificate is presented to
            </div>

            <div class="person">
                <?php echo $fetch['name'];?>
            </div>

            <div class="reason">
                For securing <?php echo $fetch['marks'];?> marks in this quiz test.<br/>
                We wish you Good Luck for your future.
            </div>
        </div>
        <center>
            <a onclick="window.print()" title="Print the Certificate" class="print"><i class="fas fa-print"></i></a>
        </center>
        <?php
        $con->close();
        ?>
    </body>
</html>