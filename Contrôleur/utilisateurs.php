<?php
include ('Modèle/requetes.utilisateurs.php');


if (!isset($_GET ['fonction']) || empty($_GET['fonction']))
    {
        $function ="accueil";
    }
else 
    {
        $function=$_GET['function'];
    }
    
switch ($function)
    {
        case "acceuil":
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
             * ce code est appelé sie le formulaire à été posté
             */
            if (isset($_POST['email']) and isset($_POST['password']))
            {
                $values=[
                        'email'=> $_POST['email'],
                        'password' => cryptpassword($_POST['password'])
                        ];
                /*
                 * ce test verifie que les identifiant de l'utilisateur sont correcte
                 */
                if (login($bdd, $values)==TRUE)
                /*
                 * fonction login à réaliser
                 */
                {
                    $vue="profil";
                    /*
                     * fonction qui récupère la table de l'utilisateur dans la base de donnée
                     */
                    searchuser($bdd, $values);
                    /*
                     * fontion searchuser à réaliser
                     */
                }
                else
                {
                    $alerte="l'identifiant ou le mot des passe sont éronnés";
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
 
include ('vues/header.php');
include ('vues/' . $vue . '.php');
include ('vues/footer.php');