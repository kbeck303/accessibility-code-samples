<!DOCTYPE html>
<html class="js no-touchevents">
  <head>
    <title>Accessibility Code Samples and Solutions</title>
    <?php include '../include_meta.php';?>
  </head>
  <body class="presentation">
    <?php include '../include_header.php';?>
    <main class="presentation__main presentation__main--max-width">
      <h1>Types of Users</h1>
      <ol>
        <li><strong>Average User</strong> - A user who can see and hear and can use the mouse and keyboard. Easiest to achieve.</li>
        <li><strong>Keyboard User</strong> - A user who can see and hear, but can only use a keyboard (ie. a person with MS or some other physical disability). Some thought is needed to allow this user to navigate through the site in a useful way.</li>
        <li><strong>Screen Reader User</strong> - A user who cannot see, but can hear and uses the keyboard (ie. a blind person). This is the hardest to achieve, we need to think about what visual pieces of the site are important or are just there for decoration. If it is important, we need to find a way to verbally describe these visual features.</li>
        <li><strong>Deaf User</strong> - A user who cannot hear, but can see and uses the mouse and keyboard. We need to remember this user especially when there is audio and video on your site. Written transcripts will be important to this user.</li>
        <li><strong>Learning Disability User</strong> - A user who can see and hear and can use the mouse and keyboard, but they have a learning disability (ie. a person with ADHD or Autism). Content on the site might be overwhelming for this user. They might also not be able to digest the information on the page or understand the user interaction a feature requires.</li>
      </ol>
    </main>
    <?php include '../include_footer.php';?>
  </body>
</html>
