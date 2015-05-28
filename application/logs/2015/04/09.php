<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-04-09 02:47:41 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\OpenServer\domains\kohana\system\classes\Kohana\View.php:145
2015-04-09 02:47:41 --- DEBUG: #0 C:\OpenServer\domains\kohana\system\classes\Kohana\View.php(145): Kohana_View->set_filename('template')
#1 C:\OpenServer\domains\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\OpenServer\domains\kohana\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\OpenServer\domains\kohana\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Base))
#6 C:\OpenServer\domains\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\kohana\system\classes\Kohana\View.php:145
2015-04-09 02:47:43 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\OpenServer\domains\kohana\system\classes\Kohana\View.php:145
2015-04-09 02:47:43 --- DEBUG: #0 C:\OpenServer\domains\kohana\system\classes\Kohana\View.php(145): Kohana_View->set_filename('template')
#1 C:\OpenServer\domains\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\OpenServer\domains\kohana\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\OpenServer\domains\kohana\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Base))
#6 C:\OpenServer\domains\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\kohana\system\classes\Kohana\View.php:145
2015-04-09 02:47:44 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\OpenServer\domains\kohana\system\classes\Kohana\View.php:145
2015-04-09 02:47:44 --- DEBUG: #0 C:\OpenServer\domains\kohana\system\classes\Kohana\View.php(145): Kohana_View->set_filename('template')
#1 C:\OpenServer\domains\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\OpenServer\domains\kohana\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\OpenServer\domains\kohana\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Base))
#6 C:\OpenServer\domains\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\kohana\system\classes\Kohana\View.php:145
2015-04-09 02:51:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\v_base.php [ 4 ] in C:\OpenServer\domains\kohana\application\views\v_base.php:4
2015-04-09 02:51:31 --- DEBUG: #0 C:\OpenServer\domains\kohana\application\views\v_base.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 4, Array)
#1 C:\OpenServer\domains\kohana\system\classes\Kohana\View.php(62): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Base))
#7 C:\OpenServer\domains\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\kohana\application\views\v_base.php:4
2015-04-09 02:51:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\v_base.php [ 4 ] in C:\OpenServer\domains\kohana\application\views\v_base.php:4
2015-04-09 02:51:32 --- DEBUG: #0 C:\OpenServer\domains\kohana\application\views\v_base.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 4, Array)
#1 C:\OpenServer\domains\kohana\system\classes\Kohana\View.php(62): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Base))
#7 C:\OpenServer\domains\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\kohana\application\views\v_base.php:4
2015-04-09 02:52:18 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\Controller\base.php [ 13 ] in file:line
2015-04-09 02:52:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-09 02:52:48 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\Controller\base.php [ 13 ] in file:line
2015-04-09 02:52:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-09 02:53:08 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\Controller\base.php [ 13 ] in file:line
2015-04-09 02:53:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-09 02:53:10 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\Controller\base.php [ 13 ] in file:line
2015-04-09 02:53:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-09 02:54:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: categories ~ APPPATH\views\v_base.php [ 41 ] in C:\OpenServer\domains\kohana\application\views\v_base.php:41
2015-04-09 02:54:42 --- DEBUG: #0 C:\OpenServer\domains\kohana\application\views\v_base.php(41): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 41, Array)
#1 C:\OpenServer\domains\kohana\system\classes\Kohana\View.php(62): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Base))
#7 C:\OpenServer\domains\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\kohana\application\views\v_base.php:41
2015-04-09 02:55:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: text ~ APPPATH\views\templates\v_index.php [ 2 ] in C:\OpenServer\domains\kohana\application\views\templates\v_index.php:2
2015-04-09 02:55:02 --- DEBUG: #0 C:\OpenServer\domains\kohana\application\views\templates\v_index.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 2, Array)
#1 C:\OpenServer\domains\kohana\system\classes\Kohana\View.php(62): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\OpenServer\domains\kohana\application\views\v_base.php(47): Kohana_View->__toString()
#5 C:\OpenServer\domains\kohana\system\classes\Kohana\View.php(62): include('C:\\OpenServer\\d...')
#6 C:\OpenServer\domains\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#7 C:\OpenServer\domains\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Base))
#11 C:\OpenServer\domains\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\kohana\application\views\templates\v_index.php:2
2015-04-09 02:56:08 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\Controller\base.php [ 30 ] in file:line
2015-04-09 02:56:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-09 02:56:22 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect(): Access denied for user ''@'localhost' (using password: NO) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\OpenServer\domains\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2015-04-09 02:56:22 --- DEBUG: #0 C:\OpenServer\domains\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\OpenServer\domains\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\OpenServer\domains\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('maintexts')
#3 C:\OpenServer\domains\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\OpenServer\domains\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\OpenServer\domains\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\OpenServer\domains\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\OpenServer\domains\kohana\application\classes\Controller\base.php(30): Kohana_ORM::factory('maintext')
#8 C:\OpenServer\domains\kohana\system\classes\Kohana\Controller.php(84): Controller_Base->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Base))
#11 C:\OpenServer\domains\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2015-04-09 02:57:01 --- CRITICAL: Database_Exception [ 1049 ]: Unknown database 'project_1' ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in C:\OpenServer\domains\kohana\modules\database\classes\Kohana\Database\MySQL.php:75
2015-04-09 02:57:01 --- DEBUG: #0 C:\OpenServer\domains\kohana\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('project_1')
#1 C:\OpenServer\domains\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 C:\OpenServer\domains\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 C:\OpenServer\domains\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('maintexts')
#4 C:\OpenServer\domains\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#5 C:\OpenServer\domains\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#6 C:\OpenServer\domains\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#7 C:\OpenServer\domains\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#8 C:\OpenServer\domains\kohana\application\classes\Controller\base.php(30): Kohana_ORM::factory('maintext')
#9 C:\OpenServer\domains\kohana\system\classes\Kohana\Controller.php(84): Controller_Base->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\OpenServer\domains\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Base))
#12 C:\OpenServer\domains\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\OpenServer\domains\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 C:\OpenServer\domains\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in C:\OpenServer\domains\kohana\modules\database\classes\Kohana\Database\MySQL.php:75
2015-04-09 02:58:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\classes\Controller\base.php [ 20 ] in file:line
2015-04-09 02:58:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-09 02:58:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: text ~ APPPATH\views\templates\v_index.php [ 2 ] in C:\OpenServer\domains\kohana\application\views\templates\v_index.php:2
2015-04-09 02:58:40 --- DEBUG: #0 C:\OpenServer\domains\kohana\application\views\templates\v_index.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 2, Array)
#1 C:\OpenServer\domains\kohana\system\classes\Kohana\View.php(62): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\OpenServer\domains\kohana\application\views\v_base.php(47): Kohana_View->__toString()
#5 C:\OpenServer\domains\kohana\system\classes\Kohana\View.php(62): include('C:\\OpenServer\\d...')
#6 C:\OpenServer\domains\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#7 C:\OpenServer\domains\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Base))
#11 C:\OpenServer\domains\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\kohana\application\views\templates\v_index.php:2
2015-04-09 03:30:32 --- CRITICAL: View_Exception [ 0 ]: The requested view v_main could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\OpenServer\domains\kohana\system\classes\Kohana\View.php:145
2015-04-09 03:30:32 --- DEBUG: #0 C:\OpenServer\domains\kohana\system\classes\Kohana\View.php(145): Kohana_View->set_filename('v_main')
#1 C:\OpenServer\domains\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('v_main', NULL)
#2 C:\OpenServer\domains\kohana\application\classes\Controller\Adminka\main.php(12): Kohana_View::factory('v_main')
#3 C:\OpenServer\domains\kohana\system\classes\Kohana\Controller.php(84): Controller_Adminka_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Adminka_Main))
#6 C:\OpenServer\domains\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\kohana\system\classes\Kohana\View.php:145