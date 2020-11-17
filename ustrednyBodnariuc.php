<?php

abstract class ustrednyBodnariuc implements iustrednyBodnariuc
{
    /**
     * abstraktni trida implemetujici rozhrani
     * funkce getNapetiBornaiuc vraci ulozenou hodnotu v napetiBodnariuc, jinak NULL
     * funkce setNapetiBodnriuc ulozi hodnotu parametru do $napetiBodnariuc
     * @napetiBodnariuc integer, vnitrni reprezentace promenne
     */
    protected $napetiBodnariuc;
    
    public function getNapetiBodnariuc()
    {
        return $this->napetiBodnariuc;
    }
    
    public function setNapetiBodnariuc($value)
    {
        $this->napetiBodnariuc = $value;
    }
};

?>