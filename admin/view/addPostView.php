<?php
$returnFromManageCategory = $classObj->manage_category();

if(isset($_POST["add_post"])){
    $returnMsgFromAddPost = $classObj->add_post($_POST);
    // echo $_POST["post_status"];
}
?>

<h1>add post </h1>
<h1><?php if(isset($returnMsgFromAddPost)){ echo $returnMsgFromAddPost; } ?></h1>
<form action="" method="POST" enctype="multipart/form-data">
        
        <!-- Post Title -->
        <div class="mb-3">
            <label for="post_title" class="form-label">Post Title</label>
            <input type="text" class="form-control" id="post_title" name="post_title" required>
        </div>

        <!-- Post Content -->
        <div class="mb-3">
            <label for="post_content" class="form-label">Post Content</label>
            <textarea class="form-control" id="post_content" name="post_content" rows="4" required></textarea>
        </div>

        <!-- Post Image -->
        <div class="mb-3">
            <label for="post_image" class="form-label">Post Image</label>
            <input type="file" class="form-control" id="post_image" name="post_image" required>
        </div>

        <!-- Post Category -->
        <div class="mb-3">
            <label for="post_category" class="form-label">Post Category</label>
            <select class="form-control" id="post_category" name="post_category" required>
            <?php while($data = mysqli_fetch_assoc($returnFromManageCategory)) { ?>
                <option value="<?php echo $data['id']; ?>"><?php echo $data['category_name']; ?></option>
            <?php } ?>
            </select>
        </div>

        <!-- Post Summary -->
        <div class="mb-3">
            <label for="post_summary" class="form-label">Post Summary</label>
            <input type="text" class="form-control" id="post_summary" name="post_summary" required>
        </div>

        <!-- Post Tags -->
        <div class="mb-3">
            <label for="post_tag" class="form-label">Post Tags</label>
            <input type="text" class="form-control" id="post_tag" name="post_tag" required>
        </div>

        <!-- Post Status -->
        <div class="mb-3">
            <label for="post_status" class="form-label">Post Status</label>
            <select class="form-control" id="post_status" name="post_status" required>
                <option value="unpublished">Unpublished</option>
                <option value="published">Published</option>
            </select>
        </div>

        <!-- Submit Button -->
        <input type="submit" name="add_post" value="Submit Post">
    </form>