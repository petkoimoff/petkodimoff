<?php

define('MB_ENCODING', "UTF-8");

mb_internal_encoding(MB_ENCODING);
ob_start();
session_start();

require_once ('./php/main.php');

print <<< END
<!DOCTYPE html>
<html lang="bg">

    <head>
        <base href="{$_site_data['base']}" >
        
        <title>{$_site_data['title']}</title>
        
        <meta charset="UTF-8">
        <meta name="description" content="{$_site_data['description']}">
        <meta name="keywords" content="{$_site_data['keywords']}">
        <meta name="author" content="MadMaxIII">    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" type="text/css" href="./css/style.css">        
        <link rel="shortcut icon" href="./css/favicon.ico">
        <link rel="alternate" hreflang="bg" href="{$_site_data['base']}">
        <link rel="canonical" href="{$_site_data['base']}">
        
        <link rel="apple-touch-icon" sizes="120x120" href="./css/apple-touch-icon-120x120-precomposed.png" /> 
        <link rel="apple-touch-icon" sizes="152x152" href="./css/apple-touch-icon-152x152-precomposed.png" />
        
        <meta property="og:type" content="{$_site_data['og']['type']}" />
        <meta property="og:title" content="{$_site_data['og']['title']}" />
        <meta property="og:description" content="{$_site_data['og']['description']}" />
        <meta property="og:url" content="{$_site_data['og']['url']}" />
        <meta property="og:site_name" content="{$_site_data['og']['site_name']}" />
        <meta property="og:image" content="{$_site_data['og']['image']}" />
        <meta property="og:image:alt" content="{$_site_data['og']['image_alt']}" />
        <meta property="og:locale" content="bg_BG" />
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-9712452-14"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            
            gtag('config', 'UA-9712452-14');
        </script>
   
    </head>
<body>
<div class="mm3-hholder">
    <h1>{$_site_data['h1']}</h1>
    <h2>{$_site_data['h2']}</h2>
</div>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/bg_BG/sdk.js#xfbml=1&version=v4.0&appId=503498687132108&autoLogAppEvents=1"></script>

<div id="mm3-top">

    <div class="mm3-wraper">
    
        <div id="mm3-top-logo">
            <a href="./" title="Център за професионално обучение"><img src="./css/rndc-va-1a.png" alt="Военна академия Георги Раковски" /></a>
        </div>        
        
        <div id="mm3-menu">
            <a href="./" title="Център за професионално обучение">Начало</a>
            <a href="./spisak-na-kursovete-vav-voenna-akademia" title="Списък на курсовете във Военна академия">Курсове</a>
            <a href="./validirane-na-znania" title="Валидиране на знания">Валидиране</a>
            <a href="https://rndc.bg/istoria-va/" title="История Военна академия Георри Раковски">За нас</a>
            <a href="https://rndc.bg/contact/" title="Контакти с центъра за професионално обучение">Контакти</a>        
        </div>
        
        <div id="mm3-menu-mobile" onclick="displayMobileMenu()"></div>
        
    </div>        

</div>

<div id="mm3-top-separator">&nbsp;</div>

END;

include ($php_body);

?>

<div id="search-area">
    <div class="mm3-wraper">
        <div class="mm3-half pt25">                

        </div>    
        <div class="mm3-half pt25">
            <h6>Намери курс</h6>


<form  action="https://rndc.bg/course-search/" method="GET" >

<input type="text" placeholder="Ключова дума" name="course-keywords" value="" />

<input type="text" placeholder="Код на курса" name="course-id" value="" />

<br />

<div class="mm3-input">
    <select name="department" >
    <option value="" >Факултет</option>
    <option value="ddoepk" >ДДОЕПК</option>
    <option value="ipio" >ИПИО</option>
    <option value="fksht" >ФКЩ</option>
    <option value="fnso" >ФНСО</option>
    <option value="cpo" >ЦПО</option>
    </select>
</div>

<div class="mm3-input">
<select name="campus" >
<option value="" >Зала</option>
<option value="cisco" >CISCO</option>
<option value="325" >IPIO-325</option>
<option value="rakovski" >Аула "Раковски"</option>
<option value="drangow" >Аула Дрангов</option>
<option value="324" >Зала 324</option>
<option value="tarjestvena" >Зала Тържествена</option>
</select>
</div>

<br />

<div class="mm3-input">
<select name="level" >
<option value="" >Категория</option>
<option value="administraciq" >Администрация</option>
<option value="woennoslujeshti" >Военнослужещи</option>
<option value="zaplashtane" >Срещу заплащане</option>
</select>
</div>

<div class="mm3-input">
<select name="instructor" >
<option value="" >Преподавател</option>
<option value="joro-ivanov" >Георги Иванов</option>
<option value="ignatov" >Ивайло Игнатов</option>
<option value="ivan-hristozov" >Иван Христозов</option>
<option value="petko-dimov" >Петко Димов</option>
<option value="nstoyanov" >Полковник Никола Стоянов</option>
</select>
</div>


<br />

<div class="mm3-center"><input type="submit" value="Търсене" class="mm3-btn"/></div>

</form>

        </div>  
    </div>
</div>

<div id="mm3-footer">
    <div class="mm3-wraper">
    
        <div itemscope itemtype="http://schema.org/EducationalOrganization">
        <img src="./css/logo-white.png" alt="Военна академия Г. С. Раковски" title="Военна академия Г. С. Раковски" />
        <div>
        
            <div class="mm3-half pt25">                
                <span itemprop="name">Военна академия "Г. С. Раковски"</span><br />
                <span itemprop="name">Център за професионално обучение</span><br />
                <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                    <span itemprop="streetAddress">бул. „Евлоги и Христо Георгиеви“ № 82</span><br />
                    <span itemprop="postalCode">1504</span>&nbsp;<span itemprop="addressLocality">София</span>,&nbsp;<span itemprop="addressRegion">България</span> 
                </div>
                <a href="./uslovia-za-polzwane-i-zastita-na-lichnite-danni">Политика на поверителност</a>
            </div>
            <div class="mm3-half pt25">
                <span itemprop="alumni" itemscope itemtype="http://schema.org/Person">
                    <span itemprop="name">Подполковник Ивайло Игнатов</span><br />
                    <span itemprop="jobTitle">Началник на сектор "Квалификация"</span><br />
                    <span itemprop="telephone">02 92 26 583</span><br />
                    <span itemprop="telephone">0882 091 820</span><br />                    
                </span>
                <a href="mailto:rndcptc@gmail.com" itemprop="email">rndcptc@gmail.com</a>
            </div>
        </div>
        </div>
        
        <br />

        <p class="mm3-center">
            <a href="http://rndc.bg" title="Официален сайт на Военна академия Георги Раковски" target="_blank" class="mm3-resize">Военна академия "Г. С. Раковски"</a><span class="mm3-hide-small">&nbsp;-&nbsp;</span><a href="http://курс.бг" title="Център за професионално обучение" target="_blank" class="mm3-resize">Център за професионално обучение</a>
        </p>

    </div>
</div>

<div id="mobileMenuContainer"></div>
<script src="./js/script.js"></script>

</body>
</html>