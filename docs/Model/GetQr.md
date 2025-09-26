# # GetQr

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**terminal_key** | **string** | Идентификатор терминала, выдается мерчанту в Т‑Бизнес. |
**payment_id** | **int** | Уникальный идентификатор транзакции в системе Т‑Бизнес. Запрос будет работать, даже если указать значение в формате &#x60;string&#x60;. |
**data_type** | **string** | Тип возвращаемых данных: * &#x60;PAYLOAD&#x60; — в ответе возвращается только Payload — по умолчанию; * &#x60;IMAGE&#x60; — в ответе возвращается SVG изображение QR. | [optional] [default to 'PAYLOAD']
**bank_id** | **string** | Внутренний идентификатор банка, который выбран для оплаты. Cписок доступных &#x60;BankId&#x60; запрашивается методом - [GetQrBankList](#tag/SBP/operation/GetQrBankList). При передаче &#x60;BankId&#x60;, в ответе в параметре &#x60;Data&#x60; будет возвращен deeplink вместо функциональной платежной ссылки (payload).  Следует передавать &#x60;BankId&#x60; только для &#x60;DataType &#x3D; &#39;PAYLOAD&#39;&#x60; или &#x60;null&#x60;. | [optional]
**token** | **string** | Подпись запроса. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
