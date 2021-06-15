<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Preskool - Classe</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" href="assets/img/favicon.png">
	
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
        <div class="main-wrapper">
		
			<?php include "Rep.html";?>
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Add Classe</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="departments.html">Classe</a></li>
									<li class="breadcrumb-item active">Add Classe</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
				
					<div class="row">
						<div class="col-sm-12">
						
							<div class="card">
								<div class="card-body">
									<form method="POST" action="ctrl.php?action=class_add">
										<div class="row">
											<div class="col-12"> 
												<h5 class="form-title"><span>Classe Details</span></h5>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Nom de la classe</label>
													<input type="text" class="form-control" name="NC">
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>délégué(e) de la Classe</label>
													<input type="text" class="form-control" name="DC">
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Semestre actuelle</label>
													<select class="form-control" name="SA">
														<option>Select semestre</option>
														<option>S1</option>
														<option>S2</option>
														<option>S3</option>
														<option>S4</option>
														<option>S5</option>
														<option>S6</option>
														<option>M1</option>
														<option>M2</option>
													  </select>
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Nombre des étudiants</label>
													<input type="number" class="form-control" name="NE">
												</div>
											</div>
											<div class="col-12">
												<button type="submit" class="btn btn-primary">Soumettre</button>
											</div>
										</div>
									</form>
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
        <script src="assets/js/jquery-3.5.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
		<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
    </body>
</html>
