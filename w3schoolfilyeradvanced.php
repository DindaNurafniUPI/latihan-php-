<!DOCTYPE html>
<html>
<body>

<?php
/* variable to check */
$int = 122;

/* min value */
$min = 1;
/* max value */
$max = 200;

if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
  echo("Variable value is not within the legal range");
} else {
  echo("Variable value is within the legal range");
}
?>

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<?php
// Variable to check
$ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

// Validate ip as IPv6
if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
  echo("$ip is a valid IPv6 address");
} else {
  echo("$ip is not a valid IPv6 address");
}
?>

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<?php
// Variable to check
$url = "https://www.w3schools.com";

// Validate url
if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
  echo("$url is a valid URL with a query string");
} else {
  echo("$url is not a valid URL with a query string");
}
?>

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<?php
// Variable to check
$str = "<h1>Hello WorldÆØÅ!</h1>";

// Remove HTML tags and all characters with ASCII value > 127
$newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
echo $newstr;
?>

</body>
</html>
