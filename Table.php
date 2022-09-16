<?php

include 'config.php'; // importing config page, to use its properties

$connect = OpenConnection(); // calling the function and storing its return value


$tabel = "CREATE TABLE $name (
    Employee_Number  INT(255) PRIMARY KEY,
    Employee_Name VARCHAR(255) NOT NULL,
    Employee_Surname VARCHAR(255) NOT NULL,
    Employee_BirthDate VARCHAR(255) NOT NULL,
    reportingLine VARCHAR(255) NOT NULL,
    role_position  VARCHAR(255) NOT NULL,
    Salary  VARCHAR(255) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";



$row = mysqli_query($connect, $tabel) or die("Unable to connect to database!"); // Execute query and return result

echo "Succes!";

?>