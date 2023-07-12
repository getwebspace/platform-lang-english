<?php declare(strict_types=1);

return [
    // ***
    // Parameters
    // ***

    // tabs
    'Common' => 'Общие',
    'Plugins' => 'Плагины',
    'Variables' => 'Переменные',

    // subtabs
    'Main' => 'Основные',
    'Mail' => 'Почта',
    'Files and images' => 'Файлы и изображения',
    'Notifications' => 'Уведомления',
    'Forms' => 'Формы',
    'Search Options' => 'Поиск',
    'Guestbook' => 'Гостевая книга',
    'API' => 'API',
    'Templates' => 'Шаблоны',
    'Group and access rights' => 'Группа и права доступа',
    'Login options' => 'Параметры входа',
    'General' => 'Основные',
    'Import and Export' => 'Импорт и Экспорт',
    'Additionally' => 'Дополнительно',

    // common
    'The site is available to visitors' => 'Сайт доступен посетителям',
    'Can be used during maintenance and / or inventory' => 'Можно использовать во время технических работ и/или инвентаризации',
    'Site title' => 'Название сайта',
    'for example: "My home page"' => 'например: "Моя домашняя страница"',
    'Home page address' => 'Домашняя страница сайта',
    'Auto redirect to non-www' => 'Автоматически убирать www.',
    'Enter the address of the home page of your site, including a slash at the end. For example: http://yoursite.com/' => 'Укажите адрес главной страницы вашего сайта, включая слеш в конце. Например: http://yoursite.com/',
    'Description (Description) of the site' => 'Описание (Description) сайта',
    'Short description, no more than 200 characters' => 'Краткое описание, не более 200 символов',
    'Key words' => 'Ключевые (Keywords) слова',
    'Comma separated' => 'Через запятую',
    'Theme name' => 'Тема оформления сайта',
    'Default: "default"' => 'По-умолчанию: "default"',
    'Theme auto-update' => 'Автообновление темы',
    'The system will check for changes in the theme' => 'Система будет проверять изменения в теме оформления',
    'May increase server load, not recommended in <code>Production</code> mode' => 'Может повысить нагрузку на сервер, не рекомендуется в режиме <code>Production</code>',
    'Home page template' => 'Шаблон главной страницы',
    'Timezone' => 'Часовой пояс',
    'Time format' => 'Формат времени',
    'Site language (code)' => 'Код языка сайта',
    'Sets the language of the site and the value of the attribute <code>&lt;html lang="en"&gt;</code>' => 'Задаёт язык сайта и значение атрибута <code>&lt;html lang="ru"&gt;</code>',
    'For example: <code>en-US</code>' => 'Например: <code>ru-RU</code>',
    'Automatically generate addresses' => 'Автоматически генерировать адреса',
    'Some entity addresses will automatically include the category address' => 'Адреса некоторых сущностей будут автоматически включать адрес категории',
    'System E-Mail Address' => 'Системный E-Mail адрес',
    'From this address, site messages will be sent, for example, user notifications, mailings, confirmations, etc. Note: some free mail services, for example yandex.ru, require that the address registered on their mail service be specified as the sender E-Mail address.' => 'От данного адреса будут отправляться сообщения сайта, например уведомления пользователей, рассылки, подтверждения и т.д. Примечание: некоторые бесплатные почтовые сервисы, например yandex.ru, требуют, чтобы в качестве E-Mail адреса отправителя был указан именно адрес, зарегистрированный на их почтовом сервисе',
    'Sender name' => 'Имя отправителя',
    'This name will be attached to the letter as the name of the sender' => 'Данное имя будет прикреплено к письму в качестве имени отправителя',
    'Email subject' => 'Заголовок при отправке писем',
    'When sending letters from the site, you can specify a header that will be added to the sender mail. For example, you can specify the short name of your site there.' => 'При отправке писем с сайта вы можете указать заголовок, который будет добавляться к почте отправителя. Например, вы можете там указать краткое название вашего сайта',
    'SMTP server host' => 'Хост SMTP сервера',
    'Usually - localhost' => 'Обычно — localhost',
    'SMTP server port' => 'Порт SMTP сервера',
    'Usually — 465' => 'Обычно — 465',
    'Use secure protocol to send emails through SMTP server' => 'Использовать защищенный протокол для отправки писем через SMTP сервер',
    'Select the encryption protocol when sending emails using an SMTP server' => 'Выберите протокол шифрования при отправке писем с использованием SMTP сервера',
    'SMTP username' => 'SMTP имя пользователя',
    'SMTP password' => 'SMTP пароль',
    'Not required in most cases when using "localhost"' => 'Не требуется в большинстве случаев, когда используется "localhost"',
    'The required parameters can be found in the account settings, in' => 'Необходимые параметры можно найти в настройках аккаунта, во',
    'the API tab' => 'вкладке API',
    'Enable File Upload' => 'Включить загрузку файлов',
    'Allows users to upload files to the site' => 'Позволяет пользователям загружать файлы на сайт',
    'Allow conversion of uploaded images' => 'Разрешить конвертацию загруженных изображений',
    'Uploading images to the server will be allowed' => 'Будет разрешена загрузка картинок на сервер',
    'Minimum file size' => 'Минимальный размер файла',
    'Smaller files will not be converted' => 'Файлы меньшего размера не будут подвергаться конвертации',
    'Size of a small preview of a copy of the uploaded image' => 'Размер маленькой превью копии загруженного изображения',
    'Average copy size of uploaded image' => 'Размер средней копии загруженного изображения',
    'You can specify 0 if you do not want to create preview copies of uploaded images to the server' => 'Вы можете указать 0, если не хотите создавать превью копии загружаемых картинок на сервер',
    'ImageMagick executable' => 'Исполняемый файл ImageMagick',
    'ImageMagick options' => 'Параметры ImageMagick',
    'Enable Notifications' => 'Включить уведомления',
    'Notification display period' => 'Период отображение уведомлений',
    'Specify the number of hours for which to display notifications' => 'Укажите количество часов за которые отображать уведомления',
    'hours' => 'часов',
    'Enable Forms' => 'Включить формы',
    'Ability to create forms to receive completed questionnaires from clients' => 'Возможность делать формы для получения заполненных анкет от клиентов',
    'Enable Search' => 'Включить поиск',
    'Search Page Template' => 'Шаблон страницы поиска',
    'Number of results' => 'Количество результатов',
    'Maximum number of search results' => 'Максимальное количество результатов при поиске',
    'Enable guest book' => 'Включить гостевую книгу',
    'Allows users to leave feedback about the site' => 'Позволяет пользователям оставлять отзывы о сайте',
    'Guest book template' => 'Шаблон гостевой книги',
    'Number of entries per page' => 'Количество записей на страницу',
    'Enable API Access' => 'Включить доступ к API',
    'Allows you to programmatically receive data from the site' => 'Позволяет программно получать данные с сайта',
    'API access' => 'Доступ к API',
    'Restricts access rights' => 'Разграничивает права доступа',
    'API access keys' => 'Ключи доступа к API',
    'The ability to make changes via the API is only available if you have a key' => 'Возможность вносить изменения по API есть только при наличии ключа',
    'Generate new' => 'Сгенерировать новый',
    'Each key on a new line' => 'Каждый ключ с новой строки',

    // users
    'Enable Users' => 'Включить пользователей',
    'Allows users to register on the site' => 'Позволяет пользователям регистрироваться на сайте',
    'Login page template' => 'Шаблон страницы авторизации',
    'Registration page template' => 'Шаблон страницы регистрации',
    'Password recovery page template' => 'Шаблон страницы восстановления пароля',
    'User profile page template' => 'Шаблон страницы профиля пользователя',
    'User group (default)' => 'Группа пользователя (по-умолчанию)',
    'The new user will be automatically added to the selected group' => 'Новый пользователь будет автоматически добавляться в выбранную группу',
    'Permissions (default)' => 'Права доступа (по-умолчанию)',
    'The specified access rights will also be applied to an unregistered user' => 'Указанные права доступа также будут применены для незарегистрированного пользователя',
    'Authorization method on the site' => 'Метод авторизации на сайте',
    'You can choose how users will be authorized on the site' => 'Вы можете выбрать, каким способом будет производиться авторизация пользователей на сайте',
    'List mode' => 'Вариант работы списка',
    'List of domains for registration' => 'Список доменов для регистрации',
    'Each domain on a new line' => 'Каждый домен с новой строки',
    'Enable code sign-in' => 'Включить вход через код',
    'When authorizing the user, it will be possible to confirm the identity through the code sent to the mail' => 'При авторизации пользователя будет возможность подтверждения личности через высланный на почту код',
    'Authorization letter template with code' => 'Шаблон письма для авторизации с кодом',
    'Open authorization protocol' => 'Открытый протокол авторизации',
    'Before filling, see the <a href="https://github.com/getwebspace/platform/wiki/oAuth" target="_blank">documentation</a>' => 'Перед заполнением см. <a href="https://github.com/getwebspace/platform/wiki/oAuth" target="_blank">документацию</a>',

    // catalog
    'Enable Catalog' => 'Включить каталог',
    'Ability to manage categories, products and orders' => 'Возможность управлять категориями, товарами и заказами',
    'Section address' => 'Адрес раздела',
    'Section template' => 'Шаблон раздела',
    'Default value, this value will also be used for the main page of the catalog' => 'Значение по-умолчанию, также это значение будет использовано для главной страницы каталога',
    'Cart template' => 'Шаблон корзины',
    'Order template' => 'Шаблон заказа',
    'Criteria for sorting goods' => 'Критерий сортировки товаров',
    'Order of sorting goods' => 'Порядок сортировки товаров',
    'The default value, this value will also be used to limit the number of products on the main page' => 'Значение по-умолчанию, так же это значение будет использовано для ограничения количества товаров на главной странице',
    'Default value' => 'Значение по-умолчанию',
    'Enabling and disabling sending an email to a client' => 'Включение и выключение отправки письма клиенту',
    'Client mail template' => 'Шаблон письма клиенту',
    'Enabling and disabling sending a email to the administrator' => 'Включение и выключение отправки письма администратору',
    'Administrator mail template' => 'Шаблон письма администратору',
    'If there is no value, the email will not be sent' => 'Если значения нет, письмо не будет отправляться',

    'Action' => 'Действие',
    'Required data action on import' => 'Необходимое действие с данными при импорте',
    'Insert and update' => 'Вставка и обновление',
    'Update only' => 'Только обновление',
    'Indentation in lines' => 'Отступ в строках',
    'Number of lines to indent from top' => 'Количество строк, которые необходимо отступить сверху',
    'Indentation in columns' => 'Отступ в колонках',
    'Number of columns to indent from the left' => 'Количество колонок, которые необходимо отступить слева',
    'Key field' => 'Ключевое поле',
    'Field will be used to search for a product' => 'Данное поле будет использовано для поиска товара',
    '<b>Important</b>: field value must be unique!' => '<b>Важно</b>: значение поля должно быть уникально!',
    '<b>Import</b> column order' => 'Порядок колонок <b>Импорта</b>',
    '<b>Export</b> column order' => 'Порядок колонок <b>Экспорта</b>',
    'Possible columns:' => 'Возможные колонки:',
    'Skip column:' => 'Пропустить колонку:',
    'Alias each column on a new line' => 'Алиас каждой колонки с новой строки',

    'Handling cart fields' => 'Обработка полей корзины',
    'Additional fields passed with the cart will be added to the end of the comment field' => 'Дополнительные поля, переданные с корзиной, будут добавлены в конец поля комментария',
    'Address lines in cart' => 'Строки адреса в корзине',
    'Allows you to pass the address as a numbered array of strings' => 'Позволяет передавать адрес в виде нумерованного массива строк',
    'Additional field' => 'Дополнительное поле',
    'Volumetric weight' => 'Объёмный вес',
    'Divisor' => 'Коэффициент-делителя',
    'W(cm) &times; H(cm) &times; L(cm) / X = Vw(kg)' => 'Ш(см) &times; В(см) &times; Д(см) / X = ОВ(кг)',

    // user auth by
    'username' => 'Логин',
    'email' => 'E-Mail',
    'phone' => 'Телефон',

    // user email list mode
    'blacklist' => 'Черный список',
    'whitelist' => 'Белый список',

    // plugins
    'Turning reCAPTCHA on and off' => 'Включение и выключение reCAPTCHA',
    'Robot protection' => 'Защита от роботов',
    'Public key of the reCAPTCHA service' => 'Публичный ключ сервиса reCAPTCHA',
    'This key will be used in the HTML code of the site for users devices' => 'Этот ключ будет использован в HTML-коде сайта на устройства пользователей',
    'reCAPTCHA secret key' => 'Секретный ключ сервиса reCAPTCHA',
    'This key is needed for communication between the site and the reCAPTCHA service. Do not tell it to anyone' => 'Этот ключ нужен для связи между сайтом и сервисом reCAPTCHA. Никому его не сообщайте',
    'Site' => 'Сайт',
    'Version' => 'Версия',
    'The plugin has no settings' => 'У этого плагина нет настроек',

    // variables
    'In this settings section, you can set additional global variables that can be easily used in a template.' => 'В этом разделе настроек можно задать дополнительные глобальные переменные, которые можно легко использовать в шаблоне.',
    'variable named' => 'переменную с именем',
    'can be displayed on the page using the following code:' => 'можно вывести на странице с помощью следующего кода:',
    'New variable name' => 'Имя новой переменной',
    'Only latin letters are allowed: <code>[A-Za-z]</code>' => 'Допустимы только латинские буквы: <code>[A-Za-z]</code>',
];
