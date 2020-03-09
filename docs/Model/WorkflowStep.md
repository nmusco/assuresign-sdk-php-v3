# # WorkflowStep

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Specifies the name of the workflow step. | [optional] 
**signers** | **string[]** | Specifies a list of signers that are included in the step. Any fields defined in other steps will take precedence over signers included in a step. | [optional] 
**fields** | **string[]** | Specifies a list of fields that are included in the step. This will override fields included based on their signer in other steps. | [optional] 
**workflowStepDelay** | [**\Nmusco\AssureSign\v3\Model\WorkflowStepDelay**](.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


