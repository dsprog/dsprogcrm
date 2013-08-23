<?php
// Users
Router::connect('/user/:username', array(
	'plugin' => 'user', 'controller' => 'users', 'action' => 'view'), array('pass' => array('username')
));
