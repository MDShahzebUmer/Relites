<!-- Menu Bar Start -->
<div class="manu-bar">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-12">
                <nav class="main-manu">
                    <ul>
                        <li>
                            <a href="{{ route('frontend.best-selling') }}" class="{{ isActiveMenu('best-selling') }}">{{ __('Best Selling') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('frontend.mens-cologne') }}" class="{{ isActiveMenu('mens-cologne') }}">{{ __("Men's Cologne") }}</a>
                        </li>
                        <li>
                            <a href="{{ route('frontend.trends') }}" class="{{ isActiveMenu('trends') }}">{{ __('Trends') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('frontend.brands') }}" class="{{ isActiveMenu('brands') }}">{{ __('All Brand') }}</a>
                        </li>
                        <li>
                            <a href="{{ url('shop') }}" class="{{ isActiveMenu('shop') }}">{{ __('All Shop') }}</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Menu Bar End -->
