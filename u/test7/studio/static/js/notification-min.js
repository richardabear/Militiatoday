(function(a){a.notification=function(b){function m(a){var b=[[2,"One second","1 second from now"],[60,"seconds",1],[120,"One minute","1 minute from now"],[3600,"minutes",60],[7200,"One hour","1 hour from now"],[86400,"hours",3600],[172800,"One day","tomorrow"],[604800,"days",86400],[1209600,"One week","next week"],[2419200,"weeks",604800],[4838400,"One month","next month"],[29030400,"months",2419200],[58060800,"One year","next year"],[290304e4,"years",29030400],[580608e4,"One century","next century"],[580608e5,"centuries",290304e4]];var c=(new Date-a)/1e3;var d="ago",e=1;if(c<0){c=Math.abs(c);d="from now";e=1}var f=0,g;while(g=b[f++])if(c<g[0]){if(typeof g[2]=="string")return g[e];else return Math.floor(c/g[2])+" "+g[1]}return a}var c,d,e,f,g,h,i;b=a.extend({title:undefined,content:undefined,timeout:0,img:undefined,border:true,fill:false,showTime:false,click:undefined,icon:undefined,color:undefined,error:false},b);c=a("#notifications");if(!c.length){c=a("<div>",{id:"notifications"}).appendTo(a("body"))}d=a("<div>");d.addClass("notification animated fadeInLeftMiddle fast");if(b.error==true){d.addClass("error")}if(a("#notifications .notification").length>0){d.addClass("more")}else{c.addClass("animated flipInX").delay(1e3).queue(function(){c.removeClass("animated flipInX");c.clearQueue()})}e=a("<div>",{click:function(){if(a(this).parent().is(":last-child")){a(this).parent().remove();a("#notifications .notification:last-child").removeClass("more")}else{a(this).parent().remove()}}});e.addClass("hide");h=a("<div class='left'>");g=a("<div class='right'>");if(b.title!=undefined){var j="<h2>"+b.title+"</h2>";d.addClass("big")}else{var j=""}if(b.content!=undefined){var k=b.content}else{var k=""}i=a("<div>",{html:j+k});i.addClass("inner");i.appendTo(g);if(b.img!=undefined){f=a("<div>",{style:"background-image: url('"+b.img+"')"});f.addClass("img");f.appendTo(h);if(b.border==false){f.addClass("border")}if(b.fill==true){f.addClass("fill")}}else{if(b.icon!=undefined){var l=b.icon}else{if(b.error!=true){var l='"'}else{var l="c"}}icon=a('<div class="icon">').html(l);if(b.color!=undefined){icon.css("color",b.color)}icon.appendTo(h)}h.appendTo(d);g.appendTo(d);e.appendTo(d);if(b.showTime!=false){var n=Number(new Date);timeHTML=a("<div>",{html:"<strong>"+m(n)+"</strong> ago"});timeHTML.addClass("time").attr("title",n);timeHTML.appendTo(g);setInterval(function(){a(".time").each(function(){var b=a(this).attr("title");a(this).html("<strong>"+m(b)+"</strong> ago")})},4e3)}d.hover(function(){e.show()},function(){e.hide()});d.prependTo(c);d.show();if(b.timeout){setTimeout(function(){var a=d.prev();if(a.hasClass("more")){if(a.is(":first-child")||d.is(":last-child")){a.removeClass("more")}}d.remove()},b.timeout)}if(b.click!=undefined){d.addClass("click");d.bind("click",function(c){var d=a(c.target);if(!d.is(".hide")){b.click.call(this)}})}return this}})(jQuery);