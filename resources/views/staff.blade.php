@include('header')
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Manage Staff</title>

	<!-- Bootstrap Css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
    	img{
    		width: 70px;
    		height: 70px;
    		border-radius: 50%;
    	}
    </style>
</head>
<body>


<div class="mb-5 p-3">
	<h1 class="alert-info text-center">Staff Details</h1>
</div>
@if (session('success'))
<div class="mb-3 p-1">
	<h1 class="alert-success text-center">{{session('success')}}</h1>
</div>
@elseif(session('delete'))
<h1 class="alert-danger text-center">{{session('delete')}}</h1>
@endif
<div style="margin: 50px;">
	<a href="{{url ('staff_add');}}">
      <button class="btn btn-success" style="float: left; width:175px">Add Staff</button></a>
	<a href="{{url('/')}}">
      <button class="btn btn-primary" style="float: right;">Back to Dashboard</button></a><br><br>

	<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Photo</th>
      <th scope="col">Department</th>
      <th scope="col">Gender</th>
      <th scope="col">Mobile</th>
      <th scope="col">Email</th>
      <th scope="col">DOB</th>
      <th scope="col">Joined On</th>
      <th scope="col">Address</th>
      <th scope="col">City</th>
      <th scope="col">State</th>
      <th scope="col">Country</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

@foreach ($data as $item )


    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td><img src="{{asset('storage/'.$item->image)}}"></td>
      <td>{{$item->department}}</td>
      <td>{{$item->gender}}</td>
      <td>{{$item->mobile}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->dob}}</td>
      <td>{{$item->doj}}</td>
      <td>{{$item->address}}</td>
      <td>{{$item->city}}</td>
      <td>{{$item->state}}</td>
      <td>{{$item->country}}</td>
      <td>
      	<form>
            <button class="btn btn-warning" name="edit"><a href="staff_edit/{{$item->id}}" style="text-decoration: none; color:white">Edit</a></button>
      		<button class="btn btn-danger" name="delete"><a href="staff_delete/{{$item->id}}" style="text-decoration: none; color:white">Delete</a></button>
      	</form>
      </td>

    </tr>
    @endforeach

  </tbody>
</table>
<div class="row">
    {{$data->onEachSide(1)->links()}}
</div>
</div>







</body>
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
</html>
