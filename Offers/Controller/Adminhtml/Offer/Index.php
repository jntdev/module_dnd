<?php

namespace Dnd\Offers\Controller\Adminhtml\Offer;

use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Backend\App\Action;

class Index extends Action
{
    const ADMIN_RESOURCE = 'Dnd_Offers::offer';

    /**
     * @var PageFactory
     */
    protected $resultPageFactory;

    /**
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context     $context,
        PageFactory $resultPageFactory
    )
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    /**
     * Index action
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Dnd_Offers::offer');
        $resultPage->addBreadcrumb(__('Offers'), __('Offers'));
        $resultPage->addBreadcrumb(__('Manage Offers'), __('Manage Offers'));
        $resultPage->getConfig()->getTitle()->prepend(__('Offer'));

        return $resultPage;
    }
}
