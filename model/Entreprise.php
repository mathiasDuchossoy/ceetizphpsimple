<?php
/**
 * Created by PhpStorm.
 * User: mathias
 * Date: 14/07/2018
 * Time: 17:20
 */

abstract class Entreprise
{
    const pourcentageImpot = self::pourcentageImpot;

    /**
     * @var int
     */
    protected $siret;
    /**
     * @var string
     */
    protected $denomination;
    /**
     * @var Impot;
     */
    protected $impot;

    /**
     * Entreprise constructor.
     * @throws ReflectionException
     */
    public function __construct()
    {
        $Impot = new Impot();
        $currentClass = new ReflectionClass($this);
        $pourcentageImpot = $currentClass->getConstant('pourcentageImpot');
        echo $pourcentageImpot;
        if($pourcentageImpot !== false){
            $Impot->setPourcentage($pourcentageImpot);
        }

        $this->setImpot($Impot);
    }

    /**
     * @return Impot
     */
    public function getImpot()
    {
        return $this->impot;
    }

    /**
     * @param Impot $impot
     * @return Entreprise
     */
    public function setImpot($impot)
    {
        $this->impot = $impot;

        return $this;
    }

    /**
     * @param float $ca
     * @return Entreprise
     * function permettant de te connaitre l'impot à payé en fonction du ca
     */
    public function calculImpot($ca)
    {
        $this->getImpot()->setValue(($this->getImpot()->getPourcentage() * $ca )/ 100);

        return $this;
    }

    /**
     * @return int
     */
    public function getSiret()
    {
        return $this->siret;
    }

    /**
     * @param int $siret
     * @return Entreprise
     */
    public function setSiret($siret)
    {
        $this->siret = $siret;

        return $this;
    }

    /**
     * @return string
     */
    public function getDenomination()
    {
        return $this->denomination;
    }

    /**
     * @param string $denomination
     * @return Entreprise
     */
    public function setDenomination($denomination)
    {
        $this->denomination = $denomination;

        return $this;
    }


}