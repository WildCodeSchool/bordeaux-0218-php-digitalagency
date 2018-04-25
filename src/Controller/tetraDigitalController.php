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
*
*/
class tetraDigitalController extends AbstractController
{

  public function tetradigital()
  {




    return $this->twig->render('tetraDigital/index.html.twig');
  }


  public function login()
  { session_start();

      if(isset($_POST['login']) and isset($_POST['password'])){

        $_SESSION['login'] = $_POST['login'];
        $_SESSION['password'] = $_POST['password'];

        if($_POST['login'] == "admin" and $_POST['password'] == "azerty"){


        return $this->twig->render('Portfolio/adminCreate.html.twig');
      }
      }
      else{
    return $this->twig->render('tetraDigital/login.html.twig');
          }
  }

  }
