<div class="col-md-9">
            <div class="col-md-12 page-body">
              <div class="row">
                <div class="col-md-12 content-page">
                  <!-- ADD A POST -->
                  <div>
                    <a href="form.html" type="button" class="btn btn-primary"
                      >Add a Post</a
                    >
                  </div>
                  <!-- ADD A POST END -->

                  <!-- Blog Post Start -->
                  <?php foreach($posts as $post) : ?>
                  <div class="col-md-12 blog-post row">
                    <div class="<?php echo $post['title']; ?>">
                      <a href="single.html"
                        ><h1>
                        <?php echo $post['title']; ?>
                        </h1></a>
                    </div>
                    <div class="post-info">
                      <span><?php echo \Core\Helpers\formatDate($post['created_at']); ?></span> | <span>Life style</span>
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
