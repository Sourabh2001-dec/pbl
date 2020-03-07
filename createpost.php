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

		@media only screen and (max-width: 430px) {
			.ck.ck-toolbar-dropdown .ck.ck-toolbar .ck.ck-toolbar__items {
				flex-wrap: wrap !important;
			}
		}
	</style>

</head>

<body>

	<?php
	
	if (isset($_SESSION["mail"])) {
		include_once "session_navbar.php";
		echo '
		<div class="row">
		<div class="col-md-1"></div>
	<div class="col-md-10 mt-4">

	<form>
		<div class="form-group">
			<label for="title">Title <span style="color: rgb(170, 169, 169);"><i>(The title of the blog goes here)</i></span></label>
			<input type="text" name="title" id="title" class="form-control">
		</div>
		<div class="row">
		<div class="form-group col-md-6">
			<label for="category_select"> Category <span style="color: rgb(170, 169, 169);"><i>(Category to which blog content belongs)</i></span> : </label><select name="category_select"
                    class="form-control custom-select">
                    <option value="">Physics</option>
                    <option value="">Mathematics</option>
                    <option value="">Sports</option>
                    <option value="">Mechanival Engineering</option>
                </select>
		</div>
	</div>

		<div class="row">
		<div class="form-group col-md-6">
			<label for="file">Thumbnail image</label>
			<input type="file" name="file" id="file" class="form-control">

		</div>
		<div class="col-md-6">
			<img src="" alt="" id="preview" style="max-height: 200px;">
		</div>
		</div>
		

		

    <textarea id="editor" name="editor_content">
		<p>Here goes the initial content of the editor.</p>
		<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores tempore eos dolores iusto earum saepe in sunt quibusdam, iste libero. Provident iste consectetur quis maxime consequuntur. Sunt magnam odit blanditiis? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores tempore eos dolores iusto earum saepe in sunt quibusdam, iste libero. Provident iste consectetur quis maxime consequuntur. Sunt magnam odit blanditiis?</p>
		<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores tempore eos dolores iusto earum saepe in sunt quibusdam, iste libero. Provident iste consectetur quis maxime consequuntur. Sunt magnam odit blanditiis?</p>

		<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores tempore eos dolores iusto earum saepe in sunt quibusdam, iste libero. Provident iste consectetur quis maxime consequuntur. Sunt magnam odit blanditiis?</p>
		<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores tempore eos dolores iusto earum saepe in sunt quibusdam, iste libero. Provident iste consectetur quis maxime consequuntur. Sunt magnam odit blanditiis?</p>
		<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores tempore eos dolores iusto earum saepe in sunt quibusdam, iste libero. Provident iste consectetur quis maxime consequuntur. Sunt magnam odit blanditiis?</p>
		<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores tempore eos dolores iusto earum saepe in sunt quibusdam, iste libero. Provident iste consectetur quis maxime consequuntur. Sunt magnam odit blanditiis?</p>
		<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores tempore eos dolores iusto earum saepe in sunt quibusdam, iste libero. Provident iste consectetur quis maxime consequuntur. Sunt magnam odit blanditiis?</p>
		<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores tempore eos dolores iusto earum saepe in sunt quibusdam, iste libero. Provident iste consectetur quis maxime consequuntur. Sunt magnam odit blanditiis?</p>
		<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores tempore eos dolores iusto earum saepe in sunt quibusdam, iste libero. Provident iste consectetur quis maxime consequuntur. Sunt magnam odit blanditiis?</p>
		<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores tempore eos dolores iusto earum saepe in sunt quibusdam, iste libero. Provident iste consectetur quis maxime consequuntur. Sunt magnam odit blanditiis?</p>
		<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores tempore eos dolores iusto earum saepe in sunt quibusdam, iste libero. Provident iste consectetur quis maxime consequuntur. Sunt magnam odit blanditiis?</p>
		<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores tempore eos dolores iusto earum saepe in sunt quibusdam, iste libero. Provident iste consectetur quis maxime consequuntur. Sunt magnam odit blanditiis?</p>
		<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores tempore eos dolores iusto earum saepe in sunt quibusdam, iste libero. Provident iste consectetur quis maxime consequuntur. Sunt magnam odit blanditiis?</p>
	</textarea>

	<button id="submit">Save</button>
	</form>
	</div>
	<div class="col-md-1"></div>
</div>
    <script src="vendor\js\build\ckeditor.js"></script>
    <script>
       ClassicEditor
			.create( document.querySelector( "#editor" ), {
				
				toolbar: {
					items: [
					"heading",
						"|",
						"bold",
						"italic",
						"link",
						"bulletedList",
						"numberedList",
						"|",
						"indent",
						"outdent",
						"|",
						"imageUpload",
						"blockQuote",
						"insertTable",
						"mediaEmbed",
						"undo",
						"redo",
						"fontSize",
						"fontColor",
						"fontBackgroundColor",
						"fontFamily",
						"highlight",
						"horizontalLine",
						"MathType",
						"ChemType",
						"specialCharacters",
						"strikethrough",
						"subscript",
						"superscript",
						"underline",
						"CKFinder",
						"alignment",
						"code",
						"codeBlock"
					]
				},
                language: "en",
                
                ckfinder: {
            // Upload the images to the server using the CKFinder QuickUpload command.
            uploadUrl: "vendor/ckfinder_php_3.5.1/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images&responseType=json"
        },

		autosave: {
			waitingTime: 2000,
            save( editor ) {
                // alert(editor.getData());
            }
        },

				image: {
					toolbar: [
						"imageTextAlternative",
						"imageStyle:full",
						"imageStyle:side"
					]
				},
				table: {
					contentToolbar: [
						"tableColumn",
						"tableRow",
						"mergeTableCells",
						"tableCellProperties",
						"tableProperties"
					]
				},
				licenseKey: "",
				
			} )
			.then( editor => {
				window.editor = editor;
		
				
				
				
			} )
			.catch( error => {
				console.error( error );
			} );

			document.getElementById("submit").addEventListener("onchange",(e)=>{
				alert(editor.getData())
			})

			function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $("#preview").attr("src", e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#file").change(function(){
        readURL(this);
    });
	
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