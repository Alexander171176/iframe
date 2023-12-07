<!DOCTYPE html>
<html lang="ru">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Подключение стилей Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/css/uikit.min.css" />

    <link rel="stylesheet" href="/css/style.css">

    <!--Кодировка страницы-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--/Кодировка страницы-->

    <!--Базовые метатеги страницы-->
    <title>Приложение для frontend разработки | <?php echo $category; ?></title>
    <meta name="keywords" content="Приложение для frontend разработки" />
    <meta name="description" content="Приложение для frontend разработки" />
    <!--/Базовые метатеги страницы-->

    <!--Микроразметка OpenGraph-->
    <meta property="og:title" content="Приложение для frontend разработки"/>
    <meta property="og:description" content="Приложение для frontend разработки"/>
    <meta property="og:image" content="https://www.web-dev.kz/uploads/logon.png">
    <meta property="og:type" content="website"/>
    <meta property="og:url" content= "https://www.it.web-dev.kz/" />
    <meta property="og:site_name" content= "IT" />
    <!--/Микроразметка OpenGraph-->
    <meta property="og:image:width" content="100"/>
    <meta property="og:image:height" content= "100" />

    <!--Микроразметка Dublin Core-->
    <meta name="DC.Title" content="Приложение для frontend разработки"/>
    <meta name="DC.Subject" content="Приложение для frontend разработки"/>
    <meta name="DC.Description" content="Приложение для frontend разработки"/>
    <meta name="DC.Type" content="InteractiveResource"/>
    <!--/Микроразметка Dublin Core-->

</head>
<body>

<header>
    <nav>
        <div class="container-fluid">
            <div class="row">
                <button class="d-md-none navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 124 124"
                         style="enable-background:new 0 0 124 124;" xml:space="preserve">
							<g><path d="M112,6H12C5.4,6,0,11.4,0,18s5.4,12,12,12h100c6.6,0,12-5.4,12-12S118.6,6,112,6z" fill="#FFFFFF"/>
                                <path d="M112,50H12C5.4,50,0,55.4,0,62c0,6.6,5.4,12,12,12h100c6.6,0,12-5.4,12-12C124,55.4,118.6,50,112,50z"
                                      fill="#FFFFFF"/>
                                <path d="M112,94H12c-6.6,0-12,5.4-12,12s5.4,12,12,12h100c6.6,0,12-5.4,12-12S118.6,94,112,94z"
                                      fill="#FFFFFF"/></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
						</svg>
                </button>
                <div class="col-12 d-md-flex align-items-center collapse" id="navbarToggleExternalContent">
                    <?php
                    $categories = ['HTML', 'CSS', 'JS', 'РЕЦЕПТЫ'];
                    foreach ($categories as $cat) {
                        $isActive = ($cat === $category) ? 'active' : '';
                        echo '<a class="col nav-link ' . $isActive . '" href="?category=' . $cat . '">' . $cat . '</a>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </nav>
</header>
<div class="container pt-5">
    <div class="row" style="height: 40px;">
        <div class="col-1 pt-2 uk-flex uk-flex-right">
            <a class="rek-link" target="_blank" title="позвонить или написать на whatsapp" href="https://wa.me/77015522280">
                <img class="rek-img" src="/img/whatsapp.png" alt="Responsive image">
            </a>
        </div>
        <div class="col-11">
            <marquee class="rek" width="100%" height="30px" behavior="scroll" direction="left">Разработка сайтов и веб-приложений. Подробности вы можете узнать написав мне на whatsapp.</marquee>
        </div>
    </div>
</div>

<div class="container-fluid mt-2">
    <div class="row justify-content-end">
