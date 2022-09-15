	function Osszeadas()
	{
		var num1, num2, res;
		num1=Number(document.calc.szam1.value);
		num2=Number(document.calc.szam2.value);
		res = num1+num2;
		document.calc.eredmeny.value=res;
	}
	function Kivonas()
	{
		var num1, num2, res;
		num1=Number(document.calc.szam1.value);
		num2=Number(document.calc.szam2.value);
		res = num1-num2;
		document.calc.eredmeny.value=res;
	}
	function Szorzas()
	{
		var num1, num2, res;
		num1=Number(document.calc.szam1.value);
		num2=Number(document.calc.szam2.value);
		res = num1*num2;
		document.calc.eredmeny.value=res;
	}
	function Osztas()
	{
		var num1, num2, res;
		num1=Number(document.calc.szam1.value);
		num2=Number(document.calc.szam2.value);
		res = num1/num2;
		document.calc.eredmeny.value=res;
	}
	function delay(time) {
  return new Promise(resolve => setTimeout(resolve, time));
}

var cards = document.querySelectorAll('.card');

[...cards].forEach((card)=>{
  card.addEventListener( 'click', function() {
    card.classList.toggle('hatlap');
	delay(4000).then(() => card.classList.remove('hatlap'));
	
  });
 
});



