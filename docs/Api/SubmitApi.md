# Nmusco\AssureSign\v3\SubmitApi

All URIs are relative to *https://sb.assuresign.net/api/documentnow/v3.6*

Method | HTTP request | Description
------------- | ------------- | -------------
[**preparedEnvelope**](SubmitApi.md#preparedEnvelope) | **POST** /submit/{preparedEnvelopeID} | Finalize the submission of a previously prepared envelope.
[**submitRequest**](SubmitApi.md#submitRequest) | **POST** /submit | Submit a complete envelope via a combination of ad hoc data and/or Simple Setup templates.
[**validateSubmit**](SubmitApi.md#validateSubmit) | **POST** /submit/validate | Submit an envelope and contained documents for content validation only



## preparedEnvelope

> object preparedEnvelope($preparedEnvelopeID, $xASUserContext)

Finalize the submission of a previously prepared envelope.

Finalize a submit of a prepared envelope previously created via a /submit/prepare operation.  This closes the envelope and begins the envelope&apos;s workflow.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Nmusco\AssureSign\v3\Api\SubmitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$preparedEnvelopeID = 'preparedEnvelopeID_example'; // string | ID of Prepared envelope
$xASUserContext = 'xASUserContext_example'; // string | {username}:{DocumentNOW Account Context Identifier}

try {
    $result = $apiInstance->preparedEnvelope($preparedEnvelopeID, $xASUserContext);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubmitApi->preparedEnvelope: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **preparedEnvelopeID** | **string**| ID of Prepared envelope |
 **xASUserContext** | **string**| {username}:{DocumentNOW Account Context Identifier} | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## submitRequest

> object submitRequest($inlineObject6, $xASUserContext)

Submit a complete envelope via a combination of ad hoc data and/or Simple Setup templates.

Submit a complete envelope to begin the envelope&apos;s workflow, operating in the context of the the account indicated in the X-AS-UserContext header. Simple Setup templates may be used, a complete ad hoc envelope may be submitted, or a combination of ad hoc and templated information may be submitted.  The messages section should be parsed for any warnings.  A successful submit will return back an ID of the envelope that may be used in method calls requiring {envelopeID}. Additional examples are available on the [AssureSign support portal](https://support.assuresign.net/hc/en-us/articles/360011128574)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Nmusco\AssureSign\v3\Api\SubmitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inlineObject6 = new \Nmusco\AssureSign\v3\Model\InlineObject6(); // \Nmusco\AssureSign\v3\Model\InlineObject6 | 
$xASUserContext = 'xASUserContext_example'; // string | {username}:{DocumentNOW Account Context Identifier}

try {
    $result = $apiInstance->submitRequest($inlineObject6, $xASUserContext);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubmitApi->submitRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inlineObject6** | [**\Nmusco\AssureSign\v3\Model\InlineObject6**](../Model/InlineObject6.md)|  |
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


## validateSubmit

> object validateSubmit($inlineObject7, $xASUserContext)

Submit an envelope and contained documents for content validation only

Passing in the same JSON request structure as /submit, this method will validate the content of the request without completing the submission process.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Nmusco\AssureSign\v3\Api\SubmitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inlineObject7 = new \Nmusco\AssureSign\v3\Model\InlineObject7(); // \Nmusco\AssureSign\v3\Model\InlineObject7 | 
$xASUserContext = 'xASUserContext_example'; // string | {username}:{DocumentNOW Account Context Identifier}

try {
    $result = $apiInstance->validateSubmit($inlineObject7, $xASUserContext);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubmitApi->validateSubmit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inlineObject7** | [**\Nmusco\AssureSign\v3\Model\InlineObject7**](../Model/InlineObject7.md)|  |
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

