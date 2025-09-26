# # DataNotification

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**route** | **string** | Способ платежа. | [optional]
**source** | **string** | Источник платежа. | [optional]
**credit_amount** | **float** | Сумма выданного кредита в копейках. Возвращается только для платежей в рассрочку, если в запросе [Confirm](https://www.tbank.ru/kassa/dev/payments/#tag/Dvuhstadijnyj-platezh/operation/Confirm) был передан параметр &#x60;Source&#x60; в значении &#x60;Installment&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
