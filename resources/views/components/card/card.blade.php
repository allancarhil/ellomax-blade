<div class="card" style="width:300px">
    <div class="card-body">
        <h5 class="card-title">{{$company->company_name}}</h5>
        <p class="card-text">Segmento:{{$company->segment->name}}</p>
        <p class="card-text">Ocupação:{{$company->occupation->name}}</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>