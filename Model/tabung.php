<?php

class Tabung
{
    public $jari_jari;
    public $tinggi;

    public function __construct($jari_jari, $tinggi)
    {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }

    public function hitungVolume()
    {
        return 3.14 * pow($this->jari_jari, 2) * $this->tinggi;
    }
}
