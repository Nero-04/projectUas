<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirecting to Login</title>
</head>
<body>
    @php
        header('Location: /admin/login');
        exit;
    @endphp
</body>
</html>
