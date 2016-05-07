<?php

namespace HoraExtra;

class ApplicationTeste extends \PHPUnit_Framework_TestCase
{
    
    /**
     * @test
     */
    public function deveRetornarDezesseisCaracteresDeUmaSequenciaDeUmAQuatro ()
    {
        $letrasEsperadas = 16;
        $app = new Application(1, 4);
        
        $this->assertEquals($letrasEsperadas, $app->count());
    }
    
    /**
     * @test
     */
    public function deveRetornarQuarentaCaracteresDeUmaSequenciaDeUmADez ()
    {
        $letrasEsperadas = 40;
        $app = new Application(1, 10);
        
        $this->assertEquals($letrasEsperadas, $app->count());
    }
    
    /**
     * @test
     */
    public function deveRetornarDezoitoCaracteresDeUmaSequenciaDeVinteEUmAVinteEDois ()
    {
        $letrasEsperadas = 18;
        $app = new Application(21, 22);
        
        $this->assertEquals($letrasEsperadas, $app->count());
    }
    
    /**
     * @test
     */
    public function deveRetornar19662CaracteresDeUmaSequenciaDeUmAMil ()
    {
        $letrasEsperadas = 19662;
        $app = new Application(1, 1000);

        $this->assertEquals($letrasEsperadas, $app->count());
    }

}