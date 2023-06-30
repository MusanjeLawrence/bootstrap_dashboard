
<!DOCTYPE html>
<html lang="en">
    <head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Silverwood">
    <meta name="keywords" content="Silverwood,insurance,agent">
    <meta name="author" content="Silverwood insurance agent">
    <meta name="robots" content="noindex, nofollow">
    <title>Silverwood - Admin Dashboard</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/silver_small.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="assets/css/line-awesome.min.css">
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="assets/css/select2.min.css">
		
		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <?php include_once("includes/header.php");?>
			<!-- /Header -->
			
			<!-- Sidebar -->
            <?php include_once("includes/sidebar.php");?>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">All Risks Insurance</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Details</li>
								</ul>
							</div>
							<div class="col-auto float-right ml-auto">
								<a href="#" class="btn add-btn" data-toggle="modal" data-target="#burglary_proposal"><i class="fa fa-plus"></i> Proposal</a>
								
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					<!-- Search Filter -->
					
					<!-- Search Filter -->
					<!-- user profiles list starts her -->

					
    </div>
    
				<!-- /Page Content -->
				
				<!-- Add Employee Modal -->
				<?php include_once("includes/modals/proposals/all_risks_proposals.php"); ?>
				<!-- /Add Employee Modal -->
				
				<!-- /Delete Employee Modal -->
		
            </div>
			<!-- /Page Wrapper -->
			
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="assets/js/jquery.slimscroll.min.js"></script>
		
		<!-- Select2 JS -->
		<script src="assets/js/select2.min.js"></script>
		
		<!-- Datetimepicker JS -->
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>

		<script>
  function selectOption(value) {
    var select = document.getElementById('applicant-type');
    select.value = value;
    select.dispatchEvent(new Event('change'));
  }

  function updateSelectedText(value) {
    var selected = document.querySelector('.custom-select .select-selected');
    selected.textContent = value;
  }

function setEndDate() {
    var startDateInput = document.getElementById('start-date');
    var endDateInput = document.getElementById('end-date');

    var startDate = new Date(startDateInput.value);
    var endDate = new Date(startDate.getTime() + (12 * 30 * 24 * 60 * 60 * 1000)); // Add 12 months

    var endDateFormatted = endDate.toISOString().split('T')[0];
    endDateInput.value = endDateFormatted;
  }

</script>
		
    </body>
</html>