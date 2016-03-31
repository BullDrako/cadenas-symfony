<?php
/**
 * Created by PhpStorm.
 * User: edgar
 * Date: 18/11/15
 * Time: 20:02
 */

namespace AppBundle\Services;


class CadenaService
{
    private $cadena1;
    private $cadena2;
    private $result;

    /**
     * @return mixed
     */
    public function getCadena1()
    {
        return $this->cadena1;
    }

    /**
     * @param mixed $cadena1
     */
    public function setCadena1($cadena1)
    {
        $this->cadena1 = $cadena1;
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param mixed $result
     */
    public function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return mixed
     */
    public function getCadena2()
    {
        return $this->cadena2;
    }

    /**
     * @param mixed $cadena2
     */
    public function setCadena2($cadena2)
    {
        $this->cadena2 = $cadena2;
    }

    /**
     * Juntar cadenas
     *
     * Description
     */

    public function juntar()
    {
        $this->result = $this->cadena1.$this->cadena2;
    }


    /**
     * Cadena al reves
     *
     * Description
     */
    public function reves()
    {
        $this->result = strrev($this->cadena1)." ".strrev($this->cadena2);
    }

    /**
     * Contar caracteres de la cadena
     *
     * Description
     */
    public function contar()
    {
        $this->result = " La Palabra 1 tiene ".strlen($this->cadena1)." caracter/es y la Palabra 2 tiene ".strlen($this->cadena2)." caracter/es";
    }

    /**
     * Convertir cadena a mayusculas
     */

    public function mayusculas()
    {
        $this->result = strtoupper($this->cadena1)."  ".strtoupper($this->cadena2);
    }

    public function contarvocales()
    {
        $arrayCadena1=str_split($this->getCadena1());
        $arrayCadena2=str_split($this->getCadena2());
        $n1=0;
        $n2=0;

        for($c=0; $c<strlen($this->cadena1); $c++){
            if($arrayCadena1[$c]== 'a' || $arrayCadena1[$c]== 'e' ||$arrayCadena1[$c]== 'i' ||$arrayCadena1[$c]== 'o' ||$arrayCadena1[$c]== 'u') {
                $n1++;
            }
        }

        for($c=0; $c<strlen($this->cadena2); $c++){
                if($arrayCadena2[$c]== 'a' || $arrayCadena2[$c]== 'e' ||$arrayCadena2[$c]== 'i' ||$arrayCadena2[$c]== 'o' ||$arrayCadena2[$c]== 'u'){
                    $n2++;

        }
    }
        $this->setResult('La cadena1 tiene'.$n1.'vocales y la cadena2 tiene'.$n2.'vocales');
}