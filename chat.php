<html>
	<head>
<link rel="icon" type="image/png" href="/56562.png">
		<metahttp-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="UTF-8">
		<style>
			body {
				background-color: rgb(21, 32, 43);
				color: white;
				font-family: Arial, sans-serif;
			}
		h2 {
			text-align: center;
			margin-bottom: 30px;
		}
		
		form {
			display: flex;
			flex-direction: column;
			align-items: center;
			background-color: rgb(34, 49, 63);
			padding: 20px;
			border-radius: 10px;
		}
		
		input[type="text"] {
			margin-bottom: 10px;
			padding: 10px;
			font-size: 16px;
			border: none;
			border-radius: 5px;
		}
		
		input[type="submit"] {
			background-color: #1D9BF0;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
		}
		
		button {
			background-color: #1D9BF0;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
			margin-top: 20px;
			float: right;
		}
		
		hr {
			margin-top: 50px;
			border-top: 1px solid white;
		}
		
		p {
			text-align: center;
			font-size: 16px;
			margin-top: 20px;
		}
	</style>
	<title>チャット</title>
</head>
<body>
	<div style="margin: 50px;">
		<h2>チャット(掲示板型)</h2>
		<form action="input.php" method="post">
			<input type="text" size="10" autocom
			<input type="text" size="10" autocomplete="name" name="name"><br>
			<input type="text" size="30" autocomplete="no" name="maintext">
			<input type="submit">
		</form>
		<button onclick="location.reload();">メッセージ更新</button>
		<hr>
		<p style="color:blue;">名前は上段、文は下段に入れて送信してください。</p>
			<?php
				$fp = fopen('./date/chatlog.txt','r');
				$maneof = 0;
				for($i = 0;!feof($fp);$i++)
				{
				$line[$i] = fgets($fp);
				$maneof++;
				}
				$maneof--;
				for(; $maneof >= 0; $maneof--) { 
					print "<p>" . $line[$maneof] . "</p>";
				}
			?>
	</body>
</html>