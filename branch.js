$(function(){
    $("#Branch").on("change",function(){
        var levelClass = $('#Branch').find('option:selected').attr('class');
        console.log(levelClass);
        $('#Semester option').each(function () {
            var self = $(this);
            if (self.hasClass(levelClass) || typeof(levelClass) == "undefined") {
                self.show();
            } else {
                self.hide();
            }
        });
    });
});
 function myOnClickFun(){
     const branch=drop_list.Branch.value
     const semester=drop_list.Semester.value
     if(branch!="#" && semester!="#"){
     window.location.href=branch+"/"+semester+".html"
     }
     else{
         alert("Please Select Both Branch and Semester");
     }
 }
