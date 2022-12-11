<?php include 'connect.php'?>
<?php include 'patient_menu.php'?>
<?php 
session_start();

$pid = $_SESSION['PID'];
$sql = mysqli_query($con,"select d.dname as name,s.spec_name as spec, p.prescription as pres,p.time as time from doctor_details d,doctor_prescription p,speciality s where p.pid='$pid' and p.did = d.did and d.designation =s.spec_id order by p.time ");


// $run = mysqli_query($con, $sql);
// $res = mysqli_fetch_assoc($run);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
    
            <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title> Patient Details</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" href="assets/img/favicon.png">
	
		<!-- Fontfamily -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&display=swap">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

		<!-- Datatables CSS -->
		<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
	
    <div class="main-wrapper">
        

        <div class="page-wrapper">
            <div class="content container-fluid">
				
                <div class="page-header">
                    <div class="row">
                    <div class="col-md-9">
                            <ul class="list-links mb-4">
                                <li ><a href="patient_dashboard.php">Dashboard</a></li>
                                <li class="active"><a href="patient_profile1.php">Patient Profile</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <button onclick="javascript:demoFromHTML();">PDF</button>
                <div class="row">
					<h3 >BASIC PREVIOUS RECORDS</h3>
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table id="tab_customers" class="table table-striped">
											<thead>
												<tr>
													<th>Patient ID</th>
													<th>Name</th>
                                                    <th>Phone Number</th>
													<th>Past Records</th>
												</tr>
											</thead>
											<tbody>
												<?php
                                                    while($run = mysqli_fetch_assoc($sql))
                                                    {

                                                        echo '<tr>
                                                        <td>'.$run['pid'].'</td>
                                                        <td>'.$run['did'].'</td>
                                                        <td>'.$run['prescription'].'</td>
														<td>'.$run['time'].'</td>
                                                        </tr>';
                                                    }
                                                ?>
											</tbody>
										</table>
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
		
		<!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>
		
    </body>
</html>