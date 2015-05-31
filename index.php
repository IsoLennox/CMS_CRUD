<?php include("inc/header.php"); ?>
<?php if($_SESSION['is_employee']==0){
    echo "<h1>CLIENT</h1>";

}else{
echo "<h1>Employee</h1>";

} ?>
 
    <h4>Header Text <span class="right"> <a title="Show Link Title" href="browse.php"><i class="fa fa-globe"></i> <span class="small">Link</span>  
</a> </span></h4>
         <p>This is the landing page, you can view your profile by clicking your username in the header.<Br/>You may also change your account settings by clicking the <i class="fa fa-cog"></i> COG icon!</p>
           
           
           <?php

//example query

//    $query  = "SELECT * FROM TABLE";  
//    $result = mysqli_query($connection, $query);
//    if($result){
//        //show each result value
//        foreach($result as $show){
//            
//            $this_value=$show['col_name'];
//            echo $this_value;
//                      
//            }
//        }
 ?>
    
     </div>
        
      
        
<?php include("inc/footer.php"); ?>