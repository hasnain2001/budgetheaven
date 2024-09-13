<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
         <link rel="icon" href="{{ asset('images/icons.png') }}" type="image/x-icon">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-top: 0;
            text-align: center;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            border-radius: 3px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .text-center {
            text-align: center;
        }
        .text-sm {
            font-size: 14px;
        }
        .text-gray-600 {
            color: #666;
        }
        .mt-2 {
            margin-top: 10px;
        }
        .mt-4 {
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>User Registration</h2>
    <p>not allowed</p>
    {{-- <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <label for="name">Name</label>
        <input id="name" type="text" name="name" value="{{ old('name') }}" >

        <!-- Email Address -->
        <label for="email">Email Address</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">

        <!-- Password -->
    <label for="password">Password</label>
<div class="password-wrapper">
    <input id="password" type="password" name="password" required autocomplete="new-password">
    <button type="button" class="toggle-password" onclick="togglePasswordVisibility('password', this)"><i>Show</i></button>
</div>

<!-- Confirm Password -->
<label for="password_confirmation">Confirm Password</label>
<div class="password-wrapper">
    <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
    <button type="button" class="toggle-password" onclick="togglePasswordVisibility('password_confirmation', this)"><i>Show</i></button>
</div>


        <input type="submit" value="Register">

        <div class="text-center mt-4">
            <span class="text-sm text-gray-600">Already have an account? <a href="{{ route('login') }}">Login</a></span>
        </div>

        @if ($errors->any())
            <div class="mt-2">
                @foreach ($errors->all() as $error)
                    <span>{{ $error }}</span>
                @endforeach
            </div>
        @endif
    </form> --}}
</div>

<script>
    function togglePasswordVisibility(inputId) {
        const passwordInput = document.getElementById(inputId);
        const toggleButton = passwordInput.nextElementSibling;

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            toggleButton.textContent = "Hide";
        } else {
            passwordInput.type = "password";
            toggleButton.textContent = "Show";
        }
    }
</script>

</body>
</html>
