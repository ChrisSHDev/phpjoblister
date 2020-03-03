<?php include 'inc/header.php' ?>

<div class="jumbotron">
    <div class="container">
      <h1 class="display-3">Find A Job</h1>
      <form method="GET" action="index.php">
        <select name="category" class="form-control" id="">
          <option value="0">Choose Category</option>
          <?php foreach($categories as $category): ?>
            <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
          <?php endforeach ?>
        </select>
        <br>
        <input type="submit" value="FIND" class="btn btn-lg btn-success">
      
      </form>
    </div>
  </div>

  <div class="container">
    <!-- Example row of columns -->
    <h3><?php echo $title; ?></h3>
    <?php foreach($jobs as $job) : ?>
    <div class="row marketing">
        <div class="col-md-10">
            <h2><?php echo $job->job_title; ?></h2>
            <p><?php echo $job->description; ?></p>
            <p><a class="btn btn-secondary" href="job.php?id=<?php echo $job->id; ?>" role="button">View details &raquo;</a></p>
        </div>
    </div>
    <?php endforeach; ?>

    <hr>

  </div> <!-- /container -->

<?php include 'inc/footer.php' ?>