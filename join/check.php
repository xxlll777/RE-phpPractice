<?php
session_start();

if(!isset($_SESSION['join'])){
	header('Location:index.php');
	//別のファイルに移動させたい場合headerファンクションを使う
	exit(); //メッセージを出力し、現在のスクリプトを終了する
}

if($_REQUEST['action'] == 'rewrite'){
	$_POST = $_SESSION['join'];
	$error['rewrite'] = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>userLogin</title>
</head>
<body>
	

	<form action="" method="post" enctype="application/x-www-form-urlencoded">
<dl>
	<dt>名前</dt>
	<dd></dd>
	<dt>メールアドレス</dt>
	<dd></dd>
	<dt>パスワード</dt>
	<dd>表示されません</dd>
	<dt>写真のアップロード</dt>
	<dd></dd>
</dl>

<a href="index.php?action=rewrite">&laquo;&nbsp;戻る</a>

<input type="submit" value="登録する">

</form>

</body>
</html>