
<?php
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Home Page</title>
	
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //Web-Fonts -->

</head>

<body>
	<?php include('includes/header.php');?>

	<!-- banner -->
	<div class="slider">
		<div class="callbacks_container">
			<ul class="rslides callbacks callbacks1" id="slider4">
				<li>
					<div class="banner-top1"style="background-image: url(images/aeroplane.jpg);">
						<div class="banner-info_agile_w3ls">
							<div class="container">
								<h3>Its Time To Travel!!</h3>
								
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="banner-top2" style="background-image: url(images/aero-2.jpg);">
						<div class="banner-info_agile_w3ls">
							<div class="container">
								<h3>AIRIND services that you can trust</h3>
								</h3>
						
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="banner-top3" style="background-image: url(images/aero-11.jpg);">
						<div class="banner-info_agile_w3ls">
							<div class="container">
								<h3>Life is a Journey
								Enjoy the Flight</h3> 
				
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- //banner -->
	<div class="clearfix"></div>

	<!-- banner bottom -->
	<div style=" background-image: url(images/background1.jpg);">
		<div class="d-flex container py-xl-3 py-lg-3">
			<div class="banner-left-bottom-w3ls offset-lg-2 offset-md-1">
				<h3 class="text-white my-3">First Class AirLines</h3>
				<p style="color:white;">Flying teaches you to seize the moment, to appreciate the beauty of the world from a different perspective</p>
			</div>
			<div class="button">
				<a href="about.php" class="w3ls-button-agile">Read More
					<i class="fas fa-hand-point-right"></i>
				</a>
			</div>
		</div>
	</div>
	<!-- //banner bottom -->
	<!-- blog -->
	<div class="blog-w3ls py-5" id="blog">
		<div class="container py-xl-5 py-lg-3">
			<div class="w3ls-titles text-center mb-5">
				<h3 class="title text-white">Our List Of Tickets</h3>
				<span>
				<i class="fa fa-tags" aria-hidden="true"></i>
				</span>
			</div>
			<div class="row package-grids mt-5">
				<?php 
$status=1;
$sql = "SELECT * from tblbloodgroup where status=:status order by rand() limit 6";
$query = $dbh -> prepare($sql);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>
				<div class="col-md-4 pricing" style="margin-top:2%;">
					
					<div class="price-top">
					   <a href="donor-list.php">
					   <img width="400px" height="200px" src="<?php echo $result->image;?>" alt="Blood Donot" style="border:1px #000 solid" class="img-fluid" />
				
					
						<h3><?php echo htmlentities($result->BloodGroup);?>
						</h3>
					</div>
					<div class="price-bottom p-4">
						<h4 class="text-dark mb-3">Price :<?php echo htmlentities($result->price);?>/-</h4>
						<p class="card-text"><b>Per Person</b></p>
					</div>
				</div></a><?php }} ?>
			
			
			</div>
		</div>
	</div>
	<!-- //blog -->

	<!-- treatments -->
	<div class="screen-w3ls py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="w3ls-titles text-center mb-5">
				<h3 class="title">The Different Types of Flight Tickets</h3>
				<span>
				<i class="fa fa-chevron-down" aria-hidden="true"></i>
				</span>
				<p class="mt-2" style="color:red; font-size: 20px;">When traveling by air,
				 travelers must first purchase a flight ticket that allows them to fly to their destination</p>
			</div>
			<div class="row">
            <div class="col-lg-6">
               
                <ul>
               
<li>One-Way Ticket</li>
<li>Round-trip Ticket</li>
<li>First Class Ticket</li>
<li>Business Class Ticket</li>
<li>Coach Ticket</li>

                </ul>
</div>
            <div class="col-lg-6">
                <img class="img-fluid rounded" src="images/aero-3.jpg" alt="">
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-8">
            <h4 style="padding-top: 30px;">What is the Airline Industry?</h4>
                <p>
				The airline industry encompasses various businesses,
				 called airlines, which offer air transport services for paying customers or business partners.
				  These air transport services are provided for both human travelers and cargo,
				 and are most commonly offered via jets, although some airlines also use helicopters.
Airlines may offer scheduled and/or chartered services. 
The airline industry forms a key part of the wider travel industry, 
allowing customers to purchase flight seats and travel to different parts of the world.
 The airline industry offers a variety of career paths, including pilots, flight attendants, and ground crew.</p>
            </div>

			<?php 
if(!isset($_SESSION['bbdmsdid'])){
?>
            <div class="col-md-4" style="padding-top: 30px;"> 
    <a href="login.php" class="btn btn-lg btn-secondary btn-block login-button ml-lg-5 mt-lg-0 mt-4 mb-lg-0 mb-3">Login</a>
            </div>
			<?php
}
?>
        </div>
		</div>
	</div>
	<!-- //treatments -->

	<!-- footer -->
	<?php include('includes/footer.php');?>


	<!-- Js files -->
	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->

	<!-- banner slider -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
	<!-- //banner slider -->

	<!-- fixed navigation -->
	<script src="js/fixed-nav.js"></script>
	<!-- //fixed navigation -->

	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- move-top -->
	<script src="js/move-top.js"></script>
	<!-- easing -->
	<script src="js/easing.js"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="js/medic.js"></script>

	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- //Js files -->

</body>

</html>