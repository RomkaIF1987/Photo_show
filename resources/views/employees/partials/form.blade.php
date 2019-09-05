<fieldset>
    <legend>Введіть дані</legend>
    <table class="nostyle">
        <tr>
            <td style="width:170px;"><label for="exampleInputName">Ім'я співробітника</label></td>
            <td>
                <div class="form-group">
                    <input type="text"
                           class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}"
                           name="name"
                           id="name"
                           aria-describedby="name"
                           placeholder="Ім'я співробітника"
                           value="{{old('name') ?? $employee->name}}"
                           required>
                    @if($errors->has('name'))
                        <div class="invalid-feedback">
                            {{$errors->get('name')[0]}}
                        </div>
                    @endif
                </div>
            </td>
        </tr>
        <tr>
            <td style="width:170px;"><label for="exampleInputName">Посада</label></td>
            <td>
                <div class="form-group">
                    <input type="text"
                           class="form-control {{$errors->has('position') ? 'is-invalid' : ''}}"
                           name="position"
                           id="position"
                           aria-describedby="position"
                           placeholder="Посада"
                           value="{{old('position') ?? $employee->position}}"
                           required>
                    @if($errors->has('position'))
                        <div class="invalid-feedback">
                            {{$errors->get('position')[0]}}
                        </div>
                    @endif
                </div>
            </td>
        </tr>
        <tr>
            <td><label for="exampleFormControlFile1">Виберіть
                    фотографію співробітника</label> {{old('image') ?? $employee->image}}
            </td>
            <td>
                <div class="form-group">
                    <input type="file" name="image" class="form-control-file"
                           id="exampleFormControlFile1">
                </div>
            </td>
        </tr>
        <tr>
            <td style="width:170px;"><label for="exampleInputName">Facebook</label></td>
            <td>
                <div class="form-group">
                    <input type="text"
                           class="form-control {{$errors->has('facebook') ? 'is-invalid' : ''}}"
                           name="facebook"
                           id="facebook"
                           aria-describedby="facebook"
                           placeholder="Посилання на facebook"
                           value="{{old('facebook') ?? $employee->facebook}}">
                    @if($errors->has('facebook'))
                        <div class="invalid-feedback">
                            {{$errors->get('facebook')[0]}}
                        </div>
                    @endif
                </div>
            </td>
        </tr>
        <tr>
            <td style="width:170px;"><label for="exampleInputName">Instagram</label></td>
            <td>
                <div class="form-group">
                    <input type="text"
                           class="form-control {{$errors->has('instagram') ? 'is-invalid' : ''}}"
                           name="instagram"
                           id="instagram"
                           aria-describedby="instagram"
                           placeholder="Посилання на instagram"
                           value="{{old('instagram') ?? $employee->instagram}}">
                    @if($errors->has('instagram'))
                        <div class="invalid-feedback">
                            {{$errors->get('instagram')[0]}}
                        </div>
                    @endif
                </div>
            </td>
        </tr>
        <tr>
            <td style="width:170px;"><label for="exampleInputName">Twitter</label></td>
            <td>
                <div class="form-group">
                    <input type="text"
                           class="form-control {{$errors->has('twitter') ? 'is-invalid' : ''}}"
                           name="twitter"
                           id="twitter"
                           aria-describedby="twitter"
                           placeholder="Посилання на twitter"
                           value="{{old('twitter') ?? $employee->twitter}}">
                    @if($errors->has('twitter'))
                        <div class="invalid-twitter">
                            {{$errors->get('twitter')[0]}}
                        </div>
                    @endif
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2" class="t-right"><input type="submit" class="input-submit" value="Готово"/>
            </td>
        </tr>
    </table>
</fieldset>
