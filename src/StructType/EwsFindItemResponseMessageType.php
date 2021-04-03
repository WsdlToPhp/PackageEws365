<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindItemResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFindItemResponseMessageType extends EwsResponseMessageType
{
    /**
     * The RootFolder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsFindItemParentType|null
     */
    protected ?\StructType\EwsFindItemParentType $RootFolder = null;
    /**
     * The HighlightTerms
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfHighlightTermsType|null
     */
    protected ?\ArrayType\EwsArrayOfHighlightTermsType $HighlightTerms = null;
    /**
     * Constructor method for FindItemResponseMessageType
     * @uses EwsFindItemResponseMessageType::setRootFolder()
     * @uses EwsFindItemResponseMessageType::setHighlightTerms()
     * @param \StructType\EwsFindItemParentType $rootFolder
     * @param \ArrayType\EwsArrayOfHighlightTermsType $highlightTerms
     */
    public function __construct(?\StructType\EwsFindItemParentType $rootFolder = null, ?\ArrayType\EwsArrayOfHighlightTermsType $highlightTerms = null)
    {
        $this
            ->setRootFolder($rootFolder)
            ->setHighlightTerms($highlightTerms);
    }
    /**
     * Get RootFolder value
     * @return \StructType\EwsFindItemParentType|null
     */
    public function getRootFolder(): ?\StructType\EwsFindItemParentType
    {
        return $this->RootFolder;
    }
    /**
     * Set RootFolder value
     * @param \StructType\EwsFindItemParentType $rootFolder
     * @return \StructType\EwsFindItemResponseMessageType
     */
    public function setRootFolder(?\StructType\EwsFindItemParentType $rootFolder = null): self
    {
        $this->RootFolder = $rootFolder;
        
        return $this;
    }
    /**
     * Get HighlightTerms value
     * @return \ArrayType\EwsArrayOfHighlightTermsType|null
     */
    public function getHighlightTerms(): ?\ArrayType\EwsArrayOfHighlightTermsType
    {
        return $this->HighlightTerms;
    }
    /**
     * Set HighlightTerms value
     * @param \ArrayType\EwsArrayOfHighlightTermsType $highlightTerms
     * @return \StructType\EwsFindItemResponseMessageType
     */
    public function setHighlightTerms(?\ArrayType\EwsArrayOfHighlightTermsType $highlightTerms = null): self
    {
        $this->HighlightTerms = $highlightTerms;
        
        return $this;
    }
}
