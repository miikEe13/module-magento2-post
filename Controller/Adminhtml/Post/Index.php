<?php

namespace RoiUp\Post\Controller\Adminhtml\Post;

class Index extends \Magento\Backend\App\Action
{
    const ADMIN_RESOURCE = 'RoiUp_Post::manage_posts';

	protected $resultPageFactory = false;

	public function __construct(
		\Magento\Backend\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $resultPageFactory
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
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('RoiUp_Post::manage_posts');
        $resultPage->addBreadcrumb(__('Jobs'), __('Jobs'));
        $resultPage->addBreadcrumb(__('Manage Departments'), __('Manage Departments'));
		$resultPage->getConfig()->getTitle()->prepend((__('Manage Posts')));

		return $resultPage;
	}


}