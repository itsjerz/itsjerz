<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration Form</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
<form method="POST" action="login.php">
<div class="wrapper">
    <div class="title">
      Sign Up
    </div>
    <div class="form">
       <div class="inputfield">
          <label>First Name</label>
          <input type="text" class="input">
       </div>  
        <div class="inputfield">
          <label>Last Name</label>
          <input type="text" class="input">
       </div>  
       <div class="inputfield">
          <label>Password</label>
          <input type="password" class="input">
       </div>  
      <div class="inputfield">
          <label>Confirm Password</label>
          <input type="password" class="input">
       </div>  
        <div class="inputfield">
          <label>Email Address</label>
          <input type="text" class="input">
       </div> 
      <div class="inputfield">
          <label>Phone Number</label>
          <input type="text" class="input">
       </div> 
      <div class="inputfield">
          <label>Address</label>
          <textarea class="textarea"></textarea>
       </div> 
      <div class="inputfield">
        <input type="submit" value="Register" class="btn">
      </div>
    </div>
</div>	
	
</body>
</form>
</html>