# # TemplateParsed

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**content** | [**\Nmusco\AssureSign\v3\Model\Submission**](.md) |  | [optional] 
**placeholders** | [**\Nmusco\AssureSign\v3\Model\Placeholder[]**](Placeholder.md) | Provides a list of the data elements used in the template that must be provided when referencing the template. | [optional] 
**templates** | [**\Nmusco\AssureSign\v3\Model\TemplatePlaceholderValues[]**](TemplatePlaceholderValues.md) | Provides a list of referenced templates and related placeholder values. | [optional] 
**description** | **string** | Specifies the user provided description for the template.  This is typically used to provide additional detail about the intended use case. | [optional] 
**isLocked** | **bool** | Specifies whether or not the template is locked to prevent editing. | [optional] 
**isPartial** | **bool** | Specifies whether or not the template contains only a partial definition.  If true, additional data beyond placeholder values must be provided as part of the submission.  If false, the template can be submitted with only placeholder values provided. | [optional] 
**isArchived** | **bool** | Specifies whether or not the template is archived | [optional] 
**name** | **string** | Specifies the name of the template. | [optional] 
**templateID** | **string** | Specifies the unique identifier of the template. | [optional] 
**userAccountID** | **string** | Specifies the unique identifier of the user to whom the template belongs. | [optional] 
**owner** | [**\Nmusco\AssureSign\v3\Model\TemplateOwner**](.md) |  | [optional] 
**accountID** | **string** | Specifies the unique identifier of the account to which the template belongs. | [optional] 
**accountName** | **string** | Specifies the name of the account to which the template belongs. | [optional] 
**tag** | **string** | A generic holder of any information you would like to provide | [optional] 
**originalID** | **string** | Original ID of Imported Template | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


