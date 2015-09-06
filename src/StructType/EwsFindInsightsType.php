<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindInsightsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFindInsightsType extends EwsBaseRequestType
{
    /**
     * The Restriction
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: t:SearchExpression
     * @var \Ews\StructType\EwsRestrictionType
     */
    public $Restriction;
    /**
     * The Paging
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsIndexedPageViewType
     */
    public $Paging;
    /**
     * Constructor method for FindInsightsType
     * @uses EwsFindInsightsType::setRestriction()
     * @uses EwsFindInsightsType::setPaging()
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
     * @return \Ews\StructType\EwsFindInsightsType
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
     * @return \Ews\StructType\EwsFindInsightsType
     */
    public function setPaging(\Ews\StructType\EwsIndexedPageViewType $paging = null)
    {
        $this->Paging = $paging;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsFindInsightsType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
