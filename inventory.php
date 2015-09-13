<?php // sqltest.php
    require_once 'login.php';
    
    try
        {
            $db = new PDO($dsn, $un, $pw);
        }
    catch(PDOException $e)
        {die($e->getMessage());}
    
    $query = "SELECT * FROM inventory";
    $result = $db->query($query);
    if (!$result) die ("Database access failed: " . $conn->error);
    
    //$rows = $result->num_rows;
    
    echo "<table cellpadding=10 border=1>";
    echo "<th>Item</th>";
    echo "<th>Description</th>";
    echo "<th>Price</th>";
    
    $rowarray = $result->fetchAll(PDO::FETCH_OBJ);
    foreach($rowarray as $row)
    {
        echo "<tr>";
        echo "<td>".$row->Item."</td>";
        echo "<td>".$row->Description."</td>";
        echo "<td>".$row->Price."</td>";
    }
    
    echo "</table>";
    
    $db = null;
?>