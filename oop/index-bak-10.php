<?php 
declare(strict_types=1);

include 'includes/autolader.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP OOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
<body>
    <div class="container-fluid">
        <h1>Learning OOP PHP</h1>

        <?php
        // $pet01 = new Pet(); 
        
        // Without Namespace
        // $person = new Person(); 

        // With Namespace
        $person = new Person\Person(); 
        // print_r($person);
        echo $person->name; 
        echo "<br />";

        try {
            // echo "dfsdfsd";
            $person->setName("HKimhab");
        } catch (TypeError $e){
            // var_dump($e);
            echo "Error!: " . $e->getMessage(); 

            /* 
                echo "Error Message: " . $e->getMessage() . PHP_EOL;
                echo "Error Code: " . $e->getCode() . PHP_EOL;
                echo "File: " . $e->getFile() . PHP_EOL;
                echo "Line: " . $e->getLine() . PHP_EOL;
                echo "Trace: " . PHP_EOL;
                var_dump($e->getTrace());
            */
        }

        echo $person->getName();

        // print_r($person->name);

        // echo $person->setName();
        // var_dump($pet01);

        // echo $pet01->owner();
        // echo "<br />";
        // echo "Properties and Methods"; 
        // echo "<br />";
        // $person->setName('HKimahb');
        // echo $person->name;

        // echo "<br />";
        // $person->setName('SreyKhuoch');
        // echo $person->name;

        // $new = new newclass(); 
        // print_r($new);
    ?>
    </div>

    <div class="container-fluid">
        <form action="includes/calc.inc.php" method="post">
            <p>My own calculator!</p>
            <input type="number" name="num1" placeholder="First number"> <select name="oper">
            <option value="add">Addition</option> <option value="sub">Subtraction</option>
            <option value="div">Division</option>
            <option value="mul">Multiplication</option>
            </select>
            <input type="number" name="num2" placeholder="Second number"> <button type="submit" name="submit">Calculate</button>
        </form>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
</html>