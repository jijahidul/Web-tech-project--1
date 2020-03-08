<html><head>
<style>

</style>
</head>
<body>
  <?php
		$cname="";
		$uname="";
		$email="";
		$phone="";
		$city="";
		$country="";
		$interest="";
		$dob="";
		$pass="";
		$cpass="";
		$err_cname="";
		$err_uname="";
		$err_email="";
		$err_phone="";
		$err_city="";
		$err_country = "";
		$err_interest = "";
		$err_dob="";
    $err_pass="";
		$err_cpass="";

    if(isset($_POST['submit']))
   {

     if(empty($_POST['cname']))
     {
       $err_cname="*Name Required";
     }
     else
     {
       $cname=htmlspecialchars($_POST['cname']);
       echo $cname;
     }

     if(empty($_POST['uname']))
     {
       $err_uname="*User Name Required";
     }
     else
     {
       $uname=htmlspecialchars($_POST['uname']);
       echo $uname;
     }

     if(empty($_POST['email']))
     {
       $err_email="*Email Required";
     }
     elseif(!strpos($_POST['email'],"@")){
       $err_email="Wrong Email Address Entered";
     }
     elseif(!strpos($_POST['email'],".com")){
       $err_email = "Wrong Email Address Entered";
     }
     else{
       $email = htmlspecialchars($_POST["email"]);
       echo $email;
     }
     if (empty($_POST['phone']))
     {
       $err_phone="*Phone Number Required";
     }elseif(!is_numeric($_POST['phone'])){
       $err_phone="*Enter proper Phone No";
       }
     else
     {
       $phone=$_POST['phone'];
       echo $phone;
     }

     if (empty($_POST['city']))
     {
       $err_city="*City Required";
     }
     else
     {
       $city=$_POST['city'];
       echo $city;
     }
     if (empty($_POST['country']))
     {
       $err_country="*Country Required";
     }
     else
     {
       $country=$_POST['country'];
       echo $country;
     }


     if (empty($_POST['dob']))
     {
       $err_dob="*Founding Year Required";
     }
     else
     {
       $dob=$_POST['dob'];
       echo $dob;
     }

     if (empty($_POST['interest']))
     {
       $err_interest="*Please choose the category you're interested";
     }
     else
     {
       $interestr=$_POST['interest'];
       echo $interest;
     }

     if(empty($_POST['pass']))
     {
       $err_pass = "*Enter Password";
     }
     else{

     }

     if(empty($_POST['cpass']))
     {
       $err_cpass = "*Password doesn't match";
     }
     else{

     }
   }
    ?>
 <form method="post" action="" >

    <table style="border:1px solid black;margin-left:auto;margin-right:auto; margin-top:auto;" >
        <tr>
            <td><b>Company/Brand Name</b></td>
            <td><input type="text" value="<?php echo $cname;?>" name="Username"><br>
            <span style="color:red"><?php echo $err_cname;?>
              </td>
        </tr>
        <tr>
            <td><b>User Name</b></td>
            <td><input id="txtPassword" type="text" value="<?php echo $uname;?>" name="pwd"><br>
            <span style="color:red"><?php echo $err_uname;?></td>
        </tr>
		<tr>
            <td><b>Email Address</b></td>
            <td><input id="txtPassword" type="text" value="<?php echo $email;?>" name="pwd"><br>
            <span style="color:red"><?php echo $err_email;?></td></td>
        </tr>
		<tr>
            <td><b>Phone Number</b></td>
            <td><input id="txtPassword" type="text" value="<?php echo $phone;?>" name="pwd"><br>
            <span style="color:red"><?php echo $err_phone;?></td>
        </tr>
		<tr>
            <td><b>City</b></td>
            <td><input id="txtPassword" type="text"value="<?php echo $city;?>" name="pwd"><br>
            <span style="color:red"><?php echo $err_city;?></td>
        </tr>
		<tr>
            <td><b>Country</b></td>
            <td><input id="txtPassword" type="text" value="<?php echo $country;?>" name="pwd"><br>
            <span style="color:red"><?php echo $err_country;?></td>
        </tr>
        <tr>
            <td><b>Founding Year</b></td>
            <td><input type="text" id="year" value="<?php echo $dob;?>" name="year"><br>
              <span style="color:red"><?php echo $err_dob;?></td>
             </tr>
             <tr>
                 <td><b>Interested In</b></td>
                 <td>
                 <select id="interest">
                 <option value="art">Art</option>
                 <option value="film">Filmiograohy</option>
                 <option value="gaming">Gaming</option>
                 <option value="music">Music</option>
               </select><br>
                 <span style="color:red"><?php echo $err_interest;?>
               </td>
                  </tr>
		<tr>
            <td><b>Password:</b></td>
            <td><input id="txtPassword" type="password" name="pwd"><br>
            <span style="color:red"><?php echo $err_pass;?></td>
        </tr>
        <tr>
            <td><b>Confirm Password:</b></td>
            <td><input id="txtPassword" type="password" name="pwd"><br>
            <span style="color:red"><?php echo $err_cpass;?></td>
        </tr>
        <tr>
					<td colspan="2" align="center">
						<input type="submit" name="submit" value="Submit">
					</td>
				</tr>
        </table>
   </form>
 </body>
   </html>
