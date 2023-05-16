<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style>
        .div_center{
            text-align: center;
            padding-top:40px; 

        }
        .h2_font{
            text-align: center;
            font-size:40px;
            margin: auto;

            padding-bottom: 40px;
        }
        .input_color{
            color: white;
        }
        .center{
            text-align: center;
            margin: auto;
            width: 50%;
            margin-top: 30px;
            border: 3px solid white;
        }
        /* .img_size{
            width: 150px !important;
            height: 150px !important; 
        } */
        .th_color{
            padding: 30px;
            margin: 20px;
        }
        .table-wrapper {
    min-width: 1000px;
    background: #fff;
    padding: 20px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}

table.table td:last-child {
    width: 50%;
}
table.table td a.edit {
    color: #FFC107;
}
table.table td a.delete {
    color: #E34724;
}
     </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
    @include('admin.slidebar')
      <!-- partial -->
      @include('admin.header')

        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                @if (session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true ">x</button>
                    {{ session()->get('message')}}


                </div>
                    
                @endif
                <table class="center table table-striped table-bordered">
                    <div class="row">
                        <h2 class="h2_font">All  Products</h2>
                        
                    </div>
                    <strong><tr style="color:white; font-size: 2.5em;">
                        <td style="font-size: 0.5em;">Product Title<i style="padding-left:12px ;" class="fa fa-sort"></i> </td>
                        <td style="font-size: 0.5em;"class="th_color"> Description </td>
                        <td style="font-size: 0.5em;"class="th_color"> Category </td>
                        <td style="font-size: 0.5em;"class="th_color"> Quantity </td>
                        <td style="font-size: 0.5em;"class="th_color"> Price </td>
                        <td style="font-size: 0.5em;"class="th_color">Discount Price </td>
                        <td style="font-size: 0.5em;"class="th_color">Product Image </td>
                        <td style="font-size: 0.5em;"class="th_color">Action </td>

                        
                    </tr></strong>
                    @foreach ($product as $product )
                    <tr style="color:white;">
                        <td>{{$product->title}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->category}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->discount_price}}</td>
                        <td>
                            <img class="img_size" src="/product/{{$product->image}}"></td>

                        <td style="width: 120%">
                            <span><a style="display: inline" class="btn btn-success"
                                href="{{url('update_product',$product->id)}}">Edit</a></span>

                            <span><a style="display: inline" onclick="return confirm('Are You Sure you want to deleted it')" class="btn btn-danger"
                                 href="{{url('delete_product',$product->id)}}">Delete</a></span>
                        </td>

                    </tr>
                    @endforeach
                </table>
            </div>
        </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>