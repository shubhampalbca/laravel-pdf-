<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>This my profile </h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <h1>Id : {{$student->id}}</h1>
      <h1>Name : {{$student->name}}</h1>
      <h1>Email : {{$student->email}}</h1>
      <h1>Mobile :{{$student->mobile	}} </h1>
      <h1>Section :{{$student->section}}</h1>
      <h1>Course :{{$student->course}}</h1>
      
    </div>
    <div class="col-sm-4"> 
       <img src="data:image/jpeg;base64,{{ base64_encode($student->profile) }}" alt="Image">           
       <!-- <img src="{{ asset('uploads/students/' . $student->profile) }}"class="img-rounded" alt="Cinque Terre" width="304" height="236"> -->
    </div>
    
  </div>
</div>

</body>
</html>
