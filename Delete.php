<?php
    include 'config.php'; // importing config page, to use its properties
                    
    $connect = OpenConnection(); // calling the function and storing its return value

    $Cnumber = $_REQUEST['id']; // take value stored in the url 

    $mainQuery = "SELECT * FROM employees WHERE  Employee_Number = '$Cnumber'"; // print the top guy first, remember that the top guy will always have 


    $executeall =  mysqli_query($connect, $mainQuery) or die("Unable to connect to database!"); // The result is then returned, to the variable result 



    $record = mysqli_fetch_array( $executeall);

    $CLineManager = $record['reportingLine']; 

    if( $CLineManager == "none"){ // You cannot delete the CEO, you can only edit it

        header("Location: Tree.php");  // then re-direct to the tree view that will show user the changes that took place

        

    }
    else{

        $del = "DELETE FROM employees WHERE  Employee_Number = '$Cnumber'";

        $executeall =  mysqli_query($connect, $del) or die("Unable to connect to database!"); // The result is then returned, to the variable result 

        header("Location: Tree.php");  // then re-direct to the tree view that will show user the changes that took place

    }

?>