<?php

include 'connect.php';

session_start();
$_SESSION['HID']=$hid;


// if(isset($_POST['search']))
// {
// 	$name = $_POST['name'];
//     $mobile = $_POST['mobile'];
// 	$mobile1=(int)$mobile;
// 	$reason = $_POST['reason'];
// 	$time=$_POST['time'];
// 	$dat = $_POST['dat'];	
// 	$insert2 = "INSERT INTO `prebooking`(`Name`, `Date`, `time`, `Mobile`, `Reason`) VALUES ('$name','$dat','$time','$mobile1','$reason')";
// 	$insert = mysqli_query($con, $insert2);
// 	echo" <script>document.location='prebooking.php'</script>";

// }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>ADD OP BILLS</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" href="assets/img/favicon.png">
		
		
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&display=swap">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

		<!-- Feather CSS -->
		<link rel="stylesheet" href="assets/plugins/icons/feather/feather.css">
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
		
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="assets/css/style.css">
	</head>
	<body>

	<div class="main-wrapper">
        <?php include 'menu.php'; ?>
        <div class="page-wrapper">

            <div class="content container-fluid">
				<div class="page-header">
				<div class="row">
					<div class="col">
						<h3 class="page-title"><b>Search Patient</b></h3>  
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
							<li class="breadcrumb-item active">Search - Patient</li>
						</ul>
					</div>
				</div>
			</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card invoices-add-card">
								<div class="card-body">
									<form class="invoices-form" method="post">
										<div class="invoice-add-table">
											<h4>Pre-Booking</h4>
											<div class="table-responsive">
												<table class="table table-center add-table-items">
													<thead>
														<tr>
															
															<th>Enter Patient Unique Identification Number</th>
														
															<th></th>
                                                            <th></th>
                                                            <th></th>
													    </tr>
													</thead>
													<tbody>
														<tr class="add-row">
                                                            <td>
                                                            <input type="text" name="id" id="id" class="form-control">
                                                            </td>
                                                           
															<td>
																<button type="button" name="search" class="btn btn-primary">search</button>
                                                            </td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
                    <br>
					<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-striped mb-0">
											<thead>
												<tr>
													<th>Patient_id</th>
													<th>Patient_name</th>
													<th>Previously Visited Hospital</th>
													<th>Transfer access<th>
													
												</tr>
											</thead>
											<tbody>
												<?php
													if(isset($_POST['search']))
													{
														$pid=$_POST['id'];
                                                        // $sql=msqli_query($con,"select p.hid ")
														$gen = mysqli_query($con, $getData);
														$i = 0;
														foreach($gen as $data)
														{
                                                            

															echo '<td><a href="delete.php?time='.$data['time'].'&pid='.$pid.'&tid='.$token_id.'" class="btn btn-primary">Delete</a><td></tr>';
														}
													}
												?>
											</tbody>	
										</table>
									</div>
								</div>
							</div>
											</div>
				</div>


			</div>
			<!-- /Page Wrapper -->
			
		</div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
		<script src="assets/js/jquery-3.6.0.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		
		<!-- Feather Icon JS -->
		<script src="assets/js/feather.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Select2 JS -->
		<script src="assets/plugins/select2/js/select2.min.js"></script>

		<!-- Datepicker Core JS -->
		<script src="assets/plugins/moment/moment.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		<script>

        function getKeyByValue(object, value)
        {
            return Object.keys(object).find(key => object[key] === value);
        }
  		
		function get_price()
		 {
			var type=document.getElementById('charge').value;
            var type=getKeyByValue(dataF,type);
		   	if(type)
            {
                document.getElementById('prc').value=dataT[type];
                document.getElementById('tot').value=dataT[type];

            }
            else
            {
                document.getElementById('prc').value=0;
                document.getElementById('tot').value=0;

            }
		 }

		 function multiply() 
		 { 
			const multiplicand = document.getElementById('prc').value || 0; 
			const multiplier = document.getElementById('quan').value || 0; 
			const product = parseInt(multiplicand) * parseInt(multiplier); 
			document.getElementById('tot').value = product; 
		}

		</script>

	</body>
</html>
Footer
?? 2022 GitHub, Inc.
Footer navigation
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
