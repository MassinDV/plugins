<?php
/* Generated on 14.02.18 14:28 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class ReturnsAcceptedOptionsCodeType extends EbatNs_FacetType
{
	const CodeType_ReturnsAccepted = 'ReturnsAccepted';
	const CodeType_ReturnsNotAccepted = 'ReturnsNotAccepted';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ReturnsAcceptedOptionsCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ReturnsAcceptedOptionsCodeType = new ReturnsAcceptedOptionsCodeType();
?>