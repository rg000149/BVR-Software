// JavaScript Document
function logout111(id)
{
	if(confirm("Do you want to Logout Account?"))
	{
		this.document.dropdownmenu.id.value=id;
		this.document.dropdownmenu.act.value="logout";
		this.document.dropdownmenu.submit();
	}
}