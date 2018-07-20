<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "example_books";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $db_name);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SELECTING ALL FROM A GIVEN DATABASE
    $sql = "SELECT * FROM books;";
    $people_result = $conn->query($sql);
    /* if ($people_result->num_rows > 0) {
        // output data of each row
        while($row = $people_result->fetch_assoc()) {
            echo $row['people_id'];
            echo $row['people_name'];
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
        h1{
            font-family: helvetica;
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

    <h1>BOOK DATABASE</h1>
    <div>
        <table border="1" cellspacing="1" cellpadding="15" width="500">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Published</th>
                <th>Pages</th>
            </tr>
        <?php
            if ($people_result->num_rows > 0) {
                // output data of each row
                while($row = $people_result->fetch_assoc()) {
        ?>
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["title"]; ?></td>
                <td><?php echo $row["author"]; ?></td>
                <td><?php echo $row["year_published"]; ?></td>
                <td><?php echo $row["number_pages"]; ?></td>
            </tr>
        <?
                }
            } else {

            }
        ?>
        </table>
    </div>
</html>