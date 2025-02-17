<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Schedule</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        .container {
            width: 80%;
            margin: 30px auto;
            background: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h2 {
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        input[type="checkbox"] {
            transform: scale(1.2);
        }
        .submit-btn {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            background: #28a745;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        .submit-btn:hover {
            background: #218838;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Doctor Schedule</h2>
    <p>Select your available days and time slots:</p>

    <table>
        <tr>
            <th>Day</th>
            <th>Morning (9 AM - 12 PM)</th>
            <th>Afternoon (1 PM - 4 PM)</th>
            <th>Evening (5 PM - 8 PM)</th>
        </tr>
        <tr>
            <td>Monday</td>
            <td><input type="checkbox" name="monday-morning"></td>
            <td><input type="checkbox" name="monday-afternoon"></td>
            <td><input type="checkbox" name="monday-evening"></td>
        </tr>
        <tr>
            <td>Tuesday</td>
            <td><input type="checkbox" name="tuesday-morning"></td>
            <td><input type="checkbox" name="tuesday-afternoon"></td>
            <td><input type="checkbox" name="tuesday-evening"></td>
        </tr>
        <tr>
            <td>Wednesday</td>
            <td><input type="checkbox" name="wednesday-morning"></td>
            <td><input type="checkbox" name="wednesday-afternoon"></td>
            <td><input type="checkbox" name="wednesday-evening"></td>
        </tr>
        <tr>
            <td>Thursday</td>
            <td><input type="checkbox" name="thursday-morning"></td>
            <td><input type="checkbox" name="thursday-afternoon"></td>
            <td><input type="checkbox" name="thursday-evening"></td>
        </tr>
        <tr>
            <td>Friday</td>
            <td><input type="checkbox" name="friday-morning"></td>
            <td><input type="checkbox" name="friday-afternoon"></td>
            <td><input type="checkbox" name="friday-evening"></td>
        </tr>
        <tr>
            <td>Saturday</td>
            <td><input type="checkbox" name="saturday-morning"></td>
            <td><input type="checkbox" name="saturday-afternoon"></td>
            <td><input type="checkbox" name="saturday-evening"></td>
        </tr>
        <tr>
            <td>Sunday</td>
            <td><input type="checkbox" name="sunday-morning"></td>
            <td><input type="checkbox" name="sunday-afternoon"></td>
            <td><input type="checkbox" name="sunday-evening"></td>
        </tr>
    </table>

    <button class="submit-btn">Save Schedule</button>
</div>

</body>
</html>