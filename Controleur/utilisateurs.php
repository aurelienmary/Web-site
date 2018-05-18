<?php

include ('./Modele/requetes.utilisateurs.php');


if (!isset($_GET ['fonction']) || empty($_GET['fonction']))
    {
        $function ="accueil";
    }
else 
    {
        $function=$_GET['fonction'];
    }
    
switch ($function)
    {
        case "accueil":
            /*
             affichage de la vue de l'acceuil
             */
            $vue="accueil";
            $title="Accueil";
            break;
            
        case "connexion":
            /*
             affichage de la vue de connexion
             */
            $vue="connexion";
            $alerte=false;
            $title="Connexion";
            /*
             * ce code est appelï¿½ sie le formulaire ï¿½ ï¿½tï¿½ postï¿½
             */
            if (isset($_POST['identifiant']) and isset($_POST['password']))
            {
                $user=[
                        'email'=> $_POST['identifiant'],
                        'password' => cryptpassword($_POST['password'])
                        ];
            
                /*
                 * ce test verifie que les identifiant de l'utilisateur sont correcte
                 */
                if (login($bdd, $user)==true)
                {
                    
                    $vue="ajoutcapteur";
                    /*
                     * fonction qui rï¿½cupï¿½re la table de l'utilisateur dans la base de donnï¿½e
                     */
                    searchuser($bdd, $values);
                    /*
                     * fontion searchuser ï¿½ rï¿½aliser
                     */
                }
                else
                {
                    $alerte="l'identifiant ou le mot des passe sont éronnés";
                    echo($alerte);
                }
            }
            break;
            
        case "inscription":
            /*
             affichage de la vue inscription
             */
            $vue="inscription";
            $alerte=false;
            $title="Inscription";
            break;
    }
 
include ('./Vue/header.php');
include ('./Vue/'. $vue .'.php');
include ('./Vue/footer.php');