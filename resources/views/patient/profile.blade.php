<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Patient Profile</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Italiana&family=Kadwa:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <style>
      /* styles.css */

      body {
    margin: 0%;
        font-family: "Kadwa", serif;
        background-color: #ccfde6;
      }
      
      .header {
        display: flex;
        justify-content:space-evenly;
        align-items: center;
        
        background-color: #c1f0c7;
        border-radius: 10px;
      }

      .header h1 {
        font-size: 40px;
        font-family: "Italiana", serif;
        font-weight: 400;
        margin-right: 1050px;
      }

      .header .logout {
        text-decoration: none;
        font-size: 16px;
        color: #333;
      }

      .main-content {
        margin-top: 20px;
      }

      .profile-card {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #c1f0c7;
        padding: 60px 100px;
        border-radius: 12px;
        width: 500px;
        align-items: center;
        position: relative;
        top: 30px;
        left: 400px;
      }

      .profile-info {
        flex: 1;
      }

      .profile-info h2 {
        margin-top: 0;
        font-size: 20px;
        text-align: center;
        position: relative;
        left: 50px;
      }

      .details p {
        margin: 8px 0;
        font-size: 14px;
        line-height: 2;
      }

      .edit-btn {
        margin-top: 30px;
        display: block;
        padding: 10px 20px;
        font-size: 13px;
        background-color: #52db52;
        color: #fff;
        border: none;
        border-radius: 8px;
        cursor: pointer;
      }

      .profile-image {
        flex: 0.5;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .image-placeholder {
        width: 200px;
        height: 200px;
        border-radius: 50%;
        background-color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #333;
        font-size: 14px;
      }

      .actions {
        width: 70%;
        margin-top: 60px;
        margin-left: 220px;
        display: flex;
        justify-content: center;
        margin-bottom: 30px;
      }
      .action-btn {
        
        margin: 0 100px;
        padding: 15px 60px;
        font-size: 16px;
        background-color: #c1f0c7;
        border: none;
        border-radius: 8px;
        
        cursor: pointer;
        transition: background-color 0.3s ease;
      }
      

      .action-btn:hover {
        background-color: #9cd49c;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <header class="header">
        <h1>Vel Health Care</h1>
        <a href="{{ url('login') }}" class="logout">Log out</a>
      </header>

      <main class="main-content">
        <div class="profile-card">
          <div class="profile-info">
            <h2>Patient Profile</h2>
            <p><strong>Name:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>DOB:</strong> {{ $user->dob }}</p>
            <p><strong>Phone:</strong> {{ $user->phone_no }}</p>
            <p><strong>Gender:</strong> {{ $user->gender }}</p>
            <p><strong>Address:</strong> {{ $user->address }}</p>
            <p><strong>Blood Group:</strong> {{ $user->blood_group }}</p>

            <a href={{ route('patient.edit', $user->id) }}> <button class="edit-btn">Edit Profile</button></a>
          </div>
        </div>

        <div class="actions">
          <a href="{{ route('patient.bookapp') }}"><button class="action-btn">Book Appointment</button></a>
        </div>
      </main>
    </div>
  </body>
</html>
