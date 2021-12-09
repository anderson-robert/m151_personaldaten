<?php
$HTML_Out= "";
$pdLastname = $_POST['lastname'];
$pdFirstname = $_POST['firstname'];
$pdBirthdate = $_POST['birthdate'];
$pdEmail = $_POST['email'];
$pdAHV = $_POST['ahv'];
$pdPersonalNumber= $_POST['personalNumber'];
$pdTelephoneNumber= $_POST['telephoneNumber'];
$pdCompanyName= $_POST['companyName'];
$pdDepartment= $_POST['department'];
$pdJobTitle= $_POST['jobTitle'];
$pdJobDescription= $_POST['jobDescription'];

//DB Connection Details
$server = "m151_personaldaten";

//$connectionstring = odbc_pconnect($server, $user, $pass)
//  or die("Couldn't connect to the database");

function create_user($lastnameInput, $firstnameInput, $birthdateInput, $emailInput, $ahvInput, $personalNumberInput,
                     $telephoneNumberInput, $companyNameInput, $departmentInput, $jobTitleInput, $jobDescriptionInput) {
    //SQL Query
    $Query = "CALL sps_create_user('". $lastnameInput. "','". $firstnameInput. "','". $birthdateInput. "','". $emailInput. "','". $ahvInput. "','". $personalNumberInput. "','". $telephoneNumberInput. "','". $companyNameInput. "','". $departmentInput. "','". $jobTitleInput. "','". $jobDescriptionInput. "')";
    //Query execution
    //$result = odbc_exec()
}
?>
