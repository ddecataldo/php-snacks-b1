<?php 

/*Snack 1
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”*/

// Con empty() verifico che il parametro non sia una stringa vuota
// Con array_key_exists() verifico che il parametro esiste
$existsName = empty(array_key_exists("name", $_GET));
$existsMail = empty(array_key_exists("mail", $_GET));
$existsAge = empty(array_key_exists("age", $_GET));

if ($existsName && $existsMail && $existsAge) {
    exit("Nessun name inserito nell'url");
}
// Recupero il parametro name
$nameVariable = $_GET['name'];
// Recupero il parametro mail
$mailVariable = $_GET['mail'];
// Recupero il parametro age
$ageVariable = $_GET['age'];

// Verifico se all'interno dell'array mail sono presenti i caratteri "@" e "."
$hasDot = strchr($mailVariable, ".");
$hasAt = strchr($mailVariable, "@");

// Verifico se il parametro age è numerico
$ageNumeric = is_numeric($ageVariable);

// Contro se $nameVariable > 3, $hasDot e $hasAt sono diversi da falso (quindi hanno un valore) e se ageNumeric è numerico
if(strlen($nameVariable) > 3 && ($hasDot !== false && $hasAt !== false)  && $ageNumeric){
    echo "Accesso riuscito";
} else {
    echo "Accesso negato";
}

?>