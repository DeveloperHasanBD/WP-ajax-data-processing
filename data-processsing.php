
function visible_activation_form_action()
{
    $param = $_POST['param'];

    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $richiesta = $_POST['richiesta'];
    $acconsento = $_POST['acconsento'];
    $awa_mail_to = $_POST['awa_mail_to'];

    if ('mail_form_data' == $param) {
        $to_mail = $awa_mail_to;
        $headers = '';
        $subject = "srt AWA mail";
        $headers .= "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        $msg = '';
        $msg .= 'Nome: ' . $nome . "<br>";
        $msg .= 'Cognome: ' . $cognome . "<br>";
        $msg .= 'E-mail: ' . $email . "<br>";
        $msg .= 'Telefono: ' . $telefono . "<br>";
        $msg .= 'Richiesta: ' . $richiesta . "<br>";
        $msg .= 'Acconsento: ' . $acconsento . "<br>";

        mail($to_mail, $subject, $msg, $headers);
?>
        <div class="alert alert-success">
            <p> Grazie per averci contattato, risponderemo alla vostra richiesta nel minor tempo possibile.</p>
        </div>
        <style>
            #awa_contact_form_validation {
                display: none;
            }
        </style>
<?php

    }
    die;
}


add_action('wp_ajax_visible_activation_form_action', 'visible_activation_form_action');
add_action('wp_ajax_nopriv_visible_activation_form_action', 'visible_activation_form_action');
