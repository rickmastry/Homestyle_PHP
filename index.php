<?php get_header(); ?>

  <section id="Topimg">
    <div class="image-wrap">
      <img src="<?php bloginfo('template_url'); ?>/img/hcjr2.png" class="ls-img"/>
    </div>
    <div class="image-overlay"></div>
    <div class="container">
        <div class="title">
                <h5 class="welcome">
                  Welcome To
                </h5>
                <h1 class="hjr">
                  CLARENDON HOMESTYLE RESTAURANTS
                </h1>
          </div>
            <div class="contact">
              <div class="container">
                <div class="booking">
                    <h3 class="tag">Contact Homestyle Cuisine Directly:</h3>
                </div>
                <div class="busnumber">
                  <h3 class="numbers">
                      (843)-448-8000
                  </h3>
                </div>
              <div class="hours">
                <strong>Opening Hours: Sunday-Monday: 8am - 10pm</strong>
              </div>
            </div>
          </div>
        </div>  
      </section> 
      <section id="OurStory">
          <div class="container">
             <div class="row">
                 <div class="col-md-6">
                   <h5 class="comp-title">Our Story</h5>
                   <h2>Cooking is A Form Of Artwork</h2>
                   <p class="ours">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                     Aenean commodo ligula eget dolor. Aenean massa. Cum sociis 
                     natoque penatibus et magnis dis parturient montes, nascetur 
                     ridiculus mus. Donec quam felis, ultricies nec, pellentesque 
                     eu, pretium quis, sem. Nulla consequat massa quis enim. 
                     </p>
                 <div class="quote">"The best Jamaican cuisine in the Myrtle Beach area"-<strong class="name"> The Sun News</strong></div>
                 <a href="#ContactUs" class="reserve-btn">Reserve</a>
                 </div>
                 <div class="col-md-6">
                    <div class="video-img">
                        <img class="img-vi" src="<?php bloginfo('template_url'); ?>/img/oxgoat.jpg"/>
                    </div>
                 </div>
            </div> 
           </div>
         </section>
      <section id="SpecialMenu">
      <img src="<?php bloginfo('template_url'); ?>/img/jabk.jpg" class="sm"/>
        <h2 class="spec-title">Specials Daily</h2>
          <h6 class="dfj">Delicious Flavors Of Jamaica</h6>
           <div class="box-container">
            <div class="row">
             <div class="col-md-4">
                <div class="box">
                    <div class="box1-img">
                      <img class= "menu-image" src="<?php bloginfo('template_url'); ?>/img/jerk.jpg"/>
                      <div class="price-circle">$10.25</div>
                    </div>
                      <span class="box-title">Jerk Chicken</span>
                      <p class="details">Smoked Jerk chicken with rice, peas & cabbage</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="box">
                      <div class="box2-img">
                       <img class="menu-image" src="<?php bloginfo('template_url'); ?>/img/curry.jpg"/>
                        <div class="price-circle">$9.50</div>
                      </div>
                        <span class="box-title">Curry Chicken</span>
                        <p class="details">Smoked Curry chicken with rice, peas & cabbage</p>
                    </div>
                    <div class="middle">
                      <a href="http://localhost/Jamaica/wordpress/full-menu" class="linky">View Full Menu</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <div class="box3-img">
                        <img class="menu-image" src="<?php bloginfo('template_url'); ?>/img/brown.png"/>
                          <div class="price-circle">$9.50</div>
                        </div>
                          <span class="box-title">Brown Stew Chicken</span>
                          <p class="details">Brown Stew Chicken with rice, peas & cabbage</p>
                      </div>
                  </div>
             </div> 
            </div>
        </section>
        <section id="RandomQuote">
           <div class="wrap">
              <img src="<?php bloginfo('template_url'); ?>/img/cooking.png" class="rq"/>
          </div>
          <div class="header-overlay"></div>
            <div class="container">
              <p class="quote1">"Come and Taste Jamaica"</p>
              <p class="author">-Yuan Watson-</p>
             </div>
        </section>
        <section id="Reviews">
          <div class="container"> 
            <h5 class="rev-title">Reviews</h5>  
            <div class="row">
              <div class="col-md-7">
                <div class="side-img">
                  <img class="chef" src="<?php bloginfo('template_url'); ?>/img/chef_patrick.jpg" />
                </div>
              </div>
              <div class="col-md-5">
               <div class="my-slider">
                <ul> 
                  <?php $slide_query = new WP_Query(array(
                        'category_name' => 'Reviews',
                        'orderby'       => 'date',
                        'order'         => 'ASC'
                  ));
                  ?>
                  <?php while($slide_query->have_posts()) : $slide_query->the_post(); ?>
                  <li>
                    <div class="content-accolade">
                      <h1 class="accolades"><?php the_title(); ?></h1> 
                    </div>
                    <br/>
                    <div class="review-div">
                       <p class="review"><?php the_content(); ?></p>
                    </div>
                  </li>
                  <?php endwhile; ?>
                         <!-- <div class="arrows">
                              <i class= "fa fa-arrow-left" aria-hidden="true"></i>
                              <i class= "fa fa-arrow-right" aria-hidden="true"></i>
                          </div>-->
                </ul>
               </div>
               </div>
             </div>
          </div>   
        </section>
        <section id="ContactUs">
            <div class="container">
                <h5 class="contact-title">Contact Us</h5>
                <h2 class="name">Clarendon Homestyle Restaurants</h2>
                <div class="content-box">
                  <div class="row">
                      <div class="col-md-6">
                         <div class="city">Myrtle Beach, South Carolina</div>
                         <h6 class="address">
                            514 8th. Avenue N.<br/>
                            Myrtle Beach, South Carolina 29577
                         </h6>
                        <p class="email">
                        <p class="email">email:<a href="mailto:home_stylerestaurant@yahoo.com"class="elink">home_stylerestaurant@yahoo.com</a></p>
                        </p>
                      </div>
                      <div class="col-md-6">
                        <p class="contact-phone">Phone: </p>
                        <h3 class="number">(843)448-8000</h3>
                        <p class="lunch">Lunch Services:</p>
                        <p class= "open-days">
                            Monday thru Sunday <br/>
                            11am - 4pm
                        </p>
                        <p class="dinner">Dinner Services:</p>
                        <p class="open-days">
                            Monday thru Sunday <br/>
                            4pm - 10pm
                        </p>
                    </div>
                    
                  </div>
                </div>
            </div>
        </section>

<?php get_footer(); ?>
        
       