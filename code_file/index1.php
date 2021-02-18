
<?php
	ini_set('memory_limit', '256M');
	$num_player_tiles = 9;
	$tile_points = array(
		'a'=>1,
		'b'=>3,
		'c'=>3,
		'd'=>2,
		'e'=>1,
		'f'=>4,
		'g'=>2,
		'h'=>4,
		'i'=>1,
		'j'=>8,
		'k'=>5,
		'l'=>1,
		'm'=>3,
		'n'=>1,
		'o'=>1,
		'p'=>3,
		'q'=>10,
		'r'=>1,
		's'=>1,
		't'=>1,
		'u'=>1,
		'v'=>4,
		'w'=>4,
		'x'=>10,
		'y'=>4,
		'z'=>8,
		'-'=>0,
	);
	$tile_freq = array(
		'a'=>9,
		'b'=>2,
		'c'=>2,
		'd'=>4,
		'e'=>12,
		'f'=>2,
		'g'=>3,
		'h'=>2,
		'i'=>9,
		'j'=>1,
		'k'=>1,
		'l'=>4,
		'm'=>2,
		'n'=>6,
		'o'=>8,
		'p'=>2,
		'q'=>1,
		'r'=>6,
		's'=>4,
		't'=>6,
		'u'=>4,
		'v'=>2,
		'w'=>2,
		'x'=>1,
		'y'=>2,
		'z'=>1,
	//	'-'=>2,
	);

	$total_tiles = array_sum($tile_freq);
	function get_player_tiles() {
		global $num_player_tiles;
		global $tile_freq;
		$tiles = array();
		foreach($tile_freq as $k=>$v) {
			while ($v>0) {
				$tiles[] = $k;
				$v--;
			}
		}
		
		$selected_tile_keys = array();
		$i=0;
		while ($i<$num_player_tiles){
			$random_tile_key = rand(0, count($tiles)-1);
			if(!in_array($random_tile_key, $selected_tile_keys)) {
				$selected_tile_keys[] = $random_tile_key;
				$i++;
			}
		}
		
		$output = array();
		foreach ($selected_tile_keys as $v) {
			$output[] = $tiles[$v];
		}
		return $output;
	}

	function get_words_from_letters($letter_array) {
		require_once('alpha_dict.php');
		
		$combinations = array();
		$matches = array();

		sort($letter_array);
		$num_letters = count($letter_array);
		$total = pow(2, $num_letters);

		$i=0;
		while($i<$total) {
			$j=0;
			$string = '';
			while ($j<$total) {
				if (pow(2, $j) & $i)
					$string .= $letter_array[$j];
				$j++;
			}
			if ($string != ''){
				array_push($combinations, $string);
			}
			$i++;
		}
		
		$combinations = array_unique($combinations);
		foreach ($combinations as $letter_string) {
			if(array_key_exists($letter_string, $dictionary)) {
				foreach($dictionary[$letter_string] as $v) {
					array_push($matches, $v);
					array_push($matches, $letter_string);
				}
			}		
		}
		function unique($list){
		    $result = [];
		    foreach ($list as $key => $value) {
		        if (!in_array($value, $result)) array_push($result, $value);
		    }
		    return $result;
		}
		$matches = unique(array_unique($matches));
		return $matches;
	}

	
	if(isset($_POST['get_words'])) {
		$letters = strtolower($_POST['letters']);
		if(preg_match('/^[a-z]+$/',$letters)) {
			$player_letters = substr($letters, 0, 10);
			print_r($player_letters);
			$words = get_words_from_letters(str_split($player_letters));
		} else {
		   echo 'illegal input. stick to letters.';
		}
		
	}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
		<h2>Scrabble Letter Generator and Word Finder</h2>
		<form method="post">
			<label for="letters">Letters:</label>
			<input type="text" id="letters" name="letters" value="<?php echo @$player_letters;?>"></input>
			<input type="submit" value="Get Words!" name="get_words" />
		</form>

<?php
if (is_array($words)) {
	echo '<table><tr><td style="width:75px;">Points</td><td>Leter</td><td>Word</td><td>Points</td></tr>';	usort($words, function($a, $b) {		return strlen($a) - strlen($b) ?: strcmp($a, $b);	});
	foreach($words as $k=>$v){			$points = 0;			$letters_split = str_split($v);			foreach ($letters_split as $l) {				$points += $tile_points[$l];			}
		if(strlen($v) == 5){
			echo '<tr><td>'.$k.'</td><td>5</td><td>'.$v.'</td><td>'.$points.'</td></tr>';
		}elseif(strlen($v) == 4){
			echo '<tr><td>'.$k.'</td><td>4</td><td>'.$v.'</td><td>'.$points.'</td></tr>';		}elseif(strlen($v) == 6){			echo '<tr><td>'.$k.'</td><td>6</td><td>'.$v.'</td><td>'.$points.'</td></tr>';		}elseif(strlen($v) == 7){			echo '<tr><td>'.$k.'</td><td>7</td><td>'.$v.'</td><td>'.$points.'</td></tr>';		}elseif(strlen($v) == 8){			echo '<tr><td>'.$k.'</td><td>8</td><td>'.$v.'</td><td>'.$points.'</td></tr>';		}elseif(strlen($v) == 9){			echo '<tr><td>'.$k.'</td><td>9</td><td>'.$v.'</td><td>'.$points.'</td></tr>';
		}elseif(strlen($v) == 3){
			echo '<tr><td>'.$k.'</td><td>3</td><td>'.$v.'</td><td>'.$points.'</td></tr>';
		}elseif(strlen($v) == 2){
			echo '<tr><td>'.$k.'</td><td>2</td><td>'.$v.'</td><td>'.$points.'</td></tr>';
		}else{
			echo '<tr><td>sdsd'.$k.'</td><td>0</td><td>'.$v.'</td><td>'.$points.'</td></tr>';
		}
	}
	echo '</table>';
}

?>
    </body>
</html>