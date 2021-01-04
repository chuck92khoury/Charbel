<?php

namespace Charbel\Offers\Model\ResourceModel\Offers;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'offer_id';
    public function _construct()
    {
        $this->_init('Charbel\Offers\Model\Offers', 'Charbel\Offers\Model\ResourceModel\Offers');
    }
}
