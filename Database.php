

    <?php
        
        include 'config.php'; // importing config page, to use its properties
        $connect = OpenConnection(); // calling the function and storing its return value

        $name = $_POST ["name"]; // Using global variable Post to access data sent via Post method
        $surname = $_POST["Lname"];
        $date = $_POST["date"];
        $number = $_POST["number"]; // check to ensure that there's only unique employee numbers
        $salary= $_POST["salary"];
        $position = $_POST["role/position"];
        $LineManager = $_POST["manager"]; 
        
        
        if("" == ($_POST["gravat"])){ // If user did not add an image
            
            $query2 = "SELECT  Employee_Number FROM employees";  // implication that the connection function was a success. Thus go to the next phase, return the Employee_Number of all the records.

            $result = mysqli_query($connect, $query2) or die("Unable to connect to database!1"); // The result is then returned, to the variable result 

            $Allrecords = mysqli_num_rows($result); // is used to return the number of rows returned from the data base based on the query




            $query = "INSERT INTO employees(Employee_Number, Employee_Name, Employee_Surname, Employee_BirthDate,reportingLine, role_position, Salary) 
                VALUES ('$number','$name','$surname', '$date', '$LineManager', '$position', '$salary')";

            $result = mysqli_query($connect, $query) ; // Executing the query using the specified connection

    
           
            echo "<script>window.location.href='index.php';</script>";
            exit();
        
   
   
        }
        else{// If not empty 
    
        //  -------------// Now we want to ensure that that there already exists a reporting line manager that is being assigned to this instance of the employee ---------------------------

        // In other words it is to make sure that there's a prent node that already exists before making this node a child node of that parent node
        $image = $_POST["gravat"];

        $query2 = "SELECT  Employee_Number FROM employees";  // implication that the connection function was a success. Thus go to the next phase, return the Employee_Number of all the records.

        $result = mysqli_query($connect, $query2) or die("Unable to connect to database!2"); // The result is then returned, to the variable result 

        $Allrecords = mysqli_num_rows($result); // is used to return the number of rows returned from the data base based on the query




        $query = "INSERT INTO employees(Employee_Number, Employee_Name, Employee_Surname, Employee_BirthDate,reportingLine, role_position, Salary, Image) 
                VALUES ('$number','$name','$surname', '$date', '$LineManager', '$position', '$salary', '$image')";

            $result = mysqli_query($connect, $query) or die("Unable to connect to database!w"); // Executing the query using the specified connection
            
            
         echo "<script>window.location.href='index.php';</script>";
            exit();

   
        
   
        }
        
        
?>
        
    ?>
