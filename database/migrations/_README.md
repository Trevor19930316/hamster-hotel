# Migration Rule

## 命名規則

### 建立資料表
> create_**[table_name]**_table
>
> ex : php artisan make:migration create_articles_table

### 新增欄位

### 新增索引 or nullable

---

## 執行命令

### 建立資料表
    php artisan make:migration create_[table_name]_table

### 建立尚未執行的 migrations
    php artisan migrate
    
    php artisan migrate --env=testing

### 移除上一次建立的 migrations
    php artisan migrate:rollback

### 移除所有 migrations
    php artisan migrate:reset

### 移除(Drop)表格並重新建立所有 migrations
    php artisan migrate:fresh
    
### 清除(Reset)表格並重新建立所有 migrations
    php artisan migrate:refresh
