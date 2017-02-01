<?php

require_once("Observer.php");
require_once("Observable.php");

// my commit 1,
// my comment 2
$ul = new UserList();
$ul->addObserver( new UserListLogger() );
$ul->addCustomer( "Andrey" );


