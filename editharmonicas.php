<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
    
    <script>

    </script>
</head>
<body>

    <?php
        //Build the connection to the database.
        require "./include/db.php";

        //$_GET returns the 'id' from the URL 'index.php?id=$id'.
        if (isset ($_GET['id'])){
            $id = $_GET['id'];
        }
        else { 
            //id missing: Cancel and exit PHP
            $id = 1;
            //exit("Attention: the identifier 'id is missing in the URL.");
     }

     // echo "id = $id<br>"; // DEVONLY

    //Request all data (whole table row) for the book with the received $id with ->query().
    $sqlStatement = $dbConnection->query("SELECT * FROM `harmonicas` WHERE `id` = $id");
    
    // Fetch data for the selected book with ->fetch().
    // $row is an array with a key-value list.

    $row = $sqlStatement->fetch(PDO::FETCH_ASSOC);

    function createSelectField($dbConnection, $currentColumn, $tableName, $columName) {
        echo '<select name = "'. $columName.'" id = "'.$columName.'">';
        
        $sqlStatement = $dbConnection->query("SELECT * FROM $tableName");
            while ($selectFields = $sqlStatement->fetch(PDO::FETCH_ASSOC))// fetch the data from the selected brand.  
            { 
                if ($currentColumn == $selectFields[$columName]){
                    echo '<option value="'. $selectFields[$columName].'" selected>'. $selectFields[$columName].'</option>';
                }
                else{
                    echo '<option value="'. $selectFields[$columName].'">'. $selectFields[$columName].'</option>';
                }
                

            }
    
        echo '</select>';
    }
         
    ?>

        <h1>Edit Harmonicas</h1>

        <form id="edit-form" action="index.php" method="post">
            <table class="table">
                <tr>
                    <td>ID:
                        <input type="hidden" name="editID" value="<?php echo $id; ?>">
                        <input type="hidden" name="deteteID" value="0"></td>
                        <td><?php echo $id;?></td>
                </tr>

                <tr>
                    <td>Brand: </td>
                    <td>
                    
                    
                    <?php

                          /*  $sqlStatement = $dbConnection->query("SELECT * FROM `brands`");
                            while ($selectFields = $sqlStatement->fetch(PDO::FETCH_ASSOC))// fetch the data from the selected brand.  
                            { 
                                echo '<option value='. $selectFields['brand'].'>'. $selectFields['brand'].'</option>';

                                // THIS APPLIES TO EVERY FIELD. NOW IS EVERYTHING WRAPPED ON THE function createSelectFields();
                            } */ 

                            createSelectField($dbConnection, $row['brand'],  'brands', 'brand');
                    ?>
                   
                    </td> 
                </tr>

                <tr>
                    <td>Model: </td>
                    <td> <?php createSelectField($dbConnection, $row['model'], 'models', 'model');?> </td>
                </tr>

                <tr>
                    <td>Type: </td>
                    <td> <?php createSelectField($dbConnection, $row['type'], 'types', 'type');?> </td></td>
                </tr>

                <tr>
                    <td>Quantity: </td>
                    <td><input type="text" id="quantity" name="quantity" value="<?php echo $row['quantity'] ?>"></td>
                </tr>
            </table>

            <input class="btn btn-primary"type="submit" value="Save">

            <button type="button" class="btn btn-secondary" 
            onclick="setDeleteBookID(<?php echo $id; ?>);">Delete</button>

        </form>


</body>
</html>