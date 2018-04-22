<html>
<head><title>Customer</title></head>
<body>

<form action="/customer/store" method="post">
    {{csrf_field()}}

    Name of organizaiton: <input type="text" name="organisation_or_person"><br>
    Gender:
    <input type="radio" name="gender" value="male" checked> Male<br>
    <input type="radio" name="gender" value="female"> Female<br>
    <input type="radio" name="gender" value="other"> Other
    <br>
    First name: <input type="text" name="first_name"><br>
    Last name: <input type = "text" name="last_name"><br>

    Email:<input type="email" name="email_address"><br>
    login: <input type="text" name="login_name"><br>
    password<input type="password" name="login_password"><br>
    <input type="submit" value="submit">
</form>

</body>
</html>