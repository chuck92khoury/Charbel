<?php
namespace Charbel\Offers\Block;
use \Charbel\Offers\Model\Offers as ModelOffers;
class Offer extends \Magento\Framework\View\Element\Template
{
    protected  $offers;
    public function __construct(\Magento\Framework\View\Element\Template\Context $context, ModelOffers $offers)

    {
        parent::__construct($context);
        $this->offers=$offers;
    }

//    public function getOffersCollection(){
//        $offers = $this->_offers->create();
//        $offers->addAttributeToSelect('*');
//        $offers->setPageSize(3); // fetching only 3 products
//        return $offers;
//       // return $offers->getOffersCollection();

  //  }
}
