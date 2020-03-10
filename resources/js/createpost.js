var state = {
	saved: false,
	last_thumb: "",
	changes: {
		thumb_img: false,
	}
}




ClassicEditor
	.create(document.querySelector("#editor"), {

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
			save(editor) {
				state.changes.content += 1
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

	})
	.then(editor => {
		window.editor = editor;




	})
	.catch(error => {
		console.error(error);
	});




function readURL(input) {

	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function (e) {
			$("#preview").attr("src", e.target.result);
		}
		reader.readAsDataURL(input.files[0]);

	}

}
$("#file").change(function (e) {
	readURL(this);
	console.log(e.target.value)
	if (state.saved === true) {
		if (e.target.value !== state.changes.thumb_img) {
			state.last_thumb = e.target.value
			state.changes.thumb_img = true
		} else {
			state.changes.thumb_img = false
		}
	}
});

// $("#title").change(function (e) {
// 	state.changes.title = true
// })
// $("#category").change(function (e) {
// 	state.changes.category = true
// })
// $("input[name='sel']").change(function (e) {
// 	state.changes.visibility = true
// })






function ContentData(result) {

	var content = editor.getData();
	var visibility = [];
	$.each($('input[name="sel"]:checked'), function () {
		visibility.push($(this).val());
	});
	visibility = visibility.join(" , ")
	console.log(visibility)

	$.ajax({
		url: "api/postsaver.php",
		type: "POST",
		data: {
			title: $("#title").val(),
			category: $("#category option:selected").val(),
			thumb_img: result,
			content: content,
			visibility: visibility
		},
		success: function (res) {
			console.log(res)
			state.saved = true
			alert("POST SAVED AS DRAFT")
		}
	})
}




function dataUploadWithImg() {
	if ($("#file").prop("files").length > 0) {
		var fileUp = new FormData();
		fileUp.append("thumb_img", $("#file").prop("files")[0])
		$.ajax({
			url: "api/img_store.php",
			type: "POST",
			data: fileUp,
			processData: false,
			contentType: false,
			success: function (res) {
				state.changes.thumb_img = false
				ContentData(res)
			}
		})
	} else {
		ContentData("resources/img/nullimg.jpg")
	}

}



$("#draft").on("click", (e) => {

	// initial state : first save


	// --------------------------------------------------------

	if (state.saved === false) {

		dataUploadWithImg();

	}
	// after initial save
	else {
		if (state.changes.thumb_img === false) {

			var content = editor.getData();
			var visibility = [];
			$.each($('input[name="sel"]:checked'), function () {
				visibility.push($(this).val());
			});
			visibility = visibility.join(" , ")
			console.log(visibility)

			$.ajax({
				url: "api/postsaver.php",
				type: "POST",
				data: {
					title: $("#title").val(),
					category: $("#category option:selected").val(),
					content: content,
					visibility: visibility
				},
				success: function (res) {
					console.log(res)
					alert("POST SAVED AS DRAFT after first save withoout img upload")
				}
			})
		} else if (state.changes.thumb_img === true) {
			dataUploadWithImg();
			console.log("save after first save and img upload")
		}
	}


})