<h2>How we <em>usually</em> markup a teaser card with an image, title, description, and a link to a page</h2>
<div class="card card__container">
  <a href="/contact-us" alt="Contact Us"><img class="card__media--image" src="http://via.placeholder.com/400x225"></a>
  <h2 class="card__content__title">Card Title</h2>
  <p class="card__content__description">Card Teaser Description. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
  <a href="/contact-us" alt="Contact Us">Contact Us</a>
</div>

<h2>How we <em>should</em> markup a teaser card with an image, title, description, and a link to a page</h2>
<div class="card card__container">
  <div class="card__media__container">
    <img class="card__media--image" src="http://via.placeholder.com/400x225">
  </div>
  <div class="card__content__container">
    <div class="card__content">
      <h2 class="card__content__title">Card Title</h2>
      <p class="card__content__description">Card Teaser Description. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
    </div>
    <div class="card__actions">
      <a class="card__actions__link" href="/contact-us" alt="Go to the site's Contact Us page">Contact Us</a>
    </div>
  </div>
</div>

<a href="/contact-us" alt="Go to the site's Contact Us page" class="card card__container card__link">
  <div class="card__media__container">
    <img class="card__media--image" src="http://via.placeholder.com/400x225">
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
