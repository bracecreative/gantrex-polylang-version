<?php

require_once(dirname(__FILE__) . '/DocumentColumn.php');
require_once(dirname(__FILE__) . '/DocumentFilter.php');
require_once(dirname(__FILE__) . '/DocumentDirectoryController.php');

\Brace\DocumentDirectoryController::getInstance()->init();
