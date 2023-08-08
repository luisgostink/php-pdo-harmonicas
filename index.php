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
</head>
<body>
        <table class="table table-success table-striped"> 
          <!-- TABLE HEAD WHT THE FIELD NAMES -->
        <thead>
                <tr class="table-dark">
                 
                    <?php 
                        require "./include/db.php";

                        prettyPrint($_POST);

                        $sqlStatement = $dbConnection->query("SELECT * FROM `harmonicas`");

                        $columnCount = $sqlStatement->columnCount();

                        for ($c = 0; $c < $columnCount; $c++){
                            $columnMeta = $sqlStatement->getColumnMeta($c);
                            //prettyPrint($columnMeta);
                            
                            $columnName = $columnMeta['name'];
                            echo "<th>$columnName</th>";

                        }
                    ?>
                </tr>
        </thead>


        <!-- TABLE CELLS WITH DATA -->

        <tbody>
            <?php
                // If $row === null, the condition in () is interpreted as false by PHP.
                // With this, the while loop can be exited.
                
                // ->fetch() always fetches exactly one table row from the database.

                while ($row = $sqlStatement->fetch(PDO::FETCH_ASSOC)){ //vertical row by row
                        echo "<tr>";
                        
                //Display the details of a book in a table cell through the array.
                foreach ($row as $columnName => $value){
                    if ($columnName === 'brand') {
                        $id = $row['id'];
                        echo "<td><a href='editharmonicas.php?id=$id'>$value</a></td>";
                    }
                    else {  //id, model, type, etc...
                        echo "<td>$value</td>";
                    }
                }
            }
                        echo "</tr>";
            ?>

        </tbody>
        </table>


</body>
</html>