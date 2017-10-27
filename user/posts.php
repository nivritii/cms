<?php include "includes/user_header.php" ?>

    <div id="wrapper">
        
  

        <!-- Navigation -->
 
        <?php include "includes/user_navigation.php" ?>
        
        
    

<div id="page-wrapper">

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">

  <h1 class="page-header">
                Welcome to User
                <small><?php 
                            if(isset($_SESSION['username'])) {
                            echo $_SESSION['username'];
                            }
                        ?></small>
            </h1>
            
            
<?php

if(isset($_GET['source'])){

$source = $_GET['source'];

} else {

$source = '';

}

switch($source) {
    
    case 'add_post';
        include "includes/user_add_post.php";
        break; 
    
    case 'edit_post';
        include "includes/user_edit_post.php";
        break;
    
    default:
        include "includes/view_all_user_posts.php";
        break;
    
}
?>

 
            
    
            

            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>

     
        <!-- /#page-wrapper -->
        
    <?php include "includes/user_footer.php" ?>
