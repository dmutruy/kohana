<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-04-23 02:34:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\templates\v_reg.php [ 1 ] in C:\OpenServer\OpenServer\domains\kohana21\application\views\templates\v_reg.php:1
2015-04-23 02:34:51 --- DEBUG: #0 C:\OpenServer\OpenServer\domains\kohana21\application\views\templates\v_reg.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\O...', 1, Array)
#1 C:\OpenServer\OpenServer\domains\kohana21\system\classes\Kohana\View.php(62): include('C:\\OpenServer\\O...')
#2 C:\OpenServer\OpenServer\domains\kohana21\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\OpenServer\\O...', Array)
#3 C:\OpenServer\OpenServer\domains\kohana21\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\OpenServer\OpenServer\domains\kohana21\application\views\v_base.php(53): Kohana_View->__toString()
#5 C:\OpenServer\OpenServer\domains\kohana21\system\classes\Kohana\View.php(62): include('C:\\OpenServer\\O...')
#6 C:\OpenServer\OpenServer\domains\kohana21\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\OpenServer\\O...', Array)
#7 C:\OpenServer\OpenServer\domains\kohana21\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\OpenServer\domains\kohana21\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\OpenServer\domains\kohana21\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#11 C:\OpenServer\OpenServer\domains\kohana21\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\OpenServer\domains\kohana21\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\OpenServer\domains\kohana21\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\OpenServer\domains\kohana21\application\views\templates\v_reg.php:1
2015-04-23 02:35:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\templates\v_reg.php [ 7 ] in C:\OpenServer\OpenServer\domains\kohana21\application\views\templates\v_reg.php:7
2015-04-23 02:35:36 --- DEBUG: #0 C:\OpenServer\OpenServer\domains\kohana21\application\views\templates\v_reg.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\O...', 7, Array)
#1 C:\OpenServer\OpenServer\domains\kohana21\system\classes\Kohana\View.php(62): include('C:\\OpenServer\\O...')
#2 C:\OpenServer\OpenServer\domains\kohana21\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\OpenServer\\O...', Array)
#3 C:\OpenServer\OpenServer\domains\kohana21\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\OpenServer\OpenServer\domains\kohana21\application\views\v_base.php(53): Kohana_View->__toString()
#5 C:\OpenServer\OpenServer\domains\kohana21\system\classes\Kohana\View.php(62): include('C:\\OpenServer\\O...')
#6 C:\OpenServer\OpenServer\domains\kohana21\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\OpenServer\\O...', Array)
#7 C:\OpenServer\OpenServer\domains\kohana21\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\OpenServer\domains\kohana21\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\OpenServer\domains\kohana21\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#11 C:\OpenServer\OpenServer\domains\kohana21\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\OpenServer\domains\kohana21\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\OpenServer\domains\kohana21\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\OpenServer\domains\kohana21\application\views\templates\v_reg.php:7
2015-04-23 02:48:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH\classes\Controller\auth.php [ 39 ] in file:line
2015-04-23 02:48:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-23 02:55:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\templates\v_login.php [ 4 ] in C:\OpenServer\OpenServer\domains\kohana21\application\views\templates\v_login.php:4
2015-04-23 02:55:38 --- DEBUG: #0 C:\OpenServer\OpenServer\domains\kohana21\application\views\templates\v_login.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\O...', 4, Array)
#1 C:\OpenServer\OpenServer\domains\kohana21\system\classes\Kohana\View.php(62): include('C:\\OpenServer\\O...')
#2 C:\OpenServer\OpenServer\domains\kohana21\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\OpenServer\\O...', Array)
#3 C:\OpenServer\OpenServer\domains\kohana21\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\OpenServer\OpenServer\domains\kohana21\application\views\v_base.php(53): Kohana_View->__toString()
#5 C:\OpenServer\OpenServer\domains\kohana21\system\classes\Kohana\View.php(62): include('C:\\OpenServer\\O...')
#6 C:\OpenServer\OpenServer\domains\kohana21\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\OpenServer\\O...', Array)
#7 C:\OpenServer\OpenServer\domains\kohana21\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\OpenServer\domains\kohana21\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\OpenServer\domains\kohana21\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#11 C:\OpenServer\OpenServer\domains\kohana21\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\OpenServer\domains\kohana21\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\OpenServer\domains\kohana21\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\OpenServer\domains\kohana21\application\views\templates\v_login.php:4
2015-04-23 04:00:12 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ APPPATH\views\templates\v_cabinet.php [ 26 ] in file:line
2015-04-23 04:00:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line