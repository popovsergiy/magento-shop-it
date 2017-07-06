<?php
/**
 * MageWorx
 * MageWorx SeoCrossLinks Extension
 *
 * @category   MageWorx
 * @package    MageWorx_SeoCrossLinks
 * @copyright  Copyright (c) 2015 MageWorx (http://www.mageworx.com/)
 */

class MageWorx_SeoCrossLinks_Block_Adminhtml_Config_Frontend_Separator extends Mage_Core_Block_Template implements Varien_Data_Form_Element_Renderer_Interface
{
    public function render(Varien_Data_Form_Element_Abstract $element)
    {
        $htmlId = "row_" . $element->getHtmlId();
        $label  = $element->getLabel();
        return '<tr id="' . $htmlId . '" class="system-fieldset-sub-head"><td colspan="5"><h4>' . $label . '</h4></td></tr>';
    }

}