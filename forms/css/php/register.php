<!DOCTYPE html>
<html>
<head>
	<title>Register Form</title>
</head>
<body style="background-image: url(images/phpbg.png);">

	<?php
        $name=$_POST['Name'];
		$gender=$_POST['Gender'];
		$mob_no=$_POST['Phone'];
		$email=$_POST['Email_id'];
		$password=$_POST['Password'];
		$age=$_POST['Age'];
		$bdate=$_POST['Birthdate'];
		$country=$_POST['Country'];
		$state=$_POST['State'];
		$city=$_POST['City'];
		$locality=$_POST['Locality'];
		$Pass=$_POST['Password'];
       $conn = mysqli_connect("localhost","root","","donate");
        
        $sql="INSERT INTO register(User_Id,Name,Gender,Mob_no,Email,Password,Age,State,City,Locality,Birth_date) VALUES('','$name','$gender','$mob_no','$email','$password','$age','$country','$state','$city','$locality','$bdate','$Pass')";
				
        mysqli_query($conn,$sql);
    
    ?>
				<center>
				<h1 style=" font-family:mt script; color:#white;"> Holiday Hotels</h1>
				<h2 style=" font-family:mt script; color:#white;"> Congratulations Dear Customer <?php echo "$name"; ?></h4>
				<h3 style=" font-family:mt script; color:#white;"> Your Details Are As Follows:</h2><br/>
				<h4>UserId : <?php echo "$val"; ?></h4>
				<h4>Name : <?php echo "$name"; ?></h4>
				<h4>Gender : <?php echo "$gender"; ?></h4>
				<h4>Mobile No : <?php echo "$mob_no"; ?></h4>
				<h4>Email Id : <?php echo "$email"; ?></h4>
				<h4>Birth date : <?php echo "$bdate"; ?></h4>
				<h4>Age : <?php echo "$age"; ?></h4>
				<h4>Country : <?php echo "$country"; ?></h4>
				<h4>State : <?php echo "$state"; ?></h4>
				<h4>City : <?php echo "$city"; ?></h4>
				<h4>Locality : <?php echo "$locality"; ?></h4>
				<br/><br/>
				</center>

	
		<center>
</body>
</html>