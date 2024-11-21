@extends('master.backend')

@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
            <h1><span class="text-success" style="border-bottom: 1px dotted green;">View - {{ $data->title }}</span></h1>
          </div>
        
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <section class="content">
        <div class="container-fluid">

        
          <div class="row">

           
    
          
            <div class="col-md-12">
                <div class="card shadow p-2">
                    <h2>{{ $data->title }}</h2>


                    <div>
                        {!! $data->description !!}
                    </div>
                 


                </div>
            </div>

  

           
            

          </div>

        </div>

    </section>


</div>

@endsections