@extends('templates.survey.master')
@push('styles')
    {!! Html::style(asset(config('settings.plugins') . 'js-offcanvas/js-offcanvas.css')) !!}
    {!! Html::style(asset(config('settings.plugins') . 'tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.min.css')) !!}
    {!! Html::style(asset(config('settings.plugins') . 'metismenu/metisMenu.min.css')) !!}
    {!! Html::style(asset(config('settings.public_template') . 'css/fontsv2/fonts-v2.css')) !!}
    {!! Html::style(elixir(config('settings.public_template') . 'css/form-builder-custom.css')) !!}
@endpush
@section('content')
    <div class="background-user-profile"></div>
    <!-- .cd-main-header -->
    <main class="cd-main-content">
        <!-- Content Wrapper  -->
        <div class="content-wrapper">
            {!! Form::open([
                'class' => 'survey-form',
            ]) !!}
                <!-- Scroll buttons -->
                <div class="scroll-button-group-sidebar">
                    <div class="button-group-sidebar">
                        <div class="survey-action">
                            <button class="btn btn-outline-light text-dark"><i class="fa fa-fw fa-plus-circle text-dark"></i></button>
                        </div>
                        <div class="survey-action">
                            <button class="btn btn-outline-light text-dark"><i class="fa fa-fw fa-header text-dark"></i></button>
                        </div>
                        <div class="survey-action">
                            <button class="btn btn-outline-light text-dark"><i class="fa fa-fw fa-picture-o text-dark"></i></button>
                        </div>
                        <div class="survey-action">
                            <button class="btn btn-outline-light text-dark"><i class="fa fa-fw fa-video-camera text-dark"></i></button>
                        </div>
                        <div class="survey-action">
                            <button class="btn btn-outline-light text-dark"><i class="fa fa-fw fa-bars text-dark"></i></button>
                        </div>
                    </div>
                </div>
                <!-- /Scroll buttons -->
                <ul class="clearfix form-wrapper">
                    <li class="form-line p-0">
                        <div class="form-header">
                            <h1>@lang('lang.create_survey')</h1>
                        </div>
                    </li>
                    <li class="form-line">
                        <label>@lang('lang.title')</label>
                        <div class="form-group">
                            {!! Form::textarea('title', '', [
                                'class' => 'form-control input-area auto-resize',
                                'data-autoresize',
                                'placeholder' => trans('lang.title_placeholder'),
                                'rows' => 1
                            ]) !!}
                        </div>
                        <label>@lang('lang.time')</label>
                        <div class="form-group form-row">
                            <div class="col">
                                {!! Form::text('start_time', '', [
                                    'class' => 'form-control datetimepicker-input',
                                    'id' => 'start-time',
                                    'data-toggle' => 'datetimepicker',
                                    'data-target' => '#start-time',
                                    'placeholder' => trans('lang.start_time__placeholder'),
                                ]) !!}
                            </div>
                            <div class="col">
                                {!! Form::text('end_time', '', [
                                    'class' => 'form-control datetimepicker-input',
                                    'id' => 'end-time',
                                    'data-toggle' => 'datetimepicker',
                                    'data-target' => '#end-time',
                                    'placeholder' => trans('lang.end_time__placeholder'),
                                ]) !!}
                            </div>
                        </div>
                        <label>@lang('lang.description')</label>
                        <div class="form-group">
                            {!! Form::textarea('description', '', [
                                'class' => 'form-control auto-resize',
                                'data-autoresize',
                                'placeholder' => trans('lang.description_placeholder'),
                                'rows' => 3
                            ]) !!}
                        </div>
                    </li>
                </ul>
                <ul class="clearfix form-wrapper page-section" id="sortable1">
                    <li class="p-0">
                        <div class="form-header">
                            <h1>@lang('lang.survey')</h1>
                            <h4>@lang('lang.survey')</h4>
                        </div>
                    </li>
                    @include('templates.survey.elements.title-description')
                    @include('templates.survey.elements.multiple-choice')
                </ul>

                <ul class="clearfix form-wrapper page-section" id="sortable2">
                    <li class="p-0">
                        <div class="form-header">
                            <h1>@lang('lang.survey')</h1>
                            <h4>@lang('lang.survey')</h4>
                        </div>
                    </li>
                    @include('templates.survey.elements.title-description')
                    @include('templates.survey.elements.multiple-choice')
                </ul>
            {!! Form::close() !!}
        </div>
        <!-- Content Wrapper  -->
    </main>
    <div id="element-clone">
        {!! Form::textarea('description', '', [
            'class' => 'form-control question-description-input input-area auto-resize',
            'data-autoresize',
            'placeholder' => trans('lang.description_section_placeholder'),
            'rows' => 1
        ]) !!}

        <div class="form-row choice other-choice-option">
            <div class="radio-choice-icon"><i class="fa fa-circle-thin"></i></div>
            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-8 col-8 choice-input-block">
                {!! Form::text('name', trans('lang.other_option'), [
                    'class' => 'form-control',
                    'readonly' => true,
                ]) !!}
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col-3 answer-image-btn-group">
                {{ Html::link('#', '', ['class' => 'answer-image-btn fa fa-image invisible']) }}
                {{ Html::link('#', '', ['class' => 'answer-image-btn fa fa-times remove-other-choice-option']) }}
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <!-- Plugins -->
    {!! Html::script(asset(config('settings.plugins') . 'jquery-ui/jquery-ui.min.js')) !!}
    {!! Html::script(asset(config('settings.public_template') . 'js/popper.min.js')) !!}
    {!! Html::script(asset(config('settings.public_template') . 'js/modernizr.js')) !!}
    {!! Html::script(asset(config('settings.plugins') . 'tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.min.js')) !!}
    <!-- Custom Script -->
    {!! Html::script(asset(config('settings.plugins') . 'metismenu/metisMenu.min.js')) !!}
    {!! Html::script(asset(config('settings.plugins') . 'jquery-menu-aim/jquery.menu-aim.js')) !!}
    {!! Html::script(elixir(config('settings.public_template') . 'js/builder-custom.js')) !!}
@endpush
