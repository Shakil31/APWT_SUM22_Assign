<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
</head>
<body>
Email: <input type="text" name="email" placeholder="Email"><br>
<br>
    @error('email')
            {{$message}} <br>
    @enderror

Password: <input type="password" name="password"><br>
<br>
    @error('password')
            {{$message}}<br>
    @enderror
<input type="submit" value="submit"><br>
<br>
<input type="button" value="Registration"><br>
</body>
</html>