<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
.link{
background-color:#450000;
color:#b5b575;

}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body bgcolor="#b5b575">
<center>

<form method="post" action="otherinsert.php">
<fieldset>
<legend><h1>other details</h1></legend>
<pre>
<div align="left">

passport type	:	<input type="radio" name="passporttype" value="normal" />normal	<input type="radio" name="passport type" value="Tatkal" />tatkal


education		:	<select name="education">
<option value="select option" selected>select</option>
<option value="matriculate">matriculate</option>
<option value="HSC">HSC</option>
<option value="degree">degree</option>
<option value="post graduate">post graduate</option>
</select>


nationality		:	<select name="nationality">
<option value="select option" selected> select</option>
<option value="Indian">indian</option>
<option value="Others">others</option>
</select>


adhar card no	:	<input type="text" name="acnumber" required />


pan card no 	:       <input type="text" name="pannumber" required />


email		    :	<input type="email" name="email" required />

<input type="submit" name="submit" value="submit">
</div>

</pre>
</fieldset>
</form>
<a href="reference2.php" class="link">Next</a>
</body>
</html>
