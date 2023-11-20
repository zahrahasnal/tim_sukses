<div class="container">
    <div class="row-justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Verify Your Email</div>
                <div class="card-body">
                    @if (session('recent'))
                    <div class="alert-alert-success" role="alert">
                        ({ __('A fresh verification link has been to your email add')})
                    </div>
                    @endif
                    <a href="{{( url('/reset-password/'.$token))}}">Click Here</a>
                </div>
            </div>
        </div>
    </div>
</div>