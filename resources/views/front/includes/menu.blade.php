<!-- Navbar Links -->
<div class="collapse navbar-collapse nav_bor_bot" id="navbar-menu">
    <ul class="nav navbar-nav {{ $right ?? 'navbar-right' }} nav_3" data-in="fadeInDown" data-out="fadeOutUp">
        <!-- Home -->
        <x-frontend.nav-item :href="route('home')" :active="request()->routeIs('home')">{{ __('Home') }}</x-frontend.nav-item>

        <!-- About Us -->
        <x-frontend.nav-item :href="route('frontend.about')" :active="request()->routeIs('frontend.about')">{{ __('About Us') }}</x-frontend.nav-item>

        <!-- Listed Properties Dropdown -->
        <x-frontend.nav-item :href="'#'" :dropdown="true" :active="request()->routeIs('frontend.properties.*')" title="{{ __('Listed Properties') }}"
            :submenu="[
                [
                    'href' => route('frontend.properties.residential'),
                    'title' => __('Residential'),
                    'active' => request()->routeIs('frontend.properties.residential'),
                ],
                [
                    'href' => route('frontend.properties.commercial'),
                    'title' => __('Commercial'),
                    'active' => request()->routeIs('frontend.properties.commercial'),
                ],
            ]">
            {{ __('Listed Properties') }}
        </x-frontend.nav-item>

        <!-- Services -->
        <x-frontend.nav-item :href="route('frontend.services')" :active="request()->routeIs('frontend.services')">{{ __('Services') }}</x-frontend.nav-item>

        <!-- Gallery -->
        <x-frontend.nav-item :href="route('frontend.gallery')" :active="request()->routeIs('frontend.gallery')">{{ __('Gallery') }}</x-frontend.nav-item>

        <!-- Career -->
        <x-frontend.nav-item :href="route('frontend.career')" :active="request()->routeIs('frontend.career')">{{ __('Career') }}</x-frontend.nav-item>

        <!-- Blog -->
        <x-frontend.nav-item :href="route('frontend.posts.index')" :active="request()->routeIs('frontend.posts.*')">{{ __('Blog') }}</x-frontend.nav-item>

        <!-- Contact Us -->
        <x-frontend.nav-item :href="route('frontend.contact-us')" :active="request()->routeIs('frontend.contact-us')">{{ __('Contact Us') }}</x-frontend.nav-item>


    </ul>
</div>
