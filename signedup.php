<?php
	require 'db_conn.php';
    $first_name = $_POST['First-Name'];
    $last_name = $_POST['Last-Name'];
    $email = $_POST['Email'];
    $dob = $_POST['DOB'];
    $gender = $_POST['options'];
    $nationality  = $_POST['Nationality'];
    $occupation = $_POST['occupation'];
    $address = $_POST['Address'];
    $city = $_POST['City'];
    $state = $_POST['State'];
	$mob = $_POST['Mobile-No'];
    $password = $_POST['Password'];
    $r_password = $_POST['r_password'];
	if (isset($_POST['signup']))
	{
		if ($password==$r_password){
		$sql="INSERT INTO customerlogin VALUES(DEFAULT,'".$first_name."','".$last_name."','".$email."','".$dob."','".$gender."','".$nationality."','".$occupation."','".$address."','".$city."','".$state."','".$mob."','".$password."')";
		$result=mysqli_query($conn,$sql);
		if(!$result)
		{
			echo '<script type="text/javascript">alert("'.mysqli_error($conn).'");history.go(-1);</script>';
        }
        else
        {
			echo '<script type="text/javascript">alert("You have successfully Signed Up");(window.location = front.php");</script>';	
        }
        }
        else{
            echo '<script type="text/javascript">alert("Password Does not Match");history.go(-1);</script>';
        }
		
		
		
    }
?>
<html>
<body>
<body background="52.jpg" width="200;" content="width=device-width, initial-scale=1.0">

    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header"content="width=device-width, initial-scale=1.0"  ><!--body-->
        <header style="color:black;background-color:#7895CB;"" class="mdl-layout__header" ><!--##################-->
            <div class="mdl-layout__header-row" style="background-color:#C3EDC0;" >
                <!-- Title -->
                <!--<span class="mdl-layout-title">Home</span>-->
                <!-- Add spacer, to align navigation to the right -->
                <div class="mdl-layout-spacer" style="background-color:#C3EDC0;"></div>
                <!-- Navigation. We hide it in small screens. -->
               <!-- <nav class="mdl-navigation mdl-layout--large-screen-only" style="background-color:#C3EDC0;">
				 <!--<a class="mdl-navigation__link" href="index.html">Home</a>-->
                <!--  <a  style="color:white;" class="mdl-navigation__link" href="home.php">Home</a>
                    <a style="color:white;" class="mdl-navigation__link" href="form.php">Signup</a>
                    <a style="color:white;" class="mdl-navigation__link" href="front.php">Login</a>
                    <a style="color:white;" class="mdl-navigation__link" href="Aboutus.php">About Us</a>
                    <a style="color:white;" class="mdl-navigation__link" href="Admin_login.php">Administrators</a>
                </nav>
            </div>-->
		
        </header>
		
        <!--<center><div class="mdl-layout__drawer" style="width:auto;background-color:white;">
           <span class="mdl-layout-title">Home</span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="home.php">Home</a>
                <a class="mdl-navigation__link" href="form.php">Signup</a>
                <a class="mdl-navigation__link" href="front.php">Login</a>
                <a class="mdl-navigation__link" href="Aboutus.php">About Us</a>
                <a class="mdl-navigation__link" href="Admin_login.php">Administrators</a>
            </nav>
        </div>-->
        <main class="mdl-layout__content" content="width=device-width, initial-scale=1.0">
            <div class="page-content">
                <!-- Your content goes here -->

                <!--ul>
                    <li><a href="">Home</a></li>
                    <li><a href="front.html">Login</a></li>
                    <li><a href="form.html">Sign Up</a></li>
                    <li><a href="">Contact Us</a></li>
                </ul-->
                <div align="center">
                <div class="demo-card-wide mdl-card mdl-shadow--16dp" style="text-align:center;width:550px;padding:1em 0;height:50px" >  <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&timezone=Asia%2FKolkata" width="100%" height="150" frameborder="0" seamless></iframe></div>
                
                </div><center>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><h1>SUCCESSFULLY SIGNED UP</h1>
<Br><br><br>
<center>
<button onclick="window.location.href = 'front.php';"><h5>Click here!!</button>
 
</form>
</body>
</html>