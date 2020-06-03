function remove(int $number) : array {
	$tasks = readFromFile();
	unset($tasks[$number - 1]);
	$tasks = array_values($tasks);
	return $tasks;
}
function moveUp(int $number) : array {
	$tasks = readFromFile();
	if($number > 1 && $number <= count($tasks)) {
		$slice = array_slice($tasks, ($number - 2), 2);
		$tasks[($number - 2)] = $slice[1];
		$tasks[($number - 1)] = $slice[0];
	} else {
		echo 'Wrong task number'. PHP_EOL;
	}
	return $tasks;
}
function moveDown(int $number) : array {
	$tasks = readFromFile();
	if($number > 0 && $number < count($tasks)) {
		$slice = array_slice($tasks, ($number - 1), 2);
		$tasks[$number] = $slice[0];
		$tasks[$number - 1] = $slice[1];
	} else {
		echo 'Wrong task number'. PHP_EOL;
	}
	return $tasks;
}
