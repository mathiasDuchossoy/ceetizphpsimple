<?php
/**
 * Created by PhpStorm.
 * User: mathias
 * Date: 14/07/2018
 * Time: 17:35
 */

class Impot
{

    /**
     * @var float
     */
    private $value;

    /**
     * @var integer
     */
    private $pourcentage;

    /**
     * Impot constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param float $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return int
     */
    public function getPourcentage()
    {
        return $this->pourcentage;
    }

    /**
     * @param int $pourcentage
     * @return Impot
     */
    public function setPourcentage($pourcentage)
    {
        $this->pourcentage = $pourcentage;

        return $this;
    }


}