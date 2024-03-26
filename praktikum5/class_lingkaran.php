<?php
class Lingkaran{
    /**
     * Access Modifier:
     * 1. Public: proeprti/method dapat diakses dimanapun
     * 2. private: properti/method hanya dapat diakses didalam class tsb.
     * 3. protected: mirip seperti private, tetapi dapat diakses oleh child class

     */

    // properti
    private $jari;
    const PHI = 3.14;

    // method: function yg berada di dalam class
    // constructor: method yg otomatis berjlaan ketika class di
    public function __construct($r)
    {
        $this->jari = $r;
    }

    public function getLuas(){
        return self::PHI * $this->jari * $this->jari;
    }

    public function getKeliling(){
        return 2 * SELF::PHI * $this->jari;
    }

}