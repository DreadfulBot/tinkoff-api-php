# # SbpPayTest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**terminal_key** | **string** | Идентификатор терминала, выдается мерчанту в Т‑Бизнес. |
**payment_id** | **string** | Идентификатор платежа в системе Т‑Бизнес. |
**token** | **string** | Подпись запроса. |
**is_deadline_expired** | **bool** | Признак эмуляции отказа проведения платежа банком по таймауту. По умолчанию не используется. * &#x60;false&#x60; — эмуляция не требуется, * &#x60;true&#x60; — требуется эмуляция. Не может быть использован вместе с &#x60;IsRejected&#x60; &#x3D; &#x60;true&#x60;. | [optional]
**is_rejected** | **bool** | Признак эмуляции отказа банка в проведении платежа. По умолчанию не используется. * &#x60;false&#x60; — эмуляция не требуется, * &#x60;true&#x60; — требуется эмуляция. Не может быть использован вместе с &#x60;IsDeadlineExpired&#x60; &#x3D; &#x60;true&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
