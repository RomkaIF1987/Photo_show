<fieldset>
    <legend>Введіть дані</legend>
    <table class="nostyle">
        <tr>
            <td style="width:170px;"><label for="exampleInputName">Назва послуги</label></td>
            <td>
                <div class="form-group">
                    <input type="text"
                           class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}"
                           name="name"
                           id="name"
                           aria-describedby="name"
                           placeholder="Назва послуги"
                           value="{{old('name') ?? $service->name}}"
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
            <td class="va-top"><label for="validationTextarea">Опис послуги</label></td>
            <td>
                <div class="form-group">
                                    <textarea cols="75" rows="7"
                                              class="input-text form-control {{$errors->has('description') ? 'is-invalid' : ''}}"
                                              name="description"
                                              placeholder="Напиши опис до свого альбому"
                                              required>
                                              {{old('description') ?? $service->description}}
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
            <td colspan="2" class="t-right"><input type="submit" class="input-submit" value="Готово"/>
            </td>
        </tr>
    </table>
</fieldset>
