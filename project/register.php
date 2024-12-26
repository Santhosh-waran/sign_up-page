
<!DOCTYPE html>
<html style="background-color: #f3f3f3;">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="xyz.css">
	<script type="text/javascript" defer src=""></script>  
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquerymin.js"></script>
	<script src="https://kit.fontawesome.com/8b70a27908.js" crossorigin="anonymous"></script>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>


	<title>sign up</title>
</head>
<body> 
<div style="background-color: #f3f3f3;">
	<nav>
		<div class="container-fluid p-3 pb-0">
			<div class="xxx">
				<a class="nav-brand"><img src="mei.png" style="width:5rem;"></a>

				<div class="float-end  mt-3 fw-bold  d-block d-sm-none" id ="sidebar">
					<a  data-bs-toggle="offcanvas" class="text-secondary text-decoration-none nav-item m-3" href="#offcanvasExample" role="button" aria-controls="offcanvasExample"><i class="fa-solid fa-bars"></i> Menu</a>
				</div>

				<div class="float-end m-3 me-2fw-bold ">
					<div class="col">	
					<div class="d-none d-sm-block">
					<a  data-bs-toggle="offcanvas" class="text-secondary text-decoration-none nav-item m-2" href="#offcanvasExample" role="button" aria-controls="offcanvasExample"><i class="fa-solid fa-bars"></i> Menu</a>			
					<a href="#" class="text-secondary text-decoration-none nav-item m-2"><i class="fa-solid fa-magnifying-glass"></i> Search</a>
					<a href="DB.php" class="text-secondary text-decoration-none nav-item m-2"><i class="fa-solid fa-download"></i> DATA BASE</a>
					<a href="#" class="text-secondary text-decoration-none nav-item m-2"><i class="fa-solid fa-cart-shopping"></i> Cart</a>
					<a href="index.php" class="text-decoration-none nav-item m-2 "><i class="fa-solid fa-house">home</i></a>
					</div>


				</div>
				</div>	

			</div>
		</div>
		<hr>
	</nav>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">	
	<div class="offcanvas-header">
    <a class="offcanvas-title" id="offcanvasExampleLabel nav-brand"><img src="download.png" style="width:5rem;"></a>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <hr>

 	<div class="offcanvas-body float-end m-3 me-5 fw-bold ">
		<div class="row">
					<a href="index.php" class="text-decoration-none nav-item m-2 "><i class="fa-solid fa-house">home</i></a>
					<a href="#" class="text-secondary text-decoration-none nav-item m-3"><i class="fa-solid fa-user"></i> user</a>
					<a href="#" class="text-secondary text-decoration-none nav-item m-3"><i class="fa-solid fa-magnifying-glass"></i> Search</a>
					<a href="DB.php" class="text-secondary text-decoration-none nav-item m-3"><i class="fa-solid fa-download"></i> DATA BASE</a>
					<a href="#" class="text-secondary text-decoration-none nav-item m-3"><i class="fa-solid fa-cart-shopping"></i> Cart</a>
					
		</div>
	</div>

</div>
   	
   	<div class="d-flex justify-content-center ">
   		

   			<div class="card  shadow  mb-5 p-3 rounded" style="width:20rem;">
     			<h1 class="text-center">AI&DS</h1>

     			<div class="card-body">
     			<form  action="" method="post"  id="form" enctype="multipart/form-data">


		
			<div class="row mb-3">
			    <label class="form-lable">Name</label>
				<div class="input-group">
				  <input type="" name="name" class="form-control" placeholder="Enter your Name"  aria-describedby="basic-addon1">
				</div>
			</div>

			<div class="row mb-3">
			    <label class="form-lable">Roll No</label>
			    <span id="roll_noerror" style="color: red;"></span>
				<div class="input-group">
				  <input type="" name="roll_no"  id="roll_no" class="form-control" placeholder="Enter your Roll No" aria-describedby="basic-addon1">
				</div>
			</div>


			<label class="form-lable" for="inputGroupSelect01">Options</label>
			<div class="input-group mb-3">
			  <select class="form-select" id="inputGroupSelect01" name="selectcol">
			    <option selected>Choose...</option>
			    <option value="AIDS">AI&DS</option>
			    <option value="CSE">CSE</option>
			    <option value="IT">IT</option>
			  </select>
			</div>

			<div class="row mb-3">
			    <label class="form-lable">Mobile No</label>
			    <span id="mobileNumberError" style="color: red;"></span>
				<div class="input-group">
				  <input type=""  id="mobileNumber" name="mobile_no" inputmode="number"  class="form-control" placeholder="Enter your Mobile No" aria-describedby="basic-addon1">
				</div>
			</div>

			<div class="row mb-3">
			    <label class="form-lable">DOB</label>
				<div class="input-group">
				  <input type="date" name="DOB" inputmode="number"  class="form-control" placeholder="Enter your Mobile No"  aria-describedby="basic-addon1">
				</div>
			</div>

			<div class="row mb-3">
			    <label class="form-lable">+2 Mark</label>
			    <span id="pError" style="color: red;"></span>
				<div class="input-group">
				  <input type="" name="2mark" id="2mark" inputmode="number"  class="form-control" placeholder="Enter your Mark /600"  aria-describedby="basic-addon1">
				</div>
			</div>

			<div class="row mb-3">
			    <label class="form-lable">Cut Off</label>
			    <span id="cuError" style="color: red;"></span>
				<div class="input-group">
				  <input type="" name="cutoff" id="cutoff"   class="form-control" placeholder="Enter your Cut Off"  aria-describedby="basic-addon1">
				</div>
			</div>

			<div class="row mb-3">
			    <label class="form-lable">Email</label>
			     <span id="emailError" style="color: red;"></span>
				<div class="input-group">
				  <input type="email" name="email" id="email"  class="form-control" placeholder="xyz@gmail.com" onclick="validateEmail()" aria-describedby="basic-addon1">
				</div>
			</div>

			<div class="row mb-3">
				<label class="form-lable">Photo</label>
				<div class="input-group">
                <div class="mb-3">
                    <input class="form-control text-primary" type="file" name="imageUpload">
                </div>
           	 </div>
		
			</div>


    <div class="row mb-3">
       <button class="btn btn-primary" name='submit' id="liveAlertBtn"><a href="index.php" class ="text-decoration-none text-white">register now</a></button> 
    </div>

    

            <div class="row mb-3 text-center">
                <a href="login.php" class="text-decoration-none text-secondary">thanks for register</a>
            </div>
			</form>

     			</div>
     		</div>
	</div>	
</div>

</body>
</html>
<?php
if (isset($_POST['submit'])) {
    include 'con1.php';

    $uname = $_POST['name'];
    $uroll_no = $_POST['roll_no'];
    $umobile_no = $_POST['mobile_no'];
    $uDOB = $_POST['DOB'];
    $p2mark = $_POST['2mark'];
    $ucutoff = $_POST['cutoff'];
    $uemail = $_POST['email'];
    $uselect = $_POST['selectcol'];

    // File Upload Section
    $photo = $_FILES['imageUpload'];

    if (!empty($uname) && !empty($uroll_no) && !empty($umobile_no) && !empty($uDOB) && !empty($p2mark) && !empty($ucutoff) && !empty($uemail) && !empty($uselect) && $photo['error'] === UPLOAD_ERR_OK) {
        $file_name = $photo['name'];
        $file_temp = $photo['tmp_name'];
        $uploadimg = 'img/' . $file_name;

        if (move_uploaded_file($file_temp, $uploadimg)) {
            $insert = "INSERT INTO aids1 (name, email, roll_no, mobile_no, DOB, 2mark, cutoff, selectcol, file) VALUES ('$uname', '$uemail', '$uroll_no', '$umobile_no', '$uDOB', '$p2mark', '$ucutoff', '$uselect', '$uploadimg')";

            if ($con->query($insert)) {
                echo "<script>alert('Data and file uploaded successfully.')</script>";
            } else {
                echo "Error: " . $insert . "<br>" . mysqli_error($con);
            }
        } else {
            echo "File upload failed. Please check your upload directory permissions.";
        }
    } else {
        echo "Fill all fields including the file upload.";
    }
}
?>

