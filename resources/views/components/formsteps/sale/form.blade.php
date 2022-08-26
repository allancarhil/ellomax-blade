<div class="sale">
    <form action="">
        @csrf
        
        @include('components.formsteps.sale.step1')
        @include('components.formsteps.sale.step2')
        @include('components.formsteps.sale.step3')
    </form>
</div>