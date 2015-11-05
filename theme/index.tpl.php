<!DOCTYPE HTML>
<html class="no-js" lang='<?=$lang?>'>
<head>
    <meta charset='utf-8'/>
    <title><?=get_title($title)?></title>
<?php if (isset($favicon)) {
    echo "<link rel='shortcut icon' href='$favicon'/>";
}
    ?>
    <?=$websiteHeadTag?>
<?php
    foreach ($stylesheets as $value) {
        echo "<link href=\"$value\" rel=\"stylesheet\">";
    }
?>
    <script src='<?=$modernizr?>'></script>
</head>
<body>
    <div class='content'>
        <header class='site-header text-center'>
            <?=$siteHeader?>
        </header>

        <nav class="navbar">
            Nav kommer snart...
        </nav>

        <main>
            <article>
                <header class="article-header">
                    <?=$pageHeader?>
                </header>
                <?=$pageContent?>
            </article>
        </main>
    </div>
    <footer class='footer'>
        <?=$footer?>
    </footer>
<script src='<?=$jquery?>'></script>

<?php if(isset($js_include) && count($js_include) > 0) {
    foreach($js_include as $js) {
        echo "<script src='<?=$js?>'></script>";
    }
}
?>
</body>
</html>