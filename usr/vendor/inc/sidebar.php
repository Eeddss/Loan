<?php
            $aid=$_SESSION['u_id'];
            $ret="select * from tms_user where u_id=?";
            $stmt= $mysqli->prepare($ret) ;
            $stmt->bind_param('i',$aid);
            $stmt->execute() ;//ok
            $res=$stmt->get_result();
            //$cnt=1;
            while($row=$res->fetch_object())
        {
        ?>
            <ul class="sidebar navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="user-dashboard.php">
                      <i class="fas fa-fw fa-tachometer-alt"></i>
                      <span>Dashboard</span>
                    </a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-fw fa-user"></i>
                      <span>My Profile</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                      <h6 class="dropdown-header"><?php echo $row->u_fname;?> <?php echo $row->u_lname;?></h6>
                      <a class="dropdown-item" href="user-view-profile.php">View</a>
                      <a class="dropdown-item" href="user-update-profile.php">Update</a>
                      <a class="dropdown-item" href="user-change-pwd.php">Change Password</a>

                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-fw fa-clipboard"></i>
                      <span>Offers</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                      <h6 class="dropdown-header">Available Offers:</h6>
                      <a class="dropdown-item" href="usr-avail-offer.php">Avail</a>
                    </div>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-fw fa-file-invoice-dollar"></i>
                      <span>Payments</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                      <h6 class="dropdown-header">Payment Method:</h6>
                      <a class="dropdown-item">Gcash</a>
                      <a class="dropdown-item">Paypal</a>
                      <a class="dropdown-item">Paymaya</a>
                      <a class="dropdown-item">Cash/Bank Receipt</a>
                    </div>
                  </li>
                
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-fw fa-book"></i>
                      <span>Appointments</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                      <h6 class="dropdown-header">Appointments:</h6>
                      <a class="dropdown-item" href="usr-add-appointment.php">Add</a>
                      <a class="dropdown-item" href="user-view-booking.php">View</a>
                      <a class="dropdown-item" href="user-manage-booking.php">Manage</a>
                    </div>
                  </li>
                
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"aria-expanded="false">
                      <i class="fas fa-fw fa-comments"></i>
                      <span>Feedback</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                      <h6 class="dropdown-header">Send feedback:</h6>
                      <a class="dropdown-item" href="user-give-feedback.php">Compose</a>
                  </li>
                  
                </ul>
<?php }?>