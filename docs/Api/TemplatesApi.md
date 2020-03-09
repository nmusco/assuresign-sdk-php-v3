# Nmusco\AssureSign\v3\TemplatesApi

All URIs are relative to *https://sb.assuresign.net/api/documentnow/v3.6*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAllTemplates**](TemplatesApi.md#getAllTemplates) | **GET** /templates | Retrieve a list of all of the Simple Setup templates available to the current user.
[**getTemplate**](TemplatesApi.md#getTemplate) | **GET** /templates/{templateID} | Retrieve all of the data for the specified Simple Setup template.



## getAllTemplates

> object getAllTemplates($xASUserContext, $includeArchived)

Retrieve a list of all of the Simple Setup templates available to the current user.

List Simple Setup templates available to the user, operating in the context of the the account indicated in the X-AS-UserContext header.  Detailed information for any given template may be retrieved by using the returned templateID in a call to templates/{templateID}.  The messages section should be parsed for any warnings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Nmusco\AssureSign\v3\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xASUserContext = 'xASUserContext_example'; // string | {username}:{DocumentNOW Account Context Identifier}
$includeArchived = True; // bool | Include archived templates with the GetAll operation

try {
    $result = $apiInstance->getAllTemplates($xASUserContext, $includeArchived);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->getAllTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xASUserContext** | **string**| {username}:{DocumentNOW Account Context Identifier} | [optional]
 **includeArchived** | **bool**| Include archived templates with the GetAll operation | [optional]

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


## getTemplate

> object getTemplate($templateID, $xASUserContext)

Retrieve all of the data for the specified Simple Setup template.

Retrieve a Simple Setup envelope JSON structure.  The messages section should be parsed for any warnings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Nmusco\AssureSign\v3\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$templateID = 'templateID_example'; // string | Specifies the unique identifier of the template.
$xASUserContext = 'xASUserContext_example'; // string | {username}:{DocumentNOW Account Context Identifier}

try {
    $result = $apiInstance->getTemplate($templateID, $xASUserContext);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->getTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **templateID** | **string**| Specifies the unique identifier of the template. |
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

