<?php
/* Generated on 14.02.18 14:28 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class DisputeActivityCodeType extends EbatNs_FacetType
{
	const CodeType_SellerAddInformation = 'SellerAddInformation';
	const CodeType_SellerCompletedTransaction = 'SellerCompletedTransaction';
	const CodeType_CameToAgreementNeedFVFCredit = 'CameToAgreementNeedFVFCredit';
	const CodeType_SellerEndCommunication = 'SellerEndCommunication';
	const CodeType_MutualAgreementOrNoBuyerResponse = 'MutualAgreementOrNoBuyerResponse';
	const CodeType_SellerOffersRefund = 'SellerOffersRefund';
	const CodeType_SellerShippedItem = 'SellerShippedItem';
	const CodeType_SellerComment = 'SellerComment';
	const CodeType_SellerPaymentNotReceived = 'SellerPaymentNotReceived';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('DisputeActivityCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_DisputeActivityCodeType = new DisputeActivityCodeType();
?>