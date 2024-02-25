<?php 
// Include other_file.php
require_once './includes/newclass.inc.php';
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
        $pet01 = new Pet(); 
        $person = new Person(); 
        // echo $person->first;
        // var_dump($pet01);
        echo $pet01->owner();
        echo "<br />";
        echo "Properties and Methods"; 
        echo "<br />";
        $person->setName('HKimahb');
        echo $person->name;

        echo "<br />";
        $person->setName('SreyKhuoch');
        echo $person->name;

    ?>
    </div>

   

   

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
</html>