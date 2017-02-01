<?php

require_once("Observer.php");
require_once("Observable.php");


$ul = new UserList();
$ul->addObserver( new UserListLogger() );
$ul->addCustomer( "Andrey" );


