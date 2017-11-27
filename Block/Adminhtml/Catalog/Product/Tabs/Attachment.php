<?php

/**
 * @Author: Ngo Quang Cuong
 * @Date:   2017-11-27 07:41:39
 * @Last Modified by:   https://www.facebook.com/giaphugroupcom
 * @Last Modified time: 2017-11-27 07:41:50
 */

namespace PHPCuong\ProductAttachment\Block\Adminhtml\Catalog\Product\Tabs;

class Attachment extends \Magento\Backend\Block\Widget\Form\Generic
{
    /**
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param \Magento\Framework\Data\FormFactory $formFactory
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\Data\FormFactory $formFactory,
        array $data = []
    ) {
        parent::__construct($context, $registry, $formFactory, $data);
    }

    /**
     * Prepare form
     *
     * @return $this
     */
    protected function _prepareForm()
    {
        $form = $this->_formFactory->create(
            [
                'data' => [
                    'id' => 'product_attachments',
                    'action' => $this->getData('action'),
                    'method' => 'post'
                ]
            ]
        );

        $form->addField('new_field', 'file', [
            'label'     => __('Browse File'),
            'class'     => 'required-entry admin__field-label',
            'required'  => true,
            'name'      => 'new_field'
        ]);

        $form->setUseContainer(false);

        $this->setForm($form);

        return parent::_prepareForm();
    }
}
