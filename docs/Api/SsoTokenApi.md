# Nmusco\AssureSign\v3\SsoTokenApi

All URIs are relative to *https://sb.assuresign.net/api/documentnow/v3.6*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getWebTokenAsync**](SsoTokenApi.md#getWebTokenAsync) | **POST** /authentication/sso | Obtain a token that can be applied as a query parameter to SimpleSetup



## getWebTokenAsync

> object getWebTokenAsync($xASUserContext, $inlineObject3)

Obtain a token that can be applied as a query parameter to SimpleSetup

An API authenticated user may request an SSO token via /authentication/sso and add the token to the Simple Setup URL in the form ?ssoToken={ssoTokenValue} to redirect to a prepared envelope.  For example, for a prepared envelope built at www.assuresign.net, append the preparedEnvelopeID to the address, along with the ssoToken, in the form https://www.assuresign.net/ui/simpleSetup/{preparedEnvelopeID}?ssoToken={ssoTokenValue}.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Nmusco\AssureSign\v3\Api\SsoTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xASUserContext = 'xASUserContext_example'; // string | {username}:{DocumentNOW Account Context Identifier}
$inlineObject3 = new \Nmusco\AssureSign\v3\Model\InlineObject3(); // \Nmusco\AssureSign\v3\Model\InlineObject3 | 

try {
    $result = $apiInstance->getWebTokenAsync($xASUserContext, $inlineObject3);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsoTokenApi->getWebTokenAsync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xASUserContext** | **string**| {username}:{DocumentNOW Account Context Identifier} | [optional]
 **inlineObject3** | [**\Nmusco\AssureSign\v3\Model\InlineObject3**](../Model/InlineObject3.md)|  | [optional]

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

