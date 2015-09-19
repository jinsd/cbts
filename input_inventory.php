<?php
	require_once 'login.php';
    
    try
        {
            $db = new PDO($dsn, $un, $pw);
        }
    catch(PDOException $e)
        {die($e->getMessage());}

    $item=$_POST['item'];
    $description=$_POST['description'];
    $price=$_POST['price'];

    $sql = "INSERT INTO inventory (item, description, price) VALUES('$item', '$description', $price)";
    $result = $db->query($sql);
    if (!$result) die ("Database access failed: " . $conn->error);

    else {
    	echo "Successful";
    	echo "<br>";
    	echo "<a href='inventory.php'>Back to Inventory</a>";
    } 
?>