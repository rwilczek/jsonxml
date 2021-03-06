<?php
/**
 * Converts json:XML to PHP-values and vice versa.
 *
 * @license    http://opensource.org/licenses/lgpl-2.1.php LGPL 2.1 or higher
 * @copyright  2012 Roland Wilczek
 * @version    SVN: $Id: Json.php 12896 2014-06-21 14:36:06Z rwilczek $
 * @link       http://www.web-appz.de/
 */

namespace webappz\jsonxml;

/**
 * Converts json:XML to PHP-values and vice versa.
 */
interface Parser
{
    const NS = 'http://web-appz.de/jsonxml';

    /**
     * Convert a PHP-value to a json:XML-element.
     *
     * If the value is an object, it's members will be read using foreach {}.
     * Supports \JsonSerializable.
     *
     * @param mixed $value
     * @return \DOMElement having the json:XML namespace
     */
    public function encodeXML($value) : \DOMElement;

    /**
     * Convert a json:XML-element to a valid JSON-string
     *
     * @param \DOMElement $node requires the json:XML namespace
     * @return mixed
     */
    public function decodeXML(\DOMElement $node);

    /**
     * Validate the given element against the json::XML Schema
     * and throw an exception on failure.
     *
     * @param \DOMElement $node
     * @throws Exception
     */
    public function validate(\DOMElement $node);
}
