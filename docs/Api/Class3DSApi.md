# TinkoffApi\Class3DSApi

All URIs are relative to https://securepay.tinkoff.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**submit3DSAuthorization()**](Class3DSApi.md#submit3DSAuthorization) | **POST** /v2/Submit3DSAuthorization | Подтвердить прохождение 3DS v1.0 |
| [**submit3DSAuthorizationV2()**](Class3DSApi.md#submit3DSAuthorizationV2) | **POST** /v2/Submit3DSAuthorizationV2 | Подтвердить прохождение 3DS v2.1 |


## `submit3DSAuthorization()`

```php
submit3DSAuthorization($md, $pa_res, $payment_id, $terminal_key, $token): \TinkoffApi\Model\Submit3DSAuthorization200Response
```

Подтвердить прохождение 3DS v1.0

`Для мерчантов c PCI DSS и собственной платежной формой`   Проверяет результаты прохождения 3-D Secure и при успешном прохождении  подтверждает инициированный платеж.  При использовании:  - одностадийной оплаты — списывает денежные средства с карты  клиента;  - двухстадийной оплаты — блокирует указанную сумму на карте клиента.   Формат запроса — `x-www-form-urlencoded`.    После того, как мерчант получит ответ ACS с результатами прохождения 3-D Secure на `TermUrl`, нужно  отправить запрос через метод **Submit3DSAuthorization**.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new TinkoffApi\Api\Class3DSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$md = 'md_example'; // string | Уникальный идентификатор транзакции в системе. Возвращается в ответе от ACS.
$pa_res = 'pa_res_example'; // string | Шифрованная строка, содержащая результаты 3-D Secure аутентификации. Возвращается в ответе от ACS.
$payment_id = 'payment_id_example'; // string | Уникальный идентификатор транзакции в системе Т‑Бизнес.
$terminal_key = 'terminal_key_example'; // string | Идентификатор терминала, выдается мерчанту в Т‑Бизнес.
$token = 'token_example'; // string | Подпись запроса.

try {
    $result = $apiInstance->submit3DSAuthorization($md, $pa_res, $payment_id, $terminal_key, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class3DSApi->submit3DSAuthorization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **md** | **string**| Уникальный идентификатор транзакции в системе. Возвращается в ответе от ACS. | |
| **pa_res** | **string**| Шифрованная строка, содержащая результаты 3-D Secure аутентификации. Возвращается в ответе от ACS. | |
| **payment_id** | **string**| Уникальный идентификатор транзакции в системе Т‑Бизнес. | [optional] |
| **terminal_key** | **string**| Идентификатор терминала, выдается мерчанту в Т‑Бизнес. | [optional] |
| **token** | **string**| Подпись запроса. | [optional] |

### Return type

[**\TinkoffApi\Model\Submit3DSAuthorization200Response**](../Model/Submit3DSAuthorization200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `submit3DSAuthorizationV2()`

```php
submit3DSAuthorizationV2($payment_id, $terminal_key, $token): \TinkoffApi\Model\Submit3DSAuthorizationV2200Response
```

Подтвердить прохождение 3DS v2.1

`Для мерчантов c PCI DSS и собственной платежной формой`   Проверяет результаты прохождения 3-D Secure и при успешном прохождении  подтверждает инициированный платеж.  При использовании:  - одностадийной оплаты — списывает денежные средства с карты  клиента;  - двухстадийной оплаты — блокирует указанную сумму на карте клиента.   Формат запроса — `x-www-form-urlencoded`.   После того, как мерчант получит ответ ACS с результатами прохождения 3-D Secure на `cresCallbackUrl`, нужно  отправить запрос через метод **Submit3DSAuthorizationV2**.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new TinkoffApi\Api\Class3DSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payment_id = 'payment_id_example'; // string | Уникальный идентификатор транзакции в системе Т‑Бизнес.
$terminal_key = 'terminal_key_example'; // string | Идентификатор терминала, выдается мерчанту в Т‑Бизнес.
$token = 'token_example'; // string | Подпись запроса.

try {
    $result = $apiInstance->submit3DSAuthorizationV2($payment_id, $terminal_key, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class3DSApi->submit3DSAuthorizationV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_id** | **string**| Уникальный идентификатор транзакции в системе Т‑Бизнес. | |
| **terminal_key** | **string**| Идентификатор терминала, выдается мерчанту в Т‑Бизнес. | |
| **token** | **string**| Подпись запроса. | |

### Return type

[**\TinkoffApi\Model\Submit3DSAuthorizationV2200Response**](../Model/Submit3DSAuthorizationV2200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
