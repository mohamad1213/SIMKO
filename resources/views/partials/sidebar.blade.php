<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li>
                <a href="/" aria-expanded="false">
                    <i class="material-symbols-outlined">home</i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                    <i class="material-symbols-outlined">school</i>
                    <span class="nav-text">Manage Anggota</span>
                </a>
                <ul aria-expanded="false">
                    <li class="{{ request()->is('anggota*') ? 'active' : '' }}">
                        <a href="{{ route('anggota.index') }}" aria-expanded="false">
                            <span class="nav-text">Anggota</span>
                        </a>
                    </li>
                    <li><a href="teacher-detail.html">Verifikasi</a></li>
                </ul>

            </li>

            <li class="{{ request()->is('anggota*') ? 'active' : '' }}">
                <a href="{{ route('anggota.index') }}" aria-expanded="false">
                    <i class="material-symbols-outlined">event</i>
                    <span class="nav-text">Event</span>
                </a>
            </li>



            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                    <i class="material-symbols-outlined">money</i>
                    <span class="nav-text">Keuangan</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="teacher.html">Pemasukan</a></li>
                    <li><a href="teacher-detail.html">Pengeluaran</a></li>
                    <li><a href="add-teacher.html">Laporan Kas</a></li>

                </ul>
            </li>

            <li class="{{ request()->is('anggota*') ? 'active' : '' }}">
                <a href="{{ route('anggota.index') }}" aria-expanded="false">
                    <i class="material-symbols-outlined">archive</i>
                    <span class="nav-text">Dokumen & Arsip</span>
                </a>
            </li>
            <li class="{{ request()->is('anggota*') ? 'active' : '' }}">
                <a href="{{ route('anggota.index') }}" aria-expanded="false">
                    <i class="material-symbols-outlined">manage_accounts</i>
                    <span class="nav-text">Manajemen User</span>
                </a>
            </li>
            <li class="{{ request()->is('anggota*') ? 'active' : '' }}">
                <a href="{{ route('anggota.index') }}" aria-expanded="false">
                    <i class="material-symbols-outlined">app_registration</i>
                    <span class="nav-text">Pengaturan profil</span>
                </a>
            </li>
        </ul>
        <!-- <div class="copyright">
            <p><strong>School Admission Dashboard</strong></p>
            <p class="fs-12">Made with <span class="heart"></span> by DexignLab</p>
        </div> -->
    </div>
</div>