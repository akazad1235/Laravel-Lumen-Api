<?php

//$router->get('/{name}/{age}', 'testController@my');
$router->get('/', 'connectionDB@testConn');
$router->get('/select', 'DetailsController@DetailsSelect');




