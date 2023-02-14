 <head> <link rel="icon" type="image/png" href="/56562.png"> </head>
<style>
    h1, h2, h3, p, a, span {
        color: white;
    }
    /* 見出し、段落、リンク、スパンの文字色を白に設定 */

    form {
        width: 50%;
        margin: 0 auto;
        text-align: center;
        padding: 30px;
        background-color: #152037;
        color: white;
        border-radius: 10px;
    }
    /* フォームの見た目を調整 */

    input[type="file"] {
        padding: 10px 20px;
        margin: 10px 0;
        border: none;
        border-radius: 5px;
        background-color: #1D9BF0;
        color: white;
        cursor: pointer;
    }
    /* ファイル入力ボタンの見た目を調整 */

    input[type="submit"] {
        padding: 10px 20px;
        margin: 10px 0;
        border: none;
        border-radius: 5px;
        background-color: #1D9BF0;
        color: white;
        cursor: pointer;
    }
    /* 送信ボタンの見た目を調整 */

    a {
        display: block;
        margin: 30px auto;
        padding: 10px 20px;
        background-color: #1D9BF0;
        color: white;
        border-radius: 5px;
        text-decoration: none;
    }
    /* リンクボタンの見た目を調整 */
@media only screen and (max-width: 600px) {
  form {
    width: 80%;
  }
}
</style>
<title>ファイルアップローダー</title>
<body link="#1D9BF0" alink="#1D9BF0" vlink="#1D9BF0" style="background-color: rgb(21, 32, 43);">
    <form action="./up_for_personal.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" value="ファイルをアップロードする">
    </form>
    <?php
        $hour = date('H');
        $date = date('d');
        $hour += 8;
        if ($hour > 23) {
            $date += 1;
            $hour -= 24;
        }
        ini_set("display_errors", "Off");
        $todaydate = date('n') . "/" . $date . "/" . $hour . ":" . date('i') . ":" . date('s');
        $fp = fopen('./pasonau/count.txt', "r");
        $count =  fgets($fp);
        try{
            if(is_upload_file($_FILES['file']['tmp_name'])){
	        move_uploaded_file($_FILES['file']['tmp_name'], './pasonau/'.$_FILES['file']['name']);
            echo "<p>"."./pasonau/".$_FILES['file']['name'].$filetype."として保存されました"."</p>";
			echo '<h2>UP完了</h2>';
			//log
            $count++;
			$filename = './pasonau/count.txt';
			$fp = fopen($filename, 'w');
			$data = $count;
			fputs($fp, $data);
			fclose($fp);
		}
}catch(Exception $e) {
        echo 'エラー:', $e->getMessage().PHP_EOL;
}
//研究対象コード
//何故動いた...w
?>
<a href="./index.html" style="text-decoration:none">ホームに戻る</a>
</body>