<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnifiedGroupContentChangedChannelSubscriptionType
 * StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUnifiedGroupContentChangedChannelSubscriptionType extends EwsChannelSubscriptionBaseType
{
    /**
     * The GroupIdentity
     * @var \Ews\StructType\EwsUnifiedGroupIdentity
     */
    public $GroupIdentity;
    /**
     * Constructor method for UnifiedGroupContentChangedChannelSubscriptionType
     * @uses EwsUnifiedGroupContentChangedChannelSubscriptionType::setGroupIdentity()
     * @param \Ews\StructType\EwsUnifiedGroupIdentity $groupIdentity
     */
    public function __construct(\Ews\StructType\EwsUnifiedGroupIdentity $groupIdentity = null)
    {
        $this
            ->setGroupIdentity($groupIdentity);
    }
    /**
     * Get GroupIdentity value
     * @return \Ews\StructType\EwsUnifiedGroupIdentity|null
     */
    public function getGroupIdentity()
    {
        return $this->GroupIdentity;
    }
    /**
     * Set GroupIdentity value
     * @param \Ews\StructType\EwsUnifiedGroupIdentity $groupIdentity
     * @return \Ews\StructType\EwsUnifiedGroupContentChangedChannelSubscriptionType
     */
    public function setGroupIdentity(\Ews\StructType\EwsUnifiedGroupIdentity $groupIdentity = null)
    {
        $this->GroupIdentity = $groupIdentity;
        return $this;
    }
}
