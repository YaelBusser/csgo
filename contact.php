<?php
    require 'vendor/autoload.php';
    use \Mailjet\Resources;
    $mj = new \Mailjet\Client('0af05afe43654bd468e31aebfc741b4c','1cb28888e02ee05b41c330d49709f9bf',true,['version' => 'v3.1']);
    if(!empty($_POST['nom']) && !empty($_POST["email"]) && !empty($_POST["msg"])){
        $nom = htmlspecialchars($_POST["nom"]);
        $email = htmlspecialchars($_POST["email"]);
        $msg = htmlspecialchars($_POST["msg"]);
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $body = [
                'Messages' => [
                  [
                    'From' => [
                      'Email' => "mrmaclevine@gmail.com",
                      'Name' => "Yaël"
                    ],
                    'To' => [
                      [
                        'Email' => "mrmaclevine@gmail.com",
                        'Name' => "Yaël"
                      ]
                    ],
                    'Subject' => "Message de ".$nom,
                    'TextPart' => "eMail :".$email." - Message : ".$msg,
                  ]
                ]
              ];
              $response = $mj->post(Resources::$Email, ['body' => $body]);
              $response->success() && var_dump($response->getData());
              header("Location: index.php?msg=1");
        }
        else{
            echo "Email non valide";
        }
    }else{
        header("Location: index.php");
        die();
    }
?>