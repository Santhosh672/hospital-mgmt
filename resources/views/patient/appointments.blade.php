<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Appointments</title>
    <link href="https://fonts.googleapis.com/css2?family=Kadwa&family=Italiana&display=swap" rel="stylesheet">
    <style>
        /* Include your provided CSS styles here */
        body {
            margin: 0%;
            font-family: "Kadwa", serif;
            background-color: #ccfde6;
        }
        .header {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            background-color: #c1f0c7;
            border-radius: 10px;
            padding: 15px;
        }
        .header h1 {
            font-size: 40px;
            font-family: "Kadwa", serif;
            font-weight: 400;
        }
        .header .logout {
            text-decoration: none;
            font-size: 16px;
            color: #333;
        }
        .container {
            width: 80%;
            margin: 50px auto;
            background-color: #c1f0c7;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
        .table {
            width: 100%;
            border-collapse: collapse;
        }
        .table th, .table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .table th {
            background-color: #9cd49c;
        }
        .status {
            padding: 5px 10px;
            border-radius: 5px;
            color: black;
        }
        .status.pending {
            background-color: orange;
        }
        .status.accepted {
            background-color: green;
        }
        .status.canceled {
            background-color: red;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>My Appointments</h1>
        <a href="{{ url('login') }}" class="logout">Logout</a>
    </div>

    <div class="container">
        @if($appointments->isEmpty())
            <p>No appointments found.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Doctor</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($appointments as $appointment)
                <tr>
                    <td>{{ $appointment->appointment_date }}</td>
                    <td>{{ $doctors[$appointment->doctor_id]->name ?? 'Unknown' }}</td>
                    <td>
                        <span class="status {{ strtolower($appointment->status) }}">
                            {{ ucfirst($appointment->status) }}
                        </span>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
</body>
</html>
