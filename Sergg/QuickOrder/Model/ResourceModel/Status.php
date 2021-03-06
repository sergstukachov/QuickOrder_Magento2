<?php


namespace Sergg\QuickOrder\Model\ResourceModel;


use Sergg\QuickOrder\Api\Model\Schema\StatusSchemaInterface;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Status extends AbstractDb
{
    /**
     * Resource initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(StatusSchemaInterface::TABLE_NAME, StatusSchemaInterface::STATUS_ID_COL_NAME);
    }
}