<?php
class PaiementController extends BaseController{
    public function payer($req, $res){
        $res -> html("paiement.php",array());
    }

    public function confirmation($req, $res){
        $paiement = new Paiement();
        print_r($_POST);
        $paiement-> insert(array(
            'card' => $_POST['card'],
            'expityMonth' => $_POST['expityMonth'],  
            'expityYear' => $_POST['expityYear'],  
            'cv' => $_POST['cv'],  
        ));
        
        $res -> html("paiement_confirmation.php",array());
    }

    public function index($req, $res){
        //Test si l'utilisateur est logged
        $this->isLogged(array("redirect" => "/admin/login"));
        $u = new Paiement();
        $rows = $u->find();
        $res->html("admin/paiements.php", array("paiements" => $rows));
      }
}