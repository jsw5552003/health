<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-19 14:01:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\Hello.php [ 10 ] in file:line
2014-10-19 14:01:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-19 14:01:35 --- CRITICAL: View_Exception [ 0 ]: The requested view site could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\health_fitness\system\classes\Kohana\View.php:137
2014-10-19 14:01:35 --- DEBUG: #0 C:\xampp\htdocs\health_fitness\system\classes\Kohana\View.php(137): Kohana_View->set_filename('site')
#1 C:\xampp\htdocs\health_fitness\system\classes\Kohana\View.php(30): Kohana_View->__construct('site', NULL)
#2 C:\xampp\htdocs\health_fitness\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('site')
#3 C:\xampp\htdocs\health_fitness\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\health_fitness\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hello))
#6 C:\xampp\htdocs\health_fitness\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\health_fitness\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\health_fitness\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\health_fitness\system\classes\Kohana\View.php:137