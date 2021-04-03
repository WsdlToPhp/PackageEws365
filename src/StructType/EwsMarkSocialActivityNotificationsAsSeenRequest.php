<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MarkSocialActivityNotificationsAsSeenRequest StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMarkSocialActivityNotificationsAsSeenRequest extends EwsBaseRequestType
{
    /**
     * The ItemIds
     * @var \ArrayType\EwsNonEmptyArrayOfItemIdsType|null
     */
    protected ?\ArrayType\EwsNonEmptyArrayOfItemIdsType $ItemIds = null;
    /**
     * Constructor method for MarkSocialActivityNotificationsAsSeenRequest
     * @uses EwsMarkSocialActivityNotificationsAsSeenRequest::setItemIds()
     * @param \ArrayType\EwsNonEmptyArrayOfItemIdsType $itemIds
     */
    public function __construct(?\ArrayType\EwsNonEmptyArrayOfItemIdsType $itemIds = null)
    {
        $this
            ->setItemIds($itemIds);
    }
    /**
     * Get ItemIds value
     * @return \ArrayType\EwsNonEmptyArrayOfItemIdsType|null
     */
    public function getItemIds(): ?\ArrayType\EwsNonEmptyArrayOfItemIdsType
    {
        return $this->ItemIds;
    }
    /**
     * Set ItemIds value
     * @param \ArrayType\EwsNonEmptyArrayOfItemIdsType $itemIds
     * @return \StructType\EwsMarkSocialActivityNotificationsAsSeenRequest
     */
    public function setItemIds(?\ArrayType\EwsNonEmptyArrayOfItemIdsType $itemIds = null): self
    {
        $this->ItemIds = $itemIds;
        
        return $this;
    }
}
