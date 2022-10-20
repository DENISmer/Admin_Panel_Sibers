<html>
<head>
    <link rel="stylesheet" type="text/css" href="/styles/style.css">
    <meta charset="utf-8">
    <title>Группа</title>

</head>
<body>
<h1 style="margin-left: 100px">Sign up</h1>
<form style="margin-left: 100px" action="?registration" method="post">
    <input type="text" name="username" placeholder="Login"></p>
    <input type="password" name="pass" placeholder="Password"></p>
    <input type="text" name="name" placeholder="Your name"></p>
    <input type="text" name="surname" placeholder="Surname"></p>
    <input type="text" name="sex" placeholder="Sex"></p>
    <input placeholder="Date" class="textbox-n" type="text" onfocus="(this.type='date')" id="date" name="birthday"></p>
    <p><input type="submit" name="add_user" value="sign up"></p>
    <a href="Admin_Panel_Sibers/markup/registration.php">reg</a>
</form>

<form style="margin-left: 100px" action="?login" method="post">
    <input type="submit" name="sign in" value="sign in"></p>
</form>

</body>
</html>