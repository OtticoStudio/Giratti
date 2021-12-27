<html>

<head>
	<title> Giratti </title>	
	
	<link rel="stylesheet" href="../../../CSS/Giratti.css">
	<style type="text/css">

		@import url('https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

		@import url('https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap');

	</style>

	<!-- Font Awesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
</head>
	

<body>
	
	<style type="text/css">

		body {
			background: #f0f2f7;
		}
		.Txt2Clip {}

		.Container {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
		}

		.Label {
			padding: 10px;
			font-size: 18px;
			color: #111;
		}

		.CopyTxt {
			position: relative;
			display: flex;
			padding: 10px;

			border: 1px solid #ddd;  /* Nice Border Color */
			border-radius: 10px;
			background: #FFF;
		}

		.CopyTxt input.InputTxt {
			padding: 10px;
			font-size: 18px;
			color: #555;
			border: none;
			outline: none;
		}

		.CopyTxt button {
			background: #5784f5;
			cursor: pointer;
			font-size: 18px;
			padding: 10px;
		
			border-radius: 10px;
			outline: none;
			border: none;
			color: #FFF;	
		}
		.CopyTxt button:active {
			background: #809ce2;
		}
		.CopyTxt button:before {
			position: absolute;
			content: "Copied!";
			display: none;
			top: -50px;
			right: 0px;
			
			background: #5c81dc;
			border-radius: 20px;
			padding: 8px 10px;
			font-size: 15px;
		}
		.show button:before {
			/* Displays Tooltip with Javascript */
			display: block; 
		}


		.BackBtn {
			position: relative;
			top: 15px;
			right: -50%;
			transform: translateX(-50%);
			background: #5784f5;
			cursor: pointer;
			font-size: 18px;
			padding: 10px;
		
			border-radius: 10px;
			outline: none;
			border: none;
			color: #FFF;
		}

	</style>
	<section class="Txt2Clip">
		
		<div class="Container">
			
			<div class="Label">
				Zoom Meeting Link
			</div>

			<div class="CopyTxt">
				<input type="text" class="InputTxt" value="http://www.otticostudio.com">
					<button>
						<i class="fa fa-clone"></i>
					</button>
			</div>

			<a href="http://localhost/Webs/Giratti/">
			  <button class="BackBtn">  Back </button>
			</a>

		</div>



	</section>


	<script type="text/javascript">
			
		// Select CopyTxt Div Element & Add Event listener to the Btn
		let copyText = document.querySelector(".CopyTxt");
		copyText.querySelector("button").addEventListener("click", function(){
			
			// Input Text to Clipboard
			let input = copyText.querySelector(".InputTxt");
			input.select();
			document.execCommand("copy");

			//Add Tooltip & remove after 2s
			copyText.classList.add("show");
			window.getSelection().removeAllRanges();   // Deselect Text
			setTimeout(function(){
				copyText.classList.remove("show");
			}, 2000);

		});

	</script>
</body>

</html>