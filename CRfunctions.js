function setvisibility()
{
    
    if(document.getElementById('RbSearch_id').checked == true){
    document.getElementById('IdSelect').style.visibility = "visible";
    document.getElementById('NicSelect').style.visibility = "hidden";
    document.getElementById('NameSelect').style.visibility = "hidden";
    }
    else if(document.getElementById('RbSearch_nic').checked == true)
    {
    document.getElementById('IdSelect').style.visibility = "hidden";
    document.getElementById('NicSelect').style.visibility = "visible";
    document.getElementById('NameSelect').style.visibility = "hidden";
    }else if(document.getElementById('RbSearch_name').checked == true)
    {
    document.getElementById('IdSelect').style.visibility = "hidden";
    document.getElementById('NicSelect').style.visibility = "hidden";
    document.getElementById('NameSelect').style.visibility = "visible";
    }else
    {
    document.getElementById('IdSelect').style.visibility = "hidden";
    document.getElementById('NicSelect').style.visibility = "hidden";
    document.getElementById('NameSelect').style.visibility = "hidden";
    }
  
}
