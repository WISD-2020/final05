
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
                                    <a href="{{ route('doctors.announcements.edit', $announcement->id) }}">編輯</a>
                                    /
                                    <a href="#">刪除</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

