@extends('adminPanel.layouts.app')

@section('content')
    <!-- /header -->
    <hr class="noscreen"/>
    <!-- Columns -->
    <div id="cols" class="box">
        <hr class="noscreen"/>
        <!-- Content (Right Column) -->
        <div id="content" class="box">
            <!-- Tabs -->
            <h3 class="tit">Таблиці</h3>
            <div class="tabs box">
                <ul>
                    <li><a href="#tab01"><span>Альбоми</span></a></li>
                    <li><a href="#tab02"><span>Фотографії</span></a></li>
                    <li><a href="#tab03"><span>Відгуки</span></a></li>
                    <li><a href="#tab04"><span>Питання</span></a></li>
                    <li><a href="#tab05"><span>Новини</span></a></li>
                    <li><a href="#tab06"><span>Співробітники</span></a></li>
                    <li><a href="#tab07"><span>Послуги</span></a></li>
                </ul>
            </div>
            <!-- /tabs -->
            <!-- Tab01 -->
            <div id="tab01">
                <table>
                    <tr>
                        <th>Назва</th>
                        <th>Опис</th>
                        <th>Фотографія</th>
                        <th>Дата створення</th>
                        <th>Дата зміни</th>
                        <th>Дії</th>
                    </tr>
                    @foreach($albums as $album)
                        <tr>
                            <td>{{$album->name}}</td>
                            <td>{{$album->description}}</td>
                            <td><img width="100px" alt="Меблі" src="/storage/album_covers/{{$album->cover_image}}"></td>
                            <td>{{$album->created_at}}</td>
                            <td>{{$album->updated_at}}</td>
                            <td style="display: flex">
                                <div>
                                    <a href="{{route('albums.edit', ['album' => $album->id])}}">
                                        <button style="margin-right: 5px">Редагувати</button>
                                    </a></div>
                                <form action="{{route('albums.destroy', ['album' => $album->id])}}"
                                      method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit">Видалити</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <!-- /tab01 -->
            <!-- Tab02 -->
            <div id="tab02">
                <table>
                    <tr>
                        <th>Назва</th>
                        <th>Опис</th>
                        <th>Фотографія</th>
                        <th>Назва альбому</th>
                        <th>Дата створення</th>
                        <th>Дата зміни</th>
                        <th>Дії</th>
                    </tr>
                    @foreach($photos as $photo)
                        <tr>
                            <td>{{$photo->title}}</td>
                            <td>{{$photo->description}}</td>
                            <td><img width="100px" alt="{{$photo->name}}" src="storage/photo/{{$photo->image}}"></td>
                            <td>{{$photo->album->name}}</td>
                            <td>{{$photo->created_at}}</td>
                            <td>{{$photo->updated_at}}</td>
                            <td>
                                <div>
                                    <a href="{{route('photos.edit', ['photo' => $photo->id])}}"
                                       class="input-submit">Редагувати</a></div>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <!-- /tab02 -->
            <!-- Tab03 -->
            <div id="tab03">
                <table>
                    <tr>
                        <th>Ім'я</th>
                        <th>Коментар</th>
                        <th>Фотографія</th>
                        <th>Дії</th>
                    </tr>
                    @foreach($comments as $comment)
                        <tr>
                            <td>{{$comment->name}}</td>
                            <td>{{$comment->description}}</td>
                            <td><img height="100px" src="storage/images/{{$comment->image}}"></td>
                            <td>
                                <div>
                                    <a href="{{route('comment.edit', ['comment' => $comment->id])}}"
                                       class="input-submit">Редагувати</a></div>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <!-- /tab03 -->
            <!-- Tab04 -->
            <div id="tab04">
                <table>
                    <tr>
                        <th>Питання</th>
                        <th>Відповідь</th>
                        <th>Дії</th>
                    </tr>
                    @foreach($questions as $question)
                        <tr>
                            <td>{{$question->body}}</td>
                            <td>{{$question->answer}}</td>
                            <td style="display: flex">
                                <div>
                                    <a href="{{route('question.edit', ['$question' => $question->id])}}">
                                        <button style="margin-right: 5px">Редагувати</button>
                                    </a></div>
                                <form action="{{route('question.destroy', ['$question' => $question->id])}}"
                                      method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit">Видалити</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <!-- /tab04 -->
            <!-- Tab05 -->
            <div id="tab05">
                <table>
                    <tr>
                        <th>Назва</th>
                        <th>Тіло</th>
                        <th>Фотографія</th>
                        <th>Дії</th>
                    </tr>
                    @foreach($blogs as $blog)
                        <tr>
                            <td>{{$blog->title}}</td>
                            <td>{{$blog->body}}</td>
                            <td><img height="100px" src="storage/images/{{$blog->image}}"></td>
                            <td>
                                <div>
                                    <a href="{{route('blog.edit', ['blog' => $blog->id])}}"
                                       class="input-submit">Редагувати</a></div>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <div id="tab06">
                <table>
                    <tr>
                        <th>Ім'я</th>
                        <th>Посада</th>
                        <th>Фотографія</th>
                        <th>Facebook</th>
                        <th>Instagram</th>
                        <th>Twitter</th>
                        <th>Action</th>
                    </tr>
                    @foreach($employees as $employee)
                        <tr>
                            <td>{{$employee->name}}</td>
                            <td>{{$employee->position}}</td>
                            <td><img height="100px" src="storage/images/{{$employee->image}}"></td>
                            <td>{{$employee->facebook}}</td>
                            <td>{{$employee->instagram}}</td>
                            <td>{{$employee->twitter}}</td>
                            <td>
                                <div>
                                    <a href="{{route('employee.edit', ['employee' => $employee->id])}}"
                                       class="input-submit">Редагувати</a></div>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <div id="tab07">
                <table>
                    <tr>
                        <th>Назва послуги</th>
                        <th>Опис послуги</th>
                    </tr>
                    @foreach($services as $service)
                        <tr>
                            <td>{{$service->name}}</td>
                            <td>{{$service->description}}</td>
                            <td>
                                <div>
                                    <a href="{{route('service.edit', ['service' => $service->id])}}"
                                       class="input-submit">Редагувати</a></div>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <!-- /content -->
    </div>
    <!-- /cols -->
    <hr class="noscreen"/>
@endsection
