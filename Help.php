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
<style>
    #em{
        border-style: solid;
        width: 45%;
        border-width: thin;
        padding-bottom: 50px;
    }
</style>
</style>
<body id="body" onload="NavigatorOb()">
  <section id="top">
      <table id="animation_Heading">
          <tr> 
          <td><img src="Images/favicon.png" alt="Image of CPU" id="animation"></td>
          <td><h2 id="h1"> <strong> Bit's Hardwares </strong> </h2> </td>
          </tr>
      </table>
        
          <?php 

            echo " 
          <nav id=\"nav1\"> 
              <ul id=\"ulNav\" >
                  <li class=\"link2\" id=\"about_id\"><a id=\"a\"  href=\"index.php\"  onMouseOver=\"this.style.color='#818181'\" onMouseOut=\"this.style.color='whitesmoke'\" style=\"margin-right:110px;\"> Home </a></li>
              </ul>
          </nav>
  </section>"; 
  ?>
   <nav id="nav2" > 
      <div class="dropdown3" >
          <li class="link2" ><a id="a" href="javascript:void(0)" onMouseOver="this.style.color='#818181'" onMouseOut="this.style.color='whitesmoke'" style="margin-right:120px; color: whitesmoke">&#9776;</a></li>
          <div class="dropdown-content3" id="table2" style="background-color: black;">
                  <div class="Log">
                      <button class="glowEffect" > <a  href="index.php" style="color:whitesmoke ;text-decoration: none;"> Home</a> </button>
                  </div>
          </div>
      </div> 
    </nav>


    
        <div class="About" style="height:fit-content; width: 900px">
          <!-- <h4 id="column">Our orginzation prides itself in helping our customers find their dream computer hardware</h4>!-->
            <div> <h1 style="text-align:center"> When inserting first Employee : </h1>
                
                <video width="900" height="900" controls>
                 
              <source src="CEO.mp4" type="video/mp4">
            
            </video>
            
            </div><br>
          
            <div> <h1 style="text-align:center"> To understand How to use the System : </h1>
                
                <video width="900" height="900" controls>
                 
              <source src="Help.mp4" type="video/mp4">
            
            </video>
            
            </div>

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