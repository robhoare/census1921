<?php
// combine the following districts
$files = array(
'Toronto East' => 'toronto-east.5',
'Toronto West' => 'toronto-west.5',
'Toronto North' => 'toronto-north.5',
'Toronto South' => 'toronto-south.5',
'Toronto Centre' => 'toronto-centre.5',
'York East' => 'york-east.5',
'York West' => 'york-west.5',
'York South' => 'york-south.5'
);

foreach ($files as $r => $f) {
	$lines = file($f);
	foreach ($lines as $line) {
		$line = rtrim($line);
		$p = strpos($line,'Polling '); 
		if ($p > 0) {  // remove polling division
			$line = substr($line,0,$p);
		};
    echo "$line : $r\n";    
	};
};
?>
