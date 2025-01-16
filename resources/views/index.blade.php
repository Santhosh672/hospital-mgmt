<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vels Health Care</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Italiana&family=Kadwa:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <style>
      /* CSS Code */

      body {
        margin: 0;
        font-family: "Kadwa", serif;
        background-color: #ccfde6;
      }

      .header {
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

      nav {
        display: flex;
        gap: 20px;
      }

      nav a {
        text-decoration: none;
        font-size: 18px;
        color: #000;
      }

      .login-btn {
        background-color: #70e63d;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 22.5px;
        cursor: pointer;
        font-size: 16px;
      }

      .main {
        display: flex;
        justify-content: center;
        gap: 60px;
        align-items: center;
        padding: 150px 50px;
      }

      .content {
        width: 300px;
      }

      .content h1 {
        font-size: 60px;
        font-weight: 700;
        font-family: "Italiana", serif;
        margin: 0;
      }

      .content p {
        font-size: 24px;
        font-style: italic;
        color: #000;
        margin-top: 20px;
        font-family: "Kadwa", serif;
      }

      .card {
        background-color: #c1f0c7;
        padding: 30px;
        border-radius: 25px;
        text-align: center;
        width: 300px;
      }

      .card p {
        font-size: 20px;
        margin-bottom: 20px;
      }

      .card button {
        background-color: #70e63d;
        color: #fff;
        border: none;
        padding: 15px 20px;
        border-radius: 19px;
        font-size: 16px;
        cursor: pointer;
        margin: 10px 0;
        width: 100%;
      }

      /* Responsive Design */
      @media (max-width: 768px) {
        .header {
          flex-direction: column;
          align-items: center;
          padding: 15px 20px;
        }

        .logo {
          font-size: 40px;
          margin-bottom: 10px;
        }

        nav {
          flex-direction: column;
          gap: 10px;
        }

        nav a {
          font-size: 16px;
        }

        .main {
          flex-direction: column;
          padding: 50px 20px;
          gap: 30px;
        }

        .content h1 {
          font-size: 40px;
          text-align: center;
        }

        .content p {
          font-size: 18px;
          text-align: center;
        }

        .card {
          width: 90%;
        }
      }

      @media (max-width: 480px) {
        .logo {
          font-size: 30px;
        }

        .content h1 {
          font-size: 30px;
        }

        .content p {
          font-size: 16px;
        }

        nav a {
          font-size: 14px;
        }

        .card {
          padding: 20px;
        }

        .card p {
          font-size: 16px;
        }

        .card button {
          padding: 10px 15px;
          font-size: 14px;
        }
      }
    </style>
  </head>
  <body>
    <div class="header">
      <div class="logo">VHC</div>
      <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/') }}">Contact</a>
        <a href="{{ url('/') }}">About us</a>
        <a href="{{ url('/') }}"><button class="login-btn">Login</button></a>
      </nav>
    </div>
    <div class="main">
      <div class="content">
        <h1>Vels Health Care</h1>
        <p>"Your health, our mission"</p>
      </div>
      <div class="card">
        <p>If you're new here</p>
        <a href="{{ route('patient.store') }}"><button>Patient Registration</button></a>
        <a href="{{ route('doctor.store') }}"><button>Doctor Registration</button></a>
      </div>
    </div>
  </body>
</html>
