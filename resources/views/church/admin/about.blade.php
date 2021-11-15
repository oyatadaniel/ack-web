@extends('layouts.master')
@section('title')
ACK | Administrator
@endsection
@section('content')
<h6 style="margin-bottom: 40px;margin-top: 10px;color: grey;">Administrator Dashboad > Layouts > About Us Page</h6>
<div class="row">
    <style>
        #v-pills-tab a{
            border-radius: 0px;
        }
    </style>
  <div class="col-3">
    <!-- Tab navs -->
    <div style="background-color: 	 #ffccdd;"
      class="nav flex-column nav-pills text-center"
      id="v-pills-tab"
      role="tablist"
      aria-orientation="vertical"
    >
      <a
        class="nav-link active"
        id="v-pills-home-tab"
        data-mdb-toggle="pill"
        href="#v-pills-home"
        role="tab"
        aria-controls="v-pills-home"
        aria-selected="true"
        >Administrative Secretaryr</a
      >
     
    </div>
    <!-- Tab navs -->
  </div>

  <div class="col-9">
    <!-- Tab content -->
    <div class="tab-content" id="v-pills-tabContent">
      <div
        class="tab-pane fade show active"
        id="v-pills-home"
        role="tabpanel"
        aria-labelledby="v-pills-home-tab"
      >
        <div class="row">
          <div class="col-md-6">
            <h5 >Carouce/Slider</h5>
        <h6>Select New Photo</h6>
        <form action="" style="margin-top: 10px;">
          <div class="form-outline">
            <input type="file" id="form12" class="form-control" />
          </div>
        </form>

        <h6 style="margin-top: 20px;">Administrative Secretary</h6>
        <div class="form-outline">
          <input type="text" id="typeText" class="form-control" />
          <label class="form-label" for="typeText">New Name</label>
        </div>
        <button type="button" style="margin-top: 30px;" class="btn btn-primary btn-block">Sumit Details</button>
      </div>
      <div class="col-md-6">
        <div class="alert alert-info">
          Ensure to select a HD image which must be of a .jpg format.It should be resized in pixes and should measure 5779px horizontal and a height of 1647px.
        </div>
      </div>
          </div>
        </div>
      <div
        class="tab-pane fade"
        id="v-pills-profile"
        role="tabpanel"
        aria-labelledby="v-pills-profile-tab"
      >
     
        <div class="row">
          <div class="col-md-6">
            <h6>Theme And Bishop Information</h6>
            <div class="form-outline" style="margin-bottom: 20px;">
              <input type="text" id="form12" class="form-control" />
              <label class="form-label" for="form12">New Theme</label>
            </div>
            <h6>Select New Bishop Photo</h6>
        <form action="" style="margin-top: 10px;">
          <div class="form-outline" style="margin-bottom: 30px;">
            <input type="file" id="form12" class="form-control" />
          </div>
          <h6> Bishop Message</h6>
          <div class="form-outline">
            <textarea class="form-control" id="textAreaExample" rows="4"></textarea>
            <label class="form-label" for="textAreaExample">Bishop Message</label>
          </div>
        </form>
        <button type="button" style="margin-top: 30px;" class="btn btn-primary btn-block">Update Details</button>
          </div>
          
          <div class="col-md-6">
            <div class="alert alert-info">
              Ensure to select a HD image which must be of a .jpg format.It should be resized in pixes and should measure 5779px horizontal and a height of 1647px.
            </div>
          </div>
        </div>
      </div>
      <div
        class="tab-pane fade"
        id="v-pills-messages"
        role="tabpanel"
        aria-labelledby="v-pills-messages-tab"
      >
        Messages content
      </div>
    </div>
    <!-- Tab content -->
  </div>
</div>

@endsection