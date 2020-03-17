<?php
include("header.php");
 ?>
<head>
<meta charset="UTF-8">
<title>
    
saifchogle
</title>
    <header>
        <style type="text/css">
        #status{

        }
        </style>
        <link rel="stylesheet" href="CSS/index.css">
        <script type="text/javascript" src="js/jquery-3.4.1.min.js">
        </script>
</head>
<body>
     <h1 align = "center"> PHP using AJAX</h1>
     <br><br><br>
     <div align =  "center">
     <h3><b>Create your username</b></h3> <input type = "text"
     name = "username" id = "username"
     placeholder = "Enter your UserName">
     <span id = "Result" align = "center"></span>
     </div>
</body>

     <script>
       $(document).ready(function() {
         $('#username').keyup(function(){
           $.post("checkuser.php", {
            username: $('#username').val()
            }, function(response){
             $('#Result').fadeOut();
            setTimeout("finishAjax('Result', '"+escape(response)+"')",400);
           });
             return false;
          });
        });
        function finishAjax(id, response) {
         $('#Result').hide();
         $('#'+id).html(unescape(response));
         $('#'+id).fadeIn();
       }
</script>
       
