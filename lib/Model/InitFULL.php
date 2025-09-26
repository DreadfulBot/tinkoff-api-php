<?php
/**
 * InitFULL
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
 * InitFULL Class Doc Comment
 *
 * @category Class
 * @package  TinkoffApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class InitFULL implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Init_FULL';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'terminal_key' => 'string',
        'amount' => 'float',
        'order_id' => 'string',
        'token' => 'string',
        'description' => 'string',
        'customer_key' => 'string',
        'recurrent' => 'string',
        'pay_type' => 'string',
        'language' => 'string',
        'notification_url' => 'string',
        'success_url' => 'string',
        'fail_url' => 'string',
        'redirect_due_date' => 'mixed',
        'data' => '\TinkoffApi\Model\InitFULLDATA',
        'receipt' => '\TinkoffApi\Model\InitFULLReceipt',
        'shops' => '\TinkoffApi\Model\Shops[]',
        'descriptor' => 'string'
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
        'token' => null,
        'description' => null,
        'customer_key' => null,
        'recurrent' => null,
        'pay_type' => null,
        'language' => null,
        'notification_url' => 'uri',
        'success_url' => 'uri',
        'fail_url' => 'uri',
        'redirect_due_date' => 'date-time',
        'data' => null,
        'receipt' => null,
        'shops' => null,
        'descriptor' => null
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
        'token' => false,
        'description' => false,
        'customer_key' => false,
        'recurrent' => false,
        'pay_type' => false,
        'language' => false,
        'notification_url' => false,
        'success_url' => false,
        'fail_url' => false,
        'redirect_due_date' => true,
        'data' => false,
        'receipt' => false,
        'shops' => false,
        'descriptor' => false
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
        'token' => 'Token',
        'description' => 'Description',
        'customer_key' => 'CustomerKey',
        'recurrent' => 'Recurrent',
        'pay_type' => 'PayType',
        'language' => 'Language',
        'notification_url' => 'NotificationURL',
        'success_url' => 'SuccessURL',
        'fail_url' => 'FailURL',
        'redirect_due_date' => 'RedirectDueDate',
        'data' => 'DATA',
        'receipt' => 'Receipt',
        'shops' => 'Shops',
        'descriptor' => 'Descriptor'
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
        'token' => 'setToken',
        'description' => 'setDescription',
        'customer_key' => 'setCustomerKey',
        'recurrent' => 'setRecurrent',
        'pay_type' => 'setPayType',
        'language' => 'setLanguage',
        'notification_url' => 'setNotificationUrl',
        'success_url' => 'setSuccessUrl',
        'fail_url' => 'setFailUrl',
        'redirect_due_date' => 'setRedirectDueDate',
        'data' => 'setData',
        'receipt' => 'setReceipt',
        'shops' => 'setShops',
        'descriptor' => 'setDescriptor'
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
        'token' => 'getToken',
        'description' => 'getDescription',
        'customer_key' => 'getCustomerKey',
        'recurrent' => 'getRecurrent',
        'pay_type' => 'getPayType',
        'language' => 'getLanguage',
        'notification_url' => 'getNotificationUrl',
        'success_url' => 'getSuccessUrl',
        'fail_url' => 'getFailUrl',
        'redirect_due_date' => 'getRedirectDueDate',
        'data' => 'getData',
        'receipt' => 'getReceipt',
        'shops' => 'getShops',
        'descriptor' => 'getDescriptor'
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

    public const PAY_TYPE_O = 'O';
    public const PAY_TYPE_T = 'T';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPayTypeAllowableValues()
    {
        return [
            self::PAY_TYPE_O,
            self::PAY_TYPE_T,
        ];
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
        $this->setIfExists('token', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('customer_key', $data ?? [], null);
        $this->setIfExists('recurrent', $data ?? [], null);
        $this->setIfExists('pay_type', $data ?? [], null);
        $this->setIfExists('language', $data ?? [], null);
        $this->setIfExists('notification_url', $data ?? [], null);
        $this->setIfExists('success_url', $data ?? [], null);
        $this->setIfExists('fail_url', $data ?? [], null);
        $this->setIfExists('redirect_due_date', $data ?? [], null);
        $this->setIfExists('data', $data ?? [], null);
        $this->setIfExists('receipt', $data ?? [], null);
        $this->setIfExists('shops', $data ?? [], null);
        $this->setIfExists('descriptor', $data ?? [], null);
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
        if ((mb_strlen($this->container['terminal_key']) > 20)) {
            $invalidProperties[] = "invalid value for 'terminal_key', the character length must be smaller than or equal to 20.";
        }

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['order_id'] === null) {
            $invalidProperties[] = "'order_id' can't be null";
        }
        if ((mb_strlen($this->container['order_id']) > 36)) {
            $invalidProperties[] = "invalid value for 'order_id', the character length must be smaller than or equal to 36.";
        }

        if ($this->container['token'] === null) {
            $invalidProperties[] = "'token' can't be null";
        }
        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 140)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 140.";
        }

        if (!is_null($this->container['customer_key']) && (mb_strlen($this->container['customer_key']) > 36)) {
            $invalidProperties[] = "invalid value for 'customer_key', the character length must be smaller than or equal to 36.";
        }

        if (!is_null($this->container['recurrent']) && (mb_strlen($this->container['recurrent']) > 1)) {
            $invalidProperties[] = "invalid value for 'recurrent', the character length must be smaller than or equal to 1.";
        }

        $allowedValues = $this->getPayTypeAllowableValues();
        if (!is_null($this->container['pay_type']) && !in_array($this->container['pay_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'pay_type', must be one of '%s'",
                $this->container['pay_type'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['language']) && (mb_strlen($this->container['language']) > 2)) {
            $invalidProperties[] = "invalid value for 'language', the character length must be smaller than or equal to 2.";
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
     * @param string $terminal_key Идентификатор терминала. <br> Выдается мерчанту в Т‑Бизнес при заведении терминала.
     *
     * @return self
     */
    public function setTerminalKey($terminal_key)
    {
        if (is_null($terminal_key)) {
            throw new \InvalidArgumentException('non-nullable terminal_key cannot be null');
        }
        if ((mb_strlen($terminal_key) > 20)) {
            throw new \InvalidArgumentException('invalid length for $terminal_key when calling InitFULL., must be smaller than or equal to 20.');
        }

        $this->container['terminal_key'] = $terminal_key;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount * Сумма в копейках. Например, 3 руб. 12коп. — это число 312. * Параметр должен быть равен сумме всех параметров `Amount`, переданных в объекте `Items`. * Минимальная сумма операции с помощью СБП составляет 10 руб.
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
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string $order_id Идентификатор заказа в системе мерчанта. Должен быть уникальным для каждой операции.
     *
     * @return self
     */
    public function setOrderId($order_id)
    {
        if (is_null($order_id)) {
            throw new \InvalidArgumentException('non-nullable order_id cannot be null');
        }
        if ((mb_strlen($order_id) > 36)) {
            throw new \InvalidArgumentException('invalid length for $order_id when calling InitFULL., must be smaller than or equal to 36.');
        }

        $this->container['order_id'] = $order_id;

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
     * @param string $token Подпись запроса.
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
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Описание заказа. Значение параметра будет отображено на платежной форме.     Для привязки и одновременной оплаты по СБП поле обязательное. При оплате через СБП эта информация отобразится в мобильном банке клиента.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        if ((mb_strlen($description) > 140)) {
            throw new \InvalidArgumentException('invalid length for $description when calling InitFULL., must be smaller than or equal to 140.');
        }

        $this->container['description'] = $description;

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
     * @param string|null $customer_key Идентификатор клиента в системе мерчанта.  * Обязателен, если передан атрибут `Recurrent`. * Если был передан в запросе, в нотификации будет указан `CustomerKey` и его `CardId`. Подробнее — в методе [GetCardList](#tag/Metody-raboty-s-kartami/paths/~1GetCardList/post). * Нужен для сохранения карт на платежной форме — платежи в один клик. * Необязателен при рекуррентных платежах через СБП.
     *
     * @return self
     */
    public function setCustomerKey($customer_key)
    {
        if (is_null($customer_key)) {
            throw new \InvalidArgumentException('non-nullable customer_key cannot be null');
        }
        if ((mb_strlen($customer_key) > 36)) {
            throw new \InvalidArgumentException('invalid length for $customer_key when calling InitFULL., must be smaller than or equal to 36.');
        }

        $this->container['customer_key'] = $customer_key;

        return $this;
    }

    /**
     * Gets recurrent
     *
     * @return string|null
     */
    public function getRecurrent()
    {
        return $this->container['recurrent'];
    }

    /**
     * Sets recurrent
     *
     * @param string|null $recurrent Признак родительского рекуррентного платежа. Обязателен для регистрации автоплатежа.    Если передается и установлен в `Y`, регистрирует платеж как рекуррентный.  В этом случае после оплаты в нотификации на `AUTHORIZED` будет передан параметр `RebillId` для использования в методе **Charge**. Для привязки и одновременной оплаты по CБП передавайте `Y`.   Значение зависит от атрибутов:  * `OperationInitiatorType` — в методе `/init`, * `Recurrent` — в методе `/Init`.    Подробнее — в описании методов [Рекуррентный платёж](#tag/Rekurrentnyj-platyozh) и [Инициализация платежа](#tag/Standartnyj-platyozh/paths/~1Init/post).
     *
     * @return self
     */
    public function setRecurrent($recurrent)
    {
        if (is_null($recurrent)) {
            throw new \InvalidArgumentException('non-nullable recurrent cannot be null');
        }
        if ((mb_strlen($recurrent) > 1)) {
            throw new \InvalidArgumentException('invalid length for $recurrent when calling InitFULL., must be smaller than or equal to 1.');
        }

        $this->container['recurrent'] = $recurrent;

        return $this;
    }

    /**
     * Gets pay_type
     *
     * @return string|null
     */
    public function getPayType()
    {
        return $this->container['pay_type'];
    }

    /**
     * Sets pay_type
     *
     * @param string|null $pay_type Определяет тип проведения платежа — двухстадийная или одностадийная оплата:  * `O` — одностадийная оплата, * `T` — двухстадийная оплата.    Если параметр передан — используется его значение, если нет — значение из настроек терминала.
     *
     * @return self
     */
    public function setPayType($pay_type)
    {
        if (is_null($pay_type)) {
            throw new \InvalidArgumentException('non-nullable pay_type cannot be null');
        }
        $allowedValues = $this->getPayTypeAllowableValues();
        if (!in_array($pay_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'pay_type', must be one of '%s'",
                    $pay_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['pay_type'] = $pay_type;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string|null $language Язык платежной формы:  * `ru` — русский, * `en` — английский.    Если не передан, форма откроется на русском языке.
     *
     * @return self
     */
    public function setLanguage($language)
    {
        if (is_null($language)) {
            throw new \InvalidArgumentException('non-nullable language cannot be null');
        }
        if ((mb_strlen($language) > 2)) {
            throw new \InvalidArgumentException('invalid length for $language when calling InitFULL., must be smaller than or equal to 2.');
        }

        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets notification_url
     *
     * @return string|null
     */
    public function getNotificationUrl()
    {
        return $this->container['notification_url'];
    }

    /**
     * Sets notification_url
     *
     * @param string|null $notification_url URL на веб-сайте мерчанта, куда будет отправлен POST-запрос о статусе выполнения вызываемых методов — настраивается  в личном кабинете. Если параметр:  * передан — используется его значение, * не передан — значение из настроек терминала.
     *
     * @return self
     */
    public function setNotificationUrl($notification_url)
    {
        if (is_null($notification_url)) {
            throw new \InvalidArgumentException('non-nullable notification_url cannot be null');
        }
        $this->container['notification_url'] = $notification_url;

        return $this;
    }

    /**
     * Gets success_url
     *
     * @return string|null
     */
    public function getSuccessUrl()
    {
        return $this->container['success_url'];
    }

    /**
     * Sets success_url
     *
     * @param string|null $success_url URL на веб-сайте мерчанта, куда будет переведен клиент в случае успешной оплаты — настраивается в личном кабинете. Если параметр: * передан — используется его значение, * не передан — значение из настроек терминала.
     *
     * @return self
     */
    public function setSuccessUrl($success_url)
    {
        if (is_null($success_url)) {
            throw new \InvalidArgumentException('non-nullable success_url cannot be null');
        }
        $this->container['success_url'] = $success_url;

        return $this;
    }

    /**
     * Gets fail_url
     *
     * @return string|null
     */
    public function getFailUrl()
    {
        return $this->container['fail_url'];
    }

    /**
     * Sets fail_url
     *
     * @param string|null $fail_url URL на веб-сайте мерчанта, куда будет переведен клиент в случае неуспешной оплаты — настраивается в личном кабинете. Если параметр: * передан — используется его значение, * не передан — значение из настроек терминала.
     *
     * @return self
     */
    public function setFailUrl($fail_url)
    {
        if (is_null($fail_url)) {
            throw new \InvalidArgumentException('non-nullable fail_url cannot be null');
        }
        $this->container['fail_url'] = $fail_url;

        return $this;
    }

    /**
     * Gets redirect_due_date
     *
     * @return mixed|null
     */
    public function getRedirectDueDate()
    {
        return $this->container['redirect_due_date'];
    }

    /**
     * Sets redirect_due_date
     *
     * @param mixed|null $redirect_due_date Cрок жизни ссылки или динамического QR-кода СБП, если выбран этот способ оплаты.<br><br> Если текущая дата превышает дату, которая передана в этом параметре, ссылка для оплаты или возможность платежа по QR-коду становятся недоступными и платёж выполнить нельзя.  * Максимальное значение — 90 дней от текущей даты. * Минимальное значение — 1 минута от текущей даты. * Формат даты — `YYYY-MM-DDTHH24:MI:SS+GMT`.  Пример даты: 2016-08-31T12:28:00+03:00. <br>  Если не передан, принимает значение 24 часа для платежа  и 30 дней для счета.  **Выставление счета через личный кабинет** <br><br> Если параметр `RedirectDueDate` не был передан, проверяется настроечный параметр платежного терминала `REDIRECT_TIMEOUT`, который может содержать значение срока жизни ссылки в часах. Если его значение: - больше нуля — оно будет установлено в качестве срока жизни ссылки или динамического QR-кода; - меньше нуля — устанавливается значение по умолчанию: 1440 мин. (1 сутки).
     *
     * @return self
     */
    public function setRedirectDueDate($redirect_due_date)
    {
        if (is_null($redirect_due_date)) {
            array_push($this->openAPINullablesSetToNull, 'redirect_due_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('redirect_due_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['redirect_due_date'] = $redirect_due_date;

        return $this;
    }

    /**
     * Gets data
     *
     * @return \TinkoffApi\Model\InitFULLDATA|null
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param \TinkoffApi\Model\InitFULLDATA|null $data data
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
     * Gets receipt
     *
     * @return \TinkoffApi\Model\InitFULLReceipt|null
     */
    public function getReceipt()
    {
        return $this->container['receipt'];
    }

    /**
     * Sets receipt
     *
     * @param \TinkoffApi\Model\InitFULLReceipt|null $receipt receipt
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
     * Gets shops
     *
     * @return \TinkoffApi\Model\Shops[]|null
     */
    public function getShops()
    {
        return $this->container['shops'];
    }

    /**
     * Sets shops
     *
     * @param \TinkoffApi\Model\Shops[]|null $shops JSON-объект с данными маркетплейса. Обязателен для маркетплейсов.
     *
     * @return self
     */
    public function setShops($shops)
    {
        if (is_null($shops)) {
            throw new \InvalidArgumentException('non-nullable shops cannot be null');
        }
        $this->container['shops'] = $shops;

        return $this;
    }

    /**
     * Gets descriptor
     *
     * @return string|null
     */
    public function getDescriptor()
    {
        return $this->container['descriptor'];
    }

    /**
     * Sets descriptor
     *
     * @param string|null $descriptor Динамический дескриптор точки.
     *
     * @return self
     */
    public function setDescriptor($descriptor)
    {
        if (is_null($descriptor)) {
            throw new \InvalidArgumentException('non-nullable descriptor cannot be null');
        }
        $this->container['descriptor'] = $descriptor;

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


