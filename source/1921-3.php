<?php
$lines = file("php://stdin");
foreach ($lines as $line) {
	$line = rtrim($line);
	if (strpos($line,'and ') === 0) {
	} else {
		if (strpos($line,'- Toronto (City') > 0) {
			$dist = $line;
		} else {
			echo "$line: $dist\n";
		};
	};
};
?>
