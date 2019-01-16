@csrf
<div class="form-group">
    <label for="exampleInputName">Назва фотографії</label>
    <input type="text"
           class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}"
           name="title"
           id="title" aria-describedby="title"
           placeholder="Введіть назву фотографії"
           value="{{old('title') ?? $photo->title}}"
           required>
    <div class="invalid-feedback">
        Назва фотографії повинна мати не менше 2-ох символів.
    </div>
    @if($errors->has('title'))
        <div class="invalid-feedback">
            {{$errors->get('title')[0]}}
        </div>
    @endif
</div>
<div class="form-group">
    <label for="validationTextarea">Опис фотографії</label>
    <textarea class="form-control {{$errors->has('description') ? 'is-invalid' : ''}}"
              name="description"
              placeholder="Напишіть опис фотографії">
        {{old('description') ?? $photo->description}}
    </textarea>
    <div class="invalid-feedback">
        Будь ласка напишіть опис
    </div>
    @if($errors->has('description'))
        <div class="invalid-feedback">
            {{$errors->get('description')[0]}}
        </div>
    @endif
</div>
<div class="form-group">
    <label for="exampleFormControlFile1">Виберіть фотографію</label>
    <input type="file" name="photo" class="form-control-file" id="exampleFormControlFile1">
</div>
<div>
    <input type="hidden" name="album_id" value="{{old('album_id') ?? $album_id}}">
</div>