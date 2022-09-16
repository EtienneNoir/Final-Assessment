<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="png" href="Images/favicon.png">
    <title>Bit's Hardwares</title>
</head>
 <body id="body" onload="NavigatorOb()">
    <section id="top">
        <table id="animation_Heading">
            <tr> 
            <td><img src="Images/favicon.png" alt="Image of CPU" id="animation"></td>
            <td><h2 id="h1"> <strong> EPI-USE </strong> </h2> </td>
            </tr>
        </table>
           
    </section>

    <nav id="nav2" > 
      <div class="dropdown3" >
          <li class="link2" ><a id="a" href="javascript:void(0)" onMouseOver="this.style.color='#818181'" onMouseOut="this.style.color='whitesmoke'" style="margin-right:120px; color: whitesmoke">&#9776;</a></li>
          <div class="dropdown-content3" id="table2" style="background-color: black;">
                  <div class="Log">
                      <button class="glowEffect" > <a href="index2.html" style="color:whitesmoke ;text-decoration: none;"> Home</a> </button>
                  </div>
                  <div class="Log">
                      <button class="glowEffect" ><a href="#" style="color:whitesmoke ;text-decoration: none;">Log out</a></button>
                  </div>
                  
                  <div class="Log">
                      <button class="glowEffect" ><a href="About.html" style="color:whitesmoke ;text-decoration: none;"> About</a></button>
                  </div>

                  <div class="Log">
                      <button class="glowEffect" > <a href=" " style="color:whitesmoke ;text-decoration: none;"> Your Cart</a></button>
                  </div>

                  <div class="Log">
                      <div class="dropdown">
                          <button class="glowEffect" ><a href="javascript:void(0)" onMouseOver="this.style.color='#818181'" onMouseOut="this.style.color='whitesmoke'" style="color:whitesmoke ;text-decoration: none;"> Search </a></button>
                          <div class="dropdown-content" id="table1">
                              <form action="" id="Form2" name="Search1" onsubmit="return Validation2()">
                                  <table>
                                      <tr>
                                          <td> <input type="text" id="in" placeholder="Search.." name="search" style="height: 45px; width: 210px; border-radius: 15px; text-align: center;"> </td>
                                          <td> <button type="submit" id="Se" class="glowEffect">&#128269;</button> </td>
                                      </tr> 
                                  </table> 
                                  </form>
                          </div>
                      </div>
                  </div>
          </div>
      </div>
    </nav>
        <?php 
    
            if(isset($_REQUEST['submit'])){
             
                $email = $_POST['email'];
            
        
 
                
                
                
                $image =  "http://www.gravatar.com/avatar/" . md5(strtolower(trim($email)))."?s=100";
                
                
                
            echo "
                <div class=\"Image_content2\" id=\"main2\" >
                  <form action=\"Database.php\" id=\"fomSign\" name=\"newAccountform\" method=\"post\" > 
                    <table> <!-- Used to make sure that all the content are aligned -->
                    
                      <h2 style=\"font-family: Monospace font-size=large\"><img src=\"Images/248961.png\" alt=\"Image of gear\" id=\"load\" class=\"Icons\"> Enter Employee</h2>
                      <div>
                        <tr><!-- First row-->
                          <td><input type=\"text\" id=\"Uname\" name=\"name\" style=\"border-color: #fc8129; height: 50px; width: 250px; border-radius: 15px; box-shadow: 5px 10px 18px red; text-align: center;\" placeholder=\"Employee's Name\"></td>
                        </tr>
                        
                         <a id=\"a\" href=\"gravat.php\"> <img src=\"Images/user.png\" alt=\"Image of User\"  class=\"Icons\"> </a>
                    </div>
            
                    <tr>
                      <td><input type=\"text\" id=\"Laname\" name=\"Lname\" class=\"Icons1\" style=\"border-color: #fc8129; height: 50px; width: 250px; border-radius: 15px; box-shadow: 5px 10px 18px red; text-align: center;\"  placeholder=\"Employee's Last Name\"></td>
                    </tr>
        
                    <tr>
                      <td><input type=\"text\" id=\"Email\" name=\"number\" class=\"Icon1s\" style=\"border-color: #fc8129; height: 50px; width: 250px; border-radius: 15px; box-shadow: 5px 10px 18px red; text-align: center;\" placeholder=\"Employee Number\"></td>
                    </tr>
        
                    <tr>
                      <td><input type=\"text\" id=\"Email\" name=\"date\" class=\"Icon1s\" style=\"border-color: #fc8129; height: 50px; width: 250px; border-radius: 15px; box-shadow: 5px 10px 18px red; text-align: center;\" placeholder=\"Employee's Birth-Date\"></td>
                    </tr>
        
                    <tr>
                      <td> <input type=\"text\" id=\"ps\" name=\"salary\" class=\"Icons1\" style=\"border-color: #fc8129; height: 50px; width: 250px; border-radius: 15px; box-shadow: 5px 10px 18px red; text-align: center;\" placeholder=\"Employee's Salary\"> </td>
                    </tr>
        
                    <tr>
                      <td> <input type=\"text\" id=\"ps\" name=\"role/position\" class=\"Icons1\" style=\"border-color: #fc8129; height: 50px; width: 250px; border-radius: 15px; box-shadow: 5px 10px 18px red; text-align: center;\" placeholder=\"Employee's position\"> </td>
                    </tr>
                    
                    <tr>
                      <td> <input type=\"text\" id=\"ps\" name=\"manager\" class=\"Icons1\" style=\"border-color: #fc8129; height: 50px; width: 250px; border-radius: 15px; box-shadow: 5px 10px 18px red; text-align: center;\" placeholder=\"Employee's Manager\"> </td>
                    </tr>
        
                    <tr>
                      <td> <input type=\"submit\" style=\"background-color:#fc8129; border-radius: 15px\" value=\"Enter Employee\" id=\"SignUp\" onMouseOver=\"this.style.color='#10558d'\" onMouseOut=\"this.style.color='black'\" > </td>
                    </tr>
                    
                
                        <input type=\"hidden\" id=\"custId\" name=\"gravat\" value=\"$image \">
                    
        
                
                    </table>
                    
                  </form>
                </div><br><br><br>
              
            
            
                    
            <script>
                // Creating animation with JavaScript
                setInterval(rotate, 1);
            
                function rotate(){
                    document.getElementById(\"load\").style.transform = \"rotate(90deg)\";
                    setInterval(function(){ document.getElementById(\"load\").style.transform = \"rotate(100deg)\"},1);
                    setInterval(rotate2,1);
                    setInterval(function(){ document.getElementById(\"load\").style.transform =\"rotate(180deg)\"},1);
                    
                    setInterval(rotate3,1);
              
                  }
             
                function rotate2(){
                
                  document.getElementById(\"load\").style.transform = \"rotate(150deg)\";
                    
                }
                
                function rotate3(){
                  document.getElementById(\"load\").style.transform = \"rotate(200deg)\";
              
                
                }
        
                
                // When the user scrolls down the page with a value of or greater 20px, the top navigation bar is hidden from the user to allow the user to view more of the content
                // However the opposite occurs when the user scrolls up, in other words the top navigation bar is revealed to the user this is denoted by the else statement 
                window.onscroll = function() {
                
                Slide_Down_a_Bar()
              
              };
        
              function Slide_Down_a_Bar() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 0) {// 20 px is the value that is produced when scrollind down
                  document.getElementById(\"top\").style.top = \"-200px\";
                } else {
                  document.getElementById(\"top\").style.top = \"3px\";
                }
        
            }
          </script>
          
        </body>
        </html>
        ";
             
            }
            else{
                echo "
            <div class=\"Image_content2\" id=\"main2\" >
              <form action=\"gravat.php\" id=\"fomSign\" name=\"newAccountform\" method=\"post\" > 
                <table> <!-- Used to make sure that all the content are aligned -->
                
                  <h2 style=\"font-family: Monospace font-size=large\"><img src=\"Images/248961.png\" alt=\"Image of gear\" id=\"load\" class=\"Icons\"> Add Gravatar</h2>
                  <div>
                    <img src=\"Images/user.png\" alt=\"Image of User\"  class=\"Icons\"> 
                </div>
        
                <tr>
                  <td><input type=\"email\" id=\"email\" name=\"email\" class=\"Icons1\" style=\"border-color: #fc8129; height: 50px; width: 250px; border-radius: 15px; box-shadow: 5px 10px 18px red; text-align: center;\"  placeholder=\"Email\"></td>
                </tr>
                
                <tr>
                  <td> <input type=\"submit\" name=\"submit\" style=\"background-color:#fc8129; border-radius: 15px\" value=\"Submit\" id=\"SignUp\" onMouseOver=\"this.style.color='#10558d'\" onMouseOut=\"this.style.color='black'\" > </td>
                </tr>
    
    
                </table>
                
              </form>
            </div><br><br><br>
      
        
    
            
    <script>
        // Creating animation with JavaScript
        setInterval(rotate, 1);
    
        function rotate(){
            document.getElementById(\"load\").style.transform = \"rotate(90deg)\";
            setInterval(function(){ document.getElementById(\"load\").style.transform = \"rotate(100deg)\"},1);
            setInterval(rotate2,1);
            setInterval(function(){ document.getElementById(\"load\").style.transform =\"rotate(180deg)\"},1);
            
            setInterval(rotate3,1);
      
          }
     
        function rotate2(){
        
          document.getElementById(\"load\").style.transform = \"rotate(150deg)\";
            
        }
        
        function rotate3(){
          document.getElementById(\"load\").style.transform = \"rotate(200deg)\";
      
        
        }

        
        // When the user scrolls down the page with a value of or greater 20px, the top navigation bar is hidden from the user to allow the user to view more of the content
        // However the opposite occurs when the user scrolls up, in other words the top navigation bar is revealed to the user this is denoted by the else statement 
        window.onscroll = function() {
        
        Slide_Down_a_Bar()
      
      };

      function Slide_Down_a_Bar() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 0) {// 20 px is the value that is produced when scrollind down
          document.getElementById(\"top\").style.top = \"-200px\";
        } else {
          document.getElementById(\"top\").style.top = \"3px\";
        }

    }
  </script>
  
</body>
</html>
";
}