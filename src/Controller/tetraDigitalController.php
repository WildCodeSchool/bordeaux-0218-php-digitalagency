<?php
/**
* Created by PhpStorm.
* User: root
* Date: 11/10/17
* Time: 16:07
* PHP version 7
*/

namespace Controller;




/**
* Class ItemController
*/
class tetraDigitalController extends AbstractController
{

  public function tetradigital()
  {




    return $this->twig->render('tetraDigital/index.html.twig');
  }






  public function storyTelling()
  {

    return $this->twig->render('tetraDigital/storytelling.html.twig');
  }

  public function adminStorytelling()
  {
    $file = "../src/View/tetraDigital/story.html.twig";

    $lecture = file_get_contents($file);


    if (isset($_POST['changeStory'])) {
      //  var_dump($_POST['changeStory']);
      $readFile = fopen($file, "w");
      fwrite($readFile, $_POST['changeStory']);
      fclose($readFile);
      header('location: http://localhost:8000/adminstorytelling ');
    }

    return $this->twig->render('tetraDigital/adminstorytelling.html.twig', ['lecture' => $lecture]);


  }

  public function login()
  {
    session_start();

    if(isset($_POST['login']) and isset($_POST['password'])){
      $_SESSION['login'] = $_POST['login'];
      $_SESSION['password'] = $_POST['password'];

      if($_POST['login'] == "admin" and $_POST['password'] == "azerty"){
        return $this->twig->render('Portfolio/adminCreate.html.twig');

      }}

      else{
        return $this->twig->render('tetraDigital/login.html.twig');

      }



    }}
