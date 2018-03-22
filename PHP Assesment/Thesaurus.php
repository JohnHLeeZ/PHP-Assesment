<?php

class Thesaurus
{
    private $library;
    
    function Thesaurus()
    {
       $this->library = array("buy" => array("purchase"), "big" => array("great", "large"));
    }
    
    public function getSynonyms($word)
    {
       $wordArray = array("word"=> $word);
       $synonymArray = array("synonyms"=> (array_key_exists($word, $this->library)) ? $this->library[$word] : [] );
	    
       return json_encode($wordArray + $synonymArray);
    }

}

$theSaurus = new Thesaurus;
echo $theSaurus->getSynonyms("big");

?>
