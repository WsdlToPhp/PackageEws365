<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MimeContentUTF8Type StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMimeContentUTF8Type extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The CharacterSet
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $CharacterSet;
    /**
     * Constructor method for MimeContentUTF8Type
     * @uses EwsMimeContentUTF8Type::set_()
     * @uses EwsMimeContentUTF8Type::setCharacterSet()
     * @param string $_
     * @param string $characterSet
     */
    public function __construct($_ = null, $characterSet = null)
    {
        $this
            ->set_($_)
            ->setCharacterSet($characterSet);
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
     * @return \Ews\StructType\EwsMimeContentUTF8Type
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($_, true), gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get CharacterSet value
     * @return string|null
     */
    public function getCharacterSet()
    {
        return $this->CharacterSet;
    }
    /**
     * Set CharacterSet value
     * @param string $characterSet
     * @return \Ews\StructType\EwsMimeContentUTF8Type
     */
    public function setCharacterSet($characterSet = null)
    {
        // validation for constraint: string
        if (!is_null($characterSet) && !is_string($characterSet)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($characterSet, true), gettype($characterSet)), __LINE__);
        }
        $this->CharacterSet = $characterSet;
        return $this;
    }
}
