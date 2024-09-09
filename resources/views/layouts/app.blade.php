<x-admin-header />
<div class="main-wrapper">

    <x-admin-sidebar />
    <div class="page-wrapper pagehead">
        <div class="content">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Blank Page</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
<x-admin-footer />
