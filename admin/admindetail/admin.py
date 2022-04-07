from django.contrib import admin
# from .models import Item
from .models import nhanvien
from .models import loaisanpham
from .models import sanpham
from .models import khachhan
from .models import donhang
from .models import giohang
from .models import thuonghieu
from .models import taikhoan
from .models import binhluan
from .models import chitietdonhang

# Register your models here.
class nhanvienAdmin(admin.ModelAdmin):
    list_display =('maNV','tenNV','emailNV','password','sdtNV','diachiNV','tinhtrangVN','chucvuNV','Status')
    search_fields =['tenNV']
    list_filter =('maNV','tenNV','emailNV','password','sdtNV','diachiNV','tinhtrangVN','chucvuNV','Status')

class loaisanphamAdmin(admin.ModelAdmin):
    list_display =('maloaiSP','tenloaiSP')
    search_fields =['tenloaiSP']
    list_filter =('maloaiSP','tenloaiSP')

class sanphamAdmin(admin.ModelAdmin):
    list_display =('maSP','tenSP','Hinh','giaSP','soluongSP','motaSP','maloaiSP','thuonghieu','quocgia')
    search_fields =['tenSP']
    list_filter =('maSP','tenSP','Hinh','giaSP','soluongSP','motaSP','maloaiSP','thuonghieu','quocgia')

class khachhanAdmin(admin.ModelAdmin):
    list_display =('maKH','tenKH','ngaysinhKH','gioitinhKH','sdtKH','emailKH','diachiKH')
    search_fields =['tenKH']
    list_filter =('maKH','tenKH','ngaysinhKH','gioitinhKH','sdtKH','emailKH','diachiKH')

class donhangAdmin(admin.ModelAdmin):
    list_display =('maDH','maKH','maNV','trangthaiDH')
    search_fields =['maDH']
    list_filter =('maDH','maKH','maNV','trangthaiDH')

class giohangAdmin(admin.ModelAdmin):
    list_display =('STT','maKH','maSP','soluong')
    search_fields =['maSP','maKH']
    list_filter =('STT','maKH','maSP','soluong')

class thuonghieuAdmin(admin.ModelAdmin):
    list_display =('maTH','tenTH')
    search_fields =['tenTH']
    list_filter =('maTH','tenTH')

class taikhoanAdmin(admin.ModelAdmin):
    list_display =('id','email','password','tinhtrangTK')
    search_fields =['id','email']
    list_filter =('id','email','password','tinhtrangTK')

class binhluanAdmin(admin.ModelAdmin):
    list_display =('maBL','id','binhluan','thoigian','maSP','trangthaiBL')
    search_fields =['maBL','id', 'maSP']
    list_filter =('maBL','id','binhluan','thoigian','maSP','trangthaiBL')

class chitietdonhangAdmin(admin.ModelAdmin):
    list_display =('STT','maKH','maSP','dongia','soluong','HD')
    search_fields =['maKH','maSP', 'dongia']
    list_filter =('STT','maKH','maSP','dongia','soluong','HD')

# admin.site.register(Item)
admin.site.register(nhanvien,nhanvienAdmin)
admin.site.register(loaisanpham, loaisanphamAdmin)
admin.site.register(sanpham,sanphamAdmin)
admin.site.register(khachhan,khachhanAdmin)
admin.site.register(donhang,donhangAdmin)
admin.site.register(giohang,giohangAdmin)
admin.site.register(thuonghieu,thuonghieuAdmin)
admin.site.register(taikhoan,taikhoanAdmin)
admin.site.register(binhluan,binhluanAdmin)
admin.site.register(chitietdonhang,chitietdonhangAdmin)