//加载文章的评论内容
$comment_res = mysql_query("SELECT * FROM comment WHERE article_id = '$article_id'  ORDER BY create_time DESC");
