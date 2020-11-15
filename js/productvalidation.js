$(document).ready(function()
{
      
    $("#f1").submit(function(e)
    {
        let pname= $("#pname").val();
        let pcost= $("#pcost").val();
        let pfile= $("#pfile");
        if(pname.length <=0 || pcost.length <=0 ||pfile.files.length <=0)
        {
            e.preventDefault();
            alert("Please Enter valid category");
           
        }
        else 
        {
             alert("valid");
        }
    })
    
})