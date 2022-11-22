window.AnimationBubbles=function(e,t,n){function i(){return this}let o,c,r,a,l,u,m,s,d,g,p,v,y,f=!!("ontouchstart"in window||window.DocumentTouch&&document instanceof DocumentTouch),h=document.getElementById(e),x=document.getElementById(t),b=-100,_=-100,w=0,T=-1,M=!1,S=[],E={objects:{game_time:document.getElementById("game_time"),game_count:document.getElementById("game_count"),game_maxtime:document.getElementById("game_maxtime"),game_maxcount:document.getElementById("game_maxcount")},active:!1,gtag:!1,timeStart:0,currtime:performance.now(),time:0,time_max:0,time_max_text:"",speed:0,counter:0,counter_max:0,recalc:function(){let e=this;e.counter=0,e.timeStart=0;for(let t=0;t<S.length;t++)S[t].plugin.counter>e.counter&&(e.counter=S[t].plugin.counter,e.timeStart=S[t].plugin.timeStart)},recalcTime:function(e){i.timeStart+=e;for(let t=0;t<S.length;t++)S[t].plugin.counter>i.counter&&(S[t].plugin.timeStart+=e)},formatTime:function(e){let t=~~(e/6e4);return(t=t>0?t+"min ":"")+(e%6e4/1e3).toFixed(1)+"s"}},B={init:function(){o=Matter.Engine,c=Matter.Render,r=Matter.World,a=Matter.Bodies,l=Matter.Body,u=o.create(),(m=u.world).gravity.scale=5e-4,m.gravity.y=-1,s=c.create({element:h,engine:u,options:{width:h.getBoundingClientRect().width,height:h.getBoundingClientRect().height,wireframes:!1,background:""}}),g=a.circle(0,0,12,{label:"mousePoint",friction:1,frictionStatic:1,render:{visible:!1}}),p=Matter.Constraint.create({pointA:{x:0,y:0},bodyB:g,stiffness:1,render:{visible:!1},length:0}),v=s.canvas.width<s.canvas.height?s.canvas.width:s.canvas.height,y={bounce:1.1,color:"rgb(255,255,255)",count:10,size:[.08*v,.26*v],scale:[.3,1]},o.run(u),c.run(s),B.addToWorld(),Matter.Events.on(u,"collisionStart",function(e){let t=e.pairs;for(let e=0;e<t.length;e++){let n=t[e],i=void 0,o=void 0;if("mousePoint"==n.bodyA.label)i=n.bodyA,o=n.bodyB;else{if("mousePoint"!=n.bodyB.label)continue;i=n.bodyB,o=n.bodyA}Math.abs(i.velocity.y)<1&&Math.abs(i.velocity.x)<4||(o.plugin.counter||(o.plugin.timeStart=performance.now(),E.timeStart||(E.timeStart=o.plugin.timeStart)),o.plugin.counter++,o.render.opacity=o.render.opacity>=.5?o.render.opacity:o.render.opacity+.02,E.counter<o.plugin.counter&&(E.counter=o.plugin.counter,E.active),E.counter>E.counter_max&&(E.counter_max=E.counter),E.active&&(E.objects.game_count.innerHTML=E.counter,E.objects.game_maxcount.innerHTML=E.counter_max))}}),Matter.Events.on(s,"afterRender",function(e){d?(delta=(performance.now()-d)/1e3,d=performance.now(),fps=1/delta,fps<25&&w++,w>25&&i.emergencyClose()):(d=performance.now(),fps=0);for(let e=0;e<S.length;e++){if(S[e].position.y<-S[e].plugin.size||S[e].position.x<-S[e].plugin.size||S[e].position.y>s.canvas.width+S[e].plugin.size){S[e].plugin.counter&&(S[e].plugin.counter=0,S[e].plugin.timeStart=0,E.recalc()),Matter.Composite.remove(m,S[e],!0),S[e]=B.createRect(!0),r.add(m,S[e]);continue}let t=S[e];if(t.velocity.y<-t.plugin.maxSpeed){let e=-t.velocity.y-t.plugin.maxSpeed,n=t.velocity.y+(.1*Math.sqrt(e)+.05);l.setVelocity(t,{x:t.velocity.x,y:n})}else if(t.velocity.y>t.plugin.maxSpeed){let e=t.velocity.y-t.plugin.maxSpeed,n=t.velocity.y-(.1*Math.sqrt(e)+.05);l.setVelocity(t,{x:t.velocity.x,y:n})}if(t.velocity.x<-t.plugin.maxSpeed){let e=-t.velocity.x-t.plugin.maxSpeed,n=t.velocity.x+(.1*Math.sqrt(e)+.05);l.setVelocity(t,{x:n,y:t.velocity.y})}else if(t.velocity.x>t.plugin.maxSpeed){let e=t.velocity.x-t.plugin.maxSpeed,n=t.velocity.x-(.1*Math.sqrt(e)+.05);l.setVelocity(t,{x:n,y:t.velocity.y})}}p.pointA.x=b,p.pointA.y=_;let t=E.currtime-performance.now();if(t>500&&E.recalcTime(t),E.currtime=performance.now(),E.time=E.timeStart>0?performance.now()-E.timeStart:0,E.time>7e3&&E.counter>5&&(E.active=!0,UI.func.addClass(x,"active")),E.time>E.time_max&&(E.time_max=E.time,E.time_max_text=E.formatTime(E.time_max)),E.active){let e=E.formatTime(E.time);E.objects.game_time.innerHTML!=e&&(E.objects.game_time.innerHTML=e),E.objects.game_maxtime.innerHTML!=E.time_max_text&&(E.objects.game_maxtime.innerHTML=E.time_max_text),"function"!=typeof gtag||E.gtag||(gtag("event","game",{event_category:"activity"}),E.gtag=!0)}})},initEvents:function(){h.parentNode.parentNode.addEventListener("mousemove",function(e){if(!i.running)return;let t=document.documentElement,n=document.body;bounds=h.getBoundingClientRect(),b=f?(e.clientX||e.targetTouches[0].clientX||e.originalEvent.touches[0].clientX)-bounds.left:e.clientX,_=f?(e.clientY||e.targetTouches[0].clientY||e.originalEvent.touches[0].clientY)-bounds.top:e.clientY+(t&&t.scrollTop||n&&n.scrollTop||0)-(t.clientTop||0),g.collisionFilter.group=0}),h.parentNode.parentNode.addEventListener("mouseout",function(e){i.running&&(g.collisionFilter.group=-1)}),f&&(h.parentNode.parentNode.addEventListener("touchmove",function(e){if(!i.running)return;let t=document.documentElement,n=document.body;bounds=h.getBoundingClientRect(),b=f?(e.clientX||e.targetTouches[0].clientX||e.originalEvent.touches[0].clientX)-bounds.left:e.clientX,_=f?(e.clientY||e.targetTouches[0].clientY||e.originalEvent.touches[0].clientY)-bounds.top:e.clientY+(t&&t.scrollTop||n&&n.scrollTop||0)-(t.clientTop||0),g.collisionFilter.group=0}),h.parentNode.parentNode.addEventListener("mouseout",function(e){i.running&&(g.collisionFilter.group=-1)}),h.parentNode.parentNode.addEventListener("touchend",function(e){i.running&&(g.collisionFilter.group=-1)})),window.addEventListener("resize",function(){if(!i.running)return;let e=h.getBoundingClientRect().width,t=h.getBoundingClientRect().height;e==s.canvas.width&&t==s.canvas.height||(s.options.width=s.canvas.width=e,s.options.height=s.canvas.height=t,i.reset())})},createRect:function(e){let t=Matter.Common.random(0,s.canvas.width),n=e?1.6*s.canvas.height:Matter.Common.random(0,1.4*s.canvas.height),i=Matter.Common.random(y.size[0],y.size[1]),o=Matter.Common.random(1.5,2.5),c=a.rectangle(t,n,i,i,{restitution:y.bounce,render:{fillStyle:y.color,opacity:Matter.Common.random(.02,.14)},frictionAir:0,friction:1,frictionStatic:1,density:1e-4,chamfer:{radius:5},plugin:{timeStart:0,counter:0,maxSpeed:o,size:i}});return l.setVelocity(c,{x:0,y:.7*(1.5-o)}),l.setAngularVelocity(c,-Matter.Common.random(.005,.01)),c},updateParticles:function(){v=s.canvas.width>s.canvas.height?s.canvas.width:s.canvas.height;for(let e=0;e<y.count;e++){let e=B.createRect();S.push(e)}},addToWorld:function(){h.clientWidth&&h.clientHeight&&(S.length=0,B.updateParticles(),r.add(m,S),r.add(m,[g,p]))}};return 1!==n&&(B.init(),B.initEvents(),i.running=!0),i.emergencyClose=function(){M=!0,c.stop(s),r.clear(m),o.clear(u),s.canvas.remove(),s.canvas=null,s.context=null,s.textures={},i.running=!1},i.reset=function(){M||(r.clear(m),B.addToWorld())},i.stop=function(){M||(r.clear(m),clearTimeout(T),T=setTimeout(function(){c.stop(s),o.clear(u),s.canvas.remove(),s.canvas=null,s.context=null,s.textures={}},60),i.running=!1)},i.start=function(){M||(clearTimeout(T),B.init(),i.running=!0)},setInterval(function(){w=0},5e3),i};