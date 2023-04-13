<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>게시판</title>
<?php
$username = $_SESSION['username'];
?>
</head>
<body>
<h2><?php echo "안녕하세요, $username 님";?></h2>
  <?$board_id=$_GET['board_id'];?>
    <div id="board_write">
        <h4>글을 작성하는 공간입니다.</h4>
            <div id="write_area">
                <form enctype="multipart/form-data" action="check_writer.php" method="post">
                    <div id="in_title">
                        <textarea class="title"name="title" id="utitle" rows="1" cols="55" placeholder="제목" maxlength="100" required></textarea>
                    </div>
 
                    <div class="wi_line"></div>
                    <div id="in_content">
                        <textarea class="content" name="content" id="ucontent" placeholder="내용" required></textarea>
                    </div>
                    <div class="bt_se">
                        <button type="submit">글 작성</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
 