<?php
App::uses ( 'UserAppModel', 'User.Model' );
App::uses ( 'Security', 'Utility' );
/**
 * User Model
 *
 * @property Role $Role
 */
class User extends UserAppModel {
	
	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public $validate = array (
			'role_id' => array (
					'numeric' => array (
							'rule' => array (
									'numeric' 
							) 
					// 'message' => 'Your custom message here',
					// 'allowEmpty' => false,
					// 'required' => false,
					// 'last' => false, // Stop validation after this rule
					// 'on' => 'create', // Limit validation to 'create' or 'update' operations
										) 
			),
			'username' => array (
					'notempty' => array (
							'rule' => array (
									'notempty' 
							) 
					// 'message' => 'Your custom message here',
					// 'allowEmpty' => false,
					// 'required' => false,
					// 'last' => false, // Stop validation after this rule
					// 'on' => 'create', // Limit validation to 'create' or 'update' operations
										) 
			),
			'password' => array (
					'notempty' => array (
							'rule' => array (
									'notempty' 
							) 
					// 'message' => 'Your custom message here',
					// 'allowEmpty' => false,
					// 'required' => false,
					// 'last' => false, // Stop validation after this rule
					// 'on' => 'create', // Limit validation to 'create' or 'update' operations
										) 
			),
			'enabled' => array (
					'boolean' => array (
							'rule' => array (
									'boolean' 
							),
							// 'message' => 'Your custom message here',
							'allowEmpty' => false 
					// 'required' => false,
					// 'last' => false, // Stop validation after this rule
					// 'on' => 'create', // Limit validation to 'create' or 'update' operations
										) 
			) 
	);
	
	// The Associations below have been created with all possible keys, those that are not needed can be removed
	
	/**
	 * belongsTo associations
	 *
	 * @var array
	 */
	public $belongsTo = array (
			'Role' => array (
					'className' => 'Role',
					'foreignKey' => 'role_id',
					'conditions' => '',
					'fields' => '',
					'order' => '' 
			) 
	);
	/**
	 * Antes salvar o registro
	 *
	 * @return boolean
	 */
	public function beforeSave($options = array()) {
		if(isset($this->data[$this->alias]['password'])) {
			$this->data[$this->alias]['password'] = Security::hash($this->data[$this->alias]['password'], 'blowfish');
			unset($this->data['User']['passwd']);
		}
	
		return true;
	}
}
