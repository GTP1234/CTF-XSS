<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Test Your skill</title>
</head>
<body bgcolor="#C3C3C3">
    <h3>
      &gt; XgroupVN Log-IN
    </h3>
    <table width="80%">
      <tr>
        <td width="50%">
          <fieldset>
            <legend>Test Your skill</legend>
    Một thử thách XSS - xem bạn có thể đăng nhập như là người dùng "admin" không? <br> <br>
    Lưu ý rằng để làm như vậy, bạn cần phải tạo tài khoản của riêng mình và tạo một cuộc tấn công XSS trên tiểu sử người dùng của bạn <br> <br>
    Đối với mục đích của thử thách này, bất cứ điều gì bạn thành công "alert ()" trong trình duyệt của quản trị viên sẽ được thông qua cùng với bạn.<br><br>
            Source code tham khảo <a href='hhttps://github.com/GTP1234/CTF-XSS'>here</a>.
          </fieldset>
        </td>
        <td>
          <fieldset>
            <legend>Login</legend>
            <form action="authenticate.php" method="post" name="login" id="login">
              Username: <input type="text" name="username" /><br />
              Password: <input type="password" name="password" /><br />
              <input type="submit" value="Submit" />
            </form>
          </fieldset>
        </td>
      </tr>
    </table><br />
    <h3>
      <a href='register.php'>REGISTER NOW!</a>
    </h3><br />
  </body>
</html>
