# # With3DSv2APP

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**terminal_key** | **string** | Идентификатор терминала. Выдается мерчанту в Т‑Бизнес при заведении терминала. |
**amount** | **float** | Сумма в копейках. |
**order_id** | **string** | Идентификатор заказа в системе мерчанта. |
**success** | **bool** | Успешность прохождения запроса — &#x60;true&#x60;/&#x60;false&#x60;. |
**status** | **string** | Статус транзакции. Возвращается один из четырех статусов платежа:   * &#x60;CONFIRMED&#x60; — при одностадийной оплате.   * &#x60;AUTHORIZED&#x60; — при двухстадийной оплате.   * &#x60;3DS_CHECKING&#x60; — когда нужно пройти проверку 3-D Secure. Если используется своя ПФ (протокол EACQ C PCI DSS) и платеж завис в этом статусе, нужно обратиться к эмитенту для устранения ошибок оплаты.   * &#x60;REJECTED&#x60; — при неуспешном прохождении платежа. |
**payment_id** | **string** | Идентификатор платежа в системе Т‑Бизнес. | [optional]
**error_code** | **string** | Код ошибки. &#x60;0&#x60; в случае успеха. |
**message** | **string** | Краткое описание ошибки. | [optional]
**details** | **string** | Подробное описание ошибки. | [optional]
**rebill_id** | **string** | Идентификатор рекуррентного платежа. | [optional]
**card_id** | **string** | Идентификатор карты в системе Т‑Бизнес. Передается только для cохраненной карты. | [optional]
**tds_server_trans_id** | **string** | Уникальный идентификатор транзакции,генерируемый 3DS-Server. Обязательный параметр для 3DS второй версии. |
**acs_trans_id** | **string** | Идентификатор транзакции, присвоенный ACS, который вернулся в ответе **FinishAuthorize**. |
**acs_interface** | **string** | &#x60;Обязательное поле, если &#x60;Transaction Status&#x60; &#x3D; &#x60;C&#x60;.&#x60;&lt;br&gt;&lt;br&gt; Тип пользовательского интерфейса ACS. Возможные значения:   - &#x60;01&#x60; — Native UI,   - &#x60;02&#x60; — HTML UI. | [optional]
**acs_ui_template** | **string** | &#x60;Обязательное поле, если &#x60;Transaction Status&#x60; &#x3D; &#x60;C&#x60;.&#x60;&lt;br&gt;&lt;br&gt;  Формат шаблона пользовательского интерфейса ACS. Возможные значения:     - &#x60;01&#x60; — Text;    - &#x60;02&#x60; — Single Select;    - &#x60;03&#x60; — Multi Select;    - &#x60;04&#x60; — OOB;    - &#x60;05&#x60; — HTML Other (valid only for HTML UI). | [optional]
**acs_signed_content** | **string** | &#x60;Обязательное поле, если &#x60;Transaction Status&#x60; &#x3D; &#x60;C&#x60;.&#x60;&lt;br&gt;&lt;br&gt;  JWS object, представленный как string, который создан ACS для ARes. Содержит:    - ACS URL — 3DS SDK должен отправить Challenge Request на этот URL,    - ACS Ephemeral Public Key (QT),    - SDK Ephemeral Public Key (QC). | [optional]
**acs_reference_number** | **string** | Уникальный идентификатор, назначенный EMVCo. |
**sdk_trans_id** | **string** | Уникальный идентификатор транзакции, назначенный 3DS SDK для идентификации одной транзакции, который вернулся в ответе **FinishAuthorize**. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
