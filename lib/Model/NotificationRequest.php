<?php
/**
 * NotificationRequest
 *
 * PHP version 8.1
 *
 * @category Class
 * @package  TinkoffApi
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
 * Generator version: 7.15.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TinkoffApi\Model;

use \ArrayAccess;
use \TinkoffApi\ObjectSerializer;

/**
 * NotificationRequest Class Doc Comment
 *
 * @category Class
 * @package  TinkoffApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NotificationRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Notification_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'terminal_key' => 'string',
        'amount' => 'float',
        'order_id' => 'string',
        'success' => 'bool',
        'status' => 'string',
        'payment_id' => 'float',
        'error_code' => 'string',
        'message' => 'string',
        'details' => 'string',
        'rebill_id' => 'string',
        'card_id' => 'string',
        'pan' => 'string',
        'exp_date' => 'string',
        'token' => 'string',
        'data' => '\TinkoffApi\Model\DataNotification',
        'customer_key' => 'string',
        'request_key' => 'string',
        'error_message' => 'string',
        'fiscal_number' => 'int',
        'shift_number' => 'int',
        'receipt_datetime' => 'string',
        'fn_number' => 'string',
        'ecr_reg_number' => 'string',
        'fiscal_document_number' => 'int',
        'fiscal_document_attribute' => 'int',
        'receipt' => '\TinkoffApi\Model\NotificationFiscalizationReceipt',
        'type' => 'string',
        'ofd' => 'string',
        'url' => 'string',
        'qr_code_url' => 'string',
        'calculation_place' => 'string',
        'cashier_name' => 'string',
        'settle_place' => 'string',
        'account_token' => 'string',
        'bank_member_id' => 'string',
        'bank_member_name' => 'string',
        'notification_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'terminal_key' => null,
        'amount' => null,
        'order_id' => null,
        'success' => null,
        'status' => null,
        'payment_id' => null,
        'error_code' => null,
        'message' => null,
        'details' => null,
        'rebill_id' => null,
        'card_id' => null,
        'pan' => null,
        'exp_date' => null,
        'token' => null,
        'data' => null,
        'customer_key' => null,
        'request_key' => 'uuid',
        'error_message' => null,
        'fiscal_number' => null,
        'shift_number' => null,
        'receipt_datetime' => 'datetime',
        'fn_number' => null,
        'ecr_reg_number' => null,
        'fiscal_document_number' => null,
        'fiscal_document_attribute' => null,
        'receipt' => null,
        'type' => null,
        'ofd' => null,
        'url' => null,
        'qr_code_url' => null,
        'calculation_place' => null,
        'cashier_name' => null,
        'settle_place' => null,
        'account_token' => null,
        'bank_member_id' => null,
        'bank_member_name' => null,
        'notification_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'terminal_key' => false,
        'amount' => false,
        'order_id' => false,
        'success' => false,
        'status' => false,
        'payment_id' => false,
        'error_code' => false,
        'message' => false,
        'details' => false,
        'rebill_id' => false,
        'card_id' => false,
        'pan' => false,
        'exp_date' => false,
        'token' => false,
        'data' => false,
        'customer_key' => false,
        'request_key' => false,
        'error_message' => false,
        'fiscal_number' => false,
        'shift_number' => false,
        'receipt_datetime' => false,
        'fn_number' => false,
        'ecr_reg_number' => false,
        'fiscal_document_number' => false,
        'fiscal_document_attribute' => false,
        'receipt' => false,
        'type' => false,
        'ofd' => false,
        'url' => false,
        'qr_code_url' => false,
        'calculation_place' => false,
        'cashier_name' => false,
        'settle_place' => false,
        'account_token' => false,
        'bank_member_id' => false,
        'bank_member_name' => false,
        'notification_type' => false
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
        'terminal_key' => 'TerminalKey',
        'amount' => 'Amount',
        'order_id' => 'OrderId',
        'success' => 'Success',
        'status' => 'Status',
        'payment_id' => 'PaymentId',
        'error_code' => 'ErrorCode',
        'message' => 'Message',
        'details' => 'Details',
        'rebill_id' => 'RebillId',
        'card_id' => 'CardId',
        'pan' => 'Pan',
        'exp_date' => 'ExpDate',
        'token' => 'Token',
        'data' => 'DATA',
        'customer_key' => 'CustomerKey',
        'request_key' => 'RequestKey',
        'error_message' => 'ErrorMessage',
        'fiscal_number' => 'FiscalNumber',
        'shift_number' => 'ShiftNumber',
        'receipt_datetime' => 'ReceiptDatetime',
        'fn_number' => 'FnNumber',
        'ecr_reg_number' => 'EcrRegNumber',
        'fiscal_document_number' => 'FiscalDocumentNumber',
        'fiscal_document_attribute' => 'FiscalDocumentAttribute',
        'receipt' => 'Receipt',
        'type' => 'Type',
        'ofd' => 'Ofd',
        'url' => 'Url',
        'qr_code_url' => 'QrCodeUrl',
        'calculation_place' => 'CalculationPlace',
        'cashier_name' => 'CashierName',
        'settle_place' => 'SettlePlace',
        'account_token' => 'AccountToken',
        'bank_member_id' => 'BankMemberId',
        'bank_member_name' => 'BankMemberName',
        'notification_type' => 'NotificationType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'terminal_key' => 'setTerminalKey',
        'amount' => 'setAmount',
        'order_id' => 'setOrderId',
        'success' => 'setSuccess',
        'status' => 'setStatus',
        'payment_id' => 'setPaymentId',
        'error_code' => 'setErrorCode',
        'message' => 'setMessage',
        'details' => 'setDetails',
        'rebill_id' => 'setRebillId',
        'card_id' => 'setCardId',
        'pan' => 'setPan',
        'exp_date' => 'setExpDate',
        'token' => 'setToken',
        'data' => 'setData',
        'customer_key' => 'setCustomerKey',
        'request_key' => 'setRequestKey',
        'error_message' => 'setErrorMessage',
        'fiscal_number' => 'setFiscalNumber',
        'shift_number' => 'setShiftNumber',
        'receipt_datetime' => 'setReceiptDatetime',
        'fn_number' => 'setFnNumber',
        'ecr_reg_number' => 'setEcrRegNumber',
        'fiscal_document_number' => 'setFiscalDocumentNumber',
        'fiscal_document_attribute' => 'setFiscalDocumentAttribute',
        'receipt' => 'setReceipt',
        'type' => 'setType',
        'ofd' => 'setOfd',
        'url' => 'setUrl',
        'qr_code_url' => 'setQrCodeUrl',
        'calculation_place' => 'setCalculationPlace',
        'cashier_name' => 'setCashierName',
        'settle_place' => 'setSettlePlace',
        'account_token' => 'setAccountToken',
        'bank_member_id' => 'setBankMemberId',
        'bank_member_name' => 'setBankMemberName',
        'notification_type' => 'setNotificationType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'terminal_key' => 'getTerminalKey',
        'amount' => 'getAmount',
        'order_id' => 'getOrderId',
        'success' => 'getSuccess',
        'status' => 'getStatus',
        'payment_id' => 'getPaymentId',
        'error_code' => 'getErrorCode',
        'message' => 'getMessage',
        'details' => 'getDetails',
        'rebill_id' => 'getRebillId',
        'card_id' => 'getCardId',
        'pan' => 'getPan',
        'exp_date' => 'getExpDate',
        'token' => 'getToken',
        'data' => 'getData',
        'customer_key' => 'getCustomerKey',
        'request_key' => 'getRequestKey',
        'error_message' => 'getErrorMessage',
        'fiscal_number' => 'getFiscalNumber',
        'shift_number' => 'getShiftNumber',
        'receipt_datetime' => 'getReceiptDatetime',
        'fn_number' => 'getFnNumber',
        'ecr_reg_number' => 'getEcrRegNumber',
        'fiscal_document_number' => 'getFiscalDocumentNumber',
        'fiscal_document_attribute' => 'getFiscalDocumentAttribute',
        'receipt' => 'getReceipt',
        'type' => 'getType',
        'ofd' => 'getOfd',
        'url' => 'getUrl',
        'qr_code_url' => 'getQrCodeUrl',
        'calculation_place' => 'getCalculationPlace',
        'cashier_name' => 'getCashierName',
        'settle_place' => 'getSettlePlace',
        'account_token' => 'getAccountToken',
        'bank_member_id' => 'getBankMemberId',
        'bank_member_name' => 'getBankMemberName',
        'notification_type' => 'getNotificationType'
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('terminal_key', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('order_id', $data ?? [], null);
        $this->setIfExists('success', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('payment_id', $data ?? [], null);
        $this->setIfExists('error_code', $data ?? [], null);
        $this->setIfExists('message', $data ?? [], null);
        $this->setIfExists('details', $data ?? [], null);
        $this->setIfExists('rebill_id', $data ?? [], null);
        $this->setIfExists('card_id', $data ?? [], null);
        $this->setIfExists('pan', $data ?? [], null);
        $this->setIfExists('exp_date', $data ?? [], null);
        $this->setIfExists('token', $data ?? [], null);
        $this->setIfExists('data', $data ?? [], null);
        $this->setIfExists('customer_key', $data ?? [], null);
        $this->setIfExists('request_key', $data ?? [], null);
        $this->setIfExists('error_message', $data ?? [], null);
        $this->setIfExists('fiscal_number', $data ?? [], null);
        $this->setIfExists('shift_number', $data ?? [], null);
        $this->setIfExists('receipt_datetime', $data ?? [], null);
        $this->setIfExists('fn_number', $data ?? [], null);
        $this->setIfExists('ecr_reg_number', $data ?? [], null);
        $this->setIfExists('fiscal_document_number', $data ?? [], null);
        $this->setIfExists('fiscal_document_attribute', $data ?? [], null);
        $this->setIfExists('receipt', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('ofd', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('qr_code_url', $data ?? [], null);
        $this->setIfExists('calculation_place', $data ?? [], null);
        $this->setIfExists('cashier_name', $data ?? [], null);
        $this->setIfExists('settle_place', $data ?? [], null);
        $this->setIfExists('account_token', $data ?? [], null);
        $this->setIfExists('bank_member_id', $data ?? [], null);
        $this->setIfExists('bank_member_name', $data ?? [], null);
        $this->setIfExists('notification_type', $data ?? [], 'LINKACCOUNT');
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

        if ($this->container['terminal_key'] === null) {
            $invalidProperties[] = "'terminal_key' can't be null";
        }
        if (!is_null($this->container['order_id']) && (mb_strlen($this->container['order_id']) > 36)) {
            $invalidProperties[] = "invalid value for 'order_id', the character length must be smaller than or equal to 36.";
        }

        if ($this->container['success'] === null) {
            $invalidProperties[] = "'success' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['error_code'] === null) {
            $invalidProperties[] = "'error_code' can't be null";
        }
        if ((mb_strlen($this->container['error_code']) > 20)) {
            $invalidProperties[] = "invalid value for 'error_code', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['rebill_id']) && (mb_strlen($this->container['rebill_id']) > 20)) {
            $invalidProperties[] = "invalid value for 'rebill_id', the character length must be smaller than or equal to 20.";
        }

        if ($this->container['token'] === null) {
            $invalidProperties[] = "'token' can't be null";
        }
        if (!is_null($this->container['customer_key']) && (mb_strlen($this->container['customer_key']) > 36)) {
            $invalidProperties[] = "invalid value for 'customer_key', the character length must be smaller than or equal to 36.";
        }

        if ($this->container['request_key'] === null) {
            $invalidProperties[] = "'request_key' can't be null";
        }
        if ($this->container['notification_type'] === null) {
            $invalidProperties[] = "'notification_type' can't be null";
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
     * Gets terminal_key
     *
     * @return string
     */
    public function getTerminalKey()
    {
        return $this->container['terminal_key'];
    }

    /**
     * Sets terminal_key
     *
     * @param string $terminal_key Идентификатор терминала, выдается мерчанту в Т‑Бизнес.
     *
     * @return self
     */
    public function setTerminalKey($terminal_key)
    {
        if (is_null($terminal_key)) {
            throw new \InvalidArgumentException('non-nullable terminal_key cannot be null');
        }
        $this->container['terminal_key'] = $terminal_key;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float|null $amount Сумма в копейках.
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }


        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string|null $order_id Идентификатор заказа в системе мерчанта.
     *
     * @return self
     */
    public function setOrderId($order_id)
    {
        if (is_null($order_id)) {
            throw new \InvalidArgumentException('non-nullable order_id cannot be null');
        }
        if ((mb_strlen($order_id) > 36)) {
            throw new \InvalidArgumentException('invalid length for $order_id when calling NotificationRequest., must be smaller than or equal to 36.');
        }

        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets success
     *
     * @return bool
     */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
     * Sets success
     *
     * @param bool $success Успешность прохождения запроса — `true`/`false`.
     *
     * @return self
     */
    public function setSuccess($success)
    {
        if (is_null($success)) {
            throw new \InvalidArgumentException('non-nullable success cannot be null');
        }
        $this->container['success'] = $success;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Статус привязки.
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets payment_id
     *
     * @return float|null
     */
    public function getPaymentId()
    {
        return $this->container['payment_id'];
    }

    /**
     * Sets payment_id
     *
     * @param float|null $payment_id Идентификатор платежа в системе Т‑Бизнес.
     *
     * @return self
     */
    public function setPaymentId($payment_id)
    {
        if (is_null($payment_id)) {
            throw new \InvalidArgumentException('non-nullable payment_id cannot be null');
        }


        $this->container['payment_id'] = $payment_id;

        return $this;
    }

    /**
     * Gets error_code
     *
     * @return string
     */
    public function getErrorCode()
    {
        return $this->container['error_code'];
    }

    /**
     * Sets error_code
     *
     * @param string $error_code Код ошибки. `0` в случае успеха.
     *
     * @return self
     */
    public function setErrorCode($error_code)
    {
        if (is_null($error_code)) {
            throw new \InvalidArgumentException('non-nullable error_code cannot be null');
        }
        if ((mb_strlen($error_code) > 20)) {
            throw new \InvalidArgumentException('invalid length for $error_code when calling NotificationRequest., must be smaller than or equal to 20.');
        }

        $this->container['error_code'] = $error_code;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string|null $message Краткое описание ошибки.
     *
     * @return self
     */
    public function setMessage($message)
    {
        if (is_null($message)) {
            throw new \InvalidArgumentException('non-nullable message cannot be null');
        }
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets details
     *
     * @return string|null
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param string|null $details Подробное описание ошибки.
     *
     * @return self
     */
    public function setDetails($details)
    {
        if (is_null($details)) {
            throw new \InvalidArgumentException('non-nullable details cannot be null');
        }
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets rebill_id
     *
     * @return string|null
     */
    public function getRebillId()
    {
        return $this->container['rebill_id'];
    }

    /**
     * Sets rebill_id
     *
     * @param string|null $rebill_id Идентификатор автоплатежа.
     *
     * @return self
     */
    public function setRebillId($rebill_id)
    {
        if (is_null($rebill_id)) {
            throw new \InvalidArgumentException('non-nullable rebill_id cannot be null');
        }
        if ((mb_strlen($rebill_id) > 20)) {
            throw new \InvalidArgumentException('invalid length for $rebill_id when calling NotificationRequest., must be smaller than or equal to 20.');
        }

        $this->container['rebill_id'] = $rebill_id;

        return $this;
    }

    /**
     * Gets card_id
     *
     * @return string|null
     */
    public function getCardId()
    {
        return $this->container['card_id'];
    }

    /**
     * Sets card_id
     *
     * @param string|null $card_id Идентификатор карты в системе Т‑Бизнес.
     *
     * @return self
     */
    public function setCardId($card_id)
    {
        if (is_null($card_id)) {
            throw new \InvalidArgumentException('non-nullable card_id cannot be null');
        }
        $this->container['card_id'] = $card_id;

        return $this;
    }

    /**
     * Gets pan
     *
     * @return string|null
     */
    public function getPan()
    {
        return $this->container['pan'];
    }

    /**
     * Sets pan
     *
     * @param string|null $pan Замаскированный номер карты.
     *
     * @return self
     */
    public function setPan($pan)
    {
        if (is_null($pan)) {
            throw new \InvalidArgumentException('non-nullable pan cannot be null');
        }
        $this->container['pan'] = $pan;

        return $this;
    }

    /**
     * Gets exp_date
     *
     * @return string|null
     */
    public function getExpDate()
    {
        return $this->container['exp_date'];
    }

    /**
     * Sets exp_date
     *
     * @param string|null $exp_date Срок действия карты в формате `MMYY`, где `YY` — две последние цифры года.
     *
     * @return self
     */
    public function setExpDate($exp_date)
    {
        if (is_null($exp_date)) {
            throw new \InvalidArgumentException('non-nullable exp_date cannot be null');
        }
        $this->container['exp_date'] = $exp_date;

        return $this;
    }

    /**
     * Gets token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param string $token Подпись запроса. Формируется по такому же принципу, как и в случае запросов в Т‑Бизнес.
     *
     * @return self
     */
    public function setToken($token)
    {
        if (is_null($token)) {
            throw new \InvalidArgumentException('non-nullable token cannot be null');
        }
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets data
     *
     * @return \TinkoffApi\Model\DataNotification|null
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param \TinkoffApi\Model\DataNotification|null $data data
     *
     * @return self
     */
    public function setData($data)
    {
        if (is_null($data)) {
            throw new \InvalidArgumentException('non-nullable data cannot be null');
        }
        $this->container['data'] = $data;

        return $this;
    }

    /**
     * Gets customer_key
     *
     * @return string|null
     */
    public function getCustomerKey()
    {
        return $this->container['customer_key'];
    }

    /**
     * Sets customer_key
     *
     * @param string|null $customer_key Идентификатор клиента в системе мерчанта.
     *
     * @return self
     */
    public function setCustomerKey($customer_key)
    {
        if (is_null($customer_key)) {
            throw new \InvalidArgumentException('non-nullable customer_key cannot be null');
        }
        if ((mb_strlen($customer_key) > 36)) {
            throw new \InvalidArgumentException('invalid length for $customer_key when calling NotificationRequest., must be smaller than or equal to 36.');
        }

        $this->container['customer_key'] = $customer_key;

        return $this;
    }

    /**
     * Gets request_key
     *
     * @return string
     */
    public function getRequestKey()
    {
        return $this->container['request_key'];
    }

    /**
     * Sets request_key
     *
     * @param string $request_key Идентификатор запроса на привязку счета.
     *
     * @return self
     */
    public function setRequestKey($request_key)
    {
        if (is_null($request_key)) {
            throw new \InvalidArgumentException('non-nullable request_key cannot be null');
        }
        $this->container['request_key'] = $request_key;

        return $this;
    }

    /**
     * Gets error_message
     *
     * @return string|null
     */
    public function getErrorMessage()
    {
        return $this->container['error_message'];
    }

    /**
     * Sets error_message
     *
     * @param string|null $error_message Описание ошибки, если она произошла.
     *
     * @return self
     */
    public function setErrorMessage($error_message)
    {
        if (is_null($error_message)) {
            throw new \InvalidArgumentException('non-nullable error_message cannot be null');
        }
        $this->container['error_message'] = $error_message;

        return $this;
    }

    /**
     * Gets fiscal_number
     *
     * @return int|null
     */
    public function getFiscalNumber()
    {
        return $this->container['fiscal_number'];
    }

    /**
     * Sets fiscal_number
     *
     * @param int|null $fiscal_number Номер чека в смене.
     *
     * @return self
     */
    public function setFiscalNumber($fiscal_number)
    {
        if (is_null($fiscal_number)) {
            throw new \InvalidArgumentException('non-nullable fiscal_number cannot be null');
        }
        $this->container['fiscal_number'] = $fiscal_number;

        return $this;
    }

    /**
     * Gets shift_number
     *
     * @return int|null
     */
    public function getShiftNumber()
    {
        return $this->container['shift_number'];
    }

    /**
     * Sets shift_number
     *
     * @param int|null $shift_number Номер смены.
     *
     * @return self
     */
    public function setShiftNumber($shift_number)
    {
        if (is_null($shift_number)) {
            throw new \InvalidArgumentException('non-nullable shift_number cannot be null');
        }
        $this->container['shift_number'] = $shift_number;

        return $this;
    }

    /**
     * Gets receipt_datetime
     *
     * @return string|null
     */
    public function getReceiptDatetime()
    {
        return $this->container['receipt_datetime'];
    }

    /**
     * Sets receipt_datetime
     *
     * @param string|null $receipt_datetime Дата и время документа из ФН.
     *
     * @return self
     */
    public function setReceiptDatetime($receipt_datetime)
    {
        if (is_null($receipt_datetime)) {
            throw new \InvalidArgumentException('non-nullable receipt_datetime cannot be null');
        }
        $this->container['receipt_datetime'] = $receipt_datetime;

        return $this;
    }

    /**
     * Gets fn_number
     *
     * @return string|null
     */
    public function getFnNumber()
    {
        return $this->container['fn_number'];
    }

    /**
     * Sets fn_number
     *
     * @param string|null $fn_number Номер ФН.
     *
     * @return self
     */
    public function setFnNumber($fn_number)
    {
        if (is_null($fn_number)) {
            throw new \InvalidArgumentException('non-nullable fn_number cannot be null');
        }
        $this->container['fn_number'] = $fn_number;

        return $this;
    }

    /**
     * Gets ecr_reg_number
     *
     * @return string|null
     */
    public function getEcrRegNumber()
    {
        return $this->container['ecr_reg_number'];
    }

    /**
     * Sets ecr_reg_number
     *
     * @param string|null $ecr_reg_number Регистрационный номер ККТ.
     *
     * @return self
     */
    public function setEcrRegNumber($ecr_reg_number)
    {
        if (is_null($ecr_reg_number)) {
            throw new \InvalidArgumentException('non-nullable ecr_reg_number cannot be null');
        }
        $this->container['ecr_reg_number'] = $ecr_reg_number;

        return $this;
    }

    /**
     * Gets fiscal_document_number
     *
     * @return int|null
     */
    public function getFiscalDocumentNumber()
    {
        return $this->container['fiscal_document_number'];
    }

    /**
     * Sets fiscal_document_number
     *
     * @param int|null $fiscal_document_number Фискальный номер документа.
     *
     * @return self
     */
    public function setFiscalDocumentNumber($fiscal_document_number)
    {
        if (is_null($fiscal_document_number)) {
            throw new \InvalidArgumentException('non-nullable fiscal_document_number cannot be null');
        }
        $this->container['fiscal_document_number'] = $fiscal_document_number;

        return $this;
    }

    /**
     * Gets fiscal_document_attribute
     *
     * @return int|null
     */
    public function getFiscalDocumentAttribute()
    {
        return $this->container['fiscal_document_attribute'];
    }

    /**
     * Sets fiscal_document_attribute
     *
     * @param int|null $fiscal_document_attribute Фискальный признак документа.
     *
     * @return self
     */
    public function setFiscalDocumentAttribute($fiscal_document_attribute)
    {
        if (is_null($fiscal_document_attribute)) {
            throw new \InvalidArgumentException('non-nullable fiscal_document_attribute cannot be null');
        }
        $this->container['fiscal_document_attribute'] = $fiscal_document_attribute;

        return $this;
    }

    /**
     * Gets receipt
     *
     * @return \TinkoffApi\Model\NotificationFiscalizationReceipt|null
     */
    public function getReceipt()
    {
        return $this->container['receipt'];
    }

    /**
     * Sets receipt
     *
     * @param \TinkoffApi\Model\NotificationFiscalizationReceipt|null $receipt receipt
     *
     * @return self
     */
    public function setReceipt($receipt)
    {
        if (is_null($receipt)) {
            throw new \InvalidArgumentException('non-nullable receipt cannot be null');
        }
        $this->container['receipt'] = $receipt;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Признак расчета.
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets ofd
     *
     * @return string|null
     */
    public function getOfd()
    {
        return $this->container['ofd'];
    }

    /**
     * Sets ofd
     *
     * @param string|null $ofd Наименование оператора фискальных данных.
     *
     * @return self
     */
    public function setOfd($ofd)
    {
        if (is_null($ofd)) {
            throw new \InvalidArgumentException('non-nullable ofd cannot be null');
        }
        $this->container['ofd'] = $ofd;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url URL-адрес с копией чека.
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets qr_code_url
     *
     * @return string|null
     */
    public function getQrCodeUrl()
    {
        return $this->container['qr_code_url'];
    }

    /**
     * Sets qr_code_url
     *
     * @param string|null $qr_code_url URL-адрес с QR-кодом для проверки чека в ФНС.
     *
     * @return self
     */
    public function setQrCodeUrl($qr_code_url)
    {
        if (is_null($qr_code_url)) {
            throw new \InvalidArgumentException('non-nullable qr_code_url cannot be null');
        }
        $this->container['qr_code_url'] = $qr_code_url;

        return $this;
    }

    /**
     * Gets calculation_place
     *
     * @return string|null
     */
    public function getCalculationPlace()
    {
        return $this->container['calculation_place'];
    }

    /**
     * Sets calculation_place
     *
     * @param string|null $calculation_place Место осуществления расчетов.
     *
     * @return self
     */
    public function setCalculationPlace($calculation_place)
    {
        if (is_null($calculation_place)) {
            throw new \InvalidArgumentException('non-nullable calculation_place cannot be null');
        }
        $this->container['calculation_place'] = $calculation_place;

        return $this;
    }

    /**
     * Gets cashier_name
     *
     * @return string|null
     */
    public function getCashierName()
    {
        return $this->container['cashier_name'];
    }

    /**
     * Sets cashier_name
     *
     * @param string|null $cashier_name Имя кассира.
     *
     * @return self
     */
    public function setCashierName($cashier_name)
    {
        if (is_null($cashier_name)) {
            throw new \InvalidArgumentException('non-nullable cashier_name cannot be null');
        }
        $this->container['cashier_name'] = $cashier_name;

        return $this;
    }

    /**
     * Gets settle_place
     *
     * @return string|null
     */
    public function getSettlePlace()
    {
        return $this->container['settle_place'];
    }

    /**
     * Sets settle_place
     *
     * @param string|null $settle_place Место нахождения (установки) ККМ.
     *
     * @return self
     */
    public function setSettlePlace($settle_place)
    {
        if (is_null($settle_place)) {
            throw new \InvalidArgumentException('non-nullable settle_place cannot be null');
        }
        $this->container['settle_place'] = $settle_place;

        return $this;
    }

    /**
     * Gets account_token
     *
     * @return string|null
     */
    public function getAccountToken()
    {
        return $this->container['account_token'];
    }

    /**
     * Sets account_token
     *
     * @param string|null $account_token Идентификатор привязки счета, назначаемый банком-эмитентом.
     *
     * @return self
     */
    public function setAccountToken($account_token)
    {
        if (is_null($account_token)) {
            throw new \InvalidArgumentException('non-nullable account_token cannot be null');
        }
        $this->container['account_token'] = $account_token;

        return $this;
    }

    /**
     * Gets bank_member_id
     *
     * @return string|null
     */
    public function getBankMemberId()
    {
        return $this->container['bank_member_id'];
    }

    /**
     * Sets bank_member_id
     *
     * @param string|null $bank_member_id Идентификатор банка-эмитента клиента, который будет совершать оплату по привязанному счету — заполнен, если статус `ACTIVE`.
     *
     * @return self
     */
    public function setBankMemberId($bank_member_id)
    {
        if (is_null($bank_member_id)) {
            throw new \InvalidArgumentException('non-nullable bank_member_id cannot be null');
        }
        $this->container['bank_member_id'] = $bank_member_id;

        return $this;
    }

    /**
     * Gets bank_member_name
     *
     * @return string|null
     */
    public function getBankMemberName()
    {
        return $this->container['bank_member_name'];
    }

    /**
     * Sets bank_member_name
     *
     * @param string|null $bank_member_name Наименование банка-эмитента. Заполнен, если передан `BankMemberId`.
     *
     * @return self
     */
    public function setBankMemberName($bank_member_name)
    {
        if (is_null($bank_member_name)) {
            throw new \InvalidArgumentException('non-nullable bank_member_name cannot be null');
        }
        $this->container['bank_member_name'] = $bank_member_name;

        return $this;
    }

    /**
     * Gets notification_type
     *
     * @return string
     */
    public function getNotificationType()
    {
        return $this->container['notification_type'];
    }

    /**
     * Sets notification_type
     *
     * @param string $notification_type Тип уведомления, всегда — `LINKACCOUNT`.
     *
     * @return self
     */
    public function setNotificationType($notification_type)
    {
        if (is_null($notification_type)) {
            throw new \InvalidArgumentException('non-nullable notification_type cannot be null');
        }
        $this->container['notification_type'] = $notification_type;

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


