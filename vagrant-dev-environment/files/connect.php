 <?php
$servername = "127.0.0.1";
$username = "user";
$password = "pass";
$dbname = "db";
$port = 3306;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE MyGuests(firstname VARCHAR(20), lastname VARCHAR(20), email VARCHAR(20); INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
