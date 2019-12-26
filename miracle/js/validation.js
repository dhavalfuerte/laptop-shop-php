function buy_now_total(price,qty)
{
	var total=price*qty;
	document.getElementById('total').innerHTML=total;
}

function change_address()
{
	var check=document.getElementById('same').checked;
	if(check==true)
	{
		document.getElementById('d_address').style.display="none";
		document.getElementById('dn_address').style.display="block";
	}
	else
	{
		document.getElementById('d_address').style.display="block";
		document.getElementById('dn_address').style.display="none";
	}
}