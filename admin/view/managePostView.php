<?php 
$returnMsgFromManagePost = $classObj->manage_post();

if(isset($_GET["status"])){
    if($_GET["status"] == "deletePost"){
        $deletedId = $_GET["id"];
        $returnForDelete = $classObj->delete_post($deletedId);
    }
}
?>

<h1>manage post</h1>
<div>
    <table class="table table-responsive ">
        <thead>
            <th>Post Id</th>
            <th>Post Title</th>
            <th>Post Description</th>
            <th>Post Category</th>
            <th>Post Image</th>
            <th>Post Date</th>
            <th>Post Status</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php while($data = mysqli_fetch_assoc($returnMsgFromManagePost)){ ?>
            <tr>
                <td><?php echo $data['post_id']; ?></td>
                <td><?php echo $data['post_title']; ?></td>
                <td><?php echo $data['post_content']; ?></td>
                <td><?php echo $data['category_name']; ?></td>
                <td><img src="../uploads/<?php echo $data['post_image']; ?>" width="100" height="100"></td>
                <td><?php echo $data['post_date']; ?></td>
                <td><?php echo $data['post_status']; ?></td>
                <td><a class="btn btn-primary" href="editPost.php?status=editPost&id=<?php echo $data['post_id']; ?>">Edit</a>  
                <a class="btn btn-danger" href="?status=deletePost&id=<?php echo $data['post_id']; ?>">Delete</a></td>
            </tr>
            <?php } ?>
            <?php if(isset($returnForDelete)){ echo $returnForDelete; } ?>
            
        </tbody>
    </table>
</div>