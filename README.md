<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Thông tin
ScoresManage là dự án web quản lý hệ thống tra cứu điểm cho Đại học công nghệ-ĐHQGHN.
Có các chức năng như tra cứu điểm thi theo các thông tin, up điểm thi lên hệ thống, quản lý thông tin về trường, lớp, khóa học, sinh viên...

## Công nghệ
- Laravel Framework 5.4.36
- PHP 5.6.28
- Bootstrap 4.0
- Jquery 3.3.1

## Design
- Thiết kế tổng quan.  
    https://docs.google.com/spreadsheets/d/1l8sLmUi6oPVm0-hgVi3363nVLD0x-Ef5qUZRkeG8uik/edit?usp=sharing
- Front-end image  
    ...
- Input  
    ...
## Nhóm phát triển

Danh sách thành viên :

| stt   |    thành viên     | vai trò   | ghi chú       |
|:-----:|:----------------: |---------  |-------------  |
| 1     | Đặng Danh Phương  | BACK-END  |-------------  |
| 2     | Lê Hồng Phúc      | FRONT-END |-------------  |
| 3     | Phạm Văn Oánh     | BACK-END  |-------------  |

## Hướng dẫn
- Clone về repo của thư mục gốc apache htdocs của Xampp hoặc www của Appserv.  
    git clone https://github.com/YangLongPH/ScoresManage.git  
    Với SSH key:  
    git clone git@github.com:YangLongPH/ScoresManage.git  
- Chạy lệnh sau để build hệ thống  
    +Windows:  
        composer install  
    +Linux:  
        sudo composer install  
- Tạo file .env từ .env.example  
    rename .env.example -> .env. = .env file  
- Tạo Database trên http://localhost/phpmyadmin  
    database name: scoresmanage 
- Tạo table Database  
    php artisan migrate  
- Tạo seed Database  
    php artisan db:seed  
## Fix error
- RuntimeException: The only supported ciphers are AES-128-CBC and AES-256-CBC with the correct key lengths.  
    php artisan key:generate  
## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
