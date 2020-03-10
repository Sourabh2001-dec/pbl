<!-- <?php 
	if (isset($_SESSION["mail"])) {
			
		
	}
?> -->


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="resources/css/style.css">

	<?php
		include_once "link_inc.php";
		session_start();
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



		@media only screen and (max-width: 430px) {
			.ck.ck-toolbar-dropdown .ck.ck-toolbar .ck.ck-toolbar__items {
				flex-wrap: wrap !important;
			}
		}
	</style>

</head>

<body>

	<?php
	$id = $_SESSION["mail"].uniqid();

	if (isset($_SESSION["mail"])) {
		include_once "session_navbar.php";

		echo '
		
		<div class="row form_wrap">
		<div class="col-md-1"></div>
	<div class="col-md-10 mt-4 ">

	<form class="px-2">
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

	<div class="form-group">
		<label for="visibility">Visibility</label>
		<br>
		All : <input type="checkbox" name="sel" id="all" class="custom-form-control" value="all" checked> &nbsp;&nbsp;
		FE : <input type="checkbox" name="sel" id="fe" class="custom-form-control" value="fe">&nbsp;&nbsp;
		SE : <input type="checkbox" name="sel" id="se" class="custom-form-control" value="se">&nbsp;&nbsp;
		TE : <input type="checkbox" name="sel" id="te" class="custom-form-control" value="te">&nbsp;&nbsp;
		BE : <input type="checkbox" name="sel" id="be" class="custom-form-control" value="be">
	</div>

	<div class="form-group">
		
	</div>
	</form>
	<button class="btn btn-success" id="draft">Save as draft</button>
		<button class="btn btn-success" id="Publish">Publish</button>
	</div>
	<div class="col-md-1"></div>
	
</div>
	<script src="vendor\js\build\ckeditor.js"></script>
	
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