<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{__('json.title')}}</title>
    <!-- Latest compiled and minified CSS -->
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" 
            integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets')}}/css/search.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div class="container">
        <div class="col-lg-12">
            <div class="block">
                <div class="form-group">
                    <label for="">{{__('json.search')}}</label>
                    <input type="text" class="form-control" name="search" id="search-input" placeholder="{{__('json.search-input')}}">
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="block search-list">
                @foreach($users as $value)
                <div class="col-lg-6 col-xs-12 col-md-6">
                    <div class="box">
                        <p>{{ $value['name']}}</p>
                        <p>{{ $value['designation_name']}}</p>
                        <p>{{ $value['department_name']}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div>
        <input type="hidden" name="" id="input-url" value="{{route('search')}}">
    </div>
    <script src="{{asset('assets')}}/js/search.js"></script>
</body>
</html>