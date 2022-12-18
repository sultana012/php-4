<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php practice</title>
</head>
<body>
    <?php
        function fullname($fname, $lname){
            echo $fname . " " . $lname ."<br>";
        }
        fullname("Mizanur" , "Rahman");

        // associative array
        $persons = array("jone" => 600, "Doe" =>900, "peter"  =>400,);
            echo$persons ['jone'] . "<br>";
        
        //count
        $cars = array ("Toyota", "BMW", "Volvo"); 
        for($x = 0; $x < count($cars); $x++){
            echo $cars[$x] . "<br>";
        }
        // super Global
        var_dump($_SERVER);
        echo "<br>";
        echo $_SERVER ["HTTP_HOST"];
        echo "<br>";
    ?>
</body>
</html>