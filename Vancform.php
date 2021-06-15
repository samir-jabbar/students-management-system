<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Preskool - Students</title>
		<!-- Favicon -->
        <link rel="shortcut icon" href="./html-template/assets/img/favicon.png">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&display=swap">
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="./html-template/assets/plugins/bootstrap/css/bootstrap.min.css">
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="./html-template/assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="./html-template/assets/plugins/fontawesome/css/all.min.css">
		<!-- Main CSS -->
        <link rel="stylesheet" href="./html-template/assets/css/style.css">

    </head>
    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">
			<?php include "Rep.html";?>
            <div class="page-wrapper">
                <div class="content container-fluid">
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Ajouter une annonce</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="./html-template/students.html">Annonce</a></li>
									<li class="breadcrumb-item active">Ajouter</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<form method="POST" action="ctrl.php?action=Addanc" enctype="multipart/form-data">
										<div class="row">
											<div class="col-12">
												<h5 class="form-title"><span>Le detail de l'annonce</span></h5>
											</div>
											<div class="col-12 col-sm-6">  
												<div class="form-group">
													<label>L'objet de l'annonce</label>
													<input type="text" class="form-control" name="OB">
												</div>
											</div>
										
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Classe</label>
													<select class="form-control" name="cls">
														<option>Sélectionner la classe</option>
														<?php
															for($i=0;$i<$l;$i++){
																echo "<option>".$cls[$i]['nom_classe']."</option>";
															}
														?>
													  </select>
												</div>
											</div>

											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Image de l'annonce</label>
													<input type="file" class="form-control" name="IMAGE", id="IMAGE">
												</div>
											</div>
											
											<div class="col-12 ">
												<div class="form-group">
												<label>Le contenu de l'annonce</label>
												<textarea class="form-control" name="CO"></textarea> 
												</div>
											</div>	
										
										
											<div class="col-12">
												<button type="submit" class="btn btn-primary">soumettre</button>
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
        <script src="./html-template/assets/js/jquery-3.5.1.min.js"></script>
		<!-- Bootstrap Core JS -->
        <script src="./html-template/assets/js/popper.min.js"></script>
        <script src="./html-template/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<!-- Slimscroll JS -->
        <script src="./html-template/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		<!-- Custom JS -->
		<script src="./html-template/assets/js/script.js"></script>

    </body>
</html>