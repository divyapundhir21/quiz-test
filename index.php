  
<?php
session_start();

include 'connect.php';

if(isset($_POST['submit']))
{
   
     $name= $_POST['name'];
     $email= $_POST['email'];
     $mobile = $_POST['mobile'];
     $gender = $_POST['gender'];
     $college = $_POST['college'];
     $department = $_POST['department'];

     
     $result = mysqli_query($con,"INSERT into details (name, email, mobile, gender, college, department) values ('$name','$email','$mobile','$gender','$college','$department')");
     
     $_SESSION['mobile']=$mobile;
     header('Location: exam.php');
}   

?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Project</title>
    <link rel="stylesheet" href="project.css"/>

  </head>

<body>
    
    <div class="container">
        <header class="header">
            <h1 id="title" class="text-center">Quiz Form</h1>
            <p id="description" class="description text-center">
                Fill the correct information to give your quiz test.
            </p>
        </header>
        <form id="quiz-form" method="POST">
            <div class="form-group">
                <label id="name-label" for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" required />
            </div>
            <div class="form-group">
                <label id="email-label" for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your Email" required />
            </div>
            <div class="form-group">
                <label id="number-label" for="mobile">Mobile</label>
                <input type="number" name="mobile" id="number" class="form-control" max="9999999999" min="6300000000" placeholder="Mobile" />
            </div>


            <div class="form-group">
                <p>Gender</p>
                <label>
                    <input name="gender" value="male" type="radio" class="input-radio"
                         />Male</label>
                <label>
                    <input name="gender" value="female" type="radio" class="input-radio" />Female</label>

                <label><input name="gender" value="preferNo" type="radio" class="input-radio" />Prefer not to say</label>
            </div>

            <div class="form-group">
                <label id="name-label" for="college">College</label>
                <input type="text" name="college" id="name" class="form-control" placeholder="Enter your college name" required />
            </div>


            <div class="form-group">
                <p>Academic Qualification</p>
                <select id="dropdown" name="department" class="form-control" required>
                    <option disabled selected value>Select your department</option>
                    <option value="BCA">BCA</option>
                    <option value="BBA">BBA</option>
                    <option value="B Com">B.Com</option>
                    <option value="D El Ed">D.El.Ed</option>
                    <option value="B Tech">B.Tech</option>
                    <option value="MCA">MCA</option>
                    <option value="MBA">MBA</option>
                </select>
            </div>

            <div class="form-group">
                <button type="submit" name="submit" id="submit" class="submit-button">
                    Submit
                </button>
            </div>
        </form>
    </div>

        
    <?php 
      $con->close();
      ?>
  </body>
</html>