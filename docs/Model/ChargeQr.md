# # ChargeQr

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**terminal_key** | **string** | Идентификатор терминала. &lt;br&gt; Выдается мерчанту в Т‑Бизнес при заведении терминала. |
**payment_id** | **string** | Уникальный идентификатор транзакции в системе Т‑Бизнес. |
**account_token** | **string** | Идентификатор привязки счета, назначаемый банком-эмитентом. |
**token** | **string** | Подпись запроса. |
**ip** | **string** | IP-адрес клиента. | [optional]
**send_email** | **bool** | &#x60;true&#x60;, если клиент хочет получать уведомления на почту. | [optional]
**info_email** | **string** | Адрес почты клиента. Обязательно, если передан параметр &#x60;SendEmail&#x60; &#x3D; &#x60;true&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
