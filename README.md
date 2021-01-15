系統擷取畫面
====
首頁
-------
* 提供登入、註冊（病人）、掛號、公告（新增、修改、刪除）、門診表（新增、修改）、診察（新增），建立按鈕可以連結到其他頁面
![image](https://imgur.com/aK99HO6.png)
![image](https://imgur.com/0AH0FTv.png)
![image](https://imgur.com/a6tdvhB.png)

會員註冊頁面
-------
* 可以透過註冊成為會員
![image](https://imgur.com/ihYL9M4.png)

會員登入頁面
-------
* 註冊後可以登入
![image](https://imgur.com/qRF62s0.png)

會員登入後頁面（預約掛號頁面）
-------
* 登入後可以預約、查詢、取消掛號（此頁面為預約掛號頁面）
![image](https://imgur.com/87PNKve.png)

會員查詢、取消掛號頁面
-------
* 會員可以查詢、取消掛號
![image](https://imgur.com/q812POs.png)

醫師登入後頁面（診察頁面）
-------
* 登入後可以診察、公告（新增、修改、刪除）、門診表（新增、修改）（此頁面為診察頁面）
![image](https://imgur.com/aPdgcZZ.png)

顯示公告頁面（醫師）
-------
* 顯示公告（醫師）
![image](https://imgur.com/DcHJcvS.png)

醫師新增公告頁面
-------
* 醫師可以新增公告
![image](https://imgur.com/aKiPyFw.png)

醫師編輯公告頁面
-------
* 醫師可以編輯公告
![image](https://imgur.com/XHbRCDP.png)

醫師新增門診表頁面
-------
* 醫師可以新增門診表
![image](https://imgur.com/A1nWgnr.png)

醫師修改門診表頁面
-------
* 醫師可以修改門診表
![image](https://imgur.com/pNgSUVg.png)

顯示醫師頁面（管理員）
-------
* 顯示醫師頁面（管理員）
![image](https://imgur.com/Gga6YOC.png)

管理員新增醫師頁面
-------
* 管理員可以新增醫師
![image](https://imgur.com/XajozBa.png)

管理員編輯醫師頁面
-------
* 管理員可以編輯醫師
![image](https://imgur.com/WxPXhGe.png)

系統的名稱及作用
====
攟麡診所醫療管理系統

* 為病人設計更容易掛號的系統，可以更加方便地進行掛號
* 醫師可利用此系統從病人的掛號當中進行看診，減少填寫診查紀錄的時間

系統的主要功能
====
前台
-------
* 首頁 [3A732027白晏彰](https://github.com/3a732027)
    * Route::get('/', function () { return view('welcome'); });

* 登入後頁面 [3A732027白晏彰](https://github.com/3a732027)
    * Route::prefix('/patients/appointments')->group(function () {
           Route::get('/create', [AppointmentController::class, 'create'])->name('patients.appointments.create'); //掛號頁面
           Route::post('/check/{appointment}', [AppointmentController::class, 'store'])->name('patients.appointments.store'); //新增掛號
      });
      
* 查詢掛號頁面 [3A732027白晏彰](https://github.com/3a732027) 
      * Route::prefix('/patients/appointments')->group(function () {
           Route::get('/records', [AppointmentController::class, 'index'])->name('patients.appointments.record'); //查詢掛號
           Route::delete('/appointments/{id}', [AppointmentController::class, 'destroy'])->name('patients.appointments.destroy'); //取消掛號
        });
      
後台
====
醫師
-------   
* 診察頁面 [3A732050林駿綦](https://github.com/3a732050)
      * Route::prefix('doctors')->group(function () {
           Route::get('/treatments', [TreatmentController::class, 'index'])->name('doctors.treatments.index');
        });
      
* 公告頁面 [3A732027白晏彰](https://github.com/3a732027)
       * Route::prefix('doctors')->group(function () {
             Route::get('/announcements', [AnnouncementController::class, 'index'])->name('doctors.announcements.index'); //公告頁面
             Route::get('/announcements/create', [AnnouncementController::class, 'create'])->name('doctors.announcements.create'); //新增公告頁面
             Route::post('/announcements', [AnnouncementController::class, 'store'])->name('doctors.announcements.store'); //儲存公告
             Route::get('/announcements/{announcement}/edit', [AnnouncementController::class, 'edit'])->name('doctors.announcements.edit'); //編輯公告頁面
             Route::patch('/announcements/{announcement}', [AnnouncementController::class, 'update'])->name('doctors.announcements.update'); //更新公告
             Route::delete('/announcements/{announcement}', [AnnouncementController::class, 'destroy'])->name('doctors.announcements.destroy'); //刪除公告
         });
      
* 門診表頁面 [3A732027白晏彰](https://github.com/3a732027) [3A732050林駿綦](https://github.com/3a732050)
      * Route::prefix('doctors')->group(function () {
            Route::get('/outpatients', [OutpatientController::class, 'index'])->name('doctors.outpatients.index'); //門診表頁面
            Route::get('/outpatients/create', [OutpatientController::class, 'create'])->name('doctors.outpatients.create'); //新增門診表頁面
            Route::post('outpatients', [OutpatientController::class, 'store'])->name('doctors.outpatients.store'); //儲存門診表
            Route::get('/outpatients/edit', [OutpatientController::class, 'edit'])->name('doctors.outpatients.edit'); //編輯門診表頁面
            Route::patch('/outpatients/{outpatient}', [OutpatientController::class, 'update'])->name('doctors.outpatients.update'); //更新門診表
        });
      
管理員
-------        
* 管理員頁面 [3A732050林駿綦](https://github.com/3a732050) 
      * Route::prefix('admin')->group(function () {
           Route::get('/doctors', [AdminDoctorController::class, 'index'])->name('admin.doctors.index'); //醫師頁面
           Route::get('/doctors/create', [AdminDoctorController::class, 'create'])->name('admin.doctors.create'); //新增醫師頁面
           Route::post('/doctors', [AdminDoctorController::class, 'store'])->name('admin.doctors.store'); //儲存醫師
           Route::get('/doctors/{doctor}/edit', [AdminDoctorController::class, 'edit'])->name('admin.doctors.edit'); //編輯醫師頁面
           Route::patch('/doctors/{doctor}', [AdminDoctorController::class, 'update'])->name('admin.doctors.update'); //更新醫師
       });
      
ERD
-------      
![image](https://imgur.com/Fyf9Yfn.png)    
      
關聯式綱要圖
-------
![image](https://imgur.com/9kfZbxV.png)   
      
資料表欄位設計
-------
* 使用者

![image](https://imgur.com/9yjzavR.png)

* 門診表

![image](https://imgur.com/t5gm87L.png)

* 公告

![image](https://imgur.com/MLrCanB.png)

* 診察

![image](https://imgur.com/t3TSG6g.png)

* 掛號

![image](https://imgur.com/fPZL63a.png)


初始專案與DB負責的同學
====
* 初始專案 [3A732027白晏彰](https://github.com/3a732027)
* 資料庫及資料表建立、資料表關連 [3A732027白晏彰](https://github.com/3a732027) [3A732050林駿綦](https://github.com/3a732050)

額外使用的套件或樣板
====
* 前台樣板 [health-lab](https://www.free-css.com/free-css-templates/page248/health-lab)

採用選單、首頁格式

* 後台  [Laravel-Dashboard](https://jetstream.laravel.com/1.x/installation.html)

採用其版面和功能

系統使用者測試帳號
====
前台-會員
-------
* 帳號:L123456789
* 密碼:00000000

後台-醫師
-------
* 帳號:doctor001
* 密碼:00000000
-------
* 帳號:doctor002
* 密碼:00000000
-------
* 帳號:doctor003
* 密碼:00000000

後台-管理者
-------
* 帳號:admin
* 密碼:00000000

測試檔案存放位置
-------
* storage下->sql->final05.sql

系統開發人員與工作分配
====
[3A732027白晏彰](https://github.com/3a732027)
-------
* 網站首頁(會員登入前頁面)
* 會員頁面(病人登入後頁面)
* 病人預約掛號(病人登入後)
* 病人查詢掛號(病人登入後)
* 公告頁面(醫師登入後頁面)
* 醫師新增公告(醫師登入後)
* 醫師修改公告(醫師登入後)
* 醫師刪除公告(醫師登入後)
* 門診表頁面(醫師登入後頁面)
* 醫師新增門診表(醫師登入後)
* 醫師修改門診表(醫師登入後)
* 系統測試
* readme編寫和排版

[3A732050林駿綦](https://github.com/3a732050)
-------
* 管理員頁面(管理員登入後頁面)
* 管理員新增醫師(管理員登入後)
* 管理員修改醫師(管理員登入後)
* 管理員刪除醫師(管理員登入後)
* 門診表頁面(醫師登入後頁面)
* 醫師新增門診表(醫師登入後)
* 醫師修改門診表(醫師登入後)
* 診察頁面
* 系統測試
* readme編寫和排版
