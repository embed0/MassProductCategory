<?php
/**
 * Created by PhpStorm.
 * User: The_Boss
 * Date: 2018-05-26
 * Time: 14:11
 */

namespace Aurora\MassProductCategory\Controller\Adminhtml\Index;

use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends \Magento\Backend\App\Action
{
    protected $resultPageFactory;

    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->addBreadcrumb(__('HelloWorld'), __('HelloWorld'));
        $resultPage->addBreadcrumb(__('Manage Subscriptions'), __('Manage Subscriptions'));
        $resultPage->getConfig()->getTitle()->prepend(__('Mass Product Category'));

        return $resultPage;
    }
}