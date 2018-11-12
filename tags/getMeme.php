<?php
            // $query = $_POST["query"];

            $servername = "localhost";
            $username = "admin";
            $password = "admin";
            $dbname = "bytejam2018";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT url FROM memes";
        if (isset($_POST['sql'])) {
            $sql = $_POST['sql'];
        }



        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            $data = Array();
            while($row = mysqli_fetch_assoc($result)) {
                // echo "<img src=" . $row["url"]. " \" alt=\" oops...\" ";
                // $data .= "\"".$row["url"]."\",";
                $data[] = $row;
            }

        } else {
            echo "0 results";
        }
        echo json_encode($data);

        mysqli_close($conn);


?>
