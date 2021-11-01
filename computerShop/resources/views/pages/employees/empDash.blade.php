@extends('Layouts.app')
@section('contact')
<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <div class="col mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="{{asset('/storage/uploads/empDash/addProduct.png')}}" alt="..." />
                    <div class="card-body p-4">
                        <div class="text-center">
                        </div>
                    </div>

                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('addproducts')}}">Add Products</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="{{asset('/storage/uploads/empDash/remove.jpg')}}" alt="..." />

                    <div class="card-body p-4">
                        <div class="text-center">
                        </div>
                    </div>
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Remove Product</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="{{asset('/storage/uploads/empDash/profile.png')}}" alt="..." />
          
                    <div class="card-body p-4">
                        <div class="text-center">
                        </div>
                    </div>
   
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="">Update profile</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
          
                    <img class="card-img-top" src="{{asset('/storage/uploads/empDash/userlist.jpg')}}" alt="..." />
           
                    <div class="card-body p-4">
                        <div class="text-center">
                        </div>
                    </div>    
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('customer.list')}}">Customer list</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection