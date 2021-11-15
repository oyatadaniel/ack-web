@extends('layouts.master')
@section('title')
ACK | Administrator
@endsection
@section('content')
<h6 style="margin-bottom: 40px;margin-top: 10px;color: grey;">Administrator Dashboad > Layouts > Events</h6>
<h4>Active/Upcomming Events</h4>
<div class="card card-body">
    <div  style="float: right;">
        <a data-mdb-toggle="modal"
        data-mdb-target="#exampleModal" style="float: right;" class="btn btn-primary" href="">Create Event</a>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Event Name</th>
            <th scope="col">Location</th>
            <th scope="col">Day</th>
            <th scope="col">Time</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
      
</div>
<h4 style="margin-top: 40px;">Recently Closed Events</h4>
<div class="card card-body">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Event Name</th>
            <th scope="col">Venue</th>
            <th scope="col">Day</th>
            <th scope="col">Time</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
      
</div>
<div
  class="modal fade"
  id="exampleModal"
  tabindex="-1"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true"
>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New Event</h5>
        <button
          type="button"
          class="btn-close"
          data-mdb-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <style>
          .form-outline{
              margin-bottom: 20px;
          }
      </style>
      <form method="post" action="{{ route('new_event') }}">
        @csrf
      <div class="modal-body">
            <div class="form-outline">
                <input name="name" type="text" id="form12" class="form-control" />
                <label class="form-label" for="form12">Event Name</label>
              </div>
              <div class="form-outline">
                <input name="location" type="text" id="form12" class="form-control" />
                <label class="form-label" for="form12">Venue</label>
              </div>
              <span>Select Date</span>
              <div class="form-outline">
                <input name="day" type="date" id="form12" class="form-control" />
              </div>
              <span>Time</span>
              <div class="form-outline">
                <input name="time" type="time" id="form12" class="form-control" />
              </div>
              <div class="form-outline">
                <textarea name="description" class="form-control" id="textAreaExample" rows="4"></textarea>
                <label class="form-label" for="textAreaExample">Description</label>
              </div>
          
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Create Event</button>
      </div>
    </form>
    </div>
  </div>
</div>

@endsection