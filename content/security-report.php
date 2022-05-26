
<?php
	session_start();
	if(!$_SESSION['username'])
	{
		header("location:Login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>: : About : :</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../assets/Stylesheets/sr-style.css">
	
</head>
<body>
<div class="wrapper">
<div class="logo margin.sm"> Rajahmundry Tourism</div>
<div class="margin-sm">
<nav>
<a  href="index.php">Home</a>
<a href="bookings.php">Make a Tour</a>
<a href="search.loc.php">Search Locations</a>
<a href="upcoming.php">Upcoming</a>
<a class="active" href="about.php">About</a>
<a href="logout.i.php">Logout</a>
</nav>
</div>
</div>
<center>


<div class="container">

<div class="sr">


<h1> ACADEMIC SECURITY REPORT </h1><br><br>

<h3> INTRODUCTION </h3>
<p>  As the internet is open and web applications are constantly being used to 
deliver critical services, there is an option for security attacks. Many web-based applications 
focus on security, especially with exchanging of sensitive information like finance, health, or 
credit card number in interactive applications. Without security of those web applications, the whole set 
of sensitive information is critically endangered. There was also a considerable effort in the field of 
science and industry in establishing reliable online communication facilities. A lot of attention has been 
offered on the network security such as port scanning and even great achievements were accomplished at this stage. 
Nearly 75% of the attacks were, however, targeted at app level, like network servers (Mohamed Al-Ibrahim, 2014). 
This report focuses on all the security and safety functionalities introduced on this website and outlines how 
this can be expanded.</p><br>


<h3> ANALYSIS </h3>
<p> The website security is the worst thing the organisation can do now. 
Web-based applications- shopping carts, forms, log-in page detail, interactive content – are increasingly 
the focus of hackers. Seven days a week, 24 hours a day, inaccessible web applications from all over the world 
conveniently access corporate backend databases and thus allows hackers to carry on illegally on their target 
webpage (Mohamed Al-Ibrahim, 2014). To access such accounts, web-based applications allow attackers to employ 
numerous methods. To protect our application and evaluate any harm, safety vulnerabilities, and the effects of 
each hazard, we must detect the most common threats in web-based applications (Aiman M. Osman, 2017). 
The following flaws should be considered and resolved during web design are as follows (Bhatt, 2018). </p><br>

<p> •	SQL Injection: This is the most regular threats on the website. 
This works primarily in a database-based web server. To make the injection process work, 
the web application should collect the user data and stores the data in the database or can also work 
by collecting and displaying the data from the database to the user. This is nothing but inserting an external 
string into the database query and calls on it to make something other than the command it defines. 
This injection code technique is used on the database to carryout malicious SQL statements. To prevent this 
SQL injection, I have made up some prepared statements, which when logging in automatically checks for the 
similar data in it and only provides the access to the user.</p><br>

<p> •	Inadequate Login and Signup: Logging and registration with insufficient data, along with the lack 
of integration, allows attackers to target more systems, retain persistence, transform more systems, hack, 
extract or kill data. This bulk violation experiments may take longer time than usual to identify an unsuccessful breach. 
To avoid this, I have provided with the “required” command in the Login/Signup form and as well as 
with the prepared statements in the functions page which when left an input space empty, it warns the 
user to fill in the data to proceed further.</p><br>

<p> •	Disrupted Encryption: This is possible if the authentication and session control functions go wrong. 
This may also lead to criminals using passwords and offering another users identity. The use of 
“MD5(Hashed Password)” command, along with the prepared statements that run during the required sessions, 
must be used to deter this. This serves to preserve the privacy of the customer.</p><br>

<p> •	Cross Site Scripting (XSS): The XSS weakness is, when untrusted program details are used in a 
new webpage without adequate protection, and by using the browser API that enables the development of an 
existing HTML or JavaScript user provided webpage. The XSS allows an intruder scripts in a browser that can 
erase user sessions, default sites or malicious websites. To prevent this using prepared remarks, 
it immediately says that the user has fed the incorrect credentials and redirects them automatically to 
the original page, regardless of the data supplied by the database.</p><br>


<h3> CONCLUSION </h3>
<p> Regarding the above-mentioned web page flaws can impact the user experience, this webpage only 
accepts the data that is needed for the specific field by comparing the inputs given by the user, with 
the database and enabling certain user functions to begin. when designing this website for the use of certain
commands such as "mysqli_stmt_init, mysqli_stmt_bind_param, mysqli_stmt_prepare, password_verify, mysqli_fetch_assoc", 
etc., in php were used. If the user’s input does not fit with the database it redirects to the same link,
claiming that the credentials given does not match with the database.  </p><br>

<p> In this website, some features have been included for the time being to make it secure. 
However, this website can be built further even by incorporating other features. For instance. 
We can add functions that protect, payment information used by the user, avoid attacks from the DDOS 
that potentially bog down the website functionality, add an SSL layer that keeps payments secure by anonymity, 
add an OTP option which acts as a two-factor authentication when the user is paying through the website, etc., </p><br>

<h3> REFERENCES </h3>

<p> •	Aiman M. Osman, A. D.-A., 2017. Proposed security model for web based applications and services. IEEE, 17(DOI: 978-1-5090-1809-3).<br>
	•	Bhatt, D., 2018. Cyber Security Risks For Modern Web. INTERNATIONAL JOURNAL OF SCIENTIFIC & TECHNOLOGY RESEARCH, 7(5).<br>
	•	Mohamed Al-Ibrahim, Y. S. A.-D., 2014. The Reality of Applying Security in Web Applications in Academia. International Journal of Advanced Computer Science and Applications, 5(10).<br>
</p><br>







</div>
</div>









</center>
</body>
</html>