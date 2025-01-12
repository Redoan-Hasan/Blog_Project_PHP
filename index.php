<?php include("admin/class/function.php") ;
$classObj = new BlogProject();
$getCategories = $classObj->manage_category();
?>

<!DOCTYPE html>
<html lang="en">

<?php include_once("userIncludes/userHead.php") ?>

<body>
    <?php include_once("userIncludes/userPreloader.php") ?>
    <?php include_once("userIncludes/userNav.php") ?>
    <?php include_once("userIncludes/userBanner.php") ?>
    <?php include_once("userIncludes/userCallToAction.php") ?>

<section class="blog-posts">
        <div class="container">
            <div class="row">
                <?php include_once("userIncludes/userBlogPosts.php") ?>
                <div class="col-lg-4">
                    <?php include_once("userIncludes/userSidebar.php") ?>
                </div>
            </div>
        </div>
    </section>
    <?php include_once("userIncludes/userFooter.php") ?>
    <?php include_once("userIncludes/userScripts.php") ?>
</body>

</html>