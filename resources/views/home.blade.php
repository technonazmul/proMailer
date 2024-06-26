@extends('layouts.admin')
@section('title')
Dashboard
@endsection
@section('content')

<section class="content">
    
    <p>Welcome to the admin panel.</p>
    <div class="row dashboard-buttons">
        <div class="col-3">
            <div class="card m-2">
                <a href="#">
                    <div class="card-body d-flex align-items-center">
                        <div class="card-icon">
                            <i class="fa-solid fa-plus"></i>
                        </div>
                        <div>
                            <h8 class="card-title">Add Data</h8>
                            
                        </div>
                    </div>
                </a>
                
            </div>
        </div>

        <div class="col-3">
            <div class="card m-2">
                <div class="card-body d-flex align-items-center">
                    <div class="card-icon">
                        <i class="fa-solid fa-file-csv"></i>
                    </div>
                    <div>
                        <h8 class="card-title">Import From CSV</h8>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="card m-2">
                <div class="card-body d-flex align-items-center">
                    <div class="card-icon">
                        <i class="fa-solid fa-bars"></i>
                    </div>
                    <div>
                        <h8 class="card-title">All Data</h8>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="card m-2">
                <div class="card-body d-flex align-items-center">
                    <div class="card-icon">
                        <i class="fa-solid fa-plus"></i>
                    </div>
                    <div>
                        <h8 class="card-title">PreQuote</h8>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="card m-2">
                <div class="card-body d-flex align-items-center">
                    <div class="card-icon">
                        <i class="fa-solid fa-plus"></i>
                    </div>
                    <div>
                        <h8 class="card-title">Quote</h8>
                        
                    </div>
                </div>
            </div>
        </div>

        

        <div class="col-3">
            <div class="card m-2">
                <a href="{{route('company_category.add')}}">
                <div class="card-body d-flex align-items-center">
                    <div class="card-icon">
                        <i class="fa-solid fa-plus"></i>
                    </div>
                    <div>
                        <h8 class="card-title">Company Categories</h8>
                        
                    </div>
                </div>
                </a>
            </div>
        </div>
        <div class="col-3">
            <div class="card m-2">
                <a href="{{route('company.add')}}">
                    <div class="card-body d-flex align-items-center">
                        <div class="card-icon">
                            <i class="fa-solid fa-plus"></i>
                        </div>
                        <div>
                            <h8 class="card-title">Companies</h8>
                            
                        </div>
                    </div>
                </a>
                
            </div>
        </div>
        <div class="col-3">
            <div class="card m-2">
                <a href="#">
                    <div class="card-body d-flex align-items-center">
                        <div class="card-icon">
                            <i class="fa-solid fa-plus"></i>
                        </div>
                        <div>
                            <h8 class="card-title">Add Event Type</h8>
                            
                        </div>
                    </div>
                </a>
                
            </div>
        </div>
        
    </div>
    
</section>
@endsection
