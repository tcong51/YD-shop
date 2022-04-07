from django.db import models


# product_loaisanpham = {
#     (1,'Đồ ăn khô'),
#     (2, 'Đồ uống')
# }

# Create your models here.
import datetime
import os

def filepath(request, filename):
    old_filename = filename
    timeNow = datetime.datetime.now().strftime('%Y%m%d%H%M%S')
    filename ="%s%s", (timeNow, old_filename )
    return os.path.join('uploads/', filename)

# class Item(models.Model):
#     name = models.TextField(max_length=191)
#     price = models.TextField(max_length=50)
#     description = models.TextField(max_length=500, null=True)
#     models.ImageField(upload_to=filepath, null=True, blank=True)

class nhanvien(models.Model):
    maNV = models.AutoField(primary_key=True)
    tenNV = models.CharField(max_length=100, null=False)
    emailNV = models.CharField(max_length=500, null=True)
    password = models.CharField(max_length=8)
    sdtNV = models.CharField(max_length=11)
    diachiNV = models.CharField(max_length=500)
    tinhtrangVN = models.CharField(max_length=50)
    chucvuNV = models.CharField(max_length=50)
    Status = models.CharField(max_length=1)

    class Meta: 
        db_table='nhanvien'
        managed = False
    def __str__(seft):
        return f"{seft.maNV}, {seft.tenNV}, {seft.emailNV}, {seft.emailNV}, {seft.password}, {seft.sdtNV}, {seft.diachiNV},{seft.tinhtrangVN}, {seft.chucvuNV}, {seft.Status}"
    
class loaisanpham(models.Model):
    maloaiSP = models.AutoField(primary_key=True)
    tenloaiSP = models.CharField(max_length=100, null=False)

    class Meta:
        db_table='loaisanpham'
        managed = False
    def __str__(seft):
        return f"{seft.maloaiSP}, {seft.tenloaiSP}"

class sanpham(models.Model):
    maSP= models.AutoField(primary_key=True)
    tenSP = models.CharField(max_length=100, null=False)
    Hinh = models.ImageField(upload_to="assets/img/", height_field=None, width_field=None, max_length=100)
    giaSP = models.CharField(max_length=8)
    soluongSP = models.CharField(max_length=11)
    motaSP = models.TextField(max_length=1000)
    # loaisanpham = models.IntegerField(
    #     null=False, blank=False,
    #     choices=product_loaisanpham
    # )
    # maloaiSP = models.ForeignKey(loaisanpham, default= None, on_delete=models.CASCADE)
    maloaiSP = models.CharField(max_length=500)
    thuonghieu = models.CharField(max_length=50)
    quocgia = models.CharField(max_length=50)

    class Meta:
        db_table='sanpham'
        managed = False
    def __str__(seft):
        return f"{seft.maSP}, {seft.tenSP}, {seft.Hinh}, {seft.giaSP}, {seft.soluongSP}, {seft.motaSP}, {seft.maloaiSP},{seft.thuonghieu}, {seft.quocgia}"

class khachhan(models.Model):
    maKH= models.AutoField(primary_key=True)
    tenKH = models.CharField(max_length=100, null=False)
    ngaysinhKH = models.DateField(max_length=500, null=True)
    gioitinhKH = models.CharField(max_length=8)
    sdtKH = models.CharField(max_length=11)
    emailKH = models.CharField(max_length=500)
    diachiKH =models.CharField(max_length=500)

    class Meta:
        db_table='khachhan'
        managed = False
    def __str__(seft):
        return f"{seft.maKH}, {seft.tenKH}, {seft.ngaysinhKH}, {seft.gioitinhKH}, {seft.sdtKH}, {seft.emailKH}, {seft.diachiKH}"



class donhang(models.Model):
    maDH = models.AutoField(primary_key=True)
    maKH = models.CharField(max_length=10)
    # maKH = models.ForeignKey(khachhan, default= None, on_delete=models.CASCADE)
    maNV = models.CharField(max_length=10)
    # maNV = models.ForeignKey(nhanvien, default= None, on_delete=models.CASCADE)
    trangthaiDH = models.CharField(max_length=8)
    

    class Meta:
        db_table='donhang'
        managed = False
    def __str__(seft):
        return f"{seft.maDH}, {seft.maKH}, {seft.maNV}, {seft.trangthaiDH}"

class giohang(models.Model):
    STT= models.AutoField(primary_key=True)
    maKH = models.CharField(max_length=10)
    # maKH = models.ForeignKey(khachhan, default= None, on_delete=models.CASCADE)
    maSP = models.CharField(max_length=10)
    # maSP = models.ForeignKey(sanpham, default= None, on_delete=models.CASCADE)
    soluong = models.CharField(max_length=8)
    

    class Meta:
        db_table='giohang'
        managed = False
    def __str__(seft):
        return f"{seft.STT}, {seft.maKH}, {seft.maSP}, {seft.soluong}"

class thuonghieu(models.Model):
    maTH = models.AutoField(primary_key=True)
    tenTH = models.CharField(max_length=100, null=False)

    class Meta:
        db_table='thuonghieu'
        managed = False
    def __str__(seft):
        return f"{seft.maTH}, {seft.tenTH}"

class taikhoan(models.Model):
    id= models.AutoField(primary_key=True)
    email = models.CharField(max_length=100, null=False)
    password = models.CharField(max_length=100, null=False)
    tinhtrangTK = models.CharField(max_length=8)
    

    class Meta:
        db_table='taikhoan'
        managed = False
    def __str__(seft):
        return f"{seft.id}, {seft.email}, {seft.password}, {seft.tinhtrangTK}"

class binhluan(models.Model):
    maBL= models.AutoField(primary_key=True)
    id = models.CharField(max_length=10)
    # id = models.ForeignKey(taikhoan, default= None, on_delete=models.CASCADE)
    binhluan = models.TextField(max_length=500, null=False)
    thoigian = models.DateField(max_length=100)
    maSP = models.CharField(max_length=10)
    trangthaiBL = models.CharField(max_length=500, null=False)

    class Meta:
        db_table='binhluan'
        managed = False
    def __str__(seft):
        return f"{seft.maBL}, {seft.id}, {seft.binhluan}, {seft.thoigian},{seft.maSP}, {seft.trangthaiBL}"

class chitietdonhang(models.Model):
    STT= models.AutoField(primary_key=True)
    maKH = models.CharField(max_length=10)
    # maKH = models.ForeignKey(khachhan, default= None, on_delete=models.CASCADE)
    maSP = models.CharField(max_length=10)
    # maSP = models.ForeignKey(sanpham, default= None, on_delete=models.CASCADE)
    dongia = models.FloatField(max_length=100)
    soluong = models.CharField(max_length=10)
    HD = models.CharField(max_length=11, null=False)

    class Meta:
        db_table='chitietdonhang'
        managed = False
    def __str__(seft):
        return f"{seft.STT}, {seft.maKH}, {seft.maSP}, {seft.dongia}, {seft.soluong},{seft.HD}"
