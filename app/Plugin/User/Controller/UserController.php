<?php
//App::uses('UserAppController', 'User.Controller');
/**
 * User Controller
 *
 */
class UserController extends UserAppController {
	public $components = array(
		'Session',
	);
/**
 * index method
 *
 * @return redirect to plugin users+ controller users + action index
 */
	public function index() {
		$this->redirect(array('plugin'=>'user','controller'=>'users', 'action' => 'index', 'admin' => true));
	}
}