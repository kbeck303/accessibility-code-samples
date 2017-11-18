<h2>How we <em>usually</em> markup a teaser card with an image, title, description, and a link to a page</h2>
<h3>Teaser card with a link around the image and a text link after the description.</h3>
<div class="card card__container">
  <a href="/contact-us" title="Contact Us">
    <img alt="This is a placeholder image from placeholder.com and it is set to 400 pixels wide and 225 pixels tall" class="card__media--image" src="http://via.placeholder.com/400x225" />
  </a>
  <h2 class="card__content__title">Card Title</h2>
  <p class="card__content__description">Card Teaser Description. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
  <a href="/contact-us" title="Contact Us">Contact Us</a>
</div>

<h2>How we <em>should</em> markup a teaser card with an image, title, description, and a link to a page</h2>
<h3>Teaser card with a link wrapped around everything.</h3>
<a href="/contact-us" alt="Go to the site's Contact Us page" class="card card__container card__link">
  <div class="card__media__container">
    <img alt="This is a placeholder image from placeholder.com and it is set to 400 pixels wide and 225 pixels tall" class="card__media--image" src="http://via.placeholder.com/400x225" />
  </div>
  <div class="card__content__container">
    <div class="card__content">
      <h2 class="card__content__title">Card Title</h2>
      <p class="card__content__description">Card Teaser Description. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
    </div>
    <div class="card__actions">
      <p class="card__actions__link--fake">Contact Us</p>
    </div>
  </div>
</a>

<h3>Teaser card with a text link only after the description.</h3>
<div class="card card__container">
  <div class="card__media__container">
    <img alt="This is a placeholder image from placeholder.com and it is set to 400 pixels wide and 225 pixels tall" class="card__media--image" src="http://via.placeholder.com/400x225" />
  </div>
  <div class="card__content__container">
    <div class="card__content">
      <h2 class="card__content__title">Card Title</h2>
      <p class="card__content__description">Card Teaser Description. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
    </div>
    <div class="card__actions">
      <a class="card__actions__link" href="/contact-us" title="Go to the site's Contact Us page">Contact Us</a>
    </div>
  </div>
</div>

<h3>Teaser card with a text link after the description and a hidden link around the image.</h3>
<div class="card card__container">
  <div class="card__media__container">
    <a tabindex="-1" aria-hidden="true" class="card__actions__link" href="/contact-us" title="Go to the site's Contact Us page">
      <img alt="This is a placeholder image from placeholder.com and it is set to 400 pixels wide and 225 pixels tall" class="card__media--image" src="http://via.placeholder.com/400x225" />
    </a>
  </div>
  <div class="card__content__container">
    <div class="card__content">
      <h2 class="card__content__title">Card Title</h2>
      <p class="card__content__description">Card Teaser Description. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
    </div>
    <div class="card__actions">
      <a class="card__actions__link" href="/contact-us" title="Go to the site's Contact Us page">Contact Us</a>
    </div>
  </div>
</div>
