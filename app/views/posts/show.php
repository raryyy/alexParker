<div class="col-md-9">
            <div class="col-md-12 page-body">
              <div class="row">
                <div class="sub-title">
                  <a href="?" title="Go to Home Page"
                    ><h2>Back Home</h2></a
                  >
                  <a href="#comment" class="smoth-scroll"
                    ><i class="icon-bubbles"></i
                  ></a>
                </div>

                <div class="col-md-12 content-page">
                  <div class="col-md-12 blog-post">
                    <div>
                      <img src="images/blog/1.jpg" alt="">
                    </div>

                    <!-- Post Headline Start -->
                    <div class="<?php echo $post['title']; ?>">
                      <h1>
                      <?php echo $post['title']; ?>
                      </h1>
                    </div>
                    <!-- Post Headline End -->

                    <!-- Post Detail Start -->
                    <div class="post-info">
                      <span><?php echo $post['created_at']; ?></span> | <span><?php echo $post['category_name']; ?></span>
                    </div>
                    <!-- Post Detail End -->

                    <p>
                    <?php echo $post['text']; ?>
                    <!-- Post Blockquote (Italic Style) Start -->
                    <blockquote class="margin-top-40 margin-bottom-40">
                    <?php echo $post['quote']; ?>
                    </blockquote>
                    <!-- Post Blockquote (Italic Style) End -->

                    <!-- Post Buttons -->
                    <div>
                      <a href="form.html" type="button" class="btn btn-primary"
                        >Edit Post</a
                      >
                      <a
                        href="posts/<?php echo $post['id']; ?>/<?php echo \Core\Helpers\slugify($post['title']) ?>/delete.html"
                        type="button"
                        class="btn btn-secondary"
                        role="button"
                        >Delete Post</a
                      >
                    </div>
                    <!-- Post Buttons End -->
                  </div>
                </div>
              </div>
            </div>

            <!-- Footer Start -->
            <div class="col-md-12 page-body margin-top-50 footer">
              <footer>
                <ul class="menu-link">
                  <li><a href="index.html">My Blog</a></li>
                </ul>

                <p>© Copyright 2016 DevBlog. All rights reserved</p>

                <!-- UiPasta Credit Start -->
                <div class="uipasta-credit">
                  Design By
                  <a href="http://www.uipasta.com" target="_blank">UiPasta</a>
                </div>
                <!-- UiPasta Credit End -->
              </footer>
            </div>
            <!-- Footer End -->
          </div>