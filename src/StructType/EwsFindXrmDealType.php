<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindXrmDealType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFindXrmDealType extends EwsBaseRequestType
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
     * Constructor method for FindXrmDealType
     * @uses EwsFindXrmDealType::setRestriction()
     * @uses EwsFindXrmDealType::setPaging()
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
     * @return \Ews\StructType\EwsFindXrmDealType
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
     * @return \Ews\StructType\EwsFindXrmDealType
     */
    public function setPaging(\Ews\StructType\EwsIndexedPageViewType $paging = null)
    {
        $this->Paging = $paging;
        return $this;
    }
}
