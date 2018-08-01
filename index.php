<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "example_prelims";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $db_name);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SELECTING ALL FROM A GIVEN DATABASE
    $sql = "SELECT * FROM animals;";
    $animal_result = $conn->query($sql);
    /* if ($animal_result->num_rows > 0) {
        // output data of each row
        while($row = $animal_result->fetch_assoc()) {
            echo $row['animal_id'];
            echo $row['animal_name'];
            echo '</br>';
        }
    } else {

    } */

    //-- INSERTING INTO A GIVEN DATABASE
    /* $sql = "INSERT INTO cia_people VALUES ('', 'Sean Smith', 24, 1);";
    $result = $conn->query($sql); */

    //-- DELETING FROM A GIVEN DATABASE
    /* $sql = "DELETE FROM cia_people WHERE people_name = 'Jun Michael';";
    $result = $conn->query($sql); */

    echo "status: Connected successfully";
?>

<html>
    <style>
        h1, h3{
            font-family: helvetica;
        }

        .table-container{
            margin-bottom: 30px;
        }

        th {
            text-align: left;
        }

        input.name {
            width: 150px;
            margin-right: 20px;
        }

        input.age {
            width: 50px;
        }

        input.submit {
            width: 100px;
            margin-left: 90px;
            background-color: pink;
            color: white;
            padding: 5px 10px;
        }
    </style>

    <h1>ZOO DATABASE</h1>

    <h3>ANIMALS</h3>
    <!-- EXAMPLE: This query shows all records from the animals table -->
    <!-- Start copy paste from here -->
    <div class="table-container">
        <?php 
            $sql = "SELECT * FROM animals;";
            $animal_result = $conn->query($sql);
        ?>
        <table border="1" cellspacing="1" cellpadding="15" width="500">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Type</th>
                <th>Food</th>
                <th>Population</th>
            </tr>
        <?php
            if ($animal_result->num_rows > 0) {
                // output data of each row
                while($row = $animal_result->fetch_assoc()) {
        ?>
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["type"]; ?></td>
                <td><?php echo $row["food"]; ?></td>
                <td><?php echo $row["population"]; ?></td>
            </tr>
        <?
                }
            } else {

            }
        ?>
        </table>
    </div>
    <!-- end copy paste from here -->

    <h3>FOOD</h3>
    <!-- ITEM NUMBER 1: Use SELECT to get all records of food items from the animal_food TABLE -->

    <h3>ANIMAL TYPES</h3>
    <!-- ITEM NUMBER 2: Use SUM and GROUP BY animals by type whether herbivore or carnivore and SHOW TOTAL COUNT OF EACH TYPE -->

    <h3>ANIMALS WITH CHEAP FOOD</h3>
    <!-- ITEM NUMBER 3: Use IN to select all animals with food that has a price less than or equal to 200 --> 

    <h3>ANIMALS POPULATION COUNT BY TYPE</h3>
    <!-- ITEM NUMBER 4: Use HAVING to select animals by type whether herbivore or carnivore only those type who exceed a population of 30 --> 

    <h3>ANIMALS BY POPULATION HEALTH</h3>
    <!-- ITEM NUMBER 5: USE CASE -->

    <!-- BONUS ITEM: INSERT AN ANIMAL USING A PHP STATEMENT -->
    
</html>