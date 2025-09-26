# TinkoffApi\MirPayApi

All URIs are relative to https://securepay.tinkoff.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDeepLink()**](MirPayApi.md#getDeepLink) | **POST** /v2/MirPay/GetDeepLink | Получить DeepLink |


## `getDeepLink()`

```php
getDeepLink($get_deep_link): \TinkoffApi\Model\GetDeepLinkResponse
```

Получить DeepLink

Получение deeplink с включенным подписанным JWT-токеном. Предназначен для запроса по API

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new TinkoffApi\Api\MirPayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$get_deep_link = new \TinkoffApi\Model\GetDeepLink(); // \TinkoffApi\Model\GetDeepLink

try {
    $result = $apiInstance->getDeepLink($get_deep_link);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MirPayApi->getDeepLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_deep_link** | [**\TinkoffApi\Model\GetDeepLink**](../Model/GetDeepLink.md)|  | |

### Return type

[**\TinkoffApi\Model\GetDeepLinkResponse**](../Model/GetDeepLinkResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
