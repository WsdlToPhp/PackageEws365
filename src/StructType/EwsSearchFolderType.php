<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsSearchParametersType|null
     */
    protected ?\StructType\EwsSearchParametersType $SearchParameters = null;
    /**
     * Constructor method for SearchFolderType
     * @uses EwsSearchFolderType::setSearchParameters()
     * @param \StructType\EwsSearchParametersType $searchParameters
     */
    public function __construct(?\StructType\EwsSearchParametersType $searchParameters = null)
    {
        $this
            ->setSearchParameters($searchParameters);
    }
    /**
     * Get SearchParameters value
     * @return \StructType\EwsSearchParametersType|null
     */
    public function getSearchParameters(): ?\StructType\EwsSearchParametersType
    {
        return $this->SearchParameters;
    }
    /**
     * Set SearchParameters value
     * @param \StructType\EwsSearchParametersType $searchParameters
     * @return \StructType\EwsSearchFolderType
     */
    public function setSearchParameters(?\StructType\EwsSearchParametersType $searchParameters = null): self
    {
        $this->SearchParameters = $searchParameters;
        
        return $this;
    }
}
