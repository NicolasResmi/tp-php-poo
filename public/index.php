<?php


// Affichage des erreurs PHP
error_reporting(E_ALL);
ini_set("display_errors", 1);

define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/..'));

require APPLICATION_PATH . '/lib/autoload.php'; // Charger le fichier de configuration 
require APPLICATION_PATH . '/config.php'; // Charger le fichier de configuration
// require APPLICATION_PATH . '/vendor/autoload.php';

use Lib\Client;

//Démarrage de la session en PHP
session_start();

// Initialisation du Router afin de capter les URLs disponibles
$router = new Router();

// Page d'accueil
$router->addRoute(array(
    'route'  => '^/$',
    'GET'   => array('IndexController', 'index') // Classe IndexController, Méthode index
));

$router->addRoute(array(
    'route'  => '^/admin$',
    'GET'   => array('AdminController', 'index') // Classe IndexController, Méthode index
));

$router->addRoute(array(
    'route'  => '^/admin/users$',
    'GET'   => array('AdminUserController', 'index') // Classe IndexController, Méthode index
));

$router->addRoute(array(
    'route'  => '^/admin/users/add$',
    'ALL'   => array('AdminUserController', 'add') // Classe IndexController, Méthode index
));


$router->addRoute(array(
    'route'  => '^/admin/users/update$',
    'ALL'   => array('AdminUserController', 'update') // Classe IndexController, Méthode index
));


$router->addRoute(array(
    'route'  => '^/admin/plats$',
    'GET'   => array('AdminPlatController', 'index') // Classe IndexController, Méthode index
));

$router->addRoute(array(
    'route'  => '^/admin/plats/add$',
    'ALL'   => array('AdminPlatController', 'add') // Classe IndexController, Méthode index
));

$router->addRoute(array(
    'route'  => '^/admin/plats/update$',
    'ALL'   => array('AdminPlatController', 'update') // Classe IndexController, Méthode index
));


$router->addRoute(array(
    'route'  => '^/plat$',
    'ALL'   => array('PlatController', 'get') // Classe IndexController, Méthode index
));

$router->addRoute(array(
    'route'  => '^/checkout',
    'ALL'   => array('PlatController', 'checkout') // Classe IndexController, Méthode index
));

$router->addRoute(array(
    'route'  => '^/payment',
    'ALL'   => array('PlatController', 'payment') // Classe IndexController, Méthode index
));

$router->addRoute(array(
    'route'  => '^/admin/commandes$',
    'GET'   => array('AdminCommandeController', 'index') // Classe IndexController, Méthode index
));

// Newsletter
$router->addRoute(array(
    'route'  => '^/admin/newsletters$',
    'GET'   => array('NewsletterController', 'index') // Classe IndexController, Méthode index
));

$router->addRoute(array(
    'route'  => '^/admin/newsletters/update$',
    'ALL'   => array('NewsletterController', 'update') // Classe IndexController, Méthode index
));

$router->addRoute(array(
    'route' => 'admin/newsletters/delete$',
    'ALL' => array('NewsletterController', 'delete')
));

// Paiement
$router->addRoute(array(
    'route' => '^/admin/paiement$',
    'GET' => array('PaiementController', 'index')
));

$router->addRoute(array(
    'route' => 'admin/paiement/update$',
    'ALL' => array('PaiementController', 'update')
));

// Authentification des membres
$router->addRoute(array(
    'route'  => '^/admin/login$',
    'GET'   => array('AdminController', 'login') // Classe MembreController, Méthode login
));

// Authentification des membres - envoie des données en POST
$router->addRoute(array(
    'route'  => '^/admin/login$',
    'POST'   => array('AdminController', 'loginPost') // Classe MembreController, Méthode loginPost
));

// Déconnexion de l'espace membre
$router->addRoute(array(
    'route'  => '^/admin/logout$',
    'GET'   => array('AdminController', 'logout')
));

// Afficher l'inscription
$router->addRoute(array(
    'route'  => '^/inscription$',
    'GET'   => array('InscriptionController', 'afficher')
));

// Sauvegarder l'inscription
$router->addRoute(array(
    'route'  => '^/inscription$',
    'POST'   => array('InscriptionController', 'sauvegarder')
));

// Afficher formulaire de paiement
$router->addRoute(array(
    'route'  => '^/paiement$',
    'GET'   => array('PaiementController', 'payer')
));

// Paiement confirmer
$router->addRoute(array(
    'route'  => '^/paiement/confirmed$',
    'GET'   => array('PaiementController', 'confirmed')
));

// Afficher le formulaire paiement
$router->addRoute(array(
    'route'  => '^/paiement$',
    'POST'   => array('PaiementController', 'confirmation')
));

// Newsletter
$router->addRoute(array(
    'route' => '^/newsletter$',
    'GET' => array('NewsletterController', 'afficher')
));

$router->addRoute(array(
    'route' => '^/newsletter$',
    'POST' => array('NewsletterController', 'abonnee')
));

$router->run();
