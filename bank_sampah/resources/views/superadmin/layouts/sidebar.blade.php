<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a href="/dash" class="{{request()->is('dash') ? 'active' : ''}}"><i class="lnr lnr-home"></i> <span>Home</span></a></li>
                <li><a href="/dash/adm" class="{{request()->is('dash/adm') ? 'active' : ''}}"><i class="lnr lnr-home"></i>Admin</a></li>
                <li><a href="/dash/pegawai" class="{{request()->is('dash/pegawai') ? 'active' : ''}}"><i class="lnr lnr-home"></i>Pegawai</a></li>
                <li><a href="/dash/user" class="{{request()->is('dash/user') ? 'active' : ''}}"><i class="lnr lnr-home"></i>User</a></li>
                <li><a href="tables.html" class=""><i class="lnr lnr-dice"></i> <span>Transaksi</span></a></li>
            </ul>
        </nav>
    </div>
</div>