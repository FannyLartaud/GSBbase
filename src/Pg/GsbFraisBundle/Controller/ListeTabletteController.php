<?php
namespace Pg\GsbFraisBundle\Controller;
require_once("include/fct.inc.php");
//require_once ("include/class.pdogsb.inc.php");
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
//use PdoGsb;
class ListeTabletteController extends Controller
{
    public function indexAction()
    {
        $session= $this->container->get('request')->getSession();
        $idVisiteur =  $session->get('id');
       // $pdo = PdoGsb::getPdoGsb();
        $pdo = $this->get('pg_gsb_frais.pdo');
        $lesTablette = $pdo->getLesTablette($idTab, $idVisiteur);
        if($this->get('request')->getMethod() == 'GET'){
            return $this->render('PgGsbFraisBundle:ListeTablette:ListeTablette.html.twig',
                array('lestablette'=>$lesTablette));
        }
        else{
            $request = $this->get('request');
            $lesTablette= $pdo->getLesTablette($idTab,$idVisiteur);
            $idTab= $request->request->get['idTab'];
            $memoireTab= $request->request->get['memoireTab'];
            $memoireExtTab= $request->request->get['memoireExtTab'];
            $osTablette= $request->request->get['osTablette'];
            $refVisiteur= $request->request->get['idVisiteur'];
            return $this->render('PgGsbFraisBundle:ListeTablette:ListeTablette.html.twig',
                array('idTab'=>$idTab,'memoiretab'=>$memoireTab,'memoireexttab'=>$memoireExtTab,
                    'ostablette'=>$osTablette,'refvisiteur'=>$refVisiteur));
            
        }
        
    }

}




?>