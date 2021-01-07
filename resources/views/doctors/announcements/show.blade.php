
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <a href="{{ route('doctors.announcements.create') }}">新增</a>
                <table width="600" class="table table-bordered table-hover" border="1">
                    <thead>
                    <tr style="text-align: center">
                        <th width="100">張貼醫師</th>
                        <th>標題</th>
                        <th width="70">內容</th>
                        <th width="100">功能</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($announcements as $announcement)
                            <tr style="text-align: center">
                                @foreach($users as $user)
                                    @if($announcement->user_id == $user->id)
                                        <td>{{ $user->name }}</td>

                                    @endif

                                @endforeach
                                <td>{{ $announcement->title }}</td>
                                <td>{{ $announcement->content }}</td>
                                <td>
                                    @if ($announcement->user_id == $auth_id)
                                        <a href="{{ route('doctors.announcements.edit', $announcement->id) }}"><button class="btn btn-sm btn-primary" type="submit">編輯</button></a>
                                        /
                                        <form action="{{ route('doctors.announcements.destroy', $announcement->id) }}" method="POST" style="display:inline">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-sm btn-danger" type="submit">刪除</button>
                                        </form>
                                    @else
                                        <a href="{{ route('doctors.announcements.edit', $announcement->id) }}"><button class="btn btn-sm btn-primary" type="submit" disabled>編輯</button></a>
                                        /
                                        <form action="{{ route('doctors.announcements.destroy', $announcement->id) }}" method="POST" style="display:inline">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-sm btn-danger" type="submit" disabled>刪除</button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


