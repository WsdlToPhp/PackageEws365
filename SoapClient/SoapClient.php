<?php

namespace SoapClient;

/**
 * This class can be overridden at your will.
 * Its only purpose is to show you how you can use your own SoapClient client.
 */
class SoapClient extends \SoapClient
{
    /**
     * @var string
     */
    protected $lastModifiedRequest;
    /**
     * @param string $request
     * @param string $location
     * @param string $action
     * @param string $version
     * @param number $one_way
     * @return mixed
     */
    public function __doRequest($request, $location, $action, $version, $one_way = 0)
    {
        $this->removeEmptyTags($request);
        return parent::__doRequest($this->__getLastRequest(), $location, $action, $version, $one_way);
    }
    /**
     * Returns last request
     * @see SoapClient::__getLastRequest()
     * @return string
     */
    public function __getLastRequest()
    {
        return $this->lastModifiedRequest;
    }
    /**
     * Sets last request values
     * @param string $_lastRequest
     * @return string
     */
    public function __setLastRequest($lastRequest)
    {
        return ($this->lastModifiedRequest = $lastRequest);
    }
    /**
     * Removes empty tags from XML
     * @param string $xml
     * @param array $exceptTags
     * @return string
     */
    private function removeEmptyTags($xml, $exceptTags = array())
    {
        if (!empty($xml)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($xml) && $dom->hasChildNodes()) {
                $mainNode = $dom->childNodes->item(0);
                self::removeEmptyTagsFromDomNode($mainNode, $exceptTags);
                $xml = $dom->saveXML($mainNode);
            }
        }
        return $this->__setLastRequest($xml);
    }
    /**
     * Removes empty tags from \DOMNode
     * @uses RemoveEmptyRequestTags::removeEmptyTagsFromDomNode()
     * @param \DOMNode $domNode
     * @return void
     */
    private static function removeEmptyTagsFromDomNode(\DOMNode &$domNode, $exceptTags = array())
    {
        if ($domNode->hasChildNodes()) {
            foreach ($domNode->childNodes as $childNode) {
                self::removeEmptyTagsFromDomNode($childNode, $exceptTags);
            }
        } elseif (trim($domNode->nodeValue) === '' && !in_array($domNode->nodeName, $exceptTags) && $domNode->attributes->length === 0) {
            /**
             * As the parent might not have returned an empty value as it contained this child
             * we go process back the parent to be sure that he validated as not empty
             */
            $parentNode = $domNode->parentNode;
            $domNode->parentNode->removeChild($domNode);
            self::removeEmptyTagsFromDomNode($parentNode, $exceptTags);
        }
    }
}
