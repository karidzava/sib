function readMore1() {
	document.getElementById("s1").classList.toggle("show");
	var s2 = document.getElementById("s2");
	var s3 = document.getElementById("s3");
	if(s2.classList.contains("show"))
	{
		s2.classList.remove("show");
	}

	if(s3.classList.contains("show"))
	{
		s3.classList.remove("show");
	}
}

function readMore2() {
	document.getElementById("s2").classList.toggle("show");
	var s1 = document.getElementById("s1");
	var s3 = document.getElementById("s3");
	if(s1.classList.contains("show"))
	{
		s1.classList.remove("show");
	}

	if(s3.classList.contains("show"))
	{
		s3.classList.remove("show");
		
	}
}
 
function readMore3() {
	document.getElementById("s3").classList.toggle("show");
	var s2 = document.getElementById("s2");
	var s1 = document.getElementById("s1");
	if(s2.classList.contains("show"))
	{
		s2.classList.remove("show");

	}

	if(s1.classList.contains("show"))
	{
		s1.classList.remove("show");
		
	}
}

// function myFunction() {
// 	document.getElementById("myDropdown").classList.toggle("show2");
//   }

function RedirectBuy(id)
  {
       jQuery.ajax({
       type: "GET",
       url: "buy.php", 
       data: 'id='+id,
       cache: false,
       success: function(response)
       {
		 document.write(response);
       }
     });
 }

 function Get_Summ(id)
  {
       jQuery.ajax({
       type: "GET",
       url: "check_buy.php", 
       data: 'id='+id,
       cache: false,
       success: function(response)
       {
		 alert("Успешная покупка!");
		 window.location.href = 'shop.php';
       }
     });
 }

 function Get_Quantity(quantity)
  {
    //    jQuery.ajax({
    //    type: "GET",
    //    url: "check_buy.php", 
    //    data: 'quantity='+quantity,
    //    cache: false,
    //  });
 }