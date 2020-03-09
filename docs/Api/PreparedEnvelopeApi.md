# Nmusco\AssureSign\v3\PreparedEnvelopeApi

All URIs are relative to *https://sb.assuresign.net/api/documentnow/v3.6*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPreparedEnvelope**](PreparedEnvelopeApi.md#createPreparedEnvelope) | **POST** /submit/prepare | Prepare an envelope for additional operations, including manual review and adding documents
[**updatePreparedEnvelope**](PreparedEnvelopeApi.md#updatePreparedEnvelope) | **PUT** /submit/prepare/{preparedEnvelopeID} | Perform additional operations on a previously created prepared envelope



## createPreparedEnvelope

> object createPreparedEnvelope($inlineObject4, $xASUserContext)

Prepare an envelope for additional operations, including manual review and adding documents

Preparing an envelope allows for further modification, either via additional API calls or by continuing to edit the envelope in the AssureSign UI.  Ad hoc data may be submitted, or Simple Setup template information may be provided.  The prepared envelope may be finalized by calling /submit/{preparedEnvelopeID}.  Additional modifications may be made to the prepared envelope by performing a PUT to /submit/prepare/{preparedEnvelopeID}.  An API authenticated user may request an SSO token via /authentication/sso and add the token to the Simple Setup URL in the form ?ssoToken={ssoTokenValue} to redirect to the prepared envelope.  For example, for a prepared envelope built at www.assuresign.net, append the preparedEnvelopeID to the address, along with the ssoToken, in the form https://www.assuresign.net/ui/simpleSetup/{preparedEnvelopeID}?ssoToken={ssoTokenValue}. Additional examples are available on the [AssureSign support portal](https://support.assuresign.net/hc/en-us/articles/360011225593)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Nmusco\AssureSign\v3\Api\PreparedEnvelopeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inlineObject4 = new \Nmusco\AssureSign\v3\Model\InlineObject4(); // \Nmusco\AssureSign\v3\Model\InlineObject4 | 
$xASUserContext = 'xASUserContext_example'; // string | {username}:{DocumentNOW Account Context Identifier}

try {
    $result = $apiInstance->createPreparedEnvelope($inlineObject4, $xASUserContext);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PreparedEnvelopeApi->createPreparedEnvelope: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inlineObject4** | [**\Nmusco\AssureSign\v3\Model\InlineObject4**](../Model/InlineObject4.md)|  |
 **xASUserContext** | **string**| {username}:{DocumentNOW Account Context Identifier} | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updatePreparedEnvelope

> object updatePreparedEnvelope($preparedEnvelopeID, $inlineObject5, $xASUserContext)

Perform additional operations on a previously created prepared envelope

Make additional modifications to the prepared envelope referenced by the {preparedEnvelopeID} that was returned from a /submit/prepare operation.  This may be useful, for example, in cases where an envelope contains multiple documents and needs to be split up into multiple submissions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Nmusco\AssureSign\v3\Api\PreparedEnvelopeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$preparedEnvelopeID = 'preparedEnvelopeID_example'; // string | ID of Prepared envelope
$inlineObject5 = new \Nmusco\AssureSign\v3\Model\InlineObject5(); // \Nmusco\AssureSign\v3\Model\InlineObject5 | 
$xASUserContext = 'xASUserContext_example'; // string | {username}:{DocumentNOW Account Context Identifier}

try {
    $result = $apiInstance->updatePreparedEnvelope($preparedEnvelopeID, $inlineObject5, $xASUserContext);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PreparedEnvelopeApi->updatePreparedEnvelope: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **preparedEnvelopeID** | **string**| ID of Prepared envelope |
 **inlineObject5** | [**\Nmusco\AssureSign\v3\Model\InlineObject5**](../Model/InlineObject5.md)|  |
 **xASUserContext** | **string**| {username}:{DocumentNOW Account Context Identifier} | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

