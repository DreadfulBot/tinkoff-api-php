# # ItemsParams

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** | Возможные значения: * &#x60;Route&#x60; — способ оплаты. * &#x60;Source&#x60; — источник платежа. * &#x60;CreditAmount&#x60; — сумма выданного кредита в копейках. Возвращается только для платежей в рассрочку. | [optional]
**value** | **string** | Возможные значения: * &#x60;ACQ&#x60;, &#x60;BNPL&#x60;, &#x60;TCB&#x60;, &#x60;SBER&#x60; — для Route. * &#x60;BNPL&#x60;, &#x60;cards&#x60;, &#x60;Installment&#x60;, &#x60;MirPay&#x60;, &#x60;qrsbp&#x60;, &#x60;SberPay&#x60;, &#x60;TinkoffPay&#x60;, &#x60;YandexPay&#x60; — для Source. * Сумма в копейках — для CreditAmount. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
