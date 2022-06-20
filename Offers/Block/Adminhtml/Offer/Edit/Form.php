<?php

namespace Dnd\Offers\Block\Adminhtml\Offer\Edit;

use \Magento\Backend\Block\Widget\Form\Generic;

class Form extends Generic
{

    /**
     * @var \Magento\Store\Model\System\Store
     */
    protected $_systemStore;

    /**
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param \Magento\Framework\Data\FormFactory $formFactory
     * @param \Magento\Store\Model\System\Store $systemStore
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Framework\Registry             $registry,
        \Magento\Framework\Data\FormFactory     $formFactory,
        \Magento\Store\Model\System\Store       $systemStore,
        array                                   $data = []
    )
    {
        $this->_systemStore = $systemStore;
        parent::__construct($context, $registry, $formFactory, $data);
    }

    /**
     * Init form
     *
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('offer_form');
        $this->setTitle(__('Offer Information'));
    }

    /**
     * Prepare form
     *
     * @return $this
     */
    protected function _prepareForm()
    {
        /** @var \Dnd\Offers\Model\Offer $model */
        $model = $this->_coreRegistry->registry('Offers_offer');

        /** @var \Magento\Framework\Data\Form $form */
        $form = $this->_formFactory->create(
            [
                'data' =>
                    [
                        'id' => 'edit_form',
                        'action' => $this->getData('action'),
                        'method' => 'post'
                    ]
            ]
        );

        $form->setHtmlIdPrefix('offer_');
        $dateFormat = $this->_localeDate->getDateFormat(\IntlDateFormatter::SHORT);
        $timeFormat = $this->_localeDate->getTimeFormat(\IntlDateFormatter::SHORT);

        $fieldset = $form->addFieldset(
            'base_fieldset',
            [
                'legend' => __('General Information'),
                'class' => 'fieldset-wide'
            ]
        );

        if ($model->getId()) {
            $fieldset->addField(
                'entity_id',
                'hidden',
                ['name' => 'entity_id']);
        }

        $fieldset->addField(
            'label',
            'text',
            [
                'name' => 'label',
                'label' => __('Label'),
                'title' => __('Offer Label'),
                'required' => true
            ]
        );

        $fieldset->addField(
            'image',
            'text',
            [
                'name' => 'image',
                'label' => __('Image'),
                'title' => __('Offer Image'),
                'required' => true
            ]
        );

        $fieldset->addField(
            'url_redirection',
            'text',
            [
                'name' => 'url_redirection',
                'label' => __('Url redirection'),
                'title' => __('Offer Url'),
                'required' => true
            ]
        );

        $fieldset->addField(
            'selected_category',
            'text',
            [
                'name' => 'selected_category',
                'label' => __('Category'),
                'title' => __('Offer Category'),
                'required' => true
            ]
        );

        $fieldset->addField(
            'start_date_display',

            'date',
            [
                'name' => 'start_date_display',
                'label' => __('Date to start displaying'),
                'date_format' => $dateFormat,
                'time_format' => $timeFormat,
                'title' => __('Offer Start Date'),
                'required' => false
            ]
        );

        $fieldset->addField(
            'end_date_display',

            'date',

            [
                'name' => 'end_date_display',
                'label' => __('Date to end displaying'),
                'date_format' => $dateFormat,
                'time_format' => $timeFormat,
                'title' => __('Offer End Date'),
                'required' => false
            ]
        );

        $form->setValues($model->getData());
        $form->setUseContainer(true);
        $this->setForm($form);

        return parent::_prepareForm();
    }
}
