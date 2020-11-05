<!-- ここから -->
<?php
session_start();

$_SESSION["post"] = $_POST;

$name = "";
$trigger = "";

if ( isset( $_POST["name"] ) == true ) {
	$name = htmlspecialchars( $_POST["name"], ENT_QUOTES );
}

if ( isset( $_POST["trigger"] ) == true ) {
	$trigger = htmlspecialchars( $_POST["trigger"], ENT_QUOTES );
}
?>
<!-- ここまで -->
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
			<h1>確認画面</h1>
		</div>
	</div>
	<div class="container padding-y-20">
		<table class="table">
			<tbody>
				<tr>
					<th>
						お名前
					</th>
					<td>
						<!-- ここから -->
						<?php echo $name; ?>
						<!-- ここまで -->
					</td>
				</tr>
				<tr>
					<th>
						PHPを勉強するきっかけ
					</th>
					<td>
						<!-- ここから -->
						<?php echo nl2br( $trigger ); ?>
						<!-- ここまで -->
					</td>
				</tr>
			</tbody>
		</table>
		<a href="input.php" class="btn">戻る</a>
		<a href="complete.php" class="btn">登録</a>
	</div>
</body>
</html>
