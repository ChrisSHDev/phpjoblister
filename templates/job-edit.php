<?php include 'inc/header.php' ?>
    <div class="container">
        <hr>
        <h2 class="page-header">Edit Job Listing</h2>
        <form action="edit.php?id=<?php echo $job->id;?>" method="post">
            <div class="form-group">
                <label for="">Company</label>
                <input class="form-control" type="text" name="company" value="<?php echo $job->company; ?>">
            </div>
            <div class="form-group">
                <label for="">Category</label>
                <select class="form-control" type="text" name="category_id" >

                <option value="0">Choose Category</option>

                <?php foreach($categories as $category): ?>

                        <?php if($job->category_id == $category->id) : ?>
                            <option value="<?php echo $category->id; ?>" selected><?php echo $category->name; ?></option>
                        <?php else : ?>
                            <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                        <?php endif; ?>
                
                <?php endforeach ?>
                
                </select>
            </div>
            <div class="form-group">
                <label for="">Job Title</label>
                <input class="form-control" type="text" name="job_title" value="<?php echo $job->job_title; ?>">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <textarea class="form-control" type="text" name="description" >
                    <?php echo $job->description; ?>
                </textarea>
            </div>
            <div class="form-group">
                <label for="">Location</label>
                <input class="form-control" type="text" name="location" value="<?php echo $job->location; ?>">
            </div>
            <div class="form-group">
                <label for="">Salary</label>
                <input class="form-control" type="text" name="salary" value="<?php echo $job->salary; ?>">
            </div>
            <div class="form-group">
                <label for="">Contact User</label>
                <input class="form-control" type="text" name="contact_user" value="<?php echo $job->contact_user; ?>" >
            </div>
            <div class="form-group">
                <label for="">Contact Email</label>
                <input class="form-control" type="text" name="contact_email" value="<?php echo $job->contact_email; ?>">
            </div>
            <input class="btn btn-default" type="submit" value="Submit" name="submit">
        </form>
    </div>
<?php include 'inc/footer.php' ?>