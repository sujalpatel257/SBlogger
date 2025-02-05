<?php include("includes/main_header.php"); 
$blog_id=$_GET['blog_id'];
?>

<?php
$conn = mysqli_connect("localhost","root","","blog_db");
if(isset($_POST['submit']))
{
  $user_id=$_SESSION['user_id'];  
  $comment_title=$_POST['comment_title'];
  $comment_description=$_POST['comment_description'];

  $query = mysqli_query($conn,"insert into blog_comment (blog_id,user_id,comment_title,comment_description) values ($blog_id,$user_id,'$comment_title','$comment_description')");
  if($query)
  {
    echo "Inserted Successfully";
  }
  else
  {
    echo "error";
  }
}
?>

  <?php include("includes/navbar.php"); ?>

  <link rel="stylesheet" href="css/slider.css">

  <div class="hero-wrap js-fullheight" style="background-image: url('images/image.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
      <?php $conn=mysqli_connect("localhost","root","","blog_db");
					$blog_query=mysqli_query($conn,"select * from blog_item where blog_id=$blog_id");
					$blog_row=mysqli_fetch_array($blog_query);
					
						?>
        <div class="col-lg-10 ftco-animate d-flex align-items-center">
          <div class="text text-center">
            <h1 class="mb-3 bread"><?php echo $blog_row['blog_title']; ?></h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                    class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="blog.html">Blog <i class="ion-ios-arrow-forward"></i></a></span> 
                    <span><?php echo $blog_row['blog_title']; ?><i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <section class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 ftco-animate">
          <h2 class="mb-3"><?php echo $blog_row['blog_title']; ?></h2>
          <p><?php echo $blog_row['blog_description']; ?></p>
          <p>
            <img src="uploads/<?php echo $blog_row['blog_thumb']; ?>" alt="" class="img-fluid">
          </p>
          <p>Molestiae cupiditate inventore animi, maxime sapiente optio, illo est nemo veritatis repellat sunt
            doloribus nesciunt! Minima laborum magni reiciendis qui voluptate quisquam voluptatem soluta illo eum ullam
            incidunt rem assumenda eveniet eaque sequi deleniti tenetur dolore amet fugit perspiciatis ipsa, odit.
            Nesciunt dolor minima esse vero ut ea, repudiandae suscipit!</p>
          <h2 class="mb-3 mt-5">#2. Creative WordPress Themes</h2>
          <p>Temporibus ad error suscipit exercitationem hic molestiae totam obcaecati rerum, eius aut, in.
            Exercitationem atque quidem tempora maiores ex architecto voluptatum aut officia doloremque. Error dolore
            voluptas, omnis molestias odio dignissimos culpa ex earum nisi consequatur quos odit quasi repellat qui
            officiis reiciendis incidunt hic non? Debitis commodi aut, adipisci.</p>
          
            <!-- card left -->
            <div class="product-imgs">
                <div class="img-display">
                    <div class="img-showcase">
                      <?php
                      $images=explode(",",$blog_row['blog_images']);
                        foreach($images as $image)
                        {
                          ?>
                            <img src="<?php echo "uploads/".$image;?>" alt="shoe image">
                          <?php
                        }
                      ?>
                    </div>
                </div>
                <div class="img-select">
                  <?php
                  $i=1;
                  foreach($images as $image)
                        {
                          ?>
                    <div class="img-item">
                        <a href="#" data-id="<?php echo $i; ?>">
                            <img src="<?php echo "uploads/".$image;?>"
                                alt="shoe image">
                        </a>
                    </div>
                    <?php
                    $i++;
                        }
                    ?>
                    
                    
                </div>
            </div>

          <div class="tag-widget post-tag-container mb-5 mt-5">
            <div class="tagcloud">
              <a href="#" class="tag-cloud-link">Life</a>
              <a href="#" class="tag-cloud-link">Sport</a>
              <a href="#" class="tag-cloud-link">Tech</a>
              <a href="#" class="tag-cloud-link">Travel</a>
            </div>
          </div>

          <div class="about-author d-flex p-4 bg-light">
            <div class="bio mr-5">
              <img src="images/person_4.jpg" alt="Image placeholder" class="img-fluid mb-4">
            </div>
            <div class="desc">
              <h3>George Washington</h3>
              <p>An author is a person who creates and publishes written work, such as a book, article, poem, or play. Authors are usually also writers, but not all writers are considered authors. The distinction is that authors are responsible for originating the ideas and content of their work, while writers may just execute the written product.</p>
            </div>
          </div>


          <div class="pt-5 mt-5">
            <h3 class="mb-5">6 Comments</h3>
            <ul class="comment-list">
              <li class="comment">
                <div class="vcard bio">
                  <img src="images/person_1.jpg" alt="Image placeholder">
                </div>
                <div class="comment-body">
                  <h3>John Doe</h3>
                  <div class="meta">Sept. 12, 2019 at 2:21pm</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus,
                    ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum
                    impedit necessitatibus, nihil?</p>
                  <p><a href="#" class="reply">Reply</a></p>
                </div>
              </li>

              <li class="comment">
                <div class="vcard bio">
                  <img src="images/person_1.jpg" alt="Image placeholder">
                </div>
                <div class="comment-body">
                  <h3>John Doe</h3>
                  <div class="meta">Sept. 12, 2019 at 2:21pm</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus,
                    ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum
                    impedit necessitatibus, nihil?</p>
                  <p><a href="#" class="reply">Reply</a></p>
                </div>

                <ul class="children">
                  <li class="comment">
                    <div class="vcard bio">
                      <img src="images/person_1.jpg" alt="Image placeholder">
                    </div>
                    <div class="comment-body">
                      <h3>John Doe</h3>
                      <div class="meta">Sept. 12, 2019 at 2:21pm</div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum
                        necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure!
                        Quam voluptas earum impedit necessitatibus, nihil?</p>
                      <p><a href="#" class="reply">Reply</a></p>
                    </div>


                    <ul class="children">
                      <li class="comment">
                        <div class="vcard bio">
                          <img src="images/person_1.jpg" alt="Image placeholder">
                        </div>
                        <div class="comment-body">
                          <h3>John Doe</h3>
                          <div class="meta">Sept. 12, 2019 at 2:21pm</div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum
                            necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste
                            iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                          <p><a href="#" class="reply">Reply</a></p>
                        </div>

                        <ul class="children">
                          <li class="comment">
                            <div class="vcard bio">
                              <img src="images/person_1.jpg" alt="Image placeholder">
                            </div>
                            <div class="comment-body">
                              <h3>John Doe</h3>
                              <div class="meta">Sept. 12, 2019 at 2:21pm</div>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum
                                necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste
                                iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                              <p><a href="#" class="reply">Reply</a></p>
                            </div>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>

              <li class="comment">
                <div class="vcard bio">
                  <img src="images/person_1.jpg" alt="Image placeholder">
                </div>
                <div class="comment-body">
                  <h3>John Doe</h3>
                  <div class="meta">Sept. 12, 2019 at 2:21pm</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus,
                    ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum
                    impedit necessitatibus, nihil?</p>
                  <p><a href="#" class="reply">Reply</a></p>
                </div>
              </li>
            </ul>
            <!-- END comment-list -->

            <div class="comment-form-wrap pt-5">
              <h3 class="mb-5">Leave a comment</h3>
              <form action="" class="p-5 bg-light" method="post">
                <div class="form-group">
                  <label for="name">Name *</label>
                  <input type="text" class="form-control" id="name" name="comment_title">
                </div>
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea name="comment_description" id="message" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary" name="submit">
                </div>

              </form>
            </div>
          </div>

        </div> <!-- .col-md-8 -->
        <div class="col-lg-4 sidebar ftco-animate">
          <div class="sidebar-box">
            <form action="#" class="search-form">
              <div class="form-group">
                <span class="icon icon-search"></span>
                <input type="text" class="form-control" placeholder="Search...">
              </div>
            </form>
          </div>
          <div class="sidebar-box ftco-animate">
            <h3 class="heading-sidebar">Categories</h3>
            <ul class="categories">
              <li><a href="#">Interior Design <span>(12)</span></a></li>
              <li><a href="#">Exterior Design <span>(22)</span></a></li>
              <li><a href="#">Industrial Design <span>(37)</span></a></li>
              <li><a href="#">Landscape Design <span>(42)</span></a></li>
            </ul>
          </div>

          <div class="sidebar-box ftco-animate">
            <h3 class="heading-sidebar">Recent Blog</h3>
            <div class="block-21 mb-4 d-flex">
              <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
              <div class="text">
                <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="icon-calendar"></span> March 12, 2019</a></div>
                  <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                  <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                </div>
              </div>
            </div>
            <div class="block-21 mb-4 d-flex">
              <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
              <div class="text">
                <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="icon-calendar"></span> March 12, 2019</a></div>
                  <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                  <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                </div>
              </div>
            </div>
            <div class="block-21 mb-4 d-flex">
              <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
              <div class="text">
                <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="icon-calendar"></span> March 12, 2019</a></div>
                  <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                  <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                </div>
              </div>
            </div>
          </div>

          <div class="sidebar-box ftco-animate">
            <h3 class="heading-sidebar">Tag Cloud</h3>
            <div class="tagcloud">
              <a href="#" class="tag-cloud-link">house</a>
              <a href="#" class="tag-cloud-link">office</a>
              <a href="#" class="tag-cloud-link">building</a>
              <a href="#" class="tag-cloud-link">land</a>
              <a href="#" class="tag-cloud-link">table</a>
              <a href="#" class="tag-cloud-link">interior</a>
              <a href="#" class="tag-cloud-link">exterior</a>
              <a href="#" class="tag-cloud-link">industrial</a>
            </div>
          </div>

          <div class="sidebar-box ftco-animate">
            <h3 class="heading-sidebar">Paragraph</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate
              quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos
              fugit cupiditate numquam!</p>
          </div>
        </div>

      </div>
    </div>
  </section> <!-- .section -->

  <?php include("includes/footer.php"); ?>

<?php include("includes/main_footer.php"); ?>