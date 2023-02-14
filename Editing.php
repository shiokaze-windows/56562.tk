<?php
$file = "date\publiclog.txt";
$password = "56562.a@";

if (isset($_POST["submit"])) {
  if ($_POST["password"] == $password) {
    if (file_put_contents($file, $_POST["content"])) {
      $message = "ファイルが正常に更新されました。";
    } else {
      $message = "ファイルの更新に失敗しました。";
    }
  } else {
    $message = "パスワードが正しくありません。";
  }
}

$content = file_get_contents($file);
?>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="icon" type="image/png" href="/56562.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
  body {
    font-family: Arial, sans-serif;
    color: white;
    text-align: center;
  }

  form {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin: 50px auto;
    text-align: left;
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.2);
    border-radius: 10px;
  }

  input[type="password"],
  input[type="submit"] {
    padding: 10px 20px;
    margin: 20px 0;
    font-size: 16px;
    border-radius: 5px;
    border: none;
    background-color: rgba(255, 255, 255, 0.1);
    color: white;
  }

  input[type="submit"] {
    background-color: #1D9BF0;
    cursor: pointer;
  }

  textarea {
    width: 100%;
    padding: 100px;
    margin: 20px 0;
    font-size: 16px;
    border-radius: 5px;
    border: none;
    background-color: rgba(255, 255, 255, 0.1);
    color: white;
    resize: none;
  }

  p {
    color: #1D9BF0;
    margin-top: 20px;
  }
  
  @media (max-width: 500px) {
    form {
      width: 80%;
      padding: 10px;
    }
  }
</style>
  <title>チャット編集</title>
</head>
<body link="#1D9BF0" alink="#1D9BF0" vlink="#1D9BF0" style="background-color: rgb(21, 32, 43);">
  <h1>チャット編集</h1>
  <form action="" method="post">
    <textarea name="content"><?php echo $content; ?></textarea><br>
    パスワード  <input type="password" name="password"><br>
    <input type="submit" name="submit" value="Save">
  </form>
  <p><?php echo $message; ?></p>
      <br>
<a href="./pchat.php" style="text-decoration:none">チャットに戻る</a>
</body>
</html>