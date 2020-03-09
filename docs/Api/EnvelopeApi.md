# Nmusco\AssureSign\v3\EnvelopeApi

All URIs are relative to *https://sb.assuresign.net/api/documentnow/v3.6*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelEnvelope**](EnvelopeApi.md#cancelEnvelope) | **PUT** /envelopes/{envelopeID}/cancel | Cancel an active envelope
[**downloadEnvelope**](EnvelopeApi.md#downloadEnvelope) | **POST** /envelopes/{envelopeID}/download | Download a completed envelope
[**envelopeHistory**](EnvelopeApi.md#envelopeHistory) | **GET** /envelopes/{envelopeID}/history | Get envelope history
[**envelopeStatus**](EnvelopeApi.md#envelopeStatus) | **GET** /envelopes/{envelopeID}/status | Get envelope status
[**getAccessLinks**](EnvelopeApi.md#getAccessLinks) | **GET** /envelope/{envelopeID}/accessLinks/{documentType} | Get access links for a specific user in an envelope
[**getEnvelope**](EnvelopeApi.md#getEnvelope) | **GET** /envelopes/{envelopeID} | Envelope data
[**getEnvelopeValues**](EnvelopeApi.md#getEnvelopeValues) | **GET** /envelopes/{envelopeID}/values | Get a list of field (JotBlock) values for an envelope
[**getSigningLinks**](EnvelopeApi.md#getSigningLinks) | **GET** /envelope/{envelopeID}/signingLinks | Get signing links for envelope signers
[**listEnvelopes**](EnvelopeApi.md#listEnvelopes) | **GET** /envelopes | Get envelopes matching given criteria
[**updateEnvelopeSigner**](EnvelopeApi.md#updateEnvelopeSigner) | **PUT** /envelopes/{envelopeID}/signers/{envelopeSignerID} | Update envelope signer name, email, mobile phone, and password



## cancelEnvelope

> object cancelEnvelope($envelopeID, $inlineObject, $xASUserContext)

Cancel an active envelope

Cancel an envelope identified by {envelopeID} and stop pending workflow.  The envelope must not be completed already for the cancellation to be accepted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Nmusco\AssureSign\v3\Api\EnvelopeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envelopeID = 'envelopeID_example'; // string | 
$inlineObject = new \Nmusco\AssureSign\v3\Model\InlineObject(); // \Nmusco\AssureSign\v3\Model\InlineObject | 
$xASUserContext = 'xASUserContext_example'; // string | {username}:{DocumentNOW Account Context Identifier}

try {
    $result = $apiInstance->cancelEnvelope($envelopeID, $inlineObject, $xASUserContext);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeApi->cancelEnvelope: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **envelopeID** | **string**|  |
 **inlineObject** | [**\Nmusco\AssureSign\v3\Model\InlineObject**](../Model/InlineObject.md)|  |
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


## downloadEnvelope

> object downloadEnvelope($envelopeID, $inlineObject1, $xASUserContext)

Download a completed envelope

Download the documents contained in the envelope identified by {envelopeID}.  The document contents will be included in the response content as base64 encoded string data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Nmusco\AssureSign\v3\Api\EnvelopeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envelopeID = 'envelopeID_example'; // string | 
$inlineObject1 = new \Nmusco\AssureSign\v3\Model\InlineObject1(); // \Nmusco\AssureSign\v3\Model\InlineObject1 | 
$xASUserContext = 'xASUserContext_example'; // string | {username}:{DocumentNOW Account Context Identifier}

try {
    $result = $apiInstance->downloadEnvelope($envelopeID, $inlineObject1, $xASUserContext);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeApi->downloadEnvelope: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **envelopeID** | **string**|  |
 **inlineObject1** | [**\Nmusco\AssureSign\v3\Model\InlineObject1**](../Model/InlineObject1.md)|  |
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


## envelopeHistory

> object envelopeHistory($envelopeID, $xASUserContext)

Get envelope history

Retrieve the history for an envelope identified by {envelopeID}.  The history of the envelope container will be returned in addition to the histories of individual documents contained in the envelope.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Nmusco\AssureSign\v3\Api\EnvelopeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envelopeID = 'envelopeID_example'; // string | 
$xASUserContext = 'xASUserContext_example'; // string | {username}:{DocumentNOW Account Context Identifier}

try {
    $result = $apiInstance->envelopeHistory($envelopeID, $xASUserContext);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeApi->envelopeHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **envelopeID** | **string**|  |
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


## envelopeStatus

> object envelopeStatus($envelopeID, $xASUserContext)

Get envelope status

Retrieve the current status of the envelope identified by {envelopeID}.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Nmusco\AssureSign\v3\Api\EnvelopeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envelopeID = 'envelopeID_example'; // string | 
$xASUserContext = 'xASUserContext_example'; // string | {username}:{DocumentNOW Account Context Identifier}

try {
    $result = $apiInstance->envelopeStatus($envelopeID, $xASUserContext);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeApi->envelopeStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **envelopeID** | **string**|  |
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


## getAccessLinks

> object getAccessLinks($envelopeID, $documentType, $xASUserContext, $signerEmail, $signerMobilePhone, $linkExpirationDate)

Get access links for a specific user in an envelope

Retrieve a link to a particular version of an envelope identified by {envelopeID} for a given party to the document.  Identify the party (signers, CC contacts, originating user) by their email address or mobile phone number; identifying the party to the document is important since different parties may have different view of the envelope collection, depending on how it was constructed.  Calling the method without indicating a party will return the access link intended for the document originator. Note that interim versions of envelopes are only preserved as long as an envelope is unsigned or has not been cancelled.  The completed version of the document will only be available for signed envelopes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Nmusco\AssureSign\v3\Api\EnvelopeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envelopeID = 'envelopeID_example'; // string | 
$documentType = 'documentType_example'; // string | 
$xASUserContext = 'xASUserContext_example'; // string | {username}:{DocumentNOW Account Context Identifier}
$signerEmail = 'signerEmail_example'; // string | 
$signerMobilePhone = 'signerMobilePhone_example'; // string | 
$linkExpirationDate = 'linkExpirationDate_example'; // string | 

try {
    $result = $apiInstance->getAccessLinks($envelopeID, $documentType, $xASUserContext, $signerEmail, $signerMobilePhone, $linkExpirationDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeApi->getAccessLinks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **envelopeID** | **string**|  |
 **documentType** | **string**|  |
 **xASUserContext** | **string**| {username}:{DocumentNOW Account Context Identifier} | [optional]
 **signerEmail** | **string**|  | [optional]
 **signerMobilePhone** | **string**|  | [optional]
 **linkExpirationDate** | **string**|  | [optional]

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


## getEnvelope

> object getEnvelope($envelopeID, $xASUserContext)

Envelope data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Nmusco\AssureSign\v3\Api\EnvelopeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envelopeID = 'envelopeID_example'; // string | 
$xASUserContext = 'xASUserContext_example'; // string | {username}:{DocumentNOW Account Context Identifier}

try {
    $result = $apiInstance->getEnvelope($envelopeID, $xASUserContext);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeApi->getEnvelope: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **envelopeID** | **string**|  |
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


## getEnvelopeValues

> object getEnvelopeValues($envelopeID, $xASUserContext)

Get a list of field (JotBlock) values for an envelope

Get a list containing all of the typed fields (JotBlocks) and associated values contained in the envelope identified by {envelopeID}.  The envelope must be completed prior to calling this method in order for field (JotBlock) values to be available.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Nmusco\AssureSign\v3\Api\EnvelopeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envelopeID = 'envelopeID_example'; // string | 
$xASUserContext = 'xASUserContext_example'; // string | {username}:{DocumentNOW Account Context Identifier}

try {
    $result = $apiInstance->getEnvelopeValues($envelopeID, $xASUserContext);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeApi->getEnvelopeValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **envelopeID** | **string**|  |
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


## getSigningLinks

> object getSigningLinks($envelopeID, $xASUserContext, $includeOnlyCurrentSigners, $isAuthenticated, $redirectUrl, $linkExpirationDate)

Get signing links for envelope signers

Retrieve the signing links for the envelope identified by {envelopeID}.  Note that bypassing authentication by setting isAuthenticated will fail should the account not be configured to allow customer provided authentication.  Add includeOnlyCurrentSigners=true to the request to only include signers whose steps are currently active.  You may specify a custom redirectUrl for signers by passing an HTML encoded URL. Set a date for the links to expire by passing a date in via linkExpirationDate. This date will always be interpreted as being in Coordinated Universal Time (UTC).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Nmusco\AssureSign\v3\Api\EnvelopeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envelopeID = 'envelopeID_example'; // string | 
$xASUserContext = 'xASUserContext_example'; // string | {username}:{DocumentNOW Account Context Identifier}
$includeOnlyCurrentSigners = True; // bool | 
$isAuthenticated = True; // bool | 
$redirectUrl = 'redirectUrl_example'; // string | 
$linkExpirationDate = 'linkExpirationDate_example'; // string | 

try {
    $result = $apiInstance->getSigningLinks($envelopeID, $xASUserContext, $includeOnlyCurrentSigners, $isAuthenticated, $redirectUrl, $linkExpirationDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeApi->getSigningLinks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **envelopeID** | **string**|  |
 **xASUserContext** | **string**| {username}:{DocumentNOW Account Context Identifier} | [optional]
 **includeOnlyCurrentSigners** | **bool**|  | [optional]
 **isAuthenticated** | **bool**|  | [optional]
 **redirectUrl** | **string**|  | [optional]
 **linkExpirationDate** | **string**|  | [optional]

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


## listEnvelopes

> object listEnvelopes($dateFilter, $xASUserContext, $envelopeName, $signerName, $orderID, $emailAddress, $mobilePhone, $fromDate, $toDate, $queryChildAccounts)

Get envelopes matching given criteria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Nmusco\AssureSign\v3\Api\EnvelopeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dateFilter = 'dateFilter_example'; // string | 
$xASUserContext = 'xASUserContext_example'; // string | {username}:{DocumentNOW Account Context Identifier}
$envelopeName = 'envelopeName_example'; // string | 
$signerName = 'signerName_example'; // string | 
$orderID = 'orderID_example'; // string | 
$emailAddress = 'emailAddress_example'; // string | 
$mobilePhone = 'mobilePhone_example'; // string | 
$fromDate = 'fromDate_example'; // string | 
$toDate = 'toDate_example'; // string | 
$queryChildAccounts = True; // bool | 

try {
    $result = $apiInstance->listEnvelopes($dateFilter, $xASUserContext, $envelopeName, $signerName, $orderID, $emailAddress, $mobilePhone, $fromDate, $toDate, $queryChildAccounts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeApi->listEnvelopes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dateFilter** | **string**|  |
 **xASUserContext** | **string**| {username}:{DocumentNOW Account Context Identifier} | [optional]
 **envelopeName** | **string**|  | [optional]
 **signerName** | **string**|  | [optional]
 **orderID** | **string**|  | [optional]
 **emailAddress** | **string**|  | [optional]
 **mobilePhone** | **string**|  | [optional]
 **fromDate** | **string**|  | [optional]
 **toDate** | **string**|  | [optional]
 **queryChildAccounts** | **bool**|  | [optional]

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


## updateEnvelopeSigner

> object updateEnvelopeSigner($envelopeID, $envelopeSignerID, $inlineObject2, $xASUserContext)

Update envelope signer name, email, mobile phone, and password

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Nmusco\AssureSign\v3\Api\EnvelopeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envelopeID = 'envelopeID_example'; // string | 
$envelopeSignerID = 'envelopeSignerID_example'; // string | 
$inlineObject2 = new \Nmusco\AssureSign\v3\Model\InlineObject2(); // \Nmusco\AssureSign\v3\Model\InlineObject2 | 
$xASUserContext = 'xASUserContext_example'; // string | {username}:{DocumentNOW Account Context Identifier}

try {
    $result = $apiInstance->updateEnvelopeSigner($envelopeID, $envelopeSignerID, $inlineObject2, $xASUserContext);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeApi->updateEnvelopeSigner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **envelopeID** | **string**|  |
 **envelopeSignerID** | **string**|  |
 **inlineObject2** | [**\Nmusco\AssureSign\v3\Model\InlineObject2**](../Model/InlineObject2.md)|  |
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

