<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags and Bootstrap CSS -->
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Login</h2>
    <form id="loginForm">
        @csrf
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group mt-2">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="form-check mt-2">
            <input type="checkbox" class="form-check-input" id="remember" name="remember">
            <label class="form-check-label" for="remember">Remember Me</label>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Login</button>
    </form>
    <div id="message" class="mt-3"></div>
</div>

<!-- Include JS Files -->
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
