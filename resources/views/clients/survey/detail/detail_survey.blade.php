<!-- .cd-main-header -->
<main class="cd-main-content">
    <div class="image-header"></div>
    <!-- Content Wrapper  -->
    <div class="content-wrapper" id="user-id" data-user-id="{{ Auth::user()->id }}">
        <!-- /Scroll buttons -->
        {!! Form::open(['class' => 'form-doing-survey']) !!}
            <ul class="clearfix form-wrapper content-margin-top-preview ul-preview">
                <li class="form-line">
                    <div class="form-group">
                        <h2 class="title-survey-preview" id="id-survey-preview" data-token="{{ $data['survey']->token }}">
                            {{ $data['survey']->title }}
                        </h2>
                    </div>
                    <div class="form-group">
                        <span class="description-survey">{{ $data['survey']->description }}</span>
                    </div>
                </li>
            </ul>
            <div class="content-section-preview">
                @include('clients.survey.detail.content-survey')
            </div>
        {!! Form::close() !!}
    </div>
    <!-- Content Wrapper  -->
</main>
<div class="modal fade" id="loader-section-survey-doing">
    <section>
        <div class="loader-spin">
            <div class="loader-outter-spin"></div>
            <div class="loader-inner-spin"></div>
        </div>
    </section>
</div>

{!! Html::script(asset(config('settings.plugins') . 'jquery/jquery.min.js')) !!}
{!! Html::script(asset(config('settings.plugins') . 'bootstrap/bootstrap.min.js')) !!}
{!! Html::script(asset(config('settings.plugins') . 'moment/moment-with-locales.min.js')) !!}
{!! Html::script(asset(config('settings.plugins') . 'sweetalert/dist/sweetalert.min.js')) !!}
{!! Html::script(asset(config('settings.plugins') . 'jquery-ui/jquery-ui.min.js')) !!}
{!! Html::script(asset(config('settings.plugins') . 'tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.min.js')) !!}
{!! Html::script(asset(config('settings.plugins') . 'metismenu/metisMenu.min.js')) !!}
{!! Html::script(asset(config('settings.plugins') . 'jquery-menu-aim/jquery.menu-aim.js')) !!}
{!! Html::script(asset(config('settings.plugins') . 'popper/popper.min.js')) !!}
{!! Html::script(asset(config('settings.plugins') . 'bootstrap/dist/js/bootstrap.min.js')) !!}
{!! Html::script(elixir(config('settings.public_template') . 'js/preview-doing.js')) !!}