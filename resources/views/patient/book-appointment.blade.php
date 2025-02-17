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
                <tr>
                    <td>101</td>
                    <td>Dr. Aravind Kumar</td>
                    <td>Cardiologist</td>
                    <td>10 years</td>
                    <td>9876543210</td>
                    <td><a href="#" class="btn">View</a></td>
                </tr>
                <tr>
                    <td>102</td>
                    <td>Dr. Priya Sharma</td>
                    <td>Neurologist</td>
                    <td>8 years</td>
                    <td>9876543211</td>
                    <td><a href="#" class="btn">View</a></td>
                </tr>
                <tr>
                    <td>103</td>
                    <td>Dr. Ravi Menon</td>
                    <td>Orthopedic</td>
                    <td>12 years</td>
                    <td>9876543212</td>
                    <td><a href="#" class="btn">View</a></td>
                </tr>
            </tbody>
        </table>
    </div>

</body>
</html>