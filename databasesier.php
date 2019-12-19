<?php 

try { 

$servername = "localhost"; 
$username = "root"; 
$password = "";
$dbname = "vuurwerk"; 

    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username, $password);
    $result = $conn -> query("SELECT * from product"); 
    $result->setFetchMode(PDO::FETCH_ASSOC); 

 
    }
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}


$result = $conn -> query("SELECT * from product WHERE categorie = 'sier'");
echo "<div class='product_grid'>";
while ($row = $result->fetch()) { 
        echo "<div class='product'>";
        echo "<img src=".$row['url_afbeelding'] . ">"; 
        echo '<p>' .$row['voorraad'] . "</p>";
        echo '<p>' . $row['naam'] . "</p>";
        echo '<p>' . $row['prijs'] . "</p>";
        echo "</div>";

}
echo "</div>";

?>