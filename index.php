<?php

$connection = mysqli_connect('127.0.0.1','root','root','mysait');

if($connection == false)
{
	echo 'Не удалось подключится к базе данных!<br>';
	echo mysqli_connect_error();
	exit();
}

//echo 'Подключение прошло успешно!<br>';

$result = mysqli_query($connection, "SELECT * FROM `articles_categories`");
//$r1 = mysqli_fetch_assoc($result);
//$r2 = mysqli_fetch_assoc($result);
//print_r($r2);

?>

<ul>
	<?php
		while($cat = mysqli_fetch_assoc($result))
		{
			echo '<li>' . $cat[title] . '</li>';
		}
	?>
</ul>

<?php
// while($record = mysqli_fetch_assoc($result))
// {
	// print_r($record);
	// echo '<hr>';
// }

mysqli_close($connection);
?>

<?php
//$massiv = array(1,2,3,4,5);
//echo $massiv[4];

//<br>

// $f = array(
	// 'name'=>'Abraham',
	// 'surname'=>'Tugalov',
	// 'age'=>20,
	// 'byear'=>1996,
	// 'education'=>array('school','college')
// );
// echo $f['education'][0];

// $j = true;
// if($j==true){
	// echo 'Верно';
// }
// else if ($j==false){
	// echo 'Не верно';
// }

// $name = "Ilya";
// $surname = "Rogozin";
// echo $name . ' ' . $surname;

// $a = 100;
// $b = 15;
// echo 'Ответ: ' . ($a+$b);

// for($i=1;$i<=10;$i++)
// {
	// echo "Сообщение №: $i<br>";
// }

// $i1 = 0;
// while ($i1 <= 10)
// {
	// echo "Сообщение №: $i1<br>";
	// $i1++;
// }

// $names = array(
	// 'j1',
	// 't1',
	// 's1',
	// 'g1',
// );
// foreach($names as $value)
// {
	// echo $value . '<br/>';
// }

// function f1($a, $b)
// {
	// if($a>$b)
	// {
		// return $a;
	// }
	// else
	// {
		// return $b;
	// }
// }
// $d = f1(5, 9);
// echo $d;

// echo abs(-3000) . '<br/>';
// echo round(50.5) . '<br/>';
// echo ceil(50.15) . '<br/>';
// echo floor(50.95) . '<br/>';
// echo rand(0, 100) . '<br/>';
// echo min(10, 52, 24, 35, 15, 78) . '<br/>';
// echo max(10, 52, 24, 35, 15, 78) . '<br/>';