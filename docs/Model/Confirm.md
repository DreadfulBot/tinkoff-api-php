# # Confirm

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**terminal_key** | **string** | Идентификатор терминала, выдается мерчанту в Т‑Бизнес. |
**payment_id** | **string** | Идентификатор платежа в системе Т‑Бизнес. |
**token** | **string** | Подпись запроса — хэш &#x60;SHA-256&#x60;. |
**ip** | **string** | IP-адрес клиента. | [optional]
**amount** | **float** | Сумма в копейках. Если не передан, используется &#x60;Amount&#x60;, переданный в методе **Init**. | [optional]
**receipt** | [**\TinkoffApi\Model\ConfirmReceipt**](ConfirmReceipt.md) |  | [optional]
**shops** | [**\TinkoffApi\Model\Shops[]**](Shops.md) | Обязательный для маркетплейсов. JSON-объект с данными маркетплейса. | [optional]
**route** | **string** | Способ платежа. | [optional]
**source** | **string** | Источник платежа. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
