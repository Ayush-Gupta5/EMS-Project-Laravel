@include('header')
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Department</title>

	<!-- Bootstrap Css -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- Sweet Alert Cdn -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js">

	<!-- Internal Css -->
	<style>
		input[type=text]{
			text-align: center;
			font-size: 20px;
			width: 50%;
		}
		input[type=submit]{
			width: 160px;
		}
	</style>
</head>
<body>
	<div class="container mt-5">
	<h1 class="alert-info text-center mb-5 p-3">Add Department</h1>
	<center>


	<form method="post" action="/dm_update/{{$record->id}}">
        @csrf
        @method('PUT')
		<div class="form-group">



			<label><b>Department Name</b></label>
			<input type="text" name="name" class="form-control" value="{{$record->name}}"><br>
			<input type="submit" name="submit" class="btn btn-success" value="Update">
			<button class="btn btn-info"><a href="department.php" style="text-decoration: none; color: white;">Back</a></button>
		</div>
	</form>

	</center>
	</div>


<!-- Bootstrap Js -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
