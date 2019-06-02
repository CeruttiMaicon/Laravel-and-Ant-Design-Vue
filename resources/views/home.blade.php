@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-3">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Você esta logado!
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">Componentes Ant Design Vue</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <h4>Basic</h4>
                    <div>
                        <a-button type="primary" shape="circle" icon="search"></a-button>
                        <a-button type="primary" icon="search">Search</a-button>
                        <a-button shape="circle" icon="search" />
                        <a-button icon="search">Search</a-button>
                        <a-button shape="circle" icon="search" />
                        <a-button icon="search">Search</a-button>
                        <a-button type="dashed" shape="circle" icon="search" />
                        <a-button type="dashed" icon="search">Search</a-button>
                      </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">Componentes Ant Design Vue</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <table-ant-d></table-ant-d>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
