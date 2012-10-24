<?php
/**
 * Copyright (c) 2008-2012 Ryan Yonzon, <rawswift@gmail.com>
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 */
 
// Enable full-blown error reporting. http://twitter.com/rasmus/status/7448448829
error_reporting(-1);

/* Debug: measure execution time: start time */
$time_start = microtime(true);

$link = mysql_connect('localhost', 'your_username', 'your_password'); // connect to mysql
mysql_select_db('your_database_name', $link); // select database

$date_created = date("Y-m-d H:i:s", time());

// reference to job(s) model/records
$access = array();
$access[1] = "Administrator";
$access[2] = "Normal";
$access[3] = "Guest";

for ($i = 0; $i <= 1000; $i++) { // generate 1,000 random data

	$rand_access = rand(1, 3);
	
	// insert data
	mysql_query('INSERT INTO employee (
					first_name,
					last_name,
					phone,
					job_id,
					created_on,
					updated_on,
					access
				) VALUES (
					"' . genRandomString(8) . '",
					"' . genRandomString(10) . '",
					"' . rand(1111111, 9999999) . '",
					' . rand(1, 5) . ',
					"' . $date_created . '",
					"' . $date_created . '",
					"' . $access[$rand_access] . '"
				)');
}

mysql_close($link); // close mysql connection

echo "Done!\n"; // fin

/* Debug: measure execution time: end time then print */
$time_end = microtime(true);
$time = $time_end - $time_start;
echo  "Query time: " . round($time,5) . " s\n";

/*
 * from: http://www.lost-in-code.com/programming/php-code/php-random-string-with-numbers-and-letters/
 */
function genRandomString($length = 10) {
    $string = "x";
    $characters = "0123456789abcdefghijklmnopqrstuvwxyz";
    for ($p = 0; $p < $length; $p++) {
        $string .= $characters[mt_rand(0, strlen($characters)-1)];
    }
    return $string;
}
	
// -EOF-