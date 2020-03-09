# # TemplateParsedV32

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**content** | [**\Nmusco\AssureSign\v3\Model\SubmissionV32**](.md) |  | [optional] 
**placeholders** | [**\Nmusco\AssureSign\v3\Model\Placeholder[]**](Placeholder.md) | Provides a list of the data elements used in the template that must be provided when referencing the template. | [optional] 
**templates** | [**\Nmusco\AssureSign\v3\Model\TemplatePlaceholderValuesV32[]**](TemplatePlaceholderValuesV32.md) | Provides a list of referenced templates and related placeholder values. | [optional] 
**description** | **string** | Specifies the user provided description for the template.  This is typically used to provide additional detail about the intended use case. | [optional] 
**isLocked** | **bool** | Specifies whether or not the template is locked to prevent editing. | [optional] 
**isPartial** | **bool** | Specifies whether or not the template contains only a partial definition.  If true, additional data beyond placeholder values must be provided as part of the submission.  If false, the template can be submitted with only placeholder values provided. | [optional] 
**canEdit** | **bool** | Deprecated.  With the introduction of entity permissions in version 6.32, this property is no longer used | [optional] 
**accessibility** | **string** | Deprecated.  With the introduction of entity permissions in version 6.32, this property is no longer used | [optional] 
**name** | **string** | Specifies the name of the template. | [optional] 
**templateID** | **string** | Specifies the unique identifier of the template. | [optional] 
**userAccountID** | **string** | Specifies the unique identifier of the user to whom the template belongs. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


