<?php
namespace Model;

/**
 *
 */
class PortfolioManager extends AbstractManager
{
    const TABLE = 'Portfolio';

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

      $picture = $data['picture'];
      $categories = $data['categories'] ;
      $description = $data['description'];
        //var_dump($data['picture']);
      $add = 'INSERT INTO '.$this->table.'(link, description, id_categories) VALUES(\''.$picture. '\',\'' .$description.'\',\'' .$categories.'\')';
        var_dump($add);

      $statement = $this->pdoConnection->prepare($add);
      $statement->setFetchMode(\PDO::FETCH_CLASS, $this->className);
      $statement->bindValue('link', $picture, \PDO::PARAM_INT);
      $statement->bindValue('description', $description, \PDO::PARAM_INT);
      $statement->bindValue('id_categories', $categories, \PDO::PARAM_INT);
      $statement->execute();

    }




    public function update(int $id, array $data)
    {

    }


    public function selectAllPerso()
    {
      return $this->pdoConnection->query('SELECT * FROM ' . $this->table. ' JOIN categories ON id_categories = categories.id GROUP BY Portfolio.id ORDER BY Portfolio.id DESC',
       \PDO::FETCH_CLASS,
       $this->className)->fetchAll();

    }



}
