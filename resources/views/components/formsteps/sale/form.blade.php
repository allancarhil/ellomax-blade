<div class="sale">
    <form action="{{route('pages.action.sell')}}" method="POST" enctype="multipart/form-data">
        @csrf 
        @include('components.formsteps.sale.step1')
        @include('components.formsteps.sale.step2')
        @include('components.formsteps.sale.step3')
    </form>
</div>