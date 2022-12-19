<?php 

// setcookie('firstname', 'deepak', time() + (24  * 60 * 60) , '/', '/', true, true);

setcookie('firstname', 'deepak');

echo isset($_COOKIE['firstname']) ?  $_COOKIE['firstname'] : '';


// foreach($_COOKIE as $key => $val) {
//     echo "<hr>";
//     echo "$key $val";
// }