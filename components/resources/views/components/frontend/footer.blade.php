<footer class="footer pt-3 mt-3 pb-0">

    @if ( $general->social_status == true && count($socials) > 0 )
        <hr class="horizontal dark mb-4">
        <h4 class="text-center mb-3">{{ __('Follow us') }}</h4>
        <div class="social-share text-center">
            <div class="share-icons relative">
                @foreach ($socials as $key => $social)
                    <a href="{{ $social['url'] }}" class="btn btn-{{ $social['name'] }} btn-icon" target="_blank">
                        <span class="btn-inner--icon"><i class="fab fa-{{ $social['name'] }} fa-fw"></i></span>
                        <span class="btn-inner--text">{{ ucfirst($social['name']) }}</span>
                    </a>
                @endforeach
            </div>
        </div>
    @endif

    @if ( !empty($footer->layout) && $footer->layout != 'none' )
        <hr class="horizontal dark mb-5">
    @endif

    <div class="container">
        <div class="row">
            @if ( !empty($footer->layout) )

                @switch( $footer->layout )

                    @case(1)

                    <div class="col-12 mb-3">
                        <div>
                            {!! GrahamCampbell\Security\Facades\Security::clean($footer->widget1) !!}
                        </div>
                    </div>

                    @break

                    @case(2)

                    <div class="col-md-6 mb-3">
                        <div>
                            {!! GrahamCampbell\Security\Facades\Security::clean($footer->widget1) !!}
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div>
                            {!! GrahamCampbell\Security\Facades\Security::clean($footer->widget2) !!}
                        </div>
                    </div>

                    @break

                    @case(3)

                    <div class="col-md-6 mb-3">
                        <div>
                            {!! GrahamCampbell\Security\Facades\Security::clean($footer->widget1) !!}
                        </div>
                    </div>

                    <div class="col-md-3 col-6 mb-3">
                        <div>
                            {!! GrahamCampbell\Security\Facades\Security::clean($footer->widget2) !!}
                        </div>
                    </div>

                    <div class="col-md-3 col-6 mb-3">
                        <div>
                            {!! GrahamCampbell\Security\Facades\Security::clean($footer->widget3) !!}
                        </div>
                    </div>

                    @break

                    @case(4)

                    <div class="col-md-3 mb-3">
                        <div>
                            {!! GrahamCampbell\Security\Facades\Security::clean($footer->widget1) !!}
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-4 col-12 mb-3">
                        <div>
                            {!! GrahamCampbell\Security\Facades\Security::clean($footer->widget2) !!}
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-4 col-12 mb-3">
                        <div>
                            {!! GrahamCampbell\Security\Facades\Security::clean($footer->widget3) !!}
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-4 col-12 mb-3">
                        <div>
                            {!! GrahamCampbell\Security\Facades\Security::clean($footer->widget4) !!}
                        </div>
                    </div>

                    @break

                    @case(5)

                    <div class="col-md-3 mb-3">
                        <div>
                            {!! GrahamCampbell\Security\Facades\Security::clean($footer->widget1) !!}
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-6 col-6 mb-3">
                        <div>
                            {!! GrahamCampbell\Security\Facades\Security::clean($footer->widget2) !!}
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-6 col-6 mb-3">
                        <div>
                            {!! GrahamCampbell\Security\Facades\Security::clean($footer->widget3) !!}
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-6 col-6 mb-3">
                        <div>
                            {!! GrahamCampbell\Security\Facades\Security::clean($footer->widget4) !!}
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-6 col-6 mb-3 me-auto">
                        <div>
                            {!! GrahamCampbell\Security\Facades\Security::clean($footer->widget5) !!}
                        </div>
                    </div>

                    @break

                    @default

                @endswitch

            @endif

            @if ( !empty($footer->bottom_text) )
                <div class="col-12">
                    <div class="text-center">
                        <p class="my-4 text-sm">
                            @php
                                $footer_vars = array('%year%');
                                $footer_val  = array( date('Y') );
                                $footer_data  = str_replace( $footer_vars , $footer_val , $footer->bottom_text);
                                echo htmlspecialchars_decode( $footer_data )
                            @endphp
                        </p>
                    </div>
                </div>
            @endif

        </div>
    </div>
</footer>
