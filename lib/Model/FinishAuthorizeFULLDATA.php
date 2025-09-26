<?php
/**
 * FinishAuthorizeFULLDATA
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  RoxlTBankApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Прием платежей
 *
 * # Начало работы  ## Подключение интернет-эквайринга от Т‑Бизнес  Интернет-эквайринг помогает принимать онлайн-платежи так, как удобно вам и покупателю: на сайте, в мобильном приложении,  соцсетях, мессенджерах, по e-mail или СМС. Вы можете принимать оплату разными способами, возвращать и замораживать выплаты и  настраивать рекуррентные платежи.  Чтобы подключить интернет-эквайринг, оставьте [заявку на сайте Т‑Банка](https://www.tbank.ru/kassa/) и заполните анкету компании или ИП.  Подробнее о подключении можно прочитать [в Т-Помощи](https://www.tbank.ru/business/help/business-payments/internet-acquiring/how-involve/connect/?card=q1) или узнать у персонального менеджера.  ## Способы интеграции интернет-эквайринга от Т‑Бизнес  Интернет-эквайринг нужно интегрировать — настроить оплату на сайте или в приложении. Есть четыре способа интеграции:  * Платежный модуль — для сайтов на CMS. * Платежный виджет — для самописного сайта. * Мобильная интеграция — для мобильного приложения. * API — для разработки своей интеграции.  Интегрироваться можно самостоятельно или с помощью разработчика.  ### Платежный модуль  Способ интеграции интернет-эквайринга с сайтом, который создан на основе CMS.  Модуль подходит, если ваш сайт собран на CMS — например, 1С-Битрикс, WordPress или Taplink. Т‑Бизнес поддерживает многие популярные CMS, в некоторые уже встроены модули — их устанавливать не нужно.  Принцип работы:  1. Вы устанавливаете модуль и настраиваете способы оплаты — банковская карта, T‑Pay, SberPay, Mir Pay, СБП, Долями, в рассрочку.   Можно оставить все способы или выбрать определённые. 2. На странице сайта появляется кнопка оплаты.  3. Покупатель нажимает на кнопку и переходит на платежную форму с разными способами оплаты.  На этой [странице](https://www.tbank.ru/kassa/dev/cms/) представлен список систем управления контентом (CMS), для которых разработаны платежные модули. Если вашего решения нет в этом списке, мы рекомендуем настроить передачу объекта `DATA` с параметром `connection_type`. В этом параметре укажите название модуля, через который вы интегрируетесь. Более подробную информацию вы можете в описании метода [Init](https://www.tbank.ru/kassa/dev/payments/index.html#tag/Standartnyj-platezh/operation/Init). Если у вас возникнут вопросы или потребуется дополнительная настройка, пожалуйста, обратитесь в техническую поддержку вашего модуля.  [Инструкции по интеграции с помощью платежного модуля](https://www.tbank.ru/kassa/dev/cms/)  ### Платежный виджет  Способ интеграции интернет-эквайринга с самописным сайтом.  Способ подходит, если: * ваш сайт самописный или на CMS, для которой в Т‑Банке нет платежного модуля; * вы не планируете принимать автоплатежи.  Для интеграции потребуется помощь программиста.  [Инструкция по интеграции](https://www.tbank.ru/kassa/dev/integrationjs/)   ### Мобильная интеграция  Способ интеграции интернет-эквайринга с мобильным приложением. <!--Покупатель оплачивает товар без перехода в мобильный браузер, оставаясь внутри вашего приложения.-->  Подключение осуществляется через [WebView ПФ](https://www.tbank.ru/kassa/dev/webview/)  ### API  Самый гибкий и сложный способ интеграции интернет-эквайринга. Например, API подходит, если у вас самописный сайт и вы хотите  настроить оплату под запросы бизнеса — совмещать в платежной форме разные способы оплаты, принимать рекуррентные платежи или  подключать другие сервисы Т‑Бизнес.  Для интеграции понадобится помощь программиста.  ## Платежная форма  Платежная форма — это готовый интерфейс с встроенными способами оплаты, который позволяет принимать платежи онлайн.  Для использования платежной формы нужно подключить интернет-эквайринг, настроить терминал и интегрировать платежную форму на ваш сайт одним из способов выше.  Для открытия платежной формы на вашем сайте, требуется выполнить следущие шаги:  1. Ваш бекенд-сервис должен вызвать запрос [Init](https://www.tbank.ru/kassa/dev/payments/#tag/Standartnyj-platezh/operation/Init). 2. Передать `PaymentUrl` из ответа на запрос [Init](https://www.tbank.ru/kassa/dev/payments/#tag/Standartnyj-platezh/operation/Init) в фронтенд-приложение. 3. Произвести редирект на полученный URL. Предпочтительный способ - js-код. Если вы используете html-тег `<form>` для редиректа, используйте `method=\"GET\"`  Для открытия платежной формы в iframe см. раздел \"Платежная форма в iframe\"  ### Платежная форма в WebView <a name=\"WebView\"></a>   WebView — это встроенный в приложение браузер. Таким образом, он представляет собой крупномасштабный программный компонент, который позволяет использовать веб-контент внутри приложений. Инструкция по интеграции мобильного приложения через [WebView](https://www.tbank.ru/kassa/dev/webview/)  ### Платежная форма в iframe  Для корректной работы платежной формы, открытой в iframe, нужно использовать скрипт интеграции по [инструкции](https://www.tbank.ru/kassa/dev/integrationjs/index.html#section/Moduli/Otkrytie-platezhnoj-formy-v-iframe).  ### Кастомизация платежной формы  Платежную форму можно кастомизировать — настроить под себя и своих клиентов. Для  установки кастомизации обратитесь к вашему персональному менеджеру и передайте пожелания по настройкам.  #### Список доступных настроек кастомизации  |**Возможности кастомизации** | **Дополнительное описание**                                                                                                                                                                                          | |--- |----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------| |Брендирование UI платежной формы | <li>Добавлять логотим своей компании в платежную форму — логотип отобразится рядом с суммой заказа </li><li>Управлять цветами кнопок — кнопка **Оплатить** и другие кнопки со страниц статусов и модальных окон</li> | |Управление блоком детализации (информация о заказе и магазине) | <li>Делать блок свернутым и развернутым по умолчанию</li><li> Скрывать  блок с детализацией на платежной форме</li><li>Менять порядок строк в детализации</li>                                                       | |Управление светлой и темной темой | <li>Показывать темную или светлую тему по умолчанию</li><li>Отключать темную или светлую тему</li>                                                                                                                   |   <!--#### Установить последнюю версию Acquiring SDK  <style> .block { text-decoration: none; padding: 2rem; margin: 2rem; border: 0.2rem solid #dddbd9; border-radius: 1rem; box-shadow: 0 1.5rem 0.5rem -0.5rem rgba(70,70,94,.1);  position: auto;  overflow: auto;  }  .ios_upd { text-decoration: none; padding: 10px; margin: 10px; border: 1px solid #949996; border-radius: 1rem; box-shadow: 0 1.5rem 0.5rem -0.5rem rgba(70,70,94,.1);  position: auto;  overflow: auto; display: none; } .android_upd { text-decoration: none; padding: 10px; margin: 10px; border: 1px solid #949996; border-radius: 1rem; box-shadow: 0 1.5rem 0.5rem -0.5rem rgba(70,70,94,.1);  position: auto;  overflow: auto; display: none; } p:hover + .ios_upd { display: block; } p:hover + .android_upd { display: block; } .updtext {  text-decoration: underline;  text-decoration-style: dotted; } </style> <div class=\"block\">  IOS  <br>  Релиз 3.1.1 от 12.09.2023  <br>  <a href=\"https://github.com/tinkoff-mobile-tech/AcquiringSdk_IOS\">Ссылка на скачивание</a>  <p class=\"updtext\">Что изменилось (?)</p>   <div class=\"ios_upd\">    <ul>     <li>Новая фича </li>     <li>ещё одна новая фича</li>     <li>ещё одна</li>    </ul>   </div> </div> <div class=\"block\">  Android  <br>  Релиз 3.1.2 от 12.09.2023  <br>  <a href=\"https://github.com/tinkoff-mobile-tech/AcquiringSdkAndroid\">Ссылка на скачивание</a>  <p class=\"updtext\">Что изменилось (?)</p>   <div class=\"android_upd\">    <ul>     <li>Новая фича </li>     <li>ещё одна новая фича</li>     <li>ещё одна</li>    </ul>   </div> </div> -->  ## Безопасность при интеграции  Убедитесь, что вы используете последнюю версию интеграции и [генерируете и передаете корректный токен](https://www.tbank.ru/kassa/dev/payments/#section/Token) при любом способе интеграции.   Если ваш сайт собран на CMS, нужно использовать новейшую версию платежного модуля, доступную на [сайте Т‑Бизнес](https://www.tbank.ru/kassa/dev/cms/) — это источник актуальных версий. Современные модули для популярных CMS генерируют корректный токен автоматически.  Дополнительные обязательные меры, которые нужно соблюдать при интеграции с MAPI:   1. Сверяйте параметры созданных заказов при любых способах интеграции с MAPI, особенно при использовании платежного виджета. Если вы обнаружите несоответствие между ожидаемой суммой заказа и фактической суммой операции, не отправляйте товар и немедленно свяжитесь с Т‑Банком.   Для сверки параметров доступно несколько способов:  - Получение уведомлений:     - По электронной почте: когда платёж переходит в статус `CONFIRMED`, на указанную почту будет отправлено письмо     - По HTTP: MAPI отправляет POST-запрос на указанный URL при каждом изменении статуса платежа  - Вызов метода [GetState](#tag/Standartnyj-platezh/operation/GetState):     - Метод GetState возвращает основные параметры и текущий статус платежа. Рекомендуется дополнительно проверять или подтверждать дополнительные данные заказа, такие как `PaymentId` и `Amount`. Особенно важно сравнивать сумму Amount, полученную в уведомлении или через метод GetState, с ожидаемой стоимостью заказа. Это поможет избежать ошибок при обработке платежей.  2. Обновляйте модули для CMS. Современные модули для популярных CMS сверяют суммы заказов автоматически.  Если вы не применяете эти меры безопасности на вашем сайте или используете программное обеспечение для интеграции не с [сайта Т‑Бизнес](https://www.tbank.ru/kassa/develop/), вы сами отвечаете за возможные риски и неблагоприятные последствия, связанные с использованием такого программного обеспечения.  ## Обработка карточных данных  Платежные системы разработали требования к безопасности карточных данных клиентов — **Payment Card Industry Data Security Standard** (PCI DSS). Стандарт PCI DSS — это международный стандарт безопасности, созданный специально для защиты данных платежных карт. Он позволяет защитить организацию от инцидентов безопасности и обеспечить необходимый уровень защищенности во всей платежной системе. Соответствовать правилам стандарта PCI DSS должны все организации.  Если:  - У вас нет сертификации PCI DSS, вы можете использовать платежную форму Т‑Бизнес. В этом случае все операции, которые связаны с обработкой критичных данных, проводятся на стороне Т‑Бизнес. Мерчанту достаточно настроить интеграцию с MerchantAPI и инициализировать платеж. Клиент будет перенаправлен на платежную форму, в которую он сможет ввести данные карты. Когда платеж завершится, клиент снова увидит сайт мерчанта.  - Вы имеете сертификацию PCI DSS, то можете собирать и хранить карточные данные клиентов. В этом случае MerchantAPI получает зашифрованные карточные данные от мерчанта.  [Подробнее о режимах передачи карточных данных](#tag/Scenarii-oplaty-po-karte/Scenarii-platezha)  # Передача признака инициатора операции  Платежные системы хотят понимать, кем была инициирована карточная операция. Это особенно важно при проведении операций без 3DS  и по сохраненным данным.  Для выполнения требования регулятора мы добавили новый атрибут `OperationInitiatorType` в метод [Init](#tag/Standartnyj-platezh/operation/Init). В значении этого атрибута мы ожидаем получать признак того, кем была инициирована операция и какой способ предоставления реквизитов был использован.  Подробное описание сценариев проведения операций, значений `OperationInitiatorType`, взаимосвязь с другими атрибутами и типами терминалов:  | Тип операции и инициатор                                     | Описание                                                                                                                                                                                                                                                                            | Сценарий карточной операции                                        | OperationInitiatorType | RebillId в [Charge](#tag/Rekurrentnyj-platezh/operation/ChargePCI) | Recurrent в [Init](#tag/Standartnyj-platezh/operation/Init) | Обязательность CVP2/CVV             | Обязательность аутентификации (3DS) | |--------------------------------------------------------------|-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|--------------------------------------------------------------------|------------------------|--------------------------------------------------------------------|-------------------------------------------------------------|-------------------------------------|-------------------------------------| |Сustomer Initiated Credential-Not-Captured (CIT CNC)          | Оплата, инициированная покупателем, без сохранения реквизитов карты для последующих платежей.                                                                                                                                                                                       | Стандартный платеж                                                 |0                       |null                                                                | N                                                           |Обязателен, если не используется 3DS |Обязательна, если нет CVP2/CVV       | |Сustomer Initiated Credential-Captured (CIT CC)               | Оплата, инициированная покупателем, с сохранением реквизитов карты для последующих платежей.                                                                                                                                                                                        | Стандартный платеж с созданием родительского рекуррентного платежа |1                       |null                                                                | Y                                                           |Обязателен, если не используется 3DS |Обязательна, если нет CVP2/CVV       | |Сustomer Initiated Credential-on-File (CIT COF)               | Оплата, инициированная покупателем, по сохраненным реквизитам карты (ранее была проведена операция с сохранением реквизитов CIT CC).                                                                                                                                                | Рекуррентный платеж, инициированный покупателем                    |2                       |not null                                                            | N                                                           |Нет                                  |Нет                                  | |Merchant Initiated Credential-on-File, Recurring (MIT COF R)  | Повторяющиеся платежи, инициированные магазином, **без графика** (ранее была проведена операция с сохранением реквизитов CIT CC). Применяется для оплаты коммунальных услуг, услуг связи и т.д. Сумма может быть определена заранее или непосредственно перед оплатой.              | Рекуррентный платеж, инициированный магазином                      |R                       |not null                                                            | N                                                           |Нет                                  |Нет                                  | |Merchant Credential-on-File, Installment (MIT COF I)          | Повторяющиеся платежи, инициированные магазином, **по графику** (ранее была проведена операция с сохранением реквизитов CIT CC). Применяется для платежей в рассрочку, оплаты страховки в рассрочку и т.д. График платежей должен быть известен плательщику до проведения операции. | Рекуррентный платеж, инициированный магазином                      |I                       |not null                                                            | N                                                           |Нет                                  |Нет                                  |  # Термины | **Термин**                  | Определение                                                                                                                                                                                                                                                                               | |-----------------------------|-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------| | **Клиент**                  | Физлицо, производящее перевод с использованием банковской карты на сайте мерчанта.                                                                                                                                                                                                        | | **Мерчант**                 | Бизнес, принимающий и осуществляющий переводы по банковским картам на своем сайте.                                                                                                                                                                                                        | | **Т‑Бизнес**                 | Сервис, помогающий проводить выплату клиенту-физлицу.                                                                                                                                                                                                                                     | | **Эмитент**                 | Банк, выпустивший карту клиента-физлица.                                                                                                                                                                                                                                                  | | **PCI DSS**                 | Международный стандарт безопасности, созданный для защиты данных банковских карт.                                                                                                                                                                                                         | | **3-D Secure**              | Протокол, который используется как дополнительный уровень безопасности для онлайн-кредитных и дебетовых карт. 3-D Secure добавляет ещё один шаг аутентификации для онлайн-платежей.                                                                                                       | | **Терминал**                | Точка приема платежей мерчанта. В общем случае привязывается к сайту, на котором осуществляется прием платежей. Далее в этой документации описан протокол для терминала мерчанта. <br> Для проведения тестов используются данные тестового терминала TinkoffBankTest — пароль аналогичен. | | **ККМ**                     | Контрольно-кассовая машина.                                                                                                                                                                                                                                                               | | **Личный кабинет мерчанта** | [Веб-приложение](https://business.tbank.ru/oplata/main), в котором мерчант управляет интернет-эквайрингом — настраивает параметры терминалов, подтверждает или отменяет платежи, анализирует статистику.                                                                                  |   # Параметры терминала  Каждый терминал обладает свойствами, которые влияют на те или иные аспекты приёма платежей. Эти свойства настраиваются при подключении интернет-эквайринга и могут быть изменены в личном кабинете мерчанта.  Основные параметры приёма платежей для терминала:  | Название параметра                        | Формат                                | Описание                                                                                                                                                                                                                                                                    | |-------------------------------------------|---------------------------------------|-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------| | TerminalKey                               | 20 символов, чувствительно к регистру | Уникальный символьный ключ терминала. Устанавливается в Т‑Бизнес.                                                                                                                                                                                                             | | Success URL                               | 250 символов, чувствительно к регистру | URL на веб-сайте мерчанта, куда будет переведен клиент в случае успешной оплаты <br> • true — платеж завершился успешно; <br> • false — платеж не завершился. *                                                                                                             | | Fail URL                                  | 250 символов, чувствительно к регистру | URL на веб-сайте мерчанта, куда будет переведен клиент в случае неуспешной оплаты. *                                                                                                                                                                                        | | Success Add Card URL                      | 250 символов, чувствительно к регистру | URL на веб-сайте мерчанта, куда будет переведен клиент после успешной привязки карты. *                                                                                                                                                                                     | | Fail Add Card URL                         | 250 символов, чувствительно к регистру | URL на веб-сайте мерчанта, куда будет переведен клиент после неуспешной привязки карты. *                                                                                                                                                                                   | | Notification URL                          | 250 символов, чувствительно к регистру | URL на веб-сайте мерчанта, куда будет отправлен POST запрос о статусе выполнения вызываемых методов. Только для методов **Authorize**, [FinishAuthorize](#tag/Standartnyj-platezh/operation/FinishAuthorize), [Confirm](#tag/Dvuhstadijnyj-platezh/operation/Confirm), [Cancel](#tag/Otmena-platezha/operation/Cancel). | | Валюта терминала                          | 3 символа                             | Валюта, в которой будут происходить списания по данному терминалу, если иное не передано в запросе.                                                                                                                                                                         | | Активность терминала                      | Рабочий/Неактивный/Тестовый           | Определяет режим работы данного терминала.                                                                                                                                                                                                                                  | | Password                                  | 20 символов, чувствительно к регистру | Используется для подписи запросов/ответов. Является секретной информацией, известной только мерчанту и Т‑Бизнес. Пароль находится в [личном кабинете](https://business.tbank.ru/oplata/main) мерчанта.                                                                       | | Отправлять нотификацию на FinishAuthorize | Да/Нет                                | Определяет, будет ли отправлена нотификация на выполнение метода [FinishAuthorize](#tag/Standartnyj-platezh/operation/FinishAuthorize). По умолчанию — да.                                                                                                                  | | Отправлять нотификацию на Completed       | Да/Нет                                | Определяет, будет ли отправлена нотификация на выполнение метода [AttachCard](#tag/Metody-raboty-s-kartami/operation/AttachCard). По умолчанию — да.                                                                                                                        | | Отправлять нотификацию на Reversed        | Да/Нет                                | Определяет, будет ли отправлена нотификация на выполнение метода [Cancel](#tag/Otmena-platezha/operation/Cancel). По умолчанию — да.                                                                                                                                        |  \\* В URL можно указать нужные параметры в виде ${<параметр>}, которые будут переданы на URL через метод **GET**.  # Токен  Перед выполнением запроса MAPI проверяет, можно ли доверять его инициатору. Для этого сервер проверяет подпись запроса.  В MAPI используется механизм подписи с помощью токена. Мерчант должен добавлять токен к каждому запросу, где это требуется.   > В описании входных параметров для каждого метода мы указали, нужно подписывать запрос или нет. Токен формируется на  основании тех полей, которые есть в запросе, поэтому токены для каждого запроса уникальные и никогда не совпадают.  **Токен** в MAPI — это строка, в которой мерчант зашифровал данные своего запроса с помощью пароля. Для создания токена  мерчант использует пароль из личного кабинета мерчанта.  Пример процесса шифрования тела запроса для метода [Init](#tag/Standartnyj-platezh/operation/Init):  ```json {   \"TerminalKey\": \"MerchantTerminalKey\",   \"Amount\": 19200,   \"OrderId\": \"21090\",   \"Description\": \"Подарочная карта на 1000 рублей\",   \"Token\": \"68711168852240a2f34b6a8b19d2cfbd296c7d2a6dff8b23eda6278985959346\",   \"DATA\": {     \"Phone\": \"+71234567890\",     \"Email\": \"a@test.com\"   },   \"Receipt\": {     \"Email\": \"a@test.ru\",     \"Phone\": \"+79031234567\",     \"Taxation\": \"osn\",     \"Items\": [       {         \"Name\": \"Наименование товара 1\",         \"Price\": 10000,         \"Quantity\": 1,         \"Amount\": 10000,         \"Tax\": \"vat10\",         \"Ean13\": \"303130323930303030630333435\"       },       {         \"Name\": \"Наименование товара 2\",         \"Price\": 3500,         \"Quantity\": 2,         \"Amount\": 7000,         \"Tax\": \"vat20\"       },       {         \"Name\": \"Наименование товара 3\",         \"Price\": 550,         \"Quantity\": 4,         \"Amount\": 4200,         \"Tax\": \"vat10\"       }     ]   } } ```  Чтобы зашифровать данные запроса, мерчанту нужно:  1. Собрать массив передаваемых данных в виде пар ключ-значения. В массив нужно добавить только параметры корневого объекта.  Вложенные объекты и массивы не участвуют в расчете токена. В примере в массив включены параметры `TerminalKey`, `Amount`, `OrderId`, `Description`  и исключен объект `Receipt` и `DATA`.  ``` JSON [{\"TerminalKey\": \"MerchantTerminalKey\"},{\"Amount\": \"19200\"},{\"OrderId\": \"21090\"},{\"Description\": \"Подарочная карта на 1000 рублей\"}] ```  2. Добавить в массив пару {`Password`, Значение пароля}. Пароль можно найти в личном кабинете мерчанта.  ``` JSON [{\"TerminalKey\": \"MerchantTerminalKey\"},{\"Amount\": \"19200\"},{\"OrderId\": \"21090\"},{\"Description\": \"Подарочная карта на 1000 рублей\"},{\"Password\": \"usaf8fw8fsw21g\"}] ```  3. Отсортировать массив по алфавиту по ключу.  ```JSON [{\"Amount\": \"19200\"},{\"Description\": \"Подарочная карта на 1000 рублей\"},{\"OrderId\": \"21090\"},{\"Password\": \"usaf8fw8fsw21g\"},{\"TerminalKey\": \"MerchantTerminalKey\"}] ```  4. Конкатенировать только значения пар в одну строку.  ```JSON \"19200Подарочная карта на 1000 рублей21090usaf8fw8fsw21gMerchantTerminalKey\" ```  5. Применить к строке хеш-функцию SHA-256 (с поддержкой UTF-8).  ```JSON \"0024a00af7c350a3a67ca168ce06502aa72772456662e38696d48b56ee9c97d9\" ```  6. Добавить получившийся результат в значение параметра `Token` в тело запроса и отправить запрос.  ```JSON {   \"TerminalKey\": \"MerchantTerminalKey\",   \"Amount\": 19200,   \"OrderId\": \"21090\",   \"Description\": \"Подарочная карта на 1000 рублей\",   \"DATA\": {     \"Phone\": \"+71234567890\",     \"Email\": \"a@test.com\"   },   \"Receipt\": {     \"Email\": \"a@test.ru\",     \"Phone\": \"+79031234567\",     \"Taxation\": \"osn\",     \"Items\": [       {         \"Name\": \"Наименование товара 1\",         \"Price\": 10000,         \"Quantity\": 1,         \"Amount\": 10000,         \"Tax\": \"vat10\",         \"Ean13\": \"303130323930303030630333435\"       },       {         \"Name\": \"Наименование товара 2\",         \"Price\": 20000,         \"Quantity\": 2,         \"Amount\": 40000,         \"Tax\": \"vat20\"       },       {         \"Name\": \"Наименование товара 3\",         \"Price\": 30000,         \"Quantity\": 3,         \"Amount\": 90000,         \"Tax\": \"vat10\"       }     ]   },   \"Token\": \"0024a00af7c350a3a67ca168ce06502aa72772456662e38696d48b56ee9c97d9\" } ```  > Информацию о корректности токена также можно проверить в личном кабинете интернет-эквайринга в разделе **Операции**. Выберите нужный заказ → **Дополнительная информация о заказе** → поле **inittokenisvalid**. Если значение в этом поле `true` — токен валидный, `false` — некорректный.
 *
 * The version of the OpenAPI document: 1.80
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace RoxlTBankApi\Model;

use \ArrayAccess;
use \RoxlTBankApi\ObjectSerializer;

/**
 * FinishAuthorizeFULLDATA Class Doc Comment
 *
 * @category Class
 * @description JSON-объект, который содержит дополнительные параметры в виде &#x60;ключ&#x60;:&#x60;значение&#x60;. Эти параметры будут переданы на страницу оплаты, если она кастомизирована.   Максимальная длина для каждого передаваемого параметра: * ключ — 20 знаков, * значение — 100 знаков.    Максимальное количество пар &#x60;ключ&#x60;:&#x60;значение&#x60; — не больше 20.
 * @package  RoxlTBankApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FinishAuthorizeFULLDATA implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FinishAuthorize_FULL_DATA';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'three_ds_comp_ind' => 'string',
        'language' => 'string',
        'timezone' => 'string',
        'screen_height' => 'string',
        'screen_width' => 'string',
        'cres_callback_url' => 'string',
        'color_depth' => 'string',
        'java_enabled' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'three_ds_comp_ind' => null,
        'language' => null,
        'timezone' => null,
        'screen_height' => null,
        'screen_width' => null,
        'cres_callback_url' => null,
        'color_depth' => null,
        'java_enabled' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'three_ds_comp_ind' => false,
		'language' => false,
		'timezone' => false,
		'screen_height' => false,
		'screen_width' => false,
		'cres_callback_url' => false,
		'color_depth' => false,
		'java_enabled' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'three_ds_comp_ind' => 'threeDSCompInd',
        'language' => 'language',
        'timezone' => 'timezone',
        'screen_height' => 'screen_height',
        'screen_width' => 'screen_width',
        'cres_callback_url' => 'cresCallbackUrl',
        'color_depth' => 'colorDepth',
        'java_enabled' => 'javaEnabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'three_ds_comp_ind' => 'setThreeDsCompInd',
        'language' => 'setLanguage',
        'timezone' => 'setTimezone',
        'screen_height' => 'setScreenHeight',
        'screen_width' => 'setScreenWidth',
        'cres_callback_url' => 'setCresCallbackUrl',
        'color_depth' => 'setColorDepth',
        'java_enabled' => 'setJavaEnabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'three_ds_comp_ind' => 'getThreeDsCompInd',
        'language' => 'getLanguage',
        'timezone' => 'getTimezone',
        'screen_height' => 'getScreenHeight',
        'screen_width' => 'getScreenWidth',
        'cres_callback_url' => 'getCresCallbackUrl',
        'color_depth' => 'getColorDepth',
        'java_enabled' => 'getJavaEnabled'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('three_ds_comp_ind', $data ?? [], null);
        $this->setIfExists('language', $data ?? [], null);
        $this->setIfExists('timezone', $data ?? [], null);
        $this->setIfExists('screen_height', $data ?? [], null);
        $this->setIfExists('screen_width', $data ?? [], null);
        $this->setIfExists('cres_callback_url', $data ?? [], null);
        $this->setIfExists('color_depth', $data ?? [], '48');
        $this->setIfExists('java_enabled', $data ?? [], 'false');
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['three_ds_comp_ind'] === null) {
            $invalidProperties[] = "'three_ds_comp_ind' can't be null";
        }
        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
        if ($this->container['timezone'] === null) {
            $invalidProperties[] = "'timezone' can't be null";
        }
        if ($this->container['screen_height'] === null) {
            $invalidProperties[] = "'screen_height' can't be null";
        }
        if ($this->container['screen_width'] === null) {
            $invalidProperties[] = "'screen_width' can't be null";
        }
        if ($this->container['cres_callback_url'] === null) {
            $invalidProperties[] = "'cres_callback_url' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets three_ds_comp_ind
     *
     * @return string
     */
    public function getThreeDsCompInd()
    {
        return $this->container['three_ds_comp_ind'];
    }

    /**
     * Sets three_ds_comp_ind
     *
     * @param string $three_ds_comp_ind `deviceChannel 02 — BRW`   Идентификатор выполнения 3DS Method: * `Y` — выполнение метода успешно завершено * `N` — выполнение метода завершено неуспешно или метод не выполнялся * `U` — в ответе на вызов метода Check3dsVersion не было получено значение threeDSMethodURL
     *
     * @return self
     */
    public function setThreeDsCompInd($three_ds_comp_ind)
    {

        if (is_null($three_ds_comp_ind)) {
            throw new \InvalidArgumentException('non-nullable three_ds_comp_ind cannot be null');
        }

        $this->container['three_ds_comp_ind'] = $three_ds_comp_ind;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language `deviceChannel 02 — BRW`   Язык браузера в формате `IETF BCP47`. Рекомендуем получать значение в браузере из глобального объекта navigator — `navigator.language`.
     *
     * @return self
     */
    public function setLanguage($language)
    {

        if (is_null($language)) {
            throw new \InvalidArgumentException('non-nullable language cannot be null');
        }

        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets timezone
     *
     * @return string
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param string $timezone `deviceChannel 02 — BRW`   Time-zone пользователя в минутах. Рекомендуем получать значение в браузере через вызов метода **getTimezoneOffset()**.
     *
     * @return self
     */
    public function setTimezone($timezone)
    {

        if (is_null($timezone)) {
            throw new \InvalidArgumentException('non-nullable timezone cannot be null');
        }

        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets screen_height
     *
     * @return string
     */
    public function getScreenHeight()
    {
        return $this->container['screen_height'];
    }

    /**
     * Sets screen_height
     *
     * @param string $screen_height `deviceChannel 02 — BRW`   Высота экрана в пикселях. Рекомендуем получать значение в браузере из глобального объекта screen — `screen.height`.
     *
     * @return self
     */
    public function setScreenHeight($screen_height)
    {

        if (is_null($screen_height)) {
            throw new \InvalidArgumentException('non-nullable screen_height cannot be null');
        }

        $this->container['screen_height'] = $screen_height;

        return $this;
    }

    /**
     * Gets screen_width
     *
     * @return string
     */
    public function getScreenWidth()
    {
        return $this->container['screen_width'];
    }

    /**
     * Sets screen_width
     *
     * @param string $screen_width `deviceChannel 02 — BRW`   Ширина экрана в пикселях. Рекомендуем получать значение в браузере из глобального объекта screen — `screen.width`.
     *
     * @return self
     */
    public function setScreenWidth($screen_width)
    {

        if (is_null($screen_width)) {
            throw new \InvalidArgumentException('non-nullable screen_width cannot be null');
        }

        $this->container['screen_width'] = $screen_width;

        return $this;
    }

    /**
     * Gets cres_callback_url
     *
     * @return string
     */
    public function getCresCallbackUrl()
    {
        return $this->container['cres_callback_url'];
    }

    /**
     * Sets cres_callback_url
     *
     * @param string $cres_callback_url `deviceChannel 02 — BRW`   URL, который будет использоваться для получения результата (CRES) после завершения Challenge Flow  — аутентификации с дополнительным переходом на страницу ACS.
     *
     * @return self
     */
    public function setCresCallbackUrl($cres_callback_url)
    {

        if (is_null($cres_callback_url)) {
            throw new \InvalidArgumentException('non-nullable cres_callback_url cannot be null');
        }

        $this->container['cres_callback_url'] = $cres_callback_url;

        return $this;
    }

    /**
     * Gets color_depth
     *
     * @return string|null
     */
    public function getColorDepth()
    {
        return $this->container['color_depth'];
    }

    /**
     * Sets color_depth
     *
     * @param string|null $color_depth `deviceChannel 02 — BRW`   Глубина цвета в битах. <br> Допустимые значения — 1/4/8/15/16/24/32/48. <br> Рекомендуем получать значение в браузере из глобального объекта screen — `screen.colorDepth`.
     *
     * @return self
     */
    public function setColorDepth($color_depth)
    {

        if (is_null($color_depth)) {
            throw new \InvalidArgumentException('non-nullable color_depth cannot be null');
        }

        $this->container['color_depth'] = $color_depth;

        return $this;
    }

    /**
     * Gets java_enabled
     *
     * @return string|null
     */
    public function getJavaEnabled()
    {
        return $this->container['java_enabled'];
    }

    /**
     * Sets java_enabled
     *
     * @param string|null $java_enabled `deviceChannel 02 — BRW`   Поддерживает ли браузер пользователя Java:  * `true`, * `false`.
     *
     * @return self
     */
    public function setJavaEnabled($java_enabled)
    {

        if (is_null($java_enabled)) {
            throw new \InvalidArgumentException('non-nullable java_enabled cannot be null');
        }

        $this->container['java_enabled'] = $java_enabled;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


