<?php
// TThis is my CONTROLLER

//Turn on Error reporting
ini_set('display_errors',TRUE);
error_reporting(E_ALL);

// Require the autoload file
require_once('vendor/autoload.php');
require_once ('model/data_layer.php');

// Create an instance of the Base class
$f3 = Base::instance();
$f3->set('DEBUG', 3);


//Define a default route (home page of our application)
$f3->route('GET /', function ($f3){
    // save variables
    $f3->set('username', 'jshmo');
    $f3->set('password', sha1('Passwrod01'));
    $f3->set('title','Working with Temlates');
    $f3->set('ftemp',67);

    $f3->set('color', 'purple', '#C71585');
    $f3->set('radius',10);

    // array variable
    $f3->set('veg', array('carrot','potato','lemon','peper'));

    $f3->set('fruits',getFruit());
    $f3->set('salaries',getSalary());
    $f3->set('num',10);
    $f3->set('preferredCustomer', true);

   // echo " My Food Page";
   $view = new Template();
  echo $view->render('views/info.html');

});


// Run fat free
$f3->run();

