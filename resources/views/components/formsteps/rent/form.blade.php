<div class="rent">
    <form action="">
        @csrf
        
        @include('components.formsteps.rent.step1')
        @include('components.formsteps.rent.step2')
        @include('components.formsteps.rent.step3')
    </form>
</div>