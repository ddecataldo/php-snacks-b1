<?php 

/*Snack 1
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”*/

if (empty($_GET['name'])) {
    exit("Nessun name inserito nell'url");
}


for ($i = 0; $i < $_GET['name']; $i++) {

    if(count($_GET['name']) > 3){
        echo "Accesso riuscito";
    } else {
        echo "Accesso negato";
    }
}



?>