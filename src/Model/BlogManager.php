<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 07/03/18
 * Time: 18:20
 * PHP version 7
 */

namespace Model;

/**
 *
 */
class BlogManager extends AbstractManager
{
    const TABLE = 'Blog';

    /**
     *  Initializes this class.
     */
    public function __construct()
    {
        parent::__construct(self::TABLE);
    }

public function selectBlog(): array
    {
       
        return $this->pdoConnection->query('SELECT * FROM '
        .$this->table.
        ' ORDER BY id DESC LIMIT 5 ',
        
        \PDO::FETCH_CLASS,
      $this->className)->fetchAll();
    }



}
