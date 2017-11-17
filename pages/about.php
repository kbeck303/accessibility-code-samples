<!DOCTYPE html>
<html class="js no-touchevents">
  <head>
    <title>Accessibility Code Samples and Solutions</title>
    <?php include '../include_meta.php';?>
  </head>
  <body>
    <?php include '../include_header.php';?>
    <div class="presentation__main">
      <main class="presentation__content">
        <h1>Kathy Beck</h1>
        <p>UX Engineer at Oomph</p>
        <p>@kbeck303 on social media</p>
        <ul>
          <li>I've been working at <a href="https://www.oomphinc.com/">Oomph</a> since 2014</li>
          <li>I started working in Drupal when it was at version 4.7</li>
          <li>I've been immersed in accessibility work for the past year</li>
          <li>I have a chubby cross-eyed cat named Finn</li>
          <li>I love audiobooks</li>
        </ul>
      </main>
      <aside class="presentation__sidebar">
        <div class="presentation__sidebar-img--featured">
          <img class="presentation__sidebar-img presentation__sidebar-img--full" src="/img/kbeck303.jpeg" alt="A close up photo of an Asian looking woman wearing glasses. She is wearing a green shirt and has ona  pair of headshots. She is smirking and looking at the camera.">
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
