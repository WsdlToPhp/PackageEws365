<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfItemIdsType
     */
    public $ItemIds;
    /**
     * Constructor method for MarkSocialActivityNotificationsAsSeenRequest
     * @uses EwsMarkSocialActivityNotificationsAsSeenRequest::setItemIds()
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfItemIdsType $itemIds
     */
    public function __construct(\Ews\ArrayType\EwsNonEmptyArrayOfItemIdsType $itemIds = null)
    {
        $this
            ->setItemIds($itemIds);
    }
    /**
     * Get ItemIds value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfItemIdsType|null
     */
    public function getItemIds()
    {
        return $this->ItemIds;
    }
    /**
     * Set ItemIds value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfItemIdsType $itemIds
     * @return \Ews\StructType\EwsMarkSocialActivityNotificationsAsSeenRequest
     */
    public function setItemIds(\Ews\ArrayType\EwsNonEmptyArrayOfItemIdsType $itemIds = null)
    {
        $this->ItemIds = $itemIds;
        return $this;
    }
}
