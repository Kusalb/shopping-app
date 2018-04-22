<html>
<head><title>Customer</title></head>
<body>

<form action="/user/store" method="post">
    {{csrf_field()}}

    Name <input type="text" name="name"><br>

    Email <input type="email" name="email"><br>
    Password <input type = "password" name="password"><br>


    <input type="submit" value="submit">
</form>

</body>
</html>