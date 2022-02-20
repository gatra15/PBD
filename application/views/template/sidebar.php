<nav class="navbar navbar-expand d-flex flex-column align-item-start" id="sidebar">
    <a href="#" class="navbar-brand text-dark mt-5">
        <div class="display-6 font-weight-bold" id="title">ACLUB</div>
    </a>
    <ul class="navbar-nav d-flex flex-column mt-5 w-100">
        <li class="nav-item">
            <a href="#" class="nav-link text-indigo-200"><i class="material-icons icon-blue me-2 m-2">dashboard</i>Dashboard</a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-indigo-200"><i class="material-icons icon-blue me-2 m-2">laptop_mac</i>Lab</a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-indigo-200"><i class="material-icons icon-blue me-2 m-2">book</i>Club</a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-indigo-200"><i class="material-icons icon-blue me-2 m-2">account_circle</i>Mahasiswa</a>
        </li>
    </ul>
</nav>

</body>
<style>
    body {
        min-height: 100vh;
        background-color: #f7faff;
    }
    #title {
        font-family: 'Raleway', sans-serif;
        cursor: auto;
        font-weight: 1000;
        color: #727e8c;
    }
    .icon-blue {
        color: #0d6efd;
    }
    .navbar {
        width: 250px;
        height: 100vh;
        position: fixed;
        background-color: #fff;
        transition: 0.4s;
        box-shadow: 0 0 10px #ececec;
    }
    .nav-link {
        font-size: 0.85rem;
        display: flex;
        align-items: center;
        color: #053382;
    }
    .nav-link:active,
    .nav-link:focus,
    .nav-link:hover {
        background-color: #ffffff26
    }
    .nav-item {
    }
    .my-container {
        transition: 0.4s;
    }
    .active-nav {
        margin-left: -250px;
    }
    .active-cont {
        margin-left: 0px;
    }

</style>
