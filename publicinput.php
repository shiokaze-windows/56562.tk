<?php
	$hour = date('H');
	$date = date('d');
	$hour += 0;
	if ($hour > 23) {
		$date += 1;
		$hour -= 24;
	}
	if (!strlen($_POST['name'])) {
        $_POST['name'] = "名無し";
    }	
	setcookie('username', $_POST['name'], time() + 2592000);
	$todaydate = date('n') . "/" . $date . "/" . $hour . ":" . date('i') . ":" . date('s');
    function inputter($putting){
		$filename = fopen('./date/publiclog.txt', "a");
		fputs($filename, $putting);
		fclose($filename);
    }
	if (!strlen($_POST['maintext'])) {
		header('Location: pchat.php');
	}else {
		$inter = $_POST['maintext'];
		if (preg_match("/(https?)(:\/\/[-_.!~*\'()a-zA-Z0-9;\/?:\@&=+\$,%#]+)/", $inter)) {
			$inter = preg_replace("/(https?)(:\/\/[-_.!~*\'()a-zA-Z0-9;\/?:\@&=+\$,%#]+)/", "<a style='color: yellow' href='$1$2'>$1$2</a>", $inter);
		}
		$inter = "<p>".$_POST['name'] . " : " . $inter ."　　　". $todaydate. "</p>" ."\n";
	inputter($inter);
    	header('Location: pchat.php');
	}
    
?>


