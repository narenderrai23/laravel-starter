@extends('front.layouts.app')

@section('title')
    {{ __($module_title) }}
@endsection

@section('content')
    <x-frontend.header-block :title="__('Articles')">
    </x-frontend.header-block>

    <section class="padding_top">
        <div class="container">
            <div class="row">
                @foreach ($$module_name as $$module_name_singular)
                    @php
                        $details_url = route("frontend.$module_name.show", [
                            ($$module_name_singular->id),
                            $$module_name_singular->slug,
                        ]);
                    @endphp

                    <x-frontend.card :url="$details_url" :name="$$module_name_singular->name" :image="$$module_name_singular->image">
                        <p class="text-muted small">
                            <span>By:</span> Admin <span>|</span>
                            <span>Date:</span> {{ $$module_name_singular->created_at }}
                        </p>

                        <p class="text-muted">
                            {{ $$module_name_singular->intro }}
                        </p>
                    </x-frontend.card>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="text-center">
                {{ $$module_name->links() }}
            </div>
        </div>
    </section>
@endsection
