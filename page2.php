	
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "PC-Assembler";
$con = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<title>PC ASSEMBLER</title>

	<link rel="icon" href="images/logo.png">

	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta name="keywords" content="css3, transitions, animations, css-only, navigation, smooth scrolling, full width, full height, window width, window height" />
	<link href="http://fonts.googleapis.com/css?family=Josefin+Slab:400,700" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />

	<script type="text/javascript" src="js/modernizr.custom.79639.js"></script> 


	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		
		<div class="st-container">

			
			<input type="radio" name="radio-set" id="st-control-5"/>
			<a href="#st-panel-5">STORAGE</a>
			<input type="radio" name="radio-set" id="st-control-6"/>
			<a href="#st-panel-6">MONITOR</a>
			<input type="radio" name="radio-set" id="st-control-7"/>
			<a href="#st-panel-7">VIDEO CARD</a>
			<input type="radio" name="radio-set" id="st-control-8"/>
			<a href="#st-panel-8">CASE</a>
			<input type="radio" name="radio-set" id="st-control-9"/>
			<a href="#st-panel-9">POWER SUPPLY</a>


			<div class="st-scroll">


				<section class="st-panel" id="st-panel-5">
					<div class="NavBar"><div class="Logo">	<img src="images/logo.png" alt="" height="70px" ></div></div>

					<div id="FifithPageContent">
						<h2>STORAGE</h2>
						<div class="test">
							<table>
								<table class="table table-hover table-striped">
									<thead>
										<tr>
											<th scope="col-md-5">#</th>
											<th scope="col">STORAGE</th>
											<th scope="col">SERIES</th>
											<th scope="col">FORM</th>
											<th scope="col">TYPE</th>
											<th scope="col">CAPACITY</th>
											<th scope="col">CACH</th>
											<th scope="col">PRICE</th>
										</tr>
									</thead>
									<tbody>
									<?php
									$result = mysqli_query($con,"SELECT * FROM storage");
									while($row = mysqli_fetch_array($result))
									{
									echo "<tr>";
									echo "<td>" . $row['#'] . "</td>";
									echo "<td>" . $row['NAME'] . "</td>";
									echo "<td>" . $row['SERIES'] . "</td>";
									echo "<td>" . $row['FORM'] . "</td>";
									echo "<td>" . $row['TYPE'] . "</td>";
									echo "<td>" . $row['CAPACITY'] . "</td>";
									echo "<td>" . $row['CACH'] . "</td>";
									echo "<td>" . $row['PRICE'] . "</td>";
									echo "</tr>";
									}
									
									?> 

									</tbody>
								</table>
							</table>
						</div>
					</div>
				</section>
				<section class="st-panel" id="st-panel-6">
					<div class="NavBar"><div class="Logo">	<img src="images/logo.png" alt="" height="70px" ></div></div>

					<div id="SixthPageContent">
						<h2>MONITOR</h2>
						<div class="test">
							<table>
								<table class="table table-hover table-striped">
									<thead>
										<tr>
											<th scope="col-md-5">#</th>
											<th scope="col">MEMORY</th>
											<th scope="col">SPEED</th>
											<th scope="col">TYPE</th>
											<th scope="col">CAS</th>
											<th scope="col">MODULES</th>
											<th scope="col">SIZE</th>
											<th scope="col">PRICE</th>
											<th scope="col"></th>
										</tr>
									</thead>
								<tbody>
									<?php
									$result = mysqli_query($con,"SELECT * FROM memory");
									while($row = mysqli_fetch_array($result))
									{
									echo "<tr>";
									echo "<td>" . $row['#'] . "</td>";
									echo "<td>" . $row['NAME'] . "</td>";
									echo "<td>" . $row['SPEED'] . "</td>";
									echo "<td>" . $row['TYPE'] . "</td>";
									echo "<td>" . $row['CAS'] . "</td>";
									echo "<td>" . $row['MODULES'] . "</td>";
									echo "<td>" . $row['SIZE'] . "</td>";
									echo "<td>" . $row['PRICE'] . "</td>";
									echo "</tr>";
									}
									
									?> 

									</tbody>
								</table>
							</table>
						</div>
					</div>
				</section>
				<section class="st-panel" id="st-panel-7">
					<div class="NavBar"><div class="Logo">	<img src="images/logo.png" alt="" height="70px" ></div></div>
					<div id="SeventhPageContent">
						<h2>VIDEO CARD</h2>
						<div class="test">
							<table>
								<table class="table table-hover table-striped">
									<thead>
										<tr>
											<th scope="col-md-5">#</th>
											<th scope="col">VIDEO CARD</th>
											<th scope="col">SERIES</th>
											<th scope="col">CHIPSET</th>
											<th scope="col">MEMORY</th>
											<th scope="col">CORE CLOCK</th>
											<th scope="col">PRICE</th>
											<th scope="col"></th>
										</tr>
									</thead>
								<tbody>
									<?php
									$result = mysqli_query($con,"SELECT * FROM gpu");
									while($row = mysqli_fetch_array($result))
									{
									echo "<tr>";
									echo "<td>" . $row['#'] . "</td>";
									echo "<td>" . $row['NAME'] . "</td>";
									echo "<td>" . $row['SERIES'] . "</td>";
									echo "<td>" . $row['CHIPSET'] . "</td>";
									echo "<td>" . $row['MEMORY'] . "</td>";
									echo "<td>" . $row['CORE CLOCK'] . "</td>";
									echo "<td>" . $row['PRICE'] . "</td>";
									echo "</tr>";
									}
									
									?> 

									</tbody>
								</table>
							</table>
						</div>
					</div>

				</section>
				<section class="st-panel" id="st-panel-8">
					<div class="NavBar"><div class="Logo">	<img src="images/logo.png" alt="" height="70px" ></div></div>

					<div id="EaighthPageContent">
						<h2>CASE</h2>
						<div class="test">
							<table>
								<table class="table table-hover table-striped">
									<thead>
										<tr>
											<th scope="col-md-5">#</th>
											<th scope="col">CASE</th>
											<th scope="col">TYPE</th>
											<th scope="col">EXT 5.25</th>
											<th scope="col">INT 3.5</th>
											<th scope="col">POWER SUPPLY</th>
											<th scope="col">PRICE</th>
											<th scope="col"></th>
										</tr>
									</thead>
									<	<tbody>
									<?php
									$result = mysqli_query($con,"SELECT * FROM cas");
									while($row = mysqli_fetch_array($result))
									{
									echo "<tr>";
									echo "<td>" . $row['#'] . "</td>";
									echo "<td>" . $row['NAME'] . "</td>";
									echo "<td>" . $row['TYPE'] . "</td>";
									echo "<td>" . $row['EXT 5.25'] . "</td>";
									echo "<td>" . $row['INT 3.5'] . "</td>";
									echo "<td>" . $row['POWER SUPPLY'] . "</td>";
									echo "<td>" . $row['PRICE'] . "</td>";
									echo "</tr>";
									}
									
									?> 

									</tbody>
								</table>
							</table>
						</div>
					</div>
				</section>
				<section class="st-panel" id="st-panel-9">
					<div class="NavBar"><div class="Logo">	<img src="images/logo.png" alt="" height="70px" ></div></div>
					<div id="NinthPageContent">
						<h2>POWER SUPPLY</h2>
						<div class="test">
							<table>
								<table class="table table-hover table-striped">
									<thead>
										<tr>
											<th scope="col-md-5">#</th>
											<th scope="col">POWER SUPPLY</th>
											<th scope="col">SERIES</th>
											<th scope="col">FORM</th>
											<th scope="col">EFFICIENCY</th>
											<th scope="col">WATTS</th>
											<th scope="col">MODULAR</th>
											<th scope="col">PRICE</th>
											<th scope="col"></th>
										</tr>
									</thead>
									<tbody>
									<?php
									$result = mysqli_query($con,"SELECT * FROM power");
									while($row = mysqli_fetch_array($result))
									{
									echo "<tr>";
									echo "<td>" . $row['#'] . "</td>";
									echo "<td>" . $row['NAME'] . "</td>";
									echo "<td>" . $row['SERIES'] . "</td>";
									echo "<td>" . $row['FORM'] . "</td>";
									echo "<td>" . $row['EFFICIENCY'] . "</td>";
									echo "<td>" . $row['WATTS'] . "</td>";
									echo "<td>" . $row['MODULAR'] . "</td>";
									echo "<td>" . $row['PRICE'] . "</td>";
									echo "</tr>";
									}
									
									?> 

									</tbody>
								</table>
							</table>
							<BUTTON class="btn btn-warning" style="width: 150px;
	height: 40px;right:50px;" >DONE</BUTTON>
						</div>
					</div>
				</section>
		

			</div><!-- // st-scroll -->

		</div><!-- // st-container -->

	</div>
</body>
<script>

</script>
</html>