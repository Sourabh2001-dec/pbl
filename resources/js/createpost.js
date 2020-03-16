var state = {
	saved: false,
	job : "save",
	type : "draft",
	set_id : true,
	blog_id : "",
	last_thumb: "",
	changes: {
		thumb_img: false,
	},
	visibility: {
		all: false,
		fe: {
			div: [],
			branch: [],
		},
		se: {
			div: [],
			branch: [],
		},
		te: {
			div: [],
			branch: [],
		},
		be: {
			div: [],
			branch: [],
		}
	}
}


let buttons = document.querySelectorAll(".btn");

function button_branch_appender(div, name, e) {
	
	let aria = e.target.getAttribute("aria-pressed");


	let fe = {
		valid: div.includes("FE"),
		div: state.visibility.fe.branch
	}
	let se = {
		valid: div.includes("SE"),
		div: state.visibility.se.branch
	}
	let te = {
		valid: div.includes("TE"),
		div: state.visibility.te.branch
	}
	let be = {
		valid: div.includes("BE"),
		div: state.visibility.be.branch
	}

	if (aria == "false") {
		$.each([fe, se, te, be], function (i, v) {
			if (v.valid) {
				if (name.includes("all")) {
					v.div.push("all")
				} else if (name.includes("ce")) {
					v.div.push("ce")
				} else if (name.includes("it")) {
					v.div.push("it")
				} else if (name.includes("entc")) {
					v.div.push("entc")
				} 
			}
		})
	} else if (aria == "true") {
		$.each([fe, se, te, be], function (i, v) {
			if (v.valid) {
				if (name.includes("all")) {
					v.div.splice(v.div.indexOf("all"), 1)
				} else if (name.includes("ce")) {
					v.div.splice(v.div.indexOf("ce"), 1)
				} else if (name.includes("it")) {
					v.div.splice(v.div.indexOf("it"), 1)
				} else if (name.includes("entc")) {
					v.div.splice(v.div.indexOf("entc"), 1)
				} 
			}
		});

	}

}

function button_div_appender(div, name, e) {

	let aria = e.target.getAttribute("aria-pressed");


	let fe = {
		valid: div.includes("FE"),
		div: state.visibility.fe.div
	}
	let se = {
		valid: div.includes("SE"),
		div: state.visibility.se.div
	}
	let te = {
		valid: div.includes("TE"),
		div: state.visibility.te.div
	}
	let be = {
		valid: div.includes("BE"),
		div: state.visibility.be.div
	}

	if (aria == "false") {
		$.each([fe, se, te, be], function (i, v) {
			if (v.valid) {
				if (name.includes("1")) {
					v.div.push(" 1 ");
				} else if (name.includes("2")) {
					v.div.push(" 2 ")
				} else if (name.includes("3")) {
					v.div.push(" 3 ")
				} else if (name.includes("4")) {
					v.div.push(" 4 ")
				} else if (name.includes("5")) {
					v.div.push(" 5 ")
				} else if (name.includes("6")) {
					v.div.push(" 6 ")
				} else if (name.includes("7")) {
					v.div.push(" 7 ")
				} else if (name.includes("8")) {
					v.div.push(" 8 ")
				} else if (name.includes("9")) {
					v.div.push(" 9 ")
				} else if (name.includes("ten")) {
					v.div.push(" 10 ")
				} else if (name.includes("ele")) {
					v.div.push(" 11 ")
				} else if (name.includes("ALL")) {
					v.div.push(" all ")
				}
			}
		})
	} else if (aria == "true") {
		$.each([fe, se, te, be], function (i, v) {
			if (v.valid) {
				if (name.includes("1")) {
					v.div.splice(v.div.indexOf(" 1 "), 1)
				} else if (name.includes("2")) {
					v.div.splice(v.div.indexOf(" 2 "), 1)
				} else if (name.includes("3")) {
					v.div.splice(v.div.indexOf(" 3 "), 1)
				} else if (name.includes("4")) {
					v.div.splice(v.div.indexOf(" 4 "), 1)
				} else if (name.includes("5")) {
					v.div.splice(v.div.indexOf(" 5 "), 1)
				} else if (name.includes("6")) {
					v.div.splice(v.div.indexOf(" 6 "), 1)
				} else if (name.includes("7")) {
					v.div.splice(v.div.indexOf(" 7 "), 1)
				} else if (name.includes("8")) {
					v.div.splice(v.div.indexOf(" 8 "), 1)
				} else if (name.includes("9")) {
					v.div.splice(v.div.indexOf(" 9 "), 1)
				} else if (name.includes("ten")) {
					v.div.splice(v.div.indexOf(" 10 "), 1)
				} else if (name.includes("ele")) {
					v.div.splice(v.div.indexOf(" 11 "), 1)
				} else if (name.includes("ALL")) {
					v.div.splice(v.div.indexOf(" all "), 1)
				}
			}
		});

	}
}

$.each(buttons, function (index, value) {
	let name = value.getAttribute("name");
	if (name !== null) {
		if (name.includes("-branch")) {
			$("#" + name).on('click', function (e) {
				let branch = e.target.getAttribute("name");
				button_branch_appender(branch, name, e);

			});
		} else if (name.includes("-div")) {
			$("#" + name).on('click', function (e) {
				let div = e.target.getAttribute("name");
				button_div_appender(div, name, e);

			});
		}
	}
})

$("#public").on("click",function(e){
	let aria = e.target.getAttribute("aria-pressed");
	if(aria == "false"){
		state.visibility.all = true;
		$("#visibility").css("display","none")
	}
	else{
		state.visibility.all = false;
		$("#visibility").css("display","block")
	}
})



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
		let placeholder = document.querySelectorAll(".ck-placeholder")[0]
		placeholder.style.display = "none"
		let placeholder2 = document.querySelectorAll(".ck-placeholder")[1]
		placeholder2.style.margin = "20px 0"


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


function nullCheck(){
	if (state.visibility.fe.branch.length == 0) {
		state.visibility.fe.branch.push("a")
	}else{
		state.visibility.fe.branch = state.visibility.fe.branch.filter(function (e){return e!=="a"})
	}

	if (state.visibility.fe.div.length == 0) {
		state.visibility.fe.div.push("a")
	}else{
		state.visibility.fe.div = state.visibility.fe.div.filter(function (e){return e!=="a"})
	}

	if (state.visibility.se.branch.length == 0) {
		state.visibility.se.branch.push("a")
	}else{
		state.visibility.se.branch = state.visibility.se.branch.filter(function (e){return e!=="a"})
	}

	if (state.visibility.se.div.length == 0) {
		state.visibility.se.div.push("a")
	}else{
		state.visibility.se.div = state.visibility.se.div.filter(function (e){return e!=="a"})
	}

	if (state.visibility.te.branch.length == 0) {
		state.visibility.te.branch.push("a")
	}else{
		state.visibility.te.branch = state.visibility.te.branch.filter(function (e){return e!=="a"})
	}

	if (state.visibility.te.div.length == 0) {
		state.visibility.te.div.push("a")
	}else{
		state.visibility.te.div = state.visibility.te.div.filter(function (e){return e!=="a"})
	}

	if (state.visibility.be.branch.length == 0) {
		state.visibility.be.branch.push("a")
	}else{
		state.visibility.be.branch = state.visibility.be.branch.filter(function (e){return e!=="a"})
	}

	if (state.visibility.be.div.length == 0) {
		state.visibility.be.div.push("a")
	}else{
		state.visibility.be.div = state.visibility.be.div.filter(function (e){return e!=="a"})
	}

	
}





function ContentData(result,update) {

	var content = editor.getData();

	if(update){state.last_thumb = result;}
	nullCheck()
	if(content == ""){
		content = "No data available"
	}
	 let title = $("#title").val()

	 if(title == ""){
		 title = "Enter your title"
	 }

	$.ajax({
		url: "api/postsaver.php",
		type: "POST",
		data: {
			job : state.job,
			type : state.type,
			title: title,
			blog_id : state.blog_id,
			category: $("#category option:selected").val(),
			thumb_img: result,
			content: content,
			public : state.visibility.all,
			fe_branch : state.visibility.fe.branch.join(","),
			fe_div : state.visibility.fe.div.join(","),
			se_branch : state.visibility.se.branch.join(","),
			se_div : state.visibility.se.div.join(" , "),
			te_branch : state.visibility.te.branch.join(","),
			te_div : state.visibility.te.div.join(","),
			be_branch : state.visibility.be.branch.join(","),
			be_div : state.visibility.be.div.join(","),
		},
		success: function (res) {
			console.log(res)
			if(state.set_id == true){
				state.blog_id = res;
				state.set_id = false;
			}
			if(state.saved == false){
				state.job = "update"
			}

			if(state.type == "published"){
				$('.modal-footer').css("display","none")
				$('.modal-body').html('<h2 class="text-success"><i class="fas fa-check-circle mx-1" style="font-size:100%"></i>Published Successfully!<h2>')
				
				// $('.modal-body').css("color","green")
				// $('.modal-body').css("font-size","200%")
				window.setTimeout(function (){window.location = "index.php"},1500)
			}

			state.saved = true
			if(state.type !== "published"){
			alert("POST SAVED AS DRAFT")
			}
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
				ContentData(res,true)
			}
		})
	} else {
		ContentData("resources/img/nullimg.jpg",true)
	}

}





$("#draft").on("click", (e) => {

	// initial state : first save


	// --------------------------------------------------------

	if (state.saved === false) {
		state.job = "save"
		dataUploadWithImg();
		
		console.log("first save")

	}
	// after initial save
	else {
		if (state.changes.thumb_img === false) {
				ContentData(state.last_thumb,false)
		} else if (state.changes.thumb_img === true) {
			dataUploadWithImg();
			console.log("save after first save and img upload")
		}
	}


})




// --------------------------------------PUBLISH FUNCTION---------------------------------

$('#publish_btn').on('click',function (){
	state.type="published"
	$('.modal-body').text("Publishing...")
	if (state.saved === false) {
		state.job = "save"
		dataUploadWithImg();
		
		console.log("first save")

	}
	// after initial save
	else {
		if (state.changes.thumb_img === false) {
				ContentData(state.last_thumb,false)
				console.log("i fired tge event")
		} else if (state.changes.thumb_img === true) {
			dataUploadWithImg();
			console.log("save after first save and img upload")
		}
	}
})

$('#Publish').on('click',function (){
	console.log("pressed")
	
	let title_CHECK = $('#title').val()
	let file_CHECK = $('#file').val()
	let content_CHECK = editor.getData();
	

	if (title_CHECK && file_CHECK && content_CHECK) {
		
		$('.modal-header').text("Publish Article")
		$('.modal-body').text("Please confirm to publish the article")
		$('#alert_box').modal('show')
		$('#publish_btn').css("display","inline-block")

	}
	else{
		$('.modal-header').text("Alert!")
		$('.modal-header').css('color','red')
		$('.modal-body').text("Please fill the empty fields")
		$('#publish_btn').css("display","none")
		$('#alert_box').modal('show')
	}

})