<?php
if (isset ($_GET['name']) && isset ($_GET['age'])) {
    $name = $_GET['name'];
    $age = $_GET['age'];

    echo "<h2>GET Data Receive </h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Age: $age</p>";
    echo "<p>notice how the data is visible in the URL</p>";
} else {
    echo"no get data receive";
}
?>