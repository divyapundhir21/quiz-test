<?php
session_start();
if($_SESSION['mobile']=="")
{
    header('Location: index.php');
}
include 'connect.php';
$mobile=$_SESSION['mobile'];
if(isset($_POST['submit']))
{
    $count=1;
    $marks=0;
    foreach ($_POST['answer'] as $answer ) {
        if($answer!=""){
            
            $result=mysqli_query($con,"select answer from exam where id='$count' and answer='$answer'");
            if(mysqli_num_rows($result) > 0)
            {
                
                $marks++;
            }
        }
        
        $count++;
        
    }
    
    $result1 = mysqli_query($con,"INSERT into result (mobile, marks) values ('$mobile','$marks')");
    header('Location: result.php');    
}



?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quiz Test</title>
      <!-- <link rel="stylesheet" type="text/css" href="exam.css"> -->

 <style type="text/css">
     
:root {
    --color-white: #f3f3f3;
    --color-darkblue: #1b1b32;
    --color-darkblue-alpha: rgba(27, 27, 50, 0.8);
    --color-green: #37af65;
}

*,
*::before,
*::after {
    box-sizing: border-box;
}

body::before {
    content: '';
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    z-index: -1;
    background: var(--color-darkblue);
    background-image: linear-gradient( 115deg, rgba(58, 58, 158, 0.8), rgba(136, 136, 206, 0.7)), 
    url('img/quiz.jpeg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}

body {
    font-family: 'Poppins', sans-serif;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.4;
    color: var(--color-white);
    margin: 0;
}



h1 {
    margin-top: 0;
    margin-bottom: 0.5rem;
    background: rgb(255, 0, 102);
}

.text-center {
    text-align: center;
}

.container {
    width: 600px;
    margin: 3.125rem auto 0 auto;
    background: rgb(0, 0, 102);
    padding: 30px
}


.input-radio {
    display: inline-block;
    margin-right: 0.625rem;
    min-height: 1.25rem;
    min-width: 1.25rem;
}


.submit-button {
    display: block;
    width: 100%;
    padding: 0.75rem;
    background: rgb(255, 0, 102);
    color: inherit;
    border-radius: 2px;
    cursor: pointer;
    margin: 20px;
}

button {
    border: none;
    font-family: cursive;
    font-weight: bold;
    color: white;
}

button:hover{
    background: green;
    margin-top: 20px;
}


@media (min-width: 480px) {
    form {
        padding: 2.5rem;
    }
}
 </style>

</head>

<body>
    <h1 class="text-center">Basics of Computer</h2>
    <form method="POST">
    <?php
        $result2 = mysqli_query($con,"select id,question,option_a,option_b,option_c,option_d from exam");
        if (mysqli_num_rows($result2) > 0) {
            $count=1;
            while($row = mysqli_fetch_array($result2)){
            ?>
                <div class="container">

                    <b>Q<?php echo $count.". ".$row['question'];?></b> <br />
                    <input type="hidden" name="answer[<?php echo $row['id'];?>]" value="" class="input-radio">
                    <input type="radio" name="answer[<?php echo $row['id'];?>]"  value="<?php echo $row['option_a'];?>" class="input-radio"/> (a) <?php echo $row['option_a'];?> <br />
                    <input type="radio" name="answer[<?php echo $row['id'];?>]"  value="<?php echo $row['option_b'];?>" class="input-radio"/> (b) <?php echo $row['option_b'];?> <br />
                    <input type="radio" name="answer[<?php echo $row['id'];?>]"  value="<?php echo $row['option_c'];?>" class="input-radio"/> (c) <?php echo $row['option_c'];?> <br />
                    <input type="radio" name="answer[<?php echo $row['id'];?>]"  value="<?php echo $row['option_d'];?>" class="input-radio"/> (d) <?php echo $row['option_d'];?> <br />
                </div>
            <?php
            $count++;
            }
        }
    ?>
        <div class="form-group">
                <button type="submit" name="submit" id="submit" class="submit-button">
                    Submit
                </button>
            </div>
    </form>
    <?php 
      $con->close();
      ?>
</body>

</html>