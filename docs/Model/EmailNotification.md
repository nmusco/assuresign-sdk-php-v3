# # EmailNotification

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**body** | **string** | Specifies the body of the email notification.  Note: content may include merge fields. | [optional] 
**name** | **string** | Specifies the name of the email notification. | [optional] 
**recipients** | **string[]** | Provides a list of intended recipients for the email notification.  Specify a signer or recipient label to send specific recipients.  Specify &amp;apos;Originator&amp;apos; to send to the envelope originator.  Specify &amp;apos;All_Signers&amp;apos; to send to all signers on this envelope.  Specify &amp;apos;All_Signers_In_Step&amp;apos; to send to all signers that part of the current signing step. | [optional] 
**stage** | **string** | Specifies the stage in the envelope signing process during which the email notification will be sent. | [optional] 
**step** | **int** | Specifies the 0-based index of the signing step with which the email notification is associated for email notifications with a &amp;apos;Stage&amp;apos; of &amp;apos;StepStart&amp;apos; or &amp;apos;StepComplete&amp;apos;. | [optional] 
**subject** | **string** | Specifies the subject of the email notification.  Note: content may include merge fields. | [optional] 
**customMessage** | **string** | Specifies a custom message to add at the end of the email notification | [optional] 
**preExpirationDays** | **int** | Specifies the the amount of days to send a pre-expiration notification. (only applicable to Pre-Expire) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


