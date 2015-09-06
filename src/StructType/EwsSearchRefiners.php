<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchRefiners StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSearchRefiners extends AbstractStructBase
{
    /**
     * The SearchRefiner
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \Ews\StructType\EwsSearchRefinerType
     */
    public $SearchRefiner;
    /**
     * Constructor method for SearchRefiners
     * @uses EwsSearchRefiners::setSearchRefiner()
     * @param \Ews\StructType\EwsSearchRefinerType $searchRefiner
     */
    public function __construct(\Ews\StructType\EwsSearchRefinerType $searchRefiner = null)
    {
        $this
            ->setSearchRefiner($searchRefiner);
    }
    /**
     * Get SearchRefiner value
     * @return \Ews\StructType\EwsSearchRefinerType
     */
    public function getSearchRefiner()
    {
        return $this->SearchRefiner;
    }
    /**
     * Set SearchRefiner value
     * @param \Ews\StructType\EwsSearchRefinerType $searchRefiner
     * @return \Ews\StructType\EwsSearchRefiners
     */
    public function setSearchRefiner(\Ews\StructType\EwsSearchRefinerType $searchRefiner = null)
    {
        $this->SearchRefiner = $searchRefiner;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSearchRefiners
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
