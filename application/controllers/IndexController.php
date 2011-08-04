<?php

class IndexController extends Zend_Controller_Action
{
	protected $_db;
	protected $_table;
	
    public function init()
    {
    	$options = array(
		    'host'     => '127.0.0.1',
		    'username' => 'root',
		    'password' => 'password',
		    'dbname'   => 'test'
		);
		
    	$this->_db = Zend_Db::factory('PDO_MYSQL', $options);
    	require_once APPLICATION_PATH . '/models/Posts.php';
    	$this->_table = new Posts(array('db' => $this->_db));
    }

    public function indexAction()
    {
		$this->view->row = $this->_table->fetchRow();
    }
}