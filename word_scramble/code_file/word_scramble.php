<?php 
$host_name = 'localhost';
$user_name = 'word_scramble';
$pass_word = 'GeekWeb123*';
$database_name = 'word_scramble';
$con = mysqli_connect($host_name, $user_name, $pass_word, $database_name) or die("DB issue");
function tile_points(){
	global $con;
	$sql = "SELECT * FROM tile_points";
	$res = mysqli_query($con, $sql);
	$output = array();
	while($v=mysqli_fetch_assoc($res)) {
		$output[$v['word']] = $v['value'];
	}
	return $output;
}
function tile_frequency(){
	global $con;
	$sql = "SELECT * FROM tile_frequency";
	$res = mysqli_query($con, $sql);
	$output = array();
	while($v=mysqli_fetch_assoc($res)) {
		$output[$v['word']] = $v['value'];
	}
	return $output;
}

function get_words_from_letters($letter_array) {
global $con;


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

$dictionary_word = "SELECT * FROM dictionary_word";
$res_dictionary_word = mysqli_query($con, $dictionary_word);
$dictionary = $dictionary1 = array();
while($v=mysqli_fetch_assoc($res_dictionary_word)) {
	$alpha_string = str_split($v['word']);
	sort($alpha_string);
	$alpha_string = implode($alpha_string);
	$dictionary1[$alpha_string][] = $v['word'];
} 
$a=array();
$combinations = array_unique($combinations);
foreach ($combinations as $letter_string) {
	
	if(array_key_exists($letter_string, $dictionary1)) {
		foreach($dictionary1[$letter_string] as $v) {
			
			array_push($matches, $v);
			array_push($matches, $letter_string);
		}
	}		
}
return array_unique($matches);
	
}
$matches = unique(array_unique($matches));

/* function unique($list){
	$result = [];
	foreach ($list as $key => $value) {
		if (!in_array($value, $result)) array_push($result, $value);
	}
	return $result;
} */
$words=array();
$letters="jignesha";
if(preg_match('/^[a-z]+$/',$letters)) {
	$player_letters = substr($letters, 0, 10);
	$words = get_words_from_letters(str_split($player_letters));
} else {
   echo 'illegal input. stick to letters.';
}
echo "<pre>";
print_r($words);	
?>