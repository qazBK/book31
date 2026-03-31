@php
    $category = $category ?? null;
@endphp


@if($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="mb-3">
    <label>Название</label>
    <input type="text"  value="{{old('name',$book?->name)}}" class="form-control  @error('name') is-invalid @enderror" id="name" name="name" required>
    @error('name')
    <div class="invalid-feedback fs-3">{{$message}}</div>
    @enderror
</div>
<div class="mb-3">
    <label>Описание</label>
    <textarea   class="form-control   @error('description') is-invalid @enderror" id="description" name="description" rows="3" required>{{ old('description', $book?->description) }}</textarea>
    @error('description')
    <div class="invalid-feedback fs-3">{{$message}}</div>
    @enderror
</div>
<div class="mb-3">
    <label>Год выпуска</label>
    <input type="number"  value="{{old('year',$book?->year)}}" class="form-control @error('year') is-invalid @enderror" id="year" name="year" required>
    @error('year')
    <div class="invalid-feedback fs-3">{{$message}}</div>
    @enderror
</div>
<div class="mb-3">
    <label>Изображение</label>
    {{-- <input type="file" {{--value="{{old('images')}}"  class="form-control @error('images') is-invalid @enderror" id="productImages" name="images[]" multiple--}}>
    {{-- @error('images')
     <div class="invalid-feedback fs-3">{{$message}}</div>
     @enderror--}}
    <input type="file" class="form-control @error('images') is-invalid @enderror" id="productImages" name="images[]" multiple>
    @error('images')
    <div class="invalid-feedback fs-3">{{$message}}</div>
    @enderror
</div>
