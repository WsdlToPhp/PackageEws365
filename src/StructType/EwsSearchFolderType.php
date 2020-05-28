<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchFolderType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSearchFolderType extends EwsFolderType
{
    /**
     * The SearchParameters
     * Meta information extracted from the WSDL
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
}
