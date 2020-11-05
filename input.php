<!-- ここから -->
<?php
session_start();

$name = "";
$trigger = "";

if ( isset($_SESSION["post"]) == true ) {
	$post = $_SESSION["post"];
	if ( isset( $post["name"] ) == true ) {
		$name = $post["name"];
	}

	if ( isset( $post["trigger"] ) == true ) {
		$trigger = $post["trigger"];
	}
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
			<h1>入力画面</h1>
		</div>
	</div>
	<div class="container padding-y-20">
		<form action="confirm.php" method="post">
			<table class="table">
				<tbody>
					<tr>
						<th>
							お名前
						</th>
						<td>
							<input class="form-control" type="text" name="name" value="<?php echo $name; ?>" />
						</td>
					</tr>
					<tr>
						<th>
							PHPを勉強するきっかけ
						</th>
						<td>
							<textarea class="form-control" name="trigger"><?php echo $trigger; ?></textarea>
						</td>
					</tr>
				</tbody>
			</table>
			<input type="submit" value="確認" class="btn" />
		</form>
	</div>
</body>
</html>
