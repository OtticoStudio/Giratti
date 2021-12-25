<html>

<head>
	<title> Stylish CSS Gradients to Pick </title>	
	
	<link rel="stylesheet" href="../../CSS/Giratti.css">
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap');


	</style>

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- AdSense -->
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1788120362717693"
     crossorigin="anonymous"></script>

</head>


<body>
	
	<nav> Menu </nav>

	<!-- Banners -->
	<style type="text/css">

		.Banner-Sec {
			position: relative;
		}
			.Banner-Sec h1 {
				font-size: 3em;
				color: lightgrey;
			    -webkit-text-stroke: 2px black; 
			}

		.Banner-Pic {
			position: relative;
			height: 70vh;
			width: 100%;

			background: 
				/* transparent gradient */ 
			    linear-gradient(rgba(206, 110, 80, .5), rgba(111, 96, 190, .6)),
			    url(../../images/Gradients/Anni-Roenkae.jpg);
			
			margin: 0 auto;
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;
		}
		.Banner-Txt {
			position: relative;
			text-align: center;
			width: fit-content;
			left: 50%;
			top: 50%;
			transform: translate(-50%, -50%);
		}
		.Banner-Txt p {
			font-size: 1em;
			color: White;
		}
	</style>

	<section class="Banner-Sec">
		<div class="Banner-Pic">

			<div class="Banner-Txt">
				<h1> CSS Gradient Swatches </h1>
				<p> Pick & Paste </p>
			</div>

		</div>
	</section>
	<!-- END Banners -->








	<style type="text/css">
		.GradBox {
			position: relative;
			width: 90%;
			margin: 0 auto;
			height: auto;
			margin-top: 40px;
			margin-bottom: 40px;
		}
		.GradRow {
		      display: flex;
		      flex-direction: row;
		      width: 100%;
		      padding: 25px 0px;
		    }

		.SwatchSq {
			display: inline-block;
			margin-right: 20px;
			width: 250px;
			border-radius: 15px;
			border: 1px solid #F5F6F7;
		}
		.SwatchTop {
			position: relative;
			height: 150px;
			padding: 10px;
		}
		.SwatchBot {
			position: relative;
			padding: 15px;
			background: rgba(255,255,255, 0.8);
			font-weight: bold;
		}
			.SwatchCP {
				position: absolute;
				right: 0px;
				top: 0px;
				padding: 15px;
				border-radius: 0 0 10px 0;
				background: rgba(255,255,255, 0.3);
				transition: ease-in .4s;
			}
			.SwatchCP:hover {
				background: rgba(149, 130, 173, 0.3);
				cursor: pointer;
				transition: ease-in .4s;
			}

	/* Gradient Swatches */
	.VitalOcean { background: linear-gradient(90deg, #1CB5E0 0%, #000851 100%); }
	.ShadyLane { background: linear-gradient(90deg, #3F2B96 0%, #A8C0FF 100%); }
	.RetroWagon { background: linear-gradient(90deg, #FDBB2D 0%, #22C1C3 100%); }
	.KaleSalad { background: linear-gradient(90deg, #00C9FF 0%, #92FE9D 100%); }
	
	.DiscoClub { background: linear-gradient(90deg, #FC466B 0%, #3F5EFB 100%); }
	.SeaSalt { background: linear-gradient(90deg, #4b6cb7 0%, #182848 100%); }
	.FrescoCrush { background: linear-gradient(90deg, #FDBB2D 0%, #3A1C71 100%); }
	.LovelyLilly { background: linear-gradient(90deg, #efd5ff 0%, #515ada 100%); }
	
	.OoeyGooey { background: linear-gradient(90deg, #0700b8 0%, #00ff88 100%); }
	.AquaSpray { background: linear-gradient(90deg, #00d2ff 0%, #3a47d5 100%); }
	.BloodyMimosa { background: linear-gradient(90deg, #d53369 0%, #daae51 100%); }
	.MelloYellow { background: linear-gradient(90deg, #f8ff00 0%, #3ad59f 100%); }

	.DustyCactus { background: linear-gradient(90deg, #fcff9e 0%, #c67700 100%); }
	.Stellar { background-image: radial-gradient( circle farthest-corner at 22.4% 21.7%, rgba(4,189,228,1) 0%, rgba(2,83,185,1) 100.2% ); }
	.DustyGrass { background-image: linear-gradient(120deg, #d4fc79 0%, #96e6a1 100%); }
	.SandToBlue { background-image: linear-gradient(to right, #DECBA4, #3E5151); }
	
	.Amin { background-image: linear-gradient(to right, #8e2de2, #4a00e0); }
	.SublimeLight { background-image: linear-gradient(to right, #fc5c7d, #6a82fb); }
	.Megatron { background-image: linear-gradient(to right, #c6ffdd, #fbd786, #f7797d); }
	.BlueRaspberry { background-image: linear-gradient(to right, #00b4db, #0083b0); }

	.Crystalline { background-image: linear-gradient(-20deg, #00cdac 0%, #8ddad5 100%); }
	.Lawrencium { background-image: linear-gradient(to right, #0f0c29, #302b63, #24243e); }
	.Happy { background-image: linear-gradient(to right, #00b09b, #96c93d); }
	.RedStrain { background-image: linear-gradient(to right, #870000, #190a05); }

	.PinkFish { background-image: linear-gradient(to right, rgb(242, 112, 156), rgb(255, 148, 114)); }
	.SeaLord { background-image: linear-gradient( 109.6deg, rgba(156,252,248,1) 11.2%, rgba(110,123,251,1) 91.1% ); } 
	.CherryBlossom { background-image: linear-gradient(25deg,#d64c7f,#ee4758 50%); }
	.KeyMeh { background-image: linear-gradient(to right, #8360c3, #2ebf91); }


	/* ------- */
	/* ToolTip */
	/* ------- */
	  .Tooltip {
	  }
	    .Tooltip-Txt {
	      position: absolute;
	      visibility: hidden;
	      bottom: 393%;
	      left: 32.5%;
	      z-index: 1;
	      
	      background-color: #555;
	      text-align: center;
	      border-radius: 5px;
	      padding: 5px;
	      width: 100px;
	      color: #fff;
	      
	      transition: ease-in opacity 0.8s;
	      opacity: 0;
	    }
	    .Tooltip-Txt::after {
	      position: absolute;
	      content: "";
	      top: 100%;
	      left: 45%;

	      border: 6px solid;
	      border-color: #555 transparent transparent transparent;
	    }
	  .Tooltip:hover .Tooltip-Txt {
	    visibility: visible;
	    opacity: 1;
	  }



	</style>

	<section class="Grads">

		<div class="GradBox">

			<div class="GradRow FlexCenter">

					<div class="SwatchSq VitalOcean">
						
						<div class="SwatchTop"> </div>
						<div class="SwatchBot"> Vital Ocean 
							<div class="Tooltip">	
								<span class="Tooltip-Txt"> Copy Me </span>		
								<div class="SwatchCP"> <i class="fa fa-copy" id="Copy"></i> </div>
							</div>
						</div>
					</div>

					<div class="SwatchSq ShadyLane">
						
						<div class="SwatchTop "> </div>
						<div class="SwatchBot"> Shady Lane 
							<div class="Tooltip">	
								<span class="Tooltip-Txt"> Copy Me </span>		
								<div class="SwatchCP"> <i class="fa fa-copy" id="Copy"></i> </div>
							</div>
						</div>
					</div>

					<div class="SwatchSq RetroWagon">
						
						<div class="SwatchTop "> </div>
						<div class="SwatchBot"> Retro Wagon 
							<div class="Tooltip">	
								<span class="Tooltip-Txt"> Copy Me </span>		
								<div class="SwatchCP"> <i class="fa fa-copy" id="Copy"></i> </div>
							</div>
						</div>
						
					</div>

					<div class="SwatchSq KaleSalad">
						
						<div class="SwatchTop "> </div>
						<div class="SwatchBot"> Kale Salad
							<div class="Tooltip">	
								<span class="Tooltip-Txt"> Copy Me </span>		
								<div class="SwatchCP"> <i class="fa fa-copy" id="Copy"></i> </div>
							</div>
						</div>
					</div>

			</div>	



			<div class="GradRow FlexCenter">

					<div class="SwatchSq DiscoClub">
						
						<div class="SwatchTop"> </div>
						<div class="SwatchBot"> Disco Club 
							<div class="Tooltip">	
								<span class="Tooltip-Txt"> Copy Me </span>		
								<div class="SwatchCP"> <i class="fa fa-copy" id="Copy"></i> </div>
							</div>
						</div>
					</div>

					<div class="SwatchSq ShadyLane">
						
						<div class="SwatchTop SeaSalt"> </div>
						<div class="SwatchBot"> Sea Salt 
							<div class="Tooltip">	
								<span class="Tooltip-Txt"> Copy Me </span>		
								<div class="SwatchCP"> <i class="fa fa-copy" id="Copy"></i> </div>
							</div>
						</div>
					</div>

					<div class="SwatchSq FrescoCrush">
						
						<div class="SwatchTop "> </div>
						<div class="SwatchBot"> Fresco Crush 
							<div class="Tooltip">	
								<span class="Tooltip-Txt"> Copy Me </span>		
								<div class="SwatchCP"> <i class="fa fa-copy" id="Copy"></i> </div>
							</div>
						</div>
					</div>

					<div class="SwatchSq LovelyLilly">
						
						<div class="SwatchTop "> </div>
						<div class="SwatchBot"> Lovely Lilly 
							<div class="Tooltip">	
								<span class="Tooltip-Txt"> Copy Me </span>		
								<div class="SwatchCP"> <i class="fa fa-copy" id="Copy"></i> </div>
							</div>
						</div>
					</div>

					

					

			</div>	


			<div class="GradRow FlexCenter">

					<div class="SwatchSq OoeyGooey">	
						<div class="SwatchTop"> </div>
						<div class="SwatchBot"> Ooey Gooey 
							<div class="Tooltip">	
								<span class="Tooltip-Txt"> Copy Me </span>		
								<div class="SwatchCP"> <i class="fa fa-copy" id="Copy"></i> </div>
							</div>
						</div>
					</div>

					<div class="SwatchSq AquaSpray">
						<div class="SwatchTop "> </div>
						<div class="SwatchBot"> Aqua Spray 
							<div class="Tooltip">	
								<span class="Tooltip-Txt"> Copy Me </span>		
								<div class="SwatchCP"> <i class="fa fa-copy" id="Copy"></i> </div>
							</div>
						</div>
					</div>

					<div class="SwatchSq BloodyMimosa">
						<div class="SwatchTop "> </div>
						<div class="SwatchBot"> Bloody Mimosa 
							<div class="Tooltip">	
								<span class="Tooltip-Txt"> Copy Me </span>		
								<div class="SwatchCP"> <i class="fa fa-copy" id="Copy"></i> </div>
							</div>
						</div>
					</div>

					<div class="SwatchSq MelloYellow">
						<div class="SwatchTop "> </div>
						<div class="SwatchBot"> Mello Yellow 
							<div class="Tooltip">	
								<span class="Tooltip-Txt"> Copy Me </span>		
								<div class="SwatchCP"> <i class="fa fa-copy" id="Copy"></i> </div>
							</div>
						</div>
					</div>

			</div>	


			<div class="GradRow FlexCenter">

					<div class="SwatchSq DustyCactus">
						<div class="SwatchTop"> </div>
						<div class="SwatchBot"> Dusty Cactus 
							<div class="Tooltip">	
								<span class="Tooltip-Txt"> Copy Me </span>		
								<div class="SwatchCP"> <i class="fa fa-copy" id="Copy"></i> </div>
							</div>
						</div>
					</div>

					<div class="SwatchSq Stellar">
						<div class="SwatchTop"> </div>
						<div class="SwatchBot"> Stellar 
							<div class="Tooltip">	
								<span class="Tooltip-Txt"> Copy Me </span>		
								<div class="SwatchCP"> <i class="fa fa-copy" id="Copy"></i> </div>
							</div>
						</div>
					</div>

					<div class="SwatchSq SandToBlue">
						<div class="SwatchTop"> </div>
						<div class="SwatchBot"> Sand to Blue 
							<div class="Tooltip">	
								<span class="Tooltip-Txt"> Copy Me </span>		
								<div class="SwatchCP"> <i class="fa fa-copy" id="Copy"></i> </div>
							</div>
						</div>
					</div>

					<div class="SwatchSq DustyGrass">
						<div class="SwatchTop"> </div>
						<div class="SwatchBot"> Dusty Grass
							<div class="Tooltip">	
								<span class="Tooltip-Txt"> Copy Me </span>		
								<div class="SwatchCP"> <i class="fa fa-copy" id="Copy"></i> </div>
							</div>
						</div>
					</div>

			</div>



			<div class="GradRow FlexCenter">

					<div class="SwatchSq Crystalline">
						<div class="SwatchTop"> </div>
						<div class="SwatchBot"> Crystalline 
							<div class="Tooltip">	
								<span class="Tooltip-Txt"> Copy Me </span>		
								<div class="SwatchCP"> <i class="fa fa-copy" id="Copy"></i> </div>
							</div>
						</div>
					</div>

					<div class="SwatchSq Lawrencium">
						<div class="SwatchTop"> </div>
						<div class="SwatchBot"> Lawrencium 
							<div class="Tooltip">	
								<span class="Tooltip-Txt"> Copy Me </span>		
								<div class="SwatchCP"> <i class="fa fa-copy" id="Copy"></i> </div>
							</div>
						</div>
					</div>

					<div class="SwatchSq Happy">
						<div class="SwatchTop"> </div>
						<div class="SwatchBot"> Happy 
							<div class="Tooltip">	
								<span class="Tooltip-Txt"> Copy Me </span>		
								<div class="SwatchCP"> <i class="fa fa-copy" id="Copy"></i> </div>
							</div>
						</div>
					</div>

					<div class="SwatchSq RedStrain">
						<div class="SwatchTop"> </div>
						<div class="SwatchBot"> Red Strain 
							<div class="Tooltip">	
								<span class="Tooltip-Txt"> Copy Me </span>		
								<div class="SwatchCP"> <i class="fa fa-copy" id="Copy"></i> </div>
							</div>
						</div>
					</div>

			</div>


			<div class="GradRow FlexCenter">

					<div class="SwatchSq Amin">
						<div class="SwatchTop"> </div>
						<div class="SwatchBot"> Amin 
							<div class="Tooltip">	
								<span class="Tooltip-Txt"> Copy Me </span>		
								<div class="SwatchCP"> <i class="fa fa-copy" id="Copy"></i> </div>
							</div>
						</div>
					</div>

					<div class="SwatchSq SublimeLight">
						<div class="SwatchTop"> </div>
						<div class="SwatchBot"> Sublime Light 
							<div class="Tooltip">	
								<span class="Tooltip-Txt"> Copy Me </span>		
								<div class="SwatchCP"> <i class="fa fa-copy" id="Copy"></i> </div>
							</div>
						</div>
					</div>

					<div class="SwatchSq Megatron">
						<div class="SwatchTop"> </div>
						<div class="SwatchBot"> Megatron 
							<div class="Tooltip">	
								<span class="Tooltip-Txt"> Copy Me </span>		
								<div class="SwatchCP"> <i class="fa fa-copy" id="Copy"></i> </div>
							</div>
						</div>
					</div>

					<div class="SwatchSq BlueRaspberry">
						<div class="SwatchTop"> </div>
						<div class="SwatchBot"> Blue Raspberry 
							<div class="Tooltip">	
								<span class="Tooltip-Txt"> Copy Me </span>		
								<div class="SwatchCP"> <i class="fa fa-copy" id="Copy"></i> </div>
							</div>
						</div>
					</div>

			</div>


			<div class="GradRow FlexCenter">

					<div class="SwatchSq KeyMeh">
						<div class="SwatchTop"> </div>
						<div class="SwatchBot"> KeyMeh 
							<div class="Tooltip">	
								<span class="Tooltip-Txt"> Copy Me </span>		
								<div class="SwatchCP"> <i class="fa fa-copy" id="Copy"></i> </div>
							</div>
						</div>
					</div>

					<div class="SwatchSq CherryBlossom">
						<div class="SwatchTop"> </div>
						<div class="SwatchBot"> Cherry Blossom 
							<div class="Tooltip">	
								<span class="Tooltip-Txt"> Copy Me </span>		
								<div class="SwatchCP"> <i class="fa fa-copy" id="Copy"></i> </div>
							</div>
						</div>
					</div>

					<div class="SwatchSq SeaLord">
						<div class="SwatchTop"> </div>
						<div class="SwatchBot"> Sea Lord 
							<div class="Tooltip">	
								<span class="Tooltip-Txt"> Copy Me </span>		
								<div class="SwatchCP"> <i class="fa fa-copy" id="Copy"></i> </div>
							</div>
						</div>
					</div>

					<div class="SwatchSq PinkFish">
						<div class="SwatchTop"> </div>
						<div class="SwatchBot"> Pink Fish 
							<div class="Tooltip">	
								<span class="Tooltip-Txt"> Copy Me </span>		
								<div class="SwatchCP"> <i class="fa fa-copy" id="Copy"></i> </div>
							</div>
						</div>
					</div>

			</div>

		</div>

	</section>


<footer> Giratti Footer </footer>




</body>

</html>