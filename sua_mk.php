<!DOCTYPE html>
<html>

<body>
    <?php
        session_start();
    ?>
<h1>ĐỔI PASSWORD</h1>
Xin chào <?php echo $_SESSION['fullname']?> <br>
<form action="update_mk.php" method="post">
    Mật Khẩu Cũ: <input type="password" name="pass"><br>
    Mật Khẩu Mới: <input type="password" name="pass_new1"><br>
    Nhập Lại Mật Khẩu Mới: <input type="password" name="pass_new2"><br>

<input type="submit">
</form>
</body>
</html>