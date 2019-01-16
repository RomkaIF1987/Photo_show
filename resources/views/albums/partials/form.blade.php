@csrf
<div class="form-group">
    <label for="exampleInputName">Назва альбому</label>
    <input type="text"
           class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}"
           name="name"
           id="name"
           aria-describedby="name"
           placeholder="Введіть назву альбому"
           value="{{old('name') ?? $album->name}}"
           required>
    <div class="invalid-feedback">
        Назва альбому повинна мати не менше 2 символів
    </div>
    @if($errors->has('name'))
        <div class="invalid-feedback">
            {{$errors->get('name')[0]}}
        </div>
    @endif
</div>
<div class="form-group">
    <label for="validationTextarea">Опис альбому</label>
    <textarea class="form-control {{$errors->has('description') ? 'is-invalid' : ''}}"
              name="description"
              placeholder="Напиши опис до свого альбому"
              required>
        {{old('description') ?? $album->description}}
    </textarea>
    <div class="invalid-feedback">
        Будь ласка напишіть опис.
    </div>
    @if($errors->has('description'))
        <div class="invalid-feedback">
            {{$errors->get('description')[0]}}
        </div>
    @endif
</div>
<div class="form-group">
    <label for="exampleFormControlFile1">Виберіть файл</label> {{old('cover_image') ?? $album->cover_image}}
    <input type="file" name="cover_image" class="form-control-file" id="exampleFormControlFile1">
</div>