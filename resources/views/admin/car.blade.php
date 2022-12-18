<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')

    <style type="text/css">

      .div_center
      {
        text-align:center;
        padding-top: 40px;
      }
      .font_size
       {
          font-size: 40px;
          padding-bottom: 40px;
       }
       .input_color
       {
          color:black;
          padding-top: 20px;
       }
       label
       {
          display: inline-block;
          width: 200px;
       }
       .div_design
       {
          padding-bottom: 15px;
       }

    </style>

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.adminheader')
        <!-- partial -->
       <div class="main-panel">
            <div class="content-wrapper">
                @if(session()->has('message'))

                <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                  {{session()->get('message')}}

                </div>
                @endif

              <div class='div_center'>

                <h1 class="font_size">Add Car</h1>


              <form action="{{ url('/add_car') }}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="div_design">

                <label> Car Name :</label>
                <input class="input_color" type="text" name="title" placeholder="Write a title" required="">

                </div>
                <div class="div_design">

                    <label> Car Description :</label>
                    <input class="input_color" type="text" name="description" placeholder="Write a description" required="">

                </div>
                <div class="div_design">

                    <label> Grade :</label>
                    <input class="input_color" type="text" name="grade" placeholder="Write a description" required="">

                </div>
                <div class="div_design">

                    <label> Model :</label>
                    <input class="input_color" type="number" name="model" placeholder="model" required="">

                </div>
                <div class="div_design">

                    <label> Milage :</label>
                    <input class="input_color" type="text" name="milage" placeholder="Write a description" required="">

                </div>
                <div class="div_design">

                    <label> Status :</label>
                    <input class="input_color" type="text" name="status" placeholder="Write a description" required="">

                </div>
                <div class="div_design">

                    <label> Car Price :</label>
                    <input class="input_color" type="text" name="price" placeholder="BDT" required="">

                </div>
                <div class="div_design">

                    <label> Discount Price :</label>
                    <input class="input_color" type="text" name="dis_price" placeholder="BDT">

                </div>
                <div class="div_design">

                    <label> Car Units :</label>
                    <input class="input_color" type="number" name="quantity" min="0" placeholder="Unit" required="">

                </div>

                <div class="div_design">

                    <label> Car Category :</label>
                    <select class="input_color" name="category" required="">
                       <option value="" selected="">Add a category here</option>

                       @foreach ($category as $category)

                       <option  value="{{$category->category_name}}">{{$category->category_name}}</option>

                       @endforeach
                    </select>

                </div>
                <div class="div_design">

                    <label> Car Image :</label>
                    <input type="file" name="image" required="">

                </div>
                <div class="div_design">

                    <input  type="submit" value="Add Car" class="btn btn-primary">

                </div>
              </form>

              </div>

            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
