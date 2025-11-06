<!DOCTYPE html>
<html>
<head>
    <title>Registration Successful</title>
    <style>
        body {
            background-color: #f4edfb;
            font-family: 'Poppins', sans-serif;
            color: #4b3f72;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .success-box {
            background: #ffffff;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0px 4px 20px rgba(180, 160, 220, 0.3);
            text-align: center;
            width: 400px;
        }
        h1 {
            color: #7d5ba6;
            margin-bottom: 20px;
        }
        p {
            margin: 10px 0;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            background-color: #b9a0de;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 25px;
            transition: 0.3s;
        }
        a:hover {
            background-color: #a488d9;
        }
    </style>
</head>
<body>
    <div class="success-box">
        <h1>✨ Registration Successful! ✨</h1>

        <p><strong>Name:</strong> {{ $data['name'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Age:</strong> {{ $data['age'] }}</p>

        <a href="{{ route('register.form') }}">Register Another</a>
    </div>
</body>
</html>
