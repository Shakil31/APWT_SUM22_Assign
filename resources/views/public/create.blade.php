<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        
    Name: <input type="text" name="name" placeholder="Name" value="{{old('name')}}"><br>
    <br>
        @error('name')
            {{$message}}<br>
        @enderror
    Id: <input type="text" name="id" value="{{old('id')}}" placeholder="Id"><br>
    <br>    
        @error('id')
            {{$message}}<br>
        @enderror
    Gender: <input type="radio" value="male" name="gender"> Male <input type="radio" value="female" name="gender"> Female<br>
    <br>
    Email: <input type="text" name="email" placeholder="Email"><br>
    <br>    
    @error('email')
            {{$message}} <br>
        @enderror
    
        Dob: <input type="date" name="dob"><br>
        <br> 
        @error('dob')
            {{$message}}<br>
        @enderror
    Password: <input type="password" name="password" ><br>
    <br>    
    @error('password')
            {{$message}}<br>
        @enderror
    Confirm Password: <input type="password" name="conf_password"><br>
    <br> 
    @error('conf_password')
            {{$message}}<br>
        @enderror
        <br>
        <input type="submit" value="Create">
    </form>
</body>
</html>
