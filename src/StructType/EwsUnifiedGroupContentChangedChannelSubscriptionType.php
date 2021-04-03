<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsUnifiedGroupIdentity|null
     */
    protected ?\StructType\EwsUnifiedGroupIdentity $GroupIdentity = null;
    /**
     * Constructor method for UnifiedGroupContentChangedChannelSubscriptionType
     * @uses EwsUnifiedGroupContentChangedChannelSubscriptionType::setGroupIdentity()
     * @param \StructType\EwsUnifiedGroupIdentity $groupIdentity
     */
    public function __construct(?\StructType\EwsUnifiedGroupIdentity $groupIdentity = null)
    {
        $this
            ->setGroupIdentity($groupIdentity);
    }
    /**
     * Get GroupIdentity value
     * @return \StructType\EwsUnifiedGroupIdentity|null
     */
    public function getGroupIdentity(): ?\StructType\EwsUnifiedGroupIdentity
    {
        return $this->GroupIdentity;
    }
    /**
     * Set GroupIdentity value
     * @param \StructType\EwsUnifiedGroupIdentity $groupIdentity
     * @return \StructType\EwsUnifiedGroupContentChangedChannelSubscriptionType
     */
    public function setGroupIdentity(?\StructType\EwsUnifiedGroupIdentity $groupIdentity = null): self
    {
        $this->GroupIdentity = $groupIdentity;
        
        return $this;
    }
}
