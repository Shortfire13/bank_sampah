<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a href="/dash" class="{{request()->is('dash') ? 'active' : ''}}"><i class="lnr lnr-home"></i> <span>Home</span></a></li>
                <li><a href="/dash/admins" class="{{request()->is('dash/admins') ? 'active' : ''}}"><i class="lnr lnr-users"></i>Admin</a></li>
                <li><a href="/dash/pegawai" class="{{request()->is('dash/pegawai') ? 'active' : ''}}"><i class="lnr lnr-users"></i>Pegawai</a></li>
            </ul>
        </nav>
    </div>
</div>