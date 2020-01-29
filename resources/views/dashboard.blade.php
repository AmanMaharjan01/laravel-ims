@extends('layout')

@section('content')

   <br>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-4">
            <!-- small box -->
            <a href="/students"><div class="small-box bg-success">
              <div class="inner">
                <h4>Students</h4>

                <p>details</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-graduate"></i>
              </div>
              <p class="small-box-footer">Click for More info <i class="fas fa-arrow-circle-right"></i></p>
            </div>
          </a>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <a href="/teachers"><div class="small-box bg-primary">
              <div class="inner">
                <h4>Teachers</h4>

                <p>details</p>
              </div>
              <div class="icon">
                <i class="fas fa-chalkboard-teacher"></i>
              </div>
              <p class="small-box-footer">Click for More info <i class="fas fa-arrow-circle-right"></i></p>
            </div>
          </a>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <a href="#">
            <div class="small-box bg-secondary">
              <div class="inner">
                <h4>Staffs</h4>

                <p>details</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <p class="small-box-footer">Click for More info <i class="fas fa-arrow-circle-right"></i></p>
            </div>
          </a>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <a href="#">
            <div class="small-box bg-white">
              <div class="inner">
                <h4>Parents</h4>

                <p>details</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <p class="small-box-footer">Click for More info <i class="fas fa-arrow-circle-right"></i></p>
            </div>
          </a>
          </div>
        </div>
         </div>
    </section>

@endsection