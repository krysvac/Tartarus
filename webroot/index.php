<?php
include(__DIR__.'/config.php'); 

$tartarus->title = "Hem";
 
$tartarus->siteHeader = <<<EOD
<img src='img/logo.jpg' alt='Tartarus Logo' />
<span class='site-title'>Tartarus webbtemplate</span>
<span class='site-slogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;

$tartarus->pageHeader = <<<EOD
<h2 class="text-header">Välkommen till Tartarus</h2>
EOD;
 
$tartarus->pageContent = <<<EOD
<h1>Hej Världen</h1>
<p>Detta är en exempelsida som visar hur Tartarus ser ut och fungerar.</p>
EOD;
 
$tartarus->footer = <<<EOD
<p>
    Copyright &copy; Jonathan Sundqvist | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a>
<p>
EOD;

include(TARTARUS_THEME_PATH);
