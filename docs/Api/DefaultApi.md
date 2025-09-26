# OpenAPI\Client\DefaultApi

All URIs are relative to https://securepay.tinkoff.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getTerminalPayMethods()**](DefaultApi.md#getTerminalPayMethods) | **GET** /v2/GetTerminalPayMethods | Проверить доступность методов на SDK |


## `getTerminalPayMethods()`

```php
getTerminalPayMethods($get_terminal_pay_methods): \OpenAPI\Client\Model\GetTerminalPayMethodsResponse
```

Проверить доступность методов на SDK

Метод определяет доступность методов оплаты на терминале для SDK и API. Запрос не шифруется токеном

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$get_terminal_pay_methods = new \OpenAPI\Client\Model\GetTerminalPayMethods(); // \OpenAPI\Client\Model\GetTerminalPayMethods

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
| **get_terminal_pay_methods** | [**\OpenAPI\Client\Model\GetTerminalPayMethods**](../Model/GetTerminalPayMethods.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GetTerminalPayMethodsResponse**](../Model/GetTerminalPayMethodsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
