<?php

namespace Dnd\Offers\Model;

use \Magento\Framework\Model\AbstractModel;

class Offer extends AbstractModel
{
    const OFFER_ID = 'entity_id';

    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'offers'; // parent value is 'core_abstract'

    /**
     * Name of the event object
     *
     * @var string
     */
    protected $_eventObject = 'offer'; // parent value is 'object'

    /**
     * Name of object id field
     *
     * @var string
     */
    protected $_idFieldName = self::OFFER_ID; // parent value is 'id'


    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Dnd\Offers\Model\ResourceModel\Offer');
    }
}
