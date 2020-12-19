<li class="{{ Request::is('lokasiKejahatans*') ? 'active' : '' }}">
    <a href="{{ route('lokasiKejahatans.index') }}"><i class="fa fa-edit"></i><span>Lokasi Kejahatans</span></a>
</li>

<li class="{{ Request::is('jenisKejahatans*') ? 'active' : '' }}">
    <a href="{{ route('jenisKejahatans.index') }}"><i class="fa fa-edit"></i><span>Jenis Kejahatans</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

