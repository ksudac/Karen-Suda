<?php
 
// getState.php
// Gets the form value from STATE CODE, looks uP the state name, capital, and population
//   for that state code,
// and prints it for the form


$State = array
("AL" =>"Alabama,Montgomery,4779736",
"AK" =>	"Alaska,Juneau,710231",
"AZ" =>	"Arizona,Phoenix,6392017",
"AR" =>	"Arkansas,Little Rock,2915918",
"CA" =>	"California,Sacramento,37253956",
"CO" =>	"Colorado,Denver,5029196",
"CT" =>	"Connecticut,Hartford,3574097",
"DE" =>	"Delaware,Dover,900877",
"FL" =>	"Florida,Tallahassee,18801310",
"GA" =>	"Georgia,Atlanta,9687653",
"HI" =>	"Hawaii,Honolulu,1360301",
"ID" =>	"Idaho,Boise,1567582",
"IL" =>	"Illinois,Springfield,12830632",
"IN" =>	"Indiana,Indianapolis,6483802",
"IA" =>	"Iowa,Des Moines,3046355",
"KS" =>	"Kansas,Topeka,2853118",
"KY" =>	"Kentucky,Frankfort,4339367",
"LA" =>	"Louisiana,Baton Rouge,4533372",
"ME" =>	"Maine,Augusta,1328361",
"MD" =>	"Maryland,Annapolis,5773552",
"MA" =>	"Massachusetts,Boston,6547629",
"MI" =>	"Michigan,Lansing,9883640",
"MN" =>	"Minnesota,Saint Paul,5303925",
"MS" =>	"Mississippi,Jackson,2967297",
"MO" =>	"Missouri,Jefferson City,5988927",
"MT" =>	"Montana,Helena,989415",
"NE" =>	"Nebraska,Lincoln,1826341",
"NV" =>	"Nevada,Carson City,2700551",
"NH" =>	"New Hampshire,Concord,1316470",
"NJ" =>	"New Jersey,Trenton,8791894",
"NM" =>	"New Mexico,Santa Fe,2059179",
"NY" =>	"New York,Albany,19378102",
"NC" =>	"North Carolina,Raleigh,9535483",
"ND" =>	"North Dakota,Bismarck,672591",
"OH" =>	"Ohio,Columbus,11536504",
"OK" =>	"Oklahoma,Oklahoma City,3751351",
"OR" =>	"Oregon,Salem,3831074",
"PA" =>	"Pennsylvania,Harrisburg,12702379",
"RI" =>	"Rhode Island,Providence,1052567",
"SC" =>	"South Carolina,Columbia,4625364",
"SD" =>	"South Dakota,Pierre,814180",
"TN" =>	"Tennessee,Nashville,6346105",
"TX" =>	"Texas,Austin,25145561",
"UT" =>	"Utah,Salt Lake City,2763885",
"VT" =>	"Vermont,Montpelier,625741",
"VA" =>	"Virginia,Richmond,8001024",
"WA" =>	"Washington,Olympia,6724540",
"WV" =>	"West Virginia,Charleston,1852994",
"WI" =>	"Wisconsin,Madison,5686986",
"WY" =>	"Wyoming,Cheyenne,563626",
);


// set MIMe type to text/plain
// so that the returned value is assigned to responseText in the Ajax script

header("Content-Type: text/plain");

$stcode = $_GET["stcode"];
if (array_key_exists($stcode, $State))
   print $State[$stcode];
else  
   print "state code error, state code error, state code error";

?>