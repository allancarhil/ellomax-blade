@extends('components.includes.template')


@section('conteudo')

<section class="banner">
    <div class="bannerAbout1">
    </div>

</section>
<section>
    <div class="bannerAbout2">
    </div>
</section>
<section>
    <div class="bannerAbout3">
    </div>
</section>
<section>
    <div class="bannerAbout4">
    </div>
</section>
<section>
    <div class="bannerAbout5">
    </div>
</section>
<section>
    <div class="bannerAbout6">
    </div>
</section>

<section class="contactAbout">
<div class="contactbg">
<div class="container contact-form-about card">
    <div class="contact-image">
        <img src="images/x.png" alt="contact" />
    </div>
    <form method="post">
        <h3>Quer saber mais sobre nós?</h3>
        <h4>Mande-nos uma mensagem</h4>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="txtName" class="form-control" placeholder="Seu nome *" value="" />
                </div>
                <div class="form-group">
                    <input type="text" name="txtEmail" class="form-control" placeholder="Seu melhor email *" value="" />
                </div>
                <div class="form-group">
                    <input type="text" name="txtPhone" class="form-control" placeholder="Seu telefone *" value="" />
                </div>
                <div class="form-group">
                    <input type="submit" name="btnSubmit" class="btnContact" value="ENVIAR" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <textarea name="txtMsg" class="form-control" placeholder="Mensagem*" style="width: 100%; height: 150px;"></textarea>
                </div>
            </div>
        </div>
    </form>
    </div>
</section>

@endsection