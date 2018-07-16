<?php
/**
 * Created by PhpStorm.
 * User: mathias
 * Date: 14/07/2018
 * Time: 17:27
 */

class Adresse
{
    /**
     * @var int
     */
    private $numero;
    /**
     * @var string
     */
    private $rue;
    /**
     * @var int
     */
    private $codePostale;
    /**
     * @var string
     */
    private $ville;

    /**
     * Adresse constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return int
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param int $numero
     * @return Adresse
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * @return string
     */
    public function getRue()
    {
        return $this->rue;
    }

    /**
     * @param string $rue
     * @return Adresse
     */
    public function setRue($rue)
    {
        $this->rue = $rue;

        return $this;
    }

    /**
     * @return int
     */
    public function getCodePostale()
    {
        return $this->codePostale;
    }

    /**
     * @param int $codePostale
     * @return Adresse
     */
    public function setCodePostale($codePostale)
    {
        $this->codePostale = $codePostale;

        return $this;
    }

    /**
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param string $ville
     * @return Adresse
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }


}