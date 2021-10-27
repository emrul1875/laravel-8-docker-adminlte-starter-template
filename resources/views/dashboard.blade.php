@extends("layout")

@section("pageheader")
<div class="col-sm-6">
    <h1>Dashboard</h1>
</div>
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
</div>

@endsection


@section('pagecontent')
<section class="content">
      <div class="container-fluid">
        <div class="row">
            <p>You have logged in successfully</p>
        </div>
      </div>
</section>
@endsection