<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchMailboxesResponseMessageType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Response message type for the SearchMailboxes web method.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsSearchMailboxesResponseMessageType extends EwsResponseMessageType
{
    /**
     * The SearchMailboxesResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Mailboxes search result.
     * @var \Ews\StructType\EwsSearchMailboxesResultType
     */
    public $SearchMailboxesResult;
    /**
     * Constructor method for SearchMailboxesResponseMessageType
     * @uses EwsSearchMailboxesResponseMessageType::setSearchMailboxesResult()
     * @param \Ews\StructType\EwsSearchMailboxesResultType $searchMailboxesResult
     */
    public function __construct(\Ews\StructType\EwsSearchMailboxesResultType $searchMailboxesResult = null)
    {
        $this
            ->setSearchMailboxesResult($searchMailboxesResult);
    }
    /**
     * Get SearchMailboxesResult value
     * @return \Ews\StructType\EwsSearchMailboxesResultType|null
     */
    public function getSearchMailboxesResult()
    {
        return $this->SearchMailboxesResult;
    }
    /**
     * Set SearchMailboxesResult value
     * @param \Ews\StructType\EwsSearchMailboxesResultType $searchMailboxesResult
     * @return \Ews\StructType\EwsSearchMailboxesResponseMessageType
     */
    public function setSearchMailboxesResult(\Ews\StructType\EwsSearchMailboxesResultType $searchMailboxesResult = null)
    {
        $this->SearchMailboxesResult = $searchMailboxesResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSearchMailboxesResponseMessageType
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
