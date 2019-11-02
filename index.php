<?php
    include $_SERVER['DOCUMENT_ROOT'].'/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
<div id="board_area">
    <h1>자유게시판</h1>
    <h4>자유롭게 글을 쓸 수 있는 게시판입니다</h4>
    <table class="list-table">
        <thead>
            <tr>
                <th width="70">번호</th>
                <th width="500">제목</th>
                <th width="120">글쓴이</th>
                <th width="100">작성일</th>
                <th width="100">조회수</th>
            </tr>
        </thead>
        <?php
            $sql = mq("SELECT * FROM board ORDER BY idx DESC LIMIT 0,5");
            while($row = $sql->fetch_array()){
                $title=$row["title"];
                if(strlen($title)>30){
                    $title=str_replace($row["title"],mb_substr($row["title"],0,30,"utf-8")."...",$row["title"]);
                }
            ?>
        <tbody>
            <tr>
                <td width="70"><?=$row['idx'];?></td>
                <td width="500"><a href=""><?=$title;?></a></td>
                <td width="120"><?=$row['name'];?></td>
                <td width="100"><?=$row['date'];?></td>
                <td width="100"><?=$row['hit'];?></td>
            </tr>
        </tbody>
        <?php } ?>
    </table>
    <div id="write_btn">
        <a href="/page/board/write.php"><button>글쓰기</button></a>
    </div>
</div>
</body>
</html>