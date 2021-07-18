<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a href="/home" class="{{request()->is('home') ? 'active' : ''}}"><i class="lnr lnr-home"></i> <span>Home</span></a></li>
                <li><a href="/home/adm" class="{{request()->is('home/adm') ? 'active' : ''}}"><i class="lnr lnr-home"></i>Admin</a></li>
                <li><a href="/home/pegawai" class="{{request()->is('home/pegawai') ? 'active' : ''}}"><i class="lnr lnr-home"></i>Pegawai</a></li>
                <li><a href="/home/user" class="{{request()->is('home/user') ? 'active' : ''}}"><i class="lnr lnr-home"></i>User</a></li>
                <li><a href="tables.html" class=""><i class="lnr lnr-dice"></i> <span>Transaksi</span></a></li>
            </ul>
        </nav>
    </div>
</div>