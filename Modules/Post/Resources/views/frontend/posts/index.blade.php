@extends('front.layouts.app')

@section('title')
    {{ __($module_title) }}
@endsection

@section('content')
    <x-frontend.header-block :title="__('Articles')">
    </x-frontend.header-block>

    <section class="padding_top">
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-3">
            @foreach ($$module_name as $$module_name_singular)
                @php
                    $details_url = route("frontend.$module_name.show", [
                        encode_id($$module_name_singular->id),
                        $$module_name_singular->slug,
                    ]);
                @endphp

                @foreach ($$module_name as $$module_name_singular)
                    @php
                        $details_url = route("frontend.$module_name.show", [
                            encode_id($$module_name_singular->id),
                            $$module_name_singular->slug,
                        ]);
                    @endphp

                    <x-frontend.card :url="$details_url" :name="$$module_name_singular->name" :image="$$module_name_singular->image">
                        <p class="bottom10">
                            <span>By:</span> Admin <span>|</span>
                            <span>Date:</span> {{ $$module_name_singular->created_at }}
                        </p>

                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            {{ $$module_name_singular->intro }}
                        </p>
                    </x-frontend.card>
                @endforeach
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-6 flex justify-center">
            {{ $$module_name->links('pagination::tailwind') }}
        </div>
    </section>
@endsection
