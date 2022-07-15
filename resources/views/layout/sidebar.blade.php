<nav class="sidebar sidebar-offcanvas h-100" id="sidebar">
    <ul class="nav d-flex flex-column h-100 justify-content-between">
        <div class="d-flex flex-column ">
            <p class="pl-4 mt-4" style="color: #bcbcbc">Menu</p>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dosen.dashboard') }}">
                    <iconify-icon data-icon="fluent:rocket-16-regular" style="font-size: 25px" class="menu-icon mr-2">
                    </iconify-icon>
                    <span class="menu-title">Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dosen.entri-nilai') }}">
                    <iconify-icon data-icon="ph:users-three-light" style="font-size: 25px" class="menu-icon mr-2">
                    </iconify-icon>
                    <span class="menu-title">Entri Nilai</span>
                </a>
            </li>
        </div>
        <button type="button" class="btn btn-logout mx-3 py-3 mb-3" data-bs-toggle="modal"
            data-bs-target="#modal-logout">
            <iconify-icon data-icon="wpf:shutdown" style="font-size: 14px" class="menu-icon mr-2"></iconify-icon>
            <span class="menu-title">Logout</span>
        </button>
    </ul>
</nav>
