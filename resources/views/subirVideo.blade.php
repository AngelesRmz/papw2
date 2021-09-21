@extends('layouts.ejemplo')
@section('upload')


<script>
        var input = document.getElementById('upload');
        var img = document.getElementById('thumbnail');
        var imgURL = document.getElementById('pURL');
        var image;
        
        input.addEventListener('change', function(event){
            var file = this.files[0];
            var url = URL.createObjectURL(file);
        
            var video = document.createElement('video');
            video.src = url;
        
            var snapshot = function(){
                var canvas = document.createElement('canvas');
                var ctx = canvas.getContext('2d');
        
                ctx.drawImage(video, 0, 0, canvas.width, canvas.height);
                image = canvas.toDataURL('image/png');
                img.src = canvas.toDataURL('image/png');
                imgURL.value = image;
                
              
                video.removeEventListener('canplay', snapshot);
            };
        
            video.addEventListener('canplay', snapshot);
        });
        </script>

    <div class="datosvideo">
        <div class="box">
            <form action="{{ route('upVid') }}" method="POST">
                @csrf
                <br>
                <div class="form-group {{ $errors->has('nameVideo') ? 'has-error' : '' }}">
                    <input type="text" name="nameVideo" value="{{ old('nameVideo') }}" required placeholder="Video Name"/>
                    {{-- @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif --}}
                </div>
                <div class="form-group custom-file">
                    <input type="file" name="video" class="custom-file-input" required>
                    <label class="custom-file-label" for="video">Video File</label>
                </div>
                <br>
                <br>
                <div class="form-group custom-file">
                    <input type="file" name="imageVideo" class="custom-file-input" required>
                    <label class="custom-file-label" for="imageVideo">Image Video</label>
                </div>
                <br>
                <br>
                <label>Categoria</label><br>
                <div class="" style="height: 140px;">	
                    <select  name="Cat">
                        @foreach($categorias as $category)
                            <option value="{{$category->id}}"> {{$category->name_category}} </option>
                        @endforeach
                    </select>
                <div>
                <br>
                <br>
                <div class="form-group">
                    <input type="submit" class="form-submit btn btn-primary btn-lg" value="Upload Video"/>
                </div>
                <br>
                <br>
            </form>
        </div>
    </div>

@endsection

