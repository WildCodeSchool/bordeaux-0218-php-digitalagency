<?php
/**
* Created by PhpStorm.
* User: root
* Date: 11/10/17
* Time: 16:07
* PHP version 7
*/

namespace Controller;

use Model\PortfolioManager;


/**
* Class PortfolioController
*
*/
class PortfolioController extends AbstractController
{
    public function index()
  {
    $portfolioManager = new PortfolioManager();
    $portfolio = $portfolioManager->selectAll();
    return $this->twig->render('Portfolio/index.html.twig', ['portfolio' => $portfolio]);
  }

  public function adminCreate()
  {
      if(!empty($_POST) and !empty($_FILES)){
        $PortfolioManager = new PortfolioManager();

        $fileName= $_FILES['picture']['name'];

        	$file_tmp_name = $_FILES['picture']['tmp_name'];
        	$file_destination = '../public/assets/images/'.$fileName;
        	$fileextension = strrchr($fileName,'.');
        	$sizefile = $_FILES['picture']['size'];

          $extension= ['.jpg','.png'];

        	if(in_array($fileextension,$extension)){


        		if(move_uploaded_file($file_tmp_name,$file_destination)){

        			echo 'image uploadée ';

        		}
        	}

        	else{
        		echo 'une image de type jpeg ou png de taille inférieur a 100 Mo ';
        	}

          $_POST['picture'] =  $file_destination;


          $Portfolio = $PortfolioManager->insert($_POST);
          var_dump($_POST['description']);

          return $this->twig->render('Portfolio/adminCreate.html.twig',['Portfolio'=>$Portfolio]);
          
        }
        else{

          return $this->twig->render('Portfolio/adminCreate.html.twig');

        }


  }

 public function adminChange(){

    $portfolioManager = new PortfolioManager();
    $portfolio = $portfolioManager->selectAllPerso();


    return $this->twig->render('Portfolio/adminChange.html.twig', ['portfolio' => $portfolio]);




  }


  /**
  * Display Portfolio informations specified by $id
  *
  * @param  int $id
  *
  * @return string
  */


  /**
  * Display Portfolio edition page specified by $id
  *
  * @param  int $id
  *
  * @return string
  */


  /**
  * Display Portfolio creation page
  *
  * @return string
  */


  /**
  * Display Portfolio delete page
  *
  * @param  int $id
  *
  * @return string
  */



}
