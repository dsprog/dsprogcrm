<?php
Router::connect('/admin/login', array(
	'plugin' => 'user', 'controller' => 'users', 'action' => 'login')
));