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
        @media (max-width: 600px) {
            table, th, td {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h2>My Appointments</h2>
    <table>
        <tr>
            <th>Patient Name</th>
            <th>Date</th>
            <th>Time</th>
            <th>Status</th>
        </tr>
        <tr>
            <td>John Doe</td>
            <td>2025-02-18</td>
            <td>10:30 AM</td>
            <td><span class="status pending">Pending</span></td>
        </tr>
        <tr>
            <td>Mary Smith</td>
            <td>2025-02-19</td>
            <td>12:00 PM</td>
            <td><span class="status completed">Completed</span></td>
        </tr>
        <tr>
            <td>David Brown</td>
            <td>2025-02-20</td>
            <td>2:15 PM</td>
            <td><span class="status canceled">Canceled</span></td>
        </tr>
    </table>
</div>

</body>
</html>