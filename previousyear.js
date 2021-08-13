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
function myClickFun()
{
    const branch=drop_list.Branch.value
    const semester=drop_list.Semester.value
    if(branch=="#" || semester=="#")
    {
        alert("Please Select Both Branch and Semester");
    }
    else if(branch=="engineering_science")
    {
        window.open('https://muquestionpapers.com/be/first-year-engineering/'+semester,'_blank');
    }
    else if(branch=="electronics")
    {
        window.open('https://muquestionpapers.com/be/electronics-engineering/'+semester,'_blank');
    }
    else if(branch=="computer_engineering")
    {
        window.open("https://muquestionpapers.com/be/computer-engineering/"+semester,"_blank");
    }
    else if(branch=="information_technology")
    {
        window.open('https://muquestionpapers.com/be/information-technology/'+semester,'_blank');
    }
    else if(branch=="electronics_and_telecommunication")
    {
        window.open('https://muquestionpapers.com/be/electronics-and-telecommunication/'+semester,'_blank');
    }
    else if(branch=="instrumentation")
    {
        window.open('https://muquestionpapers.com/be/instrumentation-engineering/'+semester,'_blank');
    }
    else
    {
        alert("Please Select Both Branch and Semester");
    }
}