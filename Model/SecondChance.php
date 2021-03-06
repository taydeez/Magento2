<?php
/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to the MIT License
 * It is available through the world-wide-web at this URL:
 * https://tldrlegal.com/license/mit-license
 * If you are unable to obtain it through the world-wide-web, please send an email
 * to support@buckaroo.nl so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this module to newer
 * versions in the future. If you wish to customize this module for your
 * needs please contact support@buckaroo.nl for more information.
 *
 * @copyright Copyright (c) Buckaroo B.V.
 * @license   https://tldrlegal.com/license/mit-license
 */
namespace Buckaroo\Magento2\Model;

use Magento\Framework\Model\AbstractModel;

class SecondChance extends AbstractModel
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'buckaroo_magento2_second_chance';

    /**
     * @var string
     */
    protected $_eventObject = 'secondchance';

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Buckaroo\Magento2\Model\ResourceModel\SecondChance');
    }

    /**
     * {@inheritdoc}
     */
    public function setCreatedAt($createdAt)
    {
        return $this->setData('created_at', $createdAt);
    }

    /**
     * {@inheritdoc}
     */
    public function setStatus($status)
    {
        return $this->setData('status', $status);
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->getData('status');
    }

    /**
     * @return string
     */
    public function getOrderId()
    {
        return $this->getData('order_id');
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->getData('token');
    }

    /**
     * @return string
     */
    public function getStoreId()
    {
        return $this->getData('store_id');
    }
}
