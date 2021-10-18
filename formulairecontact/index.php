<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulaire de Contact</title>
    <style>

    </style>
</head>
<?php




 if($_SERVER["REQUEST_METHOD"]== "POST" && !empty($_POST)){ 

    $message=filter_var(trim($_POST['message'],FILTER_SANITIZE_FULL_SPECIAL_CHARS)); 
    $email = filter_var(trim($_POST['email'],FILTER_SANITIZE_EMAIL));

    session_start();
    if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
    {
      echo "je viens d'envoyer un email Merci ";
      $to      = 'tati_zakaria@yahoo.fr';
      $subject = 'message du Site';
      $message = $message;
      $headers = 'From:' .$email . "\r\n" .
      "Reply-To: $email\r\n" .
      'X-Mailer: PHP/' . phpversion();
  
      //  mail($to,$message, $headers);
      mail($to, $subject, $message, $headers);
  
      $status = "<p style='color:#FFFFFF; font-size:20px'>
      <span style='background-color:#46ab4a;'>Votre code captcha est correct.</span></p>"; 
      
    }else{
      $status = "<p style='color:#FFFFFF; font-size:20px'>
      <span style='background-color:#FF0000;'>Le code captcha entré ne correspond pas! Veuillez réessayer.</span></p>";
    }
    echo $status;
    
        // if (empty($email)) { 
        //     $emailError = '<p style="color:red;">Please enter Email Address</p>';
        //     $valid = false; 
        // }
        // else if (!filter_var($email,FILTER_VALIDATE_EMAIL) ) { 
        //     $emailError = '<p style="color:red;">Please enter a valid Email Address</p>'; 
        //     $valid = false; 
        // }
        

        // if (empty($message)) { 
        //     $messageError = '<p style="color:red;">Please enter your message</p>'; 
        //     $valid = false;
        // }


 }else echo "Remplissez tous les champs SVP";
?>
<body>
            <section> 
                <h1> Formulaire de Contact</h1>   
                <form method="POST" action="index.php" id="formulaire" onsubmit="return check();" >
                    <?php 
                    // echo ($emailError);
                    // echo ($messageError);
                    ?>
                    <span id="erreur" style="color: red"></span>
                    <input type="mail"  id="mail" name="email" placeholder="Votre Mail SVP" required/>
                    <small id="small"></small>
                    <textarea  id="message" type="text" name="message" rows="3" placeholder="Message 200 cractéres Maximum"></textarea>
                    <small></small>
                    <h1>Entrez le code captcha</h1>
                    <input id="captcha" name="captcha" type="text">
                    <img src="captcha.php" style="vertical-align: middle;"/>
                    <button type="submit" name="button">Envoyer</button>
                    <div class="back">
                        <a href="../index.html" class="network">
                            Back

                        </a>
                    </div>

			    </form>
            </section>    
</body>

<script>

                    const formulaire = document.querySelector('#formulaire');
                    // console.log(formulaire.email);


                    formulaire.email.addEventListener('change',function() {
                        validEmail(this);   
                     });



                    
                    const validEmail= function (inputemail) {
                        let emailregExp = new RegExp('^[a-zA-Z0-9.-_]+[@]{1}[a-zA-Z0-9.-_]+[.]{1}[a-z]{2,10}$', 'g');
                        let testemail = emailregExp.test(inputemail.value);
                        // console.log(inputemail.value);
                        let small= inputemail.nextElementSibling;
                        if(testemail){
                            small.innerHTML= 'Adresse est valide';
                            small.setAttribute("style","color: white");
                            document.getElementById('message').disabled = false;
                            document.getElementById('captcha').disabled = false;
                        }
                        else{
                            small.innerHTML= 'Adresse est Non valide';
                            small.setAttribute("style", "color: red");
                            document.getElementById('message').disabled = true;
                            document.getElementById('captcha').disabled = true;

                        }



                    };
                    let message = document.getElementById('message');
                    formulaire.message.addEventListener('change',function() {
                        validMessage(this);   
                     });
                    // console.log(formulaire.message);
                    const validMessage = function (inputmessage) {
                        let messageregExp = new RegExp(/[A-Za-z0-9 ]/, 'gm');
                        let testmessage = messageregExp.test(inputmessage.value);
                        console.log(testmessage);

                        // déclaration de la ou on écrit important!!!
                        let small= document.getElementById('small');
                       
                        console.log(`${inputmessage.value.length}`); 
                        if (testmessage == true)
                        { 
                            if(inputmessage.value.length<=200)
                            {  
                              let small= inputmessage.nextElementSibling;
                         
                                small.innerHTML= 'Texte est valide';
                                small.setAttribute("style","color: white");
                                document.getElementById('captcha').disabled = false; 
                           
                            }
                            else
                            {
                                small.innerHTML= 'Texte est Non valide';
                                small.setAttribute("style", "color: red");
                                document.getElementById('captcha').disabled = true;
                            }
                        }        

                            

                    };

                    function check() {
                            let mail= document.getElementById('mail');
                            let message= document.getElementById('message');
                            let captcha= document.getElementById('captcha');
                                if (mail.value == '') {
                                    mail.focus();
                                    return false;
                                }
                                if (message.value == '') 
                                {
                                  document.getElementById('erreur').innerHTML='vous avez oublier du texte';
                                  message.focus();
                                   return false;
                                }
                                if (captcha.value == '') 
                                {
                                  document.getElementById('erreur').innerHTML='vous avez oublier du texte';
                                  captcha.focus();
                                   return false;
                                }
                                   
                            return true;
                        }





</script>
</html>