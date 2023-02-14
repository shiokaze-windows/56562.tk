<html>
	<head>
		<link rel="icon" type="image/png" href="/56562.png">
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
			body {
				background-color: rgb(21, 32, 43);
				color: white;
				font-family: Arial, sans-serif;
				margin: 0;
				padding: 0;
				font-size: 1rem;
			}
		.container {
			margin-left: 2%;
			margin-right: 2%;
			margin-top: 3%;
		}
		
		h2 {
			margin-bottom: 1rem;
		}
		
		hr {
			border: 0;
			border-top: 1px solid white;
			margin-top: 1rem;
			margin-bottom: 1rem;
		}
		
		button {
			background-color: #1D9BF0;
			color: white;
			padding: 0.5rem 1rem;
			border-radius: 0.25rem;
			border: none;
			cursor: pointer;
			margin-bottom: 1rem;
		}
		
		@media (max-width: 767px) {
		  .container {
			margin-left: 5%;
			margin-right: 5%;
		  }
		}
	</style>
	<title>チャット</title>
</head>
<body>
	<div class="container">
		<h2>チャットアーカイブ</h2>
		<button onclick="location.href='./pchat.php'">チャットに戻る</button>
		<hr>
			<?php
				$fp = fopen('./date/loglog.txt','r');
				$maneof = 0;
				for($i = 0;!feof($fp);$i++)
				{
				$line[$i] = fgets($fp);
				$maneof++;
				}
				$maneof--;
				for(; $maneof >= 0; $maneof--) { 
					print $line[$maneof];
				}
			?>
	</div>
</body>
</html>