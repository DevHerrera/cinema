@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="min-height: 80vh">
                <div class="card-header">
                    <div class="d-flex">
                        <div class="col-4 h3">Discover ebooks</div>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row d-flex align-items-center">
                            <div class="col-3" style="border-right: 1px solid rgba(0, 0, 0, 0.1);">
                                <div class="row pl-4">
                                    <div>
                                        <h5>Categories</h5>
                                        <hr>
                                    </div>
                                </div>
                                {{-- Load categories from server --}}
                                <div class="row pl-4">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">All <span class="text-dark">(34)</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Romance <span class="text-dark">(24)</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Horror <span class="text-dark">(16)</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Programming <span class="text-dark">(12)</span></a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="col-9">
                                feed
                            </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
