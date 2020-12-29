<?php

/** Declaration des constantes **/

define('ROOT', dirname(__DIR__));
define('DS', DIRECTORY_SEPARATOR);
define('VIEW_PATH', ROOT . DS . 'ressources' . DS . 'views' . DS);
define('ASSETS_PATH', DS . 'assets' . DS);

/** function helpers **/

/**
 * Method pathView
 *
 * @param string $view [explicite description]
 *
 * @return string
 */
function pathView (string $view):string
{
    $file = str_replace('.', DS, $view);
    return VIEW_PATH . $file . '.php';
}

/**
 * Method loadView
 *
 * @param string $view [explicite description]
 * @param $variables $variables [explicite description]
 *
 * @return void
 */
function loadView (string $view, $variables = [])
{
    extract($variables);

    $view = str_replace('.', DS, $view);

    ob_start();
        require pathview($view);
    $content = ob_get_clean();

    require pathview('layout.layout');

    return;
}



/**
 * Method asset
 *
 * @param string $file [explicite description]
 *
 * @return string
 */
function asset(string $file):string
{
    return ASSETS_PATH . $file;
}

/**
 * Method dd
 *
 * @param ...$variables $variables [explicite description]
 *
 * @return void
 */
function dd(...$variables)
{
    echo '<pre style="background: black; color: white">';

    foreach($variables as $variable) {
        print_r($variable);
    }

    echo '</pre>';
    die();
}