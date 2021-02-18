<?php
ob_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('memory_limit', '128M');
$host_name = 'localhost';
$user_name = 'word_scramble';
$pass_word = 'GeekWeb123*';
$database_name = 'word_scramble';
$con = mysqli_connect($host_name, $user_name, $pass_word, $database_name) or die("DB issue");
$create = "CREATE TABLE dictionary_word
(
id int PRIMARY KEY AUTO_INCREMENT,
word varchar(50)
)";
$create2 = "CREATE TABLE cron
(
id int PRIMARY KEY AUTO_INCREMENT,
count varchar(50)
)";
$tile_points = "CREATE TABLE tile_points
(
id int PRIMARY KEY AUTO_INCREMENT,
word varchar(50),
value varchar(50)

)";
$tile_frequency = "CREATE TABLE tile_frequency
(
id int PRIMARY KEY AUTO_INCREMENT,
word varchar(50),
value varchar(50)
)";
$sql = "SELECT * FROM cron WHERE id = '1'";
$res = mysqli_query($con, $sql);
$row1 = mysqli_fetch_assoc($res);
echo $counter = $row1['count'];
$dictionary = file('enable.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
echo count($dictionary);
$limit = 1000;
$pages = count($dictionary) / $limit;
if ($counter == 0) {
    $start = 0;
} else {
    $start = $limit * $counter;
}
echo "<br>";
$dictionary = array_slice($dictionary, $start, $limit);
echo "<pre>";
foreach ($dictionary as $v) {
    $ins = "INSERT INTO dictionary_word (word)
VALUES ('" . $v . "')";
    "<br>";
    $insres = mysqli_query($con, $ins);
    if($insres){
		echo $v."<br>";
	}
}
echo $counter;
echo "<br>";
echo round($pages);
if ($counter < round($pages)) {
    echo "if";
    echo $sql = "UPDATE cron SET count=" . ($counter + 1) . " WHERE id = '1'";
    $res = mysqli_query($con, $sql);
    header("Refresh:3");
    
} else {
    echo "all done";
}
mysqli_close($con);
?>
