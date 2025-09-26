# # With3DSv2APPAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tds_server_trans_id** | **string** | Уникальный идентификатор транзакции,генерируемый 3DS-Server. Обязательный параметр для 3DS второй версии. |
**acs_trans_id** | **string** | Идентификатор транзакции, присвоенный ACS, который вернулся в ответе **FinishAuthorize**. |
**acs_interface** | **string** | &#x60;Обязательное поле, если &#x60;Transaction Status&#x60; &#x3D; &#x60;C&#x60;.&#x60;&lt;br&gt;&lt;br&gt; Тип пользовательского интерфейса ACS. Возможные значения:   - &#x60;01&#x60; — Native UI,   - &#x60;02&#x60; — HTML UI. | [optional]
**acs_ui_template** | **string** | &#x60;Обязательное поле, если &#x60;Transaction Status&#x60; &#x3D; &#x60;C&#x60;.&#x60;&lt;br&gt;&lt;br&gt;  Формат шаблона пользовательского интерфейса ACS. Возможные значения:     - &#x60;01&#x60; — Text;    - &#x60;02&#x60; — Single Select;    - &#x60;03&#x60; — Multi Select;    - &#x60;04&#x60; — OOB;    - &#x60;05&#x60; — HTML Other (valid only for HTML UI). | [optional]
**acs_signed_content** | **string** | &#x60;Обязательное поле, если &#x60;Transaction Status&#x60; &#x3D; &#x60;C&#x60;.&#x60;&lt;br&gt;&lt;br&gt;  JWS object, представленный как string, который создан ACS для ARes. Содержит:    - ACS URL — 3DS SDK должен отправить Challenge Request на этот URL,    - ACS Ephemeral Public Key (QT),    - SDK Ephemeral Public Key (QC). | [optional]
**acs_reference_number** | **string** | Уникальный идентификатор, назначенный EMVCo. |
**sdk_trans_id** | **string** | Уникальный идентификатор транзакции, назначенный 3DS SDK для идентификации одной транзакции, который вернулся в ответе **FinishAuthorize**. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
