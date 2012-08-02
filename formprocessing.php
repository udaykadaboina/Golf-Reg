<?php

$firstName = alphanumericAndSpace($_POST['FirstName']);
$lastName = alphanumericAndSpace($_POST['LastName']);
$title = alphanumericAndSpace($_POST['Title']);
$address = alphanumericAndSpace($_POST['Address']);
$city = alphanumericAndSpace($_POST['City']);
$state = alphanumericAndSpace($_POST['State']);
$zipCode = $_POST['ZipCode'];
$phoneNumber = alphanumericAndSpace($_POST['PhoneNumber']);
$email = alphanumericAndSpace($_POST['Email']);

$numberofGuests = alphanumericAndSpace($_POST['NumberOfGuests']);

$guest1name = alphanumericAndSpace($_POST['Player1Name']);
$guest1email = alphanumericAndSpace($_POST['Player1Email']);
$guest1size = alphanumericAndSpace($_POST['Player1Size']);
$guest1info = $guest1name.$guest1email.$guest1size;

$guest2name = alphanumericAndSpace($_POST['Player2Name']);
$guest2email = alphanumericAndSpace($_POST['Player2Email']);
$guest2size = alphanumericAndSpace($_POST['Player2Size']);
$guest2info = $guest2name.$guest2email.$guest2size;

$guest3name = alphanumericAndSpace($_POST['Player3Name']);
$guest3email = alphanumericAndSpace($_POST['Player3Email']);
$guest3size = alphanumericAndSpace($_POST['Player3Size']);
$guest3info = $guest3name.$guest3email.$guest3size;

$guest4name = alphanumericAndSpace($_POST['Player4Name']);
$guest4email = alphanumericAndSpace($_POST['Player4Email']);
$guest4size = alphanumericAndSpace($_POST['Player4Size']);
$guest4info = $guest4name.$guest4email.$guest4size;


INCLUDE './connections.php';

$sql="INSERT INTO users (FirstName,LastName,Title,Address,City,State,Zip,Phone,Email,Number_Of_Guests,Guest1Name,Guest1Email,Guest1Size,Guest2Name,Guest2Email,Guest2Size,Guest3Name,Guest3Email,Guest3Size,Guest4Name,Guest4Email,Guest4Size) VALUES ('$firstName','$lastName','$title','$address','$city','$state','$zipCode','$phoneNumber','$email','$numberofGuests','$guest1name','$guest1email','$guest1size','$guest2name','$guest2email','$guest2size','$guest3name','$guest3email','$guest3size','$guest4name','$guest4email','$guest4size')"; 


	$result = mysqli_query($cxnADMWB,$sql)
	or die("Error with database connection. Please try again.");


echo "... Submission Successful ...";
header('Location: confirmation.php');	
	
 //clean code returning only alpha-numeric values and spaces
	function alphanumericAndSpace( $string )
    {
        //return preg_replace('/[^a-zA-Z0-9\s]/', '', $string);
		//return preg_replace('/[^a-zA-Z@.0-9\s]/', '', $string);
		$string =  strip_tags($string);
		$string = preg_replace('/[^a-zA-Z@\-:_.0-9\s]/ ', '', $string);
		
		return $string;
    }

?>