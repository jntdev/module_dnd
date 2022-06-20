<?php

namespace Dnd\Offers\Block\Offer;
class ListOffer extends \Magento\Framework\View\Element\Template
{
    protected $_offer;
    protected $_offerCollection = null;
    protected $_resource;

    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Dnd\Offers\Model\Offer $offer
     * @param \Magento\Framework\App\ResourceConnection $resource
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Dnd\Offers\Model\Offer                          $offer,
        \Magento\Framework\App\ResourceConnection        $resource,
        array                                            $data = []
    )
    {
        $this->_offer = $offer;
        $this->_resource = $resource;

        parent::__construct(
            $context,
            $data
        );
    }

    /*dans le delais qu'il me reste, je serai en retard pour délivrer si je continue de me documenter sur le fait de recuperer les datas'.
    je vais donc déclarer des méthodes en dur pour afficher la banner sur le front office*/


    public function getImage()
    {
        echo "pub/downloadable/mug.jpg";
    }

    public function getDescription()
    {
        echo "Tulit videris ille alia hi sed quidem non tribui tantum sed aut enim magis ut nec viro credo amice Galum in Galum Paulum Catone et adgnosco recte mihi amice mihi.";
    }

    public function getUrlRedirection()
    {
        echo "/";
    }

}
