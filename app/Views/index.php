<?php
session_start();
if ($_SESSION == Null){
	echo '<script>alert("로그인 해주세요.")</script>';
}
	return view('login');
	$username = $_SESSION['username'];

?>
<body>
    <div class="base">
        <h2><?php echo "안녕하세요, $username 님";?></h2>
        <button type="button" class="btn" onclick="location.href='logout.php'">
            로그아웃
        </button>
		<button type="button" class ="btn" onclick="location.href='write'">
			글 작성하기
		</button>
    </div>
</body>
