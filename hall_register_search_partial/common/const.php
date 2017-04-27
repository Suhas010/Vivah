<!--const page
Author: Sanjay Bhosale

---------------------------------------------------------------------------------------------------
| Version Info  |  Date           | Autor              | Description                              |
| 0.1           | 27th Sept 2016  | Sanjay Bhosale     | All constants will be defined here		  |
---------------------------------------------------------------------------------------------------

-->

<?php

function get_db_config_file(){
	
	$PROJECT_BASE_DIR = dirname(dirname(__FILE__));
	$CONFIG_DIR = join("\\", array($PROJECT_BASE_DIR, 'configurations'));
	$db_config_file = join("\\", array($CONFIG_DIR, 'db_config.ini'));
	return $db_config_file;
}
?>