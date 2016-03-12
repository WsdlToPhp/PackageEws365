<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QueryStringType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsQueryStringType extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The ResetCache
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $ResetCache;
    /**
     * The ReturnHighlightTerms
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $ReturnHighlightTerms;
    /**
     * The ReturnDeletedItems
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $ReturnDeletedItems;
    /**
     * Constructor method for QueryStringType
     * @uses EwsQueryStringType::set_()
     * @uses EwsQueryStringType::setResetCache()
     * @uses EwsQueryStringType::setReturnHighlightTerms()
     * @uses EwsQueryStringType::setReturnDeletedItems()
     * @param string $_
     * @param bool $resetCache
     * @param bool $returnHighlightTerms
     * @param bool $returnDeletedItems
     */
    public function __construct($_ = null, $resetCache = null, $returnHighlightTerms = null, $returnDeletedItems = null)
    {
        $this
            ->set_($_)
            ->setResetCache($resetCache)
            ->setReturnHighlightTerms($returnHighlightTerms)
            ->setReturnDeletedItems($returnDeletedItems);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Ews\StructType\EwsQueryStringType
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get ResetCache value
     * @return bool|null
     */
    public function getResetCache()
    {
        return $this->ResetCache;
    }
    /**
     * Set ResetCache value
     * @param bool $resetCache
     * @return \Ews\StructType\EwsQueryStringType
     */
    public function setResetCache($resetCache = null)
    {
        $this->ResetCache = $resetCache;
        return $this;
    }
    /**
     * Get ReturnHighlightTerms value
     * @return bool|null
     */
    public function getReturnHighlightTerms()
    {
        return $this->ReturnHighlightTerms;
    }
    /**
     * Set ReturnHighlightTerms value
     * @param bool $returnHighlightTerms
     * @return \Ews\StructType\EwsQueryStringType
     */
    public function setReturnHighlightTerms($returnHighlightTerms = null)
    {
        $this->ReturnHighlightTerms = $returnHighlightTerms;
        return $this;
    }
    /**
     * Get ReturnDeletedItems value
     * @return bool|null
     */
    public function getReturnDeletedItems()
    {
        return $this->ReturnDeletedItems;
    }
    /**
     * Set ReturnDeletedItems value
     * @param bool $returnDeletedItems
     * @return \Ews\StructType\EwsQueryStringType
     */
    public function setReturnDeletedItems($returnDeletedItems = null)
    {
        $this->ReturnDeletedItems = $returnDeletedItems;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsQueryStringType
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
