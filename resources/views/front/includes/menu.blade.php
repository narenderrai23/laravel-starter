 {{-- <!-- Navbar Links -->
 <div class="collapse navbar-collapse nav_bor_bot" id="navbar-menu">
     <ul class="nav navbar-nav navbar-right nav_3" data-in="fadeInDown" data-out="fadeOutUp">
         <x-frontend.nav-item :active="request()->routeIs('home')">{{ __('Home') }}</x-frontend.nav-item>
         <x-frontend.nav-item :href="route('frontend.posts.index')" :active="request()->routeIs('frontend.posts.*')">{{ __('Posts') }}</x-frontend.nav-item>
         <x-frontend.nav-item :href="route('frontend.categories.index')" :active="request()->routeIs('frontend.categories.*')">{{ __('Categories') }}</x-frontend.nav-item>
         <x-frontend.nav-item :href="route('frontend.tags.index')" :active="request()->routeIs('frontend.tags.*')">{{ __('Tags') }}</x-frontend.nav-item>
         <x-frontend.nav-item :href="route('frontend.tags.index')" :active="request()->routeIs('frontend.tags.*')">{{ __('Contact') }}</x-frontend.nav-item>
     </ul>
 </div> --}}


<!-- Navbar Links -->
<div class="collapse navbar-collapse nav_bor_bot" id="navbar-menu">
    <ul class="nav navbar-nav navbar-right nav_3" data-in="fadeInDown" data-out="fadeOutUp">
        <!-- Home -->
        <x-frontend.nav-item :href="route('home')" :active="request()->routeIs('home')">{{ __('Home') }}</x-frontend.nav-item>

        <!-- About Us -->
        <x-frontend.nav-item :href="route('frontend.about')" :active="request()->routeIs('frontend.about')">{{ __('About Us') }}</x-frontend.nav-item>

        <!-- Services -->
        <x-frontend.nav-item :href="route('frontend.services')" :active="request()->routeIs('frontend.services')">{{ __('Services') }}</x-frontend.nav-item>

        <!-- Gallery -->
        <x-frontend.nav-item :href="route('frontend.gallery')" :active="request()->routeIs('frontend.gallery')">{{ __('Gallery') }}</x-frontend.nav-item>

        <!-- Career -->
        <x-frontend.nav-item :href="route('frontend.career')" :active="request()->routeIs('frontend.career')">{{ __('Career') }}</x-frontend.nav-item>

        <!-- Blog -->
        <x-frontend.nav-item :href="route('frontend.posts.index')" :active="request()->routeIs('frontend.posts.*')">{{ __('Blog') }}</x-frontend.nav-item>
        {{-- <x-frontend.nav-item :href="route('frontend.blog')" :active="request()->routeIs('frontend.blog')">{{ __('Blog') }}</x-frontend.nav-item> --}}

        <!-- Contact Us -->
        <x-frontend.nav-item :href="route('frontend.contact-us')" :active="request()->routeIs('frontend.contact-us')">{{ __('Contact Us') }}</x-frontend.nav-item>

        <!-- Listed Properties -->
        <x-frontend.nav-item :href="route('frontend.properties.residential')" :active="request()->routeIs('frontend.properties.*')">{{ __('Listed Properties') }}</x-frontend.nav-item>
    </ul>
</div>
