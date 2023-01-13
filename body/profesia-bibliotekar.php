<?php

require_once ('./php/functions.php');

if (defined('PAGE_FUNC'))
{
    display_head('Професия "Библиотекар', ' bg-3');

    echo '<h6>УЧЕБЕН ПЛАН ЗА НАЧАЛНО ПРОФЕСИОНАЛНО ОБУЧЕНИЕ С ПРИДОБИВАНЕ НА ТРЕТА СТЕПЕН НА ПРОФЕСИОНАЛНА КВАЛИФИКАЦИЯ</h6><br />';

    $d = array();

    $d['pn_name'] = 'Библиотечно информационни науки и архивистика';
    $d['pn_code'] = '332';
    $d['pr_name'] = 'Библиотекар';
    $d['pr_code'] = '332010';
    $d['sp_name'] = 'Библиотекознание';
    $d['sp_code'] = '3320101';
    $d['spk_1'] = 'Трета';
    $d['spk_2'] = 'III';
    $d['nkr'] = '4';
    $d['so'] = 'до 1,5 години';

    $d['ht'] = 555;
    $d['hp'] = 405;

    table_learning_plan($d);

    close_head_box();
}
else
{
    $_site_data['title'] = "Курс БГ - професия Библиотекар";

}

?>