<?php

namespace Charbel\Offers\Model\ResourceModel;

class Offers extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('offers', 'offer_id');
    }
}
