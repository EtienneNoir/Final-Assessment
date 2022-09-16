<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="png" href="Images/favicon.png">
    <title>Bit's Hardwares</title>
    
    <style>
        a:link{
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body id="body" onload="NavigatorOb()">
  <section id="top">
      <table id="animation_Heading">
          <tr> 
          <td><img src="Images/favicon.png" alt="Image of CPU" id="animation"></td>
          <td><h2 id="h1"> <strong> Bit's Hardwares </strong> </h2> </td>
          </tr>
      </table>
        
          <?php 

            include 'config.php'; // importing config page, to use its properties

            $connect = OpenConnection(); // calling the function and storing its return value

            if(isset($_REQUEST['filter'])){
                
                
                echo " 
                <nav id=\"nav1\"> 
                    <ul id=\"ulNav\" >
                        <li class=\"link2\" id=\"about_id\"><a id=\"a\"  href=\"index.php\"  onMouseOver=\"this.style.color='#818181'\" onMouseOut=\"this.style.color='whitesmoke'\" style=\"margin-right:110px;\"> Home </a></li>

                        <div class=\"dropdown\">
                            <li><a href=\"javascript:void(0)\" onMouseOver=\"this.style.color='#818181'\" onMouseOut=\"this.style.color='whitesmoke'\"> Sort By : </a></li>
                                <div class=\"dropdown-content\" id=\"table1\">
                                    <form action=\"View.php\" id=\"Form2\" name=\"Search1\" onsubmit=\"return Validation2()\" method=\"POST\">
                                        <table>
                                            <tr>
                                                <td> <input type=\"text\" id=\"in\" placeholder=\"Employee Number\" name=\"search\" style=\"height: 45px; width: 210px; border-radius: 15px; text-align: center;\"> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"submit\" value=\"Employee_Number\">&#128269;</button> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"filter\" value=\"Employee_Number\">▼</button> </td>
                                                
                                            </tr> 

                                            <tr>
                                                <td> <input type=\"text\" id=\"in\" placeholder=\"	Employee Name\" name=\"search\" style=\"height: 45px; width: 210px; border-radius: 15px; text-align: center;\"> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"submit\" value\"Employee_Name\">&#128269;</button> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"filter\" value=\"Employee_Name\">▼</button> </td>
                                            </tr> 

                                            <tr>
                                                <td> <input type=\"text\" id=\"in\" placeholder=\"Employee Surname\" name=\"search\" style=\"height: 45px; width: 210px; border-radius: 15px; text-align: center;\"> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"submit\" value=\"Employee_Surname\">&#128269;</button> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"filter\" value=\"Employee_Surname\">▼</button> </td>
                                            </tr> 

                                            <tr>
                                                <td> <input type=\"text\" id=\"in\" placeholder=\"Employee BirthDate\" name=\"search\" style=\"height: 45px; width: 210px; border-radius: 15px; text-align: center;\"> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"submit\" value=\"Employee_BirthDate\">&#128269;</button> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"filter\" value=\"Employee_BirthDate\">▼</button> </td>
                                            </tr> 

                                            <tr>
                                                <td> <input type=\"text\" id=\"in\" placeholder=\"ReportingLine\" name=\"search\" style=\"height: 45px; width: 210px; border-radius: 15px; text-align: center;\"> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"submit\" value=\"reportingLine\">&#128269;</button> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"filter\" value=\"reportingLine\">▼</button> </td>
                                            </tr> 

                                            <tr>
                                                <td> <input type=\"text\" id=\"in\" placeholder=\"Role position\" name=\"search\" style=\"height: 45px; width: 210px; border-radius: 15px; text-align: center;\"> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"submit\" value=\"role_position\">&#128269;</button> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"filter\" value=\"role_position\">▼</button> </td>
                                            </tr> 

                                            <tr>
                                                <td> <input type=\"text\" id=\"in\" placeholder=\"Salary\" name=\"search\" style=\"height: 45px; width: 210px; border-radius: 15px; text-align: center;\"> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"submit\" value=\"Salary\">&#128269;</button> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"filter\" value=\"Salary\">▼</button> </td>
                                            </tr> 

                                        </table> 
                                        </form>
                                </div>

                            </div>
                        </ul>
                    </ul>
                </nav>
                </section>
                <nav id=\"nav2\" > 
                <div class=\"dropdown3\" >
                <li class=\"link2\" ><a id=\"a\" href=\"javascript:void(0)\" onMouseOver=\"this.style.color='#818181'\" onMouseOut=\"this.style.color='whitesmoke'\" style=\"margin-right:120px; color: whitesmoke\">&#9776;</a></li>
                <div class=\"dropdown-content3\" id=\"table2\" style=\"background-color: black;\">
                        <div class=\"Log\">
                            <button class=\"glowEffect\" > <a href=\"index.php\" style=\"color:whitesmoke ;text-decoration: none;\"> Home</a> </button>
                        </div>
    
    
                        <div class=\"Log\">
                            <div class=\"dropdown\">
                                <button class=\"glowEffect\" ><a href=\"javascript:void(0)\" onMouseOver=\"this.style.color='#818181'\" onMouseOut=\"this.style.color='whitesmoke'\" style=\"color:whitesmoke ;text-decoration: none;\"> Sort By : </a></button>
                                <div class=\"dropdown-content\" id=\"table1\">
                                        </form><form action=\"View.php\" id=\"Form2\" name=\"Search1\" onsubmit=\"return Validation2()\" method=\"POST\">
                                        <table>
                                            <tr>
                                                <td> <input type=\"text\" id=\"in\" placeholder=\"Employee Number\" name=\"search\" style=\"height: 45px; width: 210px; border-radius: 15px; text-align: center;\"> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"submit\" value=\"Employee_Number\">&#128269;</button> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"filter\" value=\"Employee_Number\">▼</button> </td>
                                                
                                            </tr> 

                                            <tr>
                                                <td> <input type=\"text\" id=\"in\" placeholder=\"	Employee Name\" name=\"search\" style=\"height: 45px; width: 210px; border-radius: 15px; text-align: center;\"> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"submit\" value\"Employee_Name\">&#128269;</button> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"filter\" value=\"Employee_Name\">▼</button> </td>
                                            </tr> 

                                            <tr>
                                                <td> <input type=\"text\" id=\"in\" placeholder=\"Employee Surname\" name=\"search\" style=\"height: 45px; width: 210px; border-radius: 15px; text-align: center;\"> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"submit\" value=\"Employee_Surname\">&#128269;</button> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"filter\" value=\"Employee_Surname\">▼</button> </td>
                                            </tr> 

                                            <tr>
                                                <td> <input type=\"text\" id=\"in\" placeholder=\"Employee BirthDate\" name=\"search\" style=\"height: 45px; width: 210px; border-radius: 15px; text-align: center;\"> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"submit\" value=\"Employee_BirthDate\">&#128269;</button> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"filter\" value=\"Employee_BirthDate\">▼</button> </td>
                                            </tr> 

                                            <tr>
                                                <td> <input type=\"text\" id=\"in\" placeholder=\"ReportingLine\" name=\"search\" style=\"height: 45px; width: 210px; border-radius: 15px; text-align: center;\"> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"submit\" value=\"reportingLine\">&#128269;</button> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"filter\" value=\"reportingLine\">▼</button> </td>
                                            </tr> 

                                            <tr>
                                                <td> <input type=\"text\" id=\"in\" placeholder=\"Role position\" name=\"search\" style=\"height: 45px; width: 210px; border-radius: 15px; text-align: center;\"> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"submit\" value=\"role_position\">&#128269;</button> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"filter\" value=\"role_position\">▼</button> </td>
                                            </tr> 

                                            <tr>
                                                <td> <input type=\"text\" id=\"in\" placeholder=\"Salary\" name=\"search\" style=\"height: 45px; width: 210px; border-radius: 15px; text-align: center;\"> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"submit\" value=\"Salary\">&#128269;</button> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"filter\" value=\"Salary\">▼</button> </td>
                                            </tr> 

                                        </table> 
                                </div>
                            </div>
                        </div>
                </div>
                </div>
                </nav>";


                $value = $_POST['filter']; // Get the value that is assigned to the submitted filter button


                $query2 = "SELECT $value from employees"; 

                $executeall =  mysqli_query($connect, $query2) or die("Unable to connect to database!"); // The result is then returned, to the variable result 

                echo "<div class=\"About\" style=\"height:fit-content\"> ";

                echo "<ul>";

                while( $record = mysqli_fetch_array($executeall)){// now to try and find children

                    $Cname = $record[$value]; // Using global variable to access data sent via Post method
              
                
                echo "<li><a href=\"Edit.php?id=$Cname\" style=\"text-decoration:none\;color: white;\"> $Cname<br> </a> </li><br>"; // to print in list format



                }

                echo "</ul>";

                echo "</div>";

                

            
            }

            else {

         
            if (isset($_REQUEST['submit'])){ // If the sort section is submitted

                  echo " 
                <nav id=\"nav1\"> 
                    <ul id=\"ulNav\" >
                        <li class=\"link2\" id=\"about_id\"><a id=\"a\"  href=\"index.php\"  onMouseOver=\"this.style.color='#818181'\" onMouseOut=\"this.style.color='whitesmoke'\" style=\"margin-right:110px;\"> Home </a></li>

                        <div class=\"dropdown\">
                            <li><a href=\"javascript:void(0)\" onMouseOver=\"this.style.color='#818181'\" onMouseOut=\"this.style.color='whitesmoke'\"> Sort By : </a></li>
                                <div class=\"dropdown-content\" id=\"table1\">
                                    <form action=\"View.php\" id=\"Form2\" name=\"Search1\" onsubmit=\"return Validation2()\" method=\"POST\">
                                        <table>
                                            <tr>
                                                <td> <input type=\"text\" id=\"in\" placeholder=\"Employee Number\" name=\"search\" style=\"height: 45px; width: 210px; border-radius: 15px; text-align: center;\"> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"submit\" value=\"Employee_Number\">&#128269;</button> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"filter\" value=\"Employee_Number\">▼</button> </td>
                                                
                                            </tr> 

                                            <tr>
                                                <td> <input type=\"text\" id=\"in\" placeholder=\"	Employee Name\" name=\"search\" style=\"height: 45px; width: 210px; border-radius: 15px; text-align: center;\"> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"submit\" value\"Employee_Name\">&#128269;</button> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"filter\" value=\"Employee_Name\">▼</button> </td>
                                            </tr> 

                                            <tr>
                                                <td> <input type=\"text\" id=\"in\" placeholder=\"Employee Surname\" name=\"search\" style=\"height: 45px; width: 210px; border-radius: 15px; text-align: center;\"> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"submit\" value=\"Employee_Surname\">&#128269;</button> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"filter\" value=\"Employee_Surname\">▼</button> </td>
                                            </tr> 

                                            <tr>
                                                <td> <input type=\"text\" id=\"in\" placeholder=\"Employee BirthDate\" name=\"search\" style=\"height: 45px; width: 210px; border-radius: 15px; text-align: center;\"> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"submit\" value=\"Employee_BirthDate\">&#128269;</button> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"filter\" value=\"Employee_BirthDate\">▼</button> </td>
                                            </tr> 

                                            <tr>
                                                <td> <input type=\"text\" id=\"in\" placeholder=\"ReportingLine\" name=\"search\" style=\"height: 45px; width: 210px; border-radius: 15px; text-align: center;\"> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"submit\" value=\"reportingLine\">&#128269;</button> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"filter\" value=\"reportingLine\">▼</button> </td>
                                            </tr> 

                                            <tr>
                                                <td> <input type=\"text\" id=\"in\" placeholder=\"Role position\" name=\"search\" style=\"height: 45px; width: 210px; border-radius: 15px; text-align: center;\"> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"submit\" value=\"role_position\">&#128269;</button> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"filter\" value=\"role_position\">▼</button> </td>
                                            </tr> 

                                            <tr>
                                                <td> <input type=\"text\" id=\"in\" placeholder=\"Salary\" name=\"search\" style=\"height: 45px; width: 210px; border-radius: 15px; text-align: center;\"> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"submit\" value=\"Salary\">&#128269;</button> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"filter\" value=\"Salary\">▼</button> </td>
                                            </tr> 

                                        </table> 
                                        </form>
                                </div>

                            </div>
                        </ul>
                    </ul>
                </nav>
                </section>
               <nav id=\"nav2\" > 
                <div class=\"dropdown3\" >
                <li class=\"link2\" ><a id=\"a\" href=\"javascript:void(0)\" onMouseOver=\"this.style.color='#818181'\" onMouseOut=\"this.style.color='whitesmoke'\" style=\"margin-right:120px; color: whitesmoke\">&#9776;</a></li>
                <div class=\"dropdown-content3\" id=\"table2\" style=\"background-color: black;\">
                        <div class=\"Log\">
                            <button class=\"glowEffect\" > <a href=\"index.php\" style=\"color:whitesmoke ;text-decoration: none;\"> Home</a> </button>
                        </div>
    
    
                        <div class=\"Log\">
                            <div class=\"dropdown\">
                                <button class=\"glowEffect\" ><a href=\"javascript:void(0)\" onMouseOver=\"this.style.color='#818181'\" onMouseOut=\"this.style.color='whitesmoke'\" style=\"color:whitesmoke ;text-decoration: none;\"> Sort By : </a></button>
                                <div class=\"dropdown-content\" id=\"table1\">
                                        </form><form action=\"View.php\" id=\"Form2\" name=\"Search1\" onsubmit=\"return Validation2()\" method=\"POST\">
                                        <table>
                                            <tr>
                                                <td> <input type=\"text\" id=\"in\" placeholder=\"Employee Number\" name=\"search\" style=\"height: 45px; width: 210px; border-radius: 15px; text-align: center;\"> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"submit\" value=\"Employee_Number\">&#128269;</button> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"filter\" value=\"Employee_Number\">▼</button> </td>
                                                
                                            </tr> 

                                            <tr>
                                                <td> <input type=\"text\" id=\"in\" placeholder=\"	Employee Name\" name=\"search\" style=\"height: 45px; width: 210px; border-radius: 15px; text-align: center;\"> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"submit\" value\"Employee_Name\">&#128269;</button> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"filter\" value=\"Employee_Name\">▼</button> </td>
                                            </tr> 

                                            <tr>
                                                <td> <input type=\"text\" id=\"in\" placeholder=\"Employee Surname\" name=\"search\" style=\"height: 45px; width: 210px; border-radius: 15px; text-align: center;\"> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"submit\" value=\"Employee_Surname\">&#128269;</button> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"filter\" value=\"Employee_Surname\">▼</button> </td>
                                            </tr> 

                                            <tr>
                                                <td> <input type=\"text\" id=\"in\" placeholder=\"Employee BirthDate\" name=\"search\" style=\"height: 45px; width: 210px; border-radius: 15px; text-align: center;\"> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"submit\" value=\"Employee_BirthDate\">&#128269;</button> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"filter\" value=\"Employee_BirthDate\">▼</button> </td>
                                            </tr> 

                                            <tr>
                                                <td> <input type=\"text\" id=\"in\" placeholder=\"ReportingLine\" name=\"search\" style=\"height: 45px; width: 210px; border-radius: 15px; text-align: center;\"> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"submit\" value=\"reportingLine\">&#128269;</button> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"filter\" value=\"reportingLine\">▼</button> </td>
                                            </tr> 

                                            <tr>
                                                <td> <input type=\"text\" id=\"in\" placeholder=\"Role position\" name=\"search\" style=\"height: 45px; width: 210px; border-radius: 15px; text-align: center;\"> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"submit\" value=\"role_position\">&#128269;</button> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"filter\" value=\"role_position\">▼</button> </td>
                                            </tr> 

                                            <tr>
                                                <td> <input type=\"text\" id=\"in\" placeholder=\"Salary\" name=\"search\" style=\"height: 45px; width: 210px; border-radius: 15px; text-align: center;\"> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"submit\" value=\"Salary\">&#128269;</button> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"filter\" value=\"Salary\">▼</button> </td>
                                            </tr> 

                                        </table> 
                                </div>
                            </div>
                        </div>
                </div>
                </div>
                </nav>";

                $value = $_POST['submit']; // The sort value will be stored in here

                $query2 = "SELECT * from employees ORDER BY '$value'"; 

                $executeall =  mysqli_query($connect, $query2) or die("Unable to connect to database!"); // The result is then returned, to the variable result 

                echo "<div class=\"About\" style=\"height:fit-content\"> ";

                echo "<ul>";

                while( $record = mysqli_fetch_array($executeall)){// now to try and find children

                    $Cname = $record['Employee_Name']; // Using global variable to access data sent via Post method
                    $Csurname = $record['Employee_Surname'];
                    $Cdate = $record['Employee_BirthDate'];
                    $Cnumber = $record['Employee_Number']; // check to ensure that there's only unique employee numbers
                    $Csalary= $record['Salary'];
                    $Cposition = $record['role_position'];
                    $CLineManager = $record['reportingLine']; 

            
                
                echo "<li><a href=\"Edit.php?id=$Cnumber\" style=\"text-decoration:none\;color: white;\">$Cname <br> </a><br> $Cposition </li> <br><br><br>"; // to print in list format



                }

                echo "</ul>";

                echo "</div>";


            }
            else{

                    echo " 
                <nav id=\"nav1\"> 
                    <ul id=\"ulNav\" >
                        <li class=\"link2\" id=\"about_id\"><a id=\"a\"  href=\"index.php\"  onMouseOver=\"this.style.color='#818181'\" onMouseOut=\"this.style.color='whitesmoke'\" style=\"margin-right:110px;\"> Home </a></li>

                        <div class=\"dropdown\">
                            <li><a href=\"javascript:void(0)\" onMouseOver=\"this.style.color='#818181'\" onMouseOut=\"this.style.color='whitesmoke'\"> Sort By : </a></li>
                                <div class=\"dropdown-content\" id=\"table1\">
                                    <form action=\"View.php\" id=\"Form2\" name=\"Search1\" onsubmit=\"return Validation2()\" method=\"POST\">
                                        <table>
                                            <tr>
                                                <td> <input type=\"text\" id=\"in\" placeholder=\"Employee Number\" name=\"search\" style=\"height: 45px; width: 210px; border-radius: 15px; text-align: center;\"> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"submit\" value=\"Employee_Number\">&#128269;</button> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"filter\" value=\"Employee_Number\">▼</button> </td>
                                                
                                            </tr> 

                                            <tr>
                                                <td> <input type=\"text\" id=\"in\" placeholder=\"	Employee Name\" name=\"search\" style=\"height: 45px; width: 210px; border-radius: 15px; text-align: center;\"> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"submit\" value\"Employee_Name\">&#128269;</button> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"filter\" value=\"Employee_Name\">▼</button> </td>
                                            </tr> 

                                            <tr>
                                                <td> <input type=\"text\" id=\"in\" placeholder=\"Employee Surname\" name=\"search\" style=\"height: 45px; width: 210px; border-radius: 15px; text-align: center;\"> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"submit\" value=\"Employee_Surname\">&#128269;</button> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"filter\" value=\"Employee_Surname\">▼</button> </td>
                                            </tr> 

                                            <tr>
                                                <td> <input type=\"text\" id=\"in\" placeholder=\"Employee BirthDate\" name=\"search\" style=\"height: 45px; width: 210px; border-radius: 15px; text-align: center;\"> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"submit\" value=\"Employee_BirthDate\">&#128269;</button> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"filter\" value=\"Employee_BirthDate\">▼</button> </td>
                                            </tr> 

                                            <tr>
                                                <td> <input type=\"text\" id=\"in\" placeholder=\"ReportingLine\" name=\"search\" style=\"height: 45px; width: 210px; border-radius: 15px; text-align: center;\"> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"submit\" value=\"reportingLine\">&#128269;</button> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"filter\" value=\"reportingLine\">▼</button> </td>
                                            </tr> 

                                            <tr>
                                                <td> <input type=\"text\" id=\"in\" placeholder=\"Role position\" name=\"search\" style=\"height: 45px; width: 210px; border-radius: 15px; text-align: center;\"> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"submit\" value=\"role_position\">&#128269;</button> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"filter\" value=\"role_position\">▼</button> </td>
                                            </tr> 

                                            <tr>
                                                <td> <input type=\"text\" id=\"in\" placeholder=\"Salary\" name=\"search\" style=\"height: 45px; width: 210px; border-radius: 15px; text-align: center;\"> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"submit\" value=\"Salary\">&#128269;</button> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"filter\" value=\"Salary\">▼</button> </td>
                                            </tr> 

                                        </table> 
                                        </form>
                                </div>

                            </div>
                        </ul>
                    </ul>
                </nav>
        </section>
        <nav id=\"nav2\" > 
                <div class=\"dropdown3\" >
                <li class=\"link2\" ><a id=\"a\" href=\"javascript:void(0)\" onMouseOver=\"this.style.color='#818181'\" onMouseOut=\"this.style.color='whitesmoke'\" style=\"margin-right:120px; color: whitesmoke\">&#9776;</a></li>
                <div class=\"dropdown-content3\" id=\"table2\" style=\"background-color: black;\">
                        <div class=\"Log\">
                            <button class=\"glowEffect\" > <a href=\"index.php\" style=\"color:whitesmoke ;text-decoration: none;\"> Home</a> </button>
                        </div>
    
    
                        <div class=\"Log\">
                            <div class=\"dropdown\">
                                <button class=\"glowEffect\" ><a href=\"javascript:void(0)\" onMouseOver=\"this.style.color='#818181'\" onMouseOut=\"this.style.color='whitesmoke'\" style=\"color:whitesmoke ;text-decoration: none;\"> Sort By : </a></button>
                                <div class=\"dropdown-content\" id=\"table1\">
                                        </form><form action=\"View.php\" id=\"Form2\" name=\"Search1\" onsubmit=\"return Validation2()\" method=\"POST\">
                                        <table>
                                            <tr>
                                                <td> <input type=\"text\" id=\"in\" placeholder=\"Employee Number\" name=\"search\" style=\"height: 45px; width: 210px; border-radius: 15px; text-align: center;\"> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"submit\" value=\"Employee_Number\">&#128269;</button> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"filter\" value=\"Employee_Number\">▼</button> </td>
                                                
                                            </tr> 

                                            <tr>
                                                <td> <input type=\"text\" id=\"in\" placeholder=\"	Employee Name\" name=\"search\" style=\"height: 45px; width: 210px; border-radius: 15px; text-align: center;\"> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"submit\" value\"Employee_Name\">&#128269;</button> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"filter\" value=\"Employee_Name\">▼</button> </td>
                                            </tr> 

                                            <tr>
                                                <td> <input type=\"text\" id=\"in\" placeholder=\"Employee Surname\" name=\"search\" style=\"height: 45px; width: 210px; border-radius: 15px; text-align: center;\"> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"submit\" value=\"Employee_Surname\">&#128269;</button> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"filter\" value=\"Employee_Surname\">▼</button> </td>
                                            </tr> 

                                            <tr>
                                                <td> <input type=\"text\" id=\"in\" placeholder=\"Employee BirthDate\" name=\"search\" style=\"height: 45px; width: 210px; border-radius: 15px; text-align: center;\"> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"submit\" value=\"Employee_BirthDate\">&#128269;</button> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"filter\" value=\"Employee_BirthDate\">▼</button> </td>
                                            </tr> 

                                            <tr>
                                                <td> <input type=\"text\" id=\"in\" placeholder=\"ReportingLine\" name=\"search\" style=\"height: 45px; width: 210px; border-radius: 15px; text-align: center;\"> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"submit\" value=\"reportingLine\">&#128269;</button> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"filter\" value=\"reportingLine\">▼</button> </td>
                                            </tr> 

                                            <tr>
                                                <td> <input type=\"text\" id=\"in\" placeholder=\"Role position\" name=\"search\" style=\"height: 45px; width: 210px; border-radius: 15px; text-align: center;\"> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"submit\" value=\"role_position\">&#128269;</button> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"filter\" value=\"role_position\">▼</button> </td>
                                            </tr> 

                                            <tr>
                                                <td> <input type=\"text\" id=\"in\" placeholder=\"Salary\" name=\"search\" style=\"height: 45px; width: 210px; border-radius: 15px; text-align: center;\"> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"submit\" value=\"Salary\">&#128269;</button> </td>
                                                <td> <button type=\"submit\" id=\"Se\" class=\"glowEffect\" name=\"filter\" value=\"Salary\">▼</button> </td>
                                            </tr> 

                                        </table> 
                                </div>
                            </div>
                        </div>
                </div>
                </div>
                </nav>";
        ?>


            
                <div class="About" style="height:fit-content">
                <!-- <h4 id="column">Our orginzation prides itself in helping our customers find their dream computer hardware</h4>!-->
                
                <?php
                    

                    $mainQuery = "SELECT * FROM employees WHERE  reportingLine = 'none'"; // print the top guy first, remember that the top guy will always have 

            
                    $executeall =  mysqli_query($connect, $mainQuery) or die("Unable to connect to database!"); // The result is then returned, to the variable result 

                    $record = mysqli_fetch_array($executeall);

                    if($record == 0 ){ // This is an implication that the table is not populate at all, thus a message will be displayed to the user

                    
                        echo "<p > <center> The Database is empty <center> </p>";
                    
                    }
                    else{

                    

                    
                    $Cname = $record['Employee_Name']; // Using global variable to access data sent via Post method

                    $Cposition = $record['role_position'];

                    $Cnumber = $record['Employee_Number']; // check to ensure that there's only unique employee numbers

                    echo "<ul>

                        <li><a href=\"Edit.php?id=$Cnumber\" style=\"text-decoration:none\;color: white;\">$Cname <br></a><br> $Cposition</span>
                        <br><br><br>"; // to print in list format, the links are used to lead to a edit page where user get to chose to either delete or edit 

            

                    $allrecords = "SELECT * FROM employees WHERE reportingLine != 'none'"; // get all records except for the CEO 

                

                    $retrieveAll =  mysqli_query($connect, $allrecords) or die("Unable to connect to database!"); // The result is then returned, to the variable result 

                    while($record = mysqli_fetch_array($retrieveAll)){// now to try and find children

                        $Cname = $record['Employee_Name']; // Using global variable to access data sent via Post method
                        $Csurname = $record['Employee_Surname'];
                        $Cdate = $record['Employee_BirthDate'];
                        $Cnumber = $record['Employee_Number']; // check to ensure that there's only unique employee numbers
                        $Csalary= $record['Salary'];
                        $Cposition = $record['role_position'];
                        $CLineManager = $record['reportingLine']; 

                
                    
                    echo "<li><a href=\"Edit.php?id=$Cnumber\" style=\"text-decoration:none\;color: white;\">$Cname <br> </a><br> $Cposition </li> <br><br><br>"; // to print in list format



                    }

                    echo "</ul>";


                }

            }

            }
            CloseConnection($connect);
          ?>
          
            </div>
          
        
             
          
           

        
     
            
  
            
    

      <!--<div  id="left">
        <button class="glowEffect3"   onclick="CalIncre(+1); block();"></button>
      </div> !-->
    <script>
        // When the user scrolls down the page with a value of or greater 20px, the top navigation bar is hidden from the user to allow the user to view more of the content
        // However the opposite occurs when the user scrolls up, in other words the top navigation bar is revealed to the user this is denoted by the else statement 
        window.onscroll = function() {
        
        Slide_Down_a_Bar()
      
      };

      function Slide_Down_a_Bar() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 0) {// 20 px is the value that is produced when scrollind down
          document.getElementById("top").style.top = "-200px";
        } else {
          document.getElementById("top").style.top = "3px";
        }

    }
    
    




</script>
</body>
</html>