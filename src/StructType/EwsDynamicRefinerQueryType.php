<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DynamicRefinerQueryType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDynamicRefinerQueryType extends AbstractStructBase
{
    /**
     * The RefinerQuery
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $RefinerQuery;
    /**
     * The TDRefinerId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $TDRefinerId;
    /**
     * Constructor method for DynamicRefinerQueryType
     * @uses EwsDynamicRefinerQueryType::setRefinerQuery()
     * @uses EwsDynamicRefinerQueryType::setTDRefinerId()
     * @param string $refinerQuery
     * @param int $tDRefinerId
     */
    public function __construct($refinerQuery = null, $tDRefinerId = null)
    {
        $this
            ->setRefinerQuery($refinerQuery)
            ->setTDRefinerId($tDRefinerId);
    }
    /**
     * Get RefinerQuery value
     * @return string
     */
    public function getRefinerQuery()
    {
        return $this->RefinerQuery;
    }
    /**
     * Set RefinerQuery value
     * @param string $refinerQuery
     * @return \Ews\StructType\EwsDynamicRefinerQueryType
     */
    public function setRefinerQuery($refinerQuery = null)
    {
        // validation for constraint: string
        if (!is_null($refinerQuery) && !is_string($refinerQuery)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($refinerQuery)), __LINE__);
        }
        $this->RefinerQuery = $refinerQuery;
        return $this;
    }
    /**
     * Get TDRefinerId value
     * @return int
     */
    public function getTDRefinerId()
    {
        return $this->TDRefinerId;
    }
    /**
     * Set TDRefinerId value
     * @param int $tDRefinerId
     * @return \Ews\StructType\EwsDynamicRefinerQueryType
     */
    public function setTDRefinerId($tDRefinerId = null)
    {
        // validation for constraint: int
        if (!is_null($tDRefinerId) && !is_numeric($tDRefinerId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($tDRefinerId)), __LINE__);
        }
        $this->TDRefinerId = $tDRefinerId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsDynamicRefinerQueryType
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
