<?php

require_once ('./php/functions.php');

if (defined('PAGE_FUNC'))
{
    display_head('Условия за ползване и защита на личните данни', ' bg-3');
	
echo nl2br('
Какви лични данни събираме и защо?

Използваните URL адреси на Военна академия „Г. С. Раковски“ са https://rndc.bg, https://курс.бг и http://rnda.armf.bg .

1. Коментари
Когато посетителите оставят коментари в сайта на Военна академия „Г. С. Раковски“ в базата данни остава информацията поставена във формуляра за коментари, имейла на потребителя, IP адреса на посетителя и идентификатора на потребителския браузър, за да предотвратят изпращането на спам. Анонимен низ, базиран на имейл адреса ви, може да бъде предоставен на услугата Gravatar, която прави видима профилната ви снимка – аватар. Политиката за поверителност на Gravatar е тук: https://automattic.com/privacy/.

2. Форми за контакт
Формите за контакт в сайта се използват за регистрация в конференции или курсове. В тях се изисква да предоставите вашите имена, имейли, телфони, месторабота, длъжност, авторски материали, които се изпращат на служебен имейл във Военна академия „Г. С. Раковски“. Те не се пазят в базата данни на сайта.

3. Файлове
Ако качвате изображения в сайта, трябва да избягвате качването на изображения с вградени данни за местоположение (EXIF GPS). Посетителите на сайта могат да изтеглят и извлекат данни за местоположението от изображения в сайта.

4. Бисквитки
Ако влизате в някое от приложенията на нашия сайт, можете да разрешите запазването на вашите имена, имейл адрес или социални профили в бисквитките. Те са за ваше удобство, така че да не е нужно да попълвате отново данните си, когато влизате в приложението следващият път. Ако имате профил и влезете в този сайт, ще зададем временна бисквитка, за да определим дали браузърът ви приема бисквитки. Тази бисквитка не съдържа лични данни и се изтрива, когато затворите браузъра си. Бисквитките за вход изтичат след два дни, а за предпочитанията на екрана след година. Ако изберете опцията за запомняне, информацията ви за вход ще се пази две седмици. Ако излезете от профила си, бисквитките за вход ще бъдат изтрити.

5. Вмъкнато съдържание от други уебсайтове
Статиите на този сайт могат да бъдат вградени (видеа, изображения, съдържание и т.н.). Вграденото съдържание от други сайтове приема и се държи с посетителя на сайта като с посетител на собствения си сайт. Тези сайтове могат да събират данни за вас, да използват бисквитки, да вграждат допълнителни инструменти за статистика от трети страни, да следят как работите с тези инструменти включително как потребявате вградено съдържание ако имате профил и сте влезли в него на сайта.

6. Анализ
За нуждите на маркетинговия анализ ние използваме инструмента Google Analytics, който събира данни за потребителите на уеб услуги. Ето тук може да видите политиките на Google https://policies.google.com/privacy

7. Колко дълго държим личните ви данни
Ако оставите коментар, коментарът и неговите метаданни се запазват за неопределено време. За потребители, които се регистрират на нашия уебсайт (ако има такива), съхраняваме и личната информация, която предоставят в потребителския си профил. Всички потребители могат да виждат, редактират или изтриват личната си информация по всяко време (с изключение на това, че не могат да променят потребителското си име). Администраторите на уебсайта могат да виждат и редактират тази информация.

8. Вашите права над личните ви данни
Ако имате профил в този сайт или сте оставяли коментари в него, можете да поискате да заличим личните ви данни, които съхраняваме за вас. Това обаче не включва данни, които сме задължени да съхраняваме с административни цели, за нуждите на сигурността на сайта, или по закон.

9. Как използваме вашите данни?
Коментарите от посетителите могат да бъдат проверени чрез автоматична услуга за проверка за спам. Личните данни в акаунта ви се използват за контакт с потребителите.

10. Как защитаваме личните ви данни?
В сайта се използва сертификат за сигурност SSL (Secure Socket Layer) и HTTPS протокол. Това е технология за създаване на сигурна връзка между уеб сървър и браузъра на крайния потребител, която днес вече е преименувана на TLS (защита на транспортния слой), но все още се нарича TLS / SSL. HTTPS e протокол, който има идентичен синтаксис със стандартния HTTP протокол, но сигнализира на браузъра да използва криптирания слой за защита на трафика.

11. Процеси при инциденти с лични данни
Ние имаме назначени служители по защита на личните данни и процедура с традиции в областта. Правим всичко възможно за да намалим евентуални рискове до минимум, но при евентуален инцидент ще предупредим незабавно съответните органи и всички засегнати. Ще документираме нарушението и какви са последиците за да предприемем най-адекватните действия в случая.

');

    close_head_box();
}
else
{
    $_site_data['title'] = "Курс БГ - Условия за ползване и защита на личните данни";

}

?>