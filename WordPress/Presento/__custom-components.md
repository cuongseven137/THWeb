## CÁC THÀNH PHẦN TÙY BIẾN WORDPRESS


**Plugin** => ok
    - https://wppb.me/
    - https://github.com/DevinVinson/WordPress-Plugin-Boilerplate 


**Widget**
    - https://www.wp-hasty.com/tools/wordpress-widget-generator/ 


**Custom Post** => ok
    - Tạo loại dữ liệu mới (và các trường dữ liệu mở rộng)
        + Định nghĩa ra kiểu dữ liệu mới (lưu được trong DB) 
        + Quản trị (liệt kê, thêm, bớt, sửa record nó) Backend
        + Hiển thị nội dung ra được bên ngoài Frontend
        
    - Các cách
        + Dùng plugin
        + Dùng code (tạo trong file functions.php / plugin )

    - https://www.wp-hasty.com/tools/wordpress-custom-post-type-generator/
    - Tạo custom-post template


**Custom Taxonomy** => ok
    - https://www.wp-hasty.com/tools/wordpress-taxonomy-generator/ 
    - Tạo taxonomy template
    - Tạo Query Loop lấy data https://www.wp-hasty.com/tools/wordpress-wp-query-loop-generator/ 
    - Tax Query https://www.wp-hasty.com/tools/wordpress-tax-query-generator/


**Metabox** => ok
    - https://jeremyhixon.com/tool/wordpress-meta-box-generator/ 
    - http://tools.marketport.site/generators/metabox-generator/



- Table (bảng chứa các record nội dung dữ liệu) => Custom Post (register_post_type)
+ CatID
+ KeyID
+ PostID
+ Title
+ Date,...

+ Custom Fields =>? MetaBox / Custom Fields


- Table (taxonomy = Category) => Custom Taxonomy (register_taxonomy)
+ CatID
+ Category Name    

- Table (taxnomy = Keywords) => Custom Taxonomy (register_taxonomy)
+ KeyWordID
+ Keywords..