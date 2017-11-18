<!DOCTYPE html>
<html>
  <head>
    <title>Accessibility Code Samples and Solutions</title>
    <?php include '../../include_meta.php';?>
  </head>
  <body class="presentation">
    <?php include '../../include_header.php';?>
    <main class="presentation__main">
      <h1>Font Icons</h1>
      <!-- CodePen Code -->
      <p data-height="700" data-theme-id="0" data-slug-hash="OOmpOJ" data-default-tab="html,result" data-user="kbeck303" data-embed-version="2" data-pen-title="Font Icons: Accessibility Code Samples and Solutions" class="codepen">See the Pen <a href="https://codepen.io/kbeck303/pen/OOmpOJ/">Font Icons: Accessibility Code Samples and Solutions</a> by kbeck303 (<a href="https://codepen.io/kbeck303">@kbeck303</a>) on <a href="https://codepen.io">CodePen</a>.</p>
      <script async src="https://production-assets.codepen.io/assets/embed/ei.js"></script>

      <h2>Notes, Tips, and Reference Materials</h2>
      <ol>
        <li>If you are putting this in a block that doesn't allow full HTML, Drupal might strip out empty <code>&lt;span&gt;</code> tags. To get around this, add a <code>&amp;nbsp;</code> tag in there.</li>
        <li><a href="https://github.com/drupal/core/blob/8.5.x/themes/classy/templates/navigation/menu.html.twig" alt="This link opens in a new window." target="_blank">Twig menu file for the classy theme.</a> The menu.html.twig file controls all the menu elements. This lets you <a href="https://github.com/drupal/core/blob/8.5.x/themes/classy/templates/navigation/menu.html.twig#L29">tie into the menu_level variable</a>, which lets you give unique classes at each menu level for each menu element.</li>
      </ol>
      <!-- TODO: Samples of how JAWS displays/read both samples -->
    </main>
    <?php include '../../include_footer.php';?>
  </body>
</html>
