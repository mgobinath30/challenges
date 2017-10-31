<?php get_header(); ?>

<div id="primary" class="site-content" align="center">
	<div id="content" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

		<div class="niro">

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<header class="entry-header">

					<h1 class="entry-title">
						<?php the_title(); ?>
					</h1>

					<script>
						(function($) {
    $(document).ready(function() {

        $('.tiledpopup').on('click touchstart', function() {
            $('.imagepreview').attr('src', $(this).find('img').attr('src'));
            $('#imagemodal').modal('show');
        });

        $(
            '.oneAnnon,.twoAnnon,.threeAnnon,.fourAnnon,.fiveAnnon,.sixAnnon,.sevenAnnon,.eightAnnon,.nineAnnon,.tenAnnon,.eleAnnon'
        ).css({
            position: 'absolute'
        }).hide()

        $('.poi').each(function(i) {
            $('.poi').eq(i).on('click touchstart', function(e) {
                $(
                    '.oneAnnon,.twoAnnon,.threeAnnon,.fourAnnon,.fiveAnnon,.sixAnnon,.sevenAnnon,.eightAnnon,.nineAnnon,.tenAnnon,.eleAnnon'
                ).eq(i).css({
                    top: 0,
                    left: document.getElementById(e.srcElement.id).offsetLeft - 380
                }).show();
                document.getElementById(e.srcElement.id).innerText = "x";
                $('#' + e.srcElement.id).addClass("active");
            });



            $(document).mouseup(function(e) {
                var container = $(
                    ".oneAnnon,.twoAnnon,.threeAnnon,.fourAnnon,.fiveAnnon,.sixAnnon,.sevenAnnon,.eightAnnon,.nineAnnon,.tenAnnon,.eleAnnon"
                );
                var containerX = $(".active");
                if (!container.is(e.target) && container.has(e.target).length === 0 && e.target.className !=
                    "poi active") {
                    container.hide();
                    $(".poi").text('+');
                    $(".poi").removeClass("active");

                } else if (e.target.className == "poi active") {
                    setTimeout(function() {
                        container.hide();
                        $(".poi").text('+');
                        $(".poi").removeClass("active");
                    }, 50);
                }
            });
        });

    });
})(jQuery);
					</script>

					<style>
						h1.entry-title {
							display: none;
						}

						.navlist li {
							display: inline;
							list-style-type: none;
							padding-right: 20px;
						}

						.navlist .active a {
							background-color: #bb162b;
							color: white;
							padding: 3px;
							border-radius: 5px;
						}

						.buttonBox {
							clear: both;
							width: 80%;
							padding: 3px;
							margin: 0 auto;
							border-bottom: solid 2px #bb162b;
						}

						.mirrors,
						.camera,
						.sensors,
						.smartkey,
						.steering,
						.ledlights,
						.touch,
						.audio,
						.pas,
						.cluster,
						.alloy {
							border: inset 2px black;
							border-radius: 5px;
							height: auto;
							width: auto;
							background-color: white;
							overflow: auto;
							padding: 10px;
							margin-left: 0px;
							margin-top: 10px;
						}

						.bgimg {
							float: left;
							clear: none!important;
							width: 150px;
							height: 112px;
							background-repeat: no-repeat;
						}

						.tooltext {
							float: right;
							width: 220px;
							height: auto;
						}


						.wheel::after {
							content: ' ';
							width: 0px;
							height: 0px;
							border-right: 10px solid white;
							border-left: 10px solid transparent;
							border-top: 10px solid transparent;
							border-bottom: 10px solid transparent;
							position: absolute;
							top: 50%;
							right: 100%;
							margin: -10px;
						}

						.nirotiled p {
							text-align: left;
							color: #666;
							font-size: 1.5rem;
							letter-spacing: -0.25px;
							text-rendering: optimizelegibility;
							-webkit-font-smoothing: antialiased;
							-moz-osx-font-smoothing: grayscale;
							vertical-align: baseline;
							text-align: justify;
							word-break: break-word;
						}

						.nirotiled h2 {
							border-bottom: 1px solid #999;
							margin-bottom: 13px;
							padding-bottom: 10px;
							font-size: 18px;
						}


						#imagemodal .modal-content {
							border-radius: 0px;
						}

						.parts_popover {
							border-radius: 2px;
							height: auto;
							background-color: white;
							overflow: auto;
							padding: 10px;
							margin-left: 0px;
							margin-top: 10px;
							background: background-color: #666;
							background-color: rgba(0, 0, 0, 0.95);
							color: #fff;
							width: 380px;
							text-rendering: optimizelegibility;
							-webkit-font-smoothing: antialiased;
							-moz-osx-font-smoothing: grayscale;
						}

						.parts_popover p {
							font-size: 15px;
							color: #e4e4e4;
							text-shadow: 1px 1px 1px #000000;
							margin-right: 1em;
							margin-top: 20px;
							text-align: left;
						}

						.modal-dialog {
							width: 80%;
							height: 92%;
							padding: 0;
						}

						.modal-body {
							padding: 0px;
						}

						.close {
							float: right;
							font-size: 35px;
							line-height: 1;
							color: #000 !important;
							filter: alpha(opacity=20);
							opacity: 1;
							border: 0px !important;
							box-shadow: none !important;
						}

						.diagram {
							position: relative;
							width: 100%;
							height: auto;
							background: grey;
						}

						.diagram img {
							width: 100%;
							height: auto;
							display: block;
						}

						.diagram .annotations .poi {
							position: absolute;
							background-size: cover;
							border-radius: 20px;
							color: #fff;
							font-weight: bolder;
							cursor: pointer;
							background: #bb162b;
							box-shadow: 0 0 10px rgba(0, 0, 0, 0.3), inset 0 1px 0 rgba(255, 255, 255, 0.3);
							-webkit-transition: background-color 0.2s;
							transition: background-color 0.2s;
							font-size: 18px;
							padding-top: 3px;
							text-rendering: optimizelegibility;
							-webkit-font-smoothing: antialiased;
							-moz-osx-font-smoothing: grayscale;
							width: 30px;
							height: 30px;
						}

						@media screen and (max-width: 480px) {
							.diagram .annotations .poi {
								width: 15px;
								height: 15px;
								font-size: 12px;
								line-height: 1.2em;
								padding-top: 0px;
							}
						}

						.parts_popover {
							border-radius: 10px;
							z-index: 999999;
						}

						.parts_popover h5::after {
							content: "";
							height: 6px;
							width: 100%;
							background-image: url(http://www.kia.ca/content/cpo/img/bg-stripe3.gif);
							display: block;
						}

						.parts_popover h5 {
							line-height: 41px;
							text-align: left;
							font-size: 18px !important;
							margin-top: 0px !important;
						}

						.diagram .annotations .poi:hover {
							background: red;
						}

						#mountain .annotations>div.poi:nth-child(1) {
							top: 36%;
							left: 26%;
						}

						#mountain .annotations>div.poi:nth-child(2) {
							bottom: 69%;
							left: 46%;
						}

						#mountain .annotations>div.poi:nth-child(3) {
							bottom: 58%;
							left: 42%;
						}

						#mountain .annotations>div.poi:nth-child(4) {
							top: 39%;
							left: 50%;
						}

						#mountain .annotations>div.poi:nth-child(5) {
							top: 41%;
							left: 62%;
						}

						#mountain .annotations>div.poi:nth-child(6) {
							top: 44%;
							left: 80%;
						}

						#mountain .annotations>div.poi:nth-child(7) {
							top: 61%;
							left: 49%;
						}

						#mountain .annotations>div.poi:nth-child(8) {
							top: 39%;
							left: 54%;
						}

						#mountain .annotations>div.poi:nth-child(9) {
							top: 43%;
							left: 22%;
						}

						#mountain .annotations>div.poi:nth-child(10) {
							top: 32%;
							left: 32%;
						}

						#mountain .annotations>div.poi:nth-child(11) {
							top: 40%;
							left: 58%;
						}


						@media screen and (max-width: 1200px) {

							.bgimg {
								width: 100px !important;
								background-size: 100px !important;
								height: 75px !important;
							}

							.mirrors,
							.camera,
							.sensors,
							.smartkey,
							.steering,
							.ledlights,
							.touch,
							.audio,
							.pas,
							.cluster,
							.alloy {

								/*position: absolute !important;
                                width: 300px !important;
                                height: 100px !important;
                                margin: auto !important;
                                top: 80% !important;
                                left: 50% !important;
                                margin-left: -150px !important;
                                height: auto !important;*/
								position: absolute !important;
								width: 100% !important;
								height: 100px !important;
								margin: auto !important;
								top: -80% !important;
								left: 0% !important;
								height: auto !important;
							}

							.tooltext {
								width: 150px !important;
								font-size: 12px !important;
							}

							.tooltext h5 {
								padding-top: 0px !important;
								margin-top: 5px !important;
								font-size: 16px !important;
								margin-bottom: 5px !important;
								padding-bottom: 0px !important;
							}
						}
					</style>

				</header>

				<div class="entry-content">

					<img class="logoheader" src="<?php echo get_stylesheet_directory_uri();?>/niro/niro-logo.jpg" />
					<br>
					<p style="clear:both; text-align:left;">
						<strong>Two hearts beat as one</strong> - Is it really possible to save gas and the environment while driving a car? Is the
						answer to use a different type of gas? What if you could switch your gas Engine OFF even while you drive? Introducing
						the ALL NEW KIA NIRO! Two hearts – one is the gasoline powered engine. One is the electric powered motor. Together
						they beat as one– that’s called HYBRID. </p>
					<br>

					<div class="buttonBox">
						<ul class="navlist">

							<li class="active">
								<a href="<?php echo get_page_link(2032); ?>">Features</a>
							</li>

							<li>
								<a href="<?php echo get_page_link(2043); ?>">Technology</a>
							</li>

							<li>
								<a href="<?php echo get_page_link(2045);?>">360° View and Colours</a>
							</li>

							<li>
								<a href="<?php echo get_page_link(2041); ?>">eBrochure</a>
							</li>

							<li>
								<a href="<?php echo get_page_link(2039); ?>">Videos</a>
							</li>

						</ul>
					</div>

					<div style="position:relative;">
						<!-- beginning of features box -->
						<div class="diagram" id="mountain">
							<div class="annotations">
								<div class="poi" alt="oneAnnon" id="oneA">+</div>
								<div class="poi" alt="twoAnnon" id="twoA">+</div>
								<div class="poi" alt="threeAnnon" id="threeA">+</div>
								<div class="poi" alt="fourAnnon" id="fourA">+</div>
								<div class="poi" alt="fiveAnnon" id="fiveA">+</div>
								<div class="poi" alt="sixAnnon" id="sixA">+</div>
								<div class="poi" alt="sevenAnnon" id="sevenA">+</div>
								<div class="poi" alt="eightAnnon" id="eightA">+</div>
								<div class="poi" alt="nineAnnon" id="nineA">+</div>
								<div class="poi" alt="tenAnnon" id="tenA">+</div>
								<div class="poi" alt="eleAnnon" id="eleA">+</div>
							</div>
							<img id="features" src="<?php echo get_stylesheet_directory_uri();?>/niro/featurespage/AnnotatedImage.png" border="0" usemap="#rio"
							    alt="" />
						</div>


						<div id="featureboxes">
							<div class="mirrors oneAnnon parts_popover">
								<h5 color="#c1132e!important">Backup Camera</h5>
								<img src="<?php echo get_stylesheet_directory_uri()?>/niro/featurespage/BackupCamera.jpg" alt="">
								<p>Get the whole picture when backing up. With the standard rear-camera display you’ll stay in the know about obstacles
									when reversing
								</p>
							</div>

							<div class="steering sixAnnon parts_popover">
								<h5 color="#c1132e!important">Power Sunroof </h5>
								<img src="<?php echo get_stylesheet_directory_uri()?>/niro/featurespage/PowerSunroof.jpg" alt="">
								<p>An available power sunroof that offers fresh air and sunlight at the push of a button.</p>
							</div>

							<div class="camera fiveAnnon parts_popover">
								<h5 color="#c1132e!important">Blind Spot Detection</h5>
								<img src="<?php echo get_stylesheet_directory_uri()?>/niro/featurespage/BlindSpotDetection.jpg" alt="">
								<p>If someone is in your bland spot, you’ll know. Available blind-spot detection gives you an alert when a driver passes
									through it. And lane-change assist notifies you if it’s a bad time to switch lanes.</p>
							</div>

							<div class="smartkey sevenAnnon parts_popover">
								<h5 color="#c1132e!important">Steering Wheel mounted Controls</h5>
								<img src="<?php echo get_stylesheet_directory_uri()?>/niro/featurespage/SteeringWheelControls.jpg" alt="">
								<p>Built-in Bluetooth® connects paired, compatible mobile devices seamlessly with the audio system for music streaming
									and hands-free mobile communication.</p>
							</div>


							<div class="sensors tenAnnon parts_popover">
								<h5 color="#c1132e!important">Wireless cell phone charging</h5>
								<img src="<?php echo get_stylesheet_directory_uri()?>/niro/featurespage/WirelessCellCharge.jpg" alt="">
								<p>Charge a compatible mobile phone wirelessly on the charging pad located at the front of the center console. There’s
									no need to find and connect a cord. An illuminated indicator informs you of the charging status.</p>
							</div>



							<div class="ledlights twoAnnon parts_popover">
								<h5 color="#c1132e!important">LED Daytime Running Lights and Fog lamps</h5>
								<img src="<?php echo get_stylesheet_directory_uri()?>/niro/featurespage/LEDLights.jpg" alt="">
								<p>Energy-efficient LED daytime running lamps and Xenon High Intensity Discharge (HID) headlights offer quick illumination
									and crisp lighting of the road ahead.</p>
							</div>




							<div class="alloy eleAnnon parts_popover">
								<h5 color="#c1132e!important">18” Alloy Wheels</h5>
								<img src="<?php echo get_stylesheet_directory_uri()?>/niro/featurespage/18Wheels.jpg" alt="">
								<p>Machine Finished. 225/45R18 Tires. Tire Mobility Kit included.</p>
							</div>

							<div class="cluster eightAnnon parts_popover">
								<h5 color="#c1132e!important">Colour TFT Cluster Instrument Cluster</h5>
								<img src="<?php echo get_stylesheet_directory_uri()?>/niro/featurespage/ColourCluster.jpg" alt="">
								<p>A tasteful, intelligently designed, customizable supervision cluster displays temperature, monitors tire pressure
									and other essential vehicle and trip information. It also displays the status of the hybrid charging system, including
									fuel and battery levels and usage. Its high-resolution screen makes it easy to read a myriad of information at a
									glance.</p>
							</div>

							<div class="pas threeAnnon parts_popover">
								<h5 color="#c1132e!important">Parking Assist System (PAS)</h5>
								<img src="<?php echo get_stylesheet_directory_uri()?>/niro/featurespage/PAS.jpg" alt="">
								<p>For confident parking, PAS uses ultrasonic sensors mounted on the front and rear bumpers to warn of any obstacles
									when maneuvering into tight spaces.</p>
							</div>

							<div class="audio fourAnnon parts_popover">
								<h5 color="#c1132e!important">Harmon/ Kardon® Premium audio system</h5>
								<img src="<?php echo get_stylesheet_directory_uri()?>/niro/featurespage/HAC.jpg" alt="">
								<p>Get the most out of your music by connecting it to the Niro using standard Bluetooth®. Then, hear the difference
									the available Harman/ Kardon® premium sound system can make.</p>
							</div>


							<div class="touch nineAnnon parts_popover">
								<h5 color="#c1132e!important">5” Colour TFT/ LCD Touch Screen Audio</h5>
								<img src="<?php echo get_stylesheet_directory_uri()?>/niro/featurespage/TouchScreen.jpg" alt="">
								<p>The easy-to-use colour 5” colour TFT-LCD touch screen gives you control of the powerful 6-speaker audio system. Enjoy
									high-fidelity radio, or access your personal audio device via USB, auxiliary plug or Bluetooth®. Optional RDS offers
									high-quality digital programming. Adjust volume an select tracks or stations though integrated steering-wheel remote
									controls. The rearview camera displays dynamic guide lines on the LCD touch screen.</p>
							</div>


						</div>

					</div>
					<!-- end of features box -->

				</div>
				<br>

		</div>
		<br>

		<?php the_content(); ?>


		</br>

		<div class="row">
			<div class="col-sm-12 col-md-3 col-lg-3 nirotiled">
				<a href="javascript:void(0);" class="tiledpopup">
					<img src="<?php echo get_stylesheet_directory_uri()?>/niro/featurespage/Silhouette.jpg" alt="Ingenious Silhouette" class="img-responsive">
				</a>
				<h2>Ingenious Silhouette</h2>
				<p>The graceful profile not only contributes to the sporty, muscular appearance but also gives the Niro a class-leading
					0.29 coefficient of drag. From every angle, the Niro grabs the eye and sets an intriguing new design benchmark for hybrid
					vehicles. It’s stylish around town. It’s right at home out in the country. And it looks smart everywhere in between.</p>
			</div>

			<div class="col-sm-12 col-md-3 col-lg-3 nirotiled">
				<a href="javascript:void(0);" class="tiledpopup">
					<img src="<?php echo get_stylesheet_directory_uri()?>/niro/featurespage/Alluringfront.jpg" alt="Ingenious Silhouette" class="img-responsive">
				</a>
				<h2>Alluring Front</h2>
				<p>The sporty front spoiler hints at the hybrid crossover’s progressive design. Vertical air curtains look sporty and boost
					aerodynamics. Signature silver garnishes harmonize throughout. Roof rails, a high belt line and 18” alloy wheels round
					it out.</p>
			</div>

			<div class="col-sm-12 col-md-3 col-lg-3 nirotiled">
				<a href="javascript:void(0);" class="tiledpopup">
					<img src="<?php echo get_stylesheet_directory_uri()?>/niro/featurespage/StrikingBack.jpg" alt="Ingenious Silhouette" class="img-responsive">
				</a>
				<h2>Striking Rear</h2>
				<p>Be surprised by the new Niro’s attractive rear. With the ultra-modern look of C-shaped LED combination lamps, signature
					silver garnishes and distinctive curves. Curved body lines flanking the side windows help to minimize vortex turbulence
					and drag, while a rear diffuser helps manage airflow.</p>
			</div>


			<div class="col-sm-12 col-md-3 col-lg-3 nirotiled">
				<a href="javascript:void(0);" class="tiledpopup">
					<img src="<?php echo get_stylesheet_directory_uri()?>/niro/featurespage/VSM.jpg" alt="Ingenious Silhouette" class="img-responsive">
				</a>
				<h2>Vehicle Stability Management (VSM)</h2>
				<p>A safety feature that adds steering direction control capability. It intervenes when appropriate to help the driver regain
					control of the vehicle.</p>
			</div>

			<div class="clearfix"></div>

			<div class="col-sm-12 col-md-3 col-lg-3 nirotiled">
				<a href="javascript:void(0);" class="tiledpopup">
					<img src="<?php echo get_stylesheet_directory_uri()?>/niro/featurespage/RCTA.jpg" alt="Ingenious Silhouette" class="img-responsive">
				</a>
				<h2>Rear Cross Traffic Alert (RCTA)</h2>
				<p>When you back out of a parking spot or driveway, this system gives you a warning if it detects any cross traffic in the
					lane the vehicle is entering.</p>
			</div>

			<div class="col-sm-12 col-md-3 col-lg-3 nirotiled">
				<a href="javascript:void(0);" class="tiledpopup">
					<img src="<?php echo get_stylesheet_directory_uri()?>/niro/featurespage/Luggage.jpg" alt="Ingenious Silhouette" class="img-responsive">
				</a>
				<h2>427 Litres of Luggage</h2>
				<p>The rear seatbacks split 60:40 and fold completely flat for maximum cargo capacity and flexibility. Because the seatback
					fold flat, the cargo area can accommodate large boxes or a stack of flat items. Along with a spacious cargo area, the
					Niro comes with available concealed storage and seats that fold down to give you more room for larger items. It’s on-the-go
					versatility for everyday driving.</p>
			</div>

			<div class="col-sm-12 col-md-3 col-lg-3 nirotiled">
				<a href="javascript:void(0);" class="tiledpopup">
					<img src="<?php echo get_stylesheet_directory_uri()?>/niro/featurespage/Interior.jpg" alt="Ingenious Silhouette" class="img-responsive">
				</a>
				<h2>Interior</h2>
				<p>Settle into the spacious cabin of the All-New Niro and you'll find a soothing balance of technology and comfort. Relax
					in leather seats (model dependent) with an integrated memory system on the range-topping 'First edition' that keeps
					you poised for every journey. Explore an array of controls and displays designed to help you stay focused on the road
					ahead.</p>
			</div>

			<div class="col-sm-12 col-md-3 col-lg-3 nirotiled">
				<a href="javascript:void(0);" class="tiledpopup">
					<img src="<?php echo get_stylesheet_directory_uri()?>/niro/featurespage/ESC.jpg" alt="Ingenious Silhouette" class="img-responsive">
				</a>
				<h2>Electronic Stability Control (ESC)</h2>
				<p>ESC ensures optimal braking performance and directional control by automatically delivering the right amount of braking
					force to each wheel according to engine torque and driving conditions.</p>
			</div>

			<div class="clearfix"></div>

			<div class="col-sm-12 col-md-3 col-lg-3 nirotiled">
				<a href="javascript:void(0);" class="tiledpopup">
					<img src="<?php echo get_stylesheet_directory_uri()?>/niro/featurespage/HAC.jpg" alt="Ingenious Silhouette" class="img-responsive">
				</a>
				<h2>Hill-Start Assist Control (HAC)</h2>
				<p>An added measure of security when moving from a stop on a steep hill by preventing the vehicle from rolling backward.
					It functions by gently applying the brakes for two seconds while you move your foot from the brake pedal to the accelerator.
					</p>
			</div>

			<div class="col-sm-12 col-md-3 col-lg-3 nirotiled">
				<a href="javascript:void(0);" class="tiledpopup">
					<img src="<?php echo get_stylesheet_directory_uri()?>/niro/featurespage/Passive Safety.jpg" alt="Ingenious Silhouette" class="img-responsive">
				</a>
				<h2>Passive Safety</h2>
				<p>The new Kia Niro is fitted with 7 airbags as standard, including one for the driver’s knees. Made of strong Advanced
					High Strength Steel (AHSS), the car’s phenomenally rigid body better protects you and your passengers – and reduces
					car damage in case of an accident.</p>
			</div>

		</div>

		<!--<iframe style="width: 880px; height: 1000px;" src="http://docs.google.com/gview?url=http://www.kiatrinidad.com/wp-content/uploads/2017/07/447-rev4.pdf&amp;embedded=true" width="300" height="150" frameborder="0"></iframe>-->



		<!-- preload first 360 image -->
		<img src="<?php echo get_stylesheet_directory_uri();?>/rio/1.png" width="1" height="1" alt="Preload 360">
		<img src="<?php echo get_stylesheet_directory_uri();?>/rio/hatch/1.png" width="1" height="1" alt="Preload 360">

	</div>

</div>
<!-- .entry-content -->

</article>
<!-- #post -->

</div>
<!-- end class=niro -->

<?php endwhile; // end of the loop. ?>

</div>
<!-- #content -->

</div>
<!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>


<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<!-- <button type="button" class="close" data-dismiss="modal">&times;</button>-->
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
				<img src="" class="imagepreview" style="width: 100%;">
			</div>
		</div>
	</div>
</div>
