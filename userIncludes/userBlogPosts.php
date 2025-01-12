<?php 
$returnFromDisplayPublishedBlog = $classObj->display_published_posts()
?>

<div class="col-lg-8">
    <div class="all-blog-posts">
        <div class="row">
            <?php while($data=mysqli_fetch_assoc($returnFromDisplayPublishedBlog)){ ?>
            <div class="col-lg-12">
                <div class="blog-post">
                    <div class="blog-thumb">
                        <img src="uploads/<?php echo $data['post_image']; ?>" alt="">
                    </div>
                    <div class="down-content">
                        <span><?php echo $data['category_name']; ?></span>
                        <a href="post-details.html">
                            <h4><?php echo $data['post_title']; ?></h4>
                        </a>
                        <ul class="post-info">
                            <li><a href="#"><?php echo $data['post_tag']; ?></a></li>
                        </ul>
                        <p><?php echo $data['post_content']; ?></p>
                        <div class="post-options">
                            <div class="row">
                                <div class="col-6">
                                    <ul class="post-tags">
                                        <li><?php echo $data['post_author']; ?></i></li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <ul class="post-share">
                                        <li><i class="fa fa-share-alt"></i></li>
                                        <li><a href="#">Facebook</a>,</li>
                                        <li><a href="#"> Twitter</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <div class="col-lg-12">
                <div class="main-button">
                    <a href="blog.html">View All Posts</a>
                </div>
            </div>
        </div>
    </div>
</div>