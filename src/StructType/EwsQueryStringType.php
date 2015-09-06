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
     * @var boolean
     */
    public $ResetCache;
    /**
     * The ReturnHighlightTerms
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var boolean
     */
    public $ReturnHighlightTerms;
    /**
     * The ReturnDeletedItems
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var boolean
     */
    public $ReturnDeletedItems;
    /**
     * Constructor method for QueryStringType
     * @uses EwsQueryStringType::set_()
     * @uses EwsQueryStringType::setResetCache()
     * @uses EwsQueryStringType::setReturnHighlightTerms()
     * @uses EwsQueryStringType::setReturnDeletedItems()
     * @param string $_
     * @param boolean $resetCache
     * @param boolean $returnHighlightTerms
     * @param boolean $returnDeletedItems
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
        $this->_ = $_;
        return $this;
    }
    /**
     * Get ResetCache value
     * @return boolean|null
     */
    public function getResetCache()
    {
        return $this->ResetCache;
    }
    /**
     * Set ResetCache value
     * @param boolean $resetCache
     * @return \Ews\StructType\EwsQueryStringType
     */
    public function setResetCache($resetCache = null)
    {
        $this->ResetCache = $resetCache;
        return $this;
    }
    /**
     * Get ReturnHighlightTerms value
     * @return boolean|null
     */
    public function getReturnHighlightTerms()
    {
        return $this->ReturnHighlightTerms;
    }
    /**
     * Set ReturnHighlightTerms value
     * @param boolean $returnHighlightTerms
     * @return \Ews\StructType\EwsQueryStringType
     */
    public function setReturnHighlightTerms($returnHighlightTerms = null)
    {
        $this->ReturnHighlightTerms = $returnHighlightTerms;
        return $this;
    }
    /**
     * Get ReturnDeletedItems value
     * @return boolean|null
     */
    public function getReturnDeletedItems()
    {
        return $this->ReturnDeletedItems;
    }
    /**
     * Set ReturnDeletedItems value
     * @param boolean $returnDeletedItems
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
