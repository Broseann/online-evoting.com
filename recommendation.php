<?php include ('head.php');?>

<body>
 <?php include ('view_banner.php');?>
<div class="col-lg-6">

       <center>
                    <strong><h3>List of Candidates for Recommendation</h3></strong>
                    </center>

 &nbsp;
                  



                    <div class="tables-body">
                            <div class="table_back">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example" border="0">
                                    <thead class="thead">
                                        <tr>
                                         
                                            
                                            <th>Position</th>
                                            <th>Party List</th>
                                            <th>Firstname</th>
                                            <th>Lastname</th>
                                            <th>Year Level</th>
                                            <th>Gender</th>
                                            <th>My Qualities as a Leader</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                    <?php 
                       require 'admin/dbcon.php';
                                            $bool = false;
                                            $query = $conn->query("SELECT * FROM candidate ORDER BY candidate_id DESC");
                                                while($row = $query->fetch_array()){
                                                    $candidate_id=$row['candidate_id'];
                                        ?>
                                            
                                            <td><?php echo $row ['position'];?></td>
                                            <td><?php echo $row ['party'];?></td>
                                            <td><?php echo $row ['firstname'];?></td>
                                            <td><?php echo $row ['lastname'];?></td>
                                            <td><?php echo $row ['year_level'];?></td>
                                            <td><?php echo $row ['gender'];?></td>
                                            <td><?php echo $row ['qualities'];?></td>  
                      </tr>
                    
                                       <?php } ?>
                                    </tbody>
                                </table>

                             </div>
                    </div>
         

</div>                          
        <?php 
            include ('script.php');
        ?>                     
</body>
</html>