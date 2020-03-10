<?php

namespace RoiUp\Post\Model;

/**
 * Post Model
 *
 * @author      Miguel Angel
 */
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'roiup_post_module';

	protected $_cacheTag = 'roiup_post_module';

	protected $_eventPrefix = 'roiup_post_module';

	protected function _construct()
	{
		$this->_init('RoiUp\Post\Model\ResourceModel\Post');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}