<div class="col-md-9">
            <div class="col-md-12 page-body">
              <div class="row">
                <div class="col-md-12 content-page">
                  <!-- ADD A POST -->
                  <div>
                    <a href="posts/add/form.html" type="button" class="btn btn-primary"
                      >Add a Post</a
                    >
                  </div>
                  <!-- ADD A POST END -->

                  <!-- Blog Post Start -->
                  <?php foreach($posts as $post) : ?>
                  <div class="col-md-12 blog-post row">
                    <div class="post-title">
                      <a href="posts/<?php echo $post['id']; ?>/<?php echo \Core\Helpers\slugify($post['title']) ?>.html"
                        ><h1>
                        <?php echo $post['title']; ?>
                        </h1></a>
                    </div>
                    <div class="post-info">
                      <span><?php echo \Core\Helpers\formatDate($post['created_at']); ?></span> | <span><?php echo $post['category_name']; ?></span>
                    </div>
                    <p>
                    <?php echo \Core\Helpers\truncate($post['text']); ?>
                    </p>
                    <a
                      href="posts/<?php echo $post['id']; ?>/<?php echo \Core\Helpers\slugify($post['title']) ?>.html"
                      class="
                        button button-style button-anim
                        fa fa-long-arrow-right
                      "
                      ><span>Read More</span></a
                    >
                  </div>
                  <?php endforeach; ?>
                  <!-- Blog Post End -->

                  <nav aria-label="Page navigation example" style="text-align: center;">
                    <ul class="pagination">
                      <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                  </nav>

                </div>
              </div>
            </div>
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
