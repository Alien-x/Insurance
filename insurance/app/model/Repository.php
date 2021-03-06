<?php
namespace Insurance;
use Nette;

/**
 * Executes operations on database table
 */
abstract class Repository extends Nette\Object
{
    /** @var Nette\Database\Connection */
    protected $connection;

    public function __construct(Nette\Database\Connection $db)
    {
        $this->connection = $db;
    }

    /**
     * Returns object which represents database table.
     * @return Nette\Database\Table\Selection
     */
    protected function getTable()
    {
        // the name of table is extract from the name of class
        // removes namespace and the backslash
        $className = substr(get_class($this), strrpos(get_class($this), '\\') + 1);
        
        return $this->connection->table($className);
    }

    /**
     * Returns all rows from table
     * @return Nette\Database\Table\Selection
     */
    public function findAll()
    {
        return $this->getTable();
    }

    /**
     * Returns rows restricted by filter, e.g. array('name' => 'John').
     * @return Nette\Database\Table\Selection
     */
    public function findBy(array $by)
    {
        return $this->getTable()->where($by);
    }

}