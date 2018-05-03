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
class ArticleManager extends AbstractManager
{
    const TABLE = 'Article';

    /**
     *  Initializes this class.
     */
    public function __construct()
    {
        parent::__construct(self::TABLE);
    }

    public function delete(int $id)
    {

    }


    public function insert(array $data)
    {

        $publication_date = $data['publication_date'];
        $writing_date = $data['writing_date'];
        $title = $data['title'];
        $author = $data['author'];
        $content = $data['content'];
        $thumbnails = $data['thumbnails'];
        //var_dump($data['article']);
        $add = 'INSERT INTO '.$this->table.'(publication_date, writing_date, title, author, content, thumbnails)
        VALUES(\''.$publication_date. '\',\'' .$writing_date.'\',\'' .$title.'\',\'' .$author .'\',\'' .$content.'\',\'' .$thumbnails.'\')';

        $statement = $this->pdoConnection->prepare($add);
        $statement->setFetchMode(\PDO::FETCH_CLASS, $this->className);
        $statement->bindValue('publication date', $publication_date, \PDO::PARAM_INT);
        $statement->bindValue('writing date', $writing_date, \PDO::PARAM_INT);
        $statement->bindValue('title', $title, \PDO::PARAM_INT);
        $statement->bindValue('author', $author, \PDO::PARAM_INT);
        $statement->bindValue('content', $content, \PDO::PARAM_INT);
        $statement->bindValue('thumbnails', $thumbnails, \PDO::PARAM_INT);
        $statement->execute();
    }
    public function update(int $id, array $data)
    {

    }
    public function selectAllBlog()
    {

        return $this->pdoConnection->query('SELECT Article.id, publication_date, writing_date, title, author, content, thumbnails
      FROM ' . $this->table);


    }
}
