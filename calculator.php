<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Userdata</title>
</head>
<body>
<form method="$_POST" action="user_data.csv">
     <div class="container">  

         <center>  <h1>Registeration Form</h1> </center>  
    
         <hr>  
    
         <label> <b>Fullname </b> </label>   
    
         <input type="text" name="name" placeholder= "Fullname" size="50" required /> <br><br>  
    
         <label for="email"><b>Email</b></label>  
    
         <input type="text" placeholder="Enter Email" name="email" required><br> <br> 
    
         <label for="birthday"><b>Date of Birth</b></label>  
    
         <input type="birthday" placeholder="Date of Birth" name="birthday" required><br><br>  
    
        <div>  
    
          <label>   
    
             <b>Gender : </b> 
    
           </label><br>  
    
           <input type="radio" value="Male" name="gender" > Male   
    
            <input type="radio" value="Female" name="gender"  checked> Female   
    
            <input type="radio" value="Other" name="gender"> Other  
    
        </div> <br><br> 
             
             <label for="country"><b>Country</b></label>  
    
             <input type="country" placeholder="Country" name="Country"> <br> <br> 
    
             <button type="submit" class="registerbtn">SUBMIT</button> <br>  

    </form>

</body>
</html> 