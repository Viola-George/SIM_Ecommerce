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
    min-width: 100px;
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
                <table  style="zoom: 90%" class="center table table-striped table-bordered">
                    <div class="row mobile-header-content-area">
                        <h2  style="padding-left: 15%;" class="h2_font">All  Orders</h2>
                        <div class="pt-5">
                            <form action="{{url('search')}}" method="get">
                                @csrf
                                <input style="color: black" type="text" name="search" placeholder="Search for items…">
                                <input type="submit" value="search" class="btn-outline-primary">

                                <button type="submit"><i class="fi-rs-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <strong><tr style="color:white; font-size: 2.5em;">
                        <td style="font-size: 0.5em;"class="th_color"> Name </td>
                        <td style="font-size: 0.5em;"class="th_color"> Email </td>
                        <td style="font-size: 0.5em;"class="th_color"> Address </td>
                        <td style="font-size: 0.5em;"class="th_color"> Phone </td>
                        

                        <td style="font-size: 0.5em;">Product Title</td>
                        
                        <td style="font-size: 0.5em;"class="th_color"> Quantity </td>
                        <td style="font-size: 0.5em;"class="th_color"> Price </td>
                        <td style="font-size: 0.5em;"class="th_color"> Payment Status</td>
                        <td style="font-size: 0.5em;"class="th_color"> Delivery Status</td>

                        <td style="font-size: 0.5em;"class="th_color"> Image </td>

                        <td style="font-size: 0.5em;"class="th_color">Action </td>

                        
                    </tr></strong>
                    @forelse ($order as $order )
                    <tr style="color:white;">
                        <td>{{$order->name}}</td>
                        <td>{{$order->email}}</td>
                        <td>{{$order->address}}</td>

                        <td>{{$order->phone}}</td>
                       
                        <td>{{$order->product_title}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->price}}</td>
                        <td>{{$order->payment_status}}</td>
                        <td>{{$order->delivery_status}}</td>

                        <td>
                            <img class="img_size" src="/product/{{$order->image}}"></td>

                        <td style="width: 120%">
                            <span><a style="display: inline" onclick="confirm('Are you Sure you want to Delivered')" class="btn btn-primary"
                                href="{{url('delivered',$order->id)}}">Delivered</a></span>
                            
                        
                        </td>

                    </tr>
                    @empty
                    <tr>
                        <td colspan="16">No Data Found</td>
                    </tr>
                    @endforelse
                </table>
            </div>
        </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>