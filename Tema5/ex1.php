<?php
// Folosind Regex, Validati Userul si parola astfel incat , parola nu contina doar litere, daca are doar litere sa afiseze eroare.
// Exemplu 
// Daca are 
// parolaffff , e gresit
// Daca are parola123??asdsadsa!!
// e corect


function validatePassword($password) {
    if (preg_match('/[^a-zA-Z]/', $password)) {
        return true; 
        echo("Password valid");
    } else {
        return false; 
        echo("Invalid password");
    }
}
$password1 = validatePassword('Ana');
$password2 = validatePassword('parola123??asdsadsa!!');

print_r($password1);
print_r($password2);
?>