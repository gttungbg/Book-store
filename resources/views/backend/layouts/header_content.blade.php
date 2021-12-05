<div class="form-head d-flex mb-3 align-items-start">
    <div class="mr-auto d-none d-lg-block">
        <h2 class="text-black font-w600 mb-0">{{ $name }}</h2>
    </div>
    {{--alert--}}
    @if(session('success'))
        <div class="alert alert-success solid alert-square">
            <strong>Success</strong> {{ __(session('success')) }}
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger solid alert-square">
            <strong>Success</strong> {{ __(session('danger')) }}
        </div>
    @endif
</div>
