<!DOCTYPE html>
<html class="js no-touchevents">
  <head>
    <title>Accessibility Code Samples and Solutions</title>
    <?php include '../../include_meta.php';?>
  </head>
  <body>
    <?php include '../../include_header.php';?>
    <main class="presentation__main">
      <h1>Teasers</h1>
      <!-- CodePen Code -->
      <p data-height="219" data-theme-id="0" data-slug-hash="MOmvwj" data-default-tab="html" data-user="kbeck303" data-embed-version="2" data-pen-title="Teasers: Accessibility Code Samples and Solutions" class="codepen">See the Pen <a href="https://codepen.io/kbeck303/pen/MOmvwj/">Teasers: Accessibility Code Samples and Solutions</a> by kbeck303 (<a href="https://codepen.io/kbeck303">@kbeck303</a>) on <a href="https://codepen.io">CodePen</a>.</p>
      <script async src="https://production-assets.codepen.io/assets/embed/ei.js"></script>

      <h2>Notes, Tips, and Reference Materials</h2>
      <ol>
        <li>I tend to forget about the average user in some cases. With teasers, I tend to be focused on what the screen reader output will be and how keyboard interactions will behave, I forget about hover states.</li>
        <li>It would be worth looking at analytics to help guide which option you'd like to use for a solution. One solution has a very large trigger area, but this area might accidentaly get triggered while scrolling on mobile devices.</li>
        <li>Having two links go to the same place within the same card is not ideal for screenreaders, but average web users expect the image and the link/button to bring them somewhere.</li>
        <li>Using Twig templates and views with a content display (instead of fields) lets you quickly reuse HTML markup for similar content being displaying in different areas of the site or displaying different but similar content.</li>
        <li>Is there a relevant Oomph blog post?</li>
      </ol>
      <!-- TODO: Samples of how JAWS displays/read both samples -->
    </main>
    <?php include '../../include_footer.php';?>
  </body>
</html>
