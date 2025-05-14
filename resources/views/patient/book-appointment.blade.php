<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Doctors</title>
    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Kadwa:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: "Kadwa", serif;
            background-color: #ccfde6;
        }
        
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #c1f0c7;
            padding: 20px;
            border-radius: 10px;
        }

        .header h1 {
            font-size: 40px;
            font-family: "Italiana", serif;
            font-weight: 400;
        }

        .header .logout {
            text-decoration: none;
            font-size: 16px;
            color: #333;
        }

        .container {
            width: 80%;
            margin: 40px auto;
            background: #c1f0c7;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
            font-family: "Italiana", serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: white;
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #52db52;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .form-container {
            margin-top: 30px;
            text-align: center;
        }

        select, input, button {
            padding: 10px;
            margin: 10px;
            border-radius: 5px;
            border: none;
        }

        button {
            background-color: #52db52;
            color: white;
            cursor: pointer;
        }

        button:hover {
            background-color: #3ca43c;
        }
    </style>
</head>
<body>
    <header class="header">
        <h1>Vel Health Care</h1>
        <a href="{{ url('login') }}" class="logout">Log out</a>
    </header>
    
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

        <div class="form-container">
            <form action="{{ route('appointments.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="doctor_id">Select Doctor:</label>
                <select name="doctor_id" required>
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
        </div>
    </div>
</body>
</html>