<html>
<head>
    <title>Thuldaju</title>

    <link rel="stylesheet" type="text/css" href="css/uikit.almost-flat.min.css">
    <link rel="stylesheet" type="text/css" href="css/components/search.almost-flat.min.css">
    <link rel="stylesheet" type="text/css" href="css/components/slideshow.almost-flat.min.css">
    <link rel="stylesheet" type="text/css" href="css/components/slidenav.almost-flat.min.css">
    <link rel="stylesheet" type="text/css" href="css/components/dotnav.almost-flat.min.css">
    <link rel="stylesheet" type="text/css" href="css/components/circle-hover.empresa.css">
    <link rel="stylesheet" type="text/css" href="css/components/slider.almost-flat.min.css">
    <link rel="stylesheet" type="text/css" href="css/app.css">

    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
    <script type="text/javascript" src="js/uikit.min.js"></script>
    <script type="text/javascript" src="js/components/sticky.min.js"></script>
    <script type="text/javascript" src="js/core/nav.min.js"></script>
    <script type="text/javascript" src="js/components/slideshow.min.js"></script>
    <script type="text/javascript" src="js/components/search.min.js"></script>
    <script type="text/javascript" src="js/core/switcher.min.js"></script>
    <script type="text/javascript" src="js/components/slider.min.js"></script>

</head>
<body>

    <!--HOMEPAGE-->
    <div class="thuldaju-homepage">
        <!--THULDAJU-TOPNAV-->
        <div id="navbar" <!--data-uk-sticky="{top: -200, animation: 'uk-animation-slide-top'}"-->>
            <!--NAVADS-->
            <?php require('thuldaju_navads.php'); ?>
            <!--NAVBAR-->
            <?php require('thuldaju_navbar.php'); ?>
        </div>
        <div class="thuldaju-page">
            <!--THULDAJU-HERO-SECTION-->
            <div class="thuldaju-hero-section uk-grid">
                <!--NAVLEFT-->
                <?php require('thuldaju_navleft.php'); ?>

                <!--HERO-SECTION-->
                <div class="hero-section uk-width-1-1 uk-width-medium-1-1 uk-width-large-7-10 uk-margin-top">
                    <div class="uk-panel">
                        <?php require('thuldaju_hero_section.php'); ?>
                    </div>
                </div>
                <!--RIGHT-ADS-SECTION-->
                <div class="thuldaju-ads-section uk-hidden-small uk-hidden-medium uk-width-large-1-10 uk-margin-top">
                    <?php require('thuldaju-ads-section-right.php'); ?>
                </div>
            </div>
            <!--THULDAJU-NEWS-ARTICLES-->
            <div class="thuldaju-news-article">
                <?php require('thuldaju_showcase_news_article.php'); ?>
            </div>
            <!--THULDAJU-NEWS-INSHORT-->
            <div class="thuldaju-news-inshort">
                <?php require('thuldaju_news_inshort.php'); ?>
            </div>
            <!--THULDAJU-NEWS-THUMBNAIL-2-->
            <div class="thuldaju-news-thumbnail-2">
                <?php require('thuldaju_news_thumbnail_2_section.php') ?>
            </div>
            <!--THULDAJU-NEWS-THUMBNAIL-1-->
            <div class="thuldaju-news-thumbnail-1">
                <?php require('thuldaju_news_thumbnail_1_section.php'); ?>
            </div>
            <!--THULDAJU-IMAGE-SHOWCASE-->
            <div class="thuldaju-image-showcase">
                <?php require('thuldaju_image_showcase.php'); ?>
            </div>
        </div>
        <!--THULDAJU-FOOTER-->
        <div class="thuldaju-footer" id="footer">
            <?php require('thuldaju_footer.php'); ?>
        </div>
    </div>
</body>
</html>