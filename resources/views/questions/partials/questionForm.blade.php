<fieldset>
    <legend>Введіть дані</legend>
    <table class="nostyle">
        <tr>
            <td style="width:170px;"><label for="exampleInputName">Питання</label></td>
            <td>
                <div class="form-group">
                    <input type="text"
                           class="form-control {{$errors->has('body') ? 'is-invalid' : ''}}"
                           name="body"
                           id="body"
                           aria-describedby="body"
                           placeholder="Введіть питання"
                           value="{{old('body') ?? $question->body}}"
                           required>
                    @if($errors->has('body'))
                        <div class="invalid-feedback">
                            {{$errors->get('body')[0]}}
                        </div>
                    @endif
                </div>
            </td>
        </tr>
        <tr>
            <td class="va-top"><label for="validationTextarea">Відповідь</label></td>
            <td>
                <div class="form-group">
                                    <textarea cols="75" rows="7"
                                              class="input-text form-control {{$errors->has('answer') ? 'is-invalid' : ''}}"
                                              name="answer"
                                              placeholder="Напиши відповіь на питання"
                                              required>
                                              {{old('body') ?? $question->answer}}
                                    </textarea>
                    @if($errors->has('answer'))
                        <div class="invalid-feedback">
                            {{$errors->get('answer')[0]}}
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
