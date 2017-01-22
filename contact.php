<?php session_start() ?> 
<!DOCTYPE HTML>
<html>

<head>
  <title>Maduro Cigars Club Arad - Contact</title>
  <meta name="description" content="Formular de contact Maduro Cigars Club Arad" />
  <meta name="keywords" content="maduro, cigars, club, Arad, cigar, afficionado, cuba, cubans, trabuc, trabucuri, cohiba, romeoyjulieta, montecristo, partagas, behike, siglo" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<!--  <meta name=viewport content="width=device-width, initial-scale=1">-->
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/script.js"></script>
</head>

<body>
  <div id="main">
    <?php $currentPage = 'contact'; require 'includes/header-nav.php'; ?>
    <div id="site_content">
      <?php include 'includes/sidebar.php'; ?>
      <div id="content">
         <div id="contact-form" class="clearfix">
            <h1>Contacteaza-ne!</h1> 
            <br>
            <h4>Daca vrei sa iei legatura cu noi, te invitam sa ne contactezi prin intermediul formularului de mai jos:</h4>
            <?php
            //init variables
            $cf = array();
            $sr = false;

            if(isset($_SESSION['cf_returndata'])){
                $cf = $_SESSION['cf_returndata'];
                $sr = true;
            }
            ?>
            <ul id="errors" class="<?php echo ($sr && !$cf['form_ok']) ? 'visible' : ''; ?>">
                <li id="info">A aparut o problema in transmiterea formularului tau:</li>
                <?php 
                if(isset($cf['errors']) && count($cf['errors']) > 0) :
                    foreach($cf['errors'] as $error) :
                ?>
                <li><?php echo $error ?></li>
                <?php
                    endforeach;
                endif;
                ?>
            </ul>
            <p id="success" class="<?php echo ($sr && $cf['form_ok']) ? 'visible' : ''; ?>">Iti multumim pentru mesaj! Vom reveni cu un feedback in scurt timp!</p>
            <form action="process.php" method="post">
              <label for="name">Nume: <span class="required">*</span></label>
              <input type="text" id="name" name="name" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['name'] : '' ?>" placeholder="Decebal Popescu" required="required" autofocus="autofocus" />
                
              <label for="email">Adresa e-mail: <span class="required">*</span></label>
              <input type="email" id="email" name="email" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['email'] : '' ?>" placeholder="decebal.popescu@exemplu.com" required="required" />
                
              <label for="telephone">Telefon: </label>
              <input type="tel" id="telephone" name="telephone" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['telephone'] : '' ?>" />                
              
              <label for="message">Mesaj: <span class="required">*</span></label>
              <textarea id="message" name="message" placeholder="Mesajul tau (minim 20 caractere)" required="required" data-minlength="20"><?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['message'] : '' ?></textarea>
                
              <span id="loading"></span>
              <input type="submit" value="Trimite!" id="submit-button" />
              <p id="req-field-desc"><span class="required">*</span> indica un camp obligatoriu de completat</p>
            </form>
            <?php unset($_SESSION['cf_returndata']); ?>
         </div>    
      </div>
    </div>
    <?php include 'includes/footer.php'; ?>
  </div>
</body>
</html>
