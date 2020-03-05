<?php include 'inc/header.php' ?>
    <div class="container">
        <hr>
        <h2 class="page-header">Create Job Listing</h2>
        <form action="create.php" method="post">
            <div class="form-group">
                <label for="">Company</label>
                <input class="form-control" type="text" name="company" >
            </div>
            <div class="form-group">
                <label for="">Category</label>
                <select class="form-control" type="text" name="category_id" >
                <option value="0">Choose Category</option>

                <?php foreach($categories as $category): ?>
                    <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                <?php endforeach ?>
                
                </select>
            </div>
            <div class="form-group">
                <label for="">Job Title</label>
                <input class="form-control" type="text" name="job_title" >
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <textarea class="form-control" type="text" name="description" ></textarea>
            </div>
            <div class="form-group">
                <label for="">Location</label>
                <input class="form-control" type="text" name="location" >
            </div>
            <div class="form-group">
                <label for="">Salary</label>
                <input class="form-control" type="text" name="salary" >
            </div>
            <div class="form-group">
                <label for="">Contact User</label>
                <input class="form-control" type="text" name="contact_user" >
            </div>
            <div class="form-group">
                <label for="">Contact Email</label>
                <input class="form-control" type="text" name="contact_email" >
            </div>
            <input class="btn btn-default" type="submit" value="Submit" name="submit">
        </form>
    </div>
<?php include 'inc/footer.php' ?>