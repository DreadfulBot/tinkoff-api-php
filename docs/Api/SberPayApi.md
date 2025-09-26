# OpenAPI\Client\SberPayApi

All URIs are relative to https://securepay.tinkoff.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**sberPayQR()**](SberPayApi.md#sberPayQR) | **GET** /v2/SberPay/{paymentId}/QR | Получить QR |
| [**sberPaylink()**](SberPayApi.md#sberPaylink) | **GET** /v2/SberPay/transactions/{paymentId}/link | Получить ссылку |


## `sberPayQR()`

```php
sberPayQR($payment_id): \SplFileObject
```

Получить QR

Метод получения QR для десктопов.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SberPayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payment_id = 700001702044; // string | Уникальный идентификатор транзакции в системе Т‑Бизнес.

try {
    $result = $apiInstance->sberPayQR($payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SberPayApi->sberPayQR: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_id** | **string**| Уникальный идентификатор транзакции в системе Т‑Бизнес. | |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/svg`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sberPaylink()`

```php
sberPaylink($payment_id): \OpenAPI\Client\Model\SberPaylink200Response
```

Получить ссылку

Метод для получения ссылки SberPay.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SberPayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payment_id = 700001702044; // float | Уникальный идентификатор транзакции в системе Т‑Бизнес.

try {
    $result = $apiInstance->sberPaylink($payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SberPayApi->sberPaylink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_id** | **float**| Уникальный идентификатор транзакции в системе Т‑Бизнес. | |

### Return type

[**\OpenAPI\Client\Model\SberPaylink200Response**](../Model/SberPaylink200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
