<?php
namespace Dnd\Offers\Model\ResourceModel\Offer;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{

    protected $_idFieldName = \Dnd\Offers\Model\Offer::OFFER_ID;

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Dnd\Offers\Model\Offer', 'Dnd\Offers\Model\ResourceModel\Offer');
    }

}
