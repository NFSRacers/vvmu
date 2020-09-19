<?php
echo "Bravo be!<br>";
$username = "NFSRacers";
echo $username."<br>";
$age = 21;
echo $age."<br>";
$varBool = true;
echo $varBool."<br>";
$array = ["Ivan", 14, "16", true];
echo $array[0]."<br>";
echo $array[1]."<br>";
$associate = ["username" => "Nasko", "grad" => "Gotham"];
echo $associate["grad"]."<br>";
for($i = 0; $i < 2; $i++) {
    echo $array[$i]."<br>";
}
foreach($associate as $assocfor) {
    echo $assocfor."<br>";
}
?>