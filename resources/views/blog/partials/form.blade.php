<fieldset>
    <legend>Введіть дані</legend>
    <table class="nostyle">
        <tr>
            <td style="width:170px;"><label for="exampleInputName">Назва новини</label></td>
            <td>
                <div class="form-group">
                    <input type="text"
                           class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}"
                           name="title"
                           id="title"
                           aria-describedby="title"
                           placeholder="Введіть назву новини"
                           value="{{old('title') ?? $blog->title}}"
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
            <td class="va-top"><label for="validationTextarea">Опис новини</label></td>
            <td>
                <div class="form-group">
                                    <textarea id="mytextarea" cols="75" rows="12"
                                              class="input-text form-control {{$errors->has('body') ? 'is-invalid' : ''}}"
                                              name="body"
                                              placeholder="Напиши текст новини"
                                              required>
                                              {{old('body') ?? $blog->body}}
                                    </textarea>
                    @if($errors->has('body'))
                        <div class="invalid-feedback">
                            {{$errors->get('body')[0]}}
                        </div>
                    @endif
                </div>
            </td>
        </tr>
        <tr>
            <td><label for="exampleFormControlFile1">Виберіть
                    файл</label> {{old('image') ?? $blog->image}}
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
