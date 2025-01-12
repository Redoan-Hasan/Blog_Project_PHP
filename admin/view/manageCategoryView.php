<?php
 $returnFromManageCategory = $classObj->manage_category();

 if(isset($_GET["status"])){
    if($_GET["status"] == "deleteCategory"){
        $deletedId = $_GET["id"];
        $returnForDelete = $classObj->delete_category($deletedId);
    }
 }
?>

<h1>manage Category view</h1>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Category Id</th>
            <th>Category Name</th>
            <th>Category Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php while($data = mysqli_fetch_assoc($returnFromManageCategory)){ ?>
        <tr>
            <td><?php echo $data['id']; ?></td>
            <td><?php echo $data['category_name']; ?></td>
            <td><?php echo $data['category_description']; ?></td>
            <td><a class="btn btn-primary" href="">Edit</a>  
            <a class="btn btn-danger" href="?status=deleteCategory&id=<?php echo $data['id']; ?>">Delete</a></td>
        </tr>
    <?php } ?>
    </tbody>
</table>