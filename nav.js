window.onload=function(){
	var a=document.getElementsByClassName('ham')[0];
	a.onclick=function(){
			var b=document.getElementsByClassName('down')[0];
              if(b.style.maxHeight=="600px")
              	{
              		b.style.maxHeight="0px";
                    b.style.transition="0.9s ease"

              	}
              else
            	{
            		b.style.maxHeight="600px";
                    b.style.transition="0.9s ease"

            	}

	}
	
}
window.onresize=function(){
	var b=document.getElementsByClassName('down')[0];
    if(screen.width>600)
    {
    	b.removeAttribute('style');
    }
}