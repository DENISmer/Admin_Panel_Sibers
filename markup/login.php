<html>
<head>
    <link rel="stylesheet" type="text/css" href="/styles/style.css">
    <meta charset="utf-8">
    <title>Группа</title>

</head>
<body>
<h1 style="margin-left: 100px">Sign in</h1>
<form style="margin-left: 100px" action="?login" method="post">
    <input type="text" name="username" placeholder="Login"></p>
    <input type="password" name="password" placeholder="Password"></p>
    <p><input type="submit" name="subm_authorization" value="sign in"></p>
    <a href="/Admin_Panel_Sibers">reg</a>
</form>
<form style="margin-left: 100px" action="?registration" method="post">
    <input type="submit" name="registration" value="sign up"></p>
</form>
</body>
</html>
<?php
//header('Location : /');
?>