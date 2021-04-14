<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>

<form method="POST" action="mongodb.php">
<div class="wrapper">
    
<div class="title">Login</div>
    
    <div class="form">
       <div class="inputfield">
          <label>Email Address</label>
          <input type="text" class="input" name="email">
       </div> 
          
       <div class="inputfield">
          <label>Password</label>
          <input type="password" class="input" name="pswd">
       </div>  
       
       <div class="inputfield">
        <input type="submit" value="Login" class="btn">
       </div>
      
         
    </div>
</div>	
	
</body>
</form>
</html>