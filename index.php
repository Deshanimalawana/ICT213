<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
    <form action="user" method="post">
        @csrf
        Name : <input type="text" name="name" id="name"><br><br>

        Reg No : <input type="text" name="regno" id="regno"><br><br>

       <input type="submit" value="Login">



    </form>
</body>
</html>
