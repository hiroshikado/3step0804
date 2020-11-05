<?php  
session_start();

$_SESSION = [];

session_destroy();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8" >
	<title>アンケートフォームを作ろう</title>
	<link rel="stylesheet" href="/php/css/skyblue.css">
</head>
<body>
	<div class="bg-success padding-y-20">
		<div class="container text-center">
			<h1>完了画面</h1>
		</div>
	</div>
	<div class="container padding-y-20">
		<p>
			登録が完了しました。
		</p>
		<a href="input.php" class="btn">戻る</a>
	</div>
</body>
</html>
