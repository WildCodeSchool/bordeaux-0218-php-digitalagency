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
 * Class Item
 *
 */
class Portfolio
{
    private $id;

    private $link;
    private $alt;
    private $categorie;
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
     * @return Item
     */
    public function setId($id): Item
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getLink(): string
    {
        return $this->link;
    }

    /**
     * @param string $link
     *
     */
    public function setLink($link):sting
    {
        $this->link = $link;

    }

    /**
     * @return string
     */
    public function getAlt(): string
    {
        return $this->alt;
    }

    /**
     * @param string $alt
     *
     */
    public function setAlt($alt):sting
    {
        $this->alt = $alt;

    }

    /**
     * @return string
     */
    public function getCategorie(): string
    {
        return $this->categorie;
    }

    /**
     * @param string $categorie
     *
     */
    public function setCategorie($categorie):sting
    {
        $this->categorie = $categorie;

    }
}
