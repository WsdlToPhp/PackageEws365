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
     * Meta information extracted from the WSDL
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
     * This method is responsible for validating the values passed to the setSearchRefiner method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSearchRefiner method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSearchRefinerForArrayConstraintsFromSetSearchRefiner(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchRefinersSearchRefinerItem) {
            // validation for constraint: itemType
            if (!$searchRefinersSearchRefinerItem instanceof \Ews\StructType\EwsSearchRefinerType) {
                $invalidValues[] = is_object($searchRefinersSearchRefinerItem) ? get_class($searchRefinersSearchRefinerItem) : sprintf('%s(%s)', gettype($searchRefinersSearchRefinerItem), var_export($searchRefinersSearchRefinerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SearchRefiner property can only contain items of type \Ews\StructType\EwsSearchRefinerType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set SearchRefiner value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSearchRefinerType[] $searchRefiner
     * @return \Ews\StructType\EwsSearchRefiners
     */
    public function setSearchRefiner(array $searchRefiner = array())
    {
        // validation for constraint: array
        if ('' !== ($searchRefinerArrayErrorMessage = self::validateSearchRefinerForArrayConstraintsFromSetSearchRefiner($searchRefiner))) {
            throw new \InvalidArgumentException($searchRefinerArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The SearchRefiner property can only contain items of type \Ews\StructType\EwsSearchRefinerType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SearchRefiner[] = $item;
        return $this;
    }
}
