<?php

namespace app;

class VCard {
        
    /**
     * file
     *
     * @var mixed
     */
    private $file;
    
    /**
     * Method __construct
     *
     * @param $file $file [explicite description]
     *
     * @return void
     */
    public function __construct($file)
    {
        $this->file = $file;
    }
    
    /**
     * Method create
     *
     * @return void
     */
    public function create ()
    {
        dd($this->file);
    }

}