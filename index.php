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
	echo " Zvakiu kiekis ". $candlesNum . "<br>";

	if ($candlesNum > 1000 && $candlesNum <= 2000) {
		echo "Zvakiu kaina su 3% nuolaida " . $candlesNum - ($candlesNum * 0.03) . "€";
	}
	if ($candlesNum > 2000) {
		echo "Zvakiu kaina su 4% nuolaida " . $candlesNum - ($candlesNum * 0.04). "€";
	} 
	if ($candlesNum < 1000) {
		echo "Zvakiu kaina " . $candlesNum . "€";
	}


	echo "<br>";
	echo "<hr>";
	echo "9 uzduotis" . "<br>"."<br>";

	// Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100. Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes, kurios yra mažesnės nei 10 arba didesnės nei 90. Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki sveiko skaičiaus.

	$num91 = rand(0,100);
	$num92 = rand(0,100);
	$num93 = rand(0,100);

	echo $num91 . " " . $num92 . " " . $num93 . "<br>";

	$vidurkis = round(($num91 + $num92 + $num93)/3,1);
	echo "Aritmetinis vidurkis = " . $vidurkis;
	echo "<br>";

	$numSum = 0;
	$numCount = 0;
	if ($num91 > 10 && $num91 < 90) {
		$numSum += $num91;
		$numCount++;
	}
	if ($num92 > 10 && $num92 < 90) {
		$numSum += $num92;
		$numCount++;
	}
	if ($num93 > 10 && $num93 < 90) {
		$numSum += $num93;
		$numCount++;
	}
	if ($numCount == 0) {
		echo "Dalyba is 0 negalima";
	} else {
		echo round($numSum / $numCount,1);
	}
	
	echo "<br>";
	echo "<hr>";
	echo "10 uzduotis" . "<br>"."<br>";
	
	// Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes. Valandom, minutėm ir sekundėm sugeneruoti panaudokite funkciją rand(). Sugeneruokite skaičių nuo 0 iki 300. Tai papildomos sekundės. Skaičių pridėkite prie jau sugeneruoto laiko. Atspausdinkite laikrodį prieš ir po sekundžių pridėjimo ir pridedamų sekundžių skaičių.

	$hours = rand(0,23);
	$minutes = rand(0,59);
	$seconds = rand(0,59);

	$papildomosSekundes = rand(0,300);

	echo "Laikas : " . $hours . " : " . $minutes . " : " . $seconds; 
	echo "<br>";

	echo $papildomosSekundes;
	echo "<br>";

	$visoSekundziu = $seconds + $minutes * 60 + $hours * 60 * 60 + $papildomosSekundes;
	echo $visoSekundziu;

	$newHours = ($visoSekundziu / (60*60)) % 24;
	$newMinutes = ($visoSekundziu % 3600) / 60;
	$newSeconds = $visoSekundziu % 60;
	echo "<br>";

	echo "Naujas laikas" . $newHours . " : " . $newMinutes . " : " . $newSeconds;

	echo "<hr>";
	echo "<hr>";
	echo "<hr>";
	echo "STRINGAI" ;
	echo "<br>";
	echo "<br>";
	echo "----------- 1 uzduotis -----------" ;
	echo "<br>";
	echo "<br>";


	// Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis). Atspausdinti trumpesnį stringą.

	$actorName = "Peter";
	$actorSurnam = "Griffin";
	echo $actorName . " " . $actorSurnam;
	echo "<br>";

	if (strlen($actorName) > strlen($actorSurnam)) {
		echo $actorSurnam;
	} else {
		echo $actorName;
	}
	echo "<hr>";
	echo "<br>";
	echo "----------- 2 uzduotis -----------" ;
	echo "<br>";
	echo "<br>";

	// Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms.

	echo strtoupper($actorName) . " " . strtolower($actorSurnam);

	echo "<hr>";
	echo "<br>";
	echo "----------- 3 uzduotis -----------" ;
	echo "<br>";
	echo "<br>";

	// Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.

	$actorInitials = substr($actorName,0,1) . substr($actorSurnam,0,1);
	echo $actorInitials;

	// echo $actorInt = $actorName[0] . " " . $actorSurnam[0];

	echo "<hr>";
	echo "<br>";
	echo "----------- 4 uzduotis -----------" ;
	echo "<br>";
	echo "<br>";

	// Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.

	$actorLast3 = ucfirst(substr($actorName,-3) . substr($actorSurnam,-3));
	echo $actorLast3;

	echo "<hr>";
	echo "<br>";
	echo "----------- 5 uzduotis -----------" ;
	echo "<br>";
	echo "<br>";

	// Sukurti kintamąjį su stringu: “An American in Paris”. Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.  Rezultatą atspausdinti.

	$filmName = "An American in Paris";
	echo $filmName;
	echo "<br>";
	$str = ["a","A"];
	echo str_replace($str,"*",$filmName);


	echo "<hr>";
	echo "<br>";
	echo "----------- 6 uzduotis -----------" ;
	echo "<br>";
	echo "<br>";

	// Sukurti kintamąjį su stringu: “An American in Paris”. Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. Rezultatą atspausdinti.

	echo substr_count($filmName, "A") + substr_count($filmName, "a");

	echo "<hr>";
	echo "<br>";
	echo "----------- 7 uzduotis -----------" ;
	echo "<br>";
	echo "<br>";

	// Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. Rezultatą atspausdinti. Kodą pakartoti su stringais: “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir “It's a Wonderful Life”.

	$Vowels = ["a","e","i","o","u","A","E","I","O","U"]; 
	echo str_replace($Vowels,"",$filmName);
	$film1 = "Breakfast at Tiffany's";
	$film2 = "2001: A Space Odyssey";
	$film3 = "It's a Wonderful Life";
	echo "<br>";
	echo str_replace($Vowels,"",$film1);
	echo "<br>";
	echo str_replace($Vowels,"",$film2);
	echo "<br>";
	echo str_replace($Vowels,"",$film3);

	echo "<hr>";
	echo "<br>";
	echo "----------- 8 uzduotis -----------" ;
	echo "<br>";
	echo "<br>";

	// Stringe, kurį generuoja toks kodas: 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; Surasti ir atspausdinti epizodo numerį.

	$starWars = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
	echo $starWars;
	echo "<br>";
	echo preg_replace("/[^0-9]/", '', $starWars);

	echo "<hr>";
	echo "<br>";
	echo "----------- 9 uzduotis -----------" ;
	echo "<br>";
	echo "<br>";

	// Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice in the Hood” yra žodžių trumpesnių arba lygių nei 5 raidės. Pakartokite kodą su stringu “Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale".

	$longSmth = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
	$count5 = 0;

	$strArr =explode(" ",$longSmth);
	 print_r( $strArr);

	 for ($i=0; $i < count($strArr) ; $i++) { 
		
		if (strlen($strArr[$i]) <= 5) {
			$count5++;
		}
	 }
	 echo $count5;
	
	echo "<hr>";
	echo "<br>";
	echo "----------- 10 uzduotis -----------" ;
	echo "<br>";
	echo "<br>";

	// Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių. Stringo ilgis 3 simboliai.

	$n=3;
	function getName($n) {
		$characters = 'abcdefghijklmnopqrstuvwxyz';
		$randomString = '';
	 
		for ($i = 0; $i < $n; $i++) {
			$index = rand(0, strlen($characters) - 1);
			$randomString .= $characters[$index];
		}
	 
		return $randomString;
	}
	 
	echo getName($n);

	?>
</body>
</html>