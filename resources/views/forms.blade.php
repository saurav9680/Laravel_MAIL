     <html>
           <head>
                 <title>Form</title>
                 <body>
                       <h2><center>Get and Post Form </center></h2><br>
      <form method = "post" action="<?=url('get-data')?>">  
@csrf
         Full Name : <input type = "text" name = "name" /> <br><br>  
         Age : <input type = "number" name = "age" /> <br><br> 
         Address: <input type = "textarea" name = "address" /> <br>  <br>
         Email: <input type = "email" name = "email" /> <br>  <br>
         <tr><td rowspan="2">Course</td>  
<td><input type="checkbox" name="Course" value="PHP"/>PHP</td>  
<tr>  
<td><input type="checkbox" name="Course" value="Laravel"/>Laravel</td></tr>  
</tr> <br> 
         <tr><td rowspan="2">Gender</td>  
<td><input type="radio" name="Gender" value="Male"/>Male</td>  
<tr>  
<td><input type="radio" name="Gender" value="Female"/>Female</td></tr>  
</tr>  <br>
         <input type = "submit" value="send">  

      </form>  
</body>
</html>