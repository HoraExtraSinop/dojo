<?php 

namespace HoraExtra;

use NumberFormatter;

class Application 
{
    private $sequenceInit;
    private $sequenceFinish;

    public function __construct ($sequenceInit, $sequenceFinish)
    {
        $this->sequenceInit = $sequenceInit;
        $this->sequenceFinish = $sequenceFinish;
    }
    
    public function count()
    {
        
        $formatter = new NumberFormatter("pt-br", NumberFormatter::SPELLOUT);        
        
        $numbers = '';
        for ($i = $this->sequenceInit; $i <= $this->sequenceFinish; $i++) {
             $numbers .= $formatter->format($i);
        }

        $numbers = str_replace(' ', '', $numbers);
    
        return iconv_strlen($numbers, 'UTF-8');
    }
}
