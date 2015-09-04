<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchFolderType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsSearchFolderType extends EwsFolderType
{
    /**
     * The SearchParameters
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsSearchParametersType
     */
    public $SearchParameters;
    /**
     * Constructor method for SearchFolderType
     * @uses EwsSearchFolderType::setSearchParameters()
     * @param \Ews\StructType\EwsSearchParametersType $searchParameters
     */
    public function __construct(\Ews\StructType\EwsSearchParametersType $searchParameters = null)
    {
        $this
            ->setSearchParameters($searchParameters);
    }
    /**
     * Get SearchParameters value
     * @return \Ews\StructType\EwsSearchParametersType|null
     */
    public function getSearchParameters()
    {
        return $this->SearchParameters;
    }
    /**
     * Set SearchParameters value
     * @param \Ews\StructType\EwsSearchParametersType $searchParameters
     * @return \Ews\StructType\EwsSearchFolderType
     */
    public function setSearchParameters(\Ews\StructType\EwsSearchParametersType $searchParameters = null)
    {
        $this->SearchParameters = $searchParameters;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSearchFolderType
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
