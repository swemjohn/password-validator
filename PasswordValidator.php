<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Validation Result</title>
</head>
<body>

<h1>Password Validation Result</h1>
<?php

class PasswordValidator
{
    public static function validatePassword($password)
    {

        // Check if password has more than 8 characters
    $lengthValid = strlen($password) >= 8;

    // Check if password contains a capital letter
    $uppercaseValid = preg_match('/[A-Z]/', $password);

    // Check if password contains a lowercase letter
    $lowercaseValid = preg_match('/[a-z]/', $password);

    // Check if password contains a number
    $numberValid = preg_match('/\d/', $password);

    // Check if password contains an underscore
    $underscoreValid = strpos($password, '_') !== false;

    // Check if all criteria are met
    $isValid = $lengthValid && $uppercaseValid && $lowercaseValid && $numberValid && $underscoreValid;

// Display validation result
echo $isValid ? "The password you typed '{$password}' is valid!" : "The password you typed '{$password}' is not valid";


return $isValid;
}
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the password from the POST data
    $password = $_POST["password"];

    // Validate the password
    PasswordValidator::validatePassword($password);
}
?>

</body>
</html>

      
