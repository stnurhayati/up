 <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user">
         <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name"><?php echo $this->session->userdata('nama_depan');?> <?php echo $this->session->userdata('nama_belakang');?></p>
          <p class="app-sidebar__user-designation"><?php echo $this->session->userdata('email');?></p>
        </div>
      </div>
               
        
      </div>
      
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="<?php echo base_url()?>auth"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
   
  
      </ul>
    </aside>