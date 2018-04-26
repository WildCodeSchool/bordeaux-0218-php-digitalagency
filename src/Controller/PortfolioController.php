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
 */
class PortfolioController extends AbstractController
{
<<<<<<< HEAD
    public function index()
    {
        $portfolioManager = new PortfolioManager();
        $portfolio = $portfolioManager->selectAll();
        return $this->twig->render('Portfolio/index.html.twig', ['portfolio' => $portfolio]);
    }
=======
  public function index()
  {
    $portfolioManager = new PortfolioManager();
    $portfolio = $portfolioManager->selectAllPerso();
    // $vitrine = $portfolioManager->selectVitrine();




    return $this->twig->render('Portfolio/index.html.twig',
     ['portfolio' => $portfolio,


    ]


  );


  }

  public function adminCreate()
  {

    session_start();

        if(isset($_SESSION['login']) and isset($_SESSION['password'])){

    if(!empty($_POST) and !empty($_FILES)){
      $PortfolioManager = new PortfolioManager();

      $fileName= $_FILES['picture']['name'];

      $file_tmp_name = $_FILES['picture']['tmp_name'];
      $file_destination = '../public/assets/images/'.$fileName;
      $fileextension = strrchr($fileName,'.');
      $sizefile = $_FILES['picture']['size'];

      $extension= ['.jpg','.png','.jpeg','.JPEG','.PNG','.JPG'];

      if(in_array($fileextension,$extension)){


        if(move_uploaded_file($file_tmp_name,$file_destination)){

        $picture = 'image uploadée ';
>>>>>>> e1e7f02864ad7946c1c78b0dbd26aef799d63750

    public function adminCreate()
    {
        if (!empty($_POST) and !empty($_FILES)) {
            $PortfolioManager = new PortfolioManager();

            $fileName= $_FILES['picture']['name'];

<<<<<<< HEAD
            $file_tmp_name = $_FILES['picture']['tmp_name'];
            $file_destination = '../public/assets/images/'.$fileName;
            $fileextension = strrchr($fileName, '.');
            $sizefile = $_FILES['picture']['size'];
=======
      $_POST['picture'] = $fileName;

>>>>>>> e1e7f02864ad7946c1c78b0dbd26aef799d63750

            $extension= ['.jpg','.png'];

            if (in_array($fileextension, $extension)) {
                if (move_uploaded_file($file_tmp_name, $file_destination)) {
                    echo 'image uploadée ';
                }
            } else {
                echo 'une image de type jpeg ou png de taille inférieur a 100 Mo ';
            }

            $_POST['picture'] =  $file_destination;


            $Portfolio = $PortfolioManager->insert($_POST);


<<<<<<< HEAD
            return $this->twig->render('Portfolio/adminCreate.html.twig', ['Portfolio'=>$Portfolio]);
        } else {
            return $this->twig->render('Portfolio/adminCreate.html.twig');
        }
=======
    }}
    else {
      return $this->twig->render('tetraDigital/login.html.twig');
>>>>>>> e1e7f02864ad7946c1c78b0dbd26aef799d63750
    }

    public function adminChange()
    {

<<<<<<< HEAD
=======
  }

  public function adminChange(){

    session_start();

        if(isset($_SESSION['login']) and isset($_SESSION['password'])){
    $portfolioManager = new PortfolioManager();
    $portfolio = $portfolioManager->selectAllPerso();


    if(isset($_POST['validation'])){
>>>>>>> e1e7f02864ad7946c1c78b0dbd26aef799d63750

        $portfolioManager = new PortfolioManager();
        $portfolio = $portfolioManager->selectAllPerso();


        if (isset($_POST['validation'])) {
            $portfolioManager = new PortfolioManager();
            $portfolio = $portfolioManager->updatePerso($_POST);
            header('location: change');
            return $this->twig->render('Portfolio/adminChange.html.twig', ['portfolio' => $portfolio]);
        } else {
            return $this->twig->render('Portfolio/adminChange.html.twig', ['portfolio' => $portfolio]);
        }
    }
<<<<<<< HEAD


    /**
  * Display Portfolio informations specified by $id
  *
  * @param int $id
  *
  * @return string
  */
=======
    else{
      return $this->twig->render('Portfolio/adminChange.html.twig', ['portfolio' => $portfolio]);

>>>>>>> e1e7f02864ad7946c1c78b0dbd26aef799d63750

    }}

<<<<<<< HEAD
    /**
  * Display Portfolio edition page specified by $id
  *
  * @param int $id
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
  * @param int $id
  *
  * @return string
  */
}
=======
  else {
        return $this->twig->render('tetraDigital/login.html.twig');
  }

}}

>>>>>>> e1e7f02864ad7946c1c78b0dbd26aef799d63750
