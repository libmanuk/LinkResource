<?php
/**
 * linkResource
 * 
 * @copyright Copyright 2018 Eric C. Weig 
 * @license http://opensource.org/licenses/MIT MIT
 */

/**
 * The LinkResource plugin.
 * 
 * @package Omeka\Plugins\LinkResource
 */
class LinkResourcePlugin extends Omeka_Plugin_AbstractPlugin
{
    protected $_filters = array(
        'intlinkResource' => array('Display', 'Item', 'Item Type Metadata', 'Interview Linked Resource'),
        'projlinkResource' => array('Display', 'Item', 'Item Type Metadata', 'Series Linked Resource'),
    );

    public function intlinkResource($text, $args) {
        return $this->_linkField($text, $args);
    }
    
    public function projlinkResource($text, $args) {
        return $this->_linkField($text, $args);
    }
    
    public function _linkField($text, $args) {
        $parts = explode("|", $text);
        $spacer = "&nbsp;&nbsp;";
        return "$parts[0]$spacer<a href=\"" . $parts[1] . "\" target=\"_blank\">$parts[1]</a>";
    }
}
