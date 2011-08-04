<?php
require_once 'Zend/Db/Table/Abstract.php';
class Posts extends Zend_Db_Table_Abstract
{
    protected $_name = 'posts';
    protected $_primary = 'id';
}