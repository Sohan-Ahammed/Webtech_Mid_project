<!DOCTYPE html>
<html>
<head>
    <title>Bus Ticket Booking</title>
<style >
    

</style>    

    
</head>
<body>
    <div> 
                  <table>
                      <tr>
                        <td>
                            
                            
                        </td>
                          <td> <h1>  Bus Ticket Booking </h1>
        <br>
       
        </h1>
</td>
                      </tr>

                  </table>
            
                    
            
                    
            
           
        
    </div>


    <form action="auth.php" method="post">
<table> 
<tr><td><level >Email<level></td>
<td><level>Password<level></td></tr>
<tr>
<td><input type="text" name="email"  placeholder="Email Address" ></td>
<td><input type="Password" name="password"  placeholder="Password" ></td>
<td><input type="submit" name="submit" value="Login" ></td>
</tr>
<tr>
<td></td>
<!-- <td ><a style="color:lightblue" href="forgotpass.php">forgotten password?</td> -->
</tr>
</table>
</form>

<form action="writeData.php" method="post">
<h1>Create a new account<h1>
<input id="textfield" size="21" name="firstName" type="text" placeholder="First Name">
<input id="textfield" name="lastName" size="22" type="text" placeholder="Last Name">
<br>
<input id="textfield" name="userName" type="text" placeholder="User Name">
<br>
<input id="textfield" name="email" type="text" placeholder="Email address">
<br>
<input  id="textfield" name="phone" type="text" placeholder="Phone number">
<br>
<input  id="textfield" name="newPassword" type="password" placeholder="New password">
<br>
<input id="textfield" name="cnfirmPassword" type="password" placeholder="Confirm password">
<br>
<level >Birthday</level>
<br>
<select name="day" >
<option value="day">Day</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>

</select>

<select name="month">
<option value="month">Month</option>
<option value="jan">Jan</option>
<option value="feb">Feb</option>
<option value="mar">Mar</option>
<option value="apr">Apr</option>
<option value="may">May</option>
<option value="june">June</option>
<option value="july">July</option>
<option value="aug">Aug</option>
<option value="Sep">Sep</option>
<option value="oct">Oct</option>
<option value="nov">Nov</option>
<option value="dec">Dec</option>
</select>
<select name="year">
<option value="year">Year</option>
<option value="1990">1990</option>
<option value="1991">1991</option>
<option value="1992">1993</option>
<option value="1994">1994</option>
<option value="1995">1995</option>
<option value="1996">1996</option>
<option value="1997">1997</option>
<option value="1998">1998</option>
<option value="1999">1999</option>
<option value="2000">2000</option>
<option value="2001">2001</option>
<option value="2002">2002</option>
<option value="2003">2003</option>
<option value="2004">2004</option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
</select>
<br>

<input type="radio" name="gender" value="male" >Male</level>
<input type="radio" name="gender" value="female"> <level >Female</level>
<br><br>
<input type="submit" name="submit" value="Sign Up" >
</form>

</body>
</html>

   
</body>
</html>