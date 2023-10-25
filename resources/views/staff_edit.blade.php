@include('header')
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Staff</title>

	<!-- Bootstrap Css -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

	<div class="container mt-2 ">
		<h1 class="alert-info text-center p-3">Update Staff</h1>


	<div style="margin: 200px; margin-top: 1%; margin-bottom:1%;">

		<form method="post" action="/staff_update/{{$record->id}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label class="form-label">Name</label>
						<input type="text" name="name" class="form-control" value="{{$record->name}}" required>
					</div>
					<div class="form-group">
						<label class="form-label">Gender</label>
						<select class="form-control" name="gender"  required>
							<option>{{$record->gender}}</option>
							<option>Male</option>
							<option>Female</option>
						</select>
					</div>
					<div class="form-group">
						<label class="form-label">Mobile</label>
						<input type="tel" name="mobile" class="form-control"  value="{{$record->mobile}}" required>
					</div>
					<div class="form-group">
						<label class="form-label">Date of Birth</label>
						<input type="date" name="dob" class="form-control"  value="{{$record->dob}}" required>
					</div>

					<div class="form-group">
						<label class="form-label">City</label>
						<input type="text" name="city" class="form-control"  value="{{$record->city}}" required>
					</div>

					<div class="form-group">
						<label class="form-label">Country</label>
						<input type="text" name="country" class="form-control"  value="{{$record->country}}" required>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label class="form-label">Department</label>
						<select name="department" class="form-control" required>
                            <option >{{$record->department}}</option>
                            @foreach ($data as $items )

                            <option value="{{$items->name}}">{{$items->name}}</option>
                            @endforeach
						</select>

					</div>
					<div class="form-group">
						<label class="form-label">Email</label>
						<input type="email" name="email" class="form-control"  value="{{$record->email}}" required>
					</div>
					<div class="form-group">
						<label class="form-label">Photo</label>
						<input type="file" name="image" class="form-control"  value="{{$record->image}}" accept="image/*" >
					</div>
					<div class="form-group">
						<label class="form-label">Date of Joining</label>
						<input type="date" name="doj"  value="{{$record->doj}}" class="form-control" required>
					</div>
					<div class="form-group">
						<label class="form-label">State</label>
						<input type="text" name="state"  value="{{$record->state}}" class="form-control" required>
					</div>
					<div class="form-group">
						<label class="form-label">Address</label>
						<input type="text" name="address"  value="{{$record->address}}" class="form-control" required>
					</div>

				</div>
				<input type="submit" name="update" class="btn btn-success" value="Update">&nbsp;
				<button class="btn btn-primary"><a href="{{url('staff')}}" style="text-decoration:none; color:white;">Back to Dashboard</a></button>
			</div>
		</form>


	</div>
</div>
</div>


	<!-- Bootstrap Js -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
		integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
		integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
		crossorigin="anonymous"></script>
</body>
</body>

</html>
