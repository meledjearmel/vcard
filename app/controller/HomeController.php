<?php

use app\VCard;
use Sabre\VObject\Component\VCalendar;

/**
 * HomeController
 */
class HomeController
{
    
    /**
     * file
     *
     * @var mixed
     */
    private $file;
    
    /**
     * Method index
     *
     * @return void
     */
    public function index()
    {
        $title = 'Acceuil | vCard';

        loadView('home', compact('title', ));
    }
    
    /**
     * Method load
     *
     * @return void
     */
    public function load()
    {
        if(!empty($_FILES)) {
            $vcard = new VCard($_FILES);
            $vcard->create();
        }
        header('Location: /');
    }
}