<fieldset>
    <legend>Введіть дані</legend>
    <table class="nostyle">
        <tr>
            <td style="width:170px;"><label for="exampleInputName">Назва фотографії</label></td>
            <td>
                <div class="form-group">
                    <input type="text"
                           class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}"
                           name="title"
                           id="title"
                           aria-describedby="name"
                           placeholder="Введіть назву фотографії"
                           value="{{old('title') ?? $photo->title}}"
                           required>
                    @if($errors->has('title'))
                        <div class="invalid-feedback">
                            {{$errors->get('title')[0]}}
                        </div>
                    @endif
                </div>
            </td>
        </tr>
        <tr>
            <td class="va-top"><label for="validationTextarea">Опис фотографії</label></td>
            <td>
                <div class="form-group">
                                    <textarea cols="75" rows="7"
                                              class="input-text form-control {{$errors->has('description') ? 'is-invalid' : ''}}"
                                              name="description"
                                              placeholder="Напиши опис до свого альбому"
                                              required>
                                              {{old('description') ?? $photo->description}}
                                    </textarea>
                    @if($errors->has('description'))
                        <div class="invalid-feedback">
                            {{$errors->get('description')[0]}}
                        </div>
                    @endif
                </div>
            </td>
        </tr>
        <tr>
            <td style="width:170px;"><label for="exampleInputName">Виберіть альбом</label></td>
            <td>
                <div class="form-group">
                    <label for="album_id"><select type="text"
                                                  class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}"
                                                  name="album_id"
                                                  id="album_id"
                                                  required>
                            @foreach($albums as $album)
                                <option value="{{$album->id}}">{{$album->name}}</option>
                            @endforeach
                        </select>
                    </label>
                    @if($errors->has('album_id'))
                        <div class="invalid-feedback">
                            {{$errors->get('album_id')[0]}}
                        </div>
                    @endif
                </div>
            </td>
        </tr>
        <tr>
            <td><label for="exampleFormControlFile1">Виберіть
                    файл</label> {{old('image') ?? $photo->image}}
            </td>
            <td>
                <div class="form-group">
                    <input type="file" name="image" class="form-control-file"
                           id="exampleFormControlFile1">
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2" class="t-right"><input type="submit" class="input-submit" value="Готово"/>
            </td>
        </tr>
    </table>
</fieldset>
