# ArtSchekoff\TBankApi\DefaultApi

All URIs are relative to https://securepay.tinkoff.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getTerminalPayMethods()**](DefaultApi.md#getTerminalPayMethods) | **GET** /v2/GetTerminalPayMethods | Проверить доступность методов на SDK |


## `getTerminalPayMethods()`

```php
getTerminalPayMethods($get_terminal_pay_methods): \ArtSchekoff\TBankApi\Models\GetTerminalPayMethodsResponse
```

Проверить доступность методов на SDK

Метод определяет доступность методов оплаты на терминале для SDK и API. Запрос не шифруется токеном

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ArtSchekoff\TBankApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$get_terminal_pay_methods = new \ArtSchekoff\TBankApi\Models\GetTerminalPayMethods(); // \ArtSchekoff\TBankApi\Models\GetTerminalPayMethods

try {
    $result = $apiInstance->getTerminalPayMethods($get_terminal_pay_methods);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getTerminalPayMethods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_terminal_pay_methods** | [**\ArtSchekoff\TBankApi\Models\GetTerminalPayMethods**](../Model/GetTerminalPayMethods.md)|  | |

### Return type

[**\ArtSchekoff\TBankApi\Models\GetTerminalPayMethodsResponse**](../Model/GetTerminalPayMethodsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
