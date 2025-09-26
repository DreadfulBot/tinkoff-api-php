# # NotificationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**terminal_key** | **string** | Идентификатор терминала, выдается мерчанту в Т‑Бизнес. |
**amount** | **float** | Сумма в копейках. | [optional]
**order_id** | **string** | Идентификатор заказа в системе мерчанта. | [optional]
**success** | **bool** | Успешность прохождения запроса — &#x60;true&#x60;/&#x60;false&#x60;. |
**status** | **string** | Статус привязки. |
**payment_id** | **float** | Идентификатор платежа в системе Т‑Бизнес. | [optional]
**error_code** | **string** | Код ошибки. &#x60;0&#x60; в случае успеха. |
**message** | **string** | Краткое описание ошибки. | [optional]
**details** | **string** | Подробное описание ошибки. | [optional]
**rebill_id** | **string** | Идентификатор автоплатежа. | [optional]
**card_id** | **string** | Идентификатор карты в системе Т‑Бизнес. | [optional]
**pan** | **string** | Замаскированный номер карты. | [optional]
**exp_date** | **string** | Срок действия карты в формате &#x60;MMYY&#x60;, где &#x60;YY&#x60; — две последние цифры года. | [optional]
**token** | **string** | Подпись запроса. Формируется по такому же принципу, как и в случае запросов в Т‑Бизнес. |
**data** | [**\TinkoffApi\Model\DataNotification**](.md) |  | [optional]
**customer_key** | **string** | Идентификатор клиента в системе мерчанта. | [optional]
**request_key** | **string** | Идентификатор запроса на привязку счета. |
**error_message** | **string** | Описание ошибки, если она произошла. | [optional]
**fiscal_number** | **int** | Номер чека в смене. | [optional]
**shift_number** | **int** | Номер смены. | [optional]
**receipt_datetime** | **string** | Дата и время документа из ФН. | [optional]
**fn_number** | **string** | Номер ФН. | [optional]
**ecr_reg_number** | **string** | Регистрационный номер ККТ. | [optional]
**fiscal_document_number** | **int** | Фискальный номер документа. | [optional]
**fiscal_document_attribute** | **int** | Фискальный признак документа. | [optional]
**receipt** | [**\TinkoffApi\Model\NotificationFiscalizationReceipt**](NotificationFiscalizationReceipt.md) |  | [optional]
**type** | **string** | Признак расчета. | [optional]
**ofd** | **string** | Наименование оператора фискальных данных. | [optional]
**url** | **string** | URL-адрес с копией чека. | [optional]
**qr_code_url** | **string** | URL-адрес с QR-кодом для проверки чека в ФНС. | [optional]
**calculation_place** | **string** | Место осуществления расчетов. | [optional]
**cashier_name** | **string** | Имя кассира. | [optional]
**settle_place** | **string** | Место нахождения (установки) ККМ. | [optional]
**account_token** | **string** | Идентификатор привязки счета, назначаемый банком-эмитентом. | [optional]
**bank_member_id** | **string** | Идентификатор банка-эмитента клиента, который будет совершать оплату по привязанному счету — заполнен, если статус &#x60;ACTIVE&#x60;. | [optional]
**bank_member_name** | **string** | Наименование банка-эмитента. Заполнен, если передан &#x60;BankMemberId&#x60;. | [optional]
**notification_type** | **string** | Тип уведомления, всегда — &#x60;LINKACCOUNT&#x60;. | [default to 'LINKACCOUNT']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
