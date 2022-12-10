<?php session_start();
include'connect.php';
if(isset($_POST['login']))
{
    $pass=$_POST['pass'];
    $pwd=$_POST['pwd'];
    $query="SELECT * FROM patient_details WHERE patient_id='$pass' and password='$pwd'";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0)
    {
        $_SESSION['PID']=$pass;
        header("location:patient_dashboard.php");
    }
    else
    {
        echo"<script>alert('Invalid Password')</script>";
    }
}



?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title> Patient Login</title>
        
        <!-- Favicon -->
        <link rel="shortcut icon" href="assets/img/favicon.png">
    
        <!-- Fontfamily -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&display=swap">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
        
        <!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
        <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
        
        <!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
    
        <!-- Main Wrapper -->
        <div class="main-wrapper login-body">
            <div class="login-wrapper">
                <div class="container">
                    <div class="loginbox">
                    <div class="login-left">
                            <img class="img-fluid" src="assets/img/patient.png" alt="Logo">
                        </div>
                        <div class="login-right">
                            <div class="login-right-wrap">
                                <h1>Patient Login</h1>
                                <p class="account-subtitle">   </p>
                                
                                <!-- Form -->
                                <form method="post">
                                <div class="form-group">
                                        <input class="form-control" type="text" name="pass" placeholder="Aadhar Number">
                                    </div>
                                    <!-- <p class="account-subtitle">Password </p> -->

                                    <div class="form-group">
                                        <input class="form-control" type="password" name="pwd" placeholder="Password">
                                    </div>
                                    <!-- <div class="form-group">
                                        <input class="form-control" type="password" name="pass" placeholder="Password">
                                    </div> -->
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-block" name="login" type="submit">Login</button>
                                    </div>
                                </form>
                                <br>
                                <a href="patient_entry.php"><strong>New Patient Registration</strong></a>
                                <!-- /Form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Main Wrapper -->
        
        <!-- jQuery -->
        <script src="assets/js/jquery-3.6.0.min.js"></script>
        
        <!-- Bootstrap Core JS -->
        <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        
        <!-- Custom JS -->
        <script src="assets/js/script.js"></script>
        
    </body>
</html>