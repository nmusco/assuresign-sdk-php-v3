# # TemplateParsedV31

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**content** | [**\Nmusco\AssureSign\v3\Model\SubmissionV32**](.md) |  | [optional] 
**placeholders** | [**\Nmusco\AssureSign\v3\Model\Placeholder[]**](Placeholder.md) | Provides a list of the data elements used in the template that must be provided when referencing the template. | [optional] 
**templates** | [**\Nmusco\AssureSign\v3\Model\TemplatePlaceholderValuesV32[]**](TemplatePlaceholderValuesV32.md) | Provides a list of referenced templates and related placeholder values. | [optional] 
**templateId** | **string** | Id of provided template | [optional] 
**canEdit** | **bool** | Deprecated.  With the introduction of entity permissions in version 6.32, this property is no longer used | [optional] 
**userAccountId** | **string** | Id of the User Account which this template belongs to | [optional] 
**name** | **string** | Template name | [optional] 
**description** | **string** | Describes what the template is used for | [optional] 
**isLocked** | **bool** | Is the template locked for editing | [optional] 
**isPartial** | **bool** | Can this template be submitted as-is | [optional] 
**accessibility** | **string** | Deprecated.  With the introduction of entity permissions in version 6.32, this property is no longer used | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


