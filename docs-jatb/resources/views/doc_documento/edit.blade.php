@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} D O C D O C U M E N T O
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} D O C D O C U M E N T O</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('doc_documento.update', $dOCDOCUMENTO->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('doc_documento.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
