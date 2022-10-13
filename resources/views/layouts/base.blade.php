<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @hasSection('title')

            <title>@yield('title') - {{ config('app.name') }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif

        <!-- Favicon -->
		<link rel="shortcut icon" href="{{ url(asset('favicon.ico')) }}">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        <script src="https://cdn.tiny.cloud/1/r1bh65yckxcg92ny6rcgtoc7wirrlshksq6279agmziz46bc/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        @livewireStyles
        @livewireScripts
        <script>
            tinymce.init({
                selector: 'textarea#blog-editor',
                height: 400,
                plugins: 'powerpaste advcode table lists checklist link image emoticons fullscreen',
                toolbar: 'undo redo | blocks| bold italic | bullist numlist checklist | code | table link image emoticons fullscreen',
                automatic_uploads: true,
                image_caption: true,
                image_title: true,
                images_upload_url: '{{ route('image_upload') }}',
                file_picker_types: 'image',
                file_picker_callback: function(cb, value, meta) {
                    var input = document.createElement('input');
                    input.setAttribute('type', 'file');
                    input.setAttribute('accept', 'image/*');
                    input.onchange = function() {
                        var file = this.files[0];
    
                        var reader = new FileReader();
                        reader.readAsDataURL(file);
                        reader.onload = function () {
                            var id = 'blobid' + (new Date()).getTime();
                            var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                            var base64 = reader.result.split(',')[1];
                            var blobInfo = blobCache.create(id, file, base64);
                            blobCache.add(blobInfo);
                            cb(blobInfo.blobUri(), { title: file.name });
                        };
                    };
                    input.click();
                },
                relative_urls : false,
                remove_script_host : false,
                convert_urls : true,
                content_style: 'img {width: 100%; height:100%; border-radius:10px; object-fit:cover;}'
            });
        </script>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body>
        @include('sweetalert::alert')

        @yield('body')



    </body>
</html>
