<?php
/* Generated on 14.02.18 14:28 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class EnableCodeType extends EbatNs_FacetType
{
	const CodeType_Enable = 'Enable';
	const CodeType_Disable = 'Disable';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('EnableCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_EnableCodeType = new EnableCodeType();
?>