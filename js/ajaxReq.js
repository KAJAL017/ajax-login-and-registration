function add_student() {
    var Stu_uname = $("#uname").val();
    var stu_email = $("#email").val();
    var Stu_upass = $("#upass").val();


    $.ajax({
        url: "student/addStudent.php",
        type:"POST",
        data:{

            uname :Stu_uname,
            uemail :stu_email,
            upass :Stu_upass,
        },
        success:function(data){
            console.log(data);
        }

    })

};


// Student Login

function stu_login(){

        let stu_email = $("#email").val();
        let stu_upass = $("#upass").val();

    $.ajax({

        url:"student/addStudent.php",
        method:"POST",
        data:{


                email :stu_email,
                upass :stu_upass,
        },
        success:function(data){
            console.log(data)
        }


    })
}