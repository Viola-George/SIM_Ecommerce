<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="home/images/favicon.png" type="">
      <title>Famms </title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
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
            color: black;
        }
        .center{
            text-align: center;
            margin: auto;
            width: 50%;
            margin-top: 30px;
            border: 3px solid black;
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
    background: black;
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
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')

         <!-- end header section -->
         <!-- slider section -->
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
                        <h2 class="h2_font">All  Orders</h2>
                        
                    </div>
                    <strong><tr style="color:black; font-size: 2.5em;">
                        <td style="font-size: 0.5em;">Product Title<i style="padding-left:12px ;" class="fa fa-sort"></i> </td>
                        <td style="font-size: 0.5em;"class="th_color"> Quantity </td>
                        <td style="font-size: 0.5em;"class="th_color"> Price </td>
                        <td style="font-size: 0.5em;"class="th_color"> Payment Status </td>
                        <td style="font-size: 0.5em;"class="th_color"> Delivery Status </td>

                        <td style="font-size: 0.5em;"class="th_color"> Image </td>
                        <td style="font-size: 0.5em;"class="th_color">Action </td>

                        
                    </tr></strong>
                    <?php  $totalprice=0; ?>
                    @foreach ($order as $order )
                    <tr style="color:black;">

                        <td>{{$order->product_title}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->payment_status}}</td>
                        <td>{{$order->delivery_status}}</td>
                        <td>${{$order->price}}</td>
                        <td><img class="img_size" src="./product/{{$order->image}}"></td>

                        <td style="width: 220px;">
                                <a style=" margin: 20px;"class="btn btn-danger"
                                 onclick="return confirm('Are You Sure you want to deleted it')" class="btn btn-danger"
                                 href="{{url('cancel_order',$order->id)}}">Cancel Order</a>
                                
                                 
                        </td>

                    </tr>
                    

                    
                    @endforeach
                </table>
                
            </div>
        </div>
         <!-- end slider section -->
      </div>
      <!-- why section -->
      

      <!-- end client section -->
      <!-- footer start -->

      <!-- footer end -->
      <div class="cpy_">
        <p class="mx-auto">© 2023 All Rights Reserved By <a href="https://html.design/">My Efferts</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">Viola George</a>
         
         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>