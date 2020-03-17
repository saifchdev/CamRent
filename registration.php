<?php
include 'header.php';
?>
            
        <div class="container">
            <h1>Enter Details</h1>
            <form action="js/form.php" method="POST">
                
                    Username:<br>
        
                    <input id="username" type="text" name="username" ><br>
                         Password<br>
                    <input type="text" id="pwd" name="pwd" ><br>
        
                    Email:<br>
        
                    <input type="email" id="useremail" name="useremail" value=" "><br>
        
                    ID<br>
                    <input type="text" id="id" name="id" ><br>
               
                    <br>
                    
        
                        <input id="submit-btn" type="submit" value="submit">
        
        
        
        
                    </form>
        

        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/app.js"></script>
        <script src="js/validate.js"></script>
</body>
</html>