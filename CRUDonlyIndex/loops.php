<?php
$front_end = ["HTML", "CSS", "JS", "TS", "Angular"];
$back_end = array("MySql", "PHP", "AJAX", "API", "Symfony");
$students_age = array(
    "Peter" => "35",
    "Ben" => "37",
    "Joe" => "43"
);

$students_assoc = array(
    "Peter" => array("Age" => "35", "Hobby" => "Swimming"),
    "Ben" => "37",
    "Joe" => "43"
);

// for ($i = 0; $i < count($front_end); $i++) {
//     echo "The course is $front_end[$i] <br>";
// }
// $a = 0;
// while ($a < count($back_end)) {
//     echo "The backend course $back_end[$a] <br>";
//     $a++;
// }
// $z = 0;
// do {
//     echo "The backend course $back_end[$z] <br>";
//     $z++;
// } while ($z == 10);
foreach ($students_assoc as $student => $age) {
    echo "$student <br>";
    if (is_array($age)) {
        foreach ($age as $key => $value) {
            echo "$key : $value <br>";
        }
    } else {
        echo "$age years old<br>";
    }
}