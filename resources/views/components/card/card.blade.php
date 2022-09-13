<link rel="stylesheet" href="{{url(mix('css/card.css'))}}">
<link rel="stylesheet" href="{{url(mix('css/bootstrap.css'))}}">
<link rel="stylesheet" href="{{url(mix('css/icons.css'))}}">
<link rel="stylesheet" href="{{url(mix('css/app.css'))}}">






<div class="col-md-3" style="width: 300px; margin: 50px;">

    <div class="wsk-cp-product">
        <div class="wsk-cp-img">
            <img src="{{url("storage/$company->img")}}" alt="Product" class="img-responsive" />
           
        </div>

        <div class="wsk-cp-text">
            <div class="category">
                <span><i class="fa-solid fa-tags"></i>{{$company->segment->name}}</span>
            </div>
            <div class="title-product">
                <h3>{{$company->companyName}}</h3>
            </div>
            <div class="description-prod">
                <h4>Segmento</h4>
                {{$company->companyName}}
            </div>
            <div class="description-prod">
                <h4>Ocupação</h4>
                <p>{{$company->occupation->name}}</p>
            </div>
            <hr>
            <div class="card-footer">
                <div class="wcf-left"><span class="price">{{$company->price}}</span></div>
                <div class="wcf-right"><a href="#" class="buy-btn"><i class="fa-solid fa-magnifying-glass"></i></a></div>
                <div class="wcf-right"><a href="{{route('show.company.page',['id'=>$company->id])}}" class="heart-btn"><i class="fa-solid fa-heart"></i></a></div>
            </div>
        </div>
    </div>
</div>
