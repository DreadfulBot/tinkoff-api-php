# RoxlTBankApi\WebViewApi

All URIs are relative to https://securepay.tinkoff.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkOrder()**](WebViewApi.md#checkOrder) | **POST** /v2/CheckOrder | Получить статус заказа |
| [**getState()**](WebViewApi.md#getState) | **POST** /v2/GetState | Получить статуса платежа |
| [**init()**](WebViewApi.md#init) | **POST** /v2/Init | Инициировать платеж |


## `checkOrder()`

```php
checkOrder($check_order): \RoxlTBankApi\Model\CheckOrder2
```

Получить статус заказа

Метод возвращает статус заказа.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RoxlTBankApi\Api\WebViewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$check_order = {"TerminalKey":"TinkoffBankTest","OrderId":"21057","Token":"4c4c36adf9936b011879fa26f60759e7b47e57f7968283129b0ae9ac457486ab"}; // \RoxlTBankApi\Model\CheckOrder

try {
    $result = $apiInstance->checkOrder($check_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebViewApi->checkOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **check_order** | [**\RoxlTBankApi\Model\CheckOrder**](../Model/CheckOrder.md)|  | |

### Return type

[**\RoxlTBankApi\Model\CheckOrder2**](../Model/CheckOrder2.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getState()`

```php
getState($get_state_full): \RoxlTBankApi\Model\GetState200Response
```

Получить статуса платежа

Метод возвращает статус платежа.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RoxlTBankApi\Api\WebViewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$get_state_full = {"TerminalKey":"TinkoffBankTest","PaymentId":"13660","Token":"7241ac8307f349afb7bb9dda760717721bbb45950b97c67289f23d8c69cc7b96","IP":"192.168.0.52"}; // \RoxlTBankApi\Model\GetStateFULL

try {
    $result = $apiInstance->getState($get_state_full);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebViewApi->getState: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_state_full** | [**\RoxlTBankApi\Model\GetStateFULL**](../Model/GetStateFULL.md)|  | |

### Return type

[**\RoxlTBankApi\Model\GetState200Response**](../Model/GetState200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `init()`

```php
init($init_full): \RoxlTBankApi\Model\Response
```

Инициировать платеж

Метод инициирует платежную сессию.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RoxlTBankApi\Api\WebViewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$init_full = {"TerminalKey":"TinkoffBankTest","Amount":140000,"OrderId":"21090","Description":"Подарочная карта на 1000 рублей","Token":"68711168852240a2f34b6a8b19d2cfbd296c7d2a6dff8b23eda6278985959346","DATA":{"Phone":"+71234567890","Email":"a@test.com"},"Receipt":{"Email":"a@test.ru","Phone":"+79031234567","Taxation":"osn","Items":[{"Name":"Наименование товара 1","Price":10000,"Quantity":1,"Amount":10000,"Tax":"vat10","Ean13":"303130323930303030630333435"},{"Name":"Наименование товара 2","Price":20000,"Quantity":2,"Amount":40000,"Tax":"vat20"},{"Name":"Наименование товара 3","Price":30000,"Quantity":3,"Amount":90000,"Tax":"vat10"}]}}; // \RoxlTBankApi\Model\InitFULL

try {
    $result = $apiInstance->init($init_full);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebViewApi->init: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **init_full** | [**\RoxlTBankApi\Model\InitFULL**](../Model/InitFULL.md)|  | |

### Return type

[**\RoxlTBankApi\Model\Response**](../Model/Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
