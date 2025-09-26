# # InitFULLDATA

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_properties** | **string** |  | [optional]
**operation_initiator_type** | **string** | Признак инициатора операции: * &#x60;0&#x60; — оплата без сохранения реквизитов карты для последующего использования. Сценарий «0 — CIT, Credential-Not-Captured». * &#x60;1&#x60; — используется, если мерчант сохраняет карту. Сценарий «1 — Consumer-Initiated, Credential-Captured». * &#x60;2&#x60; — операция по ранее сохранённой карте, инициирована клиентом. Сценарий «2 — Consumer-Initiated, Credential-on-File». * &#x60;R&#x60; — повторяющаяся операция по сохранённой карте без графика. Является Merchant Initiated сценарием — «R &#x3D; Merchant-Initiated, Credential-on-File, Recurring». * &#x60;I&#x60; — повторяющаяся операция по сохраненной карте в соответствии с графиком платежей для погашения кредита. Является Merchant Initiated сценарием — «I &#x3D; Merchant-Initiated, Credential-on-File, Installment».   При передаче в объекте &#x60;DATA&#x60; атрибута &#x60;OperationInitiatorType&#x60; учитывайте взаимосвязь его значений:   * со значением атрибута &#x60;Recurrent&#x60; в методе **Init**;   * со значением атрибута &#x60;RebillId&#x60; в методе **Charge**;   * с типом терминала, используемом для проведения операций — ECOM или AFT.     Подробная таблица — в разделе [Передача признака инициатора операции](#section/Peredacha-priznaka-iniciatora-operacii)    Если передавать значения атрибутов, которые не соответствуют таблице, MAPI вернет ошибку 1126 —  несопоставимые    значения &#x60;rebillId&#x60; или &#x60;Recurrent&#x60; с переданным значением &#x60;OperationInitiatorType&#x60;. | [optional]
**device** | **string** | Тип устройства: * &#x60;SDK&#x60; — вызов из мобильных приложений; * &#x60;Desktop&#x60; — вызов из браузера с десктопа; * &#x60;Mobile&#x60; — вызов из браузера с мобильных устройств. | [optional]
**device_os** | **string** | ОС устройства. | [optional]
**device_web_view** | **bool** | Признак открытия в WebView. | [optional]
**device_browser** | **string** | Браузер. | [optional]
**tinkoff_pay_web** | **bool** | Признак проведения операции через T‑Pay по API. | [optional]
**_** | [**\OpenAPI\Client\Model\LongPay1**](LongPay1.md) |  | [optional]
**_** | [**\OpenAPI\Client\Model\LongPay2**](LongPay2.md) |  | [optional]
**_** | [**\OpenAPI\Client\Model\LongPay3**](LongPay3.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
