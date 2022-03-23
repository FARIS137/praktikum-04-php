<?php
class persegi_panjang{
   public $lebar;
    public $panjang;
    function __construct($lebar, $panjang)
    {
        $this->lebar = $lebar;
        $this->panjang = $panjang;
    }
    function getluas()
    {
        return $this->lebar * $this->panjang ;
    }
    function getkeliling()
    {
        return  2 * $this->lebar * $this->panjang ;
    }
}
?>