/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

<?php
  
  $food = [
        "pizza",
        "pineapple",
        "peanut butter",
        "guac"
      ];
    
?>

/*
Print every array element in a new line.
*/

<?php
  
  echo "<pre>";
        print_r($food);
        "</pre>";
    
?>

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
*/

<?php 

echo "
<ul>
  <li>Pizza</li>
  <li>Pineapple</li>
  <li>Peanut Butter</li>
  <li>Guac</li>
</ul>";

?>

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/

<?php 

$food_assoc = [
    "main" => "pizza",
    "snack" => "pineapple",
    "Peanut Butter" => "topping",
    "guac" => "snack"
    ];

?>

/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/

<?php 

foreach ($food_assoc as $key => $value) {
   echo "{$value} | {$key} <br>";
}

?>

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/

<?php 

$food_assoc = [
    "pizza" => [
        "type" => "main course",
        "origin" => "Italy"
        ],
    "pineapple" => [
        "type" => "snack",
        "origin" => "Hawaii"
        ],
    "Peanut Butter" => [
        "type" => "topping",
        "origin" => "USA"
        ],
    "guac" => [
        "type" => "snack",
        "origin" => "Mexico"
        ]
    ];
    
    echo "<ul>";
foreach ($food_assoc as $key => $value) {
    echo "{$key} ";
    foreach($food_assoc[$key] as $key1 => $value1) {
        echo " | $value1";
    }
            echo "<br>";
}
echo "</ul>";

?>

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/

<?php 

echo "<table>";

$i=0;
foreach ($food_assoc as $key => $value) {
    if($i==0){
        echo "<th> food </th>";
    foreach($value as $header => $val){
        echo "<th>$header</th>";
    }
}
echo "<tr>";
    echo "<td> $key </th>";
foreach ($food_assoc[$key] as $key1 => $value1){
    echo "<td> $value1 </td>";
}
echo "</tr>";
$i++;
}
echo "</table>";

?>
