<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script language="javascript1.5">
function f1(){

var val= parseInt(document.getElementById('course').value);
var tot=parseInt(document.getElementById('duration').value);
var total= parseInt(val*tot);
document.getElementById('total').value=total;
}

</script>
</head>
<style type="text/css">
.header{
       width:100%;
	   height:200px;
	  
	   background-color:#660066;
	   float:left;
	   text-align:center;
	   color:#CCCCCC;
	   
	   }
.menu{
       width:100%;
	   height:50px;
	   
	   background-color:#996699;
	   float:left;
	   text-align:center;
	   color:#CCCCCC;
}
    .image{
	width:100%;
	
	}
	
	.leftcontent{
       width:50%;
	   height:250px;
	   
	   background-color:#330066;
	   float:left;
	   text-align:center;
	   color:#000000;
}   

	

	.rightcontent{
       width:50%;
	   height:250px;
	  
	   background-color:#CC0099;
	   float:left;
	   text-align:center;
	   color:#CCCCCC;
}  
	
 .leftcontent3{
       width:50%;
	   height:250px;
	   
	   background-color:#CC00FF;
	   float:left;
	   text-align:center;
	   color:#000000;
}   

	
     .footer{
	  width:100%;
	   height:200px;
	   
	   background-color:#CCFF33;
	   float:left;
	   text-align:center;
	   color:#CCCCCC;
	   
	   }
	   .frontform{
	   margin:7px;
	   }
	      
</style>
</head>


<body>
<div class="header">
site header
</div>

<div class="menu">
menu
</div>
<div class="image">
<img src="../img/1.jpg" height="200px" width="100%" />
</div>

<div class="leftcontent3">
<form method="get" >
<select name="course"  id="course"required="required">
<option value="">Select Course </option>
<option value="50000">bca  </option>
<option value="80000">btect  </option>
</select>
<div class="frontform"><input type="number" name="duration" id="duration" placeholder="Duration" onblur="f1()" /></div>

<div class="frontform"><input type="number" name="total" id="total"  placeholder="total" /></div>
<div class="frontform"><input type="submit" name="duration"  /></div>
</div>
</form>
<div class="rightcontent">
<form method="get">
<div class="frontform"><input type="text" name="uname" id="uname" placeholder="Your Name" required="required" onkeyup="f2()" /></div>
<div class="frontform"><input type="email" name="uemail" placeholder="Your Email" required="required"  /></div>
<div class="frontform"><input type="number" name="contact" id="contact" placeholder="Your Contact" maxlength="10" required="required"  /></div>
<div class="frontform">Male: <input type="radio" name="gender" value="male" /> |
Fe-Male: <input type="radio" name="gender" value="female" /></div>

<input type="submit" name="submit"  />
</div>
<div class="footer">
</div>


</body>
</html>
