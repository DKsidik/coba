 <style>
   .sidebar {
     display: flex;
     flex-direction: column;
     height: 150vh;
   }

   .logout-item {
     margin-top: 0;

   }
 </style>l
 <section>


   <!-- Main Sidebar Container -->
   <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="<?= base_url('home'); ?>" class="brand-link">
       <img src="http://localhost/Nodin/public/template/dist/img/jkt-selatan.png" alt="AdminLTE Logo"
         class="brand-image img-circle elevation-3" style="opacity: .8">
       <span class="brand-text font-weight-light">Nota Dinas</span>
     </a>

     <!-- Main Sidebar Container -->
     <aside class="main-sidebar sidebar-dark-primary elevation-4">
       <!-- Brand Logo -->
       <a href="<?= base_url('home'); ?>" class="brand-link">
         <img src="http://localhost/Nodin/public/template/dist/img/jkt-selatan.png" alt="Jaksel Logo"
           class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light">Nota Dinas</span>
       </a>

       <!-- Sidebar -->
       <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
           <div class="image">
             <img src="http://localhost/Nodin/public/template/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
               alt="User Image">
           </div>
           <div class="info">
             <a href="#" class="d-block"><?= $nama ?></a>
           </div>
         </div>

         <!-- SidebarSearch Form -->
         <div class="form-inline">
           <div class="input-group" data-widget="sidebar-search">
             <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
             <div class="input-group-append">
               <button class="btn btn-sidebar">
                 <i class="fas fa-search fa-fw"></i>
               </button>
             </div>
           </div>
         </div>

         <!-- Sidebar Menu -->
         <nav class="mt-2">
           <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
             <li class="nav-item">
               <a href="<?= base_url('home'); ?>" class="nav-link">
                 <i class="mr-4 fa-solid fa-house" style="margin-right: 10px;"></i>
                 <p>Dashboard</p>
               </a>
             </li>


             <li class="nav-item">
               <a href="#" class="nav-link">
                 <i class="mr-4 fa-solid fa-envelope-open"></i>
                 <p>
                   Surat
                   <i class="right fas fa-angle-left"></i>
                 </p>
               </a>
               <ul class="nav nav-treeview" style="margin-left: 0.5rem;">
                 <li class="nav-item">
                   <a href="<?= base_url('surat/infosurat'); ?>" class="nav-link">
                     <i class="mr-3 fa-regular fa-envelope"></i>
                     <p>Info Surat</p>
                   </a>
                 </li>
               </ul>




             <li class="nav-item logout-item">
               <a href="<?= base_url('auth/logout'); ?>" class="nav-link">
                 <i class="mr-4 fa-solid fa-right-from-bracket"></i>
                 <p>Logout</p>
               </a>
             </li>
         </nav>
         <!-- /.sidebar-menu -->

         <!--  -->

 </section>