<?php
// define variables and set to empty values
$name = $ca = $mn = $ln = $email = $address = $contact = $query = "";
$NameErr = $MnErr= $LnErr = $EmailErr = $AddressErr = $CAErr = $ContactErr = $QueryErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{	

if (empty($_POST["name_txt"]))
     {$NameErr = "You can't leave this empty";}
   else
     {
     $name = test_input($_POST["name_txt"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name))
       {
       $NameErr = "Only letters are allowed"; 
       }
     }
///////////////////////////////////////////////////////////////////

   


if (empty($_POST["ca_txt"]))
     {$CAErr = "You can't leave this empty";}
   else
     {
     $ca = test_input($_POST["ca_txt"]);
     // check if Contact only contains Numbers
     if (!(is_numeric($ca)))
	 {
		 $CAErr="Only number's are allowed ";
			 
	 }
	 }

//////////////////////////////////////////////////////////////

if (empty($_POST["ln_txt"]))
     {$LnErr = "You can't leave this empty";}
   else
     {
     $ln = test_input($_POST["ln_txt"]);
     // check if Contact only contains Numbers
     if (!(is_numeric($ln)))
	 {
		 $LnErr="Only number's are allowed ";
			 
	 }
	 }

/////////////////////////////////////////////////////////////////////

if (empty($_POST["mn_txt"]))
     {$MnErr = "You can't leave this empty";}
   else
     {
     $mn = test_input($_POST["mn_txt"]);
     // check if Contact only contains Numbers
     if (!(is_numeric($mn)))
	 {
		 $MnErr="Only number's are allowed ";
			 
	 }
	 }


 ///////////////////////////////////////////////////////////////// 
 
   if (empty($_POST["ei_txt"]))
     {$EmailErr = "Email is required";}
   else
     {
     $email = test_input($_POST["ei_txt"]);
     // check if e-mail address syntax is valid
     if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
       {
       $EmailErr = "Invalid email format"; 
       }
     }
 /////////////////////////////////////////////////////////////////////
  if (empty($_POST["query_txt"]))
     {
	   $QueryErr = "Please type your query ";
	   }
   else
     {
	   $query = test_input($_POST["query_txt"]);
	   }


 
 //////////////////////////////////////////////////////////////
 
 if (empty($_POST["cn_txt"]))
     {$ContactErr = "You can't leave this empty";}
   else
     {
     $contact = test_input($_POST["cn_txt"]);
     // check if Contact only contains Numbers
     if (!(is_numeric($contact)))
	 {
		 $ContactErr="Only number's are allowed ";
			 
	 }
     }
	 
///////////////////////////////////////////////////////////////

 
 
 ////////////////////////////////////////////////////////////
   
   if (empty($_POST["address_txt"]))
     {
	   $AddressErr = "Please type your query ";
	   }
   else
     {
	   $address = test_input($_POST["address_txt"]);
	   }
	    
	  	   
		   

}

//////////////////////////////////////////////////////////////



function test_input($data)
{
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
}
		   

?>