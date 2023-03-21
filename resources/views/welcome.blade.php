<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
    <script src="https://kit.fontawesome.com/6136c76d0e.js" crossorigin="anonymous"></script>
</head>
<body class="container mt-5">
    <h2 class="mb-5 text-center">Phone Book</h2>
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">List Contact</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Create Contact</a>
  </li>
  <!-- <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">View Contact</a>
  </li>
 <li class="edit"><a href="{{url('edit/')}}">Edit</a></li> -->
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
  <table class="table">
  <thead>
    <tr>
      
      <th scope="col">Name</th>
      <th scope="col">Phone Number</th>
      <th scope="col">View/Edit/Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach($users as $key=> $value)
    <tr>
      <td>{{$value->name}}</td>
      <td>{{$value->phone_number}}</td>
      <td>
        <a href="{{url('/view/'.encrypt($value->id))}}"><i class="fa-solid fa-book-open"></i></i></a>
        <a href="{{url('/edit/'.encrypt($value->id))}}"><i class="ml-5 fa-solid fa-pen-to-square"></i></a>
        <a href="{{url('/delete/'.encrypt($value->id))}}"><i class="ml-5 fa-solid fa-trash"onclick='return confirm("Do you really want to remove it ?")'></i></a>
    </td>
    @endforeach
    <tr>    
  </tbody>
</table>
  </div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
  <form method="post" action="{{url('Create')}}">
  @csrf
  <div >
    <label class="mt-3" for="">Name</label>
    <div >
      <input name="name" type="text" class="form-control" placeholder="Name">
      @error('name') <p class="alert-danger">{{$message}}</p>@enderror
    </div>
    <div class="mt-3">
        <label for="">Phone Number</label>
      <input name="phone_number" type="text" class="form-control" placeholder="Phone Number">
      @error('phone_number') <p class="alert-danger">{{$message}}</p>@enderror
    </div>
  </div>
  <button type="submit" class="mt-3 btn btn-primary">Create</button>
</form>
  </div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
</div>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</body>
</html>