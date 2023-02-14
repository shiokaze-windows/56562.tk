<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="icon" type="image/png" href="/56562.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      /* Add CSS styles */
      body {
        background-color: #15202B;
        color: white;
        font-family: Arial, sans-serif;
      }

      h2 {
        margin: 20px 2% 3%;
      }

      form {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 20px;
      }

      label {
        color: white;
        font-weight: bold;
        margin-right: 10px;
      }

      input[type="text"] {
        padding: 10px;
        font-size: 16px;
        margin-bottom: 20px;
      }

      input[type="submit"] {
        padding: 10px 20px;
        background-color: #1D9BF0;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }

      .message-container {
        width: 80%;
        margin: 20px auto;
        background-color: rgba(255, 255, 255,0.1);
        padding: 20px;
        border-radius: 5px;
      }
      .message {
        margin-bottom: 10px;
      }

      .message p {
        margin: 0;
      }

      .message-box {
       width: 100%;
       display: flex;
       justify-content: space-between;
      }

      .message-info {
       color: #333;
       font-size: 12px;
      }

      @media (max-width: 600px) {
      .message-container {
       width: 90%;
      }
    }
    </style>
    <title>チャット</title>
  </head>
  <body>
    <h2>チャット(掲示板スタイル)</h2>
    <h4>Ver 0.2</h4>
    <form action="publicinput.php" method="post">
      <label>名前</label>
      <input type="text" size="10" autocomplete="name" name="name" value="<?php 
        if(isset($_COOKIE["username"])){ 
          $username = $_COOKIE['username']; 
          echo $username; 
        } 
      ?>">
      <label>本文</label>
      <input type="text" size="30" autocomplete="no" name="maintext">
      <input type="submit" value="送信">
    </form>
    <button onclick="location.reload();">メッセージの更新</button>
    <button href="checkme.html" onclick="location.href='./checkme.html'">スクリプトの送信</button>
    <button href="checkme.html" onclick="location.href='./upfile.php'">ファイルのアップロード</button>
    <button href="checkme.html" onclick="location.href='./upfile_image.php'">画像のアップロード＆貼り付け</button>
    <button href="checkme.html" onclick="location.href='./upfile_video.php'">動画のアップロード＆貼り付け</button>
    <button href="checkme.html" onclick="location.href='./upfile_audio.php'">音声のアップロード＆貼り付け</button>
    <button href="checkme.html" onclick="location.href='./list.php'">ファイルリストと削除</button>
    <button href="checkme.html" onclick="location.href='./parchive.php'">アーカイブ</button>
    <button href="checkme.html" onclick="location.href='./Editing.php'">チャットの編集</button>
    <button href="checkme.html" onclick="location.href='./更新履歴.html'">更新履歴</button>
    <hr>
    <br>
    <div class="message-container">
      <?php
        $fp = fopen('./date/publiclog.txt','r');
        $maneof = 0;
        $ng_words =  ["ポルノ", "アダルト", "セックス", "バイブレーター", "マスターベーション", "オナニー", "スケベ", "羞恥", "セクロス", "SEX", "風俗", "童貞", "ペニス", "触手", "羞恥", "Tバック", "グラビア", "美尻", "お尻", "セクシー", "無修正", "大麻", "麻薬", "基地外", "糞", "死ね", "殺す", "shit", "piss", "fuck", "cunt", "cocksucker", "ぶさいく", "淫乱", "爆乳", "motherfucker", "tits", "中出し", "ブタ", "やりまん", "潮吹", "アナル", "超乳", "MKT", "ザコ", "くず", "包茎", "射精", "ガチムチ", "乳首", "まんぐり", "オナキン", "精子", "クンニ", "自分を売る", "肉棒", "陰毛", "せっくす", "ボッキ", "亀頭", "ふたなり", "ゲイ", "パイパン", "春画", "処女"];
				for($i = 0;!feof($fp);$i++)
				{
				$line[$i] = fgets($fp);
				$maneof++;
				}
				$maneof--;
				for(; $maneof >= 0; $maneof--) { 
          $line[$maneof] = str_replace($ng_words, "***", $line[$maneof]);
					print $line[$maneof];
				}
			?>
	</div>
</body>
</html>