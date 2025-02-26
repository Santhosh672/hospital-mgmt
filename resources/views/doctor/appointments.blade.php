<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor - My Appointments</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 900px;
            margin: auto;
            background: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
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
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        .status {
            padding: 6px 10px;
            border-radius: 5px;
            font-weight: bold;
        }
        .pending { background-color: #ffc107; color: black; }
        .completed { background-color: #28a745; color: white; }
        .canceled { background-color: #dc3545; color: white; }
        .btn {
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            border: none;
            color: white;
            text-decoration: none;
        }
        .btn-approve { background-color: #28a745; }
        .btn-cancel { background-color: #dc3545; }
    </style>
</head>
<body>

<div class="container">
    <h2>My Appointments</h2>
    
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    
    <table>
        <tr>
            <th>Patient Name</th>
            <th>Date</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        
        @foreach ($appointments as $appointment)
        <tr>
            <td>{{ $patients[$appointment->patient_id]->name ?? 'Unknown' }}</td>
            <td>{{ $appointment->appointment_date }}</td>
            <td>
                <span class="status {{ strtolower($appointment->status) }}">{{ $appointment->status }}</span>
            </td>
            <td>
                <form action="{{ route('appointments.updateStatus', $appointment->id) }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" name="status" value="Accepted" class="btn btn-approve">Accept</button>
                </form>

                <form action="{{ route('appointments.updateStatus', $appointment->id) }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" name="status" value="Canceled" class="btn btn-cancel">Cancel</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

</div>

</body>
</html>