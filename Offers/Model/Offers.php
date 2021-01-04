<?php

namespace Charbel\Offers\Model;

class Offers extends \Magento\Framework\Model\AbstractModel
{
    public function _construct()
    {
        $this->_init('Charbel\Offers\Model\ResourceModel\Offers');
    }
}
