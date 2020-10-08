<!DOCTYPE html>
<html>
<body>
    <?php
    echo "Hello World";
    echo "<br/> <br/>";

// BAGIAN A
// An array stores multiple values in one single variable
    echo "BAGIAN A";
    echo " <br/>-------------------------------------------<br/>";
    $cars = array("Volvo", "BMW", " Toyota");
    var_dump($cars); 
    echo "<br/>";
    Print_r($cars);
    echo "<br/> <br/>";

// Stores data and information on how to process data to be an obj
    class Car{
        function Car() {
            $this->model = "VW";
        }
    }
    // create an object
    $herbie = new Car();
    // Show obj properties
    echo $herbie->model;
    echo "<br/> <br/>";

// BAGIAN B
// if else 
    echo "BAGIAN B";
    echo " <br/>-------------------------------------------<br/>";
    $t = date("H");

    if ($t < "10"){
        echo "Have a good morning!";
    } elseif ($t < "20"){
        echo "Have a good day!";
    } else{
        echo "Have a good night!";
    }
    echo "<br/> <br/>";

// switch case
    $favcolor = "purple";

    switch ($favcolor){
        case "purple":
            echo "Your favorite color is purple!";
        break;
        case "blue":
            echo "Your favorite color is blue!";
        break;
        case "green":
            echo "Your favorite color is green!";
        break;
        default :
        echo "Your favorite color is neither red, blue, nor green";
    }
    echo "<br/> <br/>";

//BAGIAN C (LOOPING)
// while : loops through a block of code as long as the specified condition is true
    echo "BAGIAN C";
    echo " <br/>-------------------------------------------<br/>";
    $x = 1;

    while($x <=5){
        echo "The number is: $x <br>";
        $x++;
    }
    echo "<br/> ";

//do - while : loops trough a block of code once, and then repeats the loop as long as the specified condition is true
    do{
        echo "The number is: $x <br>";
        $x++;
    } while ($x <=5 );
    echo "<br/>";

//for : loops trough a block of code a specified nuber of times
    for ($y = 0; $y <=10; $y++){
        echo "The number is: $y <br>";
    }
    echo "<br/>";

//foreach : loops through a block code for each element in an array
// contoh1
    $colors = array("red", "green", "blue", "yellow");
    
    foreach ($colors as $value) {
        echo "$value <br>";
    } 
    echo "<br/>";

// contoh2
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    foreach($age as $x => $val) {
        echo "$x = $val<br>";
    } 
    echo "<br/>";

// BREAK and CONTINUE
// can also be used to jump out of a loop
    for ($x = 0; $x < 10; $x++) {
        if ($x == 4) {
        break;
        }
        echo "The number is: $x <br>";
    }    
    echo "<br/>";
// The continue statement breaks one iteration (in the loop), if a specified condition occurs, and
// continues with the next iteration in the loop. 

    $x = 0;
    while($x < 10) {
    if ($x == 4 || $x == 7) {
        $x++;
        continue;
        }
        echo "The number is: $x <br>";
        $x++;
    } 
    echo "<br/>";

//BAGIAN D fungsi pd PHP
    echo "BAGIAN D";
    echo " <br/>-------------------------------------------<br/>";
    function writeMsg(){
        echo "Hello Maria!";
    }
    writeMsg();
    echo "<br/>";

    include 'footer.php';

// kalo include, dia akan ada warning tp program ttp jalan
// kalo require, program akan error!!!!
// require : wjb ada
// include : optional, jd warning aja
    ?>

<input type="text" name="bil1">
<select>
    <option>+</option>
    <option>-</option>
    <option>x</option>
    <option>/</option>
</select>
<input type="text" name = "bil2">
<input type="submit" value="="


 
</body>
</html>