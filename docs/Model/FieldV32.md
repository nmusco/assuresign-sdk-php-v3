# # FieldV32

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**borderSides** | **int** | Specifies the borders that should be drawn around the field (if any) as integer representation of a bitwise operator.  For Example: None &#x3D; 0, Top &#x3D; 1, Right &#x3D; 2, Bottom &#x3D; 4, Left &#x3D; 8, All &#x3D; 15 | [optional] 
**certified** | **bool** | Specifies whether or not printed metadata uniquely identifying the field should be rendered around it to visually distinguish it from other data on the containing page. | [optional] 
**fieldType** | **string** | Specifies the type of input required for the field: signature/initials or text. | [optional] 
**inputType** | **string** | Specifies the source of the input for the field.  Possible values include &amp;apos;Signer&amp;apos; and &amp;apos;Fixed&amp;apos;. | [optional] 
**instructions** | **string** | Specifies the instructions that will be presented to the signer when they are prompted to provide input for the field. | [optional] 
**name** | **string** | Specifies the name of the field. | [optional] 
**pageIndex** | **int** | Specifies the 0-based index of the containing page. | [optional] 
**position** | [**\Nmusco\AssureSign\v3\Model\Coordinate**](.md) |  | [optional] 
**required** | **bool** | Specifies whether or not signer input is required for the field. | [optional] 
**signer** | **string** | Specifies the label identifying the intended signer for fields that require signer input (signature or text). | [optional] 
**size** | [**\Nmusco\AssureSign\v3\Model\FieldSize**](.md) |  | [optional] 
**sourceGroup** | **string** | Optionally specifies a common identifier for a group of fields in an envelope that should share a value. | [optional] 
**fixedText** | **string** | Specifies the text contents for the field for fields with a &amp;apos;FieldType&amp;apos; of &amp;apos;Typed&amp;apos; and an &amp;apos;InputType&amp;apos; of &amp;apos;Fixed&amp;apos;.  Note: content may include merge fields. | [optional] 
**timing** | **string** | Specifies the timing for when the contents of the field will be rendered to the containing document for fields with a &amp;apos;FieldType&amp;apos; of &amp;apos;Typed&amp;apos; and an &amp;apos;InputType&amp;apos; of &amp;apos;Fixed&amp;apos;. | [optional] 
**options** | [**\Nmusco\AssureSign\v3\Model\FieldOption[]**](FieldOption.md) | Provides the list of options to present to the signer for fields with a &amp;apos;FieldType&amp;apos; of &amp;apos;Typed&amp;apos; and one of the &amp;apos;Multiple Choice&amp;apos; signatory input types. | [optional] 
**penColor** | **string** | Specifies the color of &amp;apos;ink&amp;apos; used to render the signature for fields with a &amp;apos;FieldType&amp;apos; of &amp;apos;Signature&amp;apos;. | [optional] 
**signatoryInputType** | **int** | Specifies the type of input required from the signer for fields with a &amp;apos;FieldType&amp;apos; of &amp;apos;Typed&amp;apos;.  Possible values include: Free_Text &#x3D; 0, Prefill &#x3D; 1, Multiple_Choice_Text &#x3D; 2, Multiple_Choice_Graphic &#x3D; 3, Timestamp &#x3D; 4, Custom_Validation &#x3D; 5, Multiple_Choice_Radio &#x3D; 6, Multiple_Choice_Checkbox &#x3D; 7 | [optional] 
**signatureType** | **string** | Specifies the type of signature (initials or signature) the signer will be prompted to provide for fields with a &amp;apos;FieldType&amp;apos; of &amp;apos;Signature&amp;apos;. | [optional] 
**signatureStyle** | **string** | Specifies the style of signature the signer will adopt for fields with a &amp;apos;FieldType&amp;apos; of &amp;apos;Signature&amp;apos;. | [optional] 
**fontDecoration** | **int** | Specifies the font styles that should be applied for fields with a &amp;apos;FieldType&amp;apos; of &amp;apos;Typed&amp;apos; as an integer representation of a bitwise operator.  For Example: Regular &#x3D; 0, Bold &#x3D; 1, Italic &#x3D; 2, Underline &#x3D; 4, Bold + Italic + Underline &#x3D; 7 | [optional] 
**fontName** | **string** | Specifies the name of the supported font that should be used to render the contents of the field for fields with a &amp;apos;FieldType&amp;apos; of &amp;apos;Typed&amp;apos;. | [optional] 
**fontSize** | **int** | Specifies the size of the font that should be used to render the contents of the field for fields with a &amp;apos;FieldType&amp;apos; of &amp;apos;Typed&amp;apos;.  Possible values include: 6, 8, 10, 12, 14 | [optional] 
**horizontalAlignment** | **string** | Specifies the horizontal alignment of the field contents for fields with a &amp;apos;FieldType&amp;apos; of &amp;apos;Typed&amp;apos;. | [optional] 
**verticalAlignment** | **string** | Specifies the vertical alignment of the field contents for fields with a &amp;apos;FieldType&amp;apos; of &amp;apos;Typed&amp;apos;. | [optional] 
**wordWrap** | **bool** | Specifies whether or not the contents of the field should be automatically wrapped to a new line for fields with a &amp;apos;FieldType&amp;apos; of &amp;apos;Typed&amp;apos;. | [optional] 
**formatterType** | **string** | Specifies the text mask to apply for fields with a &amp;apos;FieldType&amp;apos; of &amp;apos;Typed&amp;apos;. | [optional] 
**formatterCode** | **string** | Specifies the custom text mask to apply for fields with a &amp;apos;FieldType&amp;apos; of &amp;apos;Typed&amp;apos; and a &amp;apos;FormatterType&amp;apos; of &amp;apos;Fixed&amp;apos;. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


