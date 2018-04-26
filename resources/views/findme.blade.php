<!DOCTYPE html>
<html lang="en">
<head>
	<title>Driver Sign up</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images1/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts1/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts1/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css1/util.css">
	<link rel="stylesheet" type="text/css" href="css1/main.css">

<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		

		<div class="wrap-contact100">
			<div class="contact100-form-title" style="background-image: url(images1/bg-01.jpg);">
				
			   <a href="{{ url('/') }}" class="button2">Back to Home</a> 
			
				<span class="contact100-form-title-1">
					
				</span>

				<span class="contact100-form-title-2">
				Sign up as a driver below
				</span>
			</div>

			<form class="contact100-form validate-form">


				 <div class="col1 wrap-input100 validate-input" data-validate="Name is required">
        <label for="field1">First Name:</label>
       <input class="input100" type="text" name="name" placeholder="Enter first name">
    </div>

    <div class="col2 wrap-input1000 validate-input" data-validate="Name is required"">
        <label for="field2">Last Name:</label>
        <input class="input100" type="text" name="name" placeholder="Enter last name">
    </div>
   

    <div class="col1 wrap-input100 validate-input" data-validate="Name is required">
        <label for="field1">Email:</label>
       <input class="input100" type="text" name="name" placeholder="Enter your email address">
    </div>
    <div class="col2 wrap-input1000 validate-input" data-validate="Name is required"">
        <label for="field2">ID Number:</label>
        <input class="input100" type="text" name="name" placeholder="Enter your national ID Number">
    </div>

    <div class="col1 wrap-input100 validate-input" data-validate="Name is required">
        <label for="field1">Latitude:</label>
       <input class="input100" type="text" name="name" placeholder="Enter latitude">
    </div>
    <div class="col2 wrap-input1000 validate-input" data-validate="Name is required"">
        <label for="field2">Longitude:</label>
        <input class="input100" type="text" name="name" placeholder="Enter longitude">
    </div>
    <div class="col1 wrap-input100 validate-input" data-validate="Name is required">
        <label for="field1">Phone Number:</label>
       <input class="input100" type="text" name="name" placeholder="Enter your phone number">
    </div>

    <div class="col2 wrap-input1000 validate-input" data-validate="Name is required"">
        <label for="field2">Number Plate:</label>
        <input class="input100" type="text" name="name" placeholder="Enter vehicle number plate ">
    </div>

    <div class="col2 wrap-input100-1 validate-input" data-validate="Name is required">
        <label for="field2">Add your profile photo:</label>
       <input type="file" name="pic" accept="image/*">
    </div>

    <div class="col1 wrap-input100 validate-input" data-validate="Name is required">
        <label for="field1">Location:</label>
       <input class="input100" type="text" name="name" placeholder="Enter your location">
    </div>

    <div class="col2 wrap-input1000-1 validate-input" data-validate="Name is required"">
        <label for="field2">Add ID back picture:</label>
       <input type="file" name="pic" accept="image/*">
    </div>

    <div class="col1 wrap-input100-1 validate-input" data-validate="Name is required">
        <label for="field1">Add ID front picture:</label>
       <input type="file" name="pic" accept="image/*">
    </div>

    <div class="col2 wrap-input1000-1 validate-input" data-validate="Name is required"">
        <label for="field2">Add license document:</label>
       <input type="file"  name="pic" accept="image/*">
    </div>


		        <div class="two-col">
   


    <div class=" wrap-input1001 validate-input" >
					<label >County:</label>
					
					 <select name="county"   >
  
  
  
<option value="Baringo County">Baringo</option>
<option value="Bomet County">Bomet</option>
<option value="Bungoma County">Bungoma</option>
<option value="Busia County">Busia</option>
<option value="eldoret">Eldoret</option>
<option value="Elgeyo Marakwet County">Elgeyo Marakwet</option>
<option value="Embu County">Embu</option>
<option value="Garissa County">Garisaa</option>
<option value="Homa Bay County">Homa Bay</option>
<option value="Isiolo County">Isiolo</option>
<option value="Kajiado County">Kajiado</option>
<option value="Kakamega County">Kakamega</option>
<option value="Kericho County">Kericho</option>
<option value="Kiambu County">Kiambu</option>
<option value="Kilifi County">Kilifi</option>
<option value="Kirinyaga County">Kirinyaga</option>
<option value="Kisii County">Kisii</option>
<option value="Kisumu County">Kisumu</option>
<option value="Kitui County">Kitui</option>
<option value="Kwale County">Kwale</option>
<option value="Laikipia County">Laikipia</option>
<option value="Lamu County">Lamu</option>
<option value="Machakos County">Machakos</option>
<option value="Makueni County">Makueni</option>
<option value="Mandera County">Mandera</option>
<option value="Meru County">Meru</option>
<option value="Migori County">Migori</option>
<option value="Marsabit County">Marsabit</option>
<option value="Mombasa">Mombasa</option>
<option value="Muranga County">Muranga</option>

<option value="Nakuru County">Nakuru</option>
<option value="Nandi County">Nandi</option>
<option value="Narok County">Narok</option>
<option value="Nyamira County">Nyamira</option>
<option value="Nyandarua County">Nyandarua</option>
<option value="Nyeri County">Nyeri</option>
<option value="Samburu County">Samburu</option>
<option value="Siaya County">Siaya</option>
<option value="Taita Taveta County">Taita Taveta</option>
<option value="Tana River County">Tana RIver</option>
<option value="Tharaka Nithi County">Thraka Nith</option>
<option value="Trans Nzoia County">Trans Nzoia</option>
<option value="Turkana County">Turkana</option>
<option value="Uasin Gishu County">Uasin Gishu</option>
<option value="Vihiga County">Vihiga</option>
<option value="Wajir County">Wajir</option>
<option value="West Pokot County">West Pokot</option>

</select>
				</div>	

     

    
    

    

</div>
				

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Submit
							
						</span>
					</button>
				</div>
			</form>
			<br>
		</div>

	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js1/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="js1/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js1', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>

</body>
</html>
