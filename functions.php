<?php
function remove(int $number) : array {
	$tasks = readFromFile();
	unset($tasks[$number - 1]);
	$tasks = array_values($tasks); //Uporządkowanie indeksów po sunięciu zadania
	return $tasks;
}
function moveUp(int $number) : array {
	$tasks = readFromFile();
	if($number > 1 && $number <= count($tasks)) { //sprawdzenie czy numer zadania do przeniesienia zawiera się w istniejących i czy nie próbujemy przenieść wyżej pierwszego zadania
		$slice = array_slice($tasks, ($number - 2), 2); //pobranie wycinka tablicy $tasks z zadaniami do zamiany
		$tasks[($number - 2)] = $slice[1]; //przypisanie zadania na nową pozycję
		$tasks[($number - 1)] = $slice[0]; //jw
	} else {
		echo 'Wrong task number'. PHP_EOL;
	}
	return $tasks;
}
function moveDown(int $number) : array {
	$tasks = readFromFile();
	if($number > 0 && $number < count($tasks)) { //sprawdzenie czy numer zadania do przeniesienia zawiera się w istniejących i czy nie próbujemy przenieść niżej ostatniego zadania
		$slice = array_slice($tasks, ($number - 1), 2); //pobranie wycinka tablicy $tasks z zadaniami do zamiany
		$tasks[$number] = $slice[0]; //przypisanie zadania na nową pozycję
		$tasks[$number - 1] = $slice[1]; //jw
	} else {
		echo 'Wrong task number'. PHP_EOL;
	}
	return $tasks;
}
