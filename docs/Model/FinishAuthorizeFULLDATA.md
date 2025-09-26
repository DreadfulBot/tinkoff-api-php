# # FinishAuthorizeFULLDATA

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**three_ds_comp_ind** | **string** | &#x60;deviceChannel 02 — BRW&#x60;   Идентификатор выполнения 3DS Method: * &#x60;Y&#x60; — выполнение метода успешно завершено * &#x60;N&#x60; — выполнение метода завершено неуспешно или метод не выполнялся * &#x60;U&#x60; — в ответе на вызов метода Check3dsVersion не было получено значение threeDSMethodURL |
**language** | **string** | &#x60;deviceChannel 02 — BRW&#x60;   Язык браузера в формате &#x60;IETF BCP47&#x60;. Рекомендуем получать значение в браузере из глобального объекта navigator — &#x60;navigator.language&#x60;. |
**timezone** | **string** | &#x60;deviceChannel 02 — BRW&#x60;   Time-zone пользователя в минутах. Рекомендуем получать значение в браузере через вызов метода **getTimezoneOffset()**. |
**screen_height** | **string** | &#x60;deviceChannel 02 — BRW&#x60;   Высота экрана в пикселях. Рекомендуем получать значение в браузере из глобального объекта screen — &#x60;screen.height&#x60;. |
**screen_width** | **string** | &#x60;deviceChannel 02 — BRW&#x60;   Ширина экрана в пикселях. Рекомендуем получать значение в браузере из глобального объекта screen — &#x60;screen.width&#x60;. |
**cres_callback_url** | **string** | &#x60;deviceChannel 02 — BRW&#x60;   URL, который будет использоваться для получения результата (CRES) после завершения Challenge Flow  — аутентификации с дополнительным переходом на страницу ACS. |
**color_depth** | **string** | &#x60;deviceChannel 02 — BRW&#x60;   Глубина цвета в битах. &lt;br&gt; Допустимые значения — 1/4/8/15/16/24/32/48. &lt;br&gt; Рекомендуем получать значение в браузере из глобального объекта screen — &#x60;screen.colorDepth&#x60;. | [optional] [default to '48']
**java_enabled** | **string** | &#x60;deviceChannel 02 — BRW&#x60;   Поддерживает ли браузер пользователя Java:  * &#x60;true&#x60;, * &#x60;false&#x60;. | [optional] [default to 'false']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
