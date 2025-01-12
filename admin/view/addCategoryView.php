<?php 
if(isset($_POST["add_category"])){
    $returnFromAddCategory = $classObj->add_category($_POST);
}

?>

<h1>Add category view</h1>
<form action="" method="POST">
    <div class="form-group">
        <label class="big mb-1" for="category_view">Category Name</label>
        <input name="category_name" class="form-control py-4" id="inputEmailAddress" type="text" />
    </div>
    <div class="form-group">
        <label class="big mb-1" for="category_view">Category Description</label>
        <textarea name="category_description" class="form-control w-100" name="category_description" rows="4"
            id=""></textarea>
    </div>
    <input type="submit" value="add_category" name="add_category" class="btn btn-primary text-center d-flex justify-content-center w-100">
    <?php if(isset($returnFromAddCategory)){{ echo $returnFromAddCategory;}} ?>
</form>