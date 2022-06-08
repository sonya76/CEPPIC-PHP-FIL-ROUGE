<h1>Inscription</h1>
<?php
    if (isset($_POST['frmInscription'])) {
        $message = "Je viens du formulaire";
        dump($_POST);
    }
    
    else
        $message = "Je ne viens pas du formulaire";

    echo $message;
?>
