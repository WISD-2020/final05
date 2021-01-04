<form action="{{ route('admin.doctors.update', $doctor->id) }}" method="POST" role="form">
    @method('PATCH')
    @csrf

    <div class="form-group">
        <label for="name">姓名：</label>
        <input name="name" class="form-control" placeholder="請輸入姓名" value="{{ old('name', $doctor->name) }}">
    </div>

    <div class="form-group">
        <label for="account">帳號：</label>
        <input name="account" class="form-control" placeholder="請輸入帳號" value="{{ old('account', $doctor->account) }}">
    </div>

    <div class="text-right">
        <button type="submit" class="btn btn-success">更新</button>
    </div>

</form>
