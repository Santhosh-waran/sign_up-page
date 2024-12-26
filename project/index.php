<!DOCTYPE html>
<html style="background-color: #f3f3f3;">
<head>	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="xyz.css">


	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>

	<script src="https://kit.fontawesome.com/8b70a27908.js" crossorigin="anonymous"></script>
	<script type="text/javascript" defer src="xyz.js"></script>  
	<script type="text/javascript" src="js/jquerymin.js"></script>
	<title>index</title>
</head>
<body> 
 <div style="background-color: #f3f3f3;">
	<nav>
		<div class="container-fluid p-3 ">
			<div class="xxx">
				<a class="nav-brand"><img src="mei.png" style="width:4rem; margin-left: 20px;"></a>

				<div class="float-end  mt-3 fw-bold  d-block d-sm-none" id ="sidebar">
					<a  data-bs-toggle="offcanvas" class="text-secondary text-decoration-none nav-item m-3" href="#offcanvasExample" role="button" aria-controls="offcanvasExample"><i class="fa-solid fa-bars"></i> Menu</a>
				</div>

				<div class="float-end m-3 me-2 fw-bold ">
					<div class="col">	
					<div class="d-none d-sm-block">
					<a  data-bs-toggle="offcanvas" class="text-secondary text-decoration-none nav-item m-2" href="#offcanvasExample" role="button" aria-controls="offcanvasExample"><i class="fa-solid fa-bars"></i> Menu</a>			
					<a href="#" class="text-secondary text-decoration-none nav-item m-2"><i class="fa-solid fa-magnifying-glass"></i> Search</a>
					<a href="DB.php" class="text-secondary text-decoration-none nav-item m-2"><i class="fa-solid fa-download"></i> DATA BASE</a>
					<a href="#" class="text-secondary text-decoration-none nav-item m-2"><i class="fa-solid fa-cart-shopping"></i> Cart</a>
					<a href="register.php" class="text-decoration-none nav-item m-2 "><i class="fa-solid fa-user">user</i></a>
					</div>


				</div>
				</div>	

			</div>
		</div>
		<hr>
	</nav>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">	
	<div class="offcanvas-header">
    <a class="offcanvas-title" id="offcanvasExampleLabel nav-brand"><img src="mei.png" style="width:5rem;"></a>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <hr>

 	<div class="offcanvas-body float-end m-3 me-5 fw-bold ">
		<div class="row">
					<a href="register.php" class="text-decoration-none nav-item m-3 "><i class="fa-solid fa-user">user</i></a>
					<a href="#" class="text-secondary text-decoration-none nav-item m-3">Home</a>
					<a href="#" class="text-secondary text-decoration-none nav-item m-3"><i class="fa-solid fa-magnifying-glass"></i> Search</a>
					<a href="DB.php" class="text-secondary text-decoration-none nav-item m-3"><i class="fa-solid fa-download"></i>DATA BASE</a>
					<a href="#" class="text-secondary text-decoration-none nav-item m-3"><i class="fa-solid fa-cart-shopping"></i> Cart</a>
					
		</div>
	</div>

</div>
   	
   	<div class="row d-flex justify-content-center ">

      <div class="d-flex justify-content-center ">

	<form action="" method="">
		<div class="input-group mb-1">
		  <input type="text" name="roll_no" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
		  <button class="btn btn-outline-primary" type="submit" name="submit" id="button-addon2"><i class="fa-brands fa-searchengin"></i>search</button>
		</div>
    </form>
	</div>




	

<?php
include 'con1.php';
if(isset($_GET['roll_no'])) {
    $search = $_GET['roll_no'];
    $select = "SELECT * FROM aids1 WHERE roll_no = '$search'";
    $result = $con->query($select); // Execute the query

    if ($result) {
        if ($row = mysqli_fetch_assoc($result)) {
            echo ' <div class=" col-2 card p-3 m-4 me-4 curser" style="width:19rem;">
  			<img src=" '. $row['file'].'" class="card-img-top" alt="..." style="height:15rem" width:20px>';
            echo '<div class="card-body m-3">';
            echo '<p>Name<span style="margin-left: 40px;" class="fw-bold">: ' . $row['name'] . '</span></p>';
            echo '<p>Roll No<span style="margin-left:30px;" class="fw-bold">: ' . $row['roll_no'] . '</span></p>';
            echo '<p>Class<span style="margin-left: 45px;" class="fw-bold">: ' . $row['selectcol'] . '</span></p>';
            echo '<p>Mobile No<span style="margin-left:10px; position:relative;" class="fw-bold">: ' . $row['mobile_no'] . '</span></p>';
            echo '<p>DOB<span style="margin-left: 55px;" class="fw-bold">: ' . $row['DOB'] . '</span></p>';
            echo '<p>+2 Mark<span style="margin-left: 30px;" class="fw-bold">: ' . $row['2mark'] . '</span></p>';
            echo '<p>Cut off<span style="margin-left: 40px;" class="fw-bold">: ' . $row['cutoff'] . '</span></p>';
            echo '<p>Email<span style="margin-left: 50px;" class="fw-bold">:<br>' . $row['email'] . '</span></p>';
            echo '</div>';
        } else {
            echo '
             <div class="d-flex justify-content-center mt-4 text-danger">
             <h1>Data not found</h1>
             </div>';
        }
    } else {
        echo "<script>alert('Query execution failed: " . mysqli_error($con) . "')</script>";
    }
} else {
    echo "<script>alert('No 'roll_no' parameter received.')</script>";
}
?>

  	</div>
  		
	</div>	
</div>
</body>
</html>