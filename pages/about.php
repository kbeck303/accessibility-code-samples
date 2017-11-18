<!DOCTYPE html>
<html class="js no-touchevents">
  <head>
    <title>Accessibility Code Samples and Solutions</title>
    <?php include '../include_meta.php';?>
  </head>
  <body class="presentation presentation__with-sidebar">
    <?php include '../include_header.php';?>
    <div class="presentation__main presentation__main--with-sidebar">
      <main class="presentation__content">
        <h1>Kathy Beck</h1>
        <p class="bravo">UX Engineer at Oomph</p>
        <p>@kbeck303 on social media
          <a href="https://www.drupal.org/u/kbeck303" class="social-media__link" title="Visit my Drupal page. This link will open in a new window." target="_blank">
            <span class="social-media__link__icon social-media__link__icon--drupal fa fa-drupal" aria-hidden="true"></span>
          </a>
          <a href="https://github.com/kbeck303" class="social-media__link" title="Visit my GitHub page. This link will open in a new window." target="_blank">
            <span class="social-media__link__icon social-media__link__icon--github fa fa-github" aria-hidden="true"></span>
          </a>
          <a href="https://codepen.io/kbeck303" class="social-media__link" title="Visit my CodePen page. This link will open in a new window." target="_blank">
            <span class="social-media__link__icon social-media__link__icon--codepen fa fa-codepen" aria-hidden="true"></span>
          </a>
          <a href="https://www.instagram.com/kbeck303/" class="social-media__link" title="Visit my Instagram page. This link will open in a new window." target="_blank">
            <span class="social-media__link__icon social-media__link__icon--instagram fa fa-instagram" aria-hidden="true"></span>
          </a>
          <a href="#" class="social-media__link" title="This link goes nowhere because snapchat accounts aren't on the internet per say.." target="_blank">
            <span class="social-media__link__icon social-media__link__icon--snapchat fa fa-snapchat" aria-hidden="true"></span>
          </a>
          <a href="https://www.twitter.com/kbeck303/" class="social-media__link" title="Visit my Twitter page. This link will open in a new window." target="_blank">
            <span class="social-media__link__icon social-media__link__icon--twitter fa fa-twitter" aria-hidden="true"></span>
          </a>
        </p>
        <ul>
          <li>I've been working at <a href="https://www.oomphinc.com/">Oomph</a> since 2014</li>
          <li>I started working in Drupal when it was at version 4.7</li>
          <li>I've been immersed in accessibility work for the past year</li>
          <li>I have a fat cross-eyed cat named Finn</li>
          <li>I love audiobooks</li>
        </ul>
      </main>
      <aside class="presentation__sidebar">
        <div class="presentation__sidebar-img--featured">
          <img class="presentation__sidebar-img presentation__sidebar-img--full" src="/img/kbeck303.jpeg" alt="A close up photo of an Asian looking woman wearing glasses. She is wearing a green shirt and has on a pair of headphones. She is smirking and looking at the camera.">
        </div>
        <div class="presentation__sidebar-img--secondary">
          <div class="presentation__sidebar-img--half">
            <img class="presentation__sidebar-img"  src="/img/finn.jpg" alt="A very cross-eyed cat peaking his head out from underneath a freshly made bed.">
          </div>
          <div class="presentation__sidebar-img--half">
            <img class="presentation__sidebar-img"   src="/img/oomph.jpg" alt="A group of 24 Oomph employees are standing in the stairwell at the Providence Public Library.">
          </div>
        </div>
      </aside>
    </div>
    <?php include '../include_footer.php';?>
  </body>
</html>
