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
                    <li><a href="#tab04"><span>Новини</span></a></li>
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
                            <td>
                                <div>
                                    <a href="{{route('albums.edit', ['album' => $album->id])}}"
                                       class="input-submit">Редагувати</a></div>
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
                            <td>#</td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <!-- /tab03 -->
            <!-- Tab04 -->
            <div id="tab04">
                <table>
                    <tr>
                        <th>Lorem ipsum</th>
                        <th>Lorem ipsum</th>
                        <th>Lorem ipsum</th>
                        <th>Lorem ipsum</th>
                        <th>Lorem ipsum</th>
                    </tr>
                    <tr>
                        <td>Lorem ipsum</td>
                        <td>Lorem ipsum</td>
                        <td>Lorem ipsum</td>
                        <td>Lorem ipsum</td>
                        <td>Lorem ipsum</td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- /content -->
    </div>
    <!-- /cols -->
    <hr class="noscreen"/>
@endsection
