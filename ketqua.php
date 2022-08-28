<?php
 session_start();
 
require_once "header.php";
?>
   
   <div class="container-fluid">

                   

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Kết quả</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                           
                                            <th>Question 1</th>
                                             <th>Question 2</th>
                                              <th>Question 3</th>
                                              <th>Question 4 </th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <tr>
                                       
                                        <td>
                                        <?php echo $_SESSION['question1'];?>
                                        </td>
                                        <td>
                                        <?php echo $_SESSION['question2'];?>
                                        </td>
                                        <td>
                                        <?php echo $_SESSION['question3'];?>
                                        </td>
                                        <td>
                                        <?php echo $_SESSION['question4'];?>
                                        </td>
                                       <?php  unset($_SESSION['msg']); ?>

                                       </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                

<?php
require_once "footer.php";
?>