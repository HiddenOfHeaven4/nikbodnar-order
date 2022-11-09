<?php
  $receiving_email_address = 'otto-gena@mail.ru';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_number;
  $contact->from_name = $_POST['name'];
  $contact->from_tel = $_POST['tel'];

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['tel'], 'Tel');

  echo $contact->send();
?>
