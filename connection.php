<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book test";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";



/*
$sql = "SELECT owners.owner_name, owners.owner_profession, owners.owner_id FROM owners JOIN books ON owners.owner_id = books.owner_id";
*/

/*
$sql = "SELECT books.book_id, books.book_name, books.book_genre, owners.owner_name, owners.owner_profession, owners.owner_id FROM books JOIN owners ON books.owner_id = owners.owner_id";
*/
/*
$sql = "SELECT * FROM owners WHERE 1"; */
/*
								/* CODE FOR ACCESSING JOINED RECORD OF BOTH TABLES ON THE BASIS OF OWNER ID OF A BOOK*/
$sql = "SELECT * FROM owners, books WHERE 1";
*/
								/* CODE FOR ACCESSING JOINED RECORD OF BOTH TABLES ON THE BASIS OF OWNER ID OF A BOOK*/
$sql = "SELECT books.book_id, books.book_name, books.book_genre, owners.owner_name, owners.owner_profession, owners.owner_id FROM books JOIN owners ON books.owner_id = owners.owner_id";


 
$result = $conn->query($sql);
/*echo $result->num_rows;        */



if ($result->num_rows > 0) {

/*
 	echo "<table><tr><th>Owner ID</th><th>Owner Name</th><th>Owner Gender</th><th>Owner Profession</th><th>Book ID</th><th>Book Name</th><th>Book Genre</th><th>Owner ID</th></tr>"; 
*/

	echo "<table><tr><th>Book ID</th><th>Book Name</th><th>Book Genre</th><th>Owner Name</th><th>Owner Profession</th><th>Owner ID</th></tr>";

    // output data of each row
    while($row = $result->fetch_assoc()) {

/*   .$row["book_id"]."</td><td>".$row["book_name"]."</td><td>".$row["book_genre"]."</td></tr>" */
/*
        echo "<tr><td>".$row["owner_id"]."</td><td>".$row["owner_name"]."</td><td>".$row["owner_gender"]."</td><td>".$row["owner_profession"]."</td><td>".$row["book_id"]."</td><td>".$row["book_name"]."</td><td>".$row["book_genre"]."</td><td>".$row["owner_id"]."</td></tr>";
*/

								/* CODE FOR DISPLAYING JOINED RECORDS OF BOTH TABLES ON THE BASIS OF OWNER ID OF A BOOK*/
        echo "<tr><td>".$row["book_id"]."</td><td>".$row["book_name"]."</td><td>".$row["book_genre"]."</td><td>".$row["owner_name"]."</td><td>".$row["owner_profession"]."</td><td>".$row["owner_id"]."</td></tr>";


    }
    echo "</table>";
} else {
    echo "0 results";
}


$conn->close();
?>


function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "TestJanuary";
 $dbpass = "root";
 $db = "book test";


 $conn = new mysqli($dbhost, $dbuser, $dbpass,  $db) or die("Connect failed: %s\n". $conn -> error);

 
 return $conn;
 }