<?php


/**
 * @file html.tpl.php
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 * @see nucleus_preprocess_html()
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>"
      lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">
<head>
    <!-- META FOR IOS & HANDHELD -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="HandheldFriendly" content="true"/>
    <meta name="apple-touch-fullscreen" content="YES"/>
    <?php print $head; ?>
    <title><?php print $head_title; ?></title>
    <?php print $styles; ?>
    <?php print $scripts; ?>
<!--    <script type="text/javascript">
        (function() {
            var path = '//easy.myfonts.net/v2/js?sid=10259(font-family=Helvetica+Neue+55+Roman)&sid=10261(font-family=Helvetica+Neue+75+Bold)&sid=10265(font-family=Helvetica+Neue+65+Medium)&sid=10269(font-family=Helvetica+Neue+25+UltraLight)&key=gfDWd3as8m',
                protocol = ('https:' == document.location.protocol ? 'https:' : 'http:'),
                trial = document.createElement('script');
            trial.type = 'text/javascript';
            trial.async = true;
            trial.src = protocol + path;
            var head = document.getElementsByTagName("head")[0];
            head.appendChild(trial);
        })();
    </script>
-->    <script src="https://use.typekit.net/trc2dvr.js"></script>
    <script>try {
            Typekit.load({async: true});
        } catch (e) {
        }</script>
</head>

<body class="<?php print $classes; ?> tb-metroz"<?php print $attributes; ?>>
<div id="skip-link"><a href="#main-content"
                       class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a></div>
<div id="print-logo"><img src="/sites/default/files/print-logo.png" /> </div>
<?php print $page_top; ?>
<?php print $page; ?>
<?php print $page_bottom; ?>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-1039768-2', 'auto');
    ga('send', 'pageview');

</script>
</body>
</html>