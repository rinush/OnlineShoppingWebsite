var sum;
var price_of_product;
var a=[];
var count=0;
function buy_now(id,price)
{
	a[count]=document.getElementById(id);
	price_of_product=price;
	count=parseInt(count)+parseInt(1);
	amount_to_pay();
}

function amount_to_pay(){
	sum=parseInt(sum) + parseInt(price_of_product);
	document.write(sum);
}
