<?php

include 'connect.php';
session_start();







if(isset($_POST['submit']))
{
	$pan = $_POST['pan'];
    $pan1=str_replace(' ','',$pan);
	$patient_id=(int)$pan1;
	$fname = $_POST['fname'];
	$fname=strtoupper($fname);
	$dob = $_POST['pdob'];
    $age=$_POST['page'];
	$gen = $_POST['gender'];
	$gen=strtoupper($gen);
	$ppn = $_POST['ppn'];
	$pnn1=(int)$ppn;
	
	
	$pra = $_POST['pra'];
	$pea = $_POST['pea'];
	$pq = $_POST['pq'];
	$pq=strtoupper($pq);
	$po = $_POST['po'];
	$po=strtoupper($po);
	
	$hid=$_SESSION['hid'];



	$query = "INSERT INTO `patient_details`(`patient_id`, `password`, `patient_name`, `dob`, `patient_age`, `gender`, `patient_phone_number`, `present_address`, `permanent_address`, `patient_qualification`, `patient_occupation`) VALUES ('$patient_id','$patient_id','$fname','$dob','$age','$gen','$pnn1','$pra','$pea','$pq','$po')";
	  $run = mysqli_query($con, $query);

     $query1="INSERT INTO `patient_past_records`(`patient_id`, `hid`) VALUES ('$patient_id','$hid')";
     $run2=mysqli_query($con,$query1);
	  echo" <script>document.location='patient_registration.php?pid=$pid'</script>";
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Patient Registration form</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" href="assets/img/favicon.png">
		
		
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&display=swap">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
	
	<div class="main-wrapper">
        <!-- <?php include 'menu.php'; ?>+ -->
        <div class="page-wrapper">

            <div class="content container-fluid">
					<div class="page-header">
						<div class="row">
							<div class="col">
                            <h3 class="page-title">Welcome!</h3>
								<h3 class="page-title">OLAP PATIENT REGISTRATION FORM</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active"> PATIENT REGISTRATION FORM</li>
								</ul>
							</div>
						</div>
					</div> 	                    
					              
				<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">PATIENT FORM</h5>
								</div>
								<div class="card-body">
								  <form method="post" autocomplete="off" class="needs-validation" novalidate>
										<div class="row">
											<div class="col-xl-6">

												<h5 class="card-title">PATIENT DETAILS</h5>
                                                <div class="col-md-6">
                                                <div class="form-group">
										            <label>Patient Aadhar Number</label>
										            <input type="text"  id="aadhaarid" name="pan" pattern="^\d{4}\s\d{4}\s\d{4}${12}" maxlength=14 class="form-control"required>
													<div class="invalid-feedback">
														Please choose "Patient Aadhar Number"
                                                    </div>
                                                        </div>
												<div class="form-group">
										            <label>Patient Name</label>
										            <input type="text" name="fname"  name="fname" onkeypress="return (event.charCode > 64 && 
	                                                 event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || 
													 (event.charCode==32) || (event.charCode==46)" class="form-control"required>
													<div class="invalid-feedback">
														Please choose "Patient Name"
                                                    </div>
									            </div>

												<div class="col-lg-9">
                                                    
                                            
														<div class="row">
															<label>Patient DOB</label>
															<div class="col-md-6">
																<div class="form-group">
																	<input type="date" name="pdob" id="pdob" placeholder="Date Of Birth"   onchange="getDob()" class="form-control">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group">
																<input type="text" name="page" id="page" readonly="readonly" class="form-control"required>
																</div>
															</div>
														</div>
                                                        
												</div>

												<div class="form-group">
													<label class="d-block">Patient Gender:</label>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="gender" id="gender_male" value="M"required>
														<label class="form-check-label" for="gender_male">Male</label>
													</div>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="gender" id="gender_female" value="F" checked>
														<label class="form-check-label" for="gender_female">Female</label>
													</div>
													<div class="invalid-feedback">
														Please choose "Gender"
                                                    </div>
												</div>
												

												<div class="form-group">
										            <label>Patient Phone Number</label>
										            <input type="text" pattern="[6-9]{1}[0-9]{9}" maxlength=10 name="ppn"name="ppn" class="form-control"required>
													<div class="invalid-feedback">
														Please choose "Patient Phone Number"
                                                    </div>
									            </div>
												
												
									            </div>
												
												<div class="form-group">
										            <label>Patient Qualification</label>
										            <input type="text" name="pq" class="form-control"required>
													<div class="invalid-feedback">
														Please choose "Patient Qualification"
                                                    </div>
									            </div>

												<div class="form-group">
										            <label>Patient Occupation</label>
										            <input type="text" name="po" class="form-control"required>
													<div class="invalid-feedback">
														Please choose "Patient Occupation"
                                                    </div>
									            </div>

												
												

												<div class="form-group">
										            <label>Present Address</label>
										            <textarea name="pra" class="form-control"required></textarea>
													<div class="invalid-feedback">
														Please choose "Present Address"
                                                    </div>
									            </div>
												
												
												

												
											<!-- </div> -->
											
												

												

												
												
												

												

												<div class="form-group">
										            <label>Permanent Address</label>
										            <textarea  name="pea" class="form-control"></textarea>
													<div class="invalid-feedback">
														Please choose "Permanent Address"
                                                    </div>
									            </div>

												<br>
										<div class="text-end">
											<button type="submit" name="submit" class="btn btn-primary">Submit</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
			
				<!-- Footer -->
				<!-- <footer>
					<p>Copyright © 2020 Dreamguys.</p>					
				</footer> -->
				<!-- /Footer -->
				
			</div>
			<!-- /Page Wrapper -->
		
        </div>
	</div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.6.0.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Select2 JS -->
		<script src="assets/plugins/select2/js/select2.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>
		<!-- Form Validation JS -->
		<script src="assets/js/form-validation.js"></script>
        <!-- AADHAAR SPACING-->
		<script>
			document.querySelector('#aadhaarid').addEventListener('keydown', (e) => {
            e.target.value = e.target.value.replace(/(\d{4})(\d+)/g, '$1 $2')
            })
			/* Jquery */
			$('#aadhaarid').keyup(function() {
			$(this).val($(this).val().replace(/(\d{4})(\d+)/g, '$1 $2'))
			});
			document.querySelector('#aadhaarid1').addEventListener('keydown', (e) => {
            e.target.value = e.target.value.replace(/(\d{4})(\d+)/g, '$1 $2')
            })
			/* Jquery */
			$('#aadhaarid').keyup(function() {
			$(this).val($(this).val().replace(/(\d{4})(\d+)/g, '$1 $2'))
			});
		</script>

		<script>

			
			function getDob() {

				let dob = document.getElementById("pdob").value;
				var xmlhttp=new XMLHttpRequest();
  				xmlhttp.onreadystatechange=function() {
    				if (this.readyState==4 && this.status==200) {
						console.log(this.responseText);
      					document.getElementById("page").value=this.responseText;
    				}
 				}
  				xmlhttp.open("GET","generate_dob.php?dob="+dob,true);
  				xmlhttp.send();
			}
			
			
		</script>
		
    </body>
</html>