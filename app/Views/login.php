<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="utf-8">
  <title>로그인 페이지</title>
</head>
<body>
  <form method="post" action="check_login.php" class="loginForm">
    <h2>Login</h2>
    <div class="idForm">
      <input type="text" name="id" class="id" placeholder="Username">
    </div>
    <div class="passForm">
      <input type="password" name="pw" class="pw" placeholder="Password">
    </div>
    <button type="submit" class="btn" onclick="button()">
      로그인
    </button>
    <div class="bottomText">
      <a href="signup">회원가입</a>
    </div>
  </form>
</body>
</html>