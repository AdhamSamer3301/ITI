<?php 
?>
<html>

    <head>
        <meta charset="utf=8" name="Registration" content="COVID-19 Vaccine">
        <title> PHP Form </title>
        <link rel="stylesheet" href="style.css" >
        
                    
    </head>
                    
    <body class="Form">          
                        
        <form name="Information" action="Data.php" method="POST" enctype="multipart/form-data">
            
            <fieldset>
                  
                <legend >Personal Information</legend>

                <label>First Name:</label> <br>
                    <input type="text" name="FName"> <br><br>
                
                <label>Last Name:</label><br>
                    <input type="text" name="LName"> <br><br>
                
                <label>Address:</label><br>
                  <!--  <input type="text" name="address" style="overflow:auto; " > <br><br>-->
                  <textarea name="address" style="overflow:scroll; height:4em;"> </textarea> 
                  <br><br>
                
                <label>Country:</label><br>
                    <select name="country">
                        <option>ِAlexnadria</option>
                        <option>Cairo</option>
                        <option>Luxour</option>
                        <option>Sinai</option>
                        <option>Matrouh</option>
                        <option>Suez</option>
                        <option>El Wadi ElGedid</option>
                        <option>Souhag</option>
                    </select> <br><br>

                <label>Gender</label> <br>
                    <input type="radio" name="gender" value="Male"> Male
                    <input type="radio" name="gender" value="Female"> Female<br><br>

                <label>Skills:</label> <br>

                    <input type="checkbox" name="skill[]" value="PHP"> PHP
                    <input type="checkbox" name="skill[]" value="J2SE"> J2SE <br>
                    <input type="checkbox" name="skill[]" value="MySQL"> MySQL
                    <input type="checkbox" name="skill[]" value="Postgress"> Postgress <br><br>

                <label>UserName:</label><br>
                    <input type="text" name="userName"> <br><br>

                <label>Password:</label><br>
                    <input type="password" name="password"> <br><br>
                
                <label>Department:</label><br>
                    <input type="text" name="department" value="OpenSource" readonly="true" > <br><br>

                <label style="font-size: larger;"> <b>Submit</b></label><br>
                    <input type="submit" name="submit" value="Send" class="Button" >
                    <input type="reset" name="reset" value="Clear" class="Button" > <br>
                    <!--<input type="submit" formaction="Data2.php" formmethod="GET" > <br>-->
                    
            </fieldset>
        </form>
    </body>
</html>