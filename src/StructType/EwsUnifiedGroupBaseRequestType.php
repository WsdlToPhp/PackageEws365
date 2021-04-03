<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnifiedGroupBaseRequestType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
abstract class EwsUnifiedGroupBaseRequestType extends EwsBaseRequestType
{
    /**
     * The GroupIdentity
     * Meta information extracted from the WSDL
     * - ref: t:GroupIdentity
     * @var \StructType\EwsUnifiedGroupIdentity|null
     */
    protected ?\StructType\EwsUnifiedGroupIdentity $GroupIdentity = null;
    /**
     * Constructor method for UnifiedGroupBaseRequestType
     * @uses EwsUnifiedGroupBaseRequestType::setGroupIdentity()
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
     * @return \StructType\EwsUnifiedGroupBaseRequestType
     */
    public function setGroupIdentity(?\StructType\EwsUnifiedGroupIdentity $groupIdentity = null): self
    {
        $this->GroupIdentity = $groupIdentity;
        
        return $this;
    }
}
