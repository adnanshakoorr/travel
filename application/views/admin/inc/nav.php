 <aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo !empty($this->session->userdata('master_admin_image'))?base_url('uploads/admin/').$this->session->userdata('master_admin_image'):base_url('admin/assets/admin/img/placeholder.png');?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo !empty($this->session->userdata('master_admin_name'))?$this->session->userdata('master_admin_name'):'Name';?></p><br>
      </div>
    </div>
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li>
        <a href="<?php echo base_url('admin');?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class="treeview">
        <a href="javascript">
          <i class="fa fa-gear"></i>
          <span>Settings</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('admin/settings/general');?>"><i class="fa fa-circle-o"></i>General</a></li>
        </ul>
      </li>
      
      <!-- <li class="treeview">
        <a href="javascript">
          <i class="fa fa-file"></i>
          <span>Content</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">  
          <li><a href="<?php echo base_url('admin/homepage');?>"><i class="fa fa-circle-o"></i>HomePage</a></li>
        </ul>
      </li> -->
      

     <!--  <li class="treeview">
        <a href="javascript">
          <i class="fa fa-envelope"></i>
          <span>Inquiries</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
         <li><a href="<?php echo base_url('admin/contact');?>"><i class="fa fa-circle-o"></i>Contact Inquiry</a></li> 
       </ul>
     </li> -->
    
     <li class="treeview">
        <a href="javascript">
          <i class="fa fa-envelope"></i>
          <span>Users</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
         <li><a href="<?php echo base_url('admin/user');?>"><i class="fa fa-circle-o"></i>Users</a></li> 
       </ul>
     </li>
  </ul>

</section>
</aside>
<?php if(isset($output)):?>
  <div class="content-wrapper">    
    <?php echo $output;?> 
  </div>
  <?php endif;?>