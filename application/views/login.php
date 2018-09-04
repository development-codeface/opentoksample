<!DOCTYPE html> 
<html lang = "en"> 

   <head> 
      <meta charset = "utf-8"> 
      <title>CodeIgniter View Example</title> 
      <p><?php echo $records ?></p>
      <p><?php echo $tokenid ?></p>
   </head>
	
   <body> 
      CodeIgniter View Example  values
      
   </body>
   <script>
       var  SESSIONID = "<?php echo $records ?>";
       var  TOKENID  = "<?php echo $tokenid ?>";
       alert("session : "+SESSIONID  +", token"+TOKENID);
   </script>
	
</html>