<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Records</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            padding-top: 50px; /* Adjust the top padding for fixed navbar */
        }

        #customers {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px; /* Add margin for better spacing */
        }

        #customers th, #customers td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        #customers th {
            background-color: #04AA6D;
            color: white;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        .action-btns {
            white-space: nowrap; /* Prevent line break for action buttons */
        }

        /* Responsive styling for small screens */
        @media (max-width: 767px) {
            .action-btns {
                display: block;
                margin-top: 10px;
            }
        }
    </style>
</head>
<body>

@if (session('status'))
    <div class="container">
        <div class="alert alert-success">{{ session('status') }}</div>
    </div>
@endif

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Student Records</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ url('index/') }}">Insert</a></li>
        </ul>
    </div>
</nav>

<div class="container">
    <h1 class="text-center">Student Records</h1>
       <div class="text-right">
    <a href="{{url('pdf')}}" class="btn btn-success btn-sm">Pdf</a>
  </div>       
    <table id="customers" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>MOBILE</th>
            <th>COURSE</th>
            <th>SECTION</th>
            <th>PROFILE</th>
            <th class="action-btns">ACTION</th>
            <th>DOUNLOAD PDF</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($student as $item)
            <tr>
                <td>{{ $item->id }}</td>
              
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->mobile }}</td>
                <td>{{ $item->course }}</td>
                <td>{{ $item->section }}</td>
                  <td>
                  <img src="{{ asset('uploads/profiles/' . $item->profile) }}" alt="Profile Image" class="img-thumbnail" width="100" height="100">
              </td>
              
                <td class="action-btns">
                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                </td>
                <td>
                    <a href="{{ url('dounload/'.$item->id) }}" class="btn btn-success btn-sm">Download</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
