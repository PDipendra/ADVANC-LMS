<?php
  include"php/database.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="icon" href="images/developer.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="alert" style="box-shadow: 2px 2px 2px 2px grey;margin-top: 1px;" role="alert">
			<h3>Library Management System</h3>
		</div>
	</div>
<div class="container">
  <div class="row">

<div class="col-sm">
  <div class="alert" style="box-shadow: 2px 2px 2px 2px grey;" role="alert">
    <i>Please fill all the field to setup your LMS</i>
    <form style="margin-top: 20px;margin-bottom: 20px;" method="POST" action="">
      <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Institute Name</label>
      <div class="col-sm">
        <input type="text" class="form-control"  placeholder="Institute Name" name="institute_name" required="">
      </div>
        <label for="" class="col-sm-2 col-form-label">No. of book member can issue:</label>
      <div class="col-sm">
        <input type="number" class="form-control" name="max_book" placeholder="No. of book member can issue" required="">
      </div>
    </div>
      <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">No. of day can keep book:</label>
        <div class="col-sm-4">
          <input type="number"  class="form-control" name="fine_after_day" placeholder="No. of day can keep book" required="">
        </div>
        <label for="" class="col-sm-2 col-form-label">Fine per week:</label>
        <div class="col-sm-4">
          <input type="number"  class="form-control" name="fine_per_week" placeholder="Fine per week" required="">
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Choose Username:</label>
        <div class="col-sm-4">
          <input type="text"  class="form-control" name="username" placeholder="Enter Username" required="">
        </div>
        <label for="" class="col-sm-2 col-form-label">Choose Password:</label>
        <div class="col-sm-4">
          <input type="password"  class="form-control" name="password" placeholder="Enter Password" required="">
        </div>
    </div>
        <div class="form-control">
          <input type="submit" name="insert" class="form-control btn btn-primary" value="Add Record">
    </div>
    </div>
    </form>
  </div>
</div></div></div>
	<div class="container">
		<div class="alert" style="box-shadow: 2px 2px 2px 2px grey;" role="alert">
			<!-- <p>This is library management system developed by Dipendra Pathak ,now studies Computer engineering 6th semester in Mid-Western University Surkhet Nepal .Here i'm using bootstrap ,javascript,php-pdo and mysql for this project,If you have any confusion feel free to ask any question in my gmail <u>subaspathak62@gmail.com</u></p> -->
		</div>
	</div>
</body>
</html>