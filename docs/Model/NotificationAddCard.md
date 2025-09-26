# # NotificationAddCard

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**terminal_key** | **string** | Идентификатор терминала. Выдается мерчанту в Т‑Бизнес  при заведении терминала. | [optional]
**customer_key** | **string** | Идентификатор клиента в системе мерчанта. | [optional]
**request_key** | **string** | Идентификатор запроса на привязку карты. | [optional]
**success** | **bool** | Успешность прохождения запроса — &#x60;true&#x60;/&#x60;false&#x60;. | [optional]
**status** | **string** | Статус привязки карты. Возвращается один из двух статусов:   * &#x60;COMPLETED&#x60; — при одностадийной оплате;   * &#x60;REJECTED&#x60; — при двухстадийной оплате. | [optional]
**payment_id** | **float** | Идентификатор платежа в системе Т‑Бизнес. | [optional]
**error_code** | **string** | Код ошибки. &#x60;0&#x60; в случае успеха. | [optional]
**rebill_id** | **string** | Идентификатор автоплатежа. | [optional]
**card_id** | **string** | Идентификатор карты в системе Т‑Бизнес. | [optional]
**pan** | **string** | Замаскированный номер карты. | [optional]
**exp_date** | **string** | Срок действия карты в формате &#x60;MMYY&#x60;, где &#x60;YY&#x60; — две последние цифры года. | [optional]
**token** | **string** | Подпись запроса. Формируется по такому же принципу, как и в случае запросов в Т‑Бизнес. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
