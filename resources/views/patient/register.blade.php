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
        <form action="#">
          <label for="name">Name</label>
          <input type="text" id="name" placeholder="Enter your name" />

          <label for="dob">DOB</label>
          <input type="date" id="dob" />

          <label for="gender">Gender</label>
          <select id="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="Others">Others</option>
          </select>

          <label for="blood-group">Blood Group</label>
          <select id="blood-group">
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
          <input type="email" id="email" placeholder="Enter your email" />

          <label for="phone">PhNo</label>
          <input type="tel" id="phone" placeholder="Enter your phone number" />

          <label for="address">Address</label>
          <input type="text" id="address" placeholder="Enter your address" />

          <label for="image-upload" class="upload-label"
            >Upload your image</label
          >
          <input type="file" id="image-upload" class="upload-button" />

          <a href="./patientprofile.html"
            ><button class="submit-button">Submit</button></a
          >
        </form>
      </div>
    </main>
  </body>
</html>
