<?php

function display_head($_title, $_class = '')
{
    print <<< END
    
<div class="home-image{$_class}">

<h3>Военна академия "Г. С. Раковски"</h3>
<h4>Център за професионално обучение</h4>

</div>

<div class="mm3-wraper mm3-subbox">
    <div class="m25">
        <h5>$_title</h5>
        <div class="mt50">    
    
END;
}

function close_head_box()
{
    echo '</div></div></div>';
}

function table_learning_plan($d)
{

    $d['th'] = $d['ht'] + $d['hp'];

    print <<< END
    
<table class="t1 t2">
<tr><th style="width:34%">Професионално направление</th><td style="width:33%">{$d['pn_name']}</td><td>Код : {$d['pn_code']}</td></tr>
<tr><th>Професия</th><td>{$d['pr_name']}</td><td>Код : {$d['pr_code']}</td></tr>
<tr><th>Специалност</th><td>{$d['sp_name']}</td><td>Код : {$d['sp_code']}</td></tr>
<tr><th>Степен на професионална квалификация</th><td>{$d['spk_1']}</td><td>{$d['spk_2']}</td></tr>
<tr><th>Ниво по НКР:</th><td>{$d['nkr']}</td><td>&nbsp;</td></tr>
<tr><th>Срок на обучение</th><td colspan="2">{$d['so']}</td></tr>
<tr><th>Общ брой часове </th><td colspan="2">{$d['th']}</td></tr>
<tr><th class="r">от които:</th><td colspan="2">&nbsp;</td></tr>
<tr><th class="r">брой часове по теория:</th><td colspan="2">{$d['ht']}</td></tr>
<tr><th class="r">брой часове по практика: </th><td colspan="2">{$d['hp']}</td></tr>
<tr><th>Форма на обучение </th><td colspan="2">Дневна, вечерна, дистанционна</td></tr>
<tr><th>Организационна форма</th><td colspan="2">Квалификационен курс</td></tr>
<tr><th>Входящо минимално образователно равнище</th><td colspan="2">Завършено средно образование или придобито право за явяване на държавни зрелостни изпити за завършване на средно образование.</td></tr>


</table> 
    
END;
}

?>