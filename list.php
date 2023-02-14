<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="/56562.png">
<style>
table, th, td {
  border: 1px solid white;
  color: white;
}
body {
  background-color: rgb(21, 32, 43);
  color: white;
}
a {
  color: #1D9BF0;
}

@media only screen and (max-width: 600px) {
  table, thead, tbody, th, td, tr {
    display: block;
  }
  thead tr {
    position: absolute;
    top: -9999px;
    left: -9999px;
  }
  tr {
    border: 1px solid white;
  }
  td {
    border: none;
    border-bottom: 1px solid white;
    position: relative;
    padding-left: 50%;
  }
  td:before {
    position: absolute;
    top: 6px;
    left: 6px;
    width: 45%;
    padding-right: 10px;
    white-space: nowrap;
  }
  td:nth-of-type(1):before {
    content: "画像";
  }
  td:nth-of-type(2):before {
    content: "ファイル";
  }
  td:nth-of-type(3):before {
    content: "サイズ";
  }
  td:nth-of-type(4):before {
    content: "アクション";
  }
}
</style>
  <title>ファイルリスト</title>

</head>
    <body>
  <p>ファイルリスト</p>
  <table>
    <tr>
      <th>画像</th>
      <th>ファイル</th>
      <th>サイズ</th>
      <th></th>
    </tr>
    <?php
    const DOC_ROOT='./receive/';
    clearstatcache();//キャッシュクリア
    //ディレクトリの取得(ディレクトリのオープンに失敗したら終了(@はエラーを出力しないようにする))
    $dir=@opendir(DOC_ROOT) or die('フォルダが開けませんでした。');
    //ディレクトリの走査
    while($file=readdir($dir)){
      //ファイルか？（.や..やディレクトリが除外される）
      if(is_file(DOC_ROOT.$file)){
        $path=DOC_ROOT.$file;
        ?>
        <tr>
          <td><img src="<?=$path?>" width="100"></td>
          <td><a href="download.php?file=<?=$file?>"><?=$file?></a></td></td>
          <td><?=round(filesize($path)/1024)?>kb</td>
          <td><a href="unlink.php?file=<?=$file?>" onclick="return confirm('削除してよろしいですか？')">削除</a></td></td>
        </tr>
        <?php
      }
    }
    closedir($dir);
    ?>
  </table>
  <a href="/pchat.php">掲示板へ戻る</a>
</body>
</html>