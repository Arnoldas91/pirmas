<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

	echo "Pirma uzduotis" . "<br>"."<br>";

	$name = "Jonas";
	$surname = "Jonaitis";
	$birthDate =1991;
	$nowDate= 2023;

	echo "As esu" . " " .$name . " ".$surname . ". Man yra " . $nowDate - $birthDate . " metai.";

	echo "<hr>";

	echo "2 uzduotis" . "<br>"."<br>";

	$number1 = rand(0,4);
	$number2 = rand(0,4);
	echo $number1 . " " . $number2 ;
	echo "<br>";

	if ($number1 != 0 && $number2 != 0) {
		# code...
	
	if ($number1 > $number2) {
		echo round($number1/$number2, 2); 
		
	} else {
		echo round($number2/$number1, 2);
	}
	} else {
		echo "Dalyba is 0 negalima";
	}
	echo "<hr>";


	echo "3 uzduotis" . "<br>"."<br>";

	$num31 = rand(0,25);
	$num32 = rand(0,25);
	$num33 = rand(0,25);

	echo $num31." ".$num32." ". $num33;
	echo "<br>";

	if (($num32 < $num31 && $num31 < $num33) || ($num32 > $num31 && $num31 > $num33)){
		echo $num31;
	}
	if (($num31 < $num32 && $num32 < $num33) || ($num31 > $num32 && $num32 > $num33)){
		echo $num32;
	}
	if (($num32 < $num33 && $num33 < $num31) || ($num32 > $num33 && $num33 > $num31)){
		echo $num33;
	}
	if ($num31 == $num32 || $num32 == $num33) {
		echo "atsakymas negalimas";
	}

	echo "<hr>";
	echo "4 uzduotis" . "<br>"."<br>";

	// Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite ​rand()​ funkcija nuo 1 iki 10). Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų. 

	$a = rand(1,10);
	$b = rand(1,10);
	$c = rand(1,10);
	echo $a." ".$b." ".$c."<br>";

		if ( $a + $b > $c && $a + $c > $b && $b + $c > $a) {
			echo "Trikampis galimas";
		} else {
			echo "Trikampis negalimas";
		}
		echo "<br>";
		echo "<hr>";
		echo "5 uzduotis" . "<br>"."<br>";

// 		// Sukurkite keturis kintamuosius ir ​rand()​ funkcija sugeneruokite jiems 
// reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui masyvo nenaudoti).

	$num51 = rand(0,2);
	$num52 = rand(0,2);
	$num53 = rand(0,2);
	$num54 = rand(0,2);

	echo $num51 . " " . $num52 . " " . $num53 . " " . $num54;

	$zeros = 0;
	if ($num51 == 0) {
		$zeros++;
	}
	if ($num52 == 0) {
		$zeros++;
	}
	if ($num53 == 0) {
		$zeros++;
	}
	if ($num54 == 0) {
		$zeros++;
	}
	echo "<br> Skaiciu 0 yra - " . $zeros . " vnt";

	$ones = 0;
	if ($num51 == 1) {
		$ones++;
	}
	if ($num52 == 1) {
		$ones++;
	}
	if ($num53 == 1) {
		$ones++;
	}
	if ($num54 == 1) {
		$ones++;
	}
	echo "<br> Skaiciu 1 yra - " . $ones. " vnt";

	$twos = 0;
	if ($num51 == 2) {
		$twos++;
	}
	if ($num52 == 2) {
		$twos++;
	}
	if ($num53 == 2) {
		$twos++;
	}
	if ($num54 == 2) {
		$twos++;
	}
	echo "<br> Skaiciu 2 yra - " . $twos. " vnt";
	

	echo "<br>";
	echo "<hr>";
	echo "6 uzduotis" ;
	// Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį atspausdinkite atitinkame h tage. Pvz skaičius 3- rezultatas: <h3>3</h3>

	$num61 = rand(1,6);

	echo "<h" . $num61 . ">" . $num61 . "</h" . $num61 . ">";


	echo "<br>";
		echo "<hr>";
		echo "7 uzduotis" . "<br>"."<br>";

		// Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10. Skaičiai mažesni už 0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni. 

	$num71 = rand(-10,10);
	$num72 = rand(-10,10);
	$num73 = rand(-10,10);


	if ($num71 < 0) {
		echo "<font color=green>" . $num71 . "</font> ";
	} if ($num71 > 0) {
		echo "<font color=blue>" . $num71 . "</font> ";
	} if ($num71 == 0) {
		echo "<font color=red>" . $num71 . "</font> ";
	}
	if ($num72 < 0) {
		echo "<font color=green>" . $num72 . "</font> ";
	} if ($num72 > 0) {
		echo "<font color=blue>" . $num72 . "</font> ";
	} if ($num72 == 0) {
		echo "<font color=red>" . $num72 . "</font> ";
	}
	if ($num73 < 0) {
		echo "<font color=green>" . $num73 . "</font> ";
	} if ($num73 > 0) {
		echo "<font color=blue>" . $num73 . "</font> ";
	} if ($num73 == 0) {
		echo "<font color=red>" . $num73 . "</font> ";
	}

	echo "<br>";
	echo "<hr>";
	echo "8 uzduotis" . "<br>"."<br>";
	// Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida. Parašykite programą, kuri skaičiuos žvakių kainą ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. Žvakių kiekį generuokite ​rand()​ funkcija nuo 5 iki 3000.

	$candlesNum = rand(5,3000);
	echo $candlesNum;

	if (2000 => $candlesNum > 1000) {
		echo $candlesNum *
	}



	?>
</body>
</html>