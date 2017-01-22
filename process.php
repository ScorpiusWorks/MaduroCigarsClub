<?php
if( isset($_POST) ){
     
    //form validation vars
    $formok = true;
    $errors = array();
     
    //sumbission data
    $ipaddress = $_SERVER['REMOTE_ADDR'];
    $date = date('d/m/Y');
    $time = date('H:i:s');
     
    //form data
    $name = $_POST['name'];    
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $message = $_POST['message'];
     
    //validate form data
    
    //validate name is not empty
    if(empty($name)){
        $formok = false;
        $errors[] = "Nu ati introdus un nume!";
    }

    //validate email address is not empty
    if(empty($email)){
        $formok = false;
        $errors[] = "Nu ati introdus o adresa de e-mail!";
    //validate email address is valid
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $formok = false;
        $errors[] = "Nu ati introdus o adresa de e-mail valida!";
    }
    
    //validate message is not empty
    if(empty($message)){
        $formok = false;
        $errors[] = "Nu ati scris un mesaj!";
    }
    //validate message is greater than 20 charcters
    elseif(strlen($message) < 20){
        $formok = false;
        $errors[] = "Mesajul trebuie sa fie mai lung de 20 caractere!";
    }
    
    ini_set("SMTP","smtp.careercoach.ro");
    ini_set("sendmail_from","webmaster@madurocigarsclub.ro"); 
    //send email if all is ok
    if($formok){
        $headers = "From: webmaster@madurocigarsclub.ro" . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        $emailbody = "<p>Ati primit un nou mesaj prin formularul de contact de pe site</p>
                      <p><strong>Nume: </strong> {$name} </p>
                      <p><strong>Adresa e-mail: </strong> {$email} </p>
                      <p><strong>Telefon: </strong> {$telephone} </p>
                      <p><strong>Mesaj: </strong> {$message} </p>
                      <p>Mesajul a fost trimis de la urmatoare adresa IP: {$ipaddress} in {$date} la ora {$time}</p>";

        mail("contact@madurocigarsclub.ro","Mesaj nou de pe site-ul Maduro Cigars Club",$emailbody,$headers);

    }
    
    //what we need to return back to our form
    $returndata = array(
        'posted_form_data' => array(
            'name' => $name,
            'email' => $email,
            'telephone' => $telephone,
            'message' => $message
        ),
        'form_ok' => $formok,
        'errors' => $errors
    );
    
    //if this is not an ajax request
    if(empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest'){

        //set session variables
        session_start();
        $_SESSION['cf_returndata'] = $returndata;

        //redirect back to form
        header('location: ' . $_SERVER['HTTP_REFERER']);

    }

}