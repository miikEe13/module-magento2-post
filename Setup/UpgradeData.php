<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
 
namespace RoiUp\Post\Setup;
 
use RoiUp\Post\Model\Post;
use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
 
/**
 * @codeCoverageIgnore
 */
class UpgradeData implements UpgradeDataInterface
{
 
    protected $_post;

 
    public function __construct(Post $post){
        $this->_post = $post;
    }
 
    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();
 
        // Action to do if module version is less than 1.0.1
        if (version_compare($context->getVersion(), '1.0.2') < 0) {
            $posts = [
                [
                    'post' => 'Test',
                    'featured_image' => 'image.png',
                    'country' => 'MX',
                    'status_post' => $this->_post->getEnableStatus(),
                    'pdf' =>'sample_pdf.pdf',

                ],
                [
                    'post' => 'Test 2',
                    'featured_image' => 'image.png',
                    'country' => 'MX',
                    'status_post' => $this->_post->getEnableStatus(),
                    'pdf' =>'sample_pdf.pdf',

                ],
                [
                    'post' => 'Test 3',
                    'featured_image' => 'image.png',
                    'country' => 'MX',
                    'status_post' => $this->_post->getEnableStatus(),
                    'pdf' =>'sample_pdf.pdf',

                ],
                [
                    'post' => 'Test 4',
                    'featured_image' => 'image.png',
                    'country' => 'MX',
                    'status_post' => $this->_post->getEnableStatus(),
                    'pdf' =>'sample_pdf.pdf',

                ]
            ];
 
            /**
             * Insert post
             */
            $postIds = array();
            foreach ($posts as $data) {
                $post = $this->_post->setData($data)->save();
                $postIds[] = $post->getId();
            }
        }
 
        $installer->endSetup();
    }
}