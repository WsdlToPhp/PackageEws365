<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindXrmActivityStreamType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFindXrmActivityStreamType extends EwsBaseRequestType
{
    /**
     * The Restriction
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsRestrictionType|null
     */
    protected ?\StructType\EwsRestrictionType $Restriction = null;
    /**
     * The Paging
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsIndexedPageViewType|null
     */
    protected ?\StructType\EwsIndexedPageViewType $Paging = null;
    /**
     * Constructor method for FindXrmActivityStreamType
     * @uses EwsFindXrmActivityStreamType::setRestriction()
     * @uses EwsFindXrmActivityStreamType::setPaging()
     * @param \StructType\EwsRestrictionType $restriction
     * @param \StructType\EwsIndexedPageViewType $paging
     */
    public function __construct(?\StructType\EwsRestrictionType $restriction = null, ?\StructType\EwsIndexedPageViewType $paging = null)
    {
        $this
            ->setRestriction($restriction)
            ->setPaging($paging);
    }
    /**
     * Get Restriction value
     * @return \StructType\EwsRestrictionType|null
     */
    public function getRestriction(): ?\StructType\EwsRestrictionType
    {
        return $this->Restriction;
    }
    /**
     * Set Restriction value
     * @param \StructType\EwsRestrictionType $restriction
     * @return \StructType\EwsFindXrmActivityStreamType
     */
    public function setRestriction(?\StructType\EwsRestrictionType $restriction = null): self
    {
        $this->Restriction = $restriction;
        
        return $this;
    }
    /**
     * Get Paging value
     * @return \StructType\EwsIndexedPageViewType|null
     */
    public function getPaging(): ?\StructType\EwsIndexedPageViewType
    {
        return $this->Paging;
    }
    /**
     * Set Paging value
     * @param \StructType\EwsIndexedPageViewType $paging
     * @return \StructType\EwsFindXrmActivityStreamType
     */
    public function setPaging(?\StructType\EwsIndexedPageViewType $paging = null): self
    {
        $this->Paging = $paging;
        
        return $this;
    }
}
