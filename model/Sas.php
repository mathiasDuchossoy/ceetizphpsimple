<?php
/**
 * Created by PhpStorm.
 * User: mathias
 * Date: 14/07/2018
 * Time: 17:26
 */

final class Sas extends Entreprise
{
    const pourcentageImpot = 33;
    /**
     * @var Adresse
     */
    private $siegeSocialeAdresse;

    /**
     * @return Adresse
     */
    public function getSiegeSocialeAdresse()
    {
        return $this->siegeSocialeAdresse;
    }

    /**
     * @param Adresse $siegeSocialeAdresse
     * @return Sas
     */
    public function setSiegeSocialeAdresse($siegeSocialeAdresse)
    {
        $this->siegeSocialeAdresse = $siegeSocialeAdresse;

        return $this;
    }
}