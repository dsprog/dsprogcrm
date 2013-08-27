<?php
App::uses('UserAppController', 'User.Controller');
/**
 * Users Controller
 *
 */
class UsersController extends UserAppController {
	public $components = array(
		'Session',
	);
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->redirect(array('plugin'=>'user','action' => 'index', 'admin' => true));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'), 'alert', array('class' => 'alert-success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'), 'alert', array('class' => 'alert-danger'));
			}
		}
		$roles = $this->User->Role->find('list');
		$this->set(compact('roles'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->User->exists($id)) {
			$this->Session->setFlash(__('O Usuário não existe.'), 'alert', array('class' => 'alert-danger'));
			$this->redirect(array('action' => 'index'));
			//throw new NotFoundException(__('Usuário Inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'), 'alert', array('class' => 'alert-success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'), 'alert', array('class' => 'alert-danger'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$roles = $this->User->Role->find('list');
		$this->set(compact('roles'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'), 'alert', array('class' => 'alert-success'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not deleted'), 'alert', array('class' => 'alert-danger'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * login method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function login() {
		if ($this->Auth->login()) {
			$this->redirect($this->Auth->redirect());
		} else {
			$this->Session->setFlash(__('Usuário ou senha invalido!'));
		}
	}

	public function logout() {
		$this->redirect($this->Auth->logout());
	}
}