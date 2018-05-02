<?php
/**
* Created by PhpStorm.
* User: root
* Date: 11/10/17
* Time: 16:07
* PHP version 7
*/

namespace Controller;

use Model\ArticleManager;


/**
* Class BlogController
*
*/
class BlogController extends AbstractController
{
  /*
  *
  *
  *
  * Display blog listing
  *
  * @return string
  */
  public function index()
  {
    $articleManager = new ArticleManager();
    $articles = $articleManager->selectAllBlog();
    return $this->twig->render('Blog/index.html.twig', ['articles' => $articles]);
  }

  /**
  * Display blog informations specified by $id
  *
  * @param  int $id
  *
  * @return string
  */
  public function details($id)
  {
    $articleManager = new ArticleManager();
    $article = $articleManager->selectOneById($id);

    return $this->twig->render('Blog/show.html.twig', ['article' => $article]);
  }

  /**
  * Display blog edition page specified by $id
  *
  * @param  int $id
  *
  * @return string
  */
  public function edit(int $id)
  {
    // TODO : edit blog with id $id
    return $this->twig->render('Blog/edit.html.twig', ['blog', $id]);
  }

  /**
  * Display blog creation page
  *
  * @return string
  */
  public function add()
  {
    // TODO : add a new blog
    return $this->twig->render('Blog/add.html.twig');
  }

  /**
  * Display blog delete page
  *
  * @param  int $id
  *
  * @return string
  */
  public function delete(int $id)
  {
    // TODO : delete the blog with id $id
    return $this->twig->render('Blog/index.html.twig');
  }

  public function portfolio()
  {
    $blogManager = new ArticleManager();
    $blogs = $blogManager->selectAll();

    return $this->twig->render('Blog/portfolio.html.twig', ['blogs' => $blogs]);
  }


  /**
   * @return string
   * @throws \Twig_Error_Loader
   * @throws \Twig_Error_Runtime
   * @throws \Twig_Error_Syntax
   */
  public function contact( )
  {

    if(isset($_POST['nom']) and  isset($_POST['prenom']) and isset($_POST['telephone']) and isset($_POST['mail']))
    {

      $mailer = new SendMail();

      $patternTelephone = "#^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$#";
      $patterNameLastname = "#^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$#";
      $emailPatterne = "#^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$#";


      $nom = strip_tags($_POST['nom']);
      $prenom = strip_tags($_POST['prenom']);
      $telephone = strip_tags($_POST['telephone']);
      $email = strip_tags($_POST['mail']);
      $message = strip_tags($_POST['message']);

      if(preg_match($patternTelephone,$telephone) and preg_match($patterNameLastname,$prenom) and preg_match($patterNameLastname,$nom)
      and preg_match($emailPatterne,$email)){


        $body =
        '<!doctype html>
        <html>
        <head> <title>contact client</title>
        </head>

        <body>
        <br><strong>nom:'.$nom.
        '</strong><br><strong>prénom:'.$prenom.
        '</strong><br><strong>téléphone:'.$telephone.
        '</strong><br><strong>mail: '.$email.
        '</strong><br> <p>'.$message.'</p>

        </body>
        </html>

        ';

        $mailer->send($email, 'Demande de Rappel Client', $body);

      }
      else{
        echo 'merci de saisir correctement le formulaire';

      }

    }
    return $this->twig->render('Blog/contact.html.twig');




  }
}
