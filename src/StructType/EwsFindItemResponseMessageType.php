<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsFindItemParentType
     */
    public $RootFolder;
    /**
     * The HighlightTerms
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfHighlightTermsType
     */
    public $HighlightTerms;
    /**
     * Constructor method for FindItemResponseMessageType
     * @uses EwsFindItemResponseMessageType::setRootFolder()
     * @uses EwsFindItemResponseMessageType::setHighlightTerms()
     * @param \Ews\StructType\EwsFindItemParentType $rootFolder
     * @param \Ews\ArrayType\EwsArrayOfHighlightTermsType $highlightTerms
     */
    public function __construct(\Ews\StructType\EwsFindItemParentType $rootFolder = null, \Ews\ArrayType\EwsArrayOfHighlightTermsType $highlightTerms = null)
    {
        $this
            ->setRootFolder($rootFolder)
            ->setHighlightTerms($highlightTerms);
    }
    /**
     * Get RootFolder value
     * @return \Ews\StructType\EwsFindItemParentType|null
     */
    public function getRootFolder()
    {
        return $this->RootFolder;
    }
    /**
     * Set RootFolder value
     * @param \Ews\StructType\EwsFindItemParentType $rootFolder
     * @return \Ews\StructType\EwsFindItemResponseMessageType
     */
    public function setRootFolder(\Ews\StructType\EwsFindItemParentType $rootFolder = null)
    {
        $this->RootFolder = $rootFolder;
        return $this;
    }
    /**
     * Get HighlightTerms value
     * @return \Ews\ArrayType\EwsArrayOfHighlightTermsType|null
     */
    public function getHighlightTerms()
    {
        return $this->HighlightTerms;
    }
    /**
     * Set HighlightTerms value
     * @param \Ews\ArrayType\EwsArrayOfHighlightTermsType $highlightTerms
     * @return \Ews\StructType\EwsFindItemResponseMessageType
     */
    public function setHighlightTerms(\Ews\ArrayType\EwsArrayOfHighlightTermsType $highlightTerms = null)
    {
        $this->HighlightTerms = $highlightTerms;
        return $this;
    }
}
