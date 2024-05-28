<html>
<!-- (notes!!)This is The HTML and PHP with css For Selection of Formulas -->
	<head>
		<title>Formulas and Solution</title>
	</head>
	<style>
*{
	margin: 0;
	padding: 0; 
	font-family: san-serif;
}
html{
	width: 100%;
	min-height: 100%;
	background-image:linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(Image/background.jpg);
	background-size: cover;
	object-fit: cover;	 
	background-position: center;
	background-repeat: no-repeat;
}
body {
    text-align: center;
}
#content h1{
	font-family: "Papyrus";
	font-size: 70px;
	margin-top: 10%;
	color: white;
}
#content h3{
	font-family: "Garamond";
	font-size: 20px;
	margin: 20px auto;
	font-weight: 100;
	line-height: 25px;
	color: white;
}
/* Form css style */
.form {
    display: inline-block;
}
/* select button css */	
select {
        margin-bottom: 10px;
        margin-top: 10px;
        font-family: cursive, sans-serif;
        outline: 0;
        background: #3e4040;
        color: #fff;
        border: 1px solid #3d3c3b;
        padding: 4px;
        border-radius: 9px;
      }
/* Label for text box CSS */
label {
        margin-bottom: 10px;
        margin-top: 10px;
        font-family: cursive, sans-serif;
        color: #fff;
        padding: 4px;
      }
/* Input Or text Box Css */
input[type=number]{
		margin-bottom: 10px;
        margin-top: 10px;
        font-family: cursive, sans-serif;
        outline: 0;
        background: #3e4040;
        color: #fff;
        border: 1px solid #3d3c3b;
        padding: 4px;
        border-radius: 9px;
	 }
input[type=submit]{
		margin-bottom: 10px;
        margin-top: 10px;
        font-family: cursive, sans-serif;
        outline: 0;
        background: #3e4040;
        color: #fff;
        border: 1px solid #3d3c3b;
        padding: 4px;
        border-radius: 9px;
		cursor: pointer;
}
/* Label style for php Echo */
span{
		margin-bottom: 10px;
        margin-top: 10px;
        font-family: cursive, sans-serif;
        color: #fff;
        padding: 4px;
}
/* to Display image side by side */
.container {
  display: flex;
  width: 100%;
  padding: 4% 2%;
  box-sizing: border-box;
  height: 100vh;
}

.box {
  flex: 1;
  overflow: hidden;
  transition: .5s;
  margin: 0 2%;
  box-shadow: 0 20px 30px rgba(0,0,0,.1);
  line-height: 0;
}
/* Image style or hover */
.box > img {
  width: 100%;
  height: calc(50% - 10vh);
  object-fit: cover; 
  transition: .5s;
  opacity: 0.6;
}

.box > span {
  font-size: 3.8vh;
  display: block;
  text-align: center;
  height: 10vh;
  line-height: 2.6;
}

.box:hover { flex: 1 1 20%; }
.box:hover > img {
  width: 100%;
  height: 100%;
  opacity:1;
}
 </style>
	<body>
		<div id="content">
		<h1>Cypher's Group </h1>
		<h3>This website is Design to calculate Different Formula's.</h3>
		</div>
			<!--Form for selection Text Box -->
			<form  method="post">
				<label>Pick a Solution</label>
					<select name="formula">
						<option  value="none">Select a Solution</option>
						<option  value="circle" name="circle">Area, Circumference and Diameter of a Circle</option>
						<option  value="Temperature">Conversion of Fahrenheit to Celsius</option>
						<option  value="Triangle">Area of a Triangle</option>
						<option  value="Rectangle">Area and Perimeter of a Rectangle</option>
					</select>
						<input type="submit" value = "Select"/><span/>
			</form>
<?php if($_POST['formula'] == 'circle'): ?>
				<form method="post"> <!--This is link to a Circle PHP-->
						<label>Enter a Radius:</label><input TYPE="number" name="Radius" required>
										              <input type="submit" value="Submit" name="button1"/>
					</form> 
				<?php 
			endif;// endif for case circle
					// condition to know if the button for Circle was submitted..
					if(isset($_POST['button1'])) {
				?>
				<form  method="post"> <!--This is link to a Circle PHP-->
						<label>Enter a Radius:</label><input TYPE="number" name="Radius"required>
										              <input type="submit" value="Submit" name="button1"/>  
					</form> 
					<?php
						$radius = $_POST['Radius'];
						$area = pi() * pow($radius, 2);      // pow() is used to find the power
						$area = round($area, 3);            // round() is used to limit the number of digit after the decimal
						$circumference = 2 * pi() * $radius;
						$circumference = round($circumference, 3);
						$diameter = 2 * $radius;
						echo nl2br ("<span>"."\r\nYou enter " .$radius ." as Radius"."</span>");
						echo nl2br ("<span>"."\r\n\r\nThe Area of circle is " .$area ."</span>");
						echo nl2br ("<span>"."\r\n\r\nThe Circumference of the circle is " .$circumference."</span>");
						echo nl2br ("<span>"."\r\n\r\nThe Diameter of the circle is " .$diameter."</span>");
					?>
					<div class="container">
						<div class="box">
							<img src="Image/Circle/AreaCircle.jpg" alt="Area" style="width:100%">
							<span>Area of Circle</span>
						</div>
						<div class="box">
							<img src="Image/Circle/CircumferenceCircle.jpg" alt="Area" style="width:100%">
							<span>Circumference of Circle</span>
						</div>
						<div class="box">
							<img src="Image/Circle/DiameterCircle.jpg" alt="Area" style="width:100%">
							<span>Diameter of Circle</span>
						</div>
					</div>
			<?php 
			} // closing tag for if statement
			 //closing tag for formula if option
			if($_POST['formula'] == 'Temperature'):
			?>
				<form  method="post"><!--This is link to a Temperature PHP-->
						<label>Enter a Fahrenheit:</label><input TYPE="number" name="Fahrenheit" required>
										                  <input type="submit" value="Submit" name="button2"/> 
					</form> 
				<?php 
			endif;// endif for case Temperature
					// condition to know if the button for Converting Temperature was submitted..
				if(isset($_POST['button2'])) {
					?>
					<form  method="post"><!--This is link to a Temperature PHP-->
							<label>Enter a Fahrenheit:</label><input TYPE="number" name="Fahrenheit"required>
															  <input type="submit" value="Submit" name="button2"/>  
						</form> 
					<?php
						$fahrenheit = $_POST['Fahrenheit'];
						$celsius = ($fahrenheit - 32);    // converting temperature
						$celsius = $celsius * 5/9;         
						$celsius = round($celsius, 3);   // round() is used to limit the number of digit after the decimal
						echo nl2br ("<span>"."\r\n\r\nYou enter " .$fahrenheit . "&deg;F "."</span>");
						echo nl2br ("<span>"."\r\n\r\nConverting to Celsius "."</span>");
						echo nl2br ("<span>"."\r\n\r\n ".$fahrenheit ." &deg;F is " .$celsius ." &deg;C"."</span>");
				
			?>
							<div class="container">
								<div class="box">
									<img src="Image/Temperature/Convert.jpg" alt="Area" style="width:100%">
									<span>How to Convert</span>
								</div>
								<div class="box">
									<img src="Image/Temperature/fahrenheit.png" alt="Area" style="width:100%">
									<span>Fahrenheit meter</span>
								</div>
								<div class="box">
									<img src="Image/Temperature/Equal.png" alt="Area" style="width:100%">
									<span>Equal Point Value</span>
								</div>
							</div>
			<?php 
			}		// closing tag for if statement
			if($_POST['formula'] == 'Triangle'):
			?>
				<form method="post"> <!--This is link to a Triangle PHP-->
						<label>Enter a base:</label>  <input TYPE="number" name="base"required>
						<label>Enter a height:</label><input TYPE="number" name="height"required>
										              <input type="submit" value="Submit" name="button3"/>  .
					</form> 
					<?php
			endif;// break for case Triangle
					// condition to know if the button for triangle was submitted..
					if(isset($_POST['button3'])) {
					?>
						<form method="post"> <!--This is link to a Triangle PHP-->
								<label>Enter a base:</label>  <input TYPE="number" name="base"required>
								<label>Enter a height:</label><input TYPE="number" name="height"required>
															  <input type="submit" value="Submit" name="button3"/>  .
							</form> 
						<?php
						$base = $_POST['base'];
						$height = $_POST['height'];
						$triangle = 1/2 * $base * $height; // solving Area of triangle   
						$triangle = round($triangle, 3);     // round() is used to limit the number of digit after the decimal
						echo nl2br ("<span>"."\r\n\r\nYou enter " .$base . " as base and " .$height." as height"."</span>");
						echo nl2br ("<span>"."\r\n\r\nArea of triangle are " .$triangle."</span>");
						?>
							<div class="container">
									<div class="box">
										<img src="Image/Triangle/Triangle.jpg" alt="Area" style="width:100%">
										<span>Formula of Triangle</span>
									</div>
									<div class="box">
										<img src="Image/Triangle/TriangleFormula.png" alt="Area" style="width:100%">
										<span>Area of Triangle</span>
									</div>
									<div class="box">
										<img src="Image/Triangle/TriangleAngle.jpg" alt="Area" style="width:100%">
										<span>Triangle</span>
									</div>
								</div>
			<?php
			} // closing for if	
			if($_POST['formula'] == 'Rectangle'):
			?>
				<form  method="post"> <!--This is link to a Rectangle PHP-->
						<label>Enter a lenght:</label><input TYPE="number" name="lenght"required>
						<label>Enter a width:</label> <input TYPE="number" name="width"required>
										              <input type="submit" value="Submit" name="button4"/>  .
					</form> 
					<?php 
			endif;
					// condition to know if the button for Rectangle was submitted..
					if(isset($_POST['button4'])) {
					?>
						<form  method="post"> <!--This is link to a Rectangle PHP-->
								<label>Enter a lenght:</label><input TYPE="number" name="lenght"required>
								<label>Enter a width:</label> <input TYPE="number" name="width"required>
															  <input type="submit" value="Submit" name="button4"/>  .
							</form> 
						<?php
						$lenght = $_POST['lenght'];
						$width = $_POST['width'];
						$area = $lenght * $width; // solving Area of Rectangle   
						$perimeter=(2*$lenght) + (2*$width);;     // solving Area of Perimeter
						$area = round($area, 3); // round() is used to limit the number of digit after the decimal
						$perimeter = round($perimeter, 3);
						echo nl2br ("<span>"."\r\n\r\nYou enter " .$lenght . " as lenght and " .$width." as width"."</span>");
						echo nl2br ("<span>"."\r\n\r\nArea of Rectangle are " .$area."</span>");
						echo nl2br ("<span>"."\r\n\r\nPerimeter of Rectangle are " .$perimeter."</span>");
			
						?>
							<div class="container">
									<div class="box">
										<img src="Image/Rectangle/AreaRectangle.jpg" alt="Area" style="width:100%">
										<span>Area of Rectangle</span>
									</div>
									<div class="box">
										<img src="Image/Rectangle/PerimeterRectangle.png" alt="Area" style="width:100%">
										<span>Perimeter of Rectangle</span>
									</div>
									<div class="box">
										<img src="Image/Rectangle/Rectangle.png" alt="Area" style="width:100%">
										<span>Rectangle formula</span>
									</div>
								</div>
			<?php } ?>
</body>
</html>