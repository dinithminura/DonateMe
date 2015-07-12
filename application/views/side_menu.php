<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">

              	  <p class="centered"><a href="profile.html"><img src="https://lh4.googleusercontent.com/-e6ZeX6FeSkY/U5B86kHSYUI/AAAAAAAAAc0/Z4z84nNYk-4/s315-no/DSC_0158-2.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?php echo "$username";?></h5>

                  <li class="mt">
                      <a class="<?=($this->uri->segment(2)=="")?"active":"nonactive"?>" href="<?php echo base_url('home') ?>">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a class="<?=($this->uri->segment(2)=="new_application")?"active":"nonactive"?>" href="<?php echo base_url('home/new_application') ?>" >
                          <i class="fa fa-pencil"></i>
                          <span>Add New App</span>
                      </a>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->