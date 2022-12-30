<div>
    <div class="row">
        <div  class="col-md-6" style="margin-top:60px;">
                <form class="coupon-form" style="display: flex;" action="{{route('apply.coupon')}}" method="POST">
                    @csrf
                    <input type="text"   name="coupon" placeholder="Vous avez un coupon produit " value="{{old('coupon')}}">
                    <button type="submit"><span>Appliquer</span></button>
                </form>
        </div>
        <div class="col-md-6">
            <div class="text-center mt-5">
                <a href="{{route('paymentMethod')}}" class="btn btn-outline"> <i class="icofont-money"></i> PASSER A LA CAISSE
                    <span class=""></span></a>
            </div>
        </div>
    </div>
</div>
<form action="{{route('apply.coupon')}}"  method="POST">
