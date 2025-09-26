# RoxlTBankApi\TPayApi

All URIs are relative to https://securepay.tinkoff.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**link()**](TPayApi.md#link) | **GET** /v2/TinkoffPay/transactions/{paymentId}/versions/{version}/link | Получить ссылку |
| [**qR()**](TPayApi.md#qR) | **GET** /v2/TinkoffPay/{paymentId}/QR | Получить QR |
| [**status()**](TPayApi.md#status) | **GET** /v2/TinkoffPay/terminals/{TerminalKey}/status | Определить возможность проведения платежа |


## `link()`

```php
link($payment_id, $version): \RoxlTBankApi\Model\Link200Response
```

Получить ссылку

Метод получения Link для безусловного редиректа на мобильных устройствах

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RoxlTBankApi\Api\TPayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payment_id = 13660; // float | Идентификатор платежа в системе Т‑Бизнес
$version = 2.0; // string | Версия T‑Pay, доступная на терминале: * 2.0 (T‑Pay)

try {
    $result = $apiInstance->link($payment_id, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPayApi->link: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_id** | **float**| Идентификатор платежа в системе Т‑Бизнес | |
| **version** | **string**| Версия T‑Pay, доступная на терминале: * 2.0 (T‑Pay) | |

### Return type

[**\RoxlTBankApi\Model\Link200Response**](../Model/Link200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `qR()`

```php
qR($payment_id): \SplFileObject
```

Получить QR

Метод получения QR для десктопов.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RoxlTBankApi\Api\TPayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payment_id = 700001702044; // float | Уникальный идентификатор транзакции в системе Т‑Бизнес.

try {
    $result = $apiInstance->qR($payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPayApi->qR: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_id** | **float**| Уникальный идентификатор транзакции в системе Т‑Бизнес. | |

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

## `status()`

```php
status($terminal_key): \RoxlTBankApi\Model\Status200Response
```

Определить возможность проведения платежа

Метод для определения возможности проведения платежа T‑Pay на терминале и устройстве.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RoxlTBankApi\Api\TPayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$terminal_key = testRegress; // string | Платежный ключ, выдается мерчанту при заведении терминала.

try {
    $result = $apiInstance->status($terminal_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPayApi->status: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **terminal_key** | **string**| Платежный ключ, выдается мерчанту при заведении терминала. | |

### Return type

[**\RoxlTBankApi\Model\Status200Response**](../Model/Status200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
