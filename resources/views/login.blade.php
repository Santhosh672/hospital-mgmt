<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - VHC</title>
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

.login-container {
    background-color: #c1f0c7;
    border-radius: 15px;
    padding: 40px;
    width: 400px;
    
    text-align: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.login-container h1 {
    font-family: "Kadwa", serif;
    margin-bottom: 20px;
    font-size: 25px;
}

form label {
    display: block;
    text-align: left;
    margin-left: 20px;
    margin-bottom: 10px;
    font-size: 16px;
    font-family: "Inter", sans-serif;
}

form input {
    width: 80%;
    padding: 10px;
    margin-bottom: 15px;
    border: none;
    border-radius: 8px;
    background-color: #70e63d;
    font-size: 16px;
    color: white;
    font-family: "Inter", sans-serif;
}

form button {
    width: 40%;
    padding: 10px;
    border: none;
    margin-top: 10px;
    border-radius: 8px;
    background-color: #70e63d;
    font-size: 16px;
    font-family: "Inter", sans-serif;
    color: white;
    cursor: pointer;
}

form button:hover {
    background-color: #58c72a;
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

    .login-container {
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

    .login-container h1 {
        font-size: 20px;
    }

    form input, form button {
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
        <div class="login-container">
            <h1>Login</h1>
            <form action="{{ route('user.login') }}" method="POST">
                @csrf
                <label for="email">User Email</label>
                <input type="email" name="email" placeholder="Enter your Email" required>

                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Enter your Password" required>

                <label for="type">Login Type</label>
                <select name="type" required>
                    <option value="patient">Patient</option>
                    <option value="doctor">Doctor</option>
                </select>

                <button type="submit">Login</button>
            </form>
        </div>
    </main>
</body>
</html>
