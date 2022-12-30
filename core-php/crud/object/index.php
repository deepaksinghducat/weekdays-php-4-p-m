<?php


/**
 * Open a Connection to MySQL
 * 
 * Object Oriented 
 * 
 * connect to the database
 * $conn = new mysqli($servername, $username, $password);
 * 
 * database connection error
 * $conn->connect_error
 * 
 * close the connection
 * conn->close();
 * 
 * Procedural
 * 
 * connect to the database
 * mysqli_connect($servername, $username, $password);
 * 
 * database connection error
 * mysqli_connect_error()
 * 
 * close the connection
 * mysqli_close($conn);
 * 
 */

$connection = new mysqli('localhost', 'root', '', 'crud');

//  $connection->close();

//  var_dump($connection);


/**
 * 
 * Create a Database
 * 
 * Object-oriented
 * 
 * creates a new database
 * $sql = "CREATE DATABASE myDB";
 * $conn->query($sql) returns true or false 
 * 
 * if false
 * $conn->error
 * 
 * Procedural
 * 
 * creates a new database
 * $sql = "CREATE DATABASE myDB";
 * mysqli_query($conn, $sql) returns true or false
 * 
 * if false
 * mysqli_error($conn)
 * 
 */

// $sql = "create database crud";

// $query =  $connection->query($sql);

// var_dump($query);

/**
 * 
 * Create a Table
 * 
 * Object-oriented
 * 
 * creates a new table
 * $sql = "CREATE TABLE MyGuests ( 
 *   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
 *   firstname VARCHAR(30) NOT NULL, 
 *   lastname VARCHAR(30) NOT NULL, 
 *   email VARCHAR(50),
 *   reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
 * )";
 * $conn->query($sql) returns true or false 
 * 
 * if false
 * $conn->error
 * 
 * Procedural
 * 
 * creates a new table
 * $sql = "CREATE TABLE MyGuests ( 
 *   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
 *   firstname VARCHAR(30) NOT NULL, 
 *   lastname VARCHAR(30) NOT NULL, 
 *   email VARCHAR(50),
 *   reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
 * )";
 * mysqli_query($conn, $sql) returns true or false
 * 
 * if false
 * mysqli_error($conn)
 * 
 */

//  $sql = "create table students( id int auto_increment primary key, name varchar(50))";

//  $query = $connection->query($sql);

//  var_dump($query);


/**
 * 
 * Insert data in a Table
 * 
 * Object-oriented
 * 
 * insert new data
 * $sql = " INSERT INTO MyGuests ( firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com')";
 * $conn->query($sql) returns true or false 
 * 
 * if false
 * $conn->error
 * 
 * Procedural
 * 
 * insert new data
 * $sql = " INSERT INTO MyGuests ( firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com')";
 * mysqli_query($conn, $sql) returns true or false
 * 
 * if false
 * mysqli_error($conn)
 * 
 */

//  $sql = "insert into students(name) values('john')";

//  $query = $connection->query($sql);

//  var_dump($query);


/**
 * 
 * Get last id after Insert data in a Table
 * 
 * Object-oriented
 * 
 * insert  new data
 * $sql = " INSERT INTO MyGuests ( firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com')";
 * $conn->query($sql) returns true or false 
 * 
 * if true 
 * $conn->insert_id
 * 
 * if false
 * $conn->error
 * 
 * Procedural
 * 
 * insert  new data
 * $sql = " INSERT INTO MyGuests ( firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com')";
 * mysqli_query($conn, $sql) returns true or false
 * 
 * if true
 * mysqli_insert_id($conn)
 * 
 * if false
 * mysqli_error($conn)
 * 
 */

// $sql = "insert into students(name) values('deepak')";

// $query = $connection->query($sql);

// echo $connection->insert_id;

// var_dump($query);


/**
 * 
 * Multiple Insert data in a Table
 * 
 * Object-oriented
 * 
 * insert  new datas
 *
 * $sql = "INSERT INTO MyGuests (firstname, lastname, email)
 * VALUES ('John', 'Doe', 'john@example.com');";
 * $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
 * VALUES ('Mary', 'Moe', 'mary@example.com');";
 * $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
 * VALUES ('Julie', 'Dooley', 'julie@example.com')";
 * 
 * $conn->multi_query($sql) returns true or false 
 * 
 * if false
 * $conn->error
 * 
 * Procedural
 * 
 * insert  new datas
 * 
 * $sql = "INSERT INTO MyGuests (firstname, lastname, email)
 * VALUES ('John', 'Doe', 'john@example.com');";
 * $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
 * VALUES ('Mary', 'Moe', 'mary@example.com');";
 * $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
 * VALUES ('Julie', 'Dooley', 'julie@example.com')";
 * 
 * mysqli_multi_query($conn, $sql) returns true or false
 * 
 * if false
 * mysqli_error($conn)
 * 
 */

// $sql = "insert into students(name) values('john'), ('deepak')";

// $query = $connection->query($sql);

// var_dump($query);



/**
 * 
 * Select data in a Table
 * 
 * Object-oriented
 * 
 * Select data
 * $sql = "SELECT id, firstname, lastname FROM MyGuests";
 * $conn->query($sql) returns true or false 
 * 
 * if true
 * $result->num_rows for no of rows
 * $row = $result->fetch_assoc() to get all the data by rows
 * 
 * if false
 * $conn->error
 * 
 * Procedural
 * 
 * Select data
 * $sql = "SELECT id, firstname, lastname FROM MyGuests";
 * $result = mysqli_query($conn, $sql); returns true or false
 * 
 * if yes
 * mysqli_num_rows($result) no of rows
 * $row = mysqli_fetch_assoc($result) get all the data by rows
 * 
 * if false
 * mysqli_error($conn)
 * 
 */

// $sql = "select * from students";

// $query = $connection->query($sql);

// if($query) {
//    if($query->num_rows) {
//     var_dump($query->fetch_all(MYSQLI_ASSOC));
//    }
// }


// var_dump($query);


/**
 * 
 * Select data by where in a Table
 * 
 * Object-oriented
 * 
 * select data by where
 * $sql = "SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Doe'";
 * $conn->query($sql) returns true or false 
 * 
 * if true
 * $result->num_rows for no of rows
 * $row = $result->fetch_assoc() to get all the data by rows
 * 
 * if false
 * $conn->error
 * 
 * Procedural
 * 
 * select data by where
 * $sql = "SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Doe'";
 * $result = mysqli_query($conn, $sql); returns true or false
 * 
 * if yes
 * mysqli_num_rows($result) no of rows
 * $row = mysqli_fetch_assoc($result) get all the data by rows
 * 
 * if false
 * mysqli_error($conn)
 * 
 */

// $sql = "select * from students where id = 1";

// $query = $connection->query($sql);

// if($query) {
//     var_dump($query->fetch_assoc());
// }


/**
 * 
 * Select data by Order By in a Table
 * 
 * Object-oriented
 * 
 * select data by Order By
 * $sql = "SELECT id, firstname, lastname FROM MyGuests ORDER BY lastname";
 * $conn->query($sql) returns true or false 
 * 
 * if true
 * $result->num_rows for no of rows
 * $row = $result->fetch_assoc() to get all the data by rows
 * 
 * if false
 * $conn->error
 * 
 * Procedural
 * 
 * select data by Order By
 * $sql = "SELECT id, firstname, lastname FROM MyGuests ORDER BY lastname";
 * $result = mysqli_query($conn, $sql); returns true or false
 * 
 * if yes
 * mysqli_num_rows($result) no of rows
 * $row = mysqli_fetch_assoc($result) get all the data by rows
 * 
 * if false
 * mysqli_error($conn)
 * 
 */

// $sql = "select * from students order by name desc";

// $query = $connection->query($sql);

// if ($query) {
//     if ($query->num_rows) {
//         var_dump($query->fetch_all(MYSQLI_ASSOC));
//     }
// }


/**
 * 
 * Delete data  in a Table
 * 
 * Object-oriented
 * 
 * delete data
 * $sql = "DELETE FROM MyGuests WHERE id=3";
 * $conn->query($sql) returns true or false 
 * 
 * if true
 * data is deleted successfully
 * 
 * if false
 * $conn->error
 * 
 * Procedural
 * 
 * delete data
 * $sql = "DELETE FROM MyGuests WHERE id=3";
 * $result = mysqli_query($conn, $sql); returns true or false
 * 
 * if yes
 * data is deleted successfully
 * 
 * if false
 * mysqli_error($conn)
 * 
 */
 
// $sql = "delete from students where id = 1";

// $query = $connection->query($sql);

// var_dump($query);

/**
 * 
 * Update data in a Table
 * 
 * Object-oriented
 * 
 * Update new data
 * $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";
 * $conn->query($sql) returns true or false 
 * 
 * if true 
 * data is updated
 * 
 * if false
 * $conn->error
 * 
 * Procedural
 * 
 * update new data
 * $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";
 * mysqli_query($conn, $sql) returns true or false
 * 
 * if true 
 * data is updated
 * 
 * if false
 * mysqli_error($conn)
 * 
 */

// $sql = "update students set name = 'testing'";

// $query = $connection->query($sql);

// var_dump($query);


/**
 * 
 * Prepared Statement
 * 
 * Object-oriented
 * 
 * creates a statement
 * $stmt = $mysqli->prepare("SELECT District FROM City WHERE Name=?");
 * 
 * bind parameters
 * $stmt->bind_param("s", $city);
 * The argument may be one of four types:
 * i - integer
 * d - double
 * s - string
 * b - BLOB
 * 
 * execute statement
 * $stmt->execute();
 * 
 * bind result
 * $result = $stmt->get_result();
 * 
 * fetch result
 * $myrow = $result->fetch_assoc();
 * 
 * error
 * $stat->error
 * 
 * close statement
 * $stmt->close();
 * 
 * 
 * Procedural
 * 
 * creates a statement
 * $stmt = mysqli_prepare($conn, "SELECT District FROM City WHERE Name=?");
 * 
 * bind statement
 * mysqli_stmt_bind_param($stmt, "s", $city);
 * 
 * execute statement
 * mysqli_stmt_execute($stmt);
 * 
 * bind result
 * $result = mysqli_stmt_get_result($stmt);
 * 
 * get result
 * $data = mysqli_fetch_assoc($result)
 * 
 * if false
 * mysqli_stmt_errno($stmt)
 * 
 * close statement
 * mysqli_stmt_close($stmt);
 * 
 */

 $id = 2;

 $stmt = $connection->prepare("select * from students where id=?");
 $stmt->bind_param('i', $id);

 $stmt->execute();

 $query = $stmt->get_result();

 if($query) {
    if($query->num_rows) {
        var_dump($query->fetch_assoc());
    }
 }