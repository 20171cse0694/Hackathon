<?php



namespace Md\Blog\Model\ResourceModel\Blog;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection {

protected function _construct() {

$this->_init('Md\Blog\Model\Blog', 'Md\Blog\Model\ResourceModel\Blog');

}

}