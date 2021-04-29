
function validate(){


    
    let uname=document.getElementById('name').value;
    let id=document.getElementById('id').value;
    let desig=document.getElementById('desig').value;
    let email=document.getElementById('email').value;
    let bloodGroup=document.getElementById('bloodGroup').value;
    let phone=document.getElementById('phone').value;
    let address=document.getElementById('address').value;
    let password=document.getElementById('password').value;
    let cPass=document.getElementById('cPass').value;
    let gender=document.getElementById('gender');
    let dob=document.getElementById('dob').value;
    let profilePic=document.getElementById('profilePic').value;
    let qualification=document.getElementById('qualification').value;

    let ext = profilePic.substring(profilePic.lastIndexOf('.') + 1).toLowerCase();
    let picInfo= document.getElementById('profilePic');
    let yearCheck=dob.split("-");

    unameCheck();
    idCheck();
    desigCheck();
    mailCheck();
    bloodGroupCheck();
    phoneCheck();
    addressCheck();
    passwordCheck();
    genderCheck();
    dobCheck();
    profilePicCheck();
    qualificationCheck();

        function unameCheck(){
            if(uname=="") {
                document.getElementById('msg1').innerHTML="**name cannot be empty";
            }
            else{
                if(uname.length<3){
                    document.getElementById('msg1').innerHTML="**name must contain at least 3 characters";
                }
                else{
                    if(uname.charAt(0)=="0" || uname.charAt(0)=="1" || uname.charAt(0)=="2" || uname.charAt(0)=="3" || 
                    uname.charAt(0)=="4" || uname.charAt(0)=="5" || uname.charAt(0)=="6" || 
                    uname.charAt(0)=="7" || uname.charAt(0)=="8" || uname.charAt(0)=="9" || uname.charAt(0)=="!" ||
                    uname.charAt(0)=="@" || uname.charAt(0)=="$" || uname.charAt(0)=="%" || uname.charAt(0)=="&" ||
                    uname.charAt(0)=="*")
                    {
                        document.getElementById('msg1').innerHTML="**must start with a letter";
                    }
                }
            }
        }

    function idCheck(){
        if(id==""){
            document.getElementById('msg2').innerHTML="**id cannot be empty";
        }
    }
    function desigCheck(){
        if(desig==""){
            document.getElementById('msg3').innerHTML="**designation cannot be empty";
        }
    }
    
    function mailCheck(){
        if(email==""){
            document.getElementById('msg4').innerHTML="**email cannot be empty";
        }
        else{
            if (email.includes("@") && email.includes(".com")) {
                //document.getElementById('msg4').innerHTML="**email submitted";
            }
            else{
                document.getElementById('msg4').innerHTML="**not a valid email";
            }
        }
    }
    function bloodGroupCheck(){
        if(bloodGroup==""){
            document.getElementById('msg5').innerHTML="**bloodgroup cannot be empty";
        }
    }

    function phoneCheck(){
        if(phone==""){
            document.getElementById('msg14').innerHTML="**phone cannot be empty";
        }
        else{
            if(phone.length!=11){
                document.getElementById('msg14').innerHTML="phone no. must contain 11 digit";
            }
        }
    }
    
    function addressCheck(){
        if(address==""){
            document.getElementById('msg6').innerHTML="**address cannot be empty";
        }
    }
    function passwordCheck(){
        if(password==""){
            document.getElementById('msg8').innerHTML="**password cannot be empty";
        }
        if(cPass==""){
            document.getElementById('msg9').innerHTML="**confirm_pass cannot be empty";
        }
        else{
            if(password!=cPass){
                document.getElementById('msg9').innerHTML="**please check your password and confirm password";
                document.getElementById('msg8').innerHTML="**please check your password and confirm password";
            }
            else{
                if ( !password.includes("1") && !password.includes("2") && !password.includes("3") 
                && !password.includes("4") && !password.includes("5") && !password.includes("6")
                && !password.includes("7") && !password.includes("8") && !password.includes("9")) {
                    document.getElementById('msg8').innerHTML="**password must contain atleast one number";
                }
            }
        }
    }
    function genderCheck(){
        if(gender.checked==false){
            document.getElementById('msg10').innerHTML="**gender cannot be empty";
        }
    }

    function dobCheck(){
        if(dob==""){
            document.getElementById('msg11').innerHTML="**Date of Birth cannot be empty";
        }
        else{
            if(yearCheck[0]>2000){
                document.getElementById('msg11').innerHTML="**Please select Birth year before 2000";
            }
        }
    }

    function profilePicCheck(){
        if(profilePic==""){
            document.getElementById('msg12').innerHTML="**Picture cannot be empty";
        }
        else{
            if (ext != "png" && ext != "jpeg" && ext != "jpg"){
                document.getElementById('msg12').innerHTML="**only jpg, png & jpeg allowed";
            }
            else{
                for (var i = 0; i <= picInfo.files.length - 1; i++) {
                    let size = picInfo.files.item(i).size;
                    if (size > 4194304) {
                        document.getElementById('msg12').innerHTML="Picture size should not be more than 4MB";
                    } 
                }
            }       
        }
    }

    function qualificationCheck(){
        if(qualification==""){
            document.getElementById('msg13').innerHTML="**qualification cannot be empty";
        }
    }
}
