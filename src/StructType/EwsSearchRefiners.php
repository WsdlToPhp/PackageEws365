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
     * @var \Ews\StructType\EwsSearchRefinerType[]
     */
    public $SearchRefiner;
    /**
     * Constructor method for SearchRefiners
     * @uses EwsSearchRefiners::setSearchRefiner()
     * @param \Ews\StructType\EwsSearchRefinerType[] $searchRefiner
     */
    public function __construct(array $searchRefiner = array())
    {
        $this
            ->setSearchRefiner($searchRefiner);
    }
    /**
     * Get SearchRefiner value
     * @return \Ews\StructType\EwsSearchRefinerType[]
     */
    public function getSearchRefiner()
    {
        return $this->SearchRefiner;
    }
    /**
     * Set SearchRefiner value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSearchRefinerType[] $searchRefiner
     * @return \Ews\StructType\EwsSearchRefiners
     */
    public function setSearchRefiner(array $searchRefiner = array())
    {
        foreach ($searchRefiner as $searchRefinersSearchRefinerItem) {
            // validation for constraint: itemType
            if (!$searchRefinersSearchRefinerItem instanceof \Ews\StructType\EwsSearchRefinerType) {
                throw new \InvalidArgumentException(sprintf('The SearchRefiner property can only contain items of \Ews\StructType\EwsSearchRefinerType, "%s" given', is_object($searchRefinersSearchRefinerItem) ? get_class($searchRefinersSearchRefinerItem) : gettype($searchRefinersSearchRefinerItem)), __LINE__);
            }
        }
        $this->SearchRefiner = $searchRefiner;
        return $this;
    }
    /**
     * Add item to SearchRefiner value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSearchRefinerType $item
     * @return \Ews\StructType\EwsSearchRefiners
     */
    public function addToSearchRefiner(\Ews\StructType\EwsSearchRefinerType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsSearchRefinerType) {
            throw new \InvalidArgumentException(sprintf('The SearchRefiner property can only contain items of \Ews\StructType\EwsSearchRefinerType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SearchRefiner[] = $item;
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
