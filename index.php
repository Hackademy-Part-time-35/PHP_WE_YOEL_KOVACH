
<?php
// Creare una funzione per il check di una password, dovrà rispettare criteri:

// avere almeno una lettere maiuscola, un carattere numerico e lunghezza di 8+ caratteri.

// Infine create un loop che chiami un inserimento password e la funzione di check fino a quando la password non rispetta tutti i criteri

// HINT: creare una funzione generale con all'interno funzioni piu piccole che verifichino i singoli criteri. In generale dovranno avere un parametro in ingresso (password) e valore di ritorno booleano a seconda che la condizione sia verificata o meno

$password;

function contraseña(){
    global $password;
    $password = readline("password\n");
}

contraseña();


$controll = strlen($password);

if($controll == 0){
    contraseña();
}else{    
    function checks (){
        global $password;

        function checkN ($dato){
                $array = str_split($dato);
            foreach($array as $Number){
                if(!is_int($Number) === true){
                    return true;
                }else{ 
                        echo "a la tua password li mancano numeri\n";
                        return false;
                    }
            };
        }

        function checkM ($dato){
            if (strtolower($dato) != $dato){
                return true;
            }else{
                echo "a la tua password li mancano maiuscule\n";
                return false;
            }
        }

        function checkL ($dato){
            if (strlen($dato) <= 8) {
                echo " devi fare la password con piu di 8 caratteri \n";
                false;
            }else{
                true;
            }
        }
        
        checkN($password);
        checkM($password);
        checkL($password);

    }
}
    checks();


?>