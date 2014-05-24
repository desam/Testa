<?php
  require_once('recaptcha/recaptchalib.php');
  
  $privatekey = "6LcYE_QSAAAAAMQnbdthjQQ0AkEmN1uuGaH3Vq19";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")");
  } else {
    // Your code here to handle a successful verification
    
    $bool = CreateUser();
    if($bool)
   	 	echo '<script>window.location.replace("index.php?action=")</script>';
    else
	 	echo '<script>window.location.replace("index.php?action=createnewaccount")</script>';
    
  }

?>