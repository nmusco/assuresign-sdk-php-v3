# # Envelope

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cultureType** | **string** | Specifies the target culture for the signing session.  Possible values include &amp;apos;en-US&amp;apos; (English - US), &amp;apos;es-US&amp;apos; (Spanish - US), and &amp;apos;fr-CA&amp;apos; (French - Canada).  Note that specifying a culture here will control the language displayed to signers and the language of default email and SMS notifications. It will not, however, provide automatic translation of the contents of the documents within the envelope or for any adhoc notifications provided in the submission. | [optional] 
**declineBehaviorType** | **string** | Specifies whether signers will be given the option to decline signing for individual documents within the envelope or just to decline the envelope as a whole. | [optional] 
**downloadPassword** | **string** | Specifies a password that users or notification recipients will be prompted to enter in order to access downloads for the envelope. | [optional] 
**expirationDate** | **string** | Optionally specifies the date when the envelope will expire if not completed.  If an expiration date is not provided, the expiration date will be automatically set based on the expiration policy configured for the account. | [optional] 
**name** | **string** | Specifies the name of the envelope. | [optional] 
**orderID** | **string** | Optionally specifies an order ID or order number to help identify the document. | [optional] 
**signingDeviceEnabled** | **bool** | Specifies whether or not support for external signing devices should be enabled for the envelope. | [optional] 
**viewBehaviorType** | **string** | Specifies whether signers will be able to see all documents within the envelope or just documents for which they are a signing party. | [optional] 
**workflowType** | **string** | Specifies whether the workflow for the envelope will make signing available to all signers at the same time or if signing will be made available to signers one at a time. | [optional] 
**allowInPersonSigning** | **bool** | Specifies whether or not in person signing should be enabled for the envelope. | [optional] 
**redirectUrl** | **string** | Optionally specifies a fully qualified domain name that signers will be redirected to after signing when they have no other documents in the envelope they can currently sign. If a URL is specified here, it will supersede any other redirect URLs specified elsewhere in the application (such as a default account redirect URL) | [optional] 
**termsAndConditions** | [**\Nmusco\AssureSign\v3\Model\TermsAndConditions**](.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


