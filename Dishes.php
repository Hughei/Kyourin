<?php
    $conn = mysqli_connect('localhost', 'root', '', 'kyourin'); // connection to database server
                          //server_name, username, password, db_name
    
    if($_POST['action'] == 'addToFavorites') {
        addToFavorites();
    }

    function addToFavorites() {
        global $conn;

        $id = $_POST['id'];
        $name = $_POST['name'];

        $sameFavorite = mysqli_query($conn, "SELECT * FROM favorites WHERE dish_id = '$id'");
        if(mysqli_num_rows($sameFavorite) > 0) {
            $query = "DELETE FROM favorites WHERE dish_id = '$id'";
            mysqli_query($conn, $query);
            echo 'removed';
        } else {
            $query = "INSERT INTO favorites VALUES ('', '$id', '$name')";
            mysqli_query($conn, $query);
            echo 'added';
        }
        // echo $name;
    }
?>