                    <?php 
				    
                        require_once 'config.php';
                        if (isset($_POST['reset'])){
                        
                        $username=$_POST['username'];
                        $new_password=md5($_POST['new_password']);
                        $confirm_password=md5($_POST['confirm_password']);
                    
                                


                        $query = $conn->query("SELECT * FROM admin WHERE username='$username'") or die (mysql_error());
                        $count1 = $query->num_rows;

                        if ($new_password!=$confirm_password or $count1<=0 ){ 
                    ?>
                                <script>
                                    alert("Please enter valid username or matching passwords");
                                </script>
                    <?php
                        }
                        else{
                            
                            $conn->query("UPDATE admin SET password='$new_password' WHERE username='$username'");
                            header("location:index.php");
                            
                            
                    ?>
                            <script>
                                alert('Password reset successful');
                            </script>
                    <?php 
                            }
                        } 
                    ?>	