<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Doctors</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .btn {
            padding: 5px 10px;
            color: white;
            background-color: #007BFF;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-decoration: none;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>View Doctors</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Specialization</th>
                    <th>Experience</th>
                    <th>Contact</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($doctor as $row)
                <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->specialization }}</td>
                    <td>{{ $row->experience }} years</td>
                    <td>{{ $row->phone_no }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <span>
            <form action="{{ route('appointments.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="category_id">Select Doctor</label>
                <select value="{{ $row->id }}" name="doctor_id" class="form-control">
                    <option value="">Doctors</option>
                    @foreach ($doctor as $row) 
                        <option value="{{ $row->id }}">{{ $row->name }}</option>
                    @endforeach
                </select>
                <input type="hidden" name="patient_id" value="{{ $user->id }}">

                <label for="appointment_date">Select Date:</label>
                <input type="datetime-local" name="appointment_date" required>

                <button type="submit">Book Appointment</button>
            </form>
        </span>
    </div>
</body>
</html>