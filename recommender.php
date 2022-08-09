<?php include ('head.php');?>
<body>
    <?php include ('view_banner.php');?>

    <div class="container">
        <div class="row">
           
                <div class="menue">
                    
            </div>
                        <form action="recomm.php" method="post"> 
                               
                                <div class="form-field" style ="margin-right: 250px; margin-left: 250px;">
                                    <label style="color: maroon" for = "username">Student ID: </label><br/>
                                        <input class="form-control" placeholder="Enter Student ID" name="idno" type="text" required = "required" autofocus>
                                </div>
                                
                             <br/>
                                <center><a  href="recommendation.php"><button type="submit" class="btn btn-lg btn-success btn-block" name = "login" style= " margin-bottom:190px; width: 500px; border-color: maroon; background-color: #cd5c5c; color:white" onmouseover="this.style.backgroundColor='#800000';return true;" onmouseout="this.style.backgroundColor='#cd5c5c';return true;" width="50">View Recommender</button>
                               
                                &nbsp; 
                        </form>
                    
            </div>
        </div>
        
    </div>

  <?php include ('script.php');?>

  <script type="text/javascript">
  function page (src) {
    window.location = src;
  }
  </script>
    <?php    
        include ('footer.php');
    ?>

</body>

</html>
