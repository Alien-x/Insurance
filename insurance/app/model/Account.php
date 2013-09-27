<?php
namespace Insurance;
use Nette;

/**
 * Table Account
 */
class Account extends Repository {

    public function printAll() {

        return $this->findAll()->order('TariffID DESC');
    }

    public function printByID($id) {

        return $this->findBy(array('TariffID' => $id))->order('Balance DESC');
    }

    /*
    public function tasksOf(Nette\Database\Table\ActiveRow $list)
    {
        return $list->related('tariff')->order('created');
    }
    */

}