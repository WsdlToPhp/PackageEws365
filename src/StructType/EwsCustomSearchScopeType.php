<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomSearchScopeType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCustomSearchScopeType extends AbstractStructBase
{
    /**
     * The MailboxGuid
     * Meta informations extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    public $MailboxGuid;
    /**
     * The FolderScope
     * @var \Ews\StructType\EwsSearchFolderScopeType
     */
    public $FolderScope;
    /**
     * The IsDeepTraversal
     * @var bool
     */
    public $IsDeepTraversal;
    /**
     * Constructor method for CustomSearchScopeType
     * @uses EwsCustomSearchScopeType::setMailboxGuid()
     * @uses EwsCustomSearchScopeType::setFolderScope()
     * @uses EwsCustomSearchScopeType::setIsDeepTraversal()
     * @param string $mailboxGuid
     * @param \Ews\StructType\EwsSearchFolderScopeType $folderScope
     * @param bool $isDeepTraversal
     */
    public function __construct($mailboxGuid = null, \Ews\StructType\EwsSearchFolderScopeType $folderScope = null, $isDeepTraversal = null)
    {
        $this
            ->setMailboxGuid($mailboxGuid)
            ->setFolderScope($folderScope)
            ->setIsDeepTraversal($isDeepTraversal);
    }
    /**
     * Get MailboxGuid value
     * @return string|null
     */
    public function getMailboxGuid()
    {
        return $this->MailboxGuid;
    }
    /**
     * Set MailboxGuid value
     * @param string $mailboxGuid
     * @return \Ews\StructType\EwsCustomSearchScopeType
     */
    public function setMailboxGuid($mailboxGuid = null)
    {
        // validation for constraint: pattern
        if (!is_null($mailboxGuid) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $mailboxGuid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($mailboxGuid)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($mailboxGuid) && !is_string($mailboxGuid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mailboxGuid)), __LINE__);
        }
        $this->MailboxGuid = $mailboxGuid;
        return $this;
    }
    /**
     * Get FolderScope value
     * @return \Ews\StructType\EwsSearchFolderScopeType|null
     */
    public function getFolderScope()
    {
        return $this->FolderScope;
    }
    /**
     * Set FolderScope value
     * @param \Ews\StructType\EwsSearchFolderScopeType $folderScope
     * @return \Ews\StructType\EwsCustomSearchScopeType
     */
    public function setFolderScope(\Ews\StructType\EwsSearchFolderScopeType $folderScope = null)
    {
        $this->FolderScope = $folderScope;
        return $this;
    }
    /**
     * Get IsDeepTraversal value
     * @return bool|null
     */
    public function getIsDeepTraversal()
    {
        return $this->IsDeepTraversal;
    }
    /**
     * Set IsDeepTraversal value
     * @param bool $isDeepTraversal
     * @return \Ews\StructType\EwsCustomSearchScopeType
     */
    public function setIsDeepTraversal($isDeepTraversal = null)
    {
        $this->IsDeepTraversal = $isDeepTraversal;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsCustomSearchScopeType
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
