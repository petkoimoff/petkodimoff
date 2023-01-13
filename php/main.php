<?php

$_site_data = array();

$_site_data['base'] = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['SERVER_NAME'] . str_replace("index.php", "", $_SERVER['PHP_SELF']);

//$_site_data['base']='http://курс.бг/';

$request_uri = explode('?', $_SERVER['REQUEST_URI']);

$tmp = explode("/", urldecode(rtrim($request_uri[0], '/')));

$_uri = trim(mb_convert_case(end($tmp), MB_CASE_LOWER, MB_ENCODING));

if ($_uri == '')
{
    $php_body = './body/body_default.php';
}
else
{
    if (preg_match('/^[a-z0-9-]{1,100}$/', $_uri) && file_exists("./body/{$_uri}.php"))
    {
        $php_body = "./body/{$_uri}.php";

        include ($php_body);

        define('PAGE_FUNC', $_uri);
    }
    else
    {
        header('HTTP/1.1 404 Not Found');
        $php_body = './php/404.php';
    }
}

if (!isset($_site_data['title']))
{
    $_site_data['title'] = "Курс БГ - Курсове за квалификация и професионално обучение";
}

if (!isset($_site_data['description']))
{
    $_site_data['description'] = "Курс БГ е официалния сайт на центъра за професионално обучение към Военна академия Георги Раковски";
}

if (!isset($_site_data['keywords']))
{
    $_site_data['keywords'] = "курсове, обучение, дипломи, професия, валидиране, информация, записване, професионално, обучение";
}

if (!isset($_site_data['h1']))
{
    $_site_data['h1'] = 'Курс БГ е официален сайт на центъра за професионално обучение към Военна Академия Георги Раковски';
}

if (!isset($_site_data['h2']))
{
    $_site_data['h2'] = 'Курсове провеждани в центъра за професионално обучение към Военна академия Георги Раковски';
}

if (!isset($_site_data['og']))
{
    $_site_data['og'] = array();
}

if (!isset($_site_data['og']['type']))
{
    $_site_data['og']['type'] = 'website';
}

if (!isset($_site_data['og']['title']))
{
    $_site_data['og']['title'] = $_site_data['title'];
}

if (!isset($_site_data['og']['description']))
{
    $_site_data['og']['description'] = $_site_data['description'];
}

if (!isset($_site_data['og']['site_name']))
{
    $_site_data['og']['site_name'] = $_site_data['h1'];
}

if (!isset($_site_data['og']['url']))
{
    $_site_data['og']['url'] = $_site_data['base'];
}

if (!isset($_site_data['og']['image']))
{
    $_site_data['og']['image'] = $_site_data['base'] . 'css/rndc-ptc.png';
}

if (!isset($_site_data['og']['image_alt']))
{
    $_site_data['og']['image_alt'] = $_site_data['h1'];
}

?>