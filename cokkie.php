<?php
$cookie_value = "w3resource tutorials";
setcookie("w3resource", $cookie_value, time()+3600, "/home/your_usename/", "example.com", 1, 1);
if (isset($_COOKIE['cookie']))
echo $_COOKIE["w3resource"];



?>

<?php
$cookie_value = "w3resource tutorials";
setcookie("w3resource", $cookie_value, time()+3600, "/home/your_usename/", "example.com", 1, 1);
echo 'Hi ' . htmlspecialchars($_COOKIE["w3resource"]);
?>

<?php
print_r($_COOKIE);
?>

<?php
$cookie_value = "w3resource tutorials";
setcookie("w3resource", $cookie_value, time()-3600, "/home/your_usename/", "example.com", 1, 1);
?>