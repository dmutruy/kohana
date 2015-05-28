<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-04-22 02:11:23 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant y - assumed 'y' ~ APPPATH\classes\Controller\index.php [ 34 ] in C:\OpenServer\domains\kohana21\application\classes\Controller\index.php:34
2015-04-22 02:11:23 --- DEBUG: #0 C:\OpenServer\domains\kohana21\application\classes\Controller\index.php(34): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\\OpenServer\\d...', 34, Array)
#1 C:\OpenServer\domains\kohana21\system\classes\Kohana\Controller.php(84): Controller_Index->action_insert()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\kohana21\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\OpenServer\domains\kohana21\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\kohana21\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\kohana21\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\kohana21\application\classes\Controller\index.php:34
2015-04-22 02:11:54 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant y - assumed 'y' ~ APPPATH\classes\Controller\index.php [ 34 ] in C:\OpenServer\domains\kohana21\application\classes\Controller\index.php:34
2015-04-22 02:11:54 --- DEBUG: #0 C:\OpenServer\domains\kohana21\application\classes\Controller\index.php(34): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\\OpenServer\\d...', 34, Array)
#1 C:\OpenServer\domains\kohana21\system\classes\Kohana\Controller.php(84): Controller_Index->action_insert()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\kohana21\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\OpenServer\domains\kohana21\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\kohana21\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\kohana21\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\kohana21\application\classes\Controller\index.php:34
2015-04-22 02:12:13 --- CRITICAL: ErrorException [ 2 ]: date() expects at least 1 parameter, 0 given ~ APPPATH\classes\Controller\index.php [ 34 ] in file:line
2015-04-22 02:12:13 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'date() expects ...', 'C:\\OpenServer\\d...', 34, Array)
#1 C:\OpenServer\domains\kohana21\application\classes\Controller\index.php(34): date()
#2 C:\OpenServer\domains\kohana21\system\classes\Kohana\Controller.php(84): Controller_Index->action_insert()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\kohana21\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 C:\OpenServer\domains\kohana21\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\kohana21\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\kohana21\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-04-22 02:12:49 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function NOW() ~ APPPATH\classes\Controller\index.php [ 34 ] in file:line
2015-04-22 02:12:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-22 02:12:51 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function NOW() ~ APPPATH\classes\Controller\index.php [ 34 ] in file:line
2015-04-22 02:12:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-22 02:13:07 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function now() ~ APPPATH\classes\Controller\index.php [ 34 ] in file:line
2015-04-22 02:13:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-22 02:13:22 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant y - assumed 'y' ~ APPPATH\classes\Controller\index.php [ 34 ] in C:\OpenServer\domains\kohana21\application\classes\Controller\index.php:34
2015-04-22 02:13:22 --- DEBUG: #0 C:\OpenServer\domains\kohana21\application\classes\Controller\index.php(34): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\\OpenServer\\d...', 34, Array)
#1 C:\OpenServer\domains\kohana21\system\classes\Kohana\Controller.php(84): Controller_Index->action_insert()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\kohana21\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\OpenServer\domains\kohana21\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\kohana21\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\kohana21\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\kohana21\application\classes\Controller\index.php:34
2015-04-22 03:30:35 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\templates\v_cats.php [ 1 ] in C:\OpenServer\domains\kohana21\application\views\templates\v_cats.php:1
2015-04-22 03:30:35 --- DEBUG: #0 C:\OpenServer\domains\kohana21\application\views\templates\v_cats.php(1): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\OpenServer\\d...', 1, Array)
#1 C:\OpenServer\domains\kohana21\system\classes\Kohana\View.php(62): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\kohana21\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\kohana21\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\OpenServer\domains\kohana21\application\views\v_base.php(53): Kohana_View->__toString()
#5 C:\OpenServer\domains\kohana21\system\classes\Kohana\View.php(62): include('C:\\OpenServer\\d...')
#6 C:\OpenServer\domains\kohana21\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#7 C:\OpenServer\domains\kohana21\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\kohana21\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\kohana21\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Products))
#11 C:\OpenServer\domains\kohana21\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\kohana21\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\kohana21\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\kohana21\application\views\templates\v_cats.php:1
2015-04-22 03:31:34 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\templates\v_cats.php [ 1 ] in C:\OpenServer\domains\kohana21\application\views\templates\v_cats.php:1
2015-04-22 03:31:34 --- DEBUG: #0 C:\OpenServer\domains\kohana21\application\views\templates\v_cats.php(1): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\OpenServer\\d...', 1, Array)
#1 C:\OpenServer\domains\kohana21\system\classes\Kohana\View.php(62): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\kohana21\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\kohana21\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\OpenServer\domains\kohana21\application\views\v_base.php(53): Kohana_View->__toString()
#5 C:\OpenServer\domains\kohana21\system\classes\Kohana\View.php(62): include('C:\\OpenServer\\d...')
#6 C:\OpenServer\domains\kohana21\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#7 C:\OpenServer\domains\kohana21\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\kohana21\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\kohana21\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Products))
#11 C:\OpenServer\domains\kohana21\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\kohana21\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\kohana21\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\kohana21\application\views\templates\v_cats.php:1
2015-04-22 03:47:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cats ~ APPPATH\views\templates\v_cats.php [ 2 ] in C:\OpenServer\domains\kohana21\application\views\templates\v_cats.php:2
2015-04-22 03:47:24 --- DEBUG: #0 C:\OpenServer\domains\kohana21\application\views\templates\v_cats.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 2, Array)
#1 C:\OpenServer\domains\kohana21\system\classes\Kohana\View.php(62): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\kohana21\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\kohana21\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\OpenServer\domains\kohana21\application\views\v_base.php(53): Kohana_View->__toString()
#5 C:\OpenServer\domains\kohana21\system\classes\Kohana\View.php(62): include('C:\\OpenServer\\d...')
#6 C:\OpenServer\domains\kohana21\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#7 C:\OpenServer\domains\kohana21\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\kohana21\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\kohana21\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Products))
#11 C:\OpenServer\domains\kohana21\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\kohana21\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\kohana21\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\kohana21\application\views\templates\v_cats.php:2
2015-04-22 03:48:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cats ~ APPPATH\views\templates\v_cats.php [ 2 ] in C:\OpenServer\domains\kohana21\application\views\templates\v_cats.php:2
2015-04-22 03:48:20 --- DEBUG: #0 C:\OpenServer\domains\kohana21\application\views\templates\v_cats.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 2, Array)
#1 C:\OpenServer\domains\kohana21\system\classes\Kohana\View.php(62): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\kohana21\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\kohana21\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\OpenServer\domains\kohana21\application\views\v_base.php(53): Kohana_View->__toString()
#5 C:\OpenServer\domains\kohana21\system\classes\Kohana\View.php(62): include('C:\\OpenServer\\d...')
#6 C:\OpenServer\domains\kohana21\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#7 C:\OpenServer\domains\kohana21\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\kohana21\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\kohana21\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Products))
#11 C:\OpenServer\domains\kohana21\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\kohana21\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\kohana21\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\kohana21\application\views\templates\v_cats.php:2
2015-04-22 03:48:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cats ~ APPPATH\views\templates\v_cats.php [ 2 ] in C:\OpenServer\domains\kohana21\application\views\templates\v_cats.php:2
2015-04-22 03:48:27 --- DEBUG: #0 C:\OpenServer\domains\kohana21\application\views\templates\v_cats.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 2, Array)
#1 C:\OpenServer\domains\kohana21\system\classes\Kohana\View.php(62): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\kohana21\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\kohana21\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\OpenServer\domains\kohana21\application\views\v_base.php(53): Kohana_View->__toString()
#5 C:\OpenServer\domains\kohana21\system\classes\Kohana\View.php(62): include('C:\\OpenServer\\d...')
#6 C:\OpenServer\domains\kohana21\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#7 C:\OpenServer\domains\kohana21\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\kohana21\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\kohana21\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Products))
#11 C:\OpenServer\domains\kohana21\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\kohana21\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\kohana21\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\kohana21\application\views\templates\v_cats.php:2
2015-04-22 03:49:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cats ~ APPPATH\views\templates\v_cats.php [ 2 ] in C:\OpenServer\domains\kohana21\application\views\templates\v_cats.php:2
2015-04-22 03:49:43 --- DEBUG: #0 C:\OpenServer\domains\kohana21\application\views\templates\v_cats.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 2, Array)
#1 C:\OpenServer\domains\kohana21\system\classes\Kohana\View.php(62): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\kohana21\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\kohana21\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\OpenServer\domains\kohana21\application\views\v_base.php(53): Kohana_View->__toString()
#5 C:\OpenServer\domains\kohana21\system\classes\Kohana\View.php(62): include('C:\\OpenServer\\d...')
#6 C:\OpenServer\domains\kohana21\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#7 C:\OpenServer\domains\kohana21\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\kohana21\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\kohana21\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Products))
#11 C:\OpenServer\domains\kohana21\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\kohana21\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\kohana21\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\kohana21\application\views\templates\v_cats.php:2
2015-04-22 03:49:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cats ~ APPPATH\views\templates\v_cats.php [ 2 ] in C:\OpenServer\domains\kohana21\application\views\templates\v_cats.php:2
2015-04-22 03:49:52 --- DEBUG: #0 C:\OpenServer\domains\kohana21\application\views\templates\v_cats.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 2, Array)
#1 C:\OpenServer\domains\kohana21\system\classes\Kohana\View.php(62): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\kohana21\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\kohana21\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\OpenServer\domains\kohana21\application\views\v_base.php(53): Kohana_View->__toString()
#5 C:\OpenServer\domains\kohana21\system\classes\Kohana\View.php(62): include('C:\\OpenServer\\d...')
#6 C:\OpenServer\domains\kohana21\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#7 C:\OpenServer\domains\kohana21\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\kohana21\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\kohana21\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Products))
#11 C:\OpenServer\domains\kohana21\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\kohana21\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\kohana21\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\kohana21\application\views\templates\v_cats.php:2
2015-04-22 04:27:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH\classes\Controller\feedback.php [ 16 ] in file:line
2015-04-22 04:27:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-22 04:52:25 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Model\feed.php [ 8 ] in file:line
2015-04-22 04:52:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-22 04:52:46 --- CRITICAL: ReflectionException [ 0 ]: Function not_emty() does not exist ~ SYSPATH\classes\Kohana\Validation.php [ 396 ] in C:\OpenServer\domains\kohana21\system\classes\Kohana\Validation.php:396
2015-04-22 04:52:46 --- DEBUG: #0 C:\OpenServer\domains\kohana21\system\classes\Kohana\Validation.php(396): ReflectionFunction->__construct('not_emty')
#1 C:\OpenServer\domains\kohana21\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#2 C:\OpenServer\domains\kohana21\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#3 C:\OpenServer\domains\kohana21\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#4 C:\OpenServer\domains\kohana21\application\classes\Controller\feedback.php(20): Kohana_ORM->save()
#5 C:\OpenServer\domains\kohana21\system\classes\Kohana\Controller.php(84): Controller_Feedback->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\OpenServer\domains\kohana21\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feedback))
#8 C:\OpenServer\domains\kohana21\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\OpenServer\domains\kohana21\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\OpenServer\domains\kohana21\index.php(118): Kohana_Request->execute()
#11 {main} in C:\OpenServer\domains\kohana21\system\classes\Kohana\Validation.php:396
2015-04-22 05:06:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'try' (T_TRY) ~ APPPATH\classes\Controller\feedback.php [ 20 ] in file:line
2015-04-22 05:06:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line