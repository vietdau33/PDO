`Vì trình độ non kém nên chưa có autoload prs-4 và chỉ mới hỗ trợ MySQL`
##Used
1. require `pdo.php`
2. config thông tin kết nối db ở file `config.php`
3. tạo new class `$db = new PdoConnect();`
##Lưu ý
* Phải setTable trước khi thực hiện truy vấn
    + `$db->setTable('table_used');`
##List function
1. setDatabase($nameDatabase)
    + Tham số: tên database
    + Dùng để thay đổi cơ sở dữ liệu
2. setTable($nameTable)
    + Tham số: tên table
    + Dùng để thay đổi bảng đang sử dụng
3. all(array $order = [])
    + Tham số: mảng các giá trị cần order
    + Ex: `$db->all(['id' => 'DESC']);`
    + Trả về toàn bộ bản ghi của table đang sử dụng
4. get(array $where, $limit = null, array $order = [])
    + Tham số gồm:
        + Mảng các giá trị cần where
        + số lượng limit (dạng string)
        + Mảng order như ở mục 3
    + Ex:
        + `$where = ['id' => 3, 'username' => 'admin']`
        + `$limit = '3'`
        + `$limit = '4, 6'`
        + `$order = ['id' => 'ASC']`
    + Trả về những bản ghi phù hợp với điều kiện where
5. one(array $where)
    + Tham số mảng các giá trị where
    + Trả về bản ghi đầu tiên tìm được. Trả về mảng rỗng nếu không tìm được
6. searchWithCodition($columnName, $codition, $value, $order)
    + Trả về các record where với $codition truyền vào
    + $codition có thể là IN, LIKE, BETWEEN, ...
7. update(array $updates, array $where)
8. delete(array $arrs)
    + Hạn chế: chỉ đang xóa dc 1 row 1 lần gọi
    + `$arrs = ['id' => 13]`
9. insert(array $arrs)
    + mảng vào có dạng `$columnName => $value`
10. query($sql)
    + thực hiện 1 câu lệnh sql string và trả về kết quả