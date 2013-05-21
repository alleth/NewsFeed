<!DOCTYPE html>
<html>
<head>
<title>Welcome! NewsFeed Login & Sign Up</title>
<link rel = "stylesheet" href = "css/style.css"/>
<link rel = "stylesheet" href = "css/style2.css"/>
<link rel = "stylesheet" href = "css/bootstrap.css">
<script src = "js/bootstrap.min.js"></script>
<script src="js/jquery-1.8.2.min.js"></script>
<script src = "js/jquery-ui.js"></script>
<link rel="stylesheet" href="css/jquery-ui.css" />
<script src="js/homepage.js"></script>

</head>

<div id = "coverLogin">
	<fieldset id = "cover2">
		<h1>Welcome to NewsFeed Login & Sign Up.</h1>
	</fieldset>
	<img id = "imgId" src = "images/newspaper.jpeg">
</div>


	<div id = "titleId">
		<fieldset id = "fieldhome">
		
			<strong id = "logoTxt">NewsFeed</strong>
			<input type = "text" name = "SearchNews" id = "ForSearchNews" placeholder = " Search News">
		   <button  id = "srchClick" class="btn btn-success"><i class = "icon-search"></i></button>
		
			<fieldset id = "newsResult"></fielset>
		
		</fieldset>
	
	</div>


<body id = "index_bdy">

    <div style="" id="readLink" >



    </div>


        <table  id = "tblLogin">
           <tr>
           <form name="form1" method="POST" action="login.php">
             <td>
                <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
                <tr>
                   <td colspan="3">
                   <strong>Login </strong></td>
                </tr>
                <tr>

                   <td width="294"><input placeholder = "Username" width="294" name="username" type="text" id="username"></td>
                </tr>
                <tr>

                   <td><input placeholder = "Password" name="password" type="password" id="password"></td>
                </tr>

                <tr>

                   <td><input type="submit" name="Submit" value="Login" class = "btn btn-primary"></td>
                </tr>

                <tr>
                        <td><p style = "font-size:10px;">Doesn't have an account? Click <a id = "forSignUp">here</a></p></td>
                </tr>

                </table>
             </td>
           </form>
           </tr>
        </table>

   
    <table id = "tblSignUp">
    <br>
    <td colspan="3" id = "text"><strong>Sign Up </strong><a id = "backToLogin">Back</a></td>
   <tr>
   <form name="form1">
      <td>
         <table id = "sgn_up">
         <tr>
            
         </tr>
         <tr>
            <td width="294"><input placeholder = "Firstname" class = "input_sgnUp" name="Firstname" type="text" id="Firstname" /></td>
         </tr>
         <tr>
            
            <td width = "294"><input placeholder = "Lastname" class = "input_sgnUp" name = "Lastname" type = "text" id = "Lastname" /></td>
         </tr> 
         <tr>
            
            <td width = "294"><input placeholder = "Username" class = "input_sgnUp" name = "Username" type = "text" id = "Username" /></td>
         </tr>
         
         <tr>
            
            <td width = "294">
            <select class = "input_sgnUp" name = "Gender" type = "text" id = "Gender" />
            <option value = "">Gender:</option>
            <option value = "Male">Male</option>
            <option value = "Female">Female</option>
            </select>
            </td>
         </tr>
         
         <tr>
            
            <td><input placeholder = "Age" class = "input_sgnUp" name = "Age" type = "text" id = "Age" /></td>
         </tr>
         <tr>
         <td>Birthday:</td>
         </tr>
         
         <tr>
            
            <td>
            <select class = "input_sgnUp" name="Month" type="text" id="Month" placeholder = "Month" />
            <option value = "" id = "month">Month:</option>
            <option value = "January">January</option>
            <option value = "February">February</option>
            <option value = "March">March</option>
            <option value = "April">April</option>
            <option value = "May">May</option>
            <option value = "June">June</option>
            <option value = "July">July</option>
            <option value = "August">August</option>
            <option value = "September">September</option>
            <option value = "October">October</option>
            <option value = "November">November</option>
            <option value = "December">December</option>
            </select>
            
            <select class = "input_sgnUp" name="Date" type="text" id="Date" placeholder = "Date" />
            <option value = "">Date:</option>
            <option value = "1">1</option>
            <option value = "2">2</option>
            <option value = "3">3</option>
            <option value = "4">4</option>
            <option value = "5">5</option>
            <option value = "6">6</option>
            <option value = "7">7</option>
            <option value = "8">8</option>
            <option value = "9">9</option>
            <option value = "10">10</option>
            <option value = "11">11</option>
            <option value = "12">12</option>
            <option value = "13">13</option>
            <option value = "14">14</option>
            <option value = "15">15</option>
            <option value = "16">16</option>
            <option value = "17">17</option>
            <option value = "18">18</option>
            <option value = "19">19</option>
            <option value = "20">20</option>
            <option value = "21">21</option>
            <option value = "22">22</option>
            <option value = "23">23</option>
            <option value = "24">24</option>
            <option value = "25">25</option>
            <option value = "26">26</option>
            <option value = "27">27</option>
            <option value = "28">28</option>
            <option value = "29">29</option>
            <option value = "30">30</option>
            <option value = "31">31</option>
            </select>
            
            <select class = "input_sgnUp"  name="Year" type="text" id="Year" placeholder = "Year"/>
            <option value = ""s>Year:</option>
            <option value = "1989">1989</option>
            <option value = "1990">1990</option>
            <option value = "1991">1991</option>
            <option value = "1992">1992</option>
            <option value = "1993">1993</option>
            <option value = "1994">1994</option>
            <option value = "1995">1995</option>
            <option value = "1996">1996</option>
            <option value = "1997">1997</option>
            <option value = "1998">1998</option>
            <option value = "1999">1999</option>
            <option value = "2000">2000</option>
            <option value = "2001">2001</option>
            <option value = "2002">2002</option>
            <option value = "2003">2003</option>
            <option value = "2004">2004</option>
            <option value = "2005">2005</option>
            <option value = "2006">2006</option>
            <option value = "2007">2007</option>
            <option value = "2008">2008</option>
            <option value = "2008">2008</option>
            <option value = "2009">2009</option>
            <option value = "2010">2010</option>
            <option value = "2011">2011</option>
            <option value = "2012">2012</option>
            <option value = "2013">2013</option>
            </select>
            </td>
            
         </tr>
         <tr>
            
            <td><input placeholder = "Address" class = "input_sgnUp" name = "Address" type = "text" id = "Address" /></td>
         </tr>
         <tr>
            
            <td><input placeholder = "Password" class = "input_sgnUp" name = "Password" type = "Password" id = "Password" /></td>
         </tr>

         <tr>
            	<td>&nbsp;</td>
            	<td>&nbsp;</td>
               <input type="button" value="Sign up" id="btn_signUp" class = "btn btn-primary"/>
         </tr>
         
         
         </table>
      </td>
   </form>
   </tr>
</table>

<div id = "cnfrm_pass" title = "Confirmition">
            <td>Confirm Password</td>
            <td>:</td>
            <td><input name = "Cnfrm_Password" type = "Password" id = "Cnfrm_Password" placeholder = "password..."/></td>
</div>

</body>
<br>
<hr></hr>
<p style = "font-size:10px;background-color:#C7C777;height:150px; margin: 500px 0 0 0; position:fixed; width:1500px;"><a style = "margin: 30px 0 0 100px;">NewsFeed © 2013 · English (Philippines)</a><br><a style = "margin: 10px 0 0 100px;">Created By: Alleth Rey Dazo</a></br></p>

</html>
