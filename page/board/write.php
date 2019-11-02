<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Writer</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
<div id="board_write">
    <h1>자유게시판</h1>
    <h4>글을 작성하는 공간 입니다.</h4>
    <div id="write_area">
        <form action="write_ok.php" method="post">
            <div id="in_title">
                <textarea name="title" id="utitle" placeholder="제목" cols="55" rows="1" maxlength="100" required></textarea>
            </div>
            <div class="wi_line"></div>
            <div id="in_name">
                <textarea name="name" id="ucontent" placeholder="글쓴이" cols="55" rows="1" maxlength="100" required></textarea>
            </div>
            <div class="wi_line"></div>
            <div id="in_content">
                <textarea name="name" id="ucontent" placeholder="내용" required></textarea>
            </div>
            <div id="in_pw">
                <input type="password" name="pw" id="upw" placeholder="비밀번호" required />
            </div>
            <div class="bt_se">
                <button type="submit">글 작성</button>
            </div>
        </form>
    </div>
</div>    
</body>
</html>