<?php
/**
 * Created by PhpStorm.
 * User: wcs
 * Date: 23/10/17
 * Time: 10:57
 * PHP version 7
 */

namespace Model;

/**
 * Class Article
 *
 */
class Article
{
    private $id;
    private $publication_date;
    private $writing_date;
    private $title;
    private $author;
    private $content;
    private $thumbnails;


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return Article
     */
    public function setId($id): Article
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     *
     * @return Article
     */
    public function setTitle($title):Article
    {
        $this->title = $title;

        return $this;
    }
    /**
     * @return mixed
     */
    public function getPublicationDate(): string
    {
        return $this->publication_date;
    }

    /**
     * @param mixed $title
     *
     * @return Article
     */
    public function setPublicationDate($publication_date):Article
    {
        $this->publication_date = $publication_date;

        return $this;
    }
    /**
     * @return mixed
     */
    public function getWritingDate(): string
    {
        return $this->writing_date;
    }

    /**
     * @param mixed $title
     *
     * @return Article
     */
    public function setWritingDate($writing_date):Article
    {
        $this->writing_date= $writing_date;

        return $this;
    }
    /**
    * @return mixed
    */
    public function getAuthor(): string
    {
      return $this->author;
    }

    /**
    * @param mixed $title
    *
    * @return Article
    */
    public function setAuthor($author):Article
    {
      $this->author= $author;

      return $this;
    }
    /**
    * @return mixed
    */
    public function getContent(): string
    {
      return $this->content;
    }

    /**
    * @param mixed $title
    *
    * @return Article
    */
    public function setContent($content):Article
    {
      $this->= $content;

      return $this;
    }
    /**
    * @return mixed
    */
    public function getThumbnails(): string
    {
      return $this->thumbnails;
    }

    /**
    * @param mixed $title
    *
    * @return Article
    */
    public function setThumbnails($thumbnails):Article
    {
      $this->= $thumbnails;

      return $this;
    }

}
