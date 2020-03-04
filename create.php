<?php include_once 'config/init.php' ?>

<?php 

    $job = new JOB;

    if(isset($_POST['submit'])){

        

    }

    $template = new Template('templates/job-create.php');

    $template->categories = $job->getCategories();

    echo $template;