<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Admin</span></a>
</li>

<li class="{{ Request::is('jenisKejahatans*') ? 'active' : '' }}">
    <a href="{{ route('jenisKejahatans.index') }}"><i class="fa fa-edit"></i><span>Jenis Kejahatan</span></a>
</li>

<li class="{{ Request::is('lokasiKejahatans*') ? 'active' : '' }}">
    <a href="{{ route('lokasiKejahatans.index') }}"><i class="fa fa-edit"></i><span>Lokasi Kejahatan</span></a>
</li>

<li class="{{ Request::is('peta*') ? 'active' : '' }}">
    <a href="{{ route('peta.index') }}"><i class="fa fa-edit"></i><span>Peta Lokasi</span></a>
</li>








