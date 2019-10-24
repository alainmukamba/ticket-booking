

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Create  Customer Event </title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create  Customer Event</h1>
              </div>
              <form class="user" method="post" action ='../php/create_customer-Event.php'>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <br>
                       <p> select start date</p>
                    <input type="date" class="form-control form-control-user"  name="txt_startDate" id="txt_startDate" placeholder="Enter the start date of the event">
                  </div>
                  <div class="col-sm-6">
                  <br>
                       <p> select end date</p>
                    <input type="date" class="form-control form-control-user" name="txt_endDate"  id="txt_endDate" placeholder="Enter the start date of the event">
                  </div>
                  <div class="col-sm-6">
                  <br>
                       <p> Set the time</p>
                    <input type="time" class="form-control form-control-user" name="txt_time"  id="txt_time" placeholder="Enter the time of the event">
                  </div>
                </div>
                <div class="form-group">
                <input type="text" class="form-control form-control-user"  name="txt_Eventdesc" id="txt_Eventdesc" placeholder="Enter the event description">	</div>
				<div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="number" class="form-control form-control-user"  name="txt_seatNumber"  id="txt_seatNumber" placeholder="Enter the number of seats">
				  </div><br>

				  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="txt_seatPrice"  id="txt_seatPrice"placeholder="Enter the price of seat">
                  </div>
                 
              <br/><hr>
	
				  <input type="submit" name="create" class="btn btn-primary btn-user btn-block" value="Create Event">
                  
              
                <hr>
              
              </form>
              <hr>
             
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>
