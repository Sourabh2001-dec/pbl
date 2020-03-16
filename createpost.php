<?php 
session_start();
include 'check_token.php';

function show_visibility($year){
	echo '
		<h3>'.$year.'</h3>
		<p>Branch:</p>
			<div class="branch">
				<button type="button" name="'.$year.'-all-branch" id="'.$year.'-all-branch" class="btn btn-light mx-1" btn-lg btn-block data-toggle="button" aria-pressed="false" autocomplete="off">ALL</button>
				<button type="button" name="'.$year.'-ce-branch" id="'.$year.'-ce-branch" class="btn btn-light mx-1" btn-lg btn-block data-toggle="button" aria-pressed="false" autocomplete="off">CE</button>
				<button type="button" name="'.$year.'-it-branch" id="'.$year.'-it-branch" class="btn btn-light mx-1" btn-lg btn-block data-toggle="button" aria-pressed="false" autocomplete="off">IT</button>
				<button type="button" name="'.$year.'-entc-branch" id="'.$year.'-entc-branch" class="btn btn-light mx-1" btn-lg btn-block data-toggle="button" aria-pressed="false" autocomplete="off">ENTC</button>
			</div>
			<p>Division:</p>
			<div class="division">';
			for ($x = 1; $x <= 11; $x++) {
				if ($x==1) {
					# code...
					echo '<button type="button" name="'.$year.'-div-ALL" id="'.$year.'-div-ALL" class="btn btn-light my-1 mx-1 btn-lg " data-toggle="button" aria-pressed="false" autocomplete="off" >ALL</button>';
				}

				if ($x==10){
					echo '<button type="button" name="'.$year.'-div-ten" id="'.$year.'-div-ten" class="btn btn-light mx-1 my-1  btn-lg " data-toggle="button" aria-pressed="false" autocomplete="off" >'.$x.'</button>';
				}
				else if($x==11){
					echo '<button type="button" name="'.$year.'-div-ele" id="'.$year.'-div-ele" class="btn btn-light mx-1 my-1  btn-lg " data-toggle="button" aria-pressed="false" autocomplete="off" >'.$x.'</button>';
					
				}
				else{
				echo '<button type="button" name="'.$year.'-div-'.$x.'" id="'.$year.'-div-'.$x.'" class="btn btn-light mx-1 my-1  btn-lg " data-toggle="button" aria-pressed="false" autocomplete="off" >'.$x.'</button>';
				}
			};

			
		echo '</div>';
};

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="resources/css/style.css">

	<?php
		include_once "link_inc.php";
		
	?>

	<style>
		.ck-content .image>img {
			display: block;
			margin: 0 auto;
			max-width: 80%;
			min-width: 50px;
			max-height: 350px;
		}

		.row {
			margin-right: 0 !important;
			margin-left: 0 !important;
		}


		.form_wrap {
			min-height: 90vh;
		}

		input[type="checkbox"] {
			transform: scale(2);
			margin-right: 10px;
		}



		@media only screen and (max-width: 430px) {
			.ck.ck-toolbar-dropdown .ck.ck-toolbar .ck.ck-toolbar__items {
				flex-wrap: wrap !important;
			}
		}
	</style>

</head>

<body>
		
		
		<!-- Modal -->
		<div class="modal fade" id="alert_box" tabindex="-1" role="dialog" aria-labelledby="alert_box_title" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
						<div class="modal-header">
								<h2 class="modal-title"></h2>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
							</div>
					<div class="modal-body">
						<div class="container-fluid modal-body-cont">
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" id="modal_dis" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary" id="publish_btn">Publish</button>
					</div>
				</div>
			</div>
		</div>

	<?php
	$id = $_SESSION["mail"].uniqid();

	if (isset($_SESSION["mail"])) {
		include_once "navbar.php";

		echo '
		
		<div class="row">
		<div class="col-md-1"></div>
	<div class="col-md-10 mt-4 ">

	<form class="px-2" id="post_create_form">
		<div class="form-group">
			<label for="title">Title <span style="color: rgb(170, 169, 169);"><i>(The title of the blog goes here)</i></span></label>
			<input type="text" name="title" id="title" class="form-control">
		</div>
		<div class="row">
		<div class="form-group col-md-6 px-0">
			<label for="category"> Category <span style="color: rgb(170, 169, 169);"><i>(Category to which blog content belongs)</i></span> : </label>
			<select name="category" id="category" class="form-control">
                    <option value="physics" selected>Physics</option>
                    <option value="mathematics">Mathematics</option>
                    <option value="sports">Sports</option>
                    <option value="mechanical engineering">Mechanival Engineering</option>
                </select>
		</div>
	</div>

		<div class="row">
		<div class="form-group col-md-6 px-0">
			<label for="file">Thumbnail image</label>
			<input type="file" name="file" id="file" class="form-control">

		</div>
		<div class="col-md-6">
			<img src="" alt="" id="preview" style="max-height: 200px;">
		</div>
		</div>
		

		
		<br>
    <textarea id="editor" name="editor_content">
		
	</textarea>
	<br>


	</form>';

			
			

	
			
			

			echo '
				<h3>Visibility</h3>
				<p><button type="button" class="btn btn-light btn-lg" id="public" data-toggle="button" aria-pressed="false" autocomplete="off">Public</button></p>
				
				<div id="visibility" role="tablist" aria-multiselectable="true">
					<p>Based on Year,Branch & Division</p>
				<div class="card">
					<div class="card-header" role="tab" id="fe_v_opt">
						<h5 class="mb-0">
							<a data-toggle="collapse" data-parent="#visibility" href="#fe_branch_year" aria-expanded="true" aria-controls="fe_branch_year">
					  FE
					</a>
						</h5>
					</div>
					<div id="fe_branch_year" class="collapse in" role="tabpanel" aria-labelledby="fe_v_opt">
						<div class="card-body">
							';show_visibility("FE");echo'
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" role="tab" id="se_v_opt">
						<h5 class="mb-0">
							<a data-toggle="collapse" data-parent="#visibility" href="#se_branch_year" aria-expanded="true" aria-controls="se_branch_year">
					  SE
					</a>
						</h5>
					</div>
					<div id="se_branch_year" class="collapse in" role="tabpanel" aria-labelledby="se_v_opt">
						<div class="card-body">
						';show_visibility("SE");echo'
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" role="tab" id="te_v_opt">
						<h5 class="mb-0">
							<a data-toggle="collapse" data-parent="#visibility" href="#te_branch_year" aria-expanded="true" aria-controls="te_branch_year">
					  TE
					</a>
						</h5>
					</div>
					<div id="te_branch_year" class="collapse in" role="tabpanel" aria-labelledby="te_v_opt">
						<div class="card-body">
						';show_visibility("TE");echo'
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" role="tab" id="be_v_opt">
						<h5 class="mb-0">
							<a data-toggle="collapse" data-parent="#visibility" href="#be_branch_year" aria-expanded="true" aria-controls="be_branch_year">
					  BE
					</a>
						</h5>
					</div>
					<div id="be_branch_year" class="collapse in" role="tabpanel" aria-labelledby="se_v_opt">
						<div class="card-body">
						';show_visibility("BE");echo'
						</div>
					</div>
				</div>
			</div>';


		echo '
	<div class="my-1"> 
	<button class="btn btn-success" id="draft">Save as draft</button>
		<button class="btn btn-success" id="Publish">Publish</button>
	</div>
	</div>
	<div class="col-md-1"></div>
	
</div>
	<script src="vendor\js\build\ckeditor.js"></script>
	<script src="vendor\js\jquery.validate.min.js"></script>
	<script src="resources/js/createpost.js">
		</script>';

	
    
	include_once "footer.php";
	}
	else{
		echo '
			<script>
				window.location = "login.php";
			</script>
		';

		
	};


	
	?>


</body>

</html>