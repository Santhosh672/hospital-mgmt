<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Patient Registration</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Italiana&family=Kadwa:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <style>
      /* styles.css */

      body {
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #ccfde6;
      }

      header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 50px;
        background-color: #c1f0c7;
        border-radius: 10px;
      }

      .logo {
        font-size: 50px;
        font-family: "Italiana", serif;
        font-weight: 400;
      }

      nav ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        gap: 20px;
      }

      nav a {
        text-decoration: none;
        color: black;
        font-size: 18px;
      }

      main {
        display: flex;
        justify-content: center;
        align-items: center;
        height: calc(100vh - 60px);
      }

      .registration-container {
        background-color: #c1f0c7;
        border-radius: 15px;
        margin-top: 200px;
        padding: 30px 120px;
        width: 400px;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      }

      .registration-container h1 {
        font-family: "Kadwa", serif;
        margin-bottom: 15px;
      }

      form label {
        display: block;
        text-align: left;
        margin-bottom: 5px;
        font-size: 16px;
        font-family: "Inter", sans-serif;
      }

      form input {
        width: 370px;
        padding: 10px;
        margin-bottom: 15px;
        border: none;
        border-radius: 8px;
        background-color: #70e63d;
        font-size: 14px;
        color: white;
        font-family: "Inter", sans-serif;
      }

      .upload-label {
        display: inline-block;
        width: 40%;
        text-align: center;
        background-color: #70e63d;
        padding: 10px;
        border-radius: 8px;
        color: white;
        cursor: pointer;
        font-family: "Inter", sans-serif;
        margin-right: 30px;
      }

      .upload-button {
        display: none;
      }

      .submit-button {
        width: 20%;
        padding: 10px;
        border: none;
        margin-top: 20px;
        margin-left: 100px;
        border-radius: 8px;
        background-color: #70e63d;
        font-size: 16px;
        font-family: "Inter", sans-serif;
        color: white;
        cursor: pointer;
      }

      .submit-button:hover {
        background-color: #58c72a;
      }
      select {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: none;
        border-radius: 8px;
        background-color: #70e63d;
        font-size: 16px;
        color: white;
        font-family: "Inter", sans-serif;
        cursor: pointer;
      }

      select option {
        background-color: white;
        color: black;
      }
      select {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: none;
        border-radius: 8px;
        background-color: #70e63d;
        font-size: 16px;
        color: white;
        font-family: "Inter", sans-serif;
        cursor: pointer;
      }

      select option {
        background-color: white;
        color: black;
      }

      /* Mobile Responsive */
      @media (max-width: 768px) {
        header {
          flex-direction: column;
          text-align: center;
          padding: 10px 20px;
        }

        nav ul {
          flex-direction: column;
          gap: 10px;
        }

        main {
          padding: 20px;
        }

        .registration-container {
          width: 90%;
          padding: 20px;
        }
      }

      @media (max-width: 480px) {
        .logo {
          font-size: 20px;
        }

        nav a {
          font-size: 16px;
        }

        .registration-container h1 {
          font-size: 20px;
        }

        form input,
        .submit-button,
        .upload-label {
          font-size: 14px;
          padding: 8px;
        }
      }
    </style>
  </head>
  <body>
    <header>
      <div class="logo">VHC</div>
      <nav>
        <ul>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('/') }}">Contact</a></li>
          <li><a href="{{ url('/') }}">About us</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <div class="registration-container">
        <h1>Patient Registration</h1>
        <form action="{{ route('patient.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <label for="name">Name</label>
          <input type="text" name="name" placeholder="Enter your name"/>

          <label for="dob">DOB</label>
          <input type="date" name="dob" />

          <label for="gender">Gender</label>
          <select name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="others">Others</option>
          </select>

          <label for="blood_group">Blood Group</label>
          <select name="blood_group">
            <option value="a+">A+</option>
            <option value="a-">A-</option>
            <option value="b+">B+</option>
            <option value="b-">B-</option>
            <option value="ab+">AB+</option>
            <option value="ab-">AB-</option>
            <option value="o+">O+</option>
            <option value="o-">O-</option>
          </select>

          <label for="email">Email</label>
          <input type="email" name="email" placeholder="Enter your email" />

          <label for="password">Password</label>
          <input type="text" name="password" placeholder="Enter your password" />

          <label for="phone_no">PhNo</label>
          <input type="tel" name="phone_no" placeholder="Enter your phone number" />

          <label for="address">Address</label>
          <input type="text" name="address" placeholder="Enter your address" />

          <button class="submit-button">Submit</button>
        </form>
      </div>
    </main>
  </body>
</html>
