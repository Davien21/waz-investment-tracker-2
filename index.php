<?php
	require './backends/backend.php';
?>
<!DOCTYPE HTML>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <title>Wazobia Investment | Tracker</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="icon" type="image/jpg" href="./assets/imgs/logo1.jpg"/>
	    <link rel="stylesheet" href="./assets/stylesheets/libraries/bootstrap/bootstrap.css">
	    <link rel="stylesheet" href="./assets/stylesheets/libraries/normalize.css">
	    <link rel="stylesheet" href="./assets/stylesheets/reset.css">
	    <link rel="stylesheet" href="./assets/stylesheets/extra-responsive.css">
	    <link rel="stylesheet" href="./assets/stylesheets/style.css"> 
	</head>
	<body>
	    <div id="wrapper">
	        <!-- Main Section -->
	        <!-- <h2 id="title" class=" text-center tex-white pt-4 pb-4 upper-case">Wazobia Investment Management App</h2> -->
	        <main id="main">
	        	<div class="wrapper pt-5">
		        	<section id="modals">
		        		<!--Add investment Modal -->
						<div class="modal fade" id="add-amount" tabindex="-1" role="dialog" aria-labelledby="add-amountMmodal" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLongTitle">Add New Investment</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body ">
										<div class="form-group flex mb-2">
											<label for="manual-add" class="mr-4 align-self-center">Amount</label>
											<input id="manual-add" type="text" name="investment" placeholder="Type an amount" class="form-control col-4">
										</div>
										<p class="side-note py-0 my-0">*It is advisable to put in multiples of 5000</p>
									</div>
									<div class="modal-footer justify-content-start">
										<button type="button" class="btn btn-primary" data-dismiss="modal">Add Amount</button>
									</div>
								</div>
							</div>
						</div>
		        	</section>
		        	<section id="what-to-do">
		        		<div class="container-fluid">
		        			<div class="row mt-5">
		        				<div class="mx-auto col-sm-8 col-md-6 col-lg-4 col-xl-3 bg-white pt-4 pb-5 px-4 rounded activity-box">
		        					<h2 class="text-center py-3">Welcome</h2>
		        					<h4 class="text-center pb-2	">Pick an option:</h4>
		        					<div>
		        						<button id="sim-btn" class="btn btn-default-dark btn-block">Simulate Track</button>
		        						<button id="track-btn" class="btn btn-default-green btn-block">Track Progress</button>
		        					</div>
		        				</div>
		        			</div>
		        		</div>
		        	</section>
		        	<section id="manner-of-input" class="d-none">
		        		<div class="container-fluid">
		        			<div class="row mt-5">

		        				<div class="mx-auto  bg-white pt-3 pb-5 px-4 rounded activity-box">
		        					<div class="navigator back-btn">
	        							<button class="btn btn-danger  ">Back</button>
	        							<!-- <img src="./assets/imgs/reply.svg" class="svgs "> -->
	        							<!-- <img src="./assets/imgs/right-arrow-2.svg" class="svgs "> -->
	        						</div>
		        					<h2 class="text-cente pt-4">Manner of Input</h2>
		        					<h4 class="text-center pb-3	">Choose an input method:</h4>
		        					<div>
		        						<button id="manual-sim-btn" class="btn btn-default-dark btn-block">Manual Input</button>
		        						<button id="auto-sim-btn" class="btn btn-default-green btn-block">Automatic</button>
		        						<!-- <button class="btn ">Track Progress</button> -->
		        					</div>
		        				</div>
		        			</div>
		        		</div>
		        	</section>

		        	<section id="auto-simulation" class="d-none">
		        		<div class="container-fluid">
		        			<div class="row mt-5">
		        				<div class="mx-auto bg-white rounded activity-box">
		        					<div class="navigator mt-3 pl-4 pl-sm-5 back-btn">
	        							<button class="btn btn-danger  ">Back</button>
	        							<!-- <img src="./assets/imgs/reply.svg" class="svgs "> -->
	        							<!-- <img src="./assets/imgs/right-arrow-2.svg" class="svgs "> -->
	        						</div>
		        					<form id="sim-parameters" action="backend.php" method="post" class="relative p-4 p-sm-5 p-md-5">
		        						
			        					<h4 class="">Fill this Form:</h4>
			        					<hr>
			        					<div class="form-group flex mb-2">
			        						<label class="pl-0 col-8">Initial Investment</label>
			        						<input class="col-4 form-control" type="text" name="investment">
			        					</div>
			        					<div class="form-group flex mb-2">
			        						<label class="pl-0 col-8">
				        						<span class="d-sm-none">Investment No.</span>
				        						<span class="d-none d-sm-flex">Number of Investments</span> 
				        					</label>
			        						<input class="col-4 form-control" type="text" name="number">
			        					</div>
			        					<div class="form-group flex mb-2">
			        						<label class="pl-0 col-8">Incremental Amount</label>
			        						<input class="col-4 form-control" type="text" name="increment">
			        					</div>
			        					<div class="form-group flex mb-2">
			        						<label class="pl-0 col-8">Starting Capital</label>
			        						<input class="col-4 form-control" type="text" name="capital">
			        					</div>
			        					<div class="form-group ">
			        						<button id="submit-sim-values" class="btn-block btn btn-primary">
			        							<span>Simulate</span>
			        							<span class="d-none d-md-inline-flex">Track</span></span>
			        						</button>
			        					</div>
			        				</form>
		        				</div>
		        				

		        			</div>
		        		</div>
		        	</section>
		        	<section id="table-section" class="d-none">
		        		<div class="container-fluid ">
		        			<div class="row">
		        				<div class="col-11 col-md-9 mx-auto">
		        					<table id="sim-table" class="text-center table table-hover table-striped ">
		        						<div class="d-inline-flex">
		        							<div class="relative back-btn mr-4">
			        							<button class="btn btn-danger  ">Back</button>
			        						</div>
			        						<div class="add-btn d-none">
			        							<button type="button" class="btn btn-light" data-toggle="modal" data-target="#add-amount" data-backdrop="static" data-keyboard="false">
													<img src="./assets/imgs/plus-2.svg" class="pb-1 svgs plus-svg">
		        									<span> Add Investment</span>
												</button>
			        						</div>
		        						</div>
		        						<caption class="text-md-center">Investment Simulator</caption>
					        			<thead class="">
					        				<tr>
					        					<th scope="col" class="col-auto"><?=$col_head_1?></th>
					        					<th scope="col" class="col-2"><?=$col_head_2?></th>
					        					<th scope="col" class="col-2"><?=$col_head_3?></th>
					        					<th scope="col" class="col-2"><?=$col_head_4?></th>
					        					<th scope="col" class="col-2"><?=$col_head_5?></th>
					        					<th scope="col" class="col-2"><?=$col_head_6?></th>
					        					<th scope="col" class="col-2"><?=$col_head_7?></th>
					        				</tr>
					        			</thead>
					        			<tbody class="bg-white">
					        				
					        			</tbody>
					        		</table>
		        				</div>
		        				
		        			</div>
		        			
		        		</div>
		        	</section>
	        	</div>
	       
	        </main>
	    </div>
	    <!-- Js -->
	 	<script src="./assets/js/libraries/jquery.min.js"></script>
	    <script src="./assets/js/libraries/bootstrap.js"></script>
	    <!-- <script src="./assets/js/all.min.js"></script> -->
	    <script src="./assets/js/jquery_functions.js"></script>
	    <script src="./assets/js/main.js"></script>
	    <script src="./assets/js/algorithms.js"></script>
	</body>
</html>