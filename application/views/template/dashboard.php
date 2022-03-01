
    <div class="my-container">
    
        <div class="main-content container-fluid border border-light">
            <div class="container mt-3 mb-4">
                <i class="fa-solid fa-bars" id='menu-btn'></i>
                
                <!-- Example single danger button -->
                <div class="btn-group float-end">
                    <p class="me-2 mt-2">Hello <?php echo $this->session->nama; ?>!</p> 
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(3).jpg" alt="Avatar" class="md-avatar rounded-circle" width="35" height="35" data-bs-toggle="dropdown" aria-expanded="false" style="cursor: pointer">
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('C_Index/Logout'); ?>">Logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="page-title">
                <h3>Dashboard</h3>
                <p class="text-subtitle text-muted">Hello</p>
            </div>
            <section class="shadow p-3 mb-5 bg-body rounded">
                <div class="card-body">
                <h3 class='card-title p-1 pl-3'>Selamat Datang</h3>
                </div>

            </section>
        </div>
    </div>

<style>
    
    .my-container {
        transition: 0.4s;
        margin-left: 250px;
        padding-left: 15px;
        font-family: 'Raleway', sans-serif;
    }
    
    .active-nav {
        margin-left: -250px;
    }
    .active-cont {
        margin-left: 0px;
    }
    #menu-btn {
        color: #343a40;
        margin-left: -15px;
        margin-right: -12px;
        cursor: pointer;
    }
    #menu-btn:focus {
        box-shadow: 0 0 0 0.25rem #7952b344;
    }
</style>