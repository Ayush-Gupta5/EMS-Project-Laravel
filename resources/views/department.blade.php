@include('header')
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>| Department |</title>
  <!-- Bootstrap Css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <style>
    td {
      font-size: 20px;
    }
  </style>
</head>

<body>
  <div class="container mt-5">
    <h1 class="alert-info text-center mb-5 p-3">Departments</h1>
    @if (session('success'))

      <div class="alert alert-success mb-5 ">{{session('success')}}</div>
    @elseif(session('delete'))

    <div class="alert alert-danger mb-5 ">{{session('delete')}}</div>
  @endif
  </div>


  <div class="container">
    <!-- Button to Open the Modal -->
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
      Add Department
    </button>


    <!-- The Modal -->
    <div class="modal" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Add Department</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">

            <form method="post" action="/depart_store">
                @csrf
              <div class="form-group">
                <label><b>Department Name</b></label>
                <input type="text" name="name" class="form-control" required><br>
                <input type="submit" name="submit" class="btn btn-success" value="Add" style="width:100px">
              </div>
            </form>

          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>
    <a href="{{'/'}}">
      <button class="btn btn-primary" style="float: right;">Back to Dashboard</button></a><br><br>
    <table class="table table-bordered" style="text-align: center;">
      <thead>
        <tr>
          <th>Department Id</th>
          <th>Department Name</th>
          <th>Action</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($data as $item )
        <tr>



          <td class="data">
            {{$item->id}}
          </td>
          <td class="data">
            {{$item->name}}
          </td>

          <td>
            <form method="POST">
              <button class="btn btn-info">
                <a href="dm_edit/{{$item->id}}" style="text-decoration: none; color:white">Edit</a>
              </button>

              <button class="btn btn-danger" name="delete"><a href="depart_delete/{{$item->id}}" style="text-decoration: none; color:white">Delete</a></button>
              <input type="hidden" name="id" value="">
            </form>
          </td>

        </tr>
        @endforeach

      </tbody>
    </table>
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

</html>
