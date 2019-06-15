<?php
session_start();

if(!empty($_POST)){
	//エラーの確認
	if($_POST['name'] == ''){
		$error['name'] = 'blank';
	}
	if($_POST['email'] == ''){
		$error['email'] = 'blank';
	}
	if(strlen($_POST['password']) < 4 ){
		$error['password'] = 'length';
	}
	if($_POST['password'] == ''){
		$error['password'] = 'blank';
	}


	if(empty($error)){
		$_SESSION['join'] = $_POST;
		header('Location: check.php');
		exit();
	}
}


?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>userLogin</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	

<form action="" method="post" enctype="application/x-www-form-urlencoded">
<dl>
	<dt>名前</dt>
	<dd>
		<input type="text" name="name" value="<?php echo htmlspecialchars($_POST['name'],ENT_QUOTES); ?>">
		<?php if ($error['name'] == 'blank'): ?>
			<p class="error">ニックネームを入力してください</p>
		<?php endif; ?>
	</dd>

	<dt class="error">メールアドレス</dt>
	<dd><input type="text" name="mail"></dd>
	<dt>パスワード</dt>
	<dd><input type="password" name="password"></dd>
	<dt>写真のアップロード</dt>
	<dd><input type="file" name="image"></dd>
</dl>

<input type="submit" value="確認">
</form>

</body>
</html>