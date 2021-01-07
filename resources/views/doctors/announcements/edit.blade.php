<div class="row">
    <div class="col-lg-12">

            <form action="{{ route('doctors.announcements.update', $announcements->id) }}" method="POST" role="form">
                @method('PATCH')
                @csrf

                <div class="form-group">

                    <label for="title">標題：</label>
                    <input name="title" class="form-control" placeholder="請輸入文章標題" value="{{ old('title', $announcements->title) }}">
                </div>

                <div class="form-group">

                    <label for="content">內容：</label>
                    <textarea id="content" name="content" class="form-control" rows="10">{{ old('content', $announcements->content) }}</textarea>
                </div>

                <div class="text-right">
                    <button type="submit" class="btn btn-success">更新</button>
                </div>

            </form>
    </div>
</div>
