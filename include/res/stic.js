function stic(elem,pot){

	this.el=elem;
	this.limite=this.el.getBoundingClientRect().top;
	this.top=pot;
	document.addEventListener('scroll',this.position.bind(this),false);
}

stic.prototype.position=function(){

	if(document.body.scrollTop>=this.limite-this.top){

		this.el.style.top=this.top+'px';
	}

	else{
		var ch=parseInt(document.body.scrollTop);
		this.el.style.top=(this.limite-ch)+"px";
	}
}

window.addEventListener('load',function(){

var all=document.getElementsByTagName("*");

	for(var i=0;i<all.length;i++){
	
		if(all[i].hasAttribute("data-stic")){
		
		new stic(all[i],all[i].getAttribute("data-stic"))
		}
	}
}, false);