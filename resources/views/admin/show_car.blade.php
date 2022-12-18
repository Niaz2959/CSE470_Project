<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')

    <style type="text/css">

        .center
        {
          margin:auto;
          width:50%;
          border:2px solid white;
          text-align:center;
          margin-top:40px;
        }
        .font_size
         {
            font-size: 40px;
            padding-top: 20px;
            text-align:center;
         }
        td
        {
           padding: 25px;
        }
         /* .input_color
         {
            color:black;
            padding-top: 20px;
         }
         label
         {
            display: inline-block;
            width: 200px;
         } */
         /* .gap
         {
            padding-top: 15px;
         } */

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

              <h2 class="font_size">All Car details</h2>

              <table class="center">

                <tr>
                  <th>Car Name</th>
                  <th></th>

                  <th>Description</th>
                  <th>Grade</th>
                  <th>Model</th>
                  <th>Milage</th>
                  <th>Status</th>
                  <th>Units</th>
                  <th>Category</th>
                  <th>Price</th>
                  <th>Discount Price</th>
                  <th> Image</th>
                </tr>



                @foreach ( $car as $car)
                <tr>
                    <td>{{ $car->title }}<td>
                    {{-- <td>hell<td> --}}
                    <td>{{ $car->description}}</td>
                    <td>{{ $car->grade }}</td>
                    <td>{{ $car->model }}</td>
                    <td>{{ $car->milage }}</td>
                    <td>{{ $car->status }}</td>
                    <td>{{ $car->quantity}}</td>
                    <td>{{ $car->category }}</td>
                    <td>{{ $car->price }}</td>
                    <td>{{ $car->discount_price }}</td>
                    <td>{{ $car->image}}</td>
                </tr>
                @endforeach



              </table>

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
























