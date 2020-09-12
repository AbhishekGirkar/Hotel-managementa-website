<!DOCTYPE html>
<html lang="en">
<head>
<title>Registeration Form</title>
	<!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">

    <script>
        addEventListener("load", function() 
			{ 
			   setTimeout(hideURLbar, 0);
		     }, false); 

		 function hideURLbar()
			{
			    window.scrollTo(0,1); 
			} 
    </script>
    
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Online-fonts -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
</head>

<body>
	<div class="main">
		<div class="main-w3l">
			<h1 class="logo-w3">Registeration Form</h1>
			<div class="w3layouts-main">
				<h2><span>Create New Account</span></h2>
					<form name="register" onsubmit="return validate()"  method="post"><br/>

			
						<div style="color: white; text-align: left;"><b>Enter Your Full Name:</b><br/><br/>
						<input type="text" name="Name" placeholder="Firstname     Lastname" autocomplete="off"></div><br/><br/>

						<div style="color: white; text-align: left;"><b>Choose Your Gender:</b><br/><br/>
						<input type="radio" name="Gender" value="Female" checked=""> Female <br/>
						<input type="radio" name="Gender" value="Male"> Male 
						</b></div><br/><br/>

						<div style="color: white; text-align: left;"><b>Enter Your Mobile No:</b><br/><br/>
						<input type="text" name="Phone" placeholder="Mobile Number"  autocomplete="off"></div><br/><br/>

						<div style="color: white; text-align: left;"><b>Enter Your Birthdate:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[DD/MM/YYYY]<br/><br/>
						<input type="text" placeholder="Birthdate" name="Birthdate" autocomplete="off" ></div><br/><br/>
						<!--calculate age-->

						<div style="color: white; text-align:left;"><b>Enter Your Age:</b><br/><br/>
						<input type="text" name="Age" placeholder="Age"  autocomplete="off"></div><br/><br/>

						<div style="color: white; text-align: left;"><b>Enter Your Address:</b><br/><br/>
						<input type="text" name="Country" placeholder="Country" value="India" readonly="">
						<input type="text" name="State" placeholder="State" autocomplete="off">
						<input type="text" name="City" placeholder="City" autocomplete="off">
						<input type="text" name="Locality" placeholder="Locality (nagar)" autocomplete="off"></div><br/><br/>

						<div style="color: white; text-align: left;"><b>Enter Your Email Id:</b><br/><br/>
						<input type="text" name="Email_id" placeholder="Email Id" autocomplete="off"></div><br/><br/>

						<div style="color: white; text-align: left;"><b>Make A  Strong Password:</b><br/><br/>
						<input type="password" name="Password" placeholder="Password" id="password1">
						<input type="password" name="Password" placeholder="Confirm Password" id="password2" ></div><br/><br/>
		<!-- use autocomplete="off" at each textbox-->
						<input type="submit" name="Submit" >
					</form>
			</div>
		</div>
	</div>	
	<script>
			

			function validate() 
				{
					// name validations
					if(document.register.Name.value.trim()=="")
					{
						alert("Please provide your Name");
						document.register.Name.focus();
						return false;
					}
					else if(isNaN(document.register.Name.value.trim())==false)
					{
						alert("Name can't include numbers");
						document.register.Name.focus();
						return false;
					}
					else if((document.register.Name.value.trim()).length>30 || (document.register.Name.value.trim()).length<5)
					{
						alert("Provide correct Name");
						document.register.Name.focus();
						return false;
					}
										

					//phone validations
					else if(document.register.Phone.value.trim()=="")
					{
						alert("Please Provide Your Mobile No");
						document.register.Phone.focus();
						return false;
					}
					//\d-digit {10}-ten times ^-start $-end i.e will not allow no to start or end with characters
					else if(/^\d{10}$/.test(document.register.Phone.value.trim())==false)
					{
						alert("Mobile Number Must Be of 10 digits and Should not contain characters");
						document.register.Phone.focus();
						return false;
					}


					//age
					else if(document.register.Age.value.trim()=="")
					{
						alert("Please Provide Your Age");
						document.register.Age.focus();
						return false;
					}
					else if(isNaN(document.register.Age.value.trim())==true)
					{
						alert("Age can't include Alphabets");
						document.register.Age.focus();
						return false;
					}
					else if((document.register.Age.value.trim())<18)
					{
						alert("Your Age Must Be above 18");
						document.register.Age.focus();
						return false;
					}
					else if((document.register.Age.value.trim())>80)
					{
						alert("Your Age Must Be below 80");
						document.register.Age.focus();
						return false;
					}


					//address    1.state
					else if(document.register.State.value.trim()=="")
					{
						alert("Please Provide State Name");
						document.register.State.focus();
						return false;
					}
					else if(isNaN(document.register.State.value.trim())==false)
					{
						alert("State Name can't include numbers");
						return false;
					}
					else if((document.register.State.value.trim()).length>20 || (document.register.State.value.trim()).length<5)
					{
						alert("Provide correct State Name");
						document.register.State.focus();
						return false;
					}
					

					//2. city
					else if(document.register.City.value.trim()=="")
					{
						alert("Please Provide City Name");
						document.register.City.focus();
						return false;
					}
					else if(isNaN(document.register.City.value.trim())==false)
					{
						alert("City Name can't include numbers");
						return false;
					}
					else if((document.register.City.value.trim()).length>20 || (document.register.City.value.trim()).length<2)
					{
						alert("Provide correct City Name");
						document.register.City.focus();
						return false;
					}
					

					//3.locality
					else if(document.register.Locality.value.trim()=="")
					{
						alert("Please Provide Your Locality");
						document.register.Locality.focus();
						return false;
					}
					else if(isNaN(document.register.Locality.value.trim())==false)
					{
						alert("Locality Name can't include numbers");
						return false;
					}
					else if((document.register.Locality.value.trim()).length>20 || (document.register.Locality.value.trim()).length<5)
					{
						alert("Provide correct Locality Name");
						document.register.Locality.focus();
						return false;
					}
					

					//email validations
					 else if((document.register.Email_id.value.trim())=="")
					{
						alert("Please Provide Your Email Id");
						document.register.Email_id.focus();
						return false;
					}
					else if((document.register.Email_id.value.trim()).length<10 || (document.register.Locality.value.trim()).length>25)
					{
						alert("Provide correct Email_id");
						document.register.Email_id.focus();
						return false;
					}
					//var em=document.register.Email_id.value;
					//var len=(document.register.Email_id.value).length;
					//var pos=em.search("@gmail.com");
					//else if(pos==-1)
					//{
					//	alert("Please Provide Valid Email Id [must end with @gmail.com] ");
					//	document.register.Email_id.focus();
					//	return false;
					//}         
					//else
					//{
					//	return true;
					//}


					//password validation
					var pass2 = document.getElementById("password2").value;
					var pass1 = document.getElementById("password1").value;
					if (pass1.trim()=="")
					{
						alert("Password Is required");
						document.getElementById("password1").focus();
						return false;
					}
					else if((pass1.trim()).length<8)
					{
						alert("Password must contain atleast 8 values");
						document.getElementById("password1").focus();
						return false;
					}
					else if((pass1.trim()).length>15)
					{
						alert("Password must not be too long");
						document.getElementById("password1").focus();
						return false;
					}

					else if(pass2.trim()=="")
					{
						alert("Confirm Password Is required");
						document.getElementById("password2").focus();
						return false;
					}
					
					else if((pass2.trim()).length<8)
					{
						alert("Password must contain atleast 8 values");
						document.getElementById("password2").focus();
						return false;
					}	
					else if((pass2.trim()).length>15)
					{
						alert("Password must not be too long");
						document.getElementById("password2").focus();
						return false;
					}

					else if(pass1 != pass2)
					{
						alert("Password and Confirm Password must be same");
						document.getElementById("password2").focus();
						return false;
					}
				}
					
				
		</script>

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
       $conn = mysqli_connect("localhost","root","","donate");
        
        $s="INSERT INTO register(User_Id,Name,Gender,Mob_no,Email,Password,Age,Country,State,City,Locality,Birth_date) VALUES('','$name','$gender','$mob_no','$email','$password','$age','$country','$state','$city','$locality','$bdate')";
				
        mysqli_query($conn,$sql);
    
    ?>
	

		
</body>
</html>
