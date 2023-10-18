<div class="sidebar">
    <div class="logo-details">
        <div class="logo_name">{CodeVerse}</div>
        <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav-list">
        <li>
            <i class='bx bx-search'></i>
            <input type="text" placeholder="Search...">
            <span class="tooltip">Search</span>
        </li>
        <li>
            <a href="{{ route('dashboard') }}">
                <i class='bx bx-grid-alt'></i>
                <span class="links_name">Dashboard</span>
            </a>
            <span class="tooltip">Dashboard</span>
        </li>

        <li>
            <a href="{{ route('BlogTable') }}">
                <i class="ri-polaroid-2-line"></i>
                <span class="links_name">Blog</span>
            </a>
            <span class="tooltip">Blog</span>
        </li>

        <li>
            <a href="{{ route('UserTablePage') }}">
                <i class='bx bx-user '></i>
                <span class="links_name">Users</span>
            </a>
            <span class="tooltip">Users</span>
        </li>
        <li>
            <a href="{{ route('MessageTable') }}">
                <i class='bx bx-chat'></i>
                <span class="links_name">Messages</span>
            </a>
            <span class="tooltip">Messages</span>
        </li>
        <li>
            <a href="{{ route('SnippetTable') }}">
                <i class="ri-git-repository-line"></i>
                <span class="links_name">Snippets</span>
            </a>
            <span class="tooltip">Snippets</span>
        </li>
        <li class="profile">
            <div class="profile-details">
                <div class="name_job">
                    <div class="name pl-5">
                        <p class="pt-2">{{ $data->name }}</p>
                    </div>
                    <div>
                        <a href="{{ route('home') }}"><i class='bx bx-log-out' id="log_out"></i></a>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>
