<div class="col-md-3">
            <div class="about-fixed">
              <div class="my-pic">
                <a href="index.html"
                  ><img src="images/pic/my-pic.png" alt=""
                /></a>
                <nav id="menu">
                  <ul class="menu-link">
                    <li><a href="index.html">My blog</a></li>
                  </ul>
                </nav>
                <ul class="menu-link">
                 <?php 
                 include_once '../app/models/categoriesModel.php';
                 $categories = \App\Models\CategoriesModel\findAll($connexion);
                 foreach($categories as $categorie): ?>
                  <li><a href="index.html"><?php echo $categorie['name'] ?> [<?php echo $categorie['post_count'] ?>]</a></li>
                 <?php endforeach; ?>

                </ul>
              </div>

              <div class="my-detail">
                <div class="white-spacing">
                  <h1>Alex Parker</h1>
                  <span>Web Developer</span>
                </div>

                <ul class="social-icon">
                  <li>
                    <a href="#" target="_blank" class="facebook"
                      ><i class="fa fa-facebook"></i
                    ></a>
                  </li>
                  <li>
                    <a href="#" target="_blank" class="twitter"
                      ><i class="fa fa-twitter"></i
                    ></a>
                  </li>
                  <li>
                    <a href="#" target="_blank" class="linkedin"
                      ><i class="fa fa-linkedin"></i
                    ></a>
                  </li>
                  <li>
                    <a href="#" target="_blank" class="github"
                      ><i class="fa fa-github"></i
                    ></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>