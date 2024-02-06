<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Student Records">
    <title>Student Records</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        /* Your existing styles remain unchanged */

        @media print {
            body {
                margin: 0;
                padding: 10mm;
            }

            #customers {
                margin-top: 0;
            }
            .navbar {
                display: none; /* Hide the navbar when printing */
            }
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="text-center">Student Records pdf</h1>     
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
                  <img src="{{ asset('uploads/profiles/' . $item->profile) }}" width="100" height="100">
              </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
