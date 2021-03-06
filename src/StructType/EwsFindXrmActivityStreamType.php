<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindXrmActivityStreamType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFindXrmActivityStreamType extends EwsBaseRequestType
{
    /**
     * The Restriction
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsRestrictionType
     */
    public $Restriction;
    /**
     * The Paging
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsIndexedPageViewType
     */
    public $Paging;
    /**
     * Constructor method for FindXrmActivityStreamType
     * @uses EwsFindXrmActivityStreamType::setRestriction()
     * @uses EwsFindXrmActivityStreamType::setPaging()
     * @param \Ews\StructType\EwsRestrictionType $restriction
     * @param \Ews\StructType\EwsIndexedPageViewType $paging
     */
    public function __construct(\Ews\StructType\EwsRestrictionType $restriction = null, \Ews\StructType\EwsIndexedPageViewType $paging = null)
    {
        $this
            ->setRestriction($restriction)
            ->setPaging($paging);
    }
    /**
     * Get Restriction value
     * @return \Ews\StructType\EwsRestrictionType|null
     */
    public function getRestriction()
    {
        return $this->Restriction;
    }
    /**
     * Set Restriction value
     * @param \Ews\StructType\EwsRestrictionType $restriction
     * @return \Ews\StructType\EwsFindXrmActivityStreamType
     */
    public function setRestriction(\Ews\StructType\EwsRestrictionType $restriction = null)
    {
        $this->Restriction = $restriction;
        return $this;
    }
    /**
     * Get Paging value
     * @return \Ews\StructType\EwsIndexedPageViewType|null
     */
    public function getPaging()
    {
        return $this->Paging;
    }
    /**
     * Set Paging value
     * @param \Ews\StructType\EwsIndexedPageViewType $paging
     * @return \Ews\StructType\EwsFindXrmActivityStreamType
     */
    public function setPaging(\Ews\StructType\EwsIndexedPageViewType $paging = null)
    {
        $this->Paging = $paging;
        return $this;
    }
}
