<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/settings.php');
require_once (DOC_ROOT.'/core/functions/init.php');

init('core/Syslogger');

init('core/classes/MPBController');
init('core/classes/MPBModel');
init('core/classes/MPBView');

init('core/Router');

$router = new Router();