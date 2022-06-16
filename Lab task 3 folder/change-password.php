<?Php



?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>
<title>(Type a title for your page here)</title>

<meta name="New" content="Password">
<meta name="FORMAT" content="Password">
</head>

<body >
<?Php



echo "<form action='change-passwordck.php' method=post><input type=hidden name=todo value=change-password>

<table border='0' cellspacing='0' cellpadding='0' align=center>
 <tr bgcolor='#f1f1f1' > <td colspan='2' align='center'><font face='verdana, arial, helvetica' size='2' align='center'>&nbsp;<b>Change  Password</b> </font></td> </tr>

<tr bgcolor='#f1f1f1' > <td ><font face='verdana, arial, helvetica' size='2' align='center'> Old Password
</font></td> <td  align='center'>
<input type ='password' class='bginput' name='old_password' ></font></td></tr>


<tr > <td ><font face='verdana, arial, helvetica' size='2' align='center'> New Password
</font></td> <td  align='center'><font face='verdana, arial, helvetica' size='2' >
<input type ='password' class='bginput' name='password' ></font></td></tr>

<tr bgcolor='#f1f1f1' > <td ><font face='verdana, arial, helvetica' size='2' align='center'> New Password (Re-enter)
</font></td> <td  align='center'><font face='verdana, arial, helvetica' size='2' >
<input type ='password' class='bginput' name='password2' ></font></td></tr>

<tr bgcolor='#ffffff' > <td colspan=2 align=center><input type=submit value='Change Password'><input type=reset value=Reset></font></td></tr>

";


echo "</table>";



?>
<center>


</body>

</html>
