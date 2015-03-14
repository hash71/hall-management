@extends('layouts.default.master')
@section('content')
<!-- content main container -->
<div class="main">
  <!-- row -->
  <div class="row">
    <!-- col 12 -->
    <div class="col-md-12">
      <!-- tile -->
      <section class="tile transparent">


        <!-- tile header -->
        <div class="tile-header transparent">
          <h1><strong>Advanced</strong> Datatable </h1>
          <span class="note">including: <span class="italic">TableTools and ColVis</span></span>
          <div class="controls">
            <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
            <a href="#" class="remove"><i class="fa fa-times"></i></a>
          </div>
        </div>
        <!-- /tile header -->

        <!-- tile body -->
        <div class="tile-body color blue rounded-corners">

          <div class="table-responsive">
            <table  class="table table-datatable table-custom" id="advancedDataTable">
              <thead>
                <tr>
                  <th class="sort-alpha">Rendering engine</th>
                  <th class="sort-alpha">Browser</th>
                  <th class="sort-amount">Platform(s)</th>
                  <th class="sort-numeric">Engine version</th>
                  <th>CSS grade</th>
                </tr>
              </thead>
              <tbody>
                <tr class="odd gradeX">
                  <td>Trident</td>
                  <td>Internet Explorer 4.0</td>
                  <td>Win 95+</td>
                  <td class="text-center"> 4</td>
                  <td class="text-center">X</td>
                </tr>
                <tr class="even gradeC">
                  <td>Trident</td>
                  <td>Internet Explorer 5.0</td>
                  <td>Win 95+</td>
                  <td class="text-center">5</td>
                  <td class="text-center">C</td>
                </tr>
                <tr class="odd gradeA">
                  <td>Trident</td>
                  <td>Internet Explorer 5.5</td>
                  <td>Win 95+</td>
                  <td class="text-center">5.5</td>
                  <td class="text-center">A</td>
                </tr>
                <tr class="even gradeA">
                  <td>Trident</td>
                  <td>Internet Explorer 6</td>
                  <td>Win 98+</td>
                  <td class="text-center">6</td>
                  <td class="text-center">A</td>
                </tr>
                <tr class="odd gradeA">
                  <td>Trident</td>
                  <td>Internet Explorer 7</td>
                  <td>Win XP SP2+</td>
                  <td class="text-center">7</td>
                  <td class="text-center">A</td>
                </tr>
              </tbody>
            </table>
          </div>

        </div>
        <!-- /tile body -->



      </section>
      <!-- /tile -->
    </div>
    <!-- /col 12 -->
  </div>
  <!-- /row -->
</div>
<!-- /content container -->
@stop