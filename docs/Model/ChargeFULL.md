# # ChargeFULL

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**terminal_key** | **string** | Идентификатор терминала. &lt;br&gt; Выдается мерчанту в Т‑Бизнес при заведении терминала. |
**payment_id** | **string** | Уникальный идентификатор транзакции в системе Т‑Бизнес. |
**rebill_id** | **string** | Идентификатор рекуррентного платежа. Значение зависит от атрибутов:   * &#x60;OperationInitiatorType&#x60; в методе **init**,   * &#x60;Recurrent&#x60; в методе **Init**.  Подробнее — в описаниях [Рекуррентный платёж](#tag/Rekurrentnyj-platyozh) и [Инициализация платежа](#tag/Standartnyj-platyozh/paths/~1Init/post) |
**token** | **string** | Подпись запроса. |
**ip** | **string** | IP-адрес клиента. | [optional]
**send_email** | **bool** | &#x60;true&#x60; — если клиент хочет получать уведомления на почту. | [optional]
**info_email** | **string** | Адрес почты клиента. Обязателен при передаче &#x60;SendEmail&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
