@include('templates.head')
@include('templates.seddibar')
@include('templates.navbar')
<div class="page-content">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            {{-- <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Table</li> --}}
        </ol>
    </nav>
    <div class="row">
        @yield('content')
        {{-- </div> --}}
    </div>
</div>
@include('templates.footer')
