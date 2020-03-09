# Nmusco\AssureSign\v3\EmailDesignSetsApi

All URIs are relative to *https://sb.assuresign.net/api/documentnow/v3.6*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDefaultNotifications**](EmailDesignSetsApi.md#getDefaultNotifications) | **GET** /emaildesignsets/{emailDesignSetID}/defaultEmailNotifications/{culture} | Retrieve all default notifications
[**getEmailDesignSets**](EmailDesignSetsApi.md#getEmailDesignSets) | **GET** /emaildesignsets | Retrieve all email design sets for a given account
[**getEmailDesigns**](EmailDesignSetsApi.md#getEmailDesigns) | **GET** /emaildesignsets/{emailDesignSetID}/emailDesigns | Retrieve all email designs for a given email design set



## getDefaultNotifications

> object getDefaultNotifications($emailDesignSetID, $culture, $xASUserContext)

Retrieve all default notifications

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Nmusco\AssureSign\v3\Api\EmailDesignSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$emailDesignSetID = 'emailDesignSetID_example'; // string | Specifies the unique identifier of the email design set
$culture = 'culture_example'; // string | Specifies which culture to use when including system designs. Currently supported cultures are: en‑US (English - US), es‑US (Spanish - US), and fr‑CA (French - Canada)
$xASUserContext = 'xASUserContext_example'; // string | {username}:{DocumentNOW Account Context Identifier}

try {
    $result = $apiInstance->getDefaultNotifications($emailDesignSetID, $culture, $xASUserContext);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailDesignSetsApi->getDefaultNotifications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **emailDesignSetID** | **string**| Specifies the unique identifier of the email design set |
 **culture** | **string**| Specifies which culture to use when including system designs. Currently supported cultures are: en‑US (English - US), es‑US (Spanish - US), and fr‑CA (French - Canada) |
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


## getEmailDesignSets

> object getEmailDesignSets($culture, $includeSystemDesignSets, $xASUserContext)

Retrieve all email design sets for a given account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Nmusco\AssureSign\v3\Api\EmailDesignSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$culture = 'culture_example'; // string | Specifies which culture to use when including system designs. Currently supported cultures are: en‑US (English - US), es‑US (Spanish - US), and fr‑CA (French - Canada)
$includeSystemDesignSets = True; // bool | Specifies whether or not to include built-in design sets.  To query a specific built-in design set, include the culture
$xASUserContext = 'xASUserContext_example'; // string | {username}:{DocumentNOW Account Context Identifier}

try {
    $result = $apiInstance->getEmailDesignSets($culture, $includeSystemDesignSets, $xASUserContext);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailDesignSetsApi->getEmailDesignSets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **culture** | **string**| Specifies which culture to use when including system designs. Currently supported cultures are: en‑US (English - US), es‑US (Spanish - US), and fr‑CA (French - Canada) | [optional]
 **includeSystemDesignSets** | **bool**| Specifies whether or not to include built-in design sets.  To query a specific built-in design set, include the culture | [optional]
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


## getEmailDesigns

> object getEmailDesigns($emailDesignSetID, $culture, $includeSystemDesigns, $xASUserContext)

Retrieve all email designs for a given email design set

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Nmusco\AssureSign\v3\Api\EmailDesignSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$emailDesignSetID = 'emailDesignSetID_example'; // string | Specifies the unique identifier of the email design set
$culture = 'culture_example'; // string | Specifies which culture to use when including system designs. Currently supported cultures are: en‑US (English - US), es‑US (Spanish - US), and fr‑CA (French - Canada)
$includeSystemDesigns = True; // bool | 
$xASUserContext = 'xASUserContext_example'; // string | {username}:{DocumentNOW Account Context Identifier}

try {
    $result = $apiInstance->getEmailDesigns($emailDesignSetID, $culture, $includeSystemDesigns, $xASUserContext);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailDesignSetsApi->getEmailDesigns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **emailDesignSetID** | **string**| Specifies the unique identifier of the email design set |
 **culture** | **string**| Specifies which culture to use when including system designs. Currently supported cultures are: en‑US (English - US), es‑US (Spanish - US), and fr‑CA (French - Canada) | [optional]
 **includeSystemDesigns** | **bool**|  | [optional]
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

