<?php // sqltest.php
    require_once 'login.php';
    
    try
        {
            $db = new PDO("pgsql:host=$hn port=5432 dbname=$db user=$un password=$pw");
        }
    catch(PDOException $e)
        {die($e->getMessage());}
    
    $query = "SELECT * FROM inventory";
    $result = $db->query($query);
    if (!$result) die ("Database access failed: " . $conn->error);

    echo "<title>Couture by the Sea</title><link rel='stylesheet' " .
         "href='styles.css' type='text/css'>" .
         "<div class='main'>Couture by the Sea" .
         "<br>" .
         "Inventory Tracker</div>";

    echo "<br>";
    echo "<br>";
    #echo '<script type="text/javascript">alert("Hello There")</script>';

    echo "<div class='invtab'>";
        //$rows = $result->num_rows;
        echo "<table cellpadding=10 border=1>";
        echo "<th>Item</th>";
        echo "<th>Description</th>";
        echo "<th>Price</th>";

        $rowarray = $result->fetchAll(PDO::FETCH_OBJ);
        foreach($rowarray as $row)
        {
            echo "<tr>";
            echo "<td>".$row->item."</td>";
            echo "<td>".$row->description."</td>";
            echo "<td>".$row->price."</td>";
        }

        echo "</table>";
    echo "</div>";
    $db = null;

    echo "<br>";
    echo "<br>";
    echo "<a href='insert.php'>Insert Item</a>";
?>