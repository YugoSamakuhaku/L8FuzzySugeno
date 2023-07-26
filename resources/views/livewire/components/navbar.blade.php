<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Dashboard</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <span class="d-none d-md-inline">{{ $this->fullname }}</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                <!-- User image -->
                <li class="user-header bg-secondary">
                    <table class="table table-sm table-borderless text-left">
                        <tr>
                            <td>Fullname</td>
                            <td>:</td>
                            <td>{{ $this->fullname }}</td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td>:</td>
                            <td>{{ $this->username }}</td>
                        </tr>
                        <tr>
                            <td>Role</td>
                            <td>:</td>
                            <td>{{ $this->role }}</td>
                        </tr>
                        <tr>
                            <td>Member Since</td>
                            <td>:</td>
                            <td>{{ $this->member_create->format('M-Y') }}</td>
                        </tr>
                    </table>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                    <a href="#" wire:click.prevent="logout" class="btn btn-danger btn-flat float-right">Sign out</a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
