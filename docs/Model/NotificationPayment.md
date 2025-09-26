# # NotificationPayment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**terminal_key** | **string** | Идентификатор терминала. Выдается мерчанту в Т‑Бизнес при заведении терминала. | [optional]
**amount** | **float** | Сумма в копейках. | [optional]
**order_id** | **string** | Идентификатор заказа в системе мерчанта. | [optional]
**success** | **bool** | Успешность прохождения запроса — &#x60;true&#x60;/&#x60;false&#x60;. | [optional]
**status** | **string** | Статус платежа. | [optional]
**payment_id** | **float** | Уникальный идентификатор транзакции в системе Т‑Бизнес. | [optional]
**error_code** | **string** | Код ошибки. &#x60;0&#x60; в случае успеха. | [optional]
**message** | **string** | Краткое описание ошибки. | [optional]
**details** | **string** | Подробное описание ошибки. | [optional]
**rebill_id** | **float** | Идентификатор автоплатежа. | [optional]
**card_id** | **float** | Идентификатор карты в системе Т‑Бизнес. | [optional]
**pan** | **string** | Замаскированный номер карты или телефона. | [optional]
**exp_date** | **string** | Срок действия карты в формате &#x60;MMYY&#x60;, где &#x60;YY&#x60; — две последние цифры года. | [optional]
**token** | **string** | Подпись запроса. Формируется по такому же принципу, как и в случае запросов в Т‑Бизнес. | [optional]
**data** | [**\TinkoffApi\Model\DataNotification**](.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
