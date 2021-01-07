
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th width="30" style="text-align: center">#</th>
                        <th>標題</th>
                        <th width="70" style="text-align: center">內容</th>
                        <th width="100" style="text-align: center">功能</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr><td><a href="{{ route('doctors.announcements.create') }}">新增</a></td></tr>
                        @foreach($announcements as $announcement)
                            <tr>
                                <td style="text-align: center">{{ $announcement->id }}</td>
                                <td>{{ $announcement->title }}</td>
                                <td>{{ $announcement->content }}</td>
                                <td>
                                    <a href="{{ route('doctors.announcements.edit', $announcement->id) }}"><button class="btn btn-sm btn-primary" type="submit">編輯</button></a>
                                    /
                                    <form action="{{ route('doctors.announcements.destroy', $announcement->id) }}" method="POST" style="display:inline">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-sm btn-danger" type="submit">刪除</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

