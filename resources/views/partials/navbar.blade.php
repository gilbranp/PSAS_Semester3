<div class="l-navbar" id="nav-bar">
    <nav class="nav">
        <div> 
            <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> 
        <span class="nav_logo-name">Radenta 18351</span> </a>
            <div class="nav_list"> 
                <a href="/" class="nav_link {{ ($title === "Dashboard") ? 'active' : '' }}"> 
                <i class='bx bxs-home nav_icon' ></i>
                    <span class="nav_name">Dashboard</span> </a> 
                    <a href="profil" class="nav_link {{ ($title === "Profil") ? 'active' : '' }}"> <i class='bx bx-user nav_icon'></i> 
                    <span class="nav_name">Profil</span> </a> 
                    <a href="databarang" class="nav_link {{ ($title === "Data Barang") ? 'active' : '' }}"> <i class='bx bx-list-ul nav_icon' ></i> 
                    <span class="nav_name">Data Barang</span> </a> 
            </div>
        </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span
                class="nav_name">SignOut</span> </a>
    </nav>
</div>