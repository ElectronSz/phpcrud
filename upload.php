<?php include('header.php'); ?>

<div class="container">
<h4>PHP Uploads</h4>
<div class="">
    <form action="upload_file.php" class="form" method="post" enctype="multipart/form-data">
    <div class="form-group">
    <label>Upload Files</label>
    <input type="file" name="proof" class="form-control">
    </div>
    <input type="submit" name="up" class="btn btn-primary" value="Upload">
    <a href="index.php" class="btn btn-default">Cancel</a>
    </form>
</div>
</div>
<?php include('footer.php') ;?>