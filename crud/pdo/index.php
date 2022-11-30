<?php 


/**
 * 
 * PHP Connect to PDOL
 * 
 */

/**
 * Open a Connection to MySQL
 * 
 * 
 * connect to the database
 * $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
 * 
 * set attributes
 * 
 * $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 * 
 * close the connection
 * $conn = null
 * 
 * 
 */

 $connection = new PDO("mysql:host=localhost;dbname=crud", 'root', '');

 $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//  $connection = null;

//  var_dump($connection);

 
/**
 * 
 * Create a Database
 * 
 * creates a new database
 * $sql = "CREATE DATABASE myDB";
 * $conn->exec($sql); if false generate exception
 *  
 */

//  $sql = "create database crud";

//  $query = $connection->exec($sql);

//  var_dump($query);


/**
 * 
 * Create a Table
 * 
 * 
 * creates a new table
 * 
 * $sql = "CREATE TABLE MyGuests ( 
 *   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
 *   firstname VARCHAR(30) NOT NULL, 
 *   lastname VARCHAR(30) NOT NULL, 
 *   email VARCHAR(50),
 *   reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
 * )";
 * 
 * $conn->exec($sql); if false generate exception
 * 
 * 
 */

//  $sql = "create table students (id int(11) auto_increment primary key, name varchar(255))";

//  $connection->exec($sql);

 
/**
 * 
 * Insert data in a Table
 *
 * 
 * insert new data
 * $sql = " INSERT INTO MyGuests ( firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com')";
 * 
 * $conn->exec($sql) if false generate exception 
 * 
 * 
 */

//  $sql = "insert into students(name) values('John')";

//  $query = $connection->exec($sql);

//  var_dump($query);


/**
 * 
 * Get last id after Insert data in a Table
 * 
 * Object-oriented
 * 
 * insert  new data
 * $sql = " INSERT INTO MyGuests ( firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com')";
 * $conn->exec($sql) 
 * 
 * $id = $conn->lastInsertId()  
 * 
 * 
 */

//  $sql = "insert into students(name) values('deepak')";

//  $query = $connection->exec($sql);

//  var_dump($query);

//  echo $connection->lastInsertId();


/**
 * 
 * Multiple Insert data in a Table
 * 
 * Object-oriented
 * 
 * insert  new datas
 *
 * begin the transaction
 * $conn->beginTransaction();
 * 
 * $sql = "INSERT INTO MyGuests (firstname, lastname, email)
 * VALUES ('John', 'Doe', 'john@example.com');";
 * 
 * $conn->exec($sql);
 * 
 * $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
 * VALUES ('Mary', 'Moe', 'mary@example.com');";
 * 
 * $conn->exec($sql);
 * 
 * $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
 * VALUES ('Julie', 'Dooley', 'julie@example.com')";
 * 
 * $conn->exec($sql);
 * 
 * $conn->commit();
 * 
 * if any error occur
 * 
 * $conn->rollback() 
 * 
 * 
 */

//  $sql = "insert into students(name) values('deepak'),('deepak3')";

//  $query = $connection->exec($sql);

//  var_dump($query);

//  echo $connection->lastInsertId();


/**
 * 
 * Select data in a Table
 * 
 * Object-oriented
 * 
 * Select data
 * $sql = "SELECT id, firstname, lastname FROM MyGuests";
 * $conn->prepare($sql); returns true or false 
 * 
 * $stmt->execute()
 * 
 * if true
 * $result = $stmt->fetchAll(PDO::FETCH_ASSOC)
 * 
 * 
 * 
 */

//  $sql = "select * from students";

//  $stmt =  $connection->prepare($sql);

//  $query = $stmt->execute();

//  var_dump($stmt->rowCount());

//  echo "<br>";

//  var_dump($stmt->fetch(PDO::FETCH_ASSOC));




/**
 * 
 * Select data by where in a Table
 * 
 * Object-oriented
 * 
 * select data by where
 * 
 * $sql = "SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Doe'";
 * $conn->prepare($sql);
 * 
 * $stmt->execute() returns true or false 
 * 
 * if true
 * $result = $stmt->fetchAll(PDO::FETCH_ASSOC)
 * 
 */

//  $sql = "select * from students where id = 4";

//  $stmt =  $connection->prepare($sql);

//  $query = $stmt->execute();


//  var_dump($stmt->fetch(PDO::FETCH_ASSOC));



/**
 * 
 * Select data by Order By in a Table
 * 
 * Object-oriented
 * 
 * select data by Order By
 * $sql = "SELECT id, firstname, lastname FROM MyGuests ORDER BY lastname";
 * $conn->prepare($sql); 
 * 
 * $stmt->execute() returns true or false 
 * 
 * if true
 * $result = $stmt->fetchAll(PDO::FETCH_ASSOC)
 * 
 */

//  $sql = "select * from students order by id desc";

//  $stmt =  $connection->prepare($sql);

//  $query = $stmt->execute();

//  var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));


/**
 * 
 * Delete data  in a Table
 *
 * 
 * delete data
 * $sql = "DELETE FROM MyGuests WHERE id=3";
 * $conn->exec($sql); returns true or false 
 * 
 * 
 */

//  $sql = "delete from students where id = 1";

//  $query = $connection->exec($sql);

//  var_dump($query);

 
/**
 * 
 * Update data in a Table
 * 
 * 
 * Update new data
 * $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";
 * $stmt = $conn->prepare($sql);
 * 
 * $stmt->execute(); returns true or false 
 * 
 * if true 
 * data is updated
 * 
 * 
 */

//  $sql = "update students set name = 'testing' where id = 4";

//  $stmt = $connection->prepare($sql);

//  $query = $stmt->execute();

//  var_dump($query);


/**
 * 
 * Prepared Statement
 * 
 * Object-oriented
 * 
 * creates a statement
 * $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email)  VALUES (:firstname, :lastname, :email)");
 * 
 * bind parameters
 *  $stmt->bindParam(':firstname', $firstname);
 *  $stmt->bindParam(':lastname', $lastname);
 *  $stmt->bindParam(':email', $email);
 * 
 * execute statement
 * $stmt->execute();
 * 
 * fetch result
 * $myrow = $stmt->fetchAll();
 * 
 * 
 */

 $id = 2;
 $name = "deepak1";

 $stmt = $connection->prepare("select * from students where id=:id and name=:name");

 $stmt->bindParam(':id', $id);
 $stmt->bindParam(":name", $name);

 $query = $stmt->execute();

 if($query) {
    var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
 }

