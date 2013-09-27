<?php
namespace Insurance;
use Nette;

/**
 * Table Tariff
 */
class Tariff extends Repository
{

    public function printAll() {
        
        return $this->findAll()->order('QuoteCharge DESC');
    }


}