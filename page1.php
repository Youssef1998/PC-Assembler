	
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

			<input type="radio" name="radio-set" id="st-control-1"/>
			<a href="#st-panel-1">CPU</a>
			<input type="radio" name="radio-set" id="st-control-2"/>
			<a href="#st-panel-2">CPU COOLER</a>
			<input type="radio" name="radio-set" id="st-control-3"/>
			<a href="#st-panel-3">MOTHERBOARD</a>
			<input type="radio" name="radio-set" id="st-control-4"/>
			<a href="#st-panel-4">MEMORY</a>
		
			<inbut tybe="radio" name="radio-set" id="st-control-10">
			</inbut>
			<a href="page2.php">NEXT</a>
				

			

			<div class="st-scroll">

				<section class="st-panel " id="st-panel-1">
					<div class="NavBar"><div class="Logo">
						<img src="images/logo.png" alt="" height="70px" ></div>
					</div>
					
					<div id="FirstPageContent">
						<h2>CPU</h2>
						<div class="test" >
							<table>
								<table class="table table-hover table-striped">
									<thead>
										<tr>
											<th scope="col-md-5">#</th>
											<th scope="col">CPU</th>
											<th scope="col">SPEED</th>
											<th scope="col">CORES</th>
											<th scope="col">PRICE</th>
											<th scope="col"></th>
										</tr>
									</thead>
									<tbody>
									<?php
									$result = mysqli_query($con,"SELECT * FROM cpu");
									while($row = mysqli_fetch_array($result))
									{
									echo "<tr>";
									echo "<td>" . $row['#'] . "</td>";
									echo "<td>" . $row['NAME'] . "</td>";
									echo "<td>" . $row['SPEED'] . "</td>";
									echo "<td>" . $row['CORES'] . "</td>";
									echo "<td>" . $row['PRICE'] . "</td>";
									echo "<form id='my_form' onsubmit='submitForm(); return false;'>";
									echo "<td>"."<input id='mybtn' type='submit' value='Add' >"." <span id='status'>"."</span>"."</td>";
									echo "</form>";
									echo "</tr>";
									}
									
									?> 

									</tbody>
								</table>
							</table>
							
						</div>

					</div>
				</section>
				<section class="st-panel" id="st-panel-2">
					<div class="NavBar"><div class="Logo">	<img src="images/logo.png" alt="" height="70px" ></div></div>
					<div id="SecondPageContent">
						<h2>CPU COOLER</h2>
						<div class="test">
							<table>
								<table class="table table-hover table-striped">
									<thead>
										<tr>
											<th scope="col-md-5">#</th>
											<th scope="col">CPU COOLER</th>
											<th scope="col">FAN RPM</th>
											<th scope="col">NOISE LEVEL</th>
											<th scope="col">PRICE</th>
											<th scope="col"></th>
										</tr>
									</thead>
									<tbody>
											
									<?php
									$result = mysqli_query($con,"SELECT * FROM cpuCooler");
									while($row = mysqli_fetch_array($result))
									{
									echo "<tr>";
									echo "<td>" . $row['#'] . "</td>";
									echo "<td>" . $row['NAME'] . "</td>";
									echo "<td>" . $row['FAN RPM'] . "</td>";
									echo "<td>" . $row['NOISE LEVEL'] . "</td>";
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
				<section class="st-panel" id="st-panel-3">
					<div class="NavBar"><div class="Logo">	<img src="images/logo.png" alt="" height="70px" ></div></div>
					<div id="ThirdPageContent">
						<h2>MOTHERBOARD</h2>
						<div class="test">
							<table>
								<table class="table table-hover table-striped">
									<thead>
										<tr>
											<th scope="col-md-5">#</th>
											<th scope="col">MOTHERBOARD</th>
											<th scope="col">SOCKET/CPU</th>
											<th scope="col">FORM FACTOR</th>
											<th scope="col">RAM SLOTS</th>
											<th scope="col">MAX RAM</th>
											<th scope="col">PRICE</th>
											<th scope="col"></th>
										</tr>
									</thead>
									<tbody>
											
									<?php
									$result = mysqli_query($con,"SELECT * FROM motherboard");
									while($row = mysqli_fetch_array($result))
									{
									echo "<tr>";
									echo "<td>" . $row['#'] . "</td>";
									echo "<td>" . $row['NAME'] . "</td>";
									echo "<td>" . $row['SOCKET/CPU'] . "</td>";
									echo "<td>" . $row['FORM FACTOR'] . "</td>";
									echo "<td>" . $row['RAM SLOTS'] . "</td>";
									echo "<td>" . $row['MAX RAM'] . "</td>";
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

				<section class="st-panel" id="st-panel-4">
					<div class="NavBar"><div class="Logo">	<img src="images/logo.png" alt="" height="70px" ></div></div>

					<div id="FourthPageContent">
						<h2>MEMORY</h2>
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
											<th scope="col">MODULES</th>
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
											<th scope="col">CPU</th>
											<th scope="col">SPEED</th>
											<th scope="col">CORES</th>
											<th scope="col">PRICE</th>
											<th scope="col"></th>
										</tr>
									<tbody>
											
									<?php
									$result = mysqli_query($con,"SELECT * FROM cpuCooler");
									while($row = mysqli_fetch_array($result))
									{
									echo "<tr>";
									echo "<td>" . $row['#'] . "</td>";
									echo "<td>" . $row['NAME'] . "</td>";
									echo "<td>" . $row['FAN RPM'] . "</td>";
									echo "<td>" . $row['NOISE LEVEL'] . "</td>";
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
											<th scope="col">CPU</th>
											<th scope="col">SPEED</th>
											<th scope="col">CORES</th>
											<th scope="col">PRICE</th>
											<th scope="col"></th>
										</tr>
									</thead>
										<tbody>
											
									<?php
									$result = mysqli_query($con,"SELECT * FROM cpuCooler");
									while($row = mysqli_fetch_array($result))
									{
									echo "<tr>";
									echo "<td>" . $row['#'] . "</td>";
									echo "<td>" . $row['NAME'] . "</td>";
									echo "<td>" . $row['FAN RPM'] . "</td>";
									echo "<td>" . $row['NOISE LEVEL'] . "</td>";
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
											<th scope="col">CPU</th>
											<th scope="col">SPEED</th>
											<th scope="col">CORES</th>
											<th scope="col">PRICE</th>
											<th scope="col"></th>
										</tr>
									</thead>
										<tbody>
											
									<?php
									$result = mysqli_query($con,"SELECT * FROM cpuCooler");
									while($row = mysqli_fetch_array($result))
									{
									echo "<tr>";
									echo "<td>" . $row['#'] . "</td>";
									echo "<td>" . $row['NAME'] . "</td>";
									echo "<td>" . $row['FAN RPM'] . "</td>";
									echo "<td>" . $row['NOISE LEVEL'] . "</td>";
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

					<div id="EaightPageContent">
						<h2>CASE</h2>
						<div class="test">
							<table>
								<table class="table table-hover table-striped">
									<thead>
										<tr>
											<th scope="col-md-5">#</th>
											<th scope="col">CPU</th>
											<th scope="col">SPEED</th>
											<th scope="col">CORES</th>
											<th scope="col">PRICE</th>
											<th scope="col"></th>
										</tr>
									</thead>
										<tbody>
											
									<?php
									$result = mysqli_query($con,"SELECT * FROM cpuCooler");
									while($row = mysqli_fetch_array($result))
									{
									echo "<tr>";
									echo "<td>" . $row['#'] . "</td>";
									echo "<td>" . $row['NAME'] . "</td>";
									echo "<td>" . $row['FAN RPM'] . "</td>";
									echo "<td>" . $row['NOISE LEVEL'] . "</td>";
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
											<th scope="col">CPU</th>
											<th scope="col">SPEED</th>
											<th scope="col">CORES</th>
											<th scope="col">PRICE</th>
											<th scope="col"></th>
										</tr>
									</thead>
										<tbody>
											
									<?php
									$result = mysqli_query($con,"SELECT * FROM cpuCooler");
									while($row = mysqli_fetch_array($result))
									{
									echo "<tr>";
									echo "<td>" . $row['#'] . "</td>";
									echo "<td>" . $row['NAME'] . "</td>";
									echo "<td>" . $row['FAN RPM'] . "</td>";
									echo "<td>" . $row['NOISE LEVEL'] . "</td>";
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
		

			</div><!-- // st-scroll -->

		</div><!-- // st-container -->

	</div>
	<?php
	mysqli_close($con);
	?>

</body>
<script>
function _(id){ return document.getElementById(id); }
function submitForm(){
	_("mybtn").disabled = true;
	_("status").innerHTML = '';
	var formdata = new FormData();
	formdata.append( "n", _("n").value );
	formdata.append( "e", _("e").value );
	formdata.append( "m", _("m").value );
	var ajax = new XMLHttpRequest();
	ajax.open( "POST", "example_parser.php" );
	ajax.onreadystatechange = function() {
		if(ajax.readyState == 4 && ajax.status == 200) {
			if(ajax.responseText == "success"){
				_("my_form").innerHTML = '<h2>Thanks '+_("n").value+', your message has been sent.</h2>';
			} else {
				_("status").innerHTML = ajax.responseText;
				_("mybtn").disabled = false;
			}
		}
	}
	ajax.send( formdata );
}
</script>
</html>