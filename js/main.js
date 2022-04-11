// hiển thi form đăng nhập
function showModalLogin() {
    document.getElementById('showModal').style.display = 'flex';
    document.getElementById('showModalLogin').style.display = 'block';
    // document.getElementById('showModalnotificationPay').style.display = 'none';
    // document.getElementById('showModalnotificationCart').style.display = 'none';
    // document.getElementById('showModalnotificationPay').style.display = 'none';
    
}
function closeModalLogin() {
    document.getElementById('showModal').style.display = 'none';
    document.getElementById('showModalLogin').style.display = 'none';
}

//  hiển thị from đăng ký
function showModalregister() {
    document.getElementById('showModalnotificationCart').style.display = 'none';
    document.getElementById('showModal').style.display = 'flex';
    document.getElementById('showModalregister').style.display = 'block';
}

function closeModalregister() {
    document.getElementById('showModal').style.display = 'none';
    document.getElementById('showModalregister').style.display = 'none';
}

// hiểu thị form đăng nhập từ form đăng ký
function showModalLoginInRegister() {
    document.getElementById('showModalregister').style.display = 'none';
    document.getElementById('showModalLogin').style.display = 'block';
}

// hiển thị form đăng ký từ form đăng nhập
function showModalRegisterInLogin() {
    document.getElementById('showModalLogin').style.display = 'none';
    document.getElementById('showModalregister').style.display = 'block';
}
function CheckValidate() {
    var result = true;
    var pwd = document.getElementById('password').value;
    var comfirmPwd = document.getElementById('comfirmPwd').value;
    if(pwd.length < 8) {
        alert("Password error!!");
        result = false;
        
    } else if(pwd != comfirmPwd) {
        alert("Password nhập lại không đúng!! ");
        result = false;
    }
    return result;
}

// hiển thị giỏ hàng
function showModalCart() {
    var email = document.getElementById('username').value;
    document.getElementById('showModal').style.display = 'flex';
    if (email != undefined && email != null && email !="") {
        document.getElementById('showModalCart').style.display = 'block';
        document.getElementById('showComment').style.display = 'none';
        document.getElementById('showModalPayinCart').style.display = 'none';
        
    } else {
        // document.getElementById('showModalnotificationCart').style.display = 'block';
        document.getElementById('showComment').style.display = 'none';
        document.getElementById('showModalPayinCart').style.display = 'none';
    }
    
    
    //getCart();
}

//Comment
function checkComment() {
    var comment = document.getElementById("comment").value;
    var user = document.getElementById("username").value;
    var ok = true;
    document.getElementById('showModal').style.display = 'flex';
    if (user == "" || user == null) {
        document.getElementById('showComment').style.display = 'block';
        document.getElementById('showModalnotificationCart').style.display = 'none';
        document.getElementById('showModalCart').style.display = 'none';
        document.getElementById('showModalLogin').style.display = 'none';
        // document.getElementById('showModalCart').style.display = 'none';
        ok = false;
    }
    else{if(user != "") {
        if (comment == "") {
            document.getElementById('showCommentNull').style.display = 'block';
            document.getElementById('showModalnotificationCart').style.display = 'none';
            document.getElementById('showModalCart').style.display = 'none';
            document.getElementById('showModalLogin').style.display = 'none';
            document.getElementById('showModalCart').style.display = 'none';
            ok = false;
        } 
    }}
    return ok;
}
function closeModalCart() {
 
    document.getElementById('showModalnotificationCart').style.display = 'none';
    document.getElementById('showModal').style.display = 'none';
    document.getElementById('showModalCart').style.display = 'none';
    document.getElementById('showCommentNull').style.display = 'none';
    document.getElementById('showModalLogin').style.display = 'none';
    document.getElementById('showModalnotificationPay').style.display = 'none';
}
// hiển thị form thanh toán

function showModalPayinCart() {
    document.getElementById('showModalnotificationCart').style.display = 'none';
    var email = document.getElementById('username').value;
    document.getElementById('showModal').style.display = 'flex';
    if (email != undefined && email != null && email !="") {
        document.getElementById('showComment').style.display = 'none';
        document.getElementById('showModalPayinCart').style.display = 'block';
        document.getElementById('showModalCart').style.display = 'none';
        document.getElementById('showCommentNull').style.display = 'none';
    } else {
        document.getElementById('showComment').style.display = 'none';
        document.getElementById('showCommentNull').style.display = 'none';
        document.getElementById('showModalnotificationPay').style.display = 'block';
    }

    
    
    //getPay();
}

// hiện thị trang thanh toán từ form giỏ hàng
// function showModalPayinCart() {
    // Leo ADD
    // document.getElementById('showModal').style.display = 'flex';
    // document.getElementById('showModalCart').style.display = 'none';
    // document.getElementById('showModalPayinCart').style.display = 'block';
// }

function closeModalPayinCart() {
    document.getElementById('showComment').style.display = 'none';
    document.getElementById('showModalnotificationCart').style.display = 'none';
    document.getElementById('showModal').style.display = 'none';
    document.getElementById('showModalCart').style.display = 'none';
    document.getElementById('showCommentNull').style.display = 'none';
    document.getElementById('showModalnotificationPay').style.display = 'none';
}

// hiển thị form giỏ hàng từ form thang toán
function showModalCartinPay() {
    document.getElementById('showModalPayinCart').style.display = 'none';
    document.getElementById('showModalCart').style.display = 'block';
}




// xóa sản phẩm khỏi giỏ hàng
function deleteItem(str) {
    // debugger
    var id = "cart-"+str;
    if (str.length == 0) {
      document.getElementById(id).style.display ="block";
      return;
    } else {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          var test = this.responseText;
          document.getElementById(id).style.display ="none";
        }
      };
      xmlhttp.open("GET", "./php/cart_delete.php?id=" + str, true);
      xmlhttp.send();
    }
  }

  function insertItem(id) {
    //   debugsger
      var email = document.getElementById('username').value;
      var url = "./php/cart.php?id='"+id+"'&q='"+email+"'";
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // debugger
          var result = this.responseText;
          if(result == "success"){
            alert('đã thêm thành công');
            location.reload();
          } else {
              document.getElementById('showComment').style.display = 'none'; 
              document.getElementById('showCommentNull').style.display = 'none'; 
            document.getElementById('showModal').style.display = 'flex';
            document.getElementById('showModalnotificationCart').style.display = 'block';
          }
        }
      };
      xmlhttp.open("GET", url, true);
      xmlhttp.send();
  }
 