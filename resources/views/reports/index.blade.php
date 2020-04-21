@extends('layouts.MasterLayout.NavLayout')
@section('title','Reports Index')
@section('content')
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-lg-6">
                    <h2>Reports</b></h2>
                </div>
                <div class="col-sm-6">
                  <a href="{{ route('reports.create', $reports->first())}}" class="btn btn-success"><i class="material-icons">&#xE147;</i>Create</a>
                </div>
            </div>
    </div>
  </div>
</div>
    <div class="container">
<div class="container">
    <br />
      @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
      @endif
     <h2>Index Page</h2>
    <table class="table table-bordered">
    <thead>
      <tr>
        <th>@sortablelink('semester_and_year')</th>
        <th>@sortablelink('code')</th>
        <th>@sortablelink('title')</th>
        <th>@sortablelink('enrollment')</th>
      </tr>
    </thead>
    <tbody>

      @foreach($reports as $report)
      <tr>
        <td>{{$report->semester_and_year}}</td>
        <td>{{$report->code}}</td>
        <td>{{$report->title}}</td>
        <td>{{$report->enrollment}}</td>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>

  </table>

  </div>
  <br/>
  @endsection
