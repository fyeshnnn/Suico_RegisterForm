<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <style>
        body {
            background-color: #f8f5fb;
            font-family: 'Poppins', sans-serif;
            color: #4b3f72;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background: #ffffff;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0px 4px 20px rgba(180, 160, 220, 0.3);
            width: 400px;
        }
        h1 {
            text-align: center;
            color: #7d5ba6;
            margin-bottom: 25px;
        }
        label {
            font-weight: 500;
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0 15px 0;
            border: 1px solid #d4c5e7;
            border-radius: 10px;
            background-color: #f9f6fc;
        }
        button {
            background-color: #b9a0de;
            color: white;
            border: none;
            border-radius: 25px;
            padding: 12px;
            width: 100%;
            font-size: 1rem;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover {
            background-color: #a488d9;
        }
        .errors {
            background-color: #f9e8ef;
            color: #a33a5d;
            border: 1px solid #f5c2cb;
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>User Registration</h1>

        @if ($errors->any())
            <div class="errors">
                <ul style="list-style: none; padding: 0;">
                    @foreach ($errors->all() as $error)
                        <li>• {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('register.submit') }}" method="POST">
            @csrf

            <label>Name</label>
            <input type="text" name="name" value="{{ old('name') }}">

            <label>Email</label>
            <input type="email" name="email" value="{{ old('email') }}">

            <label>Age</label>
            <input type="number" name="age" value="{{ old('age') }}">

            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
