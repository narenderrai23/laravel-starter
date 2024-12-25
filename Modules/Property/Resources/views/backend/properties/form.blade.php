<div class="row">
    <div class="col-12 col-sm-5 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'name';
            $field_lable = __("property::$module_name.$field_name");
            $required = 'required';
            ?>

            {{ html()->label($field_lable, $field_name)->class('form-label')->for($field_name) }}
            {!! field_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_lable)->class('form-control') }}
        </div>
    </div>

    <div class="col-12 col-sm-3 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'slug';
            $field_lable = __("property::$module_name.$field_name");
            $required = '';
            ?>

            {{ html()->label($field_lable, $field_name)->class('form-label')->for($field_name) }}
            {!! field_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_lable)->class('form-control') }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'intro';
            $field_lable = __("property::$module_name.$field_name");
            $required = 'required';
            ?>

            {{ html()->label($field_lable, $field_name)->class('form-label')->for($field_name) }}
            {!! field_required($required) !!}
            {{ html()->textarea($field_name)->placeholder($field_lable)->class('form-control') }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'content';
            $field_lable = __("property::$module_name.$field_name");
            $required = 'required';
            ?>

            {{ html()->label($field_lable, $field_name)->class('form-label')->for($field_name) }}
            {!! field_required($required) !!}
            {{ html()->textarea($field_name)->placeholder($field_lable)->class('form-control') }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'image';
            $field_lable = __("property::$module_name.$field_name");
            $required = 'required';
            ?>

            {{ html()->label($field_lable, $field_name)->class('form-label')->for($field_name) }}
            {!! field_required($required) !!}
            <div class="input-group mb-3">
                {{ html()->text($field_name)->placeholder($field_lable)->class('form-control')->attributes(['aria-label' => 'Image', 'aria-describedby' => 'button-image']) }}
                <button class="btn btn-outline-info" id="button-image" data-input="{{ $field_name }}" type="button">
                    <i class="fas fa-folder-open"></i>
                    &nbsp;
                    @lang('Browse')
                </button>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'images';
            $field_label = __("property::$module_name.$field_name");
            $required = 'required';
            ?>
            {{ html()->label($field_label, $field_name)->class('form-label')->for($field_name) }}
            {!! field_required($required) !!}
            {{ html()->file($field_name . '[]')->class('form-control')->attributes([
                    'multiple' => true,
                    'accept' => 'image/*', // Only accept image files
                    'aria-label' => 'Images',
                    'aria-describedby' => 'button-images',
                ]) }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'plains';
            $field_label = __("property::$module_name.$field_name");
            $required = 'required';
            ?>
            {{ html()->label($field_label, $field_name)->class('form-label')->for($field_name) }}
            {!! field_required($required) !!}
            {{ html()->file($field_name . '[]')->class('form-control')->attributes([
                    'multiple' => true,
                    'accept' => 'image/*', // Only accept image files
                    'aria-label' => 'Images',
                    'aria-describedby' => 'button-images',
                ]) }}
        </div>
    </div>
</div>


<div class="row">
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'category_id';
            $field_lable = __("property::$module_name.$field_name");
            $field_options = !empty($data) ? optional($data->category())->pluck('name', 'id') : '';
            $selected = !empty($data) ? optional($data->category())->pluck('id')->toArray() : '';
            $field_lable = __('Select an option');
            $required = 'required';
            ?>

            {{ html()->label($field_lable, $field_name)->class('form-label')->for($field_name) }}
            {!! field_required($required) !!}
            {{ html()->select($field_name, $field_options, $selected)->placeholder($field_lable)->class('form-select select2-category') }}
        </div>
    </div>
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'location_id';
            $field_lable = __("property::$module_name.$field_name");
            $field_options = !empty($data) ? optional($data->location())->pluck('name', 'id') : '';
            $selected = !empty($data) ? optional($data->location())->pluck('id')->toArray() : '';
            $field_lable = __('Select an option');
            $required = 'required';
            ?>

            {{ html()->label($field_lable, $field_name)->class('form-label')->for($field_name) }}
            {!! field_required($required) !!}
            {{ html()->select($field_name, $field_options, $selected)->placeholder($field_lable)->class('form-select select2-location') }}
        </div>
    </div>
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'is_featured';
            $field_lable = __("property::$module_name.$field_name");
            $field_lable = __('Select an option');
            $required = 'required';
            $select_options = [
                '0' => 'No',
                '1' => 'Yes',
            ];
            ?>

            {{ html()->label($field_lable, $field_name)->class('form-label')->for($field_name) }}
            {!! field_required($required) !!}
            {{ html()->select($field_name, $select_options)->class('form-select') }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-sm-6 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'status';
            $field_lable = __("property::$module_name.$field_name");
            $field_lable = __('Select an option');
            $required = 'required';
            $select_options = \Modules\Post\Enums\PostStatus::toArray();
            ?>

            {{ html()->label($field_lable, $field_name)->class('form-label')->for($field_name) }}
            {!! field_required($required) !!}
            {{ html()->select($field_name, $select_options)->placeholder($field_lable)->class('form-select') }}
        </div>
    </div>
    <div class="col-12 col-sm-6 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'published_at';
            $field_lable = __("property::$module_name.$field_name");
            $required = 'required';
            ?>

            {{ html()->label($field_lable, $field_name)->class('form-label')->for($field_name) }}
            {!! field_required($required) !!}
            {{ html()->datetime($field_name)->placeholder($field_lable)->class('form-control') }}
        </div>
    </div>
</div>

<div class="row">
    <!-- Address -->
    <div class="col-12 col-sm-6 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'address';
            $field_label = __("property::$module_name.$field_name");
            $field_lable = __('Enter address');
            ?>
            {{ html()->label($field_label, $field_name)->class('form-label')->for($field_name) }}
            {{ html()->text($field_name)->placeholder($field_lable)->class('form-control') }}
        </div>
    </div>

    <!-- Description -->
    <div class="col-12 col-sm-12 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'description';
            $field_label = __("property::$module_name.$field_name");
            $field_lable = __('Enter description');
            ?>
            {{ html()->label($field_label, $field_name)->class('form-label')->for($field_name) }}
            {{ html()->textarea($field_name)->placeholder($field_lable)->class('form-control')->attributes(['rows' => 4]) }}
        </div>
    </div>

    <!-- Additional Info -->
    <div class="col-12 col-sm-12 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'additional_info';
            $field_label = __("property::$module_name.$field_name");
            $field_lable = __('Enter additional information');
            ?>
            {{ html()->label($field_label, $field_name)->class('form-label')->for($field_name) }}
            {{ html()->textarea($field_name)->placeholder($field_lable)->class('form-control')->attributes(['rows' => 4]) }}
        </div>
    </div>

    <!-- Size -->
    <div class="col-12 col-sm-6 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'size';
            $field_label = __("property::$module_name.$field_name");
            $field_lable = __('Enter size');
            ?>
            {{ html()->label($field_label, $field_name)->class('form-label')->for($field_name) }}
            {{ html()->text($field_name)->placeholder($field_lable)->class('form-control') }}
        </div>
    </div>

    <!-- Bedrooms -->
    <div class="col-12 col-sm-6 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'bedrooms';
            $field_label = __("property::$module_name.$field_name");
            $field_lable = __('Enter number of bedrooms');
            ?>
            {{ html()->label($field_label, $field_name)->class('form-label')->for($field_name) }}
            {{ html()->number($field_name)->placeholder($field_lable)->class('form-control') }}
        </div>
    </div>

    <!-- Bathrooms -->
    <div class="col-12 col-sm-6 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'bathrooms';
            $field_label = __("property::$module_name.$field_name");
            $field_lable = __('Enter number of bathrooms');
            ?>
            {{ html()->label($field_label, $field_name)->class('form-label')->for($field_name) }}
            {{ html()->number($field_name)->placeholder($field_lable)->class('form-control') }}
        </div>
    </div>

    <!-- Garage -->
    <div class="col-12 col-sm-6 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'garage';
            $field_label = __("property::$module_name.$field_name");
            $field_lable = __('Enter number of garage spaces');
            ?>
            {{ html()->label($field_label, $field_name)->class('form-label')->for($field_name) }}
            {{ html()->number($field_name)->placeholder($field_lable)->class('form-control') }}
        </div>
    </div>

    <!-- Price -->
    <div class="col-12 col-sm-6 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'price';
            $field_label = __("property::$module_name.$field_name");
            $field_lable = __('Enter price');
            ?>
            {{ html()->label($field_label, $field_name)->class('form-label')->for($field_name) }}
            {{ html()->number($field_name)->placeholder($field_lable)->class('form-control')->attributes(['step' => '0.01']) }}
        </div>
    </div>

    <!-- Available From -->
    <div class="col-12 col-sm-6 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'available_from';
            $field_label = __("property::$module_name.$field_name");
            ?>
            {{ html()->label($field_label, $field_name)->class('form-label')->for($field_name) }}
            {{ html()->date($field_name)->class('form-control') }}
        </div>
    </div>

    <!-- Year Built -->
    <div class="col-12 col-sm-6 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'year_built';
            $field_label = __("property::$module_name.$field_name");
            $field_lable = __('Enter year built');
            ?>
            {{ html()->label($field_label, $field_name)->class('form-label')->for($field_name) }}
            {{ html()->number($field_name)->placeholder($field_lable)->class('form-control') }}
        </div>
    </div>

    <!-- Cross Streets -->
    <div class="col-12 col-sm-6 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'cross_streets';
            $field_label = __("property::$module_name.$field_name");
            $field_lable = __('Enter cross streets');
            ?>
            {{ html()->label($field_label, $field_name)->class('form-label')->for($field_name) }}
            {{ html()->text($field_name)->placeholder($field_lable)->class('form-control') }}
        </div>
    </div>

    <!-- Floors -->
    <div class="col-12 col-sm-6 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'floors';
            $field_label = __("property::$module_name.$field_name");
            $field_lable = __('Enter number of floors');
            ?>
            {{ html()->label($field_label, $field_name)->class('form-label')->for($field_name) }}
            {{ html()->number($field_name)->placeholder($field_lable)->class('form-control') }}
        </div>
    </div>

    <!-- Plumbing -->
    <div class="col-12 col-sm-6 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'plumbing';
            $field_label = __("property::$module_name.$field_name");
            $field_lable = __('Enter plumbing details');
            ?>
            {{ html()->label($field_label, $field_name)->class('form-label')->for($field_name) }}
            {{ html()->text($field_name)->placeholder($field_lable)->class('form-control') }}
        </div>
    </div>
</div>




<div class="row">
    <div class="col-12 col-sm-5 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'meta_title';
            $field_lable = __("property::$module_name.$field_name");
            $required = '';
            ?>

            {{ html()->label($field_lable, $field_name)->class('form-label')->for($field_name) }}
            {!! field_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_lable)->class('form-control') }}
        </div>
    </div>
    <div class="col-12 col-sm-5 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'meta_keywords';
            $field_lable = __("property::$module_name.$field_name");
            $required = '';
            ?>

            {{ html()->label($field_lable, $field_name)->class('form-label')->for($field_name) }}
            {!! field_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_lable)->class('form-control') }}
        </div>
    </div>
    <div class="col-12 col-sm-2 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'order';
            $field_lable = __("property::$module_name.$field_name");
            $required = '';
            ?>

            {{ html()->label($field_lable, $field_name)->class('form-label')->for($field_name) }}
            {!! field_required($required) !!}
            {{ html()->number($field_name)->placeholder($field_lable)->class('form-control') }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-sm-6 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'meta_description';
            $field_lable = __("property::$module_name.$field_name");
            $required = '';
            ?>

            {{ html()->label($field_lable, $field_name)->class('form-label')->for($field_name) }}
            {!! field_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_lable)->class('form-control') }}
        </div>
    </div>
    <div class="col-12 col-sm-6 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'meta_og_image';
            $field_lable = __("property::$module_name.$field_name");
            $required = '';
            ?>

            {{ html()->label($field_lable, $field_name)->class('form-label')->for($field_name) }}
            {!! field_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_lable)->class('form-control') }}
        </div>
    </div>
</div>

@push('after-styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" rel="stylesheet" />
    <style>
        .note-editor.note-frame :after {
            display: none;
        }

        .note-editor .note-toolbar .note-dropdown-menu,
        .note-popover .popover-content .note-dropdown-menu {
            min-width: 180px;
        }
    </style>
@endpush

@push('after-scripts')
    <script type="module" src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.js"></script>
    <script type="module">
        // Define function to open filemanager window
        var lfm = function(options, cb) {
            var route_prefix = options && options.prefix ? options.prefix : '/laravel-filemanager';
            window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
            window.SetUrl = cb;
        };

        // Define LFM summernote button
        var LFMButton = function(context) {
            var ui = $.summernote.ui;
            var button = ui.button({
                contents: '<i class="note-icon-picture"></i> ',
                tooltip: 'Insert image with filemanager',
                click: function() {
                    lfm({
                            type: 'image',
                            prefix: '/laravel-filemanager',
                        },
                        function(lfmItems, path) {
                            lfmItems.forEach(function(lfmItem) {
                                context.invoke('insertImage', lfmItem.url);
                            });
                        },
                    );
                },
            });
            return button.render();
        };

        $('#content').summernote({
            height: 120,
            toolbar: [
                ['style', ['style']],
                ['font', ['fontname', 'fontsize', 'bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'lfm', 'video']],
                ['view', ['codeview', 'undo', 'redo', 'help']],
            ],
            buttons: {
                lfm: LFMButton,
            },
        });
    </script>

    <script type="module" src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
    <script type="module">
        $('#button-image').filemanager('image');
    </script>

    <!-- Select2 Library -->
    <x-library.select2 />
    <script type="module">
        $(document).ready(function() {
            $(document).on('select2:open', () => {
                document.querySelector('.select2-search__field').focus();
                document.querySelector('.select2-container--open .select2-search__field').focus();
            });

            $('.select2-category').select2({
                theme: 'bootstrap-5',
                placeholder: '@lang('Select an option')',
                allowClear: true,
                ajax: {
                    url: '{{ route('backend.categories.index_list') }}',
                    dataType: 'json',
                    data: function(params) {
                        return {
                            q: $.trim(params.term),
                        };
                    },
                    processResults: function(data) {
                        return {
                            results: data,
                        };
                    },
                    cache: true,
                },
            });

            $('.select2-location').select2({
                theme: 'bootstrap-5',
                placeholder: '@lang('Select an option')',
                allowClear: true,
                ajax: {
                    url: '{{ route('backend.locations.index_list') }}',
                    dataType: 'json',
                    data: function(params) {
                        return {
                            q: $.trim(params.term),
                        };
                    },
                    processResults: function(data) {
                        return {
                            results: data,
                        };
                    },
                    cache: true,
                },
            });


        });
    </script>
@endpush
