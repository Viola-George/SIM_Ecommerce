<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">
    @include('admin.css')
    <style>
        body{
            background-color: white;
            overflow: hidden; 
            overflow-x: hidden;
        }
        .div_center{
            text-align: center;

        }
        .h2_font{
            font-size:40px;
        }
        .input_color{
            color: black;
            padding-bottom: 20px;

        }
        .center{
            text-align: center;
            margin: auto;
            width: 50%;
            margin-top: 15px;
            border: 3px solid white;
        }
        label{
            display: inline-block;
            width: 200px
        }
        .design{
            padding-bottom: 15px;

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
                <div class="div_center">
                    <h2 class="h2_font">Update Product</h2>
                    <form action="{{url('/update_product_confirm',$product->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body m-2 p-3">
                            <div class="row mb-3">
                               <div class="col-sm-2">
                                   <label class="fs-6 pt-2" for="username">Product Title :</label>
                               </div>
                               <div class="col-sm-10 text-secondary">
                                  <input style="color: black; width: 100%" class=" input_color" value="{{$product->title}}"
                                  type="text" name="title" required="" placeholder="Write Product Name">
                                </div>
                           </div>
                            <div class="row mb-3">
                                <div class="col-sm-2">
                                    <label class="fs-6 pt-2" for="username">Product Description :</label>
                                </div>
                                <div class="col-sm-10 text-secondary">
                                     <input  style="color: black; width: 100%" class=" input_color" value="{{$product->description}}"
                                      type="text" name="description"required="" placeholder="Write Product Description">
                                 </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-2">
                                    <label class="fs-6 pt-2" >Product Price :</label>
                                </div>
                                <div class="col-sm-10 text-secondary">
                                   <input style="color: black; width: 100%" class=" input_color" value="{{$product->price}}"
                                    type="number" name="price"required="" placeholder="Write Product Price">
                                 </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-2">
                                    <label class="fs-6 pt-2" >Discount Price :</label>
                                </div>
                                <div class="col-sm-10 text-secondary">
                                   <input  style="color: black; width: 100%" class=" input_color" value="{{$product->discount_price}}"
                                     type="number" name="dis_price" placeholder="Write Discount is Apples">
                                 </div>
                            </div>
                         <div class="row mb-3">
                            <div class="col-sm-2">
                                <label class="fs-6 pt-2" >Product Quantity :</label>
                            </div>
                            <div class="col-sm-10 text-secondary">
                               <input  style="color: black; width: 100%" class=" input_color" value="{{$product->quantity}}"
                                 type="number" min="0" name="quantity" required=""placeholder="Write Product Quantity">
                             </div>
                        </div>

                        
                        <div class="row mb-3">
                            <div class="col-sm-2">
                                <label class="fs-6 pt-2" >Product Category :</label>
                            </div>
                            <div class="col-sm-1 text-secondary">

                                <select  name="category" required=""style="color: black">
                                <option value="{{$product->category}}"  selected="" >{{$product->category}}</option>
                                @foreach ($category as $category)
                                <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                                @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                            <div class="col-1">
                                <label class="fs-6 pt-6" >Current Product Image :</label>
                            </div>        
                            <div class="col text-secondary">
                                <img style="margin: auto" height="100" width="100" src="/product/{{$product->image}}">                   
                              
                            </div>
                           </div>
                           <div class="col-6">
                            <div class="col-1">
                                <label class="fs-6 pt-6 mt-2" >Change Product Image :</label>
                            </div> 
                            <div class="col text-secondary">                   
                                <input style="color: white" class=" input_color"
                                 type="file" name="image" placeholder="Write Product Image">
                            </div> 
                           </div>
                        </div>
                        {{-- <div class="row mb-3">
                            <div class="col-sm-2">
                                <label class="fs-6 pt-2" >Change Product Image :</label>
                            </div>
                            <div class="col-sm-1 text-secondary">                   
                              <input style="color: white" class=" input_color"
                               type="file" name="image" placeholder="Write Product Image">
                            </div>
                        </div> --}}

                        <div class="design">
                            <input type="submit" style="position: relative;bottom: 40px;" class=" btn btn-success create-new-button " name="submit" value="Update Product ">
                        </div>
                        
                    </form>
                </div>
              
            </div>
        </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>